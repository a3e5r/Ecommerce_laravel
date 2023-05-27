@extends('layouts.app')
@section('content')


    <div
      id="intro-example"
      class="p-5 text-center bg-image"
      style="background-image: url('img/backg.jpg');
      background-size: cover;"
    >
      <div class="mask m-auto" style="background-color:hsla(0, 0%, 0%, 0.2);  height:300px;">
        <div class="d-flex justify-content-center align-items-center h-100 ">
          <div class="text-white">
            <h1 class="mb-3">ANY THING YOU NEED TO START YOUR SPORT</h1>
            <h5 class="mb-4">There is amazing thing here!</h5>
            <a
              class="btn btn-outline-light btn-lg m-2"
              href="{{ route('phone') }}"
              role="button"
              rel="nofollow"
              target="_blank"
            >Products List</a
            >
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->


{{-- <h1>{{Session::get('empid')}} </h1> --}}

@endsection