@include('header')

<div class="container">
   Post Title : {{ $post->title }}
   <br>
  Post Body   {{ $post->body }}
</div>

@include('footer')