@extends('layout.app')

@section('content')

<a href="/posts"><button type="button" class="btn btn-info mt-4">Go Back</button></a>
<h1 class="text-center">Edit Post</h1>

{!! Form::open(['action'=> ['PostsController@update',$post->id],'method' =>'POST']) !!}

    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text(
        'title',$post->title,
        ['class'=>'form-control',
        'placeholder' =>'title'
        
        ])}}
       
    </div>

    <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea(
            'body',$post->body,
            ['class'=>'form-control',
            'placeholder' =>'body',
            'id'=>'article-ckeditor'
            
            ])}}
    </div>
    {{Form::hidden('_method','PUT')}}

    {!! Form::submit('Submit', [
        "class"=>"btn btn-primary"
    ]) !!}
    
{!! Form::close() !!}



@endsection

