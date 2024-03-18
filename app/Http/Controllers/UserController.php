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
}
