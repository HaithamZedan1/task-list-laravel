<?php
use App\Http\Requests\TaskRequest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Controllers\TaskController;
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

Route::get('/',[TaskController::class,'index'])->name('tasks.index');

Route::get('/task/create',[TaskController::class,'create'])->name('tasks.create');

Route::Post('/', [TaskController::class,'store'])->name('tasks.store');

Route::get('/task/{task}',[TaskController::class,'show'])->name('tasks.show');

Route::get('/task/{task}/edit',[TaskController::class,'edit'])->name('tasks.edit');

Route::Put('/{task}',[TaskController::class,'update'])->name('tasks.update');

Route::delete('/{task}/delete',[TaskController::class,'destroy'])->name('tasks.destroy');

Route::put('/task/{task}/toggle-completed',[TaskController::class,'toggle'])->name('tasks.toggle-completed');