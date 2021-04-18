@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ __('Dashboard') }}</h2>
    <a href="/posts/create" class="btn-default">{{__('Create Post')}}</a>
    @if(count($posts) > 0)
        <p>{{ __('Your articles') }}</p>
        
        @foreach ($posts as $post)
            <div class="item">
                <div class="img-cover">
                    <img src="/storage/post_cover_imgs/{{$post->post_cover_img}}" alt="cover" width="200px">
                </div>
                <div>
                    <h3><a href="/posts/{{$post->id}}" class="title">{{$post->title}}</a></h3>
                    <small>{{__('Published on')}} {{$post->created_at}}</small>
                    <br>
                    <div class="show-buttons-dash">
                        <a href="/posts/{{$post->id}}/edit" class="btn-default mrgn-r">{{__('Edit')}}</a>
                    {!!Form::open(['action'=>['App\Http\Controllers\PostsController@destroy', $post->id], 'method'=>'POST'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit(__('Delete'), ['class'=>'btn-default mrgn-r'])}}
                    {!!Form::close()!!}
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>{{__('You have no articles')}}</p>
    @endif
</div>
@endsection
