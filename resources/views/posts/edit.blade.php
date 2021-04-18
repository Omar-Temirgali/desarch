@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="form-post-container">
            <h1 class="h-form">Edit Post</h1>
            {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
                <div class="form-block">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', $post->title, ['class' => 'form-post', 'placeholder' => 'Write post title'])}}
                </div>
                <div class="form-block">
                    {{Form::label('body', 'Article')}}
                    {{Form::textarea('body', $post->body, ['class' => 'form-post', 'placeholder' => 'Write your article'])}}
                </div>
                <div>
                    {{Form::file('post_cover_img')}}
                </div>
                <div>
                   {{Form::submit('Submit', ['class'=>'btn-submit'])}} 
                </div>
                {{Form::hidden('_method', 'PUT')}}
            {!! Form::close() !!} 
        </div>
        @include('inc.messages')
    </div>
@endsection