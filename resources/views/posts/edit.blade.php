@extends('layouts.app')

    @section('content')
    
    {!! Form::open(['action'=>['PostsController@update',$post->id],'method'=>'POST']) !!}
                <div class="form-group">
                    {{form::label('title','Title')}}
                    {{form::text('title',$post->title,['class'=>'form-control','placeholder'=>'enter title here'])}}              
                </div>

                 <div class="form-group">
                    {{form::label('body','Body')}}
                    {{form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'enter post body here'])}}              
                </div>
                {{form::hidden('_method','PUT')}}
                {{form::submit('update',['class'=>'btn btn-md btn-default'])}}
    {!! Form::close() !!}
               
    @endsection



