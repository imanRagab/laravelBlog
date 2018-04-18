@extends('layouts.master')

@section('content')


<br><br>
<center>
    <a href="/posts/create"><button class="btn btn-success btn-lg">New Product</button></a>
    <a href="/posts/trash"><button class="btn btn-danger btn-lg">Deleted Posts</button></a>
</center>
<br><br>

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
                        <a href="/posts/{{ $post->id }}"><button class="btn btn-info">View</button></a>
                        <a href="/posts/{{ $post->id }}/edit"><button class="btn btn-primary">Edit</button></a>
                        <button class="btn btn-danger delBtn" post_id="{{ $post->id }}">Delete</button>
                    </td>                               

            </tr>

        @endforeach

</tbody>

</table> <br> <br>

{{ $posts->links() }}

<script>
 
    $(".delBtn").click(function(event){

        var resp = confirm("Are you sure you want to delete this post?");

        if (resp == true) {
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            $.ajax(
            {
                url: "/posts/" + $(this).attr('post_id'),
                type: 'delete', // replaced from put
                dataType: "JSON",
                data: {
                    
                },
                success: function (response)
                {
                        window.location.href = "posts";
                    
                    console.log(response); // see the reponse sent
                },
                error: function(xhr) {
                console.log(xhr.responseText); // this line will save you tons of hours while debugging
                // do something here because of error
            }
            
            });
        }
    });

</script>

@endsection