@extends('layouts.master')

@section('content')


<table class="table table-light table-bordered table-hover"> 

<thead class="thead-light">

    <th>Title</th>
    <th>Posted By</th>
    <th>Slug</th>    
    <th>Created At</th>
    <th>Actions</th>

</thead>

<tbody>

        @foreach ($posts as $post)
            
            <tr>

                    <td>{{ $post->title }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->slug }}</td>                    
                    <td>{{ $post->created_at_date }}</td>
                    <td>
                        <a href="/posts/{{ $post->id }}/restore"><button class="btn btn-success">Restore</button></a>
                    </td>                               

            </tr>

        @endforeach

</tbody>

</table> <br> <br>

@endsection