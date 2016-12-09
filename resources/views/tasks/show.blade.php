@extends('layouts.app')

@section('content')
    <div class="container well well-small">
        <h1>{{ $task->title }}</h1>
        <p>{{ $task->description }}</p>
    </div>
@endsection
