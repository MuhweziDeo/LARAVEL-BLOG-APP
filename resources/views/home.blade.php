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
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
