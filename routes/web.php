<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


function getUsers(){
    return $users = [1=>['name'=>'Ali','age'=>'19','city'=>'NewYork'],
    2=>['name' => 'Sara','age' => 25,'city' => 'Los Angeles'],
    3=>['name' => 'Ahmed','age' => 30,'city' => 'Chicago'],
];

}

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/about', function () {
    return view('about');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/users', function () {

    return view('users');
});


// Route::get('/user/{id}', function ($id) {
//     $users = getUsers();
//     abort_if(!isset($users[$id]),404);
//     $user = $users[$id];
//     return view('user');
// })->name('view.user');


Route::get('users', [UserController::class,'show']);
Route::get('/user/{id}', [UserController::class,'singleusershow'])->name('view.user');