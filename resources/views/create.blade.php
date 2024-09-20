@extends('layouts.app')

@section('title') Add task @endsection

@section('content')
  <form method="post" action="{{route('tasks.store')}}">
    @csrf
    <div>
      <label for="title">Title</label>
      <input type="text" id="title" name="title" />
    </div>
    <div>
      <label for="description">Description</label>
      <textarea name="description" id="description" rows="5"></textarea>
    </div>
    <div>
      <label for="long_description">Long Description</label>
      <textarea name="long_description" id="long_description" rows="10"></textarea>
    </div>
    <button type="submit">Add task</button>
  </form>
@endsection
