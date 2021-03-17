@include('header')
<div class="container ">
    <a class="btn btn-success" href="/add-post" role="button">Add new post</a>

</div>

<div class="container">
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Body</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td scope="row">{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>
                        <a href="/posts{{ $post->id }}" class="btn btn-success">Details</a>
                        <a href="/edit-post{{ $post->id }}" class="btn btn-info">Edit</a>
                        <a href="/delete-post{{ $post->id }}" class="btn btn-danger" onclick="confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
    </table>
</div>

@include('footer')