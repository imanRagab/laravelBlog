@extends('layouts.master')

@section('content')


<form method="POST" action="/posts">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" required>
        </div>
        <div class="form-group">
            <label for="creator">Post Creator</label>
            <select name="creator" id="creator">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            
        </div>
        <button type="submit" class="btn btn-success btn-lg">Submit</button>
</form>


@endesection