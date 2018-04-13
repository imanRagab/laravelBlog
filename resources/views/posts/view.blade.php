@extends('layouts.master')

@section('content')

<br><br>

<div class="card-group" style="width:40rem;">
    <div class="card">

        <h2>Post Info</h2><hr>

        <div class="card-body">
            <h3 class="card-title">{{$post->title}}</h3>
            <p class="card-text">{{$post->description}}</p>
        </div>
    </div>
</div>

<br><br>

<div class="card-group" style="width:40rem;">
    <div class="card">

        <h2>Post Creator Info</h2><hr>

        <div class="card-body">
            <h3 class="card-title">@ {{$post->user->name}}</h3>
            Email: <p class="card-text">{{$post->user->email}}</p>
            Created At: <p class="card-text">{{$post->user->created_at}}</p>
        </div>
    </div>
</div>

@endsection

