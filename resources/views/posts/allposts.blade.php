@extends('layouts.app')

@section('content')
    <div class="container">
        @if (count($posts)>0)
            @foreach ($posts as $post)
                <div class="item">
                    <div class="img-cover">
                        <img src="/storage/post_cover_imgs/{{$post->post_cover_img}}" alt="cover" width="200px">
                    </div>
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Published on {{$post->created_at}} by {{$post->user->name}}</small>
                </div>
            @endforeach
            {{$posts->links()}} 
        @else
            <p>No posts found</p>
        @endif
    </div>
@endsection