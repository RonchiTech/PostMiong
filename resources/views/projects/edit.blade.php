@extends('layout')

@section('content')
 
    <h1 class="title">Edit Project</h1>   

<form action="/projects/{{$project->id}}" method="post">

    @method('PATCH')
    @csrf
        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text" class="input" placeholder="Title" value="{{$project->title}}" name="title">
            </div>
        </div>

        <div class="field">
            <label for="description" class="label">Description</label>

            <div class="control">
                    <textarea class="textarea" placeholder="Description..." name="description" >{{$project->description}}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                 <button class="button is-info" type="submit"> Update Project</button>
            </div>
        </div>
    </form>
    <br>
    <form method="POST" action="/projects/{{$project->id}}">

            @method('DELETE')
            @csrf
           
            <div class="field">
                <div class="control">
                  <button class="button is-danger" type="submit">Delete Project</button>
                </div>
            </div>
        </form>

        
        
    
@endsection