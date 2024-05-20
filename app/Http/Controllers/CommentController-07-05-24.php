<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Task;
use App\Models\Commentcount;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    //
    public function addcomment(Request $request)
    {
        $comment = new Comment();

        $comment->task_id = $request->task_id;
        $comment->comment = $request->comment;
        $comment->sender = session('userid');
        $comment->receiver = $request->created_by;

        if($request->hasFile('files'))
        {
            foreach($request->file('files') as $photo)
            {
                $name = $photo->getClientOriginalName();
                $photo->move(public_path().'/uploads/', $name);
                $data[] = $name;
            }

            $comment->files = json_encode($data);
        }

        $result = $comment->save();

        if($result)
        {
            $data = Task::where('id',$request->task_id)->get();
            $participants = explode(",",$data[0]->participants);

            if(session('role')=='Administrator')
            {
                $responsible = $data[0]->responsible_person;

                /*DB::table('commentcounts')->insert([
                    'userid' => $responsible,
                    'taskid' => $request->task_id
                ]);*/
                $count = new Commentcount();
                $count->userid = $responsible;
                $count->taskid = $request->task_id;

                $count->save();
            }
            else
            {
                DB::table('commentcounts')->insert([
                    'userid' => $data[0]->created_by,
                    'taskid' => $request->task_id
                ]);
           }

            for($x=0;$x<=count($participants)-1;$x++)
            {
                DB::table('commentcounts')->insert([
                    'userid' => $participants[$x],
                    'taskid' => $request->task_id
                ]);
            }
        }

        if(session('role')=='Administrator')
        {
            return redirect('edittask/'.$request->task_id);
        }
        else
        {
            return redirect('viewtask/'.$request->task_id);
        }
    }

    public function index()
    {
        //$data = DB::table('commentcounts')->get();
        $data = Commentcount::select('taskid')->distinct()->where('userid', session('userid'))->get();
        return view('comments',['datas' => $data]);
    }

    public function usercomments()
    {
        //$data = DB::table('commentcounts')->get();
        $data = Commentcount::select('taskid')->distinct()->where('userid', session('userid'))->get();
        return view('usercomments',['datas' => $data]);
    }

    public function deletecomments(Request $request)
    {
        $data=Comment::find($request->id);
        $data->delete();

        echo 'Successful';
    }

    public function showData(Request $request)
    {
        $data = Comment::find($request->id);
        return view('updatecomments',['data' => $data]);
    }

    public function updatecomment(Request $request)
    {
        $data = Comment::find($request->id);
        $task = Comment::where('id',$request->id)->get();
        $taskid = $task[0]->task_id;

        $data->comment = $request->comment;

        $data->save();
        return redirect('edittask/'.$taskid);
    }
}
