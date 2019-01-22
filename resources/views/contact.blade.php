@extends('layout')
@section('title','Contact')
@section('content')
    <h2 class="title">Contact Form</h2>
    <div class="field">
            <label class="label">Email</label>
            
            <div class="control">
              <input class="input" type="email" placeholder="e.g. juan@tamod.com">
            </div>
          </div>
        <label class="label">Message</label>
            <div class="control">
                <textarea class="textarea" placeholder="Message..." rows="7"></textarea>
            </div>
        

        <div class="control">
                <button class="button is-primary" style="margin-top:20px; padding-right:25px;">Send Message</button>
        </div>

@endsection
    