@include('header')

<section style="padding-top:60px">
    <div class="container">
    <div class="row">
    <div class="col-md-12 " >
    <div class="card">
    <div class="card-header">
   About blade
  
    </div>
    <div class="card-body">
    
      {{ $name }} is {{ $age }} old.
      @if ($age <=30)
      he is young
      @elseif($age <=50)
      he is an adult 
      @else 
      he is old 
      @endif
      <br>
      x = {{ $x }} and y ={{ $y }}
      <br>
       {{ $x }} + {{ $y }} = {{ $x + $y }}
       @for($i = 0; $i<5;$i++)
       <br>Hello world !
       
       @endfor
       {{ $j=5, $m=700 }}
      <br>Sum  {{  $j + $m}}
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
@include('footer')