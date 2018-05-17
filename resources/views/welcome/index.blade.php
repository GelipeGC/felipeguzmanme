<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Web de</title>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
  <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
  <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
  <!-- Intro -->
	@include('welcome.partials.intro')
  <!-- About -->
  @include('welcome.partials.about')
  <!-- Services -->
  @include('welcome.partials.service')
  <!-- Portfolio -->
  @include('welcome.partials.portfolio')
  <!-- Contact -->
  @include('welcome.partials.contact')
  <script src="{{asset('js/app.js')}}"></script>
  <script src="{{asset('js/modernizr.custom.js')}}"></script>
  <script src="{{asset('js/device.min.js')}}"></script>
	<script src="{{asset('js/jquery.wordrotator.js')}}"></script>
	<script src="{{asset('js/smooth-scroll.js')}}"></script>
  <script src="{{asset('js/TweenMax.min.js')}}"></script>
  <script src="{{asset('js/jquery.superscrollorama.js')}}"></script>
	<script src="{{asset('js/jquery.diamonds.js')}}"></script>
	<script src="{{asset('js/jquery.mb.YTPlayer.js')}}"></script>
  <script src="{{asset('js/home.js')}}"></script>
</body>

</html>