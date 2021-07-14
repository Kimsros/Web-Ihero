<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="pizza, delivery food, fast food, sushi, take away, chinese, italian food">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Ihero</title>

    <!-- Favicons-->
    {{-- <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon"> --}}
    {{-- <link rel="apple-touch-icon" type="image/x-icon" href="/assets/img/apple-touch-icon-57x57-precomposed.png"> --}}
    {{-- <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="/assets/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="/assets/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="/assets/img/apple-touch-icon-144x144-precomposed.png"> --}}
    
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="/assets/css/animate.min.css" rel="stylesheet">
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="/assets/css/menu.css" rel="stylesheet">
	<link href="/assets/css/style.css" rel="stylesheet"> 
	<link href="/assets/css/responsive.css" rel="stylesheet">
	<link href="/assets/css/elegant_font/elegant_font.min.css" rel="stylesheet">
	<link href="/assets/css/fontello/css/fontello.min.css" rel="stylesheet">
	<link href="/assets/css/magnific-popup.css" rel="stylesheet">
	<link href="/assets/css/pop_up.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
	<link href="/assets/css/skins/square/grey.css" rel="stylesheet">
	<link href="/assets/css/admin.css" rel="stylesheet">
	<link href="/assets/js/editor/summernote-bs4.css" rel="stylesheet">
	<link href="/assets/css/dropzone.css" rel="stylesheet">
	
	<!-- YOUR CUSTOM CSS -->
	<link href="/assets/css/custom.css" rel="stylesheet">
    
    <!-- Modernizr -->
	<script src="/assets/js/modernizr.js"></script> 
</head>

<body>

    <div id="preloader">
        <div class="sk-spinner sk-spinner-wave" id="status">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div>
    <!-- End Preload -->
    
    <div id="app">
        <app-frontend></app-frontend>
    </div>

<script src="{{ asset("js/app.js") }}" defer></script>
    
<!-- COMMON SCRIPTS -->
<script src="/assets/js/jquery-3.5.1.min.js"></script>
<script src="/assets/js/common_scripts_min.js"></script>
<script src="/assets/js/functions.js"></script>
<script src="/assets/assets/validate.js"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="/assets/js/video_header.js"></script>
<script src="/assets/js/infobox.js"></script>
<script src="/assets/js/ion.rangeSlider.js"></script>
<script>
$(document).ready(function() {
	'use strict';
   	  HeaderVideo.init({
      container: $('.header-video'),
      header: $('.header-video--media'),
      videoTrigger: $("#video-trigger"),
      autoPlayVideo: true
    });    

});
</script>

</body>
</html>