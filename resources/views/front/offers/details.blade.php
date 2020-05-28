@extends('layouts.app')
@section('content')
    <div class="container">
    <!-- Card -->
        @if($product)
            <div class="row d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="Image Loading...">
                <div class="card-body  text-center">
                    <h5 class="card-title">{{$product->title}}</h5>
                    <p class="card-text"> {{$product->description}}.</p>
                    <p class="grey-text mb-2">{{$product -> price}}$</p>
                    <a id="home-updates-angular" href="{{route('offers.checkout',$product -> price)}}"
                       role="button" class="btn  btn-success px-3 waves-effect waves-light">Pay
                    </a>
                </div>
            </div>
                </div>
            @endif

    </div>
    <!-- Card Posts-->
    </div>
    @stop



