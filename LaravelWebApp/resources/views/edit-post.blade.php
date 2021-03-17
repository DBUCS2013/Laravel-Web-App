@include('header')
<div class="container">
<form action="{{ route('post.update') }}" method="post">
@csrf
<input type="hidden" value="{{ $post->id }}" name ='id'>
<div class="form-group">
  <label for="">Post Title</label>
  <input type="text" name="title" id="title" class="form-control" placeholder="" value="{{ $post->title }}">
</div>
<div class="form-group">
    <label for="">Post Body</label>
    <textarea name="body" id="" cols="30" rows="10"class="form-control">
{{ $post->body }}
    </textarea>
  </div>
  <div class="form-group">
    
    <button type="submit" name="update" id="update"   class='btn btn-info'>Update post</button>
  </div>
</form>
   
                
</div>
@include('footer')