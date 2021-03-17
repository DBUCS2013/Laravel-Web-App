@include('header')
<div class="container">
    <form action="{{ route('post.create') }}" method="post">
        @csrf
    <div class="form-group ">
        <label for="title">Title</label>
        <input type="text" name="title" id="" class="form-control">
        <br>
        <br>
    </div>
        
        <label for="body">Body</label>
        <textarea name="body" id="" cols="30" rows="10" class='form-control'></textarea>
        <br>
        <input type="submit" value="Save" class='btn btn-success'>
    </form>
</div>

@include('footer')