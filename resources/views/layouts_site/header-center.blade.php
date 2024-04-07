<div class="header-center hidden-sm-down">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div id="_desktop_logo" class="contentsticky_logo d-flex align-items-center justify-content-start col-lg-3 col-md-3">
                <a href="{{ route('home') }}">
                    <img class="logo img-fluid" src="{{ asset('assets/images/download.png')}}" alt="my_ecommerce">
                </a>
            </div>
            <div class="col-lg-9 col-md-9 header-menu d-flex align-items-center justify-content-end">
                <div class="data-contact d-flex align-items-center">
                    <div class="title-icon">support<i class="icon-support icon-address"></i></div>
                    <div class="content-data-contact">
                        <div class="support">{{ trans('site/home.Call Customer Services') }} :</div>
                        <div class="phone-support">
                          +20  01117527587
                        </div>
                    </div>
                </div>
                <div class="contentsticky_group d-flex justify-content-end">
                    <div class="header_link_myaccount">
                        @auth
                        <h4>{{ auth()->user()->name }}</h4>
                        @else
                        <a class="login" href="{{ route('user_login') }}" rel="nofollow" title="{{ trans('site/home.Sign in') }}"><i class="header-icon-account"></i></a>
                        @endauth
                    </div>
                    <div class="header_link_wishlist">

                        @auth
                        <a href="{{ route('wishlists') }}" title="{{ trans('site/home.favourites') }}" >
                        @else
                        <a href="{{ route('user_login') }}" title="{{ trans('site/home.favourites') }}">
                        @endauth
                            <i class="header-icon-wishlist"></i>
                    </div>

                    <!-- begin module:ps_shoppingcart/ps_shoppingcart.tpl -->
                    <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/ps_shoppingcart/ps_shoppingcart.tpl --><div id="_desktop_cart">
                        <div class="blockcart cart-preview active" data-refresh-url="{{route('basket')}}">
                            <div class="header-cart">
                                <div class="cart-left ">


                                    <div class="shopping-cart">
                                        <i class="zmdi zmdi-shopping-cart "></i>

                                    </div>
                                    <div class="cart-products-count ">
                                       <span class="total_cartlists">

                                        @auth
                                        <a href="{{route('basket')}}" title="{{ trans('site/home.shopping cart') }}" >{{\App\Models\Cartlist::count() }}</a>
                                      @else
                                       <a href="{{route('user_login')}}" title="{{ trans('site/home.shopping cart') }}"></a>
                                      @endauth


                                       </span>
                                        </div>
                                </div>


                                <div class="cart-right d-flex flex-column align-self-end ml-13">

                                    <span class="title-cart">{{ trans('site/home.shopping cart') }}

                                    </span>
                                    <span class="cart-item"> items</span>
                                </div>
                            </div>

                        </div>

                    </div><!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/ps_shoppingcart/ps_shoppingcart.tpl -->
                    <!-- end module:ps_shoppingcart/ps_shoppingcart.tpl -->

                </div>
            </div>
        </div>
    </div>
</div>
