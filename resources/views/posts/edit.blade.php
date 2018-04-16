@extends('layouts.master')

@section('content')

<br><br>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<br><br>
<form method="POST" action="/posts/{{$post->id}}">
{{ csrf_field() }}
{{ method_field('PATCH') }}

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" required>{{ $post->description }} </textarea>
        </div>
        <div class="form-group">
            <label for="creator">Post Creator</label>
            <select id="creator" name="user_id">
                @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ $user->id === $post->user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                @endforeach
            </select>
            
        </div>
        <button type="submit" class="btn btn-info btn-lg">Update</button>
</form>

@endsection