<div class="header-top hidden-sm-down">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="header-top-left col-lg-6 col-md-6 d-flex justify-content-start align-items-center">
                    <div class="detail-email d-flex align-items-center justify-content-center">
                        <i class="icon-email"></i>
                        <p>{{ trans('site/home.Email') }} :  </p>
                        <span>
                  myecommerce@gmail.com
                </span>
                    </div>
                </div>

                     @guest
                 <div class="col-lg-6 col-md-6 d-flex justify-content-end align-items-center header-top-right">
                   <div class="register-out">
                     <i class="zmdi zmdi-account"></i>
                      <a class="register" href="{{ route('user_register') }}" data-link-action="display-register-form">
                      {{ trans('site/home.Register') }}
                        </a>
                      <span class="or-text">or</span>
                    <a class="login" href="{{ route('user_login') }}" rel="nofollow" title="{{ trans('site/home.Sign in') }}">{{ trans('site/home.Sign in') }}</a>
                 </div>
               @endguest
               @auth

                    <!-- begin module:ps_currencyselector/ps_currencyselector.tpl -->
                    <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/ps_currencyselector/ps_currencyselector.tpl --><div id="_desktop_currency_selector" class="currency-selector groups-selector hidden-sm-down currentcy-selector-dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="main">
                            <span class="expand-more">{{ trans('site/home.LOGOUT') }}</span>
                        </div>
                        <div class="currency-list dropdown-menu">
                            <a  class="dropdown-item"  href="{{ route('user_logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="text-warning ti-user"></i></a>

                            <form id="logout-form"  action="{{ route('user_logout') }}" method="POST" style="display: none;">
                                @csrf
                                <input type="submit" value="logout" class="btn btn-primary">
                            </form>
                                </div>
                    </div>
                    @endauth






                    <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/ps_currencyselector/ps_currencyselector.tpl -->
                    <!-- end module:ps_currencyselector/ps_currencyselector.tpl -->

                    <!-- begin module:ps_languageselector/ps_languageselector.tpl -->
                    <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/ps_languageselector/ps_languageselector.tpl --><div id="_desktop_language_selector" class="language-selector groups-selector hidden-sm-down language-selector-dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="main">
                            <span class="expand-more">{{ trans('site/home.languages') }}</span>
                        </div>
                        <div class="language-list dropdown-menu">
                            <div class="language-list-content text-left">
                                <ul>

                                    <div>
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <li>

                                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                    {{ $properties['native'] }}
                                                </a>
                                            </li>
                                        </div>
                                    @endforeach
                                </ul>


                            </div>
                        </div>
                    </div>
                    <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/ps_languageselector/ps_languageselector.tpl -->
                    <!-- end module:ps_languageselector/ps_languageselector.tpl -->

                </div>
            </div>
        </div>
    </div>
</div>
