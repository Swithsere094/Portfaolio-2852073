<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home', ['nombre' => "Daniel"])->name('home');
Route::view('about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');
Route::post('contact', MessageController::class)->name('contact.submit');

Route::get('project', [ProjectController::class, 'index'])->name('project.index');
Route::get('project/create', [ProjectController::class, 'create'])->name('project.create');
Route::get('project/{project}', [ProjectController::class, 'show'])->name('project.show');
Route::post('project/store', [ProjectController::class, 'store'])->name('project.store');
Route::get('project/edit/{project}', [ProjectController::class, 'edit'])->name('project.edit');
Route::patch('project/{project}', [ProjectController::class, 'update'])->name('project.update');
Route::delete('project/{project}', [ProjectController::class, 'destroy'])->name('project.delete');

Auth::routes();
