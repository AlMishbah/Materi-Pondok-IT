@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <follow-button user-id="{{ $user->id }}" follows = "{{ $follows }}"></follow-button>
                @can('update', $user->profile)
                <a href="/p/create" class="text-dark">Add New Post</a>
                @endcan
            </div>
            @can('update', $user->profile)
            <a href="/profile/{{ $user->id }}/edit" class="text-dark">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->post->count()}}</strong> post</div>
                <div class="pr-5"><strong>4,009</strong> followers</div>
                <div class="pr-5"><strong>245</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">
                {{ $user->name }}
            </div>
            <div>{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
        </div>
    </div>

    <div class="row pt-5 pb-4">
        @foreach($user->post as $post)
        <div class="col-4">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection