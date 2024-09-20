@extends('layouts.app')
@section('title', $task->title)
@section('content')
<p>{{$task->description}}</p>

@if($task->long_description)
  <p>{{$task->long_description}}</p>
@endif
<p>{{$task->created_at}}</p>
<p>{{$task->updated_at}}</p>
<p>{{$task->completed ? 'Completed' : 'Not completed'}}</p>
<div>
  <a href="{{route('tasks.edit', $task)}}">Edit</a>
</div>
<div>
  <form action="{{route('tasks.toggle-complete', $task)}}" method="post">
    @csrf
    @method('PUT')
    <button type="submit">{{$task->completed ? 'Mark incomplete' : 'Mark complete'}}</button>
  </form>
</div>
  <div>
    <form action="{{route('tasks.destroy', $task)}}" method="post">
      @csrf
      @method('delete')
      <button type="submit">Delete</button>
    </form>
  </div>
@endsection


