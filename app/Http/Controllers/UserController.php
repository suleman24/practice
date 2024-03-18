<?php

namespace App\Http\Controllers;

use Dotenv\Util\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show(){
        $users = DB::table('students')->get();
        // return $users;

        // foreach ($users as $user){
        //     echo $user->name ."<br>";
        // }

        return view('users',['users' => $users]);
    }
    public function singleusershow(string $id){
        $user = DB::table('students')->where('id',$id)->get();
        return view('user',['user' => $user]);
    }
    public function adduser(Request $req){
        $user = DB::table('students')
        ->insert([
            'name'=> $req->name,
            'email'=>$req->email,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        if($user)
        {
           return redirect()->route('allusers');
        }
                else{
                    echo 'Unsuccessful';
                }
    }

    public function updatePage(string $id){
        $user = DB::table('students')->find($id);
        return view('updateuser',['user' => $user]);
    }


    public function updateuser(Request $req, $id){
        $user = DB::table('students')->where('id', $id )
        ->update([
            'name'=> $req->name,
            'email'=>$req->email,
            'updated_at'=>now()
        ]);
        if($user)
        {
            return redirect()->route('allusers');
        }
                else{
                    echo 'Unsuccessful';
                }
    }

    public function deleteuser(string $id){
        $user = DB::table('students')->where('id', $id )
        ->delete();
        if($user)
        {
            return redirect()->route('allusers');
        }
                else{
                    echo 'Unsuccessful';
                }
    }
}
