@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="form-post-container">
            <h1 class="h-form">Create Post</h1>
            {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
                <div class="form-block">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', '', ['class' => 'form-post', 'placeholder' => 'Write post title'])}}
                </div>
                <div class="form-block">
                    {{Form::label('body', 'Article')}}
                    {{Form::textarea('body', '', ['class' => 'form-post', 'placeholder' => 'Write your article'])}}
                </div>
                <div>
                    {{Form::file('post_cover_img')}}
                </div>
                <div>
                   {{Form::submit('Submit', ['class'=>'btn-submit'])}} 
                </div>
            {!! Form::close() !!} 
        </div>
        {{-- @include('inc.messages') --}}
    </div>
@endsection