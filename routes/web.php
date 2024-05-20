<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/','login');

Route::post('memberlogin', [MemberController::class,'memberlogin']);

Route::get('tasks',[TaskController::class, 'index'])->middleware('checklogin');
Route::get('ongoing',[TaskController::class, 'pendingtasks']);
Route::view('deadlines', 'deadlinetasks');

Route::view('ongoingtasks', 'userongoingtasks');
Route::view('taskdeadlines', 'userdeadlinetasks');

Route::get('comments', [CommentController::class, 'index'])->middleware('checklogin');
Route::get('user/comments', [CommentController::class, 'usercomments'])->middleware('checklogin');
Route::post('editcomment', [CommentController::class, 'showData'])->middleware('checklogin');
Route::post('comment/delete', [CommentController::class, 'deletecomments'])->middleware('checklogin');
Route::post('updatecomment',[CommentController::class, 'updatecomment']);

Route::post('inserttask',[TaskController::class, 'inserttask']);
Route::get('edittask/{id}', [TaskController::class, 'showData'])->middleware('checklogin');
Route::get('viewtask/{id}', [TaskController::class, 'viewData'])->middleware('checklogin');
Route::post('updatetask',[TaskController::class, 'updatetask']);
Route::get('deletetask/{id}',[TaskController::class, 'delete'])->middleware('checklogin');
Route::post('tasks/multidelete',[TaskController::class, 'multidelete'])->middleware('checklogin');

Route::get('editcomment/{id}', [CommentController::class, 'showData'])->middleware('checklogin');
Route::post('updatecomment',[CommentController::class, 'updatecomment']);

Route::post('taskstatus',[TaskController::class, 'updatestatus']);
Route::post('taskresume',[TaskController::class, 'taskresume']);
Route::get('usertasks',[TaskController::class,'usertask'])->middleware('checklogin');

Route::view('taskdetails','taskdetails');
Route::post('updatecreate',[TaskController::class,'updatecreate']);
Route::post('updatedate',[TaskController::class,'updatedate']);
Route::post('updateparticipants',[TaskController::class,'updateparticipants']);
Route::post('updateresponsible',[TaskController::class,'updateresponsible']);

Route::get('users',[MemberController::class,'index'])->middleware('checklogin');
Route::post('insertuser',[MemberController::class, 'insertuser']);
Route::get('editmember/{id}', [MemberController::class, 'showData'])->middleware('checklogin');
Route::post('updateuser',[MemberController::class, 'updateuser']);
Route::get('deletemember/{id}',[MemberController::class, 'delete'])->middleware('checklogin');
Route::post('users/multidelete',[MemberController::class, 'multidelete'])->middleware('checklogin');

Route::post('addcomment',[CommentController::class,'addcomment']);


Route::get('logout', function () {
if(session()->has('adminuser'))
{
    session()->pull('adminuser', null);
}
return redirect('/');
});


/////////// Push Notification /////////

Route::post('save-token', [TaskController::class, 'saveToken']);
Route::post('send-notification', [TaskController::class, 'sendNotification']);
