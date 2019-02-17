<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="text" content="">
<meta name="author" content="">
{{-- <link rel="shortcut icon" href="style/images/favicon.png"> --}}
<title>Darush Naghash | داریوش نقاش</title>
<link rel="stylesheet" type="text/css" href="{{ asset('style/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('style/css/plugins.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('style/revolution/css/settings.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('style/revolution/css/layers.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('style/revolution/css/navigation.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('style/revolution/revolution-addons/filmstrip/css/revolution.addon.filmstrip.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('style/revolution/revolution-addons/typewriter/css/typewriter.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('style/type/icons.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('style/css/color/blue.css') }}">
<link href='https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i' rel='stylesheet' type='text/css'>
</head>
<body class="onepage" data-spy="scroll" data-target=".navbar">
<div class="content-wrapper">
  <nav class="navbar transparent absolute nav-wrapper-dark inverse-text navbar-expand-lg">
    <div class="container">
      <div class="navbar-header">
        <div class="navbar-brand">
          <a href="{{ route('index') }}">
            {{-- <h2>Darush Naghash</h2> --}}
            <img src="#" srcset="style/images/logo-light.png 1x, style/images/logo-light@2x.png 2x" alt="" />
          </a></div>
        <div class="navbar-hamburger ml-auto d-lg-none d-xl-none"><button class="hamburger animate" data-toggle="collapse" data-target=".navbar-collapse"><span></span></button></div> 
      </div>
      <!-- /.navbar-header -->
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link scroll" href="{{ route('index') }}">Home</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link has-submenu" href="#" id="sm-155044386792801-55" aria-haspopup="true" aria-controls="sm-155044386792801-56" aria-expanded="false">
            Gallery<span class="sub-arrow"></span><span class="sub-arrow"></span>
          </a>
            <ul class="dropdown-menu dropdown-menu-left sm-nowrap" id="sm-155044386792801-56" role="group" aria-hidden="true" aria-labelledby="sm-155044386792801-55" aria-expanded="false" style="width: auto; display: none; top: auto; left: 0px; margin-left: 0px; margin-top: 0px; min-width: 10em; max-width: 30em;">
              @isset($menu)
                @foreach($menu as $item)
                  <li class="nav-item"><a class="nav-link" href="{{ route('gallery.slug', $item->slug)  }}">{{ $item->name }}</a></li>
                @endforeach
              @endisset
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link scroll" href="{{ route('videos') }}">Video</a></li>
          <li class="nav-item"><a class="nav-link scroll" href="#about">Booking</a></li>
          <li class="nav-item"><a class="nav-link scroll" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link scroll" href="#contact">Contact</a></li>
        </ul>
        <!-- /.navbar-nav -->
        <div class="navbar-divider"></div>
        <ul class="social social-mute social-s">
          <li><a target="_blank" href="https://www.youtube.com/channel/UCHaki3pWcEJNo2VUaTyoVaw"><i class="fa fa-youtube"></i></a></li>
          <li><a target="_blank" href="https://www.instagram.com/dariush.naghashi/"><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container --> 
  </nav>
  <!-- /.navbar -->


@yield('header')

@yield('body')


  @include('layout.footer')
</div>
<!-- /.content-wrapper --> 
<script src="{{ asset('style/js/jquery.min.js') }}"></script> 
<script src="{{ asset('style/js/popper.min.js') }}"></script> 
<script src="{{ asset('style/js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('style/revolution/js/jquery.themepunch.tools.min.js') }}"></script> 
<script src="{{ asset('style/revolution/js/jquery.themepunch.revolution.min.js') }}"></script> 
<script src="{{ asset('style/revolution/revolution-addons/filmstrip/js/revolution.addon.filmstrip.min.js') }}"></script> 
<script src="{{ asset('style/revolution/revolution-addons/typewriter/js/revolution.addon.typewriter.min.js') }}"></script> 
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) --> 
<!--<script src="{{ asset('style/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script> 
<script src="{{ asset('style/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script> 
<script src="{{ asset('style/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script> 
<script src="{{ asset('style/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script> 
<script src="{{ asset('style/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script> 
<script src="{{ asset('style/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script> 
<script src="{{ asset('style/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script> 
<script src="{{ asset('style/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script> 
<script src="{{ asset('style/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>-->
<script src="{{ asset('style/js/plugins.js') }}"></script> 
<script src="{{ asset('style/js/scripts.js') }}"></script>
</body>
</html>