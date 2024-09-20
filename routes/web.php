<?php

use \Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use Illuminate\Support\Facades\Route;
use \App\Models\Task;

Route::get('/', function () {
  return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
  $tasks = Task::latest()->get();
  return view('index', [
    'tasks' => $tasks
  ]);
})->name('tasks.index');

Route::view('/tasks/create', 'create')->name('tasks.create');

Route::get('/tasks/{task}/edit', function (Task $task) {
  return view('edit', ['task' => $task]);
})->name('tasks.edit');

Route::get('/tasks/{task}', function (Task $task) {
  return view('show', ['task' => $task]);
})->name('tasks.show');

Route::post('/tasks', function (TaskRequest $request) {
  $task = Task::create($data = $request->validated());
  return redirect()->route('tasks.show', ['task' => $task->id])->with('success', 'Task created successfully!');
})->name('tasks.store');

Route::put('/tasks/{task}', function (Task $task, TaskRequest $request) {
  $task->update($request->validated());
  return redirect()->route('tasks.show', ['task' => $task->id])->with('success', 'Task updated successfully!');
})->name('tasks.update');
