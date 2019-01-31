@extends('layout.app')

@section('content')

<a href="/posts"><button type="button" class="btn btn-info mt-4">Go Back</button></a>
<h1 class="display-4">{{$post->title}} </h1>

<div>
    {!! $post->body !!}
 
</div>
<div>
        <small>Written on : {{$post->created_at}}</small>
</div>

<div>
        <a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit Post </a>
</div>


{!! Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right mt-4']) !!}

{{ Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger'])}}


{!! Form::close() !!}


@endsection

