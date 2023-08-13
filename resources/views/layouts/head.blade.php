<title>@yield('title')</title>
<!-- Stylesheets -->
<link href="{{asset('adminassets/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('adminassets/css/style.css')}}" rel="stylesheet">
<link href="{{asset('adminassets/css/responsive.css')}}" rel="stylesheet">

<!--Color Switcher Mockup-->
<link href="{{asset('adminassets/css/color-switcher-design.css')}}" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="{{asset('adminassets/css/color-themes/default-theme.css')}}" rel="stylesheet">

<link rel="shortcut icon" href="{{asset('adminassets/images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('adminassets/images/favicon.png')}}" type="image/x-icon">
@yield('css')