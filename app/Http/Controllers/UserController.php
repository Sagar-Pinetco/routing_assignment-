<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    //

    function show()
    {

         $data =  User::all();
        return view('dashboard', ['user' => $data]);
    }
    function updated(Request $req)
    {

        $id =  $req->input('id');
        $user = User::find($id);
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->save();
        $req->session()->flash('name',$req->name.' Data Updated');
        return redirect('/');
    }
    function update($id,Request $req)
    {
        $user = User::find($id);
        //  $data =  User::all();
        return view('update', ['update' => $user]);
    }
    function delete($id,Request $req)
    {
         $user = User::find($id);
        $data = $user->name;
        $user->delete();
        $req->session()->flash('name',$data.' Data Delete');
        // return $req->input();
        return redirect('/');
    }

    function insert(Request $req)
    {

        $req->validate([
            'name' => 'required',
        ]);
            $user = new User;
            $user->name = $req->name;
            $user->email = $req->email;
            $user->password = $req->password;
            $user->save();
        $req->session()->flash('name',$req->name.' Data Insert');
        // return $req->input();
        return redirect('/');
    }
}
