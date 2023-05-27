@extends('layouts.app')
@section('content')
    
<div class="container">
  <div class="card">
    <div class="card-body mx-4">
      <div class="container">
        <p class="my-5 mx-5" style="font-size: 30px;">Thank for your purchase</p>
        <div class="row">
          <ul class="list-unstyled">
            <li class="text-black">To: {{$inv->name}}</li>
            <li class="text-black">Address: {{$inv->addres}}</li>
            <li class="text-black">City: {{$inv->country}}</li>
            <li class="text-black"><i class="fas fa-phone"></i> {{$inv->phone}}</li>
          </ul>
          <hr>
          <div class="col-xl-10">
            <p> {{$inv->productName}}</</p>
          </div>
          <div class="col-xl-2">
            <p class="float-end">{{$inv->total}} SR
            </p>
          </div>
          <hr>
        </div>
        <div class="row text-black">
  
          <div class="col-xl-12">
            <p class="float-end fw-bold">Total: {{$inv->total}} SR
            </p>
          </div>
          <hr style="border: 2px solid black;">
        </div>
      
  
      </div>
    </div>
  </div>
    
</div>

@endsection