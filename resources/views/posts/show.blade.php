@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" >
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" style="width: 50%; align-content: flex-start" >
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div style="padding-right: 30px">
                        <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 40px">
                    </div>
                    <div>
                        <div style="font-weight: bold;"><a href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a></div>
                    </div>
                </div>

                <hr>

                <p><span style="font-weight: bold;"><a href="/profile/{{ $post->user->id }}"><span class="text-dark"></span>{{ $post->user->username }}</a></span> {{ $post->caption }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
