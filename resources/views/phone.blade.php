
@extends('layouts.app')
@section('title,phone')
@section('content')



<div class="container">

  <div class="row">
    <h1 class="alert alert-secondary" role="alert" >Products List</h1>
  </div>
<br/>
    <div class="row row-cols-1  row-cols-md-4 g-3">
        @foreach($phone as $item)

        <div class="card mx-1 my-1">
          <img class="card-img" src="img/{{$item->image}}" alt="Vans">
          <div class="card-body">
            <h4 class="card-title">{{$item->name}}</h4>
            {{-- <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6> --}}
            <p class="card-text text-primary">
                {{$item->display}}            </p>
          
          </div>
          <hr/>
          <div class="row d-flex text-center">
            <div class="buy d-flex justify-content-between align-items-center">
                <div class="price text-success "><h4 class="mt-4 ">{{$item->total}}SR</h4></div>
                &nbsp;
              
              </div>
          </div>
          <a class="btn btn-success mt-3 mb-1" href="checkout/{{$item->id}}" ><i class="fas fa-shopping-cart">  Buy Now</i></a>
        </div>

      @endforeach
    </div>
  </div>
@endsection







       {{-- {{$sn ['s1'] }}

         @foreach($sn as $key=>$item)
            @if($key=='s3')
                    {{ $item}}
            @endif
         @endforeach --}}
