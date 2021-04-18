@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="form-post-container">
            <h1 class="h-form">{{__('Edit Post')}}</h1>
            {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
                <div class="form-block">
                    {{Form::label('title', __('Title'))}}
                    {{Form::text('title', $post->title, ['class' => 'form-post mrgn-t', 'placeholder' => __('Write post title')])}}
                </div>
                <div class="form-block">
                    {{Form::label('body', __('Article'))}}
                    {{Form::textarea('body', $post->body, ['class' => 'form-post mrgn-t'])}}
                </div>
                <div class="upload-file-container">
                    {{Form::file('post_cover_img')}}
                </div>
                <div>
                   {{Form::submit(__('Submit'), ['class'=>'btn-default upload-file-container'])}} 
                </div>
                {{Form::hidden('_method', 'PUT')}}
            {!! Form::close() !!} 
        </div>
        @include('inc.messages')
    </div>
@endsection