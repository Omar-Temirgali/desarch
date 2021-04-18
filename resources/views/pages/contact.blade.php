@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{__('Contacts')}}</h2>
        <p>
            {{__('If you have an issue or question, please, let us know.')}}
        </p>
        <p>{{__('Our telephone numbers:')}} <a href="tel:+7727-777-77-77">+7727-777-77-77</a>, 
            <a href="tel:+7727-888-88-88">+7727-888-88-88</a>
        </p>
        <p>{{__('Our emails:')}} <a href="mailto:support@desarch.com">support@desarch.com</a>, 
        <a href="mailto:desarch@desarch.com">desarch@desarch.com</a></p>
        <iframe src="https://yandex.com/map-widget/v1/?um=constructor%3A6ab0c199ac857cba4080de3041b7512b83ef445eb474493c2bbfdfdc5fbab91f&amp;source=constructor" width="614" height="372" frameborder="0"></iframe>
        <br>
        <div class="container-auth">
            @if (!Auth::guest())
                <p>{{__('For more infromation click on this button')}}</p>
                <a href="/mail/send" class="btn-default">{{__('Send Me')}}</a>
            @endif 
        </div>
    </div>
@endsection
