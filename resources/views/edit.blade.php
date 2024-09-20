@extends('layouts.app')

@section('title') Edit task @endsection

@section('styles')
  <style>
    .error-message {
      color: red;
      font-size: 0.8rem;
    }
  </style>
@endsection

@section('content')

  <form method="post" action="{{route('tasks.update', ['task' => $task->id])}}">
    @csrf
    @method('PUT')
    <div class="mb-4">
      <label for="title">Title</label>
      <input type="text" id="title" name="title" value="{{$task->title}}" @class(['border-red-500' => $errors->has('title')]) />
      @error('title')
      <p class="error-message">{{$message}}</p>
      @enderror
    </div>
    <div class="mb-4">
      <label for="description">Description</label>
      <textarea name="description" id="description" rows="5" @class(['border-red-500' => $errors->has('description')])>{{$task->description}}</textarea>
      @error('description')
      <p class="error-message">{{$message}}</p>
      @enderror
    </div>
    <div class="mb-4">
      <label for="long_description">Long Description</label>
      <textarea name="long_description" id="long_description" rows="10" @class(['border-red-500' => $errors->has('long_description')])>{{$task->long_description}}</textarea>
      @error('long_description')
      <p class="error-message">{{$message}}</p>
      @enderror
    </div>
    <div class="flex gap-2 items-center">
      <button type="submit" class="btn">Edit task</button>
      <a href="{{route('tasks.show', [$task])}}" class="link">Cancel</a>
    </div>
  </form>
@endsection
