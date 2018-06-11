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
           <hr>
           <div class="row">
               <div class="col-md-1">
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">edit post</a>
               </div>
               <div class="col-md-1">
                    {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>''])!!}
                   {{Form::hidden('_method','DELETE')}}
                   {{Form::submit('delete post',['class'=>'btn btn-danger pull-right'])}} 
            {!!Form::close()!!}
               </div>
           </div>
            

            
    
@endsection



