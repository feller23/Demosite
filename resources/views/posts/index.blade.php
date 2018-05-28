@extends('layouts.app')

    @section('content')
    <div class="container">
        <h3>SHOWING ALL POSTS</h3>
            @if (count($postArray)> 1)
              <div class="list-group">
                    @foreach ($postArray as $post)
                    <div class="list-group-item">
                        <h4><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
                        <small>created on {{$post->created_on}}</small>
                    </div>
                    @endforeach
             </div>
            @else
        <p class="text-danger">
            No posts found
        </p>
         @endif
    </div>
    
@endsection



