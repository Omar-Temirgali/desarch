@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{$post->title}}</h1>
        <p>{!! $post->body !!}</p>
        <small>Published on {{$post->created_at}} by {{$post->user->name}}</small>
        <div class="show-buttons">
            <a href="/posts" class="btn-default mrgn-r">Go Back</a>
            @if (!Auth::guest())
                @if (Auth::user()->id == $post->user_id)
                    <a href="/posts/{{$post->id}}/edit" class="btn-default mrgn-r">Edit</a>
                    {!!Form::open(['action'=>['App\Http\Controllers\PostsController@destroy', $post->id], 'method'=>'POST'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class'=>'btn-default'])}}
                    {!!Form::close()!!}
                @endif 
            @endif   
        </div> 
    </div>
@endsection