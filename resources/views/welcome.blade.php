@extends('layout')
@section('title','Home')
@section('content')
    <h1 class="title">Welcome Friends!!</h1>

    <ul>
            @foreach ($tasks as $task)
        <li>
            {{$task}}
        </li>
            @endforeach
    </ul>

    <a href="/projects">Projects</a>
    
@endsection