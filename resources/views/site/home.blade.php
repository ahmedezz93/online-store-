@extends('layouts_site.site')

@section('css')

@endsection

@section('slider')
    <div id="displayTop" class="displaytopthree">
        <div class="container">
            <div class="row">
                <div class="nov-row  col-lg-12 col-xs-12">
                    <div class="nov-row-wrap row">
                        <div class="nov-html col-xl-3 col-lg-3 col-md-3">
                            <div class="block">
                                <div class="block_content">

                                </div>
                            </div>
                        </div>
                        <div id="nov-slider" class="slider-wrapper theme-default col-xl-9 col-lg-9 col-md-9 col-md-12"
                             data-effect="random" data-slices="15" data-animspeed="500" data-pausetime="10000"
                             data-startslide="0" data-directionnav="false" data-controlnav="true"
                             data-controlnavthumbs="false" data-pauseonhover="true" data-manualadvance="false"
                             data-randomstart="false">
                            <div class="nov_preload">
                                <div class="process-loading active">
                                    <div class="loader">
                                        @isset($sliders)
                                            @foreach($sliders as $slider)
                                                <div class="dot"></div>
                                            @endforeach
                                        @endisset


                                    </div>
                                </div>
                            </div>
                            <div class="nivoSlider">

                                @isset($sliders)
                                    @foreach($sliders as $slider)
                                        <a href="#">
                                            <img src="{{get_images($slider->photo)}}"
                                                 alt="" title="#htmlcaption_42">
                                        </a>
                                    @endforeach
                                @endisset


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
@section('content')

    <div id="main">
        @include('site.products.not-loggedin-modal')
        @include('site.products.alert-modal')
        @include('site.products.alert-modal2')

        <section id="content" class="page-home pagehome-three">
            <div class="container">
                <div class="row">
                    <div class="nov-row spacing-30 mt-15 col-lg-12 col-xs-12">
                        <div class="nov-row-wrap row">
                                  @isset($ads_first_zone)

                            <div class="nov-image col-lg-4 col-md-4">
                                <div class="block">
                                    <div class="block_content">
                                        <div class="effect">
                                            <a href="#"> <img class="img-fluid"
                                                              src="{{ get_images($ads_first_zone[0]->image_name ??'' )}}"
                                                              alt="banner3-1" title="banner3-1"></a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nov-image col-lg-4 col-md-4">
                                <div class="block">
                                    <div class="block_content">
                                        <div class="effect">
                                            <a href="#"> <img class="img-fluid"
                                                              src="{{ get_images($ads_first_zone[1]->image_name ??'' )}}"
                                                              alt="banner3-1" title="banner3-1"></a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nov-image col-lg-4 col-md-4">
                                <div class="block">
                                    <div class="block_content">
                                        <div class="effect">
                                            <a href="#"> <img class="img-fluid"
                                                              src="{{ get_images($ads_first_zone[2]->image_name ??'')}}"
                                                              alt="banner3-1" title="banner3-1"></a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endisset

                        </div>
                    </div>
                    <div class="nov-row  col-lg-12 col-xs-12">
                        <div class="nov-row-wrap row">
                            <div class="nov-productlist nov-countdown-productlist col-xl-4 col-lg-4 col-md-4  col-xs-12 col-md-12">
                                <div class="block block-product clearfix">
                                    <h2 class="title_block">
                                            {{ trans('site/home.Offers') }}
                                    </h2>
                                    <div class="block_content">
                                        <div id="productlist1326409273"
                                             class="product_list countdown-productlist countdown-column-1 owl-carousel owl-theme"
                                             data-autoplay="false" data-autoplaytimeout="6000" data-loop="false"
                                             data-margin="30" data-dots="false" data-nav="true" data-items="1"
                                             data-items_large="1" data-items_tablet="2" data-items_mobile="1">
                                            <div class="item item-list">
                                                @isset($product_special_price[0])
                                                <div class="product-miniature js-product-miniature first_item"
                                                     data-id-product="12" data-id-product-attribute="232"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="thumbnail-container">

                                                        <a href="{{ route('product_details',$product_special_price[0]->slug) }}"
                                                           class="thumbnail product-thumbnail two-image">
                                                            <img class="img-fluid image-cover"
                                                            @isset($product_special_price[0]->images[0])
                                                            src="{{ get_images($product_special_price[0]->images[0]->image_name)?? '' }}"
                                                            @endisset

                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/79-large_default/nam-volutpat-justo-a-vehicula.jpg"
                                                                 width="600" height="600">
                                                            <img class="img-fluid image-secondary"
                                                            @isset($product_special_price[0]->images[1])
                                                            src="{{ get_images($product_special_price[0]->images[1]->image_name)?? '' }}"
                                                            @endisset

                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/80-large_default/nam-volutpat-justo-a-vehicula.jpg"
                                                                 width="600" height="600">
                                                        </a>


                                                        <div class="product-flags discount">{{ trans('site/home.discount') }}</div>


                                                    </div>
                                                    <div class="product-description">
                                                        <div class="product-groups">

                                                            <div class="product-title" itemprop="name"><a
                                                                    href="home-appliance/12-232-nam-volutpat-justo-a-vehicula.html#/1-size-s/11-color-black">
                                                                    {{ $product_special_price[0]->description ?? ''}}</a></div>

                                                            <div class="product-comments">
                                                                <div class="star_content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                                <span>0 review</span>
                                                            </div>
                                                            <p class="seller_name">
                                                                <a title="View seller profile"
                                                                   href="jmarketplace/3_harry-makle/index.htm">
                                                                    <i class="fa fa-user"></i>
                                                                    Harry Makle
                                                                </a>
                                                            </p>

                                                            <div class="product-group-price">

                                                                <div class="product-price-and-shipping">

                                                                            <span itemprop="price"
                                                                                  class="price">{{ number_format($product_special_price[0]->special_price) ?? '' }}
                                                                                </span>


                                                                    <span class="regular-price">{{number_format($product_special_price[0]->price) ??''  }}</span>


                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="product-buttons d-flex justify-content-center"
                                                        itemprop="offers" itemscope=""
                                                        itemtype="http://schema.org/Offer">
                                                       <form
                                                          action=""
                                                          method="post" class="formAddToCart">
                                                          @csrf
                                                          <input type="hidden" name="id_product"
                                                               value="{{ $product_special_price[0]->id}}">

                                                        <a class="add-to-cart cart-addition" data-product-id="{{ $product_special_price[0]->id}}"  href="#"
                                                            style="{{ $product_special_price[0]->in_stock !=1 ?'display:none' :''  }}"
                                                           data-button-action="add-to-cart"><i
                                                                class="novicon-cart"></i><span>Add to cart</span></a>
                                                       </form>

                                                       <a class="addToWishlist  wishlistProd_22" href="#"
                                                       style="{{ $product_special_price[0]->in_stock !=1 ?'display:none' :''  }}"
                                                           data-product-id="{{ $product_special_price[0]->id }}"
                                                         >
                                                        <i class="fa fa-heart"></i>
                                                        <span>Add to Wishlist</span>
                                                        </a>
                                                        <a href="#" class="quick-view hidden-sm-down"
                                                           data-product-id="{{ $product_special_price[0]->id}}">
                                                        <i class="fa fa-search"></i><span> Quick view</span>
                                                    </a>
                                                </div>

                                                    </div>
                                                    <div class="countdownfree d-flex"
                                                         data-date="2021/12/30"></div>

                                                </div>

                                                @endisset
                                            </div>
                                            <div class="item item-list">
                                                @isset($product_special_price[1])
                                                <div class="product-miniature js-product-miniature first_item"
                                                     data-id-product="12" data-id-product-attribute="232"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="thumbnail-container">

                                                        <a href="{{ route('product_details',$product_special_price[1]->slug) }}"
                                                           class="thumbnail product-thumbnail two-image">
                                                            <img class="img-fluid image-cover"
                                                            @isset($product_special_price[1]->images[0])
                                                            src="{{ get_images($product_special_price[1]->images[0]->image_name)?? '' }}"
                                                            @endisset

                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/79-large_default/nam-volutpat-justo-a-vehicula.jpg"
                                                                 width="600" height="600">
                                                            <img class="img-fluid image-secondary"
                                                            @isset($product_special_price[1]->images[1])
                                                            src="{{ get_images($product_special_price[1]->images[1]->image_name)?? '' }}"
                                                            @endisset

                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/80-large_default/nam-volutpat-justo-a-vehicula.jpg"
                                                                 width="600" height="600">
                                                        </a>


                                                        <div class="product-flags discount">{{ trans('site/home.discount') }}</div>


                                                    </div>
                                                    <div class="product-description">
                                                        <div class="product-groups">

                                                            <div class="product-title" itemprop="name"><a
                                                                    href="home-appliance/12-232-nam-volutpat-justo-a-vehicula.html#/1-size-s/11-color-black">
                                                                    {{ $product_special_price[1]->description ??'' }}</a></div>

                                                            <div class="product-comments">
                                                                <div class="star_content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                                <span>0 review</span>
                                                            </div>
                                                            <p class="seller_name">
                                                                <a title="View seller profile"
                                                                   href="jmarketplace/3_harry-makle/index.htm">
                                                                    <i class="fa fa-user"></i>
                                                                    Harry Makle
                                                                </a>
                                                            </p>

                                                            <div class="product-group-price">

                                                                <div class="product-price-and-shipping">

                                                                            <span itemprop="price"
                                                                                  class="price">{{ number_format($product_special_price[1]->special_price) ??''}}
                                                                                </span>


                                                                    <span class="regular-price">{{number_format($product_special_price[1]->price) ??'' }}</span>


                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="product-buttons d-flex justify-content-center"
                                                        itemprop="offers" itemscope=""
                                                        itemtype="http://schema.org/Offer">
                                                       <form
                                                          action=""
                                                          method="post" class="formAddToCart">
                                                          @csrf
                                                          <input type="hidden" name="id_product"
                                                               value="{{ $product_special_price[1]->id}}">

                                                        <a class="add-to-cart cart-addition" data-product-id="{{ $product_special_price[1]->id}}"  href="#"
                                                            style="{{ $product_special_price[1]->in_stock !=1 ?'display:none' :''  }}"

                                                           data-button-action="add-to-cart"><i
                                                                class="novicon-cart"></i><span>Add to cart</span></a>
                                                       </form>

                                                       <a class="addToWishlist  wishlistProd_22" href="#"
                                                       style="{{ $product_special_price[1]->in_stock !=1 ?'display:none' :''  }}"

                                                           data-product-id="{{ $product_special_price[1]->id }}"
                                                         >
                                                        <i class="fa fa-heart"></i>
                                                        <span>Add to Wishlist</span>
                                                        </a>
                                                        <a href="#" class="quick-view hidden-sm-down"
                                                           data-product-id="{{ $product_special_price[1]->id}}">
                                                        <i class="fa fa-search"></i><span> Quick view</span>
                                                    </a>
                                                </div>

                                                    </div>
                                                    <div class="countdownfree d-flex"
                                                         data-date="2021/12/30"></div>

                                                </div>

                                                @endisset
                                            </div>

                                            <div class="item item-list">
                                                @isset($product_special_price[2])
                                                <div class="product-miniature js-product-miniature first_item"
                                                     data-id-product="12" data-id-product-attribute="232"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="thumbnail-container">

                                                        <a href="{{ route('product_details',$product_special_price[2]->slug) }}"
                                                           class="thumbnail product-thumbnail two-image">
                                                            <img class="img-fluid image-cover"
                                                            @isset($product_special_price[2]->images[0])
                                                            src="{{ get_images($product_special_price[2]->images[0]->image_name)?? '' }}"
                                                            @endisset

                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/79-large_default/nam-volutpat-justo-a-vehicula.jpg"
                                                                 width="600" height="600">
                                                            <img class="img-fluid image-secondary"
                                                            @isset($product_special_price[2]->images[1])
                                                            src="{{ get_images($product_special_price[2]->images[1]->image_name)?? '' }}"
                                                            @endisset

                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/80-large_default/nam-volutpat-justo-a-vehicula.jpg"
                                                                 width="600" height="600">
                                                        </a>


                                                        <div class="product-flags discount">{{ trans('site/home.discount') }}</div>


                                                    </div>
                                                    <div class="product-description">
                                                        <div class="product-groups">

                                                            <div class="product-title" itemprop="name"><a
                                                                    href="home-appliance/12-232-nam-volutpat-justo-a-vehicula.html#/1-size-s/11-color-black">
                                                                    {{ $product_special_price[2]->description ??''}}</a></div>

                                                            <div class="product-comments">
                                                                <div class="star_content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                                <span>0 review</span>
                                                            </div>
                                                            <p class="seller_name">
                                                                <a title="View seller profile"
                                                                   href="jmarketplace/3_harry-makle/index.htm">
                                                                    <i class="fa fa-user"></i>
                                                                    Harry Makle
                                                                </a>
                                                            </p>

                                                            <div class="product-group-price">

                                                                <div class="product-price-and-shipping">

                                                                            <span itemprop="price"
                                                                                  class="price">{{ number_format($product_special_price[2]->special_price) ??'' }}
                                                                                </span>


                                                                    <span class="regular-price">{{number_format($product_special_price[2]->price) ??'' }}</span>


                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="product-buttons d-flex justify-content-center"
                                                        itemprop="offers" itemscope=""
                                                        itemtype="http://schema.org/Offer">
                                                       <form
                                                          action=""
                                                          method="post" class="formAddToCart">
                                                          @csrf
                                                          <input type="hidden" name="id_product"
                                                               value="{{ $product_special_price[2]->id}}">

                                                        <a class="add-to-cart cart-addition" data-product-id="{{ $product_special_price[2]->id}}"  href="#"
                                                            style="{{ $product_special_price[2]->in_stock !=1 ?'display:none' :''  }}"

                                                           data-button-action="add-to-cart"><i
                                                                class="novicon-cart"></i><span>Add to cart</span></a>
                                                       </form>

                                                       <a class="addToWishlist  wishlistProd_22" href="#"
                                                       style="{{ $product_special_price[2]->in_stock !=1 ?'display:none' :''  }}"

                                                           data-product-id="{{ $product_special_price[2]->id }}"
                                                         >
                                                        <i class="fa fa-heart"></i>
                                                        <span>Add to Wishlist</span>
                                                        </a>
                                                        <a href="#" class="quick-view hidden-sm-down"
                                                           data-product-id="{{ $product_special_price[2]->id}}">
                                                        <i class="fa fa-search"></i><span> Quick view</span>
                                                    </a>
                                                </div>

                                                    </div>
                                                    <div class="countdownfree d-flex"
                                                         data-date="2021/12/30"></div>

                                                </div>

                                                @endisset
                                            </div>

                                            <div class="item item-list">
                                                @isset($product_special_price[3])
                                                <div class="product-miniature js-product-miniature first_item"
                                                     data-id-product="12" data-id-product-attribute="232"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="thumbnail-container">

                                                        <a href="{{ route('product_details',$product_special_price[0]->slug) }}"
                                                           class="thumbnail product-thumbnail two-image">
                                                            <img class="img-fluid image-cover"
                                                            @isset($product_special_price[3]->images[0])
                                                            src="{{ get_images($product_special_price[3]->images[0]->image_name)?? '' }}"
                                                            @endisset

                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/79-large_default/nam-volutpat-justo-a-vehicula.jpg"
                                                                 width="600" height="600">
                                                            <img class="img-fluid image-secondary"
                                                            @isset($product_special_price[3]->images[1])
                                                            src="{{ get_images($product_special_price[3]->images[1]->image_name)?? '' }}"
                                                            @endisset

                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/80-large_default/nam-volutpat-justo-a-vehicula.jpg"
                                                                 width="600" height="600">
                                                        </a>


                                                        <div class="product-flags discount">{{ trans('site/home.discount') }}</div>


                                                    </div>
                                                    <div class="product-description">
                                                        <div class="product-groups">

                                                            <div class="product-title" itemprop="name"><a
                                                                    href="home-appliance/12-232-nam-volutpat-justo-a-vehicula.html#/1-size-s/11-color-black">
                                                                    {{ $product_special_price[3]->description  ??''}}</a></div>

                                                            <div class="product-comments">
                                                                <div class="star_content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                                <span>0 review</span>
                                                            </div>
                                                            <p class="seller_name">
                                                                <a title="View seller profile"
                                                                   href="jmarketplace/3_harry-makle/index.htm">
                                                                    <i class="fa fa-user"></i>
                                                                    Harry Makle
                                                                </a>
                                                            </p>

                                                            <div class="product-group-price">

                                                                <div class="product-price-and-shipping">

                                                                            <span itemprop="price"
                                                                                  class="price">{{ number_format($product_special_price[3]->special_price)??'' }}
                                                                                </span>


                                                                    <span class="regular-price">{{number_format($product_special_price[3]->price) ??'' }}</span>


                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="product-buttons d-flex justify-content-center"
                                                        itemprop="offers" itemscope=""
                                                        itemtype="http://schema.org/Offer">
                                                       <form
                                                          action=""
                                                          method="post" class="formAddToCart">
                                                          @csrf
                                                          <input type="hidden" name="id_product"
                                                               value="{{ $product_special_price[3]->id}}">

                                                        <a class="add-to-cart cart-addition" data-product-id="{{ $product_special_price[3]->id}}"  href="#"
                                                            style="{{ $product_special_price[3]->in_stock !=1 ?'display:none' :''  }}"

                                                           data-button-action="add-to-cart"><i
                                                                class="novicon-cart"></i><span>Add to cart</span></a>
                                                       </form>

                                                       <a class="addToWishlist  wishlistProd_22" href="#"
                                                       style="{{ $product_special_price[3]->in_stock !=1 ?'display:none' :''  }}"

                                                           data-product-id="{{ $product_special_price[3]->id }}"
                                                         >
                                                        <i class="fa fa-heart"></i>
                                                        <span>Add to Wishlist</span>
                                                        </a>
                                                        <a href="#" class="quick-view hidden-sm-down"
                                                           data-product-id="{{ $product_special_price[3]->id}}">
                                                        <i class="fa fa-search"></i><span> Quick view</span>
                                                    </a>
                                                </div>

                                                    </div>
                                                    <div class="countdownfree d-flex"
                                                         data-date="2021/12/30"></div>

                                                </div>

                                                @endisset
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="nov-productlist  productlist-rows     col-xl-8 col-lg-8 col-md-8 col-xs-12 col-md-12">
                                <div class="block block-product clearfix">
                                    <h2 class="title_block">
                                        {{ trans('site/home.NEW ARRIVALS') }}
                                    </h2>
                                    <div class="block_content">
                                        <div id="productlist303857090"
                                             class="product_list grid owl-carousel owl-theme multi-row"
                                             data-autoplay="false" data-autoplaytimeout="6000" data-loop="false"
                                             data-margin="30" data-dots="false" data-nav="true" data-items="2"
                                             data-items_large="2" data-items_tablet="3" data-items_mobile="1">
                                            <div class="item  text-center">
                                                @isset($products[0])

                                                <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w40 pl-0">
                                                        <div class="thumbnail-container">

                                                            <a href="{{ route('product_details',$products[0]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($products[0]->images[0])
                                                                src="{{ get_images($products[0]->images[0]->image_name)?? '' }}"
                                                                @endisset
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                @isset($products[0]->images[1])
                                                                src="{{ get_images($products[0]->images[1]->image_name)?? '' }}"
                                                                @endisset
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w60 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$products[0]->slug) }}">
                                                                        {{ $products[0]->description ??'' }}</a></div>

                                                                        <div class="product-group-price">

                                                                            <div class="product-price-and-shipping">

                                                                                @isset($products[0]->special_price)

                                                                                <span itemprop="price" class="price">
                                                                                    {{ number_format($products[0]->special_price)  }}
                                                                                </span>
                                                                                <span class="regular-price">{{number_format($products[0]->price) ??'' }}</span>

                                                                                @else

                                                                                <span itemprop="price" class="price">
                                                                                    {{ number_format($products[0]->price) ??'' }}
                                                                                </span>

                                                                                @endisset



                                                                            </div>

                                                                        </div>
                                                            </div>

                                                            <div class="product-buttons d-flex justify-content-center"
                                                               itemprop="offers" itemscope=""
                                                               itemtype="http://schema.org/Offer">
                                                              <form
                                                                 action=""
                                                                 method="post" class="formAddToCart">
                                                                 @csrf
                                                                 <input type="hidden" name="id_product"
                                                                      value="{{ $products[0]->id}}">

                                                               <a class="add-to-cart cart-addition" data-product-id="{{ $products[0]->id}}"  href="#"
                                                                style="{{ $products[0]->in_stock !=1 ?'display:none' :''  }}"

                                                                  data-button-action="add-to-cart"><i
                                                                       class="novicon-cart"></i><span>Add to cart</span></a>
                                                              </form>

                                                              <a class="addToWishlist  wishlistProd_22" href="#"
                                                              style="{{ $products[0]->in_stock !=1 ?'display:none' :''  }}"

                                                                  data-product-id="{{ $products[0]->id }}"
                                                                >
                                                               <i class="fa fa-heart"></i>
                                                               <span>Add to Wishlist</span>
                                                               </a>
                                                               <a href="#" class="quick-view hidden-sm-down"
                                                                  data-product-id="{{ $products[0]->id}}">
                                                               <i class="fa fa-search"></i><span> Quick view</span>
                                                           </a>
                                                       </div>


                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset

                                                @isset($products[1])

                                                <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w40 pl-0">
                                                        <div class="thumbnail-container">

                                                            <a href="{{ route('product_details',$products[1]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($products[1]->images[0])
                                                                src="{{ get_images($products[1]->images[0]->image_name)?? '' }}"
                                                                @endisset
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                @isset($products[1]->images[1])
                                                                src="{{ get_images($products[1]->images[1]->image_name)?? '' }}"

                                                                @endisset
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w60 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$products[1]->slug) }}">
                                                                        {{ $products[1]->description ??'' }}</a></div>

                                                                        <div class="product-group-price">

                                                                            <div class="product-price-and-shipping">

                                                                                @isset($products[1]->special_price)

                                                                                <span itemprop="price" class="price">
                                                                                    {{ number_format($products[1]->special_price)  }}
                                                                                </span>
                                                                                <span class="regular-price">{{number_format($products[1]->price) ??'' }}</span>

                                                                                @else

                                                                                <span itemprop="price" class="price">
                                                                                    {{ number_format($products[1]->price) }}
                                                                                </span>

                                                                                @endisset



                                                                            </div>

                                                                        </div>

                                                                </div>
                                                                <div class="product-buttons d-flex justify-content-center"
                                                                itemprop="offers" itemscope=""
                                                                itemtype="http://schema.org/Offer">
                                                               <form
                                                                  action=""
                                                                  method="post" class="formAddToCart">
                                                                  @csrf
                                                                  <input type="hidden" name="id_product"
                                                                       value="{{ $products[1]->id}}">

                                                                <a class="add-to-cart cart-addition" data-product-id="{{ $products[1]->id}}"  href="#"
                                                                    style="{{ $products[1]->in_stock !=1 ?'display:none' :''  }}"

                                                                   data-button-action="add-to-cart"><i
                                                                        class="novicon-cart"></i><span>Add to cart</span></a>
                                                               </form>

                                                               <a class="addToWishlist  wishlistProd_22" href="#"
                                                               style="{{ $products[1]->in_stock !=1 ?'display:none' :''  }}"

                                                                   data-product-id="{{ $products[1]->id }}"
                                                                 >
                                                                <i class="fa fa-heart"></i>
                                                                <span>Add to Wishlist</span>
                                                                </a>
                                                                <a href="#" class="quick-view hidden-sm-down"
                                                                   data-product-id="{{ $products[1]->id}}">
                                                                <i class="fa fa-search"></i><span> Quick view</span>
                                                            </a>
                                                        </div>
                                                         </div>
                                                    </div>
                                                </div>
                                                @endisset


                                                @isset($products[2])

                                                <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w40 pl-0">
                                                        <div class="thumbnail-container">

                                                            <a href="{{ route('product_details',$products[2]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($products[2]->images[0])
                                                                src="{{ get_images($products[2]->images[0]->image_name)?? '' }}"
                                                                @endisset
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                @isset($products[2]->images[1])
                                                                src="{{ get_images($products[2]->images[1]->image_name)?? '' }}"

                                                                @endisset
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w60 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$products[2]->slug) }}">
                                                                        {{ $products[2]->description ??'' }}</a></div>

                                                                        <div class="product-group-price">

                                                                            <div class="product-price-and-shipping">

                                                                                @isset($products[2]->special_price)

                                                                                <span itemprop="price" class="price">
                                                                                    {{ number_format($products[2]->special_price) }}
                                                                                </span>
                                                                                <span class="regular-price">{{number_format($products[2]->price) ??'' }}</span>

                                                                                @else

                                                                                <span itemprop="price" class="price">
                                                                                    {{ number_format($products[2]->price) ??'' }}
                                                                                </span>

                                                                                @endisset



                                                                            </div>

                                                                        </div>
                                                            </div>

                                                            <div class="product-buttons d-flex justify-content-center"
                                                            itemprop="offers" itemscope=""
                                                            itemtype="http://schema.org/Offer">
                                                           <form
                                                               action=""
                                                               method="post" class="formAddToCart">
                                                               @csrf
                                                               <input type="hidden" name="id_product"
                                                                      value="{{ $products[2]->id}}">

                                                               <a class="add-to-cart cart-addition" data-product-id="{{ $products[2]->id}}"  href="#"
                                                                style="{{ $products[2]->in_stock !=1 ?'display:none' :''  }}"

                                                                  data-button-action="add-to-cart"><i
                                                                       class="novicon-cart"></i><span>Add to cart</span></a>
                                                           </form>

                                                           <a class="addToWishlist  wishlistProd_22" href="#"
                                                           style="{{ $products[2]->in_stock !=1 ?'display:none' :''  }}"

                                                              data-product-id="{{ $products[2]->id }}"
                                                           >
                                                               <i class="fa fa-heart"></i>
                                                               <span>Add to Wishlist</span>
                                                           </a>
                                                           <a href="#" class="quick-view hidden-sm-down"
                                                              data-product-id="{{ $products[2]->id}}">
                                                               <i class="fa fa-search"></i><span> Quick view</span>
                                                           </a>
                                                       </div>


                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            @endisset

                                            <div class="item  text-center">
                                                @isset($products[3])

                                                <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w40 pl-0">
                                                        <div class="thumbnail-container">

                                                            <a href="{{ route('product_details',$products[3]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($products[3]->images[0])
                                                                src="{{ get_images($products[3]->images[0]->image_name)?? '' }}"
                                                                @endisset
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                @isset($products[3]->images[1])
                                                                src="{{ get_images($products[3]->images[1]->image_name)?? '' }}"

                                                                @endisset
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w60 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$products[3]->slug) }}">
                                                                        {{ $products[3]->description ??'' }}</a></div>

                                                                        <div class="product-group-price">

                                                                            <div class="product-price-and-shipping">

                                                                                @isset($products[3]->special_price)

                                                                                <span itemprop="price" class="price">
                                                                                    {{ number_format($products[3]->special_price) }}
                                                                                </span>
                                                                                <span class="regular-price">{{number_format($products[3]->price) ??'' }}</span>

                                                                                @else

                                                                                <span itemprop="price" class="price">
                                                                                    {{ number_format($products[3]->price) ??''}}
                                                                                </span>

                                                                                @endisset



                                                                            </div>

                                                                        </div>
                                                            </div>

                                                            <div class="product-buttons d-flex justify-content-center"
                                                            itemprop="offers" itemscope=""
                                                            itemtype="http://schema.org/Offer">
                                                           <form
                                                               action=""
                                                               method="post" class="formAddToCart">
                                                               @csrf
                                                               <input type="hidden" name="id_product"
                                                                      value="{{ $products[3]->id}}">

                                                               <a class="add-to-cart cart-addition" data-product-id="{{ $products[3]->id}}"  href="#"
                                                                style="{{ $products[3]->in_stock !=1 ?'display:none' :''  }}"

                                                                  data-button-action="add-to-cart"><i
                                                                       class="novicon-cart"></i><span>Add to cart</span></a>
                                                           </form>

                                                           <a class="addToWishlist  wishlistProd_22" href="#"
                                                           style="{{ $products[3]->in_stock !=1 ?'display:none' :''  }}"

                                                              data-product-id="{{ $products[3]->id }}"
                                                           >
                                                               <i class="fa fa-heart"></i>
                                                               <span>Add to Wishlist</span>
                                                           </a>
                                                           <a href="#" class="quick-view hidden-sm-down"
                                                              data-product-id="{{ $products[3]->id}}">
                                                               <i class="fa fa-search"></i><span> Quick view</span>
                                                           </a>
                                                       </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset


                                                @isset($products[4])

                                                <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w40 pl-0">
                                                        <div class="thumbnail-container">

                                                            <a href="{{ route('product_details',$products[4]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($products[4]->images[0])
                                                                src="{{ get_images($products[4]->images[0]->image_name)?? '' }}"
                                                                @endisset
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                @isset($products[4]->images[1])
                                                                src="{{ get_images($products[4]->images[1]->image_name)?? '' }}"

                                                                @endisset
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w60 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$products[4]->slug) }}">
                                                                        {{ $products[4]->description ??'' }}</a></div>

                                                                        <div class="product-group-price">

                                                                            <div class="product-price-and-shipping">

                                                                                @isset($products[4]->special_price)

                                                                                <span itemprop="price" class="price">
                                                                                    {{ number_format($products[4]->special_price) }}
                                                                                </span>
                                                                                <span class="regular-price">{{number_format($products[4]->price) }}</span>

                                                                                @else

                                                                                <span itemprop="price" class="price">
                                                                                    {{ number_format($products[4]->price) }}
                                                                                </span>

                                                                                @endisset



                                                                            </div>

                                                                        </div>
                                                            </div>
                                                   <div class="product-buttons d-flex justify-content-center"
                                                            itemprop="offers" itemscope=""
                                                            itemtype="http://schema.org/Offer">
                                                           <form
                                                               action=""
                                                               method="post" class="formAddToCart">
                                                               @csrf
                                                               <input type="hidden" name="id_product"
                                                                      value="{{ $products[4]->id}}">

                                                               <a class="add-to-cart cart-addition" data-product-id="{{ $products[4]->id}}"  href="#"
                                                                style="{{ $products[4]->in_stock !=1 ?'display:none' :''  }}"

                                                                  data-button-action="add-to-cart"><i
                                                                       class="novicon-cart"></i><span>Add to cart</span></a>
                                                           </form>

                                                           <a class="addToWishlist  wishlistProd_22" href="#"
                                                           style="{{ $products[4]->in_stock !=1 ?'display:none' :''  }}"

                                                              data-product-id="{{ $products[4]->id }}"
                                                           >
                                                               <i class="fa fa-heart"></i>
                                                               <span>Add to Wishlist</span>
                                                           </a>
                                                           <a href="#" class="quick-view hidden-sm-down"
                                                              data-product-id="{{ $products[4]->id}}">
                                                               <i class="fa fa-search"></i><span> Quick view</span>
                                                           </a>
                                                    </div>


                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset

                                                @isset($products[5])

                                                <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w40 pl-0">
                                                        <div class="thumbnail-container">

                                                            <a href="{{ route('product_details',$products[5]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($products[5]->images[0])
                                                                src="{{ get_images($products[5]->images[0]->image_name)?? '' }}"
                                                                @endisset
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                @isset($products[5]->images[1])
                                                                src="{{ get_images($products[5]->images[1]->image_name)?? '' }}"

                                                                @endisset
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w60 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$products[5]->slug) }}">
                                                                        {{ $products[5]->description ??'' }}</a></div>

                                                                        <div class="product-group-price">

                                                                            <div class="product-price-and-shipping">

                                                                                @isset($products[5]->special_price)

                                                                                <span itemprop="price" class="price">
                                                                                    {{ number_format($products[5]->special_price) }}
                                                                                </span>
                                                                                <span class="regular-price">{{number_format($products[5]->price) }}</span>

                                                                                @else

                                                                                <span itemprop="price" class="price">
                                                                                    {{ number_format($products[5]->price) }}
                                                                                </span>

                                                                                @endisset



                                                                            </div>

                                                                        </div>
                                                            </div>
                                                            <div class="product-buttons d-flex justify-content-center"
                                                            itemprop="offers" itemscope=""
                                                            itemtype="http://schema.org/Offer">
                                                           <form
                                                               action=""
                                                               method="post" class="formAddToCart">
                                                               @csrf
                                                               <input type="hidden" name="id_product"
                                                                      value="{{ $products[5]->id}}">

                                                               <a class="add-to-cart cart-addition" data-product-id="{{ $products[5]->id}}"  href="#"
                                                                style="{{ $products[5]->in_stock !=1 ?'display:none' :''  }}"

                                                                  data-button-action="add-to-cart"><i
                                                                       class="novicon-cart"></i><span>Add to cart</span></a>
                                                           </form>

                                                           <a class="addToWishlist  wishlistProd_22" href="#"
                                                           style="{{ $products[5]->in_stock !=1 ?'display:none' :''  }}"

                                                              data-product-id="{{ $products[5]->id }}"
                                                           >
                                                               <i class="fa fa-heart"></i>
                                                               <span>Add to Wishlist</span>
                                                           </a>
                                                           <a href="#" class="quick-view hidden-sm-down"
                                                              data-product-id="{{ $products[5]->id}}">
                                                               <i class="fa fa-search"></i><span> Quick view</span>
                                                           </a>
                                                    </div>


                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset


                                            </div>


                                            <div class="item  text-center">
                                                @isset($products[6])

                                                <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w40 pl-0">
                                                        <div class="thumbnail-container">

                                                            <a href="{{ route('product_details',$products[6]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($products[6]->images[0])
                                                                src="{{ get_images($products[6]->images[0]->image_name)?? '' }}"
                                                                @endisset
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                @isset($products[6]->images[1])
                                                                src="{{ get_images($products[6]->images[1]->image_name)?? '' }}"

                                                                @endisset
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w60 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$products[6]->slug) }}">
                                                                        {{ $products[6]->description ??'' }}</a></div>

                                                                        <div class="product-group-price">

                                                                            <div class="product-price-and-shipping">

                                                                                @isset($products[6]->special_price)

                                                                                <span itemprop="price" class="price">
                                                                                    {{ number_format($products[6]->special_price) }}
                                                                                </span>
                                                                                <span class="regular-price">{{number_format($products[6]->price) }}</span>

                                                                                @else

                                                                                <span itemprop="price" class="price">
                                                                                    {{ number_format($products[6]->price) }}
                                                                                </span>

                                                                                @endisset



                                                                            </div>

                                                                        </div>
                                                            </div>

                                                            <div class="product-buttons d-flex justify-content-center"
                                                            itemprop="offers" itemscope=""
                                                            itemtype="http://schema.org/Offer">
                                                           <form
                                                               action=""
                                                               method="post" class="formAddToCart">
                                                               @csrf
                                                               <input type="hidden" name="id_product"
                                                                      value="{{ $products[6]->id}}">

                                                               <a class="add-to-cart cart-addition" data-product-id="{{ $products[6]->id}}"  href="#"
                                                                style="{{ $products[6]->in_stock !=1 ?'display:none' :''  }}"

                                                                  data-button-action="add-to-cart"><i
                                                                       class="novicon-cart"></i><span>Add to cart</span></a>
                                                           </form>

                                                           <a class="addToWishlist  wishlistProd_22" href="#"
                                                           style="{{ $products[6]->in_stock !=1 ?'display:none' :''  }}"

                                                              data-product-id="{{ $products[6]->id }}"
                                                           >
                                                               <i class="fa fa-heart"></i>
                                                               <span>Add to Wishlist</span>
                                                           </a>
                                                           <a href="#" class="quick-view hidden-sm-down"
                                                              data-product-id="{{ $products[6]->id}}">
                                                               <i class="fa fa-search"></i><span> Quick view</span>
                                                           </a>
                                                    </div>


                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset

                                                @isset($products[7])
                                                <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w40 pl-0">
                                                        <div class="thumbnail-container">

                                                            <a href="{{ route('product_details',$products[7]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($products[7]->images[0])
                                                                src="{{ get_images($products[7]->images[0]->image_name)?? '' }}"
                                                                @endisset
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                @isset($products[7]->images[1])
                                                                src="{{ get_images($products[7]->images[1]->image_name)?? '' }}"

                                                                @endisset
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w60 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$products[7]->slug) }}">
                                                                        {{ $products[7]->description ??'' }}</a></div>

                                                                        <div class="product-group-price">

                                                                            <div class="product-price-and-shipping">

                                                                                @isset($products[7]->special_price)

                                                                                <span itemprop="price" class="price">
                                                                                    {{ number_format($products[7]->special_price) }}
                                                                                </span>
                                                                                <span class="regular-price">{{number_format($products[7]->price) }}</span>

                                                                                @else

                                                                                <span itemprop="price" class="price">
                                                                                    {{ number_format($products[7]->price) }}
                                                                                </span>

                                                                                @endisset



                                                                            </div>

                                                                        </div>
                                                            </div>

                                                            <div class="product-buttons d-flex justify-content-center"
                                                            itemprop="offers" itemscope=""
                                                            itemtype="http://schema.org/Offer">
                                                           <form
                                                               action=""
                                                               method="post" class="formAddToCart">
                                                               @csrf
                                                               <input type="hidden" name="id_product"
                                                                      value="{{ $products[7]->id}}">

                                                               <a class="add-to-cart cart-addition" data-product-id="{{ $products[7]->id}}"  href="#"
                                                                style="{{ $products[7]->in_stock !=1 ?'display:none' :''  }}"

                                                                  data-button-action="add-to-cart"><i
                                                                       class="novicon-cart"></i><span>Add to cart</span></a>
                                                           </form>

                                                           <a class="addToWishlist  wishlistProd_22" href="#"
                                                           style="{{ $products[7]->in_stock !=1 ?'display:none' :''  }}"

                                                              data-product-id="{{ $products[7]->id }}"
                                                           >
                                                               <i class="fa fa-heart"></i>
                                                               <span>Add to Wishlist</span>
                                                           </a>
                                                           <a href="#" class="quick-view hidden-sm-down"
                                                              data-product-id="{{ $products[7]->id}}">
                                                               <i class="fa fa-search"></i><span> Quick view</span>
                                                           </a>
                                                    </div>


                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset


                                                @isset($products[8])

                                                <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w40 pl-0">
                                                        <div class="thumbnail-container">

                                                            <a href="{{ route('product_details',$products[8]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($products[8]->images[0])
                                                                src="{{ get_images($products[8]->images[0]->image_name)?? '' }}"
                                                                @endisset
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                @isset($products[8]->images[1])
                                                                src="{{ get_images($products[8]->images[1]->image_name)?? '' }}"

                                                                @endisset
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w60 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$products[8]->slug) }}">
                                                                        {{ $products[8]->description ??'' }}</a></div>

                                                                        <div class="product-group-price">

                                                                            <div class="product-price-and-shipping">

                                                                                @isset($products[8]->special_price)

                                                                                <span itemprop="price" class="price">
                                                                                    {{ number_format($products[8]->special_price) }}
                                                                                </span>
                                                                                <span class="regular-price">{{number_format($products[8]->price) }}</span>

                                                                                @else

                                                                                <span itemprop="price" class="price">
                                                                                    {{ number_format($products[8]->price) }}
                                                                                </span>

                                                                                @endisset



                                                                            </div>

                                                                        </div>
                                                            </div>
                                                            <div class="product-buttons d-flex justify-content-center"
                                                            itemprop="offers" itemscope=""
                                                            itemtype="http://schema.org/Offer">
                                                           <form
                                                               action=""
                                                               method="post" class="formAddToCart">
                                                               @csrf
                                                               <input type="hidden" name="id_product"
                                                                      value="{{ $products[8]->id}}">

                                                               <a class="add-to-cart cart-addition" data-product-id="{{ $products[8]->id}}"  href="#"
                                                                style="{{ $products[8]->in_stock !=1 ?'display:none' :''  }}"

                                                                  data-button-action="add-to-cart"><i
                                                                       class="novicon-cart"></i><span>Add to cart</span></a>
                                                           </form>

                                                           <a class="addToWishlist  wishlistProd_22" href="#"
                                                           style="{{ $products[8]->in_stock !=1 ?'display:none' :''  }}"

                                                              data-product-id="{{ $products[8]->id }}"
                                                           >
                                                               <i class="fa fa-heart"></i>
                                                               <span>Add to Wishlist</span>
                                                           </a>
                                                           <a href="#" class="quick-view hidden-sm-down"
                                                              data-product-id="{{ $products[8]->id}}">
                                                               <i class="fa fa-search"></i><span> Quick view</span>
                                                           </a>
                                                    </div>



                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset


                                            </div>


                                            <div class="item  text-center">
                                                @isset($products[9])

                                                <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w40 pl-0">
                                                        <div class="thumbnail-container">

                                                            <a href="{{ route('product_details',$products[9]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($products[9]->images[0])
                                                                src="{{ get_images($products[9]->images[0]->image_name)?? '' }}"
                                                                @endisset
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                @isset($products[9]->images[1])
                                                                src="{{ get_images($products[9]->images[1]->image_name)?? '' }}"

                                                                @endisset
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w60 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$products[9]->slug) }}">
                                                                        {{ $products[9]->description ??'' }}</a></div>

                                                                        <div class="product-group-price">

                                                                            <div class="product-price-and-shipping">

                                                                                @isset($products[9]->special_price)

                                                                                <span itemprop="price" class="price">
                                                                                    {{ number_format($products[9]->special_price) }}
                                                                                </span>
                                                                                <span class="regular-price">{{number_format($products[9]->price) }}</span>

                                                                                @else

                                                                                <span itemprop="price" class="price">
                                                                                    {{ number_format($products[9]->price) }}
                                                                                </span>

                                                                                @endisset



                                                                            </div>

                                                                        </div>
                                                            </div>


                                                            <div class="product-buttons d-flex justify-content-center"
                                                            itemprop="offers" itemscope=""
                                                            itemtype="http://schema.org/Offer">
                                                           <form
                                                               action=""
                                                               method="post" class="formAddToCart">
                                                               @csrf
                                                               <input type="hidden" name="id_product"
                                                                      value="{{ $products[9]->id}}">

                                                               <a class="add-to-cart cart-addition" data-product-id="{{ $products[9]->id}}"  href="#"
                                                                style="{{ $products[9]->in_stock !=1 ?'display:none' :''  }}"

                                                                  data-button-action="add-to-cart"><i
                                                                       class="novicon-cart"></i><span>Add to cart</span></a>
                                                           </form>

                                                           <a class="addToWishlist  wishlistProd_22" href="#"
                                                           style="{{ $products[9]->in_stock !=1 ?'display:none' :''  }}"

                                                              data-product-id="{{ $products[9]->id }}"
                                                           >
                                                               <i class="fa fa-heart"></i>
                                                               <span>Add to Wishlist</span>
                                                           </a>
                                                           <a href="#" class="quick-view hidden-sm-down"
                                                              data-product-id="{{ $products[9]->id}}">
                                                               <i class="fa fa-search"></i><span> Quick view</span>
                                                           </a>
                                                    </div>


                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset

                                                @isset($products[10])

                                                <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w40 pl-0">
                                                        <div class="thumbnail-container">

                                                            <a href="{{ route('product_details',$products[10]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($products[10]->images[0])
                                                                src="{{ get_images($products[10]->images[0]->image_name)?? '' }}"
                                                                @endisset
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                @isset($products[10]->images[1])
                                                                src="{{ get_images($products[10]->images[1]->image_name)?? '' }}"

                                                                @endisset
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w60 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$products[10]->slug) }}">
                                                                        {{ $products[10]->description ??'' }}</a></div>

                                                                        <div class="product-group-price">

                                                                            <div class="product-price-and-shipping">

                                                                                @isset($products[10]->special_price)

                                                                                <span itemprop="price" class="price">
                                                                                    {{ number_format($products[10]->special_price) }}
                                                                                </span>
                                                                                <span class="regular-price">{{number_format($products[10]->price) }}</span>

                                                                                @else

                                                                                <span itemprop="price" class="price">
                                                                                    {{ number_format($products[10]->price) }}
                                                                                </span>

                                                                                @endisset



                                                                            </div>

                                                                        </div>
                                                            </div>

                                                            <div class="product-buttons d-flex justify-content-center"
                                                            itemprop="offers" itemscope=""
                                                            itemtype="http://schema.org/Offer">
                                                           <form
                                                               action=""
                                                               method="post" class="formAddToCart">
                                                               @csrf
                                                               <input type="hidden" name="id_product"
                                                                      value="{{ $products[10]->id}}">

                                                               <a class="add-to-cart cart-addition" data-product-id="{{ $products[10]->id}}"  href="#"
                                                                style="{{ $products[10]->in_stock !=1 ?'display:none' :''  }}"

                                                                  data-button-action="add-to-cart"><i
                                                                       class="novicon-cart"></i><span>Add to cart</span></a>
                                                           </form>

                                                           <a class="addToWishlist  wishlistProd_22" href="#"
                                                           style="{{ $products[10]->in_stock !=1 ?'display:none' :''  }}"

                                                              data-product-id="{{ $products[10]->id }}"
                                                           >
                                                               <i class="fa fa-heart"></i>
                                                               <span>Add to Wishlist</span>
                                                           </a>
                                                           <a href="#" class="quick-view hidden-sm-down"
                                                              data-product-id="{{ $products[10]->id}}">
                                                               <i class="fa fa-search"></i><span> Quick view</span>
                                                           </a>
                                                    </div>


                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset

                                                @isset($products[11])

                                                <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w40 pl-0">
                                                        <div class="thumbnail-container">

                                                            <a href="{{ route('product_details',$products[11]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($products[11]->images[0])
                                                                src="{{ get_images($products[11]->images[0]->image_name)?? '' }}"
                                                                @endisset
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                @isset($products[11]->images[1])
                                                                src="{{ get_images($products[11]->images[1]->image_name)?? '' }}"

                                                                @endisset
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w60 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$products[11]->slug) }}">
                                                                        {{ $products[11]->description ??'' }}</a></div>

                                                                        <div class="product-group-price">

                                                                            <div class="product-price-and-shipping">

                                                                                @isset($products[11]->special_price)

                                                                                <span itemprop="price" class="price">
                                                                                    {{ number_format($products[11]->special_price) }}
                                                                                </span>
                                                                                <span class="regular-price">{{number_format($products[11]->price) }}</span>

                                                                                @else

                                                                                <span itemprop="price" class="price">
                                                                                    {{ number_format($products[11]->price) }}
                                                                                </span>

                                                                                @endisset



                                                                            </div>

                                                                        </div>
                                                            </div>

                                                            <div class="product-buttons d-flex justify-content-center"
                                                            itemprop="offers" itemscope=""
                                                            itemtype="http://schema.org/Offer">
                                                           <form
                                                               action=""
                                                               method="post" class="formAddToCart">
                                                               @csrf
                                                               <input type="hidden" name="id_product"
                                                                      value="{{ $products[11]->id}}">

                                                               <a class="add-to-cart cart-addition" data-product-id="{{ $products[11]->id}}"  href="#"
                                                                style="{{ $products[11]->in_stock !=1 ?'display:none' :''  }}"

                                                                  data-button-action="add-to-cart"><i
                                                                       class="novicon-cart"></i><span>Add to cart</span></a>
                                                           </form>

                                                           <a class="addToWishlist  wishlistProd_22" href="#"
                                                           style="{{ $products[11]->in_stock !=1 ?'display:none' :''  }}"

                                                              data-product-id="{{ $products[11]->id }}"
                                                           >
                                                               <i class="fa fa-heart"></i>
                                                               <span>Add to Wishlist</span>
                                                           </a>
                                                           <a href="#" class="quick-view hidden-sm-down"
                                                              data-product-id="{{ $products[11]->id}}">
                                                               <i class="fa fa-search"></i><span> Quick view</span>
                                                           </a>
                                                    </div>


                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset

                                            </div>



                                            <div class="item  text-center">
                                                @isset($products[12])

                                                <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w40 pl-0">
                                                        <div class="thumbnail-container">

                                                            <a href="{{ route('product_details',$products[12]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($products[12]->images[0])
                                                                src="{{ get_images($products[12]->images[0]->image_name)?? '' }}"
                                                                @endisset
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                @isset($products[12]->images[1])
                                                                src="{{ get_images($products[12]->images[1]->image_name)?? '' }}"

                                                                @endisset
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w60 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$products[12]->slug) }}">
                                                                        {{ $products[12]->description ??'' }}</a></div>

                                                                        <div class="product-group-price">

                                                                            <div class="product-price-and-shipping">

                                                                                @isset($products[12]->special_price)

                                                                                <span itemprop="price" class="price">
                                                                                    {{ number_format($products[12]->special_price) }}
                                                                                </span>
                                                                                <span class="regular-price">{{number_format($products[12]->price) }}</span>

                                                                                @else

                                                                                <span itemprop="price" class="price">
                                                                                    {{ number_format($products[12]->price) }}
                                                                                </span>

                                                                                @endisset



                                                                            </div>

                                                                        </div>
                                                            </div>

                                                            <div class="product-buttons d-flex justify-content-center"
                                                            itemprop="offers" itemscope=""
                                                            itemtype="http://schema.org/Offer">
                                                           <form
                                                               action=""
                                                               method="post" class="formAddToCart">
                                                               @csrf
                                                               <input type="hidden" name="id_product"
                                                                      value="{{ $products[12]->id}}">

                                                               <a class="add-to-cart cart-addition" data-product-id="{{ $products[12]->id}}"  href="#"
                                                                style="{{ $products[12]->in_stock !=1 ?'display:none' :''  }}"

                                                                  data-button-action="add-to-cart"><i
                                                                       class="novicon-cart"></i><span>Add to cart</span></a>
                                                           </form>

                                                           <a class="addToWishlist  wishlistProd_22" href="#"
                                                           style="{{ $products[12]->in_stock !=1 ?'display:none' :''  }}"

                                                              data-product-id="{{ $products[12]->id }}"
                                                           >
                                                               <i class="fa fa-heart"></i>
                                                               <span>Add to Wishlist</span>
                                                           </a>
                                                           <a href="#" class="quick-view hidden-sm-down"
                                                              data-product-id="{{ $products[12]->id}}">
                                                               <i class="fa fa-search"></i><span> Quick view</span>
                                                           </a>
                                                    </div>


                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset

                                                @isset($products[13])

                                                <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w40 pl-0">
                                                        <div class="thumbnail-container">

                                                            <a href="{{ route('product_details',$products[13]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($products[13]->images[0])
                                                                src="{{ get_images($products[13]->images[0]->image_name)?? '' }}"
                                                                @endisset
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                @isset($products[13]->images[1])
                                                                src="{{ get_images($products[13]->images[1]->image_name)?? '' }}"

                                                                @endisset
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w60 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$products[13]->slug) }}">
                                                                        {{ $products[13]->description ??'' }}</a></div>

                                                                        <div class="product-group-price">

                                                                            <div class="product-price-and-shipping">

                                                                                @isset($products[13]->special_price)

                                                                                <span itemprop="price" class="price">
                                                                                    {{ number_format($products[13]->special_price) }}
                                                                                </span>
                                                                                <span class="regular-price">{{number_format($products[13]->price) }}</span>

                                                                                @else

                                                                                <span itemprop="price" class="price">
                                                                                    {{ number_format($products[13]->price) }}
                                                                                </span>

                                                                                @endisset



                                                                            </div>

                                                                        </div>
                                                            </div>

                                                            <div class="product-buttons d-flex justify-content-center"
                                                            itemprop="offers" itemscope=""
                                                            itemtype="http://schema.org/Offer">
                                                           <form
                                                               action=""
                                                               method="post" class="formAddToCart">
                                                               @csrf
                                                               <input type="hidden" name="id_product"
                                                                      value="{{ $products[13]->id}}">

                                                               <a class="add-to-cart cart-addition" data-product-id="{{ $products[13]->id}}"  href="#"
                                                                style="{{ $products[13]->in_stock !=1 ?'display:none' :''  }}"

                                                                  data-button-action="add-to-cart"><i
                                                                       class="novicon-cart"></i><span>Add to cart</span></a>
                                                           </form>

                                                           <a class="addToWishlist  wishlistProd_22" href="#"
                                                           style="{{ $products[13]->in_stock !=1 ?'display:none' :''  }}"

                                                              data-product-id="{{ $products[13]->id }}"
                                                           >
                                                               <i class="fa fa-heart"></i>
                                                               <span>Add to Wishlist</span>
                                                           </a>
                                                           <a href="#" class="quick-view hidden-sm-down"
                                                              data-product-id="{{ $products[13]->id}}">
                                                               <i class="fa fa-search"></i><span> Quick view</span>
                                                           </a>
                                                    </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset


                                                @isset($products[14])

                                                <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w40 pl-0">
                                                        <div class="thumbnail-container">

                                                            <a href="{{ route('product_details',$products[14]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($products[14]->images[0])
                                                                src="{{ get_images($products[14]->images[0]->image_name)?? '' }}"
                                                                @endisset
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                @isset($products[14]->images[1])
                                                                src="{{ get_images($products[14]->images[1]->image_name)?? '' }}"

                                                                @endisset
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w60 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$products[14]->slug) }}">
                                                                        {{ $products[13]->description ??'' }}</a></div>

                                                                        <div class="product-group-price">

                                                                            <div class="product-price-and-shipping">

                                                                                @isset($products[14]->special_price)

                                                                                <span itemprop="price" class="price">
                                                                                    {{ number_format($products[14]->special_price) }}
                                                                                </span>
                                                                                <span class="regular-price">{{number_format($products[14]->price) }}</span>

                                                                                @else

                                                                                <span itemprop="price" class="price">
                                                                                    {{ number_format($products[14]->price) }}
                                                                                </span>

                                                                                @endisset



                                                                            </div>

                                                                        </div>
                                                            </div>


                                                            <div class="product-buttons d-flex justify-content-center"
                                                            itemprop="offers" itemscope=""
                                                            itemtype="http://schema.org/Offer">
                                                           <form
                                                               action=""
                                                               method="post" class="formAddToCart">
                                                               @csrf
                                                               <input type="hidden" name="id_product"
                                                                      value="{{ $products[14]->id}}">

                                                               <a class="add-to-cart cart-addition" data-product-id="{{ $products[14]->id}}"  href="#"
                                                                style="{{ $products[14]->in_stock !=1 ?'display:none' :''  }}"

                                                                  data-button-action="add-to-cart"><i
                                                                       class="novicon-cart"></i><span>Add to cart</span></a>
                                                           </form>

                                                           <a class="addToWishlist  wishlistProd_22" href="#"
                                                           style="{{ $products[14]->in_stock !=1 ?'display:none' :''  }}"

                                                              data-product-id="{{ $products[14]->id }}"
                                                           >
                                                               <i class="fa fa-heart"></i>
                                                               <span>Add to Wishlist</span>
                                                           </a>
                                                           <a href="#" class="quick-view hidden-sm-down"
                                                              data-product-id="{{ $products[14]->id}}">
                                                               <i class="fa fa-search"></i><span> Quick view</span>
                                                           </a>
                                                    </div>


                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="nov-row spacing-30 col-lg-12 col-xs-12">
                        <div class="nov-row-wrap row">
                            @isset($ads_second_zone)

                            <div class="nov-image col-lg-6 col-md-6">
                                <div class="block">
                                    <div class="block_content">
                                        <div class="effect">
                                            <a href="#"> <img class="img-fluid"
                                                              src="{{ get_images($ads_second_zone[0]->image_name ?? '') }}"
                                                              alt="banner-4" title="banner-4"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nov-image col-lg-6 col-md-6">
                                <div class="block">
                                    <div class="block_content">
                                        <div class="effect">
                                            <a href="#"> <img class="img-fluid"
                                                              src="{{ get_images($ads_second_zone[1]->image_name ?? '') }}"
                                                              alt="banner-5" title="banner-5"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endisset
                        </div>
                    </div>
                    <div class="nov-row  col-lg-12 col-xs-12">
                        <div class="nov-row-wrap row">
                            <div class="nov-productlist   productlist-slider      col-xl-9 col-lg-9 col-md-9 col-xs-12 col-md-12 col-lg-12">
                                <div class="block block-product clearfix">
                                    <h2 class="title_block">
                                        {{ trans('site/home.TRENDING NOW') }}
                                    </h2>
                                    <div class="block_content">
                                        <div id="productlist893645890"
                                             class="product_list grid owl-carousel owl-theme multi-row"
                                             data-autoplay="false" data-autoplaytimeout="6000" data-loop="false"
                                             data-margin="0" data-dots="false" data-nav="true" data-items="3"
                                             data-items_large="3" data-items_tablet="3" data-items_mobile="2">
                                            <div class="item  text-center">
                                                @isset($product_trending[0])
                                                <div class="product-miniature js-product-miniature item-one first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="thumbnail-container">

                                                        <a href="{{ route('product_details',$product_trending[0]->slug) }}"
                                                           class="thumbnail product-thumbnail two-image">
                                                            <img class="img-fluid image-cover"

                                                            @isset($product_trending[0]->images[0])
                                                            src="{{ get_images($product_trending[0]->images[0]->image_name)?? '' }}"
                                                            @endisset
                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                 width="600" height="600">
                                                            <img class="img-fluid image-secondary"
                                                            @isset($product_trending[0]->images[1])
                                                            src="{{ get_images($product_trending[0]->images[1]->image_name)?? '' }}"
                                                            @endisset
                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                 width="600" height="600">
                                                        </a>


                                                    </div>

                                                    <div class="product-description">
                                                        <div class="product-groups">

                                                            <div class="product-comments">
                                                                <div class="star_content">
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                </div>
                                                                <span>5 review</span>
                                                            </div>
                                                            <p class="seller_name">
                                                                <a title="View seller profile"
                                                                   href="jmarketplace/1_david-james/index.htm">
                                                                    <i class="fa fa-user"></i>
                                                                    David James
                                                                </a>
                                                            </p>


                                                            <div class="product-title" itemprop="name"><a
                                                                    href="smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-size-s/6-color-taupe">
                                                                    {{ $product_trending[0]->description ?? '' }}</a></div>

                                                                    <div class="product-group-price">
                                                                        <div class="product-price-and-shipping">
                                                                            <span itemprop="price"
                                                                                  class="price">{{ number_format($product_trending[0]->special_price)?? number_format($product_trending[0]->price,2) }}</span>
                                                                            @if($product_trending[0]->special_price)
                                                                                <span
                                                                                    class="regular-price">{{ number_format($product_trending[0]->price,2) }}</span>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        <div class="product-buttons d-flex justify-content-center"
                                                             itemprop="offers" itemscope=""
                                                             itemtype="http://schema.org/Offer">
                                                             <form
                                                             action=""
                                                             method="post" class="formAddToCart">
                                                             @csrf
                                                             <input type="hidden" name="id_product"
                                                                    value="{{ $product_trending[0]->id}}">

                                                             <a class="add-to-cart cart-addition" data-product-id="{{ $product_trending[0]->id}}"  href="#"
                                                                style="{{ $product_trending[0]->in_stock !=1 ?'display:none' :''  }}"

                                                                data-button-action="add-to-cart"><i
                                                                     class="novicon-cart"></i><span>Add to cart</span></a>
                                                         </form>

                                                         <a class="addToWishlist  wishlistProd_22" href="#"
                                                         style="{{ $product_trending[0]->in_stock !=1 ?'display:none' :''  }}"

                                                            data-product-id="{{ $product_trending[0]->id }}"
                                                         >
                                                             <i class="fa fa-heart"></i>
                                                             <span>Add to Wishlist</span>
                                                         </a>
                                                         <a href="{{ route('product_details',$product_trending[0]->slug) }}" class="quick-view hidden-sm-down"
                                                           >
                                                             <i class="fa fa-search"></i><span> Quick view</span>
                                                         </a>
                                                      </div>
                                                    </div>
                                                </div>
                                                @endisset

                                                @isset($product_trending[1])
                                                <div class="product-miniature js-product-miniature item-one first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="thumbnail-container">

                                                        <a href="{{ route('product_details',$product_trending[1]->slug) }}"
                                                           class="thumbnail product-thumbnail two-image">
                                                            <img class="img-fluid image-cover"

                                                            @isset($product_trending[1]->images[0])
                                                            src="{{ get_images($product_trending[1]->images[0]->image_name)?? '' }}"
                                                            @endisset
                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                 width="600" height="600">
                                                            <img class="img-fluid image-secondary"
                                                            @isset($product_trending[1]->images[1])
                                                            src="{{ get_images($product_trending[1]->images[1]->image_name)?? '' }}"
                                                            @endisset
                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                 width="600" height="600">
                                                        </a>


                                                    </div>

                                                    <div class="product-description">
                                                        <div class="product-groups">

                                                            <div class="product-comments">
                                                                <div class="star_content">
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                </div>
                                                                <span>5 review</span>
                                                            </div>
                                                            <p class="seller_name">
                                                                <a title="View seller profile"
                                                                   href="jmarketplace/1_david-james/index.htm">
                                                                    <i class="fa fa-user"></i>
                                                                    David James
                                                                </a>
                                                            </p>


                                                            <div class="product-title" itemprop="name"><a
                                                                    href="smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-size-s/6-color-taupe">
                                                                    {{ $product_trending[1]->description ?? '' }}</a></div>

                                                                    <div class="product-group-price">
                                                                        <div class="product-price-and-shipping">
                                                                            <span itemprop="price"
                                                                                  class="price">{{ number_format($product_trending[1]->special_price)?? number_format($product_trending[1]->price,2) }}</span>
                                                                            @if($product_trending[1]->special_price)
                                                                                <span
                                                                                    class="regular-price">{{ number_format($product_trending[1]->price,2) }}</span>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        <div class="product-buttons d-flex justify-content-center"
                                                             itemprop="offers" itemscope=""
                                                             itemtype="http://schema.org/Offer">
                                                             <form
                                                             action=""
                                                             method="post" class="formAddToCart">
                                                             @csrf
                                                             <input type="hidden" name="id_product"
                                                                    value="{{ $product_trending[1]->id}}">

                                                             <a class="add-to-cart cart-addition" data-product-id="{{ $product_trending[1]->id}}"  href="#"
                                                                style="{{ $product_trending[1]->in_stock !=1 ?'display:none' :''  }}"

                                                                data-button-action="add-to-cart"><i
                                                                     class="novicon-cart"></i><span>Add to cart</span></a>
                                                         </form>

                                                         <a class="addToWishlist  wishlistProd_22" href="#"
                                                         style="{{ $product_trending[1]->in_stock !=1 ?'display:none' :''  }}"

                                                            data-product-id="{{ $product_trending[1]->id }}"
                                                         >
                                                             <i class="fa fa-heart"></i>
                                                             <span>Add to Wishlist</span>
                                                         </a>
                                                         <a href="{{ route('product_details',$product_trending[1]->slug) }}" class="quick-view hidden-sm-down"
                                                           >
                                                             <i class="fa fa-search"></i><span> Quick view</span>
                                                         </a>
                                                      </div>
                                                    </div>
                                                </div>
                                                @endisset
                                            </div>
                                            <div class="item  text-center">
                                                @isset($product_trending[2])
                                                <div class="product-miniature js-product-miniature item-one first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="thumbnail-container">

                                                        <a href="{{ route('product_details',$product_trending[2]->slug) }}"
                                                           class="thumbnail product-thumbnail two-image">
                                                            <img class="img-fluid image-cover"

                                                            @isset($product_trending[2]->images[0])
                                                            src="{{ get_images($product_trending[2]->images[0]->image_name)?? '' }}"
                                                            @endisset
                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                 width="600" height="600">
                                                            <img class="img-fluid image-secondary"
                                                            @isset($product_trending[2]->images[1])
                                                            src="{{ get_images($product_trending[2]->images[1]->image_name)?? '' }}"
                                                            @endisset
                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                 width="600" height="600">
                                                        </a>


                                                    </div>

                                                    <div class="product-description">
                                                        <div class="product-groups">

                                                            <div class="product-comments">
                                                                <div class="star_content">
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                </div>
                                                                <span>5 review</span>
                                                            </div>
                                                            <p class="seller_name">
                                                                <a title="View seller profile"
                                                                   href="jmarketplace/1_david-james/index.htm">
                                                                    <i class="fa fa-user"></i>
                                                                    David James
                                                                </a>
                                                            </p>


                                                            <div class="product-title" itemprop="name"><a
                                                                    href="smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-size-s/6-color-taupe">
                                                                    {{ $product_trending[2]->description ?? '' }}</a></div>

                                                                    <div class="product-group-price">
                                                                        <div class="product-price-and-shipping">
                                                                            <span itemprop="price"
                                                                                  class="price">{{ number_format($product_trending[2]->special_price)?? number_format($product_trending[2]->price,2) }}</span>
                                                                            @if($product_trending[2]->special_price)
                                                                                <span
                                                                                    class="regular-price">{{ number_format($product_trending[2]->price,2) }}</span>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        <div class="product-buttons d-flex justify-content-center"
                                                             itemprop="offers" itemscope=""
                                                             itemtype="http://schema.org/Offer">
                                                             <form
                                                             action=""
                                                             method="post" class="formAddToCart">
                                                             @csrf
                                                             <input type="hidden" name="id_product"
                                                                    value="{{ $product_trending[2]->id}}">

                                                             <a class="add-to-cart cart-addition" data-product-id="{{ $product_trending[2]->id}}"  href="#"
                                                                style="{{ $product_trending[2]->in_stock !=1 ?'display:none' :''  }}"

                                                                data-button-action="add-to-cart"><i
                                                                     class="novicon-cart"></i><span>Add to cart</span></a>
                                                         </form>

                                                         <a class="addToWishlist  wishlistProd_22" href="#"
                                                         style="{{ $product_trending[2]->in_stock !=1 ?'display:none' :''  }}"

                                                            data-product-id="{{ $product_trending[2]->id }}"
                                                         >
                                                             <i class="fa fa-heart"></i>
                                                             <span>Add to Wishlist</span>
                                                         </a>
                                                         <a href="{{ route('product_details',$product_trending[2]->slug) }}" class="quick-view hidden-sm-down"
                                                           >
                                                             <i class="fa fa-search"></i><span> Quick view</span>
                                                         </a>
                                                      </div>
                                                    </div>
                                                </div>
                                                @endisset

                                                @isset($product_trending[3])
                                                <div class="product-miniature js-product-miniature item-one first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="thumbnail-container">

                                                        <a href="{{ route('product_details',$product_trending[3]->slug) }}"
                                                           class="thumbnail product-thumbnail two-image">
                                                            <img class="img-fluid image-cover"

                                                            @isset($product_trending[3]->images[0])
                                                            src="{{ get_images($product_trending[3]->images[0]->image_name)?? '' }}"
                                                            @endisset
                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                 width="600" height="600">
                                                            <img class="img-fluid image-secondary"
                                                            @isset($product_trending[3]->images[1])
                                                            src="{{ get_images($product_trending[3]->images[1]->image_name)?? '' }}"
                                                            @endisset
                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                 width="600" height="600">
                                                        </a>


                                                    </div>

                                                    <div class="product-description">
                                                        <div class="product-groups">

                                                            <div class="product-comments">
                                                                <div class="star_content">
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                </div>
                                                                <span>5 review</span>
                                                            </div>
                                                            <p class="seller_name">
                                                                <a title="View seller profile"
                                                                   href="jmarketplace/1_david-james/index.htm">
                                                                    <i class="fa fa-user"></i>
                                                                    David James
                                                                </a>
                                                            </p>


                                                            <div class="product-title" itemprop="name"><a
                                                                    href="smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-size-s/6-color-taupe">
                                                                    {{ $product_trending[3]->description ?? '' }}</a></div>

                                                                    <div class="product-group-price">
                                                                        <div class="product-price-and-shipping">
                                                                            <span itemprop="price"
                                                                                  class="price">{{ number_format($product_trending[3]->special_price)?? number_format($product_trending[3]->price,2) }}</span>
                                                                            @if($product_trending[3]->special_price)
                                                                                <span
                                                                                    class="regular-price">{{ number_format($product_trending[3]->price,2) }}</span>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        <div class="product-buttons d-flex justify-content-center"
                                                             itemprop="offers" itemscope=""
                                                             itemtype="http://schema.org/Offer">
                                                             <form
                                                             action=""
                                                             method="post" class="formAddToCart">
                                                             @csrf
                                                             <input type="hidden" name="id_product"
                                                                    value="{{ $product_trending[3]->id}}">

                                                             <a class="add-to-cart cart-addition" data-product-id="{{ $product_trending[3]->id}}"  href="#"
                                                                style="{{ $product_trending[3]->in_stock !=1 ?'display:none' :''  }}"

                                                                data-button-action="add-to-cart"><i
                                                                     class="novicon-cart"></i><span>Add to cart</span></a>
                                                         </form>

                                                         <a class="addToWishlist  wishlistProd_22" href="#"
                                                         style="{{ $product_trending[3]->in_stock !=1 ?'display:none' :''  }}"

                                                            data-product-id="{{ $product_trending[3]->id }}"
                                                         >
                                                             <i class="fa fa-heart"></i>
                                                             <span>Add to Wishlist</span>
                                                         </a>
                                                         <a href="{{ route('product_details',$product_trending[3]->slug) }}" class="quick-view hidden-sm-down"
                                                           >
                                                             <i class="fa fa-search"></i><span> Quick view</span>
                                                         </a>
                                                      </div>
                                                    </div>
                                                </div>
                                                @endisset
                                            </div>
                                            <div class="item  text-center">
                                                @isset($product_trending[4])
                                                <div class="product-miniature js-product-miniature item-one first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="thumbnail-container">

                                                        <a href="{{ route('product_details',$product_trending[4]->slug) }}"
                                                           class="thumbnail product-thumbnail two-image">
                                                            <img class="img-fluid image-cover"

                                                            @isset($product_trending[4]->images[0])
                                                            src="{{ get_images($product_trending[4]->images[0]->image_name)?? '' }}"
                                                            @endisset
                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                 width="600" height="600">
                                                            <img class="img-fluid image-secondary"
                                                            @isset($product_trending[4]->images[1])
                                                            src="{{ get_images($product_trending[4]->images[1]->image_name)?? '' }}"
                                                            @endisset
                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                 width="600" height="600">
                                                        </a>


                                                    </div>

                                                    <div class="product-description">
                                                        <div class="product-groups">

                                                            <div class="product-comments">
                                                                <div class="star_content">
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                </div>
                                                                <span>5 review</span>
                                                            </div>
                                                            <p class="seller_name">
                                                                <a title="View seller profile"
                                                                   href="jmarketplace/1_david-james/index.htm">
                                                                    <i class="fa fa-user"></i>
                                                                    David James
                                                                </a>
                                                            </p>


                                                            <div class="product-title" itemprop="name"><a
                                                                    href="smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-size-s/6-color-taupe">
                                                                    {{ $product_trending[4]->description ?? '' }}</a></div>

                                                                    <div class="product-group-price">
                                                                        <div class="product-price-and-shipping">
                                                                            <span itemprop="price"
                                                                                  class="price">{{ number_format($product_trending[4]->special_price)?? number_format($product_trending[4]->price,2) }}</span>
                                                                            @if($product_trending[4]->special_price)
                                                                                <span
                                                                                    class="regular-price">{{ number_format($product_trending[4]->price,2) }}</span>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        <div class="product-buttons d-flex justify-content-center"
                                                             itemprop="offers" itemscope=""
                                                             itemtype="http://schema.org/Offer">
                                                             <form
                                                             action=""
                                                             method="post" class="formAddToCart">
                                                             @csrf
                                                             <input type="hidden" name="id_product"
                                                                    value="{{ $product_trending[4]->id}}">

                                                             <a class="add-to-cart cart-addition" data-product-id="{{ $product_trending[4]->id}}"  href="#"
                                                                style="{{ $product_trending[4]->in_stock !=1 ?'display:none' :''  }}"

                                                                data-button-action="add-to-cart"><i
                                                                     class="novicon-cart"></i><span>Add to cart</span></a>
                                                         </form>

                                                         <a class="addToWishlist  wishlistProd_22" href="#"
                                                         style="{{ $product_trending[4]->in_stock !=1 ?'display:none' :''  }}"

                                                            data-product-id="{{ $product_trending[4]->id }}"
                                                         >
                                                             <i class="fa fa-heart"></i>
                                                             <span>Add to Wishlist</span>
                                                         </a>
                                                         <a href="{{ route('product_details',$product_trending[4]->slug) }}" class="quick-view hidden-sm-down"
                                                           >
                                                             <i class="fa fa-search"></i><span> Quick view</span>
                                                         </a>
                                                      </div>
                                                    </div>
                                                </div>
                                                @endisset

                                                @isset($product_trending[5])
                                                <div class="product-miniature js-product-miniature item-one first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="thumbnail-container">

                                                        <a href="{{ route('product_details',$product_trending[5]->slug) }}"
                                                           class="thumbnail product-thumbnail two-image">
                                                            <img class="img-fluid image-cover"

                                                            @isset($product_trending[5]->images[0])
                                                            src="{{ get_images($product_trending[5]->images[0]->image_name)?? '' }}"
                                                            @endisset
                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                 width="600" height="600">
                                                            <img class="img-fluid image-secondary"
                                                            @isset($product_trending[5]->images[1])
                                                            src="{{ get_images($product_trending[5]->images[1]->image_name)?? '' }}"
                                                            @endisset
                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                 width="600" height="600">
                                                        </a>


                                                    </div>

                                                    <div class="product-description">
                                                        <div class="product-groups">

                                                            <div class="product-comments">
                                                                <div class="star_content">
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                </div>
                                                                <span>5 review</span>
                                                            </div>
                                                            <p class="seller_name">
                                                                <a title="View seller profile"
                                                                   href="jmarketplace/1_david-james/index.htm">
                                                                    <i class="fa fa-user"></i>
                                                                    David James
                                                                </a>
                                                            </p>


                                                            <div class="product-title" itemprop="name"><a
                                                                    href="smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-size-s/6-color-taupe">
                                                                    {{ $product_trending[5]->description ?? '' }}</a></div>

                                                                    <div class="product-group-price">
                                                                        <div class="product-price-and-shipping">
                                                                            <span itemprop="price"
                                                                                  class="price">{{ number_format($product_trending[5]->special_price)?? number_format($product_trending[5]->price,2) }}</span>
                                                                            @if($product_trending[5]->special_price)
                                                                                <span
                                                                                    class="regular-price">{{ number_format($product_trending[5]->price,2) }}</span>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        <div class="product-buttons d-flex justify-content-center"
                                                             itemprop="offers" itemscope=""
                                                             itemtype="http://schema.org/Offer">
                                                             <form
                                                             action=""
                                                             method="post" class="formAddToCart">
                                                             @csrf
                                                             <input type="hidden" name="id_product"
                                                                    value="{{ $product_trending[5]->id}}">

                                                             <a class="add-to-cart cart-addition" data-product-id="{{ $product_trending[5]->id}}"  href="#"
                                                                style="{{ $product_trending[5]->in_stock !=1 ?'display:none' :''  }}"

                                                                data-button-action="add-to-cart"><i
                                                                     class="novicon-cart"></i><span>Add to cart</span></a>
                                                         </form>

                                                         <a class="addToWishlist  wishlistProd_22" href="#"
                                                         style="{{ $product_trending[5]->in_stock !=1 ?'display:none' :''  }}"

                                                            data-product-id="{{ $product_trending[5]->id }}"
                                                         >
                                                             <i class="fa fa-heart"></i>
                                                             <span>Add to Wishlist</span>
                                                         </a>
                                                         <a href="{{ route('product_details',$product_trending[5]->slug) }}" class="quick-view hidden-sm-down"
                                                           >
                                                             <i class="fa fa-search"></i><span> Quick view</span>
                                                         </a>
                                                      </div>
                                                    </div>
                                                </div>
                                                @endisset
                                            </div>
                                            <div class="item  text-center">
                                                @isset($product_trending[6])
                                                <div class="product-miniature js-product-miniature item-one first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="thumbnail-container">

                                                        <a href="{{ route('product_details',$product_trending[6]->slug) }}"
                                                           class="thumbnail product-thumbnail two-image">
                                                            <img class="img-fluid image-cover"

                                                            @isset($product_trending[6]->images[0])
                                                            src="{{ get_images($product_trending[6]->images[0]->image_name)?? '' }}"
                                                            @endisset
                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                 width="600" height="600">
                                                            <img class="img-fluid image-secondary"
                                                            @isset($product_trending[6]->images[1])
                                                            src="{{ get_images($product_trending[6]->images[1]->image_name)?? '' }}"
                                                            @endisset
                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                 width="600" height="600">
                                                        </a>


                                                    </div>

                                                    <div class="product-description">
                                                        <div class="product-groups">

                                                            <div class="product-comments">
                                                                <div class="star_content">
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                </div>
                                                                <span>5 review</span>
                                                            </div>
                                                            <p class="seller_name">
                                                                <a title="View seller profile"
                                                                   href="jmarketplace/1_david-james/index.htm">
                                                                    <i class="fa fa-user"></i>
                                                                    David James
                                                                </a>
                                                            </p>


                                                            <div class="product-title" itemprop="name"><a
                                                                    href="smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-size-s/6-color-taupe">
                                                                    {{ $product_trending[6]->description ?? '' }}</a></div>

                                                                    <div class="product-group-price">
                                                                        <div class="product-price-and-shipping">
                                                                            <span itemprop="price"
                                                                                  class="price">{{ number_format($product_trending[6]->special_price)?? number_format($product_trending[6]->price,2) }}</span>
                                                                            @if($product_trending[6]->special_price)
                                                                                <span
                                                                                    class="regular-price">{{ number_format($product_trending[6]->price,2) }}</span>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        <div class="product-buttons d-flex justify-content-center"
                                                             itemprop="offers" itemscope=""
                                                             itemtype="http://schema.org/Offer">
                                                             <form
                                                             action=""
                                                             method="post" class="formAddToCart">
                                                             @csrf
                                                             <input type="hidden" name="id_product"
                                                                    value="{{ $product_trending[6]->id}}">

                                                             <a class="add-to-cart cart-addition" data-product-id="{{ $product_trending[6]->id}}"  href="#"
                                                                style="{{ $product_trending[6]->in_stock !=1 ?'display:none' :''  }}"

                                                                data-button-action="add-to-cart"><i
                                                                     class="novicon-cart"></i><span>Add to cart</span></a>
                                                         </form>

                                                         <a class="addToWishlist  wishlistProd_22" href="#"
                                                         style="{{ $product_trending[6]->in_stock !=1 ?'display:none' :''  }}"

                                                            data-product-id="{{ $product_trending[6]->id }}"
                                                         >
                                                             <i class="fa fa-heart"></i>
                                                             <span>Add to Wishlist</span>
                                                         </a>
                                                         <a href="{{ route('product_details',$product_trending[6]->slug) }}" class="quick-view hidden-sm-down"
                                                           >
                                                             <i class="fa fa-search"></i><span> Quick view</span>
                                                         </a>
                                                      </div>
                                                    </div>
                                                </div>
                                                @endisset

                                                @isset($product_trending[7])
                                                <div class="product-miniature js-product-miniature item-one first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="thumbnail-container">

                                                        <a href="{{ route('product_details',$product_trending[7]->slug) }}"
                                                           class="thumbnail product-thumbnail two-image">
                                                            <img class="img-fluid image-cover"

                                                            @isset($product_trending[7]->images[0])
                                                            src="{{ get_images($product_trending[7]->images[0]->image_name)?? '' }}"
                                                            @endisset
                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                 width="600" height="600">
                                                            <img class="img-fluid image-secondary"
                                                            @isset($product_trending[7]->images[1])
                                                            src="{{ get_images($product_trending[7]->images[1]->image_name)?? '' }}"
                                                            @endisset
                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                 width="600" height="600">
                                                        </a>


                                                    </div>

                                                    <div class="product-description">
                                                        <div class="product-groups">

                                                            <div class="product-comments">
                                                                <div class="star_content">
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                </div>
                                                                <span>5 review</span>
                                                            </div>
                                                            <p class="seller_name">
                                                                <a title="View seller profile"
                                                                   href="jmarketplace/1_david-james/index.htm">
                                                                    <i class="fa fa-user"></i>
                                                                    David James
                                                                </a>
                                                            </p>


                                                            <div class="product-title" itemprop="name"><a
                                                                    href="smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-size-s/6-color-taupe">
                                                                    {{ $product_trending[7]->description ?? '' }}</a></div>

                                                                    <div class="product-group-price">
                                                                        <div class="product-price-and-shipping">
                                                                            <span itemprop="price"
                                                                                  class="price">{{ number_format($product_trending[7]->special_price)?? number_format($product_trending[7]->price,2) }}</span>
                                                                            @if($product_trending[7]->special_price)
                                                                                <span
                                                                                    class="regular-price">{{ number_format($product_trending[7]->price,2) }}</span>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        <div class="product-buttons d-flex justify-content-center"
                                                             itemprop="offers" itemscope=""
                                                             itemtype="http://schema.org/Offer">
                                                             <form
                                                             action=""
                                                             method="post" class="formAddToCart">
                                                             @csrf
                                                             <input type="hidden" name="id_product"
                                                                    value="{{ $product_trending[7]->id}}">

                                                             <a class="add-to-cart cart-addition" data-product-id="{{ $product_trending[7]->id}}"  href="#"
                                                                style="{{ $product_trending[7]->in_stock !=1 ?'display:none' :''  }}"

                                                                data-button-action="add-to-cart"><i
                                                                     class="novicon-cart"></i><span>Add to cart</span></a>
                                                         </form>

                                                         <a class="addToWishlist  wishlistProd_22" href="#"
                                                         style="{{ $product_trending[7]->in_stock !=1 ?'display:none' :''  }}"

                                                            data-product-id="{{ $product_trending[7]->id }}"
                                                         >
                                                             <i class="fa fa-heart"></i>
                                                             <span>Add to Wishlist</span>
                                                         </a>
                                                         <a href="{{ route('product_details',$product_trending[7]->slug) }}" class="quick-view hidden-sm-down"
                                                           >
                                                             <i class="fa fa-search"></i><span> Quick view</span>
                                                         </a>
                                                      </div>
                                                    </div>
                                                </div>
                                                @endisset
                                            </div>
                                            <div class="item  text-center">
                                                @isset($product_trending[8])
                                                <div class="product-miniature js-product-miniature item-one first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="thumbnail-container">

                                                        <a href="{{ route('product_details',$product_trending[8]->slug) }}"
                                                           class="thumbnail product-thumbnail two-image">
                                                            <img class="img-fluid image-cover"

                                                            @isset($product_trending[8]->images[0])
                                                            src="{{ get_images($product_trending[8]->images[0]->image_name)?? '' }}"
                                                            @endisset
                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                 width="600" height="600">
                                                            <img class="img-fluid image-secondary"
                                                            @isset($product_trending[8]->images[1])
                                                            src="{{ get_images($product_trending[8]->images[1]->image_name)?? '' }}"
                                                            @endisset
                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                 width="600" height="600">
                                                        </a>


                                                    </div>

                                                    <div class="product-description">
                                                        <div class="product-groups">

                                                            <div class="product-comments">
                                                                <div class="star_content">
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                </div>
                                                                <span>5 review</span>
                                                            </div>
                                                            <p class="seller_name">
                                                                <a title="View seller profile"
                                                                   href="jmarketplace/1_david-james/index.htm">
                                                                    <i class="fa fa-user"></i>
                                                                    David James
                                                                </a>
                                                            </p>


                                                            <div class="product-title" itemprop="name"><a
                                                                    href="smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-size-s/6-color-taupe">
                                                                    {{ $product_trending[8]->description ?? '' }}</a></div>

                                                                    <div class="product-group-price">
                                                                        <div class="product-price-and-shipping">
                                                                            <span itemprop="price"
                                                                                  class="price">{{ number_format($product_trending[8]->special_price)?? number_format($product_trending[8]->price,2) }}</span>
                                                                            @if($product_trending[8]->special_price)
                                                                                <span
                                                                                    class="regular-price">{{ number_format($product_trending[8]->price,2) }}</span>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        <div class="product-buttons d-flex justify-content-center"
                                                             itemprop="offers" itemscope=""
                                                             itemtype="http://schema.org/Offer">
                                                             <form
                                                             action=""
                                                             method="post" class="formAddToCart">
                                                             @csrf
                                                             <input type="hidden" name="id_product"
                                                                    value="{{ $product_trending[8]->id}}">

                                                             <a class="add-to-cart cart-addition" data-product-id="{{ $product_trending[8]->id}}"  href="#"
                                                                style="{{ $product_trending[8]->in_stock !=1 ?'display:none' :''  }}"

                                                                data-button-action="add-to-cart"><i
                                                                     class="novicon-cart"></i><span>Add to cart</span></a>
                                                         </form>

                                                         <a class="addToWishlist  wishlistProd_22" href="#"
                                                         style="{{ $product_trending[8]->in_stock !=1 ?'display:none' :''  }}"

                                                            data-product-id="{{ $product_trending[8]->id }}"
                                                         >
                                                             <i class="fa fa-heart"></i>
                                                             <span>Add to Wishlist</span>
                                                         </a>
                                                         <a href="{{ route('product_details',$product_trending[8]->slug) }}" class="quick-view hidden-sm-down"
                                                           >
                                                             <i class="fa fa-search"></i><span> Quick view</span>
                                                         </a>
                                                      </div>
                                                    </div>
                                                </div>
                                                @endisset

                                                @isset($product_trending[9])
                                                <div class="product-miniature js-product-miniature item-one first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="thumbnail-container">

                                                        <a href="{{ route('product_details',$product_trending[9]->slug) }}"
                                                           class="thumbnail product-thumbnail two-image">
                                                            <img class="img-fluid image-cover"

                                                            @isset($product_trending[9]->images[0])
                                                            src="{{ get_images($product_trending[9]->images[0]->image_name)?? '' }}"
                                                            @endisset
                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                 width="600" height="600">
                                                            <img class="img-fluid image-secondary"
                                                            @isset($product_trending[9]->images[1])
                                                            src="{{ get_images($product_trending[9]->images[1]->image_name)?? '' }}"
                                                            @endisset
                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                 width="600" height="600">
                                                        </a>


                                                    </div>

                                                    <div class="product-description">
                                                        <div class="product-groups">

                                                            <div class="product-comments">
                                                                <div class="star_content">
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                </div>
                                                                <span>5 review</span>
                                                            </div>
                                                            <p class="seller_name">
                                                                <a title="View seller profile"
                                                                   href="jmarketplace/1_david-james/index.htm">
                                                                    <i class="fa fa-user"></i>
                                                                    David James
                                                                </a>
                                                            </p>


                                                            <div class="product-title" itemprop="name"><a
                                                                    href="smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-size-s/6-color-taupe">
                                                                    {{ $product_trending[9]->description ?? '' }}</a></div>

                                                                    <div class="product-group-price">
                                                                        <div class="product-price-and-shipping">
                                                                            <span itemprop="price"
                                                                                  class="price">{{ number_format($product_trending[9]->special_price)?? number_format($product_trending[9]->price,2) }}</span>
                                                                            @if($product_trending[1]->special_price)
                                                                                <span
                                                                                    class="regular-price">{{ number_format($product_trending[9]->price,2) }}</span>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        <div class="product-buttons d-flex justify-content-center"
                                                             itemprop="offers" itemscope=""
                                                             itemtype="http://schema.org/Offer">
                                                             <form
                                                             action=""
                                                             method="post" class="formAddToCart">
                                                             @csrf
                                                             <input type="hidden" name="id_product"
                                                                    value="{{ $product_trending[9]->id}}">

                                                             <a class="add-to-cart cart-addition" data-product-id="{{ $product_trending[9]->id}}"  href="#"
                                                                style="{{ $product_trending[9]->in_stock !=1 ?'display:none' :''  }}"

                                                                data-button-action="add-to-cart"><i
                                                                     class="novicon-cart"></i><span>Add to cart</span></a>
                                                         </form>

                                                         <a class="addToWishlist  wishlistProd_22" href="#"
                                                         style="{{ $product_trending[9]->in_stock !=1 ?'display:none' :''  }}"

                                                            data-product-id="{{ $product_trending[9]->id }}"
                                                         >
                                                             <i class="fa fa-heart"></i>
                                                             <span>Add to Wishlist</span>
                                                         </a>
                                                         <a href="{{ route('product_details',$product_trending[9]->slug) }}" class="quick-view hidden-sm-down"
                                                           >
                                                             <i class="fa fa-search"></i><span> Quick view</span>
                                                         </a>
                                                      </div>
                                                    </div>
                                                </div>
                                                @endisset
                                            </div>
                                            <div class="item  text-center">
                                                @isset($product_trending[10])
                                                <div class="product-miniature js-product-miniature item-one first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="thumbnail-container">

                                                        <a href="{{ route('product_details',$product_trending[10]->slug) }}"
                                                           class="thumbnail product-thumbnail two-image">
                                                            <img class="img-fluid image-cover"

                                                            @isset($product_trending[10]->images[0])
                                                            src="{{ get_images($product_trending[10]->images[0]->image_name)?? '' }}"
                                                            @endisset
                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                 width="600" height="600">
                                                            <img class="img-fluid image-secondary"
                                                            @isset($product_trending[10]->images[1])
                                                            src="{{ get_images($product_trending[10]->images[1]->image_name)?? '' }}"
                                                            @endisset
                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                 width="600" height="600">
                                                        </a>


                                                    </div>

                                                    <div class="product-description">
                                                        <div class="product-groups">

                                                            <div class="product-comments">
                                                                <div class="star_content">
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                </div>
                                                                <span>5 review</span>
                                                            </div>
                                                            <p class="seller_name">
                                                                <a title="View seller profile"
                                                                   href="jmarketplace/1_david-james/index.htm">
                                                                    <i class="fa fa-user"></i>
                                                                    David James
                                                                </a>
                                                            </p>


                                                            <div class="product-title" itemprop="name"><a
                                                                    href="smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-size-s/6-color-taupe">
                                                                    {{ $product_trending[10]->description ?? '' }}</a></div>

                                                                    <div class="product-group-price">
                                                                        <div class="product-price-and-shipping">
                                                                            <span itemprop="price"
                                                                                  class="price">{{ number_format($product_trending[10]->special_price)?? number_format($product_trending[10]->price,2) }}</span>
                                                                            @if($product_trending[10]->special_price)
                                                                                <span
                                                                                    class="regular-price">{{ number_format($product_trending[10]->price,2) }}</span>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        <div class="product-buttons d-flex justify-content-center"
                                                             itemprop="offers" itemscope=""
                                                             itemtype="http://schema.org/Offer">
                                                             <form
                                                             action=""
                                                             method="post" class="formAddToCart">
                                                             @csrf
                                                             <input type="hidden" name="id_product"
                                                                    value="{{ $product_trending[10]->id}}">

                                                             <a class="add-to-cart cart-addition" data-product-id="{{ $product_trending[10]->id}}"  href="#"
                                                                style="{{ $product_trending[10]->in_stock !=1 ?'display:none' :''  }}"

                                                                data-button-action="add-to-cart"><i
                                                                     class="novicon-cart"></i><span>Add to cart</span></a>
                                                         </form>

                                                         <a class="addToWishlist  wishlistProd_22" href="#"
                                                         style="{{ $product_trending[10]->in_stock !=1 ?'display:none' :''  }}"

                                                            data-product-id="{{ $product_trending[10]->id }}"
                                                         >
                                                             <i class="fa fa-heart"></i>
                                                             <span>Add to Wishlist</span>
                                                         </a>
                                                         <a href="{{ route('product_details',$product_trending[10]->slug) }}" class="quick-view hidden-sm-down"
                                                           >
                                                             <i class="fa fa-search"></i><span> Quick view</span>
                                                         </a>
                                                      </div>
                                                    </div>
                                                </div>
                                                @endisset

                                                @isset($product_trending[11])
                                                <div class="product-miniature js-product-miniature item-one first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="thumbnail-container">

                                                        <a href="{{ route('product_details',$product_trending[11]->slug) }}"
                                                           class="thumbnail product-thumbnail two-image">
                                                            <img class="img-fluid image-cover"

                                                            @isset($product_trending[11]->images[0])
                                                            src="{{ get_images($product_trending[11]->images[0]->image_name)?? '' }}"
                                                            @endisset
                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                 width="600" height="600">
                                                            <img class="img-fluid image-secondary"
                                                            @isset($product_trending[11]->images[1])
                                                            src="{{ get_images($product_trending[11]->images[1]->image_name)?? '' }}"
                                                            @endisset
                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                 width="600" height="600">
                                                        </a>


                                                    </div>

                                                    <div class="product-description">
                                                        <div class="product-groups">

                                                            <div class="product-comments">
                                                                <div class="star_content">
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                </div>
                                                                <span>5 review</span>
                                                            </div>
                                                            <p class="seller_name">
                                                                <a title="View seller profile"
                                                                   href="jmarketplace/1_david-james/index.htm">
                                                                    <i class="fa fa-user"></i>
                                                                    David James
                                                                </a>
                                                            </p>


                                                            <div class="product-title" itemprop="name"><a
                                                                    href="smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-size-s/6-color-taupe">
                                                                    {{ $product_trending[11]->description ?? '' }}</a></div>

                                                                    <div class="product-group-price">
                                                                        <div class="product-price-and-shipping">
                                                                            <span itemprop="price"
                                                                                  class="price">{{ number_format($product_trending[11]->special_price)?? number_format($product_trending[11]->price,2) }}</span>
                                                                            @if($product_trending[11]->special_price)
                                                                                <span
                                                                                    class="regular-price">{{ number_format($product_trending[11]->price,2) }}</span>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        <div class="product-buttons d-flex justify-content-center"
                                                             itemprop="offers" itemscope=""
                                                             itemtype="http://schema.org/Offer">
                                                             <form
                                                             action=""
                                                             method="post" class="formAddToCart">
                                                             @csrf
                                                             <input type="hidden" name="id_product"
                                                                    value="{{ $product_trending[11]->id}}">

                                                             <a class="add-to-cart cart-addition" data-product-id="{{ $product_trending[11]->id}}"  href="#"
                                                                style="{{ $product_trending[11]->in_stock !=1 ?'display:none' :''  }}"

                                                                data-button-action="add-to-cart"><i
                                                                     class="novicon-cart"></i><span>Add to cart</span></a>
                                                         </form>

                                                         <a class="addToWishlist  wishlistProd_22" href="#"
                                                         style="{{ $product_trending[11]->in_stock !=1 ?'display:none' :''  }}"

                                                            data-product-id="{{ $product_trending[11]->id }}"
                                                         >
                                                             <i class="fa fa-heart"></i>
                                                             <span>Add to Wishlist</span>
                                                         </a>
                                                         <a href="{{ route('product_details',$product_trending[11]->slug) }}" class="quick-view hidden-sm-down"
                                                           >
                                                             <i class="fa fa-search"></i><span> Quick view</span>
                                                         </a>
                                                      </div>
                                                    </div>
                                                </div>
                                                @endisset
                                            </div>
                                            <div class="item  text-center">
                                                @isset($product_trending[12])
                                                <div class="product-miniature js-product-miniature item-one first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="thumbnail-container">

                                                        <a href="{{ route('product_details',$product_trending[12]->slug) }}"
                                                           class="thumbnail product-thumbnail two-image">
                                                            <img class="img-fluid image-cover"

                                                            @isset($product_trending[12]->images[0])
                                                            src="{{ get_images($product_trending[12]->images[0]->image_name)?? '' }}"
                                                            @endisset
                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                 width="600" height="600">
                                                            <img class="img-fluid image-secondary"
                                                            @isset($product_trending[12]->images[1])
                                                            src="{{ get_images($product_trending[12]->images[1]->image_name)?? '' }}"
                                                            @endisset
                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                 width="600" height="600">
                                                        </a>


                                                    </div>

                                                    <div class="product-description">
                                                        <div class="product-groups">

                                                            <div class="product-comments">
                                                                <div class="star_content">
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                </div>
                                                                <span>5 review</span>
                                                            </div>
                                                            <p class="seller_name">
                                                                <a title="View seller profile"
                                                                   href="jmarketplace/1_david-james/index.htm">
                                                                    <i class="fa fa-user"></i>
                                                                    David James
                                                                </a>
                                                            </p>


                                                            <div class="product-title" itemprop="name"><a
                                                                    href="smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-size-s/6-color-taupe">
                                                                    {{ $product_trending[12]->description ?? '' }}</a></div>

                                                                    <div class="product-group-price">
                                                                        <div class="product-price-and-shipping">
                                                                            <span itemprop="price"
                                                                                  class="price">{{ number_format($product_trending[12]->special_price)?? number_format($product_trending[12]->price,2) }}</span>
                                                                            @if($product_trending[12]->special_price)
                                                                                <span
                                                                                    class="regular-price">{{ number_format($product_trending[12]->price,2) }}</span>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        <div class="product-buttons d-flex justify-content-center"
                                                             itemprop="offers" itemscope=""
                                                             itemtype="http://schema.org/Offer">
                                                             <form
                                                             action=""
                                                             method="post" class="formAddToCart">
                                                             @csrf
                                                             <input type="hidden" name="id_product"
                                                                    value="{{ $product_trending[12]->id}}">

                                                             <a class="add-to-cart cart-addition" data-product-id="{{ $product_trending[12]->id}}"  href="#"
                                                                style="{{ $product_trending[12]->in_stock !=1 ?'display:none' :''  }}"

                                                                data-button-action="add-to-cart"><i
                                                                     class="novicon-cart"></i><span>Add to cart</span></a>
                                                         </form>

                                                         <a class="addToWishlist  wishlistProd_22" href="#"
                                                         style="{{ $product_trending[12]->in_stock !=1 ?'display:none' :''  }}"

                                                            data-product-id="{{ $product_trending[12]->id }}"
                                                         >
                                                             <i class="fa fa-heart"></i>
                                                             <span>Add to Wishlist</span>
                                                         </a>
                                                         <a href="{{ route('product_details',$product_trending[12]->slug) }}" class="quick-view hidden-sm-down"
                                                           >
                                                             <i class="fa fa-search"></i><span> Quick view</span>
                                                         </a>
                                                      </div>
                                                    </div>
                                                </div>
                                                @endisset

                                                @isset($product_trending[13])
                                                <div class="product-miniature js-product-miniature item-one first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="thumbnail-container">

                                                        <a href="{{ route('product_details',$product_trending[13]->slug) }}"
                                                           class="thumbnail product-thumbnail two-image">
                                                            <img class="img-fluid image-cover"

                                                            @isset($product_trending[13]->images[0])
                                                            src="{{ get_images($product_trending[13]->images[0]->image_name)?? '' }}"
                                                            @endisset
                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                 width="600" height="600">
                                                            <img class="img-fluid image-secondary"
                                                            @isset($product_trending[13]->images[1])
                                                            src="{{ get_images($product_trending[13]->images[1]->image_name)?? '' }}"
                                                            @endisset
                                                                 alt=""
                                                                 data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                 width="600" height="600">
                                                        </a>


                                                    </div>

                                                    <div class="product-description">
                                                        <div class="product-groups">

                                                            <div class="product-comments">
                                                                <div class="star_content">
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                </div>
                                                                <span>5 review</span>
                                                            </div>
                                                            <p class="seller_name">
                                                                <a title="View seller profile"
                                                                   href="jmarketplace/1_david-james/index.htm">
                                                                    <i class="fa fa-user"></i>
                                                                    David James
                                                                </a>
                                                            </p>


                                                            <div class="product-title" itemprop="name"><a
                                                                    href="smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-size-s/6-color-taupe">
                                                                    {{ $product_trending[13]->description ?? '' }}</a></div>

                                                                    <div class="product-group-price">
                                                                        <div class="product-price-and-shipping">
                                                                            <span itemprop="price"
                                                                                  class="price">{{ number_format($product_trending[13]->special_price)?? number_format($product_trending[13]->price,2) }}</span>
                                                                            @if($product_trending[13]->special_price)
                                                                                <span
                                                                                    class="regular-price">{{ number_format($product_trending[13]->price,2) }}</span>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        <div class="product-buttons d-flex justify-content-center"
                                                             itemprop="offers" itemscope=""
                                                             itemtype="http://schema.org/Offer">
                                                             <form
                                                             action=""
                                                             method="post" class="formAddToCart">
                                                             @csrf
                                                             <input type="hidden" name="id_product"
                                                                    value="{{ $product_trending[13]->id}}">

                                                             <a class="add-to-cart cart-addition" data-product-id="{{ $product_trending[13]->id}}"  href="#"
                                                                style="{{ $product_trending[13]->in_stock !=1 ?'display:none' :''  }}"

                                                                data-button-action="add-to-cart"><i
                                                                     class="novicon-cart"></i><span>Add to cart</span></a>
                                                         </form>

                                                         <a class="addToWishlist  wishlistProd_22" href="#"
                                                         style="{{ $product_trending[13]->in_stock !=1 ?'display:none' :''  }}"

                                                            data-product-id="{{ $product_trending[13]->id }}"
                                                         >
                                                             <i class="fa fa-heart"></i>
                                                             <span>Add to Wishlist</span>
                                                         </a>
                                                         <a href="{{ route('product_details',$product_trending[13]->slug) }}" class="quick-view hidden-sm-down"
                                                           >
                                                             <i class="fa fa-search"></i><span> Quick view</span>
                                                         </a>
                                                      </div>
                                                    </div>
                                                </div>
                                                @endisset
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="nov-productlist     productlist-liststyle-2  col-xl-3 col-lg-3 col-md-3 col-xs-12 col-md-12 col-lg-12">
                                <div class="block block-product clearfix">
                                    <h2 class="title_block">
                                        BEST SELLERS
                                    </h2>
                                    <div class="block_content">
                                        <div id="productlist72625769"
                                             class="product_list grid owl-carousel owl-theme multi-row"
                                             data-autoplay="false" data-autoplaytimeout="6000" data-loop="false"
                                             data-margin="0" data-dots="false" data-nav="true" data-items="1"
                                             data-items_large="3" data-items_tablet="2" data-items_mobile="1">
                                            <div class="item  text-center">
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-size-s/6-color-taupe"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                     src="img/hummingbird-printed-t-shirt.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                     src="img/hummingbird-printed-t-shirt.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-size-s/6-color-taupe">Nullam
                                                                        sed sollicitudin mauris</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">


                                                                        <span itemprop="price" class="price">£24.00</span>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "
                                                     data-id-product="2" data-id-product-attribute="60"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-size-s/11-color-black"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                     src="img/brown-bear-printed-sweater.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                     src="img/brown-bear-printed-sweater.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/30-large_default/brown-bear-printed-sweater.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                    <span>0 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-size-s/11-color-black">Lorem
                                                                        ipsum dolor sit amet ege</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">


                                                                        <span itemprop="price" class="price">£36.00</span>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "
                                                     data-id-product="3" data-id-product-attribute="95"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/1-size-s/13-color-orange"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                     src="img/the-best-is-yet-to-come-framed-poster.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/34-large_default/the-best-is-yet-to-come-framed-poster.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                     src="img/the-best-is-yet-to-come-framed-poster.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/35-large_default/the-best-is-yet-to-come-framed-poster.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/2_taylor-jonson/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        Taylor Jonson
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/1-size-s/13-color-orange">Mauris
                                                                        molestie porttitor diam</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">


                                                                        <span itemprop="price" class="price">£30.00</span>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "
                                                     data-id-product="4" data-id-product-attribute="112"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="home-appliance/4-112-the-adventure-begins-framed-poster.html#/1-size-s/9-color-off_white"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                     src="img/the-adventure-begins-framed-poster.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/39-large_default/the-adventure-begins-framed-poster.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                     src="img/the-adventure-begins-framed-poster.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/43-large_default/the-adventure-begins-framed-poster.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                    <span>0 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/2_taylor-jonson/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        Taylor Jonson
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="home-appliance/4-112-the-adventure-begins-framed-poster.html#/1-size-s/9-color-off_white">Maecenas
                                                                        vulputate ligula vel</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">


                                                                        <span itemprop="price" class="price">£18.00</span>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "
                                                     data-id-product="5" data-id-product-attribute="134"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="audio/5-134-today-is-a-good-day-framed-poster.html#/1-size-s/13-color-orange"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                     src="img/today-is-a-good-day-framed-poster.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/44-large_default/today-is-a-good-day-framed-poster.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                     src="img/today-is-a-good-day-framed-poster.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/45-large_default/today-is-a-good-day-framed-poster.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                    <span>0 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/2_taylor-jonson/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        Taylor Jonson
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="audio/5-134-today-is-a-good-day-framed-poster.html#/1-size-s/13-color-orange">Vehicula
                                                                        vel tempus sit amet ulte</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">


                                                                        <span itemprop="price" class="price">£34.80</span>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item"
                                                     data-id-product="6" data-id-product-attribute="0"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="home-appliance/6-nullam-tempor-orci-eu-pretium.html"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                     src="img/nullam-tempor-orci-eu-pretium.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/49-large_default/nullam-tempor-orci-eu-pretium.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                     src="img/nullam-tempor-orci-eu-pretium.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/50-large_default/nullam-tempor-orci-eu-pretium.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                    <span>0 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/2_taylor-jonson/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        Taylor Jonson
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="home-appliance/6-nullam-tempor-orci-eu-pretium.html">Nullam
                                                                        tempor orci eu pretium</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">


                                                                        <span itemprop="price" class="price">£14.28</span>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item  text-center">
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"
                                                     data-id-product="7" data-id-product-attribute="155"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="home-appliance/7-155-donec-non-lectus-ac-erat-sedei.html#/1-size-s/10-color-red"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                     src="img/donec-non-lectus-ac-erat-sedei.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/54-large_default/donec-non-lectus-ac-erat-sedei.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                     src="img/donec-non-lectus-ac-erat-sedei.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/55-large_default/donec-non-lectus-ac-erat-sedei.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                    <span>0 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/2_taylor-jonson/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        Taylor Jonson
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="home-appliance/7-155-donec-non-lectus-ac-erat-sedei.html#/1-size-s/10-color-red">Donec
                                                                        non lectus ac erat sedei</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">


                                                                        <span itemprop="price" class="price">£14.28</span>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "
                                                     data-id-product="8" data-id-product-attribute="172"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="audio/8-172-curabitur-in-lorem-sit-ameten-alt.html#/1-size-s/10-color-red"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                     src="img/curabitur-in-lorem-sit-ameten-alt.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/59-large_default/curabitur-in-lorem-sit-ameten-alt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                     src="img/curabitur-in-lorem-sit-ameten-alt.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/60-large_default/curabitur-in-lorem-sit-ameten-alt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                    <span>0 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/2_taylor-jonson/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        Taylor Jonson
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="audio/8-172-curabitur-in-lorem-sit-ameten-alt.html#/1-size-s/10-color-red">Curabitur
                                                                        in lorem sit ameten alt</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">


                                                                        <span itemprop="price" class="price">£18.00</span>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "
                                                     data-id-product="9" data-id-product-attribute="179"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="smartphone-tablet/9-179-mauris-feugiat-et-dui-sit-amet.html#/1-size-s/15-color-green"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                     src="img/mauris-feugiat-et-dui-sit-amet.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/64-large_default/mauris-feugiat-et-dui-sit-amet.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                     src="img/mauris-feugiat-et-dui-sit-amet.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/65-large_default/mauris-feugiat-et-dui-sit-amet.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                    <span>0 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/3_harry-makle/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        Harry Makle
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="smartphone-tablet/9-179-mauris-feugiat-et-dui-sit-amet.html#/1-size-s/15-color-green">Mauris
                                                                        feugiat et dui sit amet</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">


                                                                        <span itemprop="price" class="price">£24.00</span>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "
                                                     data-id-product="10" data-id-product-attribute="192"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="smartphone-tablet/10-192-nullam-lacinia-metus-posuere.html#/1-size-s/18-color-pink"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                     src="img/nullam-lacinia-metus-posuere.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/69-large_default/nullam-lacinia-metus-posuere.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                     src="img/nullam-lacinia-metus-posuere.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/70-large_default/nullam-lacinia-metus-posuere.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                    <span>0 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/3_harry-makle/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        Harry Makle
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="smartphone-tablet/10-192-nullam-lacinia-metus-posuere.html#/1-size-s/18-color-pink">Nullam
                                                                        lacinia metus posuere</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">


                                                                        <span itemprop="price" class="price">£36.00</span>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "
                                                     data-id-product="12" data-id-product-attribute="232"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="home-appliance/12-232-nam-volutpat-justo-a-vehicula.html#/1-size-s/11-color-black"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                     src="img/nam-volutpat-justo-a-vehicula.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/79-large_default/nam-volutpat-justo-a-vehicula.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                     src="img/nam-volutpat-justo-a-vehicula.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/80-large_default/nam-volutpat-justo-a-vehicula.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                    <span>0 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/3_harry-makle/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        Harry Makle
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="home-appliance/12-232-nam-volutpat-justo-a-vehicula.html#/1-size-s/11-color-black">Nam
                                                                        volutpat justo a vehicula</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">


                                                                        <span itemprop="price" class="price">£7.56</span>


                                                                        <span class="regular-price">£10.80</span>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item"
                                                     data-id-product="13" data-id-product-attribute="254"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="audio/13-254-proin-placerat-lacus-eget-auctor.html#/1-size-s/10-color-red"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                     src="img/proin-placerat-lacus-eget-auctor.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/84-large_default/proin-placerat-lacus-eget-auctor.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                     src="img/proin-placerat-lacus-eget-auctor.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/85-large_default/proin-placerat-lacus-eget-auctor.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                    <span>0 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="audio/13-254-proin-placerat-lacus-eget-auctor.html#/1-size-s/10-color-red">Proin
                                                                        placerat lacus eget auctor</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">


                                                                        <span itemprop="price" class="price">£12.00</span>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item  text-center">
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"
                                                     data-id-product="14" data-id-product-attribute="270"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="smartphone-tablet/14-270-donec-laoreet-imperdiet-elit-ut.html#/1-size-s/6-color-taupe"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                     src="img/donec-laoreet-imperdiet-elit-ut.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/89-large_default/donec-laoreet-imperdiet-elit-ut.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                     src="img/donec-laoreet-imperdiet-elit-ut.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/90-large_default/donec-laoreet-imperdiet-elit-ut.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                    <span>0 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/3_harry-makle/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        Harry Makle
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="smartphone-tablet/14-270-donec-laoreet-imperdiet-elit-ut.html#/1-size-s/6-color-taupe">Donec
                                                                        laoreet imperdiet elit ut</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">


                                                                        <span itemprop="price" class="price">£18.00</span>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "
                                                     data-id-product="15" data-id-product-attribute="303"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="audio/15-303-nunc-tempus-velit-quis-urnanb.html#/1-size-s/10-color-red"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                     src="img/nunc-tempus-velit-quis-urnanb.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/94-large_default/nunc-tempus-velit-quis-urnanb.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                     src="img/nunc-tempus-velit-quis-urnanb.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/95-large_default/nunc-tempus-velit-quis-urnanb.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                    <span>0 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="audio/15-303-nunc-tempus-velit-quis-urnanb.html#/1-size-s/10-color-red">Nunc
                                                                        tempus velit quis urnanb</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">


                                                                        <span itemprop="price" class="price">£37.80</span>


                                                                        <span class="regular-price">£42.00</span>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "
                                                     data-id-product="16" data-id-product-attribute="323"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="home-appliance/16-323-cras-consequat-quis-dolor-eunde.html#/1-size-s/11-color-black"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                     src="img/cras-consequat-quis-dolor-eunde.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/99-large_default/cras-consequat-quis-dolor-eunde.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                     src="img/cras-consequat-quis-dolor-eunde.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/100-large_default/cras-consequat-quis-dolor-eunde.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                    <span>0 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/3_harry-makle/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        Harry Makle
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="home-appliance/16-323-cras-consequat-quis-dolor-eunde.html#/1-size-s/11-color-black">Cras
                                                                        consequat quis dolor eunde</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">


                                                                        <span itemprop="price" class="price">£21.60</span>


                                                                        <span class="regular-price">£24.00</span>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "
                                                     data-id-product="17" data-id-product-attribute="328"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="camera-photo/17-328-nam-feugiat-tellus-nec-ultrices.html#/1-size-s/10-color-red"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                     src="img/nam-feugiat-tellus-nec-ultrices.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/104-large_default/nam-feugiat-tellus-nec-ultrices.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                     src="img/nam-feugiat-tellus-nec-ultrices.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/105-large_default/nam-feugiat-tellus-nec-ultrices.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                    <span>0 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/3_harry-makle/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        Harry Makle
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="camera-photo/17-328-nam-feugiat-tellus-nec-ultrices.html#/1-size-s/10-color-red">Nam
                                                                        feugiat tellus nec ultrices</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">


                                                                        <span itemprop="price" class="price">£12.00</span>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "
                                                     data-id-product="18" data-id-product-attribute="363"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="home-appliance/18-363-mauris-semper-mattis-gravida.html#/1-size-s/10-color-red"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                     src="img/mauris-semper-mattis-gravida.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/109-large_default/mauris-semper-mattis-gravida.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                     src="img/mauris-semper-mattis-gravida.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/110-large_default/mauris-semper-mattis-gravida.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                     src="img/mauris-semper-mattis-gravida.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/110-large_default/mauris-semper-mattis-gravida.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                    <span>0 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/3_harry-makle/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        Harry Makle
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="home-appliance/18-363-mauris-semper-mattis-gravida.html#/1-size-s/10-color-red">Mauris
                                                                        semper mattis gravida</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">


                                                                        <span itemprop="price" class="price">£18.00</span>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item"
                                                     data-id-product="19" data-id-product-attribute="383"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="home-appliance/19-383-vivamus-non-ante-quis-est-rhont.html#/1-size-s/10-color-red"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                     src="img/vivamus-non-ante-quis-est-rhont.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/115-large_default/vivamus-non-ante-quis-est-rhont.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                     src="img/vivamus-non-ante-quis-est-rhont.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/116-large_default/vivamus-non-ante-quis-est-rhont.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                    <span>0 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/3_harry-makle/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        Harry Makle
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="home-appliance/19-383-vivamus-non-ante-quis-est-rhont.html#/1-size-s/10-color-red">Vivamus
                                                                        non ante quis est rhont</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">


                                                                        <span itemprop="price" class="price">£12.00</span>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item  text-center">
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"
                                                     data-id-product="21" data-id-product-attribute="391"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="audio/21-391-nunc-eros-lacus-porta-sed-mattis.html#/1-size-s/13-color-orange"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                     src="img/nunc-eros-lacus-porta-sed-mattis.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/120-large_default/nunc-eros-lacus-porta-sed-mattis.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                     src="img/nunc-eros-lacus-porta-sed-mattis.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/121-large_default/nunc-eros-lacus-porta-sed-mattis.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                    <span>0 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="audio/21-391-nunc-eros-lacus-porta-sed-mattis.html#/1-size-s/13-color-orange">Nunc
                                                                        eros lacus porta sed mattis</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">


                                                                        <span itemprop="price" class="price">£16.20</span>


                                                                        <span class="regular-price">£18.00</span>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "
                                                     data-id-product="22" data-id-product-attribute="408"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="audio/22-408-aenean-porta-ligula-egestas-east.html#/1-size-s/10-color-red"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                     src="img/aenean-porta-ligula-egestas-east.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/125-large_default/aenean-porta-ligula-egestas-east.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                     src="img/aenean-porta-ligula-egestas-east.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/126-large_default/aenean-porta-ligula-egestas-east.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                    <span>0 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="audio/22-408-aenean-porta-ligula-egestas-east.html#/1-size-s/10-color-red">Aenean
                                                                        porta ligula egestas east</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">


                                                                        <span itemprop="price" class="price">£24.00</span>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "
                                                     data-id-product="23" data-id-product-attribute="443"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="home-appliance/23-443-aliquam-in-augue-ac-enim-tinci.html#/1-size-s/10-color-red"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                     src="img/aliquam-in-augue-ac-enim-tinci.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/131-large_default/aliquam-in-augue-ac-enim-tinci.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                     src="img/aliquam-in-augue-ac-enim-tinci.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/132-large_default/aliquam-in-augue-ac-enim-tinci.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                    <span>0 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="home-appliance/23-443-aliquam-in-augue-ac-enim-tinci.html#/1-size-s/10-color-red">Aliquam
                                                                        in augue ac enim tinci</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">


                                                                        <span itemprop="price" class="price">£14.40</span>


                                                                        <span class="regular-price">£18.00</span>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "
                                                     data-id-product="24" data-id-product-attribute="0"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="camera-photo/24-nullam-sed-sollicitudin-mauris.html"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                     src="img/nullam-sed-sollicitudin-mauris.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/137-large_default/nullam-sed-sollicitudin-mauris.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                     src="img/nullam-sed-sollicitudin-mauris.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/138-large_default/nullam-sed-sollicitudin-mauris.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                    <span>0 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="camera-photo/24-nullam-sed-sollicitudin-mauris.html">Nullam
                                                                        sed sollicitudin mauris</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">


                                                                        <span itemprop="price" class="price">£9.60</span>


                                                                        <span class="regular-price">£12.00</span>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item"
                                                     data-id-product="26" data-id-product-attribute="0"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="smartphone-tablet/26-nullam-sed-sollicitudin-valumis.html"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                     src="img/nullam-sed-sollicitudin-valumis.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/146-large_default/nullam-sed-sollicitudin-valumis.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                     src="img/nullam-sed-sollicitudin-valumis.jpg"
                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/147-large_default/nullam-sed-sollicitudin-valumis.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                    <span>0 review</span>
                                                                </div>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="smartphone-tablet/26-nullam-sed-sollicitudin-valumis.html">Nullam
                                                                        sed sollicitudin valumis</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">


                                                                        <span itemprop="price" class="price">£36.00</span>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="nov-row policy-home col-lg-12 col-xs-12">
                        <div class="nov-row-wrap row">
                            <div class="nov-html col-xl-4 col-lg-4 col-md-4">
                                <div class="block">
                                    <div class="block_content">
                                        <div class="policy-row"><i class="noviconpolicy noviconpolicy-1"></i>
                                            <div class="policy-content">
                                                <div class="policy-name">{{ trans('site/home.Find out more deals') }} </div>
                                                <div class="policy-des">{{trans('site/home.Find out more deals')}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nov-html col-xl-4 col-lg-4 col-md-4">
                                <div class="block">
                                    <div class="block_content">
                                        <div class="policy-row"><i class="noviconpolicy noviconpolicy-2"></i>
                                            <div class="policy-content">
                                                <div class="policy-name">{{ trans('site/home.Money Back Guarantee') }}</div>
                                                <div class="policy-des">{{ trans('site/home.Guaranteed and approved methods of cash transactions') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nov-html col-xl-4 col-lg-4 col-md-4">
                                <div class="block">
                                    <div class="block_content">
                                        <div class="policy-row"><i class="noviconpolicy noviconpolicy-3"></i>
                                            <div class="policy-content">
                                                <div class="policy-name">{{ trans('site/home.Authenticity 100% guaranteed') }}</div>
                                                <div class="policy-des">{{ trans('site/home.we enhance warranty') }}

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nov-row  col-lg-12 col-xs-12">
                        <div class="nov-row-wrap row">
                            <div class="nov-productlist   productlist-liststyle    col-xl-4 col-lg-4 col-md-4 col-xs-12 col-md-12">
                                  @isset($sections[0])
                                <div class="block block-product clearfix">
                                    <h2 class="title_block">
                                        {{ get_trans($sections[0]) }}
                                    </h2>
                                    <div class="block_content">
                                        <div id="productlist178913877"
                                             class="product_list grid owl-carousel owl-theme multi-row"
                                             data-autoplay="false" data-autoplaytimeout="6000" data-loop="false"
                                             data-margin="0" data-dots="false" data-nav="true" data-items="1"
                                             data-items_large="1" data-items_tablet="2" data-items_mobile="1">
                                            <div class="item  text-center">
                                                @isset($sections[0]->products[0])
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w27 no-padding">
                                                        <div class="thumbnail-container">
                                                            <a href="{{ route('product_details',$sections[0]->products[0]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($sections[0]->products[0]->images[0])
                                                                     src="{{ get_images($sections[0]->products[0]->images[0]->image_name) }}"
                                                                     @endisset

                                                                     alt=""
                                                                     data-full-size-image-url=""
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"

                                                                @isset($sections[0]->products[0]->images[1])
                                                                src="{{ get_images($sections[0]->products[0]->images[1]->image_name) }}"
                                                                @endisset

                                                                     alt=""
                                                                     data-full-size-image-url=""
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w73 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$sections[0]->products[0]->slug) }}">
                                                                        {{ $sections[0]->products[0]->description }}</a></div>

                                                                    </div>
                                                                    <div class="product-group-price">

                                                                        <div class="product-price-and-shipping">

                                                                            @isset($sections[0]->products[0]->special_price)

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[0]->products[0]->special_price) }}
                                                                            </span>
                                                                            <span class="regular-price">{{number_format($sections[0]->products[0]->price) }}</span>

                                                                            @else

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[0]->products[0]->price) }}
                                                                            </span>

                                                                            @endisset



                                                                        </div>

                                                                    </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset

                                                @isset($sections[0]->products[1])
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w27 no-padding">
                                                        <div class="thumbnail-container">
                                                            <a href="{{ route('product_details',$sections[0]->products[1]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($sections[0]->products[1]->images[0])
                                                                     src="{{ get_images($sections[0]->products[1]->images[0]->image_name) }}"
                                                                     @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"

                                                                @isset($sections[0]->products[1]->images[1])
                                                                src="{{ get_images($sections[0]->products[1]->images[1]->image_name) }}"
                                                                @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w73 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$sections[0]->products[1]->slug) }}">
                                                                        {{ $sections[0]->products[1]->description }}</a></div>

                                                                    </div>
                                                                    <div class="product-group-price">

                                                                        <div class="product-price-and-shipping">

                                                                            @isset($sections[0]->products[1]->special_price)

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[0]->products[1]->special_price) }}
                                                                            </span>
                                                                            <span class="regular-price">{{number_format($sections[0]->products[1]->price) }}</span>

                                                                            @else

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[0]->products[1]->price) }}
                                                                            </span>

                                                                            @endisset



                                                                        </div>

                                                                    </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset

                                                @isset($sections[0]->products[2])
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w27 no-padding">
                                                        <div class="thumbnail-container">
                                                            <a href="{{ route('product_details',$sections[0]->products[2]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($sections[0]->products[2]->images[0])
                                                                     src="{{ get_images($sections[0]->products[2]->images[0]->image_name) }}"
                                                                     @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"

                                                                @isset($sections[0]->products[2]->images[1])
                                                                src="{{ get_images($sections[0]->products[2]->images[1]->image_name) }}"
                                                                @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w73 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$sections[0]->products[2]->slug) }}">
                                                                        {{ $sections[0]->products[2]->description }}</a></div>

                                                                    </div>
                                                                    <div class="product-group-price">

                                                                        <div class="product-price-and-shipping">

                                                                            @isset($sections[0]->products[2]->special_price)

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[0]->products[2]->special_price) }}
                                                                            </span>
                                                                            <span class="regular-price">{{number_format($sections[0]->products[2]->price) }}</span>

                                                                            @else

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[0]->products[2]->price) }}
                                                                            </span>

                                                                            @endisset



                                                                        </div>

                                                                    </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset

                                            </div>
                                            <div class="item  text-center">
                                                @isset($sections[0]->products[3])
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w27 no-padding">
                                                        <div class="thumbnail-container">
                                                            <a href="{{ route('product_details',$sections[0]->products[3]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($sections[0]->products[3]->images[0])
                                                                     src="{{ get_images($sections[0]->products[3]->images[0]->image_name) }}"
                                                                     @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"

                                                                @isset($sections[0]->products[3]->images[1])
                                                                src="{{ get_images($sections[0]->products[3]->images[1]->image_name) }}"
                                                                @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w73 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$sections[0]->products[3]->slug) }}">
                                                                        {{ $sections[0]->products[3]->description }}</a></div>

                                                                    </div>
                                                                    <div class="product-group-price">

                                                                        <div class="product-price-and-shipping">

                                                                            @isset($sections[0]->products[3]->special_price)

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[0]->products[3]->special_price) }}
                                                                            </span>
                                                                            <span class="regular-price">{{number_format($sections[0]->products[3]->price) }}</span>

                                                                            @else

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[0]->products[3]->price) }}
                                                                            </span>

                                                                            @endisset



                                                                        </div>

                                                                    </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset

                                                @isset($sections[0]->products[4])
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w27 no-padding">
                                                        <div class="thumbnail-container">
                                                            <a href="{{ route('product_details',$sections[0]->products[4]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($sections[0]->products[4]->images[0])
                                                                     src="{{ get_images($sections[0]->products[4]->images[0]->image_name) }}"
                                                                     @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"

                                                                @isset($sections[0]->products[4]->images[1])
                                                                src="{{ get_images($sections[0]->products[4]->images[1]->image_name) }}"
                                                                @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w73 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$sections[0]->products[4]->slug) }}">
                                                                        {{ $sections[0]->products[4]->description }}</a></div>

                                                                    </div>
                                                                    <div class="product-group-price">

                                                                        <div class="product-price-and-shipping">

                                                                            @isset($sections[0]->products[4]->special_price)

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[0]->products[4]->special_price) }}
                                                                            </span>
                                                                            <span class="regular-price">{{number_format($sections[0]->products[4]->price) }}</span>

                                                                            @else

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[0]->products[4]->price) }}
                                                                            </span>

                                                                            @endisset



                                                                        </div>

                                                                    </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset

                                                @isset($sections[0]->products[5])
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w27 no-padding">
                                                        <div class="thumbnail-container">
                                                            <a href="{{ route('product_details',$sections[0]->products[5]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($sections[0]->products[5]->images[0])
                                                                     src="{{ get_images($sections[0]->products[5]->images[0]->image_name) }}"
                                                                     @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"

                                                                @isset($sections[0]->products[5]->images[1])
                                                                src="{{ get_images($sections[0]->products[5]->images[1]->image_name) }}"
                                                                @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w73 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$sections[0]->products[5]->slug) }}">
                                                                        {{ $sections[0]->products[5]->description }}</a></div>

                                                                    </div>
                                                                    <div class="product-group-price">

                                                                        <div class="product-price-and-shipping">

                                                                            @isset($sections[0]->products[5]->special_price)

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[0]->products[5]->special_price) }}
                                                                            </span>
                                                                            <span class="regular-price">{{number_format($sections[0]->products[5]->price) }}</span>

                                                                            @else

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[0]->products[5]->price) }}
                                                                            </span>

                                                                            @endisset



                                                                        </div>

                                                                    </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endisset

                            </div>

                            <div class="nov-productlist   productlist-liststyle    col-xl-4 col-lg-4 col-md-4 col-xs-12 col-md-12">
                                @isset($sections[1])
                                <div class="block block-product clearfix">
                                    <h2 class="title_block">
                                        {{ get_trans($sections[1]) }}
                                    </h2>
                                    <div class="block_content">
                                        <div id="productlist178913877"
                                             class="product_list grid owl-carousel owl-theme multi-row"
                                             data-autoplay="false" data-autoplaytimeout="6000" data-loop="false"
                                             data-margin="0" data-dots="false" data-nav="true" data-items="1"
                                             data-items_large="1" data-items_tablet="2" data-items_mobile="1">
                                            <div class="item  text-center">
                                                @isset($sections[1]->products[0])
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w27 no-padding">
                                                        <div class="thumbnail-container">
                                                            <a href="{{ route('product_details',$sections[1]->products[0]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($sections[1]->products[0]->images[0])
                                                                     src="{{ get_images($sections[1]->products[0]->images[0]->image_name) }}"
                                                                     @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"

                                                                @isset($sections[1]->products[0]->images[1])
                                                                src="{{ get_images($sections[1]->products[0]->images[1]->image_name) }}"
                                                                @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w73 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$sections[1]->products[0]->slug) }}">
                                                                        {{ $sections[1]->products[0]->description }}</a></div>

                                                                    </div>
                                                                    <div class="product-group-price">

                                                                        <div class="product-price-and-shipping">

                                                                            @isset($sections[1]->products[0]->special_price)

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[1]->products[0]->special_price) }}
                                                                            </span>
                                                                            <span class="regular-price">{{number_format($sections[1]->products[0]->price) }}</span>

                                                                            @else

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[1]->products[0]->price) }}
                                                                            </span>

                                                                            @endisset



                                                                        </div>

                                                                    </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset

                                                @isset($sections[1]->products[1])
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w27 no-padding">
                                                        <div class="thumbnail-container">
                                                            <a href="smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-size-s/6-color-taupe"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($sections[1]->products[1]->images[0])
                                                                     src="{{ get_images($sections[1]->products[1]->images[0]->image_name) }}"
                                                                     @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"

                                                                @isset($sections[1]->products[1]->images[1])
                                                                src="{{ get_images($sections[1]->products[1]->images[1]->image_name) }}"
                                                                @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w73 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$sections[1]->products[1]->slug) }}">
                                                                        {{ $sections[1]->products[1]->description }}</a></div>

                                                                    </div>
                                                                    <div class="product-group-price">

                                                                        <div class="product-price-and-shipping">

                                                                            @isset($sections[1]->products[1]->special_price)

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[1]->products[1]->special_price) }}
                                                                            </span>
                                                                            <span class="regular-price">{{number_format($sections[1]->products[1]->price) }}</span>

                                                                            @else

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[1]->products[1]->price) }}
                                                                            </span>

                                                                            @endisset



                                                                        </div>

                                                                    </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset

                                                @isset($sections[1]->products[2])
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w27 no-padding">
                                                        <div class="thumbnail-container">
                                                            <a href="{{ route('product_details',$sections[1]->products[2]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($sections[1]->products[2]->images[0])
                                                                     src="{{ get_images($sections[1]->products[2]->images[0]->image_name) }}"
                                                                     @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"

                                                                @isset($sections[1]->products[2]->images[1])
                                                                src="{{ get_images($sections[1]->products[2]->images[1]->image_name) }}"
                                                                @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w73 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>

                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$sections[1]->products[2]->slug) }}">
                                                                        {{ $sections[1]->products[2]->description }}</a></div>

                                                                    </div>
                                                                    <div class="product-group-price">

                                                                        <div class="product-price-and-shipping">

                                                                            @isset($sections[1]->products[2]->special_price)

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[1]->products[2]->special_price) }}
                                                                            </span>
                                                                            <span class="regular-price">{{number_format($sections[1]->products[2]->price) }}</span>

                                                                            @else

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[1]->products[2]->price) }}
                                                                            </span>

                                                                            @endisset



                                                                        </div>

                                                                    </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset

                                            </div>
                                            <div class="item  text-center">
                                                @isset($sections[1]->products[3])
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w27 no-padding">
                                                        <div class="thumbnail-container">
                                                            <a href="{{ route('product_details',$sections[1]->products[3]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($sections[1]->products[3]->images[0])
                                                                     src="{{ get_images($sections[1]->products[3]->images[0]->image_name) }}"
                                                                     @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"

                                                                @isset($sections[1]->products[3]->images[1])
                                                                src="{{ get_images($sections[1]->products[3]->images[1]->image_name) }}"
                                                                @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w73 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$sections[1]->products[3]->slug) }}">
                                                                        {{ $sections[1]->products[3]->description }}</a></div>

                                                                    </div>
                                                                    <div class="product-group-price">

                                                                        <div class="product-price-and-shipping">

                                                                            @isset($sections[1]->products[3]->special_price)

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[1]->products[3]->special_price) }}
                                                                            </span>
                                                                            <span class="regular-price">{{number_format($sections[1]->products[3]->price) }}</span>

                                                                            @else

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[1]->products[3]->price) }}
                                                                            </span>

                                                                            @endisset



                                                                        </div>

                                                                    </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset

                                                @isset($sections[1]->products[4])
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w27 no-padding">
                                                        <div class="thumbnail-container">
                                                            <a href="{{ route('product_details',$sections[1]->products[4]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($sections[1]->products[4]->images[0])
                                                                     src="{{ get_images($sections[1]->products[4]->images[0]->image_name) }}"
                                                                     @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"

                                                                @isset($sections[1]->products[4]->images[1])
                                                                src="{{ get_images($sections[1]->products[4]->images[1]->image_name) }}"
                                                                @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w73 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$sections[1]->products[4]->slug) }}">
                                                                        {{ $sections[1]->products[4]->description }}</a></div>

                                                                    </div>
                                                                    <div class="product-group-price">

                                                                        <div class="product-price-and-shipping">

                                                                            @isset($sections[1]->products[4]->special_price)

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[1]->products[4]->special_price) }}
                                                                            </span>
                                                                            <span class="regular-price">{{number_format($sections[0]->products[4]->price) }}</span>

                                                                            @else

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[1]->products[4]->price) }}
                                                                            </span>

                                                                            @endisset



                                                                        </div>

                                                                    </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset

                                                @isset($sections[1]->products[5])
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w27 no-padding">
                                                        <div class="thumbnail-container">
                                                            <a href="{{ route('product_details',$sections[1]->products[5]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($sections[1]->products[5]->images[0])
                                                                     src="{{ get_images($sections[1]->products[5]->images[0]->image_name) }}"
                                                                     @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"

                                                                @isset($sections[1]->products[5]->images[1])
                                                                src="{{ get_images($sections[1]->products[5]->images[1]->image_name) }}"
                                                                @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w73 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$sections[1]->products[5]->slug) }}">
                                                                        {{ $sections[1]->products[5]->description }}</a></div>

                                                                    </div>
                                                                    <div class="product-group-price">

                                                                        <div class="product-price-and-shipping">

                                                                            @isset($sections[1]->products[5]->special_price)

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[1]->products[5]->special_price) }}
                                                                            </span>
                                                                            <span class="regular-price">{{number_format($sections[1]->products[5]->price) }}</span>

                                                                            @else

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[1]->products[5]->price) }}
                                                                            </span>

                                                                            @endisset



                                                                        </div>

                                                                    </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endisset

                            </div>

                            <div class="nov-productlist   productlist-liststyle    col-xl-4 col-lg-4 col-md-4 col-xs-12 col-md-12">
                                @isset($sections[2])
                                <div class="block block-product clearfix">
                                    <h2 class="title_block">
                                        {{ get_trans($sections[2]) }}
                                    </h2>
                                    <div class="block_content">
                                        <div id="productlist178913877"
                                             class="product_list grid owl-carousel owl-theme multi-row"
                                             data-autoplay="false" data-autoplaytimeout="6000" data-loop="false"
                                             data-margin="0" data-dots="false" data-nav="true" data-items="1"
                                             data-items_large="1" data-items_tablet="2" data-items_mobile="1">
                                            <div class="item  text-center">
                                                @isset($sections[2]->products[0])
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w27 no-padding">
                                                        <div class="thumbnail-container">
                                                            <a href="{{ route('product_details',$sections[2]->products[0]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($sections[2]->products[0]->images[0])
                                                                     src="{{ get_images($sections[2]->products[0]->images[0]->image_name) }}"
                                                                     @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"

                                                                @isset($sections[2]->products[0]->images[1])
                                                                src="{{ get_images($sections[2]->products[0]->images[1]->image_name) }}"
                                                                @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w73 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$sections[2]->products[0]->slug) }}">
                                                                        {{ $sections[2]->products[0]->description }}</a></div>

                                                                    </div>
                                                                    <div class="product-group-price">

                                                                        <div class="product-price-and-shipping">

                                                                            @isset($sections[2]->products[0]->special_price)

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[2]->products[0]->special_price) }}
                                                                            </span>
                                                                            <span class="regular-price">{{number_format($sections[2]->products[0]->price) }}</span>

                                                                            @else

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[2]->products[0]->price) }}
                                                                            </span>

                                                                            @endisset



                                                                        </div>

                                                                    </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset

                                                @isset($sections[2]->products[1])
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w27 no-padding">
                                                        <div class="thumbnail-container">
                                                            <a href="{{ route('product_details',$sections[2]->products[1]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($sections[2]->products[1]->images[0])
                                                                     src="{{ get_images($sections[2]->products[1]->images[0]->image_name) }}"
                                                                     @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"

                                                                @isset($sections[2]->products[1]->images[1])
                                                                src="{{ get_images($sections[2]->products[1]->images[1]->image_name) }}"
                                                                @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w73 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$sections[2]->products[1]->slug) }}">
                                                                        {{ $sections[2]->products[1]->description }}</a></div>

                                                                    </div>
                                                                    <div class="product-group-price">

                                                                        <div class="product-price-and-shipping">

                                                                            @isset($sections[2]->products[1]->special_price)

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[2]->products[1]->special_price) }}
                                                                            </span>
                                                                            <span class="regular-price">{{number_format($sections[2]->products[1]->price) }}</span>

                                                                            @else

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[2]->products[1]->price) }}
                                                                            </span>

                                                                            @endisset



                                                                        </div>

                                                                    </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset

                                                @isset($sections[2]->products[2])
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w27 no-padding">
                                                        <div class="thumbnail-container">
                                                            <a href="{{ route('product_details',$sections[2]->products[2]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($sections[2]->products[2]->images[0])
                                                                     src="{{ get_images($sections[2]->products[2]->images[0]->image_name) }}"
                                                                     @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"

                                                                @isset($sections[2]->products[2]->images[1])
                                                                src="{{ get_images($sections[2]->products[2]->images[1]->image_name) }}"
                                                                @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w73 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$sections[2]->products[2]->slug) }}">
                                                                        {{ $sections[2]->products[2]->description }}</a></div>

                                                                    </div>
                                                                    <div class="product-group-price">

                                                                        <div class="product-price-and-shipping">

                                                                            @isset($sections[2]->products[2]->special_price)

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[2]->products[2]->special_price) }}
                                                                            </span>
                                                                            <span class="regular-price">{{number_format($sections[2]->products[2]->price) }}</span>

                                                                            @else

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[2]->products[2]->price) }}
                                                                            </span>

                                                                            @endisset



                                                                        </div>

                                                                    </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset

                                            </div>
                                            <div class="item  text-center">
                                                @isset($sections[2]->products[3])
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w27 no-padding">
                                                        <div class="thumbnail-container">
                                                            <a href="{{ route('product_details',$sections[2]->products[3]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($sections[2]->products[3]->images[0])
                                                                     src="{{ get_images($sections[2]->products[3]->images[0]->image_name) }}"
                                                                     @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"

                                                                @isset($sections[2]->products[3]->images[1])
                                                                src="{{ get_images($sections[2]->products[3]->images[1]->image_name) }}"
                                                                @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w73 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$sections[2]->products[3]->slug) }}">
                                                                        {{ $sections[2]->products[3]->description }}</a></div>

                                                                    </div>
                                                                    <div class="product-group-price">

                                                                        <div class="product-price-and-shipping">

                                                                            @isset($sections[2]->products[3]->special_price)

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[2]->products[3]->special_price) }}
                                                                            </span>
                                                                            <span class="regular-price">{{number_format($sections[2]->products[3]->price) }}</span>

                                                                            @else

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[2]->products[3]->price) }}
                                                                            </span>

                                                                            @endisset



                                                                        </div>

                                                                    </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset

                                                @isset($sections[2]->products[4])
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w27 no-padding">
                                                        <div class="thumbnail-container">
                                                            <a href="{{ route('product_details',$sections[2]->products[4]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($sections[2]->products[4]->images[0])
                                                                     src="{{ get_images($sections[2]->products[4]->images[0]->image_name) }}"
                                                                     @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"

                                                                @isset($sections[2]->products[4]->images[1])
                                                                src="{{ get_images($sections[2]->products[4]->images[1]->image_name) }}"
                                                                @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w73 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$sections[2]->products[4]->slug) }}">
                                                                        {{ $sections[2]->products[4]->description }}</a></div>

                                                                    </div>
                                                                    <div class="product-group-price">

                                                                        <div class="product-price-and-shipping">

                                                                            @isset($sections[2]->products[4]->special_price)

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[2]->products[4]->special_price) }}
                                                                            </span>
                                                                            <span class="regular-price">{{number_format($sections[2]->products[4]->price) }}</span>

                                                                            @else

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[2]->products[4]->price) }}
                                                                            </span>

                                                                            @endisset



                                                                        </div>

                                                                    </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset

                                                @isset($sections[2]->products[5])
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w27 no-padding">
                                                        <div class="thumbnail-container">
                                                            <a href="{{ route('product_details',$sections[2]->products[5]->slug) }}"
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                @isset($sections[2]->products[5]->images[0])
                                                                     src="{{ get_images($sections[2]->products[5]->images[0]->image_name) }}"
                                                                     @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"

                                                                @isset($sections[2]->products[5]->images[1])
                                                                src="{{ get_images($sections[2]->products[5]->images[1]->image_name) }}"
                                                                @endisset

                                                                     alt=""
                                                                     data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w73 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="{{ route('product_details',$sections[2]->products[5]->slug) }}">
                                                                        {{ $sections[2]->products[5]->description }}</a></div>

                                                                    </div>
                                                                    <div class="product-group-price">

                                                                        <div class="product-price-and-shipping">

                                                                            @isset($sections[2]->products[5]->special_price)

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[2]->products[5]->special_price) }}
                                                                            </span>
                                                                            <span class="regular-price">{{number_format($sections[0]->products[5]->price) }}</span>

                                                                            @else

                                                                            <span itemprop="price" class="price">
                                                                                {{ number_format($sections[2]->products[5]->price) }}
                                                                            </span>

                                                                            @endisset



                                                                        </div>

                                                                    </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                @endisset
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endisset
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>


