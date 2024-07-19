@extends('layouts.master')
@section('title','Task List')
@section('content')
<nav class="mb-4"><a href="{{route('tasks.create')}}" 
class="link">Add Task</a></nav>
@foreach ($tasks as $task)
<li><a href=" {{url("/task",['task'=>$task->id])}}"
@class(['line-through'=>$task->completed])>{{$task->title}}</a></li>
@endforeach
@if($tasks->count())
<nav class="mt-4">{{$tasks->links()}}</nav>
@endif
@endsection
