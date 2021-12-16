<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminCrud ;

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
Route :: get('/', [AdminCrud::class, 'home'])->name('home');
Route :: get('/add', [AdminCrud::class, 'add_post'])->name('add');
Route :: post('/add-post',[AdminCrud::class, 'addpost'])->name('add-post');
Route :: get('/admin',[AdminCrud::class, 'getdata'])->name('get-data');
Route :: get('/view/{id}', [AdminCrud::class, 'dataview'])->name('data-view');
Route :: get('/edit-post/{id}', [AdminCrud::class, 'editpost'])->name('edit.post');
Route :: post('update-post',[AdminCrud::class, 'updatepost'])->name('update-post');
Route :: get('/delete-post/{id}', [AdminCrud::class, 'deletepost'])->name('delete-post');

