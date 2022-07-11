<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home 01</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/png" href="{{ asset('front_asset/images/icons/favicon.png') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('front_asset/vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css"
    href="{{ asset('front_asset/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css') }}">
  <link rel="stylesheet" type="text/css"
    href="{{ asset('front_asset/fonts/iconic/css/material-design-iconic-font.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('front_asset/vendor/animate/animate.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('front_asset/vendor/css-hamburgers/hamburgers.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('front_asset/vendor/animsition/css/animsition.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('front_asset/css/util.min.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('front_asset/css/main.css') }}">
</head>

<body class="animsition">
  @include('front.part.front_navbar')
  @include('front.part.front_headline')
  @include('front.part.front_featurepost')
  @include('front.home.index')
  @include('front.part.front_banner')
  @include('front.part.front_latest')
  @include('front.part.front_footer')
  @include('front.part.front_js')

</body>

</html>