@stop

@section('scripts')


    <script>
        $(document).on('click', '.quick-view', function () {
            $('.quickview-modal-product-details-' + $(this).attr('data-product-id')).css("display", "block");
        });
        $(document).on('click', '.close', function () {
            $('.quickview-modal-product-details-' + $(this).attr('data-product-id')).css("display", "none");

            $('.not-loggedin-modal').css("display", "none");
            $('.alert-modal').css("display", "none");
            $('.alert-modal2').css("display", "none");
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click', '.addToWishlist', function (e) {
            e.preventDefault();

            @guest()
                $('.not-loggedin-modal').css('display','block');
            @endguest
            $.ajax({
                type: 'post',
                url: "{{ route('store_wishlist') }}",
                data: {
                    'productId': $(this).attr('data-product-id'),
                },
                success: function (data) {
                    if(data.wished )
                    $('.alert-modal').css('display','block');
                    else
                        $('.alert-modal2').css('display','block');
                }
            });
        });

        $(document).on('click', '.cart-addition', function (e) {
            e.preventDefault();

            $.ajax({
                type: 'post',
                url: "{{ route('add_to_cart') }}",
                data: {
                    'product_id': $(this).attr('data-product-id'),
                },
                success: function (data) {
                    location.reload();

                }
            });
        });


    </script>

@endsection

