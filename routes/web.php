<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


function getUsers(){
    return $users = [1=>['name'=>'Ali','age'=>'19','city'=>'NewYork'],
    2=>['name' => 'Sara','age' => 25,'city' => 'Los Angeles'],
    3=>['name' => 'Ahmed','age' => 30,'city' => 'Chicago'],
];

}

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/post', function () {
    return view('post');
});

// Route::get('/users', function () {

//     return view('users');
// });


// Route::get('/user/{id}', function ($id) {
//     $users = getUsers();
//     abort_if(!isset($users[$id]),404);
//     $user = $users[$id];
//     return view('user');
// })->name('view.user');

Route::controller(UserController::class)->group(function(){
    Route::get('users', 'show')->name('allusers');
    Route::get('/user/{id}','singleusershow')->name('view.user');
    Route::post('/add', 'adduser')->name('addUser');
    Route::get('/updatepage/{id}', 'updatePage')->name('update.page');
    Route::post('/update/{id}', 'updateuser')->name('update.user');
    Route::get('/delete/{id}', 'deleteuser')->name('delete.user');

});




Route::view('newuser','/adduser');

