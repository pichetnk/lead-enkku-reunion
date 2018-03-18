<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon"  type="image/png"  href="/img/favicon.png" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta property="og:url"          content="{{URL::to('/')}}" />
    <meta property="og:title"        content="YWC Reunion8" />
    <meta property="og:description"  content="เพราะเข้าค่ายแล้วไม่มีวันจบ เลยต้องกลับมาพบกันใหม่" />
    <meta property="og:image"        content="{{URL::to('/')}}/img/fb.jpg" />
    <meta property="fb:app_id" content="{{env('FACEBOOK_APP_ID', '') }}" />
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top navbar-ywc">
         <div class="navbar-bg">
             <div class="navbar_boder"></div>
             
         </div>
        
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    @if(Route::current()->getName() != 'home')
                        <a class="navbar-brand" href="{{URL::to('/')}}"><img src="img/logo.svg" alt=" "/></a>
                    @endif
                    
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                       <li><a href="{{ route('home') }}" class="menuItem">HOME</a></li>
                    
                            
                        
                    </ul>
                </div>
            </div>
           
        </nav>

        @yield('content')
    </div>

    <!-- Scripts 
    <script src="/js/app.js"></script>
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-42284958-2', 'auto');
    ga('send', 'pageview');

    </script> -->
</body>
</html>
