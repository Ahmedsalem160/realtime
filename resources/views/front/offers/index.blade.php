@extends('layouts.app')
@section('content')
    <div class="container">
    <!-- Card <Posts-->
        <div class="row row-cols-3">

                    @if(isset($products) && count($products)>0)
                        @foreach($products as $product)
                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="Image Loading...">
                                    <div class="card-body  text-center">
                                        <h5 class="card-title">{{$product->title}}</h5>
                                        <p class="card-text"> {{$product->description}}.</p>
                                        <p class="grey-text mb-2">{{$product -> price}}$</p>
                                        <a id="home-updates-angular" href="{{route('offers.show',$product -> id)}}"
                                           role="button" class="btn  btn-success px-3 waves-effect waves-light">Details
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @endif
        </div>
    <!-- Card Posts-->
    </div>
    @stop
