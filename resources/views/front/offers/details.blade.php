@extends('layouts.app')
@section('content')
    <div class="container">
    <!-- Card -->
        @if($product)
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="Image Loading...">
                        <div class="card-body  text-center">
                            <h5 class="card-title">{{$product->title}}</h5>
                            <p class="card-text"> {{$product->description}}.</p>
                            <p class="grey-text mb-2" id="price">{{$product -> price}}$</p>
                            <a id="checkout" href="{{route('offers.checkout',$product -> price)}}"
                               role="button" class="btn  btn-success px-3 waves-effect waves-light">Pay
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div id="showPayForm"></div>
                </div>
            </div>
            @endif


    <!-- Card Posts-->
    </div>
    @stop

    @section('scripts')

    <script>
        $(document).on('click', '#checkout', function (e) {
            e.preventDefault();
            $.ajax({
                type: 'get',
                url: "{{route('offers.checkout')}}",
                data: {
                    price: $('#price').text(),
                    offer_id: '{{$product -> id}}',
                },
                success: function (data) {
                    if (data.status == true) {
                        $('#showPayForm').empty().html(data.content);
                    } else {
                    }
                }, error: function (reject) {
                }
            });
        });
    </script>
@stop

