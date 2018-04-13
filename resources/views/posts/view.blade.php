@extends('layouts.master')

@section('content')

<br><br>

<div class="card-group" style="width:40rem;">
    <div class="card">

        <div class="card-header">Post Info</div>

        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->description}}</p>
        </div>
    </div>
</div>

<br><br>

<div class="card-group" style="width:40rem;">
    <div class="card">

        <div class="card-header">Post Creator Info</div>

        <div class="card-body">
            <h5 class="card-title">@ {{$post->user->name}}</h5>
            Email: <p class="card-text">{{$post->user->email}}</p>
            Created At: <p class="card-text">{{$post->user->created_at}}</p>
        </div>
    </div>
</div>

@endsection

