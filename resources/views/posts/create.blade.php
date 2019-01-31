@extends('layout.app')

@section('content')

<a href="/posts"><button type="button" class="btn btn-info mt-4">Go Back</button></a>
<h1 class="text-center">Create Post</h1>

{!! Form::open(['action'=> 'PostsController@store','method' =>'POST']) !!}

    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text(
        'title','',
        ['class'=>'form-control',
        'placeholder' =>'title'
        
        ])}}
       
    </div>

    <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea(
            'body','',
            ['class'=>'form-control',
            'placeholder' =>'body',
            'id'=>'article-ckeditor'
            
            ])}}
    </div>
    {!! Form::submit('Submit', [
        "class"=>"btn btn-primary"
    ]) !!}
    
{!! Form::close() !!}



@endsection

