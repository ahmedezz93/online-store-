<div class="header-bottom hidden-sm-down">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="contentsticky_verticalmenu verticalmenu-main col-lg-3 col-md-1 d-flex" data-textshowmore="Show More" data-textless="Hide" data-desktop_item="4">
                <div class="toggle-nav d-flex align-items-center justify-content-start">
                    <span class="btnov-lines"></span>
                    <span>{{ trans('site/home.Shop By Categories') }}</span>
                </div>
                <div class="verticalmenu-content has-showmore show">

                    <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novverticalmenu/views/templates/hook/novverticalmenu.tpl -->
                    <div id="_desktop_verticalmenu" class="nov-verticalmenu block" data-count_showmore="6">
                        <div class="box-content block_content">
                            <div id="verticalmenu" class="verticalmenu" role="navigation">
                                <ul class="menu level1">

                                    @isset($categories)
                                    @foreach ($categories as $category)


                                    <li class="item  parent" ><a href="#" title="Laptops &amp; Accessories"><i class="hasicon nov-icon" style="background:url('http://demo.bestprestashoptheme.com/savemart/themes/vinova_savemart/assets/img/modules/novverticalmenu/icon/laptop.png') no-repeat scroll center center;"></i>{{ get_trans($category) }}</a><span class="show-sub fa-active-sub"></span><div class="dropdown-menu" style="width:222px"><ul>
                                        @isset($category->sections)
                                        @foreach ($category->sections as $section)
                                                <li class="item  parent" ><a href="{{ route('get_products_site',$section->slug) }}" title="Laptop Thinkpad">{{ get_trans($section) }}</a><span class="show-sub fa-active-sub"></span><div class="dropdown-menu" >
                                                    <ul>

                                                        </ul></div></li>
                                        @endforeach
                                        @endisset

                                            </ul></div></li>
                                            @endforeach
                                            @endisset

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novverticalmenu/views/templates/hook/novverticalmenu.tpl -->

                </div>
            </div>

            <div class="col-lg-9 col-md-11 header-menu d-flex align-items-center justify-content-start">
                <div class="header-menu-search d-flex justify-content-between w-100 align-items-center">

                    <div id="_desktop_top_menu">

                        <!-- begin modules/novmegamenu/views/templates/hook/novmegamenu.tpl -->
                        <nav id="nov-megamenu" class="clearfix">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div id="megamenu" class="nov-megamenu clearfix">
                                <ul class="menu level1"><li class="item home-page" ><span class="opener"></span><a href="{{ route('home') }}" title="Home"><i class="zmdi zmdi-home"></i>{{ trans('main sidebar.Main') }}</a>
                                            </li>
                                    <li class="item  group" ><span ></span><a href="http://demo.bestprestashoptheme.com/savemart/ar/2-الصفحة-الرئيسية" title="Categories"><i class="zmdi zmdi-group"></i>{{ trans('main sidebar.categories') }}</a><div class="dropdown-menu" ><ul class=""><li class="item container group" ><div class="dropdown-menu" ><ul class="">
                                                         @isset($categories)
                                                         @foreach ($categories as $category )

                                                         <li class="item col-lg-3 col-md-3 html" ><span class="menu-title">{{ get_trans($category) }}</span><div class="menu-content"><ul class="col">
                                                                 @isset($category->sections)
                                                                 @foreach ($category->sections as $section)
                                                                 <li><a href="{{ route('get_products_site',$section->slug) }}" title="EliteBook">{{ get_trans($section) }}</a></li>
                                                                 @endforeach
                                                                 @endisset
                                                        </ul></div></li>
                                                        @endforeach
                                                         @endisset



                                                <li class="item container group" ><div class="dropdown-menu" ><ul class=""><li class="item  html" ><div class="menu-content"><div class="row">
                                                                        <div class="col-12 col-lg-4 col-md-4 mt-xs-10 text-center"><a href="#"><img class="img-fluid" src="http://images.vinovathemes.com/prestashop_savemart/banner-mega-1.jpg" alt="menu-banner-1" /></a></div>
                                                                        <div class="col-4 col-lg-4 col-md-4 mt-xs-10 text-center"><a href="#"><img class="img-fluid" src="http://images.vinovathemes.com/prestashop_savemart/banner-mega-2.jpg" alt="menu-banner-2" /></a></div>
                                                                        <div class="col-4 col-lg-4 col-md-4 mt-xs-10 text-center"><a href="#"><img class="img-fluid" src="http://images.vinovathemes.com/prestashop_savemart/banner-mega-3.jpg" alt="menu-banner-3" /></a></div>
                                                                    </div></div></li></ul></div></li>
                                            </ul></div></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- end modules/novmegamenu/views/templates/hook/novmegamenu.tpl -->

                    </div>

                    <div class="advencesearch_header">
                        <span class="toggle-search hidden-lg-up"><i class="zmdi zmdi-search"></i></span>
                        <div id="_desktop_search" class="contentsticky_search">

                            <!-- begin modules/novadvancedsearch/novadvancedsearch-top.tpl -->
                            <!-- block seach mobile -->
                            <!-- Block search module TOP -->
                            <div id="desktop_search_content"
                                 >
                                <form method="POST" action="{{ route('search_results') }}" id="searchbox" class="form-novadvancedsearch">
                                    @csrf
                                    <input type="hidden" name="id_category" class="id_category" value="0" />
                                    <div class="input-group">
                                        <input type="text" id="search_query_top" class="search_query ui-autocomplete-input form-control" name="search_query" value="" placeholder="Search"/>
                                        <h6 style="display:none">{{ $sections=\App\Models\Section::all() }}</h6>
                                        <select name="section_id" id="">
                                            <option value="">{{ trans('main header.all') }}</option>

                                        @foreach ($sections as $section )
                                        <option value="{{ $section->id }}">{{ get_trans($section) }}</option>
                                        @endforeach
                                        </select>

				 <button class="btn btn-secondary" type="submit" name="submit_search"><i class="material-icons">search</i></button>
			</span>
                                    </div>

                                </form>
                            </div>
                            <!-- /Block search module TOP -->

                            <!-- end modules/novadvancedsearch/novadvancedsearch-top.tpl -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
