@extends('layouts.app')
@section('title', $task->title)
@section('content')
  <div class="mb-4">
    <a href="{{route('tasks.index')}}" class="link">&larr; Go back to task list</a>
  </div>
<p class="mb-4 text-slate-700">{{$task->description}}</p>

@if($task->long_description)
  <p class="mb-4 text-slate-700">{{$task->long_description}}</p>
@endif
<p class="mb-4 text-sm text-slate-500">Created {{$task->created_at->diffForHumans()}} &#8226; Updated {{$task->updated_at->diffForHumans()}}</p>
<p class="mb-4">
  @if($task->completed )
    <span class="font-medium text-green-500">Completed</span>
  @else
    <span class="font-medium text-red-500">Not completed</span>
  @endif
</p>
<div class="flex gap-2">
  <a href="{{route('tasks.edit', $task)}}" class="btn">Edit</a>
  <form action="{{route('tasks.toggle-complete', $task)}}" method="post">
    @csrf
    @method('PUT')
    <button type="submit" class="btn">{{$task->completed ? 'Mark incomplete' : 'Mark complete'}}</button>
  </form>
  <form action="{{route('tasks.destroy', $task)}}" method="post">
    @csrf
    @method('delete')
    <button type="submit" class="btn">Delete</button>
  </form>
</div>
@endsection


