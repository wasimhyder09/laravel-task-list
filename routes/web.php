<?php

use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
  $tasks = \App\Models\Task::latest()->get();
  return view('index', [
    'tasks' => $tasks
  ]);
})->name('tasks.index');

Route::get('/tasks/{id}', function ($id) {
  $task = \App\Models\Task::findOrFail($id);
  return view('show', ['task' => $task]);
})->name('tasks.show');
