@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>

                <div class="panel-body">
                    <h1>Your Posts</h1>
                    <a href="/posts/create"> <button class="btn btn-primary">Create Post</button></a>

                    <h2>Your Posts</h2>
                    @if(count($posts)>0)
                    <table class="table table-striped">
                      <tr>
                        <th>Title</th>
                        <th></th>
                        <th></th>
                      </tr>
                    @foreach($posts as $post)
                      <tr>
                        <th>{{$post->id}} {{$post->title}}</th>
                        <th><a class="btn btn-danger" href="/posts/{{$post->id}}/edit">Edit</a></th>
                        <th>{!! Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right mt-4']) !!}
                        {{ Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                        {!! Form::close() !!}</th>
                      </tr>
                    @endforeach
                    </table>
                  @else
                  <p>No posts for you yet</p>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
