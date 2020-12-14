@extends('layout')
@section('content')
<div class="footer">
    <div class="container-fluid">
        <div class="row">
          <div class=" col-md-12">
            <h2><strong class="white">Create a Blog</strong></h2>
          </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
              
                <form class="main_form" method="POST" action='/blog/create'>
                    @csrf
                    <div class="row">
                     
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            @error('name')
                                <h3>{{$message}}</h3>
                            @enderror
                            <input class="form-control" value="{{old('name')}}" placeholder="Name" type="text" name="name">
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            @error('date')
                            <h3>{{$message}}</h3>
                        @enderror
                            <input class="form-control" value="{{old('date')}}" placeholder="Date" type="text" name="date">
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            @error('src')
                            <h3>{{$message}}</h3>
                        @enderror
                            <input class="form-control" value="{{old('src')}}" placeholder="Image link" type="text" name="src">
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            @error('desc')
                            <h3>{{$message}}</h3>
                        @enderror
                            <textarea class="textarea" placeholder="Description" type="text" name="desc">{{old('desc')}}</textarea>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <button class="send" type="submit" >Done</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <br>
                <br>
                    <figure><img src="/images/img2.jpg" height="1500" width="1000" alt="img" /></figure>
            </div>
        </div>
    </div>
</div>

    
@endsection