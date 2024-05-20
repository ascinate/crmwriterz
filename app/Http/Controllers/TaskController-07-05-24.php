<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    //
    public function index()
    {
        $data = Task::all();
        return view('tasks', ['datas'=>$data]);
    }

    public function pendingtasks()
    {
        //$data = Task::Where('status', 'Ongoing');
        $pendingtask = Task::where('status', 'Ongoing');
        return view('ongoingtasks', ['pending'=>$pendingtask]);
    }

    public function usertask()
    {
        $id = session('userid');
        //$data = Task::where('responsible_person', $id)->orWhereRaw('FIND_IN_SET('.$id.',"participants")')->get();
        $data = Task::all();
        return view('usertasks', ['datas'=>$data]);
    }

    public function showData($id)
    {
        $userid = session('userid');
        $data = Task::find($id);
        DB::table('commentcounts')->where('userid', $userid)->where('taskid',$id)->delete();
        return view('taskdetails',['data' => $data]);
    }

    public function viewData($id)
    {
        $userid = session('userid');
        $data = Task::find($id);
        DB::table('commentcounts')->where('userid', $userid)->where('taskid',$id)->delete();
        return view('viewtaskdetails',['data' => $data]);
    }

    public function inserttask(Request $request)
    {
        $task = new Task();

        $responsible =  @implode(",",$request->responsible_person);

        if($request->participants!='')
        {
            $participants = @implode(",",$request->participants);
        }
        else
        {
            $participants = '';
        }

        $task->created_by =  session('userid');
        $task->responsible_person = $responsible;
        $task->task_name = $request->task_name;
        $task->task_description = $request->task_description;
        $task->participants = $participants;
        $task->deadline = $request->deadline;
        $task->priority = $request->priority;
        $task->create_date = date('Y/m/d h:i:s');

        if($request->hasFile('attachments'))
        {
            foreach($request->file('attachments') as $photo)
            {
                $name = $photo->getClientOriginalName();
                $photo->move(public_path().'/uploads/', $name);
                $data[] = $name;
            }

            $task->attachments = json_encode($data);
        }

        $task->save();
        return redirect('tasks');
    }

    public function updatetask(Request $request)
    {
        $task = Task::find($request->id);

        $task->task_name = $request->task_name;
        $task->task_description = $request->task_description;
        $task->priority = $request->priority;

        if($request->hasFile('attachments'))
        {
            foreach($request->file('attachments') as $photo)
            {
                $name = $photo->getClientOriginalName();
                $photo->move(public_path().'/uploads/', $name);
                $data[] = $name;
            }

            $task->attachments = json_encode($data);
        }

        $task->save();
        return redirect('tasks');
    }

    public function updatedate(Request $request)
    {
        $task = Task::find($request->id);
        $task->deadline = $request->deadline;

        $task->save();
        return redirect('edittask/'.$request->id);
    }

    public function updatecreate(Request $request)
    {
        $task = Task::find($request->id);
        $task->created_by = $request->created_by;

        $task->save();
        return redirect('edittask/'.$request->id);
    }

    public function updateparticipants(Request $request)
    {
        $task = Task::find($request->id);
        $participants = @implode(",",$request->participants);
        $task->participants = $participants;

        $task->save();
        return redirect('edittask/'.$request->id);
    }
	
	public function updateresponsible(Request $request)
    {
        $task = Task::find($request->id);
		$task->responsible_person = $request->responsible_person;
        $task->save();
        return redirect('edittask/'.$request->id);
    }

    public function delete($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect('tasks');
    }

    public function updatestatus(Request $request)
    {
        DB::table('tasks')
              ->where('id', $request->id)
              ->update(['status'=>'Completed']);
    }

    public function taskresume(Request $request)
    {
        DB::table('tasks')
              ->where('id', $request->id)
              ->update(['status'=>'Ongoing']);
    }

    public function multidelete(Request $request)
    {
        $ids = $request->id;
        $explode = explode(",",$ids);

        for($x=0;$x<=count($explode)-1;$x++)
        {
            $query = Task::where('id',$explode[$x])->delete();
        }

        echo 'Succesful';
    }

}
