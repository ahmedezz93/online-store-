<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item active"><a href="{{ route('admin.dashboard') }}"><i class="fa-thin fa-house"></i></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">{{ trans('main sidebar.Main') }} </span></a>
            </li>



            <li class="nav-item"><a href="{{ route('categories') }}"><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">{{ trans('main sidebar.categories') }} </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2"></span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{ route('categories') }}"
                                          data-i18n="nav.dash.ecommerce"> {{ trans('main sidebar.view all') }} </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a href="{{ route('sections') }}"><i class="la la-dribble"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">{{ trans('main sidebar.sections') }}    </span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{ route('sections') }}"
                                          data-i18n="nav.dash.ecommerce"> {{ trans('main sidebar.view all') }} </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="fa-duotone fa-rectangles-mixed"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">{{ trans('main sidebar.commercial brands') }}   </span>
                    <span
                        class="badge badge badge-success badge-pill float-right mr-2"></span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{ route('brands') }}"
                                          data-i18n="nav.dash.ecommerce"> {{ trans('main sidebar.view all') }} </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item"><a href="{{ route('tags') }}"><i class="la la-tag"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">{{ trans('main sidebar.tags') }}  </span>
                    <span
                        class="badge badge badge-warning  badge-pill float-right mr-2"></span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{ route('tags') }}"
                                          data-i18n="nav.dash.ecommerce"> {{ trans('main sidebar.view all') }} </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item">
                <a href=""><i class="la la-ticket"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">{{ trans('main sidebar.Products') }}   </span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{ route('products') }}"
                                          data-i18n="nav.dash.ecommerce"> {{ trans('main sidebar.View products') }} </a>
                    </li>
                </ul>
            </li>




            <li class="nav-item">
                <a href=""><i class="la la-eye"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">{{ trans('main sidebar.Product characteristics') }}    </span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{ route('attributes') }}"
                                          data-i18n="nav.dash.ecommerce"> {{ trans('main sidebar.View properties') }}</a>
                    </li>
                </ul>
            </li>


            <li class="nav-item">
                <a href=""><i class="la la-info"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">{{ trans('main sidebar.Characteristics details') }}    </span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{ route('options') }}"
                                          data-i18n="nav.dash.ecommerce"> {{ trans('main sidebar.View details') }} </a>
                    </li>
                </ul>
            </li>



            <li class="nav-item">
                <a href=""><i class="la la-image"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">{{ trans('main sidebar.Website photos') }}    </span>
                </a>
                <ul class="menu-content">


                    <li class="active"><a class="menu-item" href="{{ route('sliders') }}"
                        data-i18n="nav.dash.ecommerce"> {{ trans('main sidebar.view all') }}</a>
                    </li>

                    <li class="active"><a class="menu-item" href="{{ route('create_sliders') }}"
                                          data-i18n="nav.dash.ecommerce"> {{ trans('main sidebar.Upload photos') }}</a>
                    </li>


                </ul>
            </li>

            <li class="nav-item">
                <a href=""><i class="la la-image"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">{{ trans('ads.ads') }}  </span>
                </a>
                <ul class="menu-content">


                    <li class="active"><a class="menu-item" href="{{ route('ads') }}"
                        data-i18n="nav.dash.ecommerce"> {{ trans('main sidebar.view all') }}</a>
                    </li>

                    <li class="active"><a class="menu-item" href="{{ route('create_ads') }}"
                                          data-i18n="nav.dash.ecommerce"> {{ trans('main sidebar.Upload photos') }}</a>
                    </li>


                </ul>
            </li>


@can('users')

            <li class="nav-item">
                <a href=""><i class="la la-pesron"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">{{ trans('main sidebar.powers') }}   </span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{ route('roles') }}"
                                          data-i18n="nav.dash.ecommerce"> {{ trans('main sidebar.View powers') }}</a>
                    </li>
                </ul>
            </li>



<li class="nav-item">
    <a href=""><i class="la la-users"></i>
        <span class="menu-title" data-i18n="nav.dash.main">{{ trans('main sidebar.control panel users') }}   </span>
    </a>
    <ul class="menu-content">
        <li class="active"><a class="menu-item" href="{{ route('users') }}"
                              data-i18n="nav.dash.ecommerce"> {{ trans('main sidebar.View users') }}</a>
        </li>
    </ul>
</li>

@endcan


        </ul>
    </div>
</div>
