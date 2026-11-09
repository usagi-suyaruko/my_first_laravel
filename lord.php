<a href="users">ユーザー一覧</a>
<a href="/users/create">新規作成</a>

<?php
use app\Http\Controller\UserController;
Route::get('/users',[UserController::class,'index'])->name('users.index');// ユーザー一覧
Route::get('/users/create',[UserController::class,'create'])->name('users.create');// 新規作成
Route::get('/users/{id}',[UserController::class,'show'])->name('users.show');
namespace App\Http\Controllers;
?>