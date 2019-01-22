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
                                          <input class="input is-primary" type="text" name="title" id="" placeholder="Project title">
                                        </div>
                                </div>
                                
                            </div>
                            
                            <br>
                            <div>
                                    <textarea class="textarea" name="description" id="" placeholder="Project description"></textarea>
                            </div>

                            <br>
                            <div class="container">
                                <button class="button is-link" type="submit">Create Project</button>
                            </div>
                        </form>
                
                  
                
                    </div>
                </div>
          </div>
        </div>
      </section>


