@extends('layout.app')

@section('content')

<h1>Posts</h1>
    
@if (count($posts)>0)
    @foreach ($posts as $post )
        <div class="list-group">
            <a href="/posts/{{$post->id}}"><h3 class="list-group-item">{{$post->title}}</h3></a>
            <small>Written on {{$post->created_at}}</small>

        </div>
        
    @endforeach
     {{$posts->links()}}
   
@else
    <p>No Posts Yet</p>
@endif
@endsection

