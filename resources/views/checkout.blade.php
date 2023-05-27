
@extends('layouts.app')
@section('title,check')
@section('content')

<div class="container">
    <div class="row ">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                <h6 class="my-0">{{$phone->name}}</h6>
                <small class="text-muted">{{$phone->display}}</small>
                </div>
                <span class="text-muted">{{$phone->price}}</span>
            </li>                               
            <li class="list-group-item d-flex justify-content-between">
                <span>Total</span>
                <strong>{{$phone->total}}</strong>
            </li>
            </ul>        
        </div>

        <div class="col-md-8 order-md-1">
            <h4 class=" alert alert-secondary mb-3"> Shipping Address </h4>
            <form action="{{route('invoice')}}" method="post">
                <input type="hidden" id="productName" name="productName" value={{$phone->name}}>
                <input type="hidden" id="total" name="total" value={{$phone->total}}>
                @CSRF

                <div class="col mt-1">
                    <label class=" p-1 " for="fullname">Full Name</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" required>
                </div>
                <div class="col mt-1">
                    <label class="p-1" for="country"> City</label>
                    <select name="country" id="country" class="form-control">
                        <option > Riyadh</option>
                        <option> Jeddah</option>
                        <option > Makkah</option>
                        <option > Medina</option>
                    </select>
                </div>
                <div class="col mt-1">
                    <label for="phone">Phone Number</label>
                    <input type="phone" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="col mt-1">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="col mt-1">
                    <label for="address">Address Detail</label>
                    <input type="address" class="form-control" id="address" name="address" required>
                </div>

                <div class="col mt-3">
                    <button type="submit" class="btn btn-success">submit</button>
                </div>

    </form>
           
    </div>
    </div>

</div>
@endsection