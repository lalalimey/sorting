<?php

use App\Http\Controllers\GoogleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StaffController;

use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');



Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
Route::middleware(['auth'])->group(function (){
    Route::view('main','main');
    Route::get('/sorting/{id}', function ($id){
        return view('sorting', ['id'=>$id]);
    });
});
Route::prefix('staff')->middleware(['staff'])->group(function (){
    Route::view('project','project');
    Route::get('/project/{id}', function ($id){
        return view('edit',['id'=>$id]);
    });
    Route::post('/project/adddepartment',[ProjectController::class,'adddepartment']);
    Route::post('/addproject',[ProjectController::class,'addProject']);
});

