@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/posts" class="btn-submit">GO BACK</a>
        <h1>{{$post->title}}</h1>
        <p>{!! $post->body !!}</p>
        <small>Published on {{$post->created_at}} by {{$post->user->name}}</small>
        @if (!Auth::guest())
            @if (Auth::user()->id == $post->user_id)
                <a href="/posts/{{$post->id}}/edit">Edit</a>
                {!!Form::open(['action'=>['App\Http\Controllers\PostsController@destroy', $post->id], 'method'=>'POST'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete')}}
                {!!Form::close()!!}
            @endif 
        @endif    
    </div>
@endsection