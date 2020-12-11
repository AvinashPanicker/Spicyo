@extends('layout')
@section('content')
<div class="yellow_bg">
    <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                    <h2>Our Blog</h2>
                    
                    </div>
               </div>
            </div>
          </div>
</div>
<div class="blog">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title">
          <i><img src="images/title.png" alt="#"/></i>
          
          <span>when looking at its layout. The point of using Lorem</span>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach($dishes as $dish)
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
        <div class="blog_box">
          <div class="blog_img_box">
            <figure><img src={{$dish['src']}} alt="#"/>
             <span>{{$dish['date']}}</span>
            </figure>
          </div>
          <h3>{{$dish['name']}}</h3>
          <p>{{$dish['desc']}}</p>
        </div>
      </div>
      @endforeach;

    </div>
  </div>
</div>
@endsection;