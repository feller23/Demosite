@extends('layouts.app')

    @section('content')
    <p class="btn btn-default btn-sm"><a href="/posts">go back</a></p>
           <div class="list-group">
               <div class="list-group-item">
                        <h3>{{$post->title}}</h3>
                        <p>{!!$post->body!!}</p>
                      <p><small>written on {{$post->created_at}}</small></p>
               </div>
               
           </div>
    
@endsection



