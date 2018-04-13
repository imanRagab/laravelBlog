@extends('layouts.master')

@section('content')


<br><br>
<center><a href="/posts/create"><button class="btn btn-success btn-lg">New Product</button></a></center>
<br><br>

<table class="table table-light table-bordered table-hover"> 

<thead class="thead-light">

    <th>Title</th>
    <th>Posted By</th>
    <th>Created At</th>
    <th>Actions</th>

</thead>

<tbody>

        @foreach ($posts as $post)
            
            <tr>

                    <td>{{ $post->title }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>
                        <a href="/"><button class="btn btn-info">View</button></a>
                        <a href="/"><button class="btn btn-primary">Edit</button></a>
                        <a href="/" ><button class="btn btn-danger">Delete</button></a>
                    </td>                               

            </tr>

        @endforeach


</tbody>

</table> <br> <br>


@endsection