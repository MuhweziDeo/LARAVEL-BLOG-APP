@extends('layout.app')

@section('content')

<a href="/posts"><button type="button" class="btn btn-info mt-4">Go Back</button></a>
<h1 class="display-4">{{$post->title}} </h1>

<div>
    {{$post->body}}
 
</div>
<small>Written on : {{$post->created_at}}</small>
@endsection

