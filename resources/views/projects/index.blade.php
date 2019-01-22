@extends('layout')

@section('content')

<h1 class="title">Projects</h1>
     
                
                <ul>
                    @foreach ($projects as $project)
                        <li>
                            <a href="/projects/{{$project->id}}">
                                {{ $project->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
    
                <form action="/projects/create">
                <div> <br>
                    <button class="button is-link" type="submit">Create New</button>
                </div>     
                </form> 
      
@endsection