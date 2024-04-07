@extends('layouts_site.site')

@section('content')
    <nav data-depth="1" class="breadcrumb-bg">
        <div class="container no-index">
            <div class="breadcrumb">

                <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <meta itemprop="position" content="1">
                    </li>
                </ol>

            </div>
        </div>
    </nav>

    <div class="container no-index">
        <div class="row">
            <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <section id="main">
                    <h1 class="page-title">Shopping Cart</h1>
                    <div class="cart-grid row">
                        <div class="cart-grid-body col-xs-12 col-lg-9">
                            <!-- cart products detailed -->
                            <div class="cart-container">
                                <div class="cart-overview js-cart"
                                     data-refresh-url="">
                                    @isset($products)
                                        <ul class="cart-items">
                                            @foreach($products as $product)
                                                <li class="cart-item">
                                                    <div class="product-line-grid row spacing-10">
                                                        <!--  product left content: image-->
                                                        <div class="product-line-grid-left col-sm-2 col-xs-4">
                                                        <span class="product-image media-middle">
                                                          <img class="img-fluid"
                                                               src="
                                                               {{get_images($product ->images[0] ->image_name ) ?? ''}}"
                                                               alt="Vehicula vel tempus sit amet ulte">
                                                        </span>
                                                        </div>

                                                        <!--  product left body: description -->
                                                        <div class="product-line-grid-body col-sm-10 col-xs-8">
                                                            <div class="row">
                                                                <div class="col-sm-6 col-xs-12">
                                                                    <div class="product-line-info">

                                                                        <div
                                                                        class="text-center product-line-actions col-sm-6 col-xs-12">
                                                                        <div class="row">


                                                                            <div class="product-line-info product-price">
                                                                                   <div>
                                                                                    <span itemprop="price"
                                                                                    class="price" style="color:rgb(246, 14, 14);">{{number_format($product->special_price ?? $product ->price,2) }}</span>
                                                                                   </div>
                                                                                   <div>
                                                                                    @if($product ->special_price)
                                                                                    <span
                                                                                        class="regular-price" style="color:rgb(0, 0, 0);">{{number_format($product ->price,2)}}</span>
                                                                                @endif

                                                                                   </div>

                                                                             </div><br>
                                                                             <form action="{{ route('quantity') }}" method="POST">
                                                                                @csrf
                                                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                                                <select name="quantity" class="form-control form-control-lg" onchange="this.form.submit()">
                                                                              <option value="">{{ trans('site/home.Quantity') }}</option>
                                                                              <?php for( $i=1 ; $i<$product->qty ; $i++ ){

                                                                                           echo '<option value='.$i.'>' . $i .'</option>';
                                                                                    }
                                                                                   ?>
                                                                                   </select><br><br>

                                                                             </form>



                                                                            <div
                                                                                class="col-sm-3 col-xs-12 text-xs-right align-self-end">

                                                                                <form
                                                                                action=""
                                                                                method="post" class="">
                                                                                @csrf
                                                                                <input type="hidden" name="id_product"
                                                                                       value="{{ $product->id}}">

                                                                                <a class="btn btn-danger remove-from-cart" data-product-id="{{ $product->id}}"  href="#"
                                                                                   data-button-action="add-to-cart"><i
                                                                                       ></i><span>{{ trans('buttons.delete') }}</span></a>
                                                                            </form>
                                                                                            <div class="cart-line-product-actions shop-item">


                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                            @endforeach
                                        </ul>
                                    @endisset
                                </div>
                            </div>
                            <br>
                            <a class="label btn btn-primary" href="{{ route('home') }}">
                                {{ trans('site/home.Continue shopping') }}
                            </a>
                            <!-- shipping informations -->
                        </div>
                        <!-- Right Block: cart subtotal & cart total -->
                        <div class="cart-grid-right col-xs-12 col-lg-3">
                            <div class="cart-summary">
                                <div class="cart-detailed-totals">
                                    <div class="cart-summary-products">
                                        <div class="summary-label">{{ trans('site/home.there are') }} ({{$products->count()}}) {{ trans('site/home.items in your cart') }}</div>
                                    </div>

                                    <div class="">
                                        <div class="cart-summary-line cart-total">
                                            <span class="label">{{ trans('dashboard.Total') }}:</span>
                                            <span class="value">
                                                {{ $total }}
                                            </span>
                                        </div>

                                    </div>

                                </div>

                                 @if ($total !=Null)

                                 <div class="checkout text-xs-center card-block" >
                                    <form action="{{ route('proceed_payment') }}" method="POST" >
                                        @csrf
                                      <input type="hidden" name="amount" value="{{ $total }}">
                                       <input type="submit"  class="btn btn-primary" value="proceed to payment" >
                                    </form>
                                    </a>
                                </div>


                                 @endif

                            </div>


        </div>
    </div>
@stop

@section('scripts')
    <script>


        $.ajaxSetup({
            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click', '.remove-from-cart', function (e) {
            e.preventDefault();

            $.ajax({
                type: 'post',
                url: "{{ route('delete_from_cart') }}",
                data: {
                    'product_id': $(this).attr('data-product-id'),
                },
                success: function (data) {
                    location.reload();

                }
            });
        });


                $(document).on('click', '.remove-from-cart', function (e) {
            e.preventDefault();

            $.ajax({
                type: 'post',
                url: "{{ route('delete_from_cart') }}",
                data: {
                    'product_id': $(this).attr('data-product-id'),
                },
                success: function (data) {
                    location.reload();

                }
            });
        });


    </script>
    @stop
