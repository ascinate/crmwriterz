<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\DB;


class MemberController extends Controller
{
    //
    public function index()
    {
        $data = Member::where('is_active','Y')->get();
        return view('users',['datas' => $data]);
    }

    public function insertuser(Request $request)
    {
        $member = new Member();
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $password = substr(str_shuffle($str_result), 0, 8);

        $member->email = $request->email;
        $member->name = $request->name;
        $member->phone = $request->phone;
        $member->password = $password;
        $member->designation = $request->designation;
        $member->role = $request->role;
        $member->create_date = date('Y-m-d');

        $member->save();
        return redirect('users');
    }

    public function showData($id)
    {
        $data = Member::find($id);
        return view('edituser',['data' => $data]);
    }

    public function updateuser(Request $request)
    {
        $member = Member::find($request->id);

        $member->email = $request->email;
        $member->name = $request->name;
        $member->phone = $request->phone;
        $member->designation = $request->designation;
        $member->role = $request->role;
        $member->password = $request->password;

        $member->save();
        return redirect('users');
    }

    public function delete($id)
    {
        $member = Member::find($id);
        $member->delete();
        return redirect('users');
    }

    function memberlogin(Request $request)
    {
        $credential = new Member();

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credential->email = $request->email;
        $credential->password = $request->password;

        $data = DB::table('members')
                    ->where('email',$credential->email)
                    ->where('password', $credential->password)->get();

        $count = $data->count();

        if($count!=0)
        {
            $request->session()->put('userid',$data[0]->id);
            $request->session()->put('username',$data[0]->name);
            $request->session()->put('adminuser',$credential->email);
            $request->session()->put('role',$data[0]->role);

            if($data[0]->role=='Administrator')
            {
                return redirect('tasks');
            }
            else
            {
                return redirect('usertasks');
            }
        }
        else
        {
            return redirect('/')->with('error', 'WRONG CREDENTIALS!');
        }
    }

    public function multidelete(Request $request)
    {
        $ids = $request->id;
        $explode = explode(",",$ids);

        for($x=0;$x<=count($explode)-1;$x++)
        {
            $query = Member::where('id',$explode[$x])->delete();
        }

        echo 'Succesful';
    }
}
