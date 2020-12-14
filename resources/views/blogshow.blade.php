@extends('layout')
@section('content')
<div class="yellow_bg">
    <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                    <h2>{{$dish['name']}}</h2>
                    
                    </div>
               </div>
            </div>
          </div>
</div>
<div class="blog">
  <div class="container">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
       <a href='/blog/{{$dish->id}}/edit'> <button class="send">Edit</button></a>
       <form method='post' action='/blog/{{$dish->id}}/delete'>
       <a href='/blog/{{$dish->id}}/delete'>
        @csrf
        @method('delete')
       <button class="send">Delete</button></a></form>
    </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
        
        <div class="blog_box">
          <div class="blog_img_box">
            <figure><img src="/{{$dish['src']}}" alt="#"/>
             <span>{{$dish['date']}}</span>
            </figure>
          </div>
          <h3>{{$dish['name']}}</h3>
          <p>{{$dish['desc']}}</p>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection;