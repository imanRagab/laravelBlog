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
                        <a href="/posts/{{ $post->id }}"><button class="btn btn-info">View</button></a>
                        <a href="/posts/{{ $post->id }}/edit"><button class="btn btn-primary">Edit</button></a>
                        <button class="btn btn-danger delBtn" post_id="{{ $post->id }}">Delete</button>
                    </td>                               

            </tr>

        @endforeach


</tbody>

</table> <br> <br>

<script>
    $(".delBtn").click(function(event){

        event.preventDefault();

        var resp = confirm("Are you sure you want to delete this post?");
        if (resp == true) {
            $.ajax({
            
            url: "/posts/" + $(".delBtn").attr("post_id"),
            type: "DELETE"         
            
        });
        } else {
            alert("You pressed Cancel!");
        }

    });



</script>


@endsection