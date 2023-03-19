<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="{{ app()->getlocale() === 'en' ? 'ltr' :'rtl' }}">


@include('layouts.head')
<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->
@include('layouts.main-header')
@include('layouts.main-sidebar')

@yield('content')

@include('layouts.footer')

@include('layouts.footer-script')

@yield('script')
</body>
</html>
