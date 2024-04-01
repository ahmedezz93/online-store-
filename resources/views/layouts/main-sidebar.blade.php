<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">



            <li class="nav-item">
                <a href=""><i class="la la-image"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">Albums    </span>
                </a>
                <ul class="menu-content">


                    <li class="active"><a class="menu-item" href="{{ route('albums.index') }}"
                        data-i18n="nav.dash.ecommerce"> Show Albums</a>
                    </li>

                    <li class="active"><a class="menu-item" href="{{ route('albums.create') }}"
                                          data-i18n="nav.dash.ecommerce"> Create Album</a>
                    </li>


                </ul>
            </li>
        </ul>
    </div>
</div>
