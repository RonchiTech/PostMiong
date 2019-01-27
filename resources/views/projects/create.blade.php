@extends('layout')

@section('content')


<br>
<section class="hero">
        <div class="hero-body">
          <div class="container">
                <div class="container">
                    <div class="notification">       
                        <h1 class='title'>
                           Create New Projects
                        </h1>
            
                        <form action="/projects" method="POST">
                
                            @csrf
                            
                            <div>
                                <div class="field">
                                    <div class="control">
                                    <input class="input {{$errors->has('title') ? 'is-danger' : 'is-primary '}}" type="text" name="title" id="" placeholder="Project title" value='{{old('title')}}' >
                                    </div>
                                </div>
                                
                            </div>
                            
                            <br>
                            <div>
                            <textarea class="textarea  {{$errors->has('description') ? 'is-danger' : 'is-primary '}}" name="description" id="" placeholder="Project description" >{{old('description')}}</textarea>
                            </div>

                            <br>
                            <div class="container">
                                <button class="button is-link" type="submit">Create Project</button>
                            </div>

                            <br>
                            @if($errors->any())
                                <div class="notification is-danger">
                                    <ul>
                                        @foreach($errors->all() as $error )
                                        <li>
                                            [+] {{$error}}
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </form> 
                    </div>
                </div>       
            </div>
        </div>
    </section>     
    


