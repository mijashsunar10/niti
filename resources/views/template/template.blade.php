<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Niti Academy - Professional Courses in Nepal')</title>

    <!-- Meta Description -->
    <meta name="description" content="@yield('meta_description', 'Niti Academy provides professional courses including SEO, Digital Marketing, Graphic Design, Web Development, Laravel, MERN Stack and more.')">

    <!-- Meta Keywords (optional but helps a bit) -->
    <meta name="keywords" content="@yield('meta_keywords', 'Niti Academy, SEO course Nepal, Digital Marketing, IT Training Nepal, Web Development Training')">

    <!-- Mobile Optimization -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Open Graph for Facebook / LinkedIn -->
    <meta property="og:title" content="@yield('og_title', 'Niti Academy - Learn SEO, Programming, Digital Skills')">
    <meta property="og:description" content="@yield('og_description', 'Join the leading IT and Digital Skills Academy in Nepal. Online & Offline Classes.')">
    <meta property="og:image" content="@yield('og_image', asset('frontend/logo/image.png'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
      <meta property="og:site_name" content="Niti Academy">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicon -->
    <link href="{{asset('img/favicon.ico')}}" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"  rel="stylesheet">

     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> 

    <!-- Libraries -->
    <link href="{{asset('frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">

</head>

<body>

<section id="header">
    @include('layouts.header')
</section>

<section id="pagecontent">
    @yield('pagecontent')
</section>

<section id="footer">
    @include('layouts.footer')
</section>

</body>
</html>
