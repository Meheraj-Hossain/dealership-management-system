@push('css')
<link rel="stylesheet" href="{{asset('assets/make_order/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/make_order/css/ionicons.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/make_order/css/plugins.css')}}">
<link rel="stylesheet" href="{{asset('assets/make_order/css/style.css')}}">
@endpush
@extends('layout.admin.master')

@section('content')

    <!-- Cart Section Start-->
    <div class="cart-section section pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="table-responsive mb-30">
                        <table class="table cart-table text-center">

                            <!-- Table Head -->
                            <thead>
                            <tr>
                                <th class="number">#</th>
                                <th class="image" >image</th>
                                <th class="name">product name</th>
                                <th class="qty">quantity</th>
                                <th class="price">price</th>
                                <th class="total">Total</th>
                                <th class="remove">remove</th>
                            </tr>
                            </thead>
                            @foreach($products as $product)
                            <!-- Table Body -->
                            <tbody>
                            <tr>
                                <td><span class="cart-number">1</span></td>
                                <td><a href="#" class="cart-pro-image"><img src="{{asset($product->image)}}" alt="" /></a></td>
                                <td><a href="#" class="cart-pro-title">{{$product->name}}</a></td>
                                <td ><div>
                                        <input id="quantity"
                                               class="quantity"
                                               type="number"
                                               value="1"
                                               min="1"
                                               name="qtybox"
                                               rowId="{{$product->cartId}}"
                                               unitPrice="{{$product->price_per_carton}}"
                                        >

                                    </div></td>
                                <td><p class="cart-pro-price price">{{$product->price_per_carton}}</p></td>
                                <td id="total{{$product->cartId}}">{{$product->price_per_carton}}</td>
                                <td><a href="{{route('remove_cart',$product->cartId)}}" class=""><ion-icon name="close-circle-outline"></ion-icon>
                                    </a></td>
                            </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>

                    <div class="row">

                        <!-- Cart Action -->
                        <div class="cart-action col-lg-4 col-md-6 col-12 mb-30">
                            <a href="#" class="button">Continiue Shopping</a>

                        </div>

                        <!-- Cart Cuppon -->
                        <div class="cart-cuppon col-lg-4 col-md-6 col-12 mb-30">

                        </div>

                        <!-- Cart Checkout Progress -->
                        <div class="cart-checkout-process col-lg-4 col-md-6 col-12 mb-30">
                            <h4 class="title">Process Checkout</h4>
                            <p><span>Subtotal</span><span>$190.98</span></p>
                            <h5><span>Grand total</span><span id="finalTotal">{{ $total_price }}</span></h5>
                            <button class="button">process to checkout</button>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div><!-- Cart Section End-->

@endsection
@push('js')
<script src="{{asset('assets/make_order/js/vendor/modernizr-2.8.3.min.js')}}"></script>
<script src="{{asset('assets/make_order/js/main.js')}}"></script>
<script src="{{asset('assets/make_order/js/ajax-mail.js')}}"></script>
<script src="{{asset('assets/make_order/js/plugins.js')}}"></script>
<script src="{{asset('assets/make_order/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/make_order/js/popper.min.js')}}"></script>
<script src="{{asset('assets/make_order/js/vendor/jquery-1.12.0.min.js')}}"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

    <script type="text/javascript">
        $(function (){
            $('body').on('change', '.quantity',  function (e) {
                e.preventDefault();
                let rowId = $(this).attr('rowId');
                let quantity = parseFloat($(this).val()).toFixed(2);
                let unit_price = parseFloat($(this).attr('unitPrice')).toFixed(2);
                let total = parseFloat(quantity*unit_price).toFixed(2);

                let final_total = parseFloat($('#finalTotal').html()).toFixed(2);

                let previous_total = parseFloat($('#total'+rowId).html()).toFixed(2);

                if (total > previous_total) {
                    let increased = parseFloat(total-previous_total).toFixed(2);
                    final_total = parseFloat(final_total) + parseFloat(increased);
                    let last_price = parseFloat(final_total).toFixed(2);
                    $('#finalTotal').empty().append(last_price);
                    console.log(last_price);
                } else {
                    let decreased = parseFloat(previous_total - total).toFixed(2);
                    final_total = parseFloat(final_total) - parseFloat(decreased);
                    let last_price = parseFloat(final_total).toFixed(2);
                    $('#finalTotal').empty().append(last_price);
                    console.log(last_price);
                }

                $('#total'+rowId).empty().append(total);

            });
        });
    </script>

@endpush
