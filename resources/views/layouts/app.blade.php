<!DOCTYPE html>
<html lang="en">
    
<head>
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('asset-pdd/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('asset-pdd/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('asset-pdd/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('asset-pdd/favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('asset-pdd/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/turn.js/3/turn.min.js" integrity="sha512-rFun1mEMg3sNDcSjeGP35cLIycsS+og/QtN6WWnoSviHU9ykMLNQp7D1uuG1AzTV2w0VmyFVpszi2QJwiVW6oQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://kit.fontawesome.com/c57fb16e37.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hina+Mincho&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
</head>
<style>
    /* width */
::-webkit-scrollbar {
  width: 6px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #CCAF7A; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #470806; 
  border-radius:50px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #3F2418; 
}
    body{
        background-color: #FAF2E1;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        background-image: url({{asset('asset-pdd/main-bg-1.PNG')}}) ;
    }

    a {
  color: #7b9d6f;
  text-decoration: none;
}

    @font-face {
        font-family: Chenier-Regular;
        src: url("{{asset('asset-pdd/Chenier-Regular.woff')}}");
    }

    @font-face {
        font-family: Requiem;
        src: url("{{asset('asset-pdd/Requiem.woff')}}");
    }

    .beacon-navbar {
        padding-right: 0 !important;
        padding-left: 0 !important;
        background: #3F2418;
        width: 100%;
    }
    .beacon-option-item {
        display: inline;
    }

    .beacon-option-item a{
        color: #ece0c6 !important;
        font-family: 'Chenier-Regular' !important;
        font-size: 30px !important;
        text-decoration: none !important;
        /* padding: 30px; */
    }

  
    .beacon-navbar-nav ul li a:hover {
        color: #ffe5d8 !important;
        /* transform: translateY(-3px); */
    }

    .user-profile {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: white;
    }

    footer {
        background: #3F2418 ;
        color: #FAF2E1;
        
    }

    footer ul li {
        list-style-type: none;
    }

    footer ul li a {
        color: #FAF2E1;
        text-decoration: none;
        font-family: 'Chenier-Regular' !important;
        font-size: 18px;
    }
    .bar{
        width: 35px;
        height: 5px;
        margin: 6px 0;
        transition: 0.4s;
        background-color: #ffff;
    }
    .topnav {
        overflow: hidden;
        position: relative;
    }

    .topnav #myLinks {
        display: none;
    }

    .topnav a {
        color: white;
        text-decoration: none;
        font-size: 17px;
        display: block;
    }

    .beacon-option-item-hp{
        color: #D2B886 !important;
        font-family: 'Chenier-Regular' !important;
        font-size: 18px !important;
        text-decoration: none !important;
    }
    
    .cd-horizontal-timeline {
    opacity: 0;
    margin: 2em auto;
    -webkit-transition: opacity 0.2s;
    -moz-transition: opacity 0.2s;
    transition: opacity 0.2s;
    }
    .cd-horizontal-timeline::before {
    /* never visible - this is used in jQuery to check the current MQ */
    content: 'mobile';
    display: none;
    }
    .cd-horizontal-timeline.loaded {
    /* show the timeline after events position has been set (using JavaScript) */
    opacity: 1;
    }
    .cd-horizontal-timeline .timeline {
    position: relative;
    height: 100px;
    width: 90%;
    max-width: 800px;
    margin: 0 auto;
    }
    .cd-horizontal-timeline .events-wrapper {
    position: relative;
    height: 100%;
    margin: 0 40px;
    overflow: hidden;
    }
    .cd-horizontal-timeline .events-wrapper::after, .cd-horizontal-timeline .events-wrapper::before {
    /* these are used to create a shadow effect at the sides of the timeline */
    content: '';
    position: absolute;
    z-index: 2;
    top: 0;
    height: 100%;
    width: 20px;
    }
    .cd-horizontal-timeline .events-wrapper::before {
    left: 0;
    background-image: -webkit-linear-gradient( left , #D2B885, rgba(248, 248, 248, 0));
    background-image: linear-gradient(to right, #D2B885, rgba(248, 248, 248, 0));
    }
    .cd-horizontal-timeline .events-wrapper::after {
    right: 0;
    background-image: -webkit-linear-gradient( right , #D2B885, rgba(248, 248, 248, 0));
    background-image: linear-gradient(to left, #D2B885, rgba(248, 248, 248, 0));
    }
    .cd-horizontal-timeline .events {
    /* this is the grey line/timeline */
    position: absolute;
    z-index: 1;
    left: 0;
    top: 49px;
    height: 2px;
    /* width will be set using JavaScript */
    background: #3F2418;
    -webkit-transition: -webkit-transform 0.4s;
    -moz-transition: -moz-transform 0.4s;
    transition: transform 0.4s;
    }
    .cd-horizontal-timeline .filling-line {
    /* this is used to create the green line filling the timeline */
    position: absolute;
    z-index: 1;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    background-color: #B38C68;
    -webkit-transform: scaleX(0);
    -moz-transform: scaleX(0);
    -ms-transform: scaleX(0);
    -o-transform: scaleX(0);
    transform: scaleX(0);
    -webkit-transform-origin: left center;
    -moz-transform-origin: left center;
    -ms-transform-origin: left center;
    -o-transform-origin: left center;
    transform-origin: left center;
    -webkit-transition: -webkit-transform 0.3s;
    -moz-transition: -moz-transform 0.3s;
    transition: transform 0.3s;
    }
    .cd-horizontal-timeline .events a {
    position: absolute;
    bottom: 0;
    z-index: 2;
    text-align: center;
    font-size: 1.3rem;
    padding-bottom: 15px;
    color: #383838;
    /* fix bug on Safari - text flickering while timeline translates */
    -webkit-transform: translateZ(0);
    -moz-transform: translateZ(0);
    -ms-transform: translateZ(0);
    -o-transform: translateZ(0);
    transform: translateZ(0);
    }
    .cd-horizontal-timeline .events a::after {
    /* this is used to create the event spot */
    content: '';
    position: absolute;
    left: 50%;
    right: auto;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    transform: translateX(-50%);
    bottom: -5px;
    height: 12px;
    width: 12px;
    border-radius: 50%;
    border: 2px solid #3F2418;
    background-color: #D0B781;
    -webkit-transition: background-color 0.3s, border-color 0.3s;
    -moz-transition: background-color 0.3s, border-color 0.3s;
    transition: background-color 0.3s, border-color 0.3s;
    }
    .no-touch .cd-horizontal-timeline .events a:hover::after {
    background-color: #7b9d6f;
    border-color: #7b9d6f;
    }
    .cd-horizontal-timeline .events a.selected {
    pointer-events: none;
    }
    .cd-horizontal-timeline .events a.selected::after {
    background-color: #7b9d6f;
    border-color: #7b9d6f;
    }
    .cd-horizontal-timeline .events a.older-event::after {
    border-color: #7b9d6f;
    }
    @media only screen and (min-width: 1100px) {
    .cd-horizontal-timeline {
        margin: 6em auto;
    }
    .cd-horizontal-timeline::before {
        /* never visible - this is used in jQuery to check the current MQ */
        content: 'desktop';
    }
    }

    .cd-timeline-navigation a {
    /* these are the left/right arrows to navigate the timeline */
    position: absolute;
    z-index: 1;
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    height: 34px;
    width: 34px;
    border-radius: 50%;
    border: 2px solid #3F2418;
    /* replace text with an icon */
    overflow: hidden;
    color: transparent;
    text-indent: 100%;
    white-space: nowrap;
    -webkit-transition: border-color 0.3s;
    -moz-transition: border-color 0.3s;
    transition: border-color 0.3s;
    }
    .cd-timeline-navigation a::after {
    /* arrow icon */
    content: '';
    position: absolute;
    height: 16px;
    width: 16px;
    left: 50%;
    top: 50%;
    bottom: auto;
    right: auto;
    -webkit-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -ms-transform: translateX(-50%) translateY(-50%);
    -o-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    background: url("{{asset('asset-pdd/arrow.svg')}}") no-repeat 0 0;
    }
    .cd-timeline-navigation a.prev {
    left: 0;
    -webkit-transform: translateY(-50%) rotate(180deg);
    -moz-transform: translateY(-50%) rotate(180deg);
    -ms-transform: translateY(-50%) rotate(180deg);
    -o-transform: translateY(-50%) rotate(180deg);
    transform: translateY(-50%) rotate(180deg);
    }
    .cd-timeline-navigation a.next {
    right: 0;
    }
    .no-touch .cd-timeline-navigation a:hover {
    border-color: #7b9d6f;
    }
    .cd-timeline-navigation a.inactive {
    cursor: not-allowed;
    }
    .cd-timeline-navigation a.inactive::after {
    background-position: 0 -16px;
    }
    .no-touch .cd-timeline-navigation a.inactive:hover {
    border-color: #dfdfdf;
    }

    .cd-horizontal-timeline .events-content {
    position: relative;
    width: 100%;
    margin: 2em 0;
    overflow: hidden;
    -webkit-transition: height 0.4s;
    -moz-transition: height 0.4s;
    transition: height 0.4s;
    }
    .cd-horizontal-timeline .events-content li {
    position: absolute;
    z-index: 1;
    width: 100%;
    left: 0;
    top: 0;
    -webkit-transform: translateX(-100%);
    -moz-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    -o-transform: translateX(-100%);
    transform: translateX(-100%);
    padding: 0 5%;
    opacity: 0;
    -webkit-animation-duration: 0.4s;
    -moz-animation-duration: 0.4s;
    animation-duration: 0.4s;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
    }
    .cd-horizontal-timeline .events-content li.selected {
    /* visible event content */
    position: relative;
    z-index: 2;
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    }
    .cd-horizontal-timeline .events-content li.enter-right, .cd-horizontal-timeline .events-content li.leave-right {
    -webkit-animation-name: cd-enter-right;
    -moz-animation-name: cd-enter-right;
    animation-name: cd-enter-right;
    }
    .cd-horizontal-timeline .events-content li.enter-left, .cd-horizontal-timeline .events-content li.leave-left {
    -webkit-animation-name: cd-enter-left;
    -moz-animation-name: cd-enter-left;
    animation-name: cd-enter-left;
    }
    .cd-horizontal-timeline .events-content li.leave-right, .cd-horizontal-timeline .events-content li.leave-left {
    -webkit-animation-direction: reverse;
    -moz-animation-direction: reverse;
    animation-direction: reverse;
    }
    .cd-horizontal-timeline .events-content li > * {
    max-width: 800px;
    margin: 0 auto;
    }
    .cd-horizontal-timeline .events-content h2 {
    font-weight: bold;
    font-size: 2.6rem;
    font-family: "Playfair Display", serif;
    font-weight: 700;
    line-height: 1.2;
    }
    .cd-horizontal-timeline .events-content em {
    display: block;
    font-style: italic;
    margin: 10px auto;
    }
    .cd-horizontal-timeline .events-content em::before {
    content: '- ';
    }
    .cd-horizontal-timeline .events-content p {
    font-size: 1.4rem;
    color: #959595;
    }
    .cd-horizontal-timeline .events-content em, .cd-horizontal-timeline .events-content p {
    line-height: 1.6;
    }
    @media only screen and (min-width: 768px) {
    .cd-horizontal-timeline .events-content h2 {
        font-size: 7rem;
    }
    .cd-horizontal-timeline .events-content em {
        font-size: 2rem;
    }
    .cd-horizontal-timeline .events-content p {
        font-size: 1.8rem;
    }
    }

    @-webkit-keyframes cd-enter-right {
    0% {
        opacity: 0;
        -webkit-transform: translateX(100%);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0%);
    }
    }
    @-moz-keyframes cd-enter-right {
    0% {
        opacity: 0;
        -moz-transform: translateX(100%);
    }
    100% {
        opacity: 1;
        -moz-transform: translateX(0%);
    }
    }
    @keyframes cd-enter-right {
    0% {
        opacity: 0;
        -webkit-transform: translateX(100%);
        -moz-transform: translateX(100%);
        -ms-transform: translateX(100%);
        -o-transform: translateX(100%);
        transform: translateX(100%);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0%);
        -moz-transform: translateX(0%);
        -ms-transform: translateX(0%);
        -o-transform: translateX(0%);
        transform: translateX(0%);
    }
    }
    @-webkit-keyframes cd-enter-left {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-100%);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0%);
    }
    }
    @-moz-keyframes cd-enter-left {
    0% {
        opacity: 0;
        -moz-transform: translateX(-100%);
    }
    100% {
        opacity: 1;
        -moz-transform: translateX(0%);
    }
    }
    @keyframes cd-enter-left {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-100%);
        -moz-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
        -o-transform: translateX(-100%);
        transform: translateX(-100%);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0%);
        -moz-transform: translateX(0%);
        -ms-transform: translateX(0%);
        -o-transform: translateX(0%);
        transform: translateX(0%);
    }
    }

   
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark beacon-navbar fixed-top">
    <div class="container-fluid">
        <!-- <a class="navbar-brand" href="#"><img src="{{asset('asset-pdd/updated_i.PNG')}}" alt="" width="auto" height="50"></a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav mx-auto flex-nowrap">
                <li class="beacon-option-item nav-item">
                    <a class="nav-link menu-item px-5" href="#home"> Home </a>
                </li>
                <li class="beacon-option-item nav-item">
                    <a class="nav-link menu-item px-5" href="#aboutUs"> About Us </a>
                </li>
                <li class="beacon-option-item nav-item">
                    <a class="nav-link menu-item px-5" href="#timeline"> Timeline </a>
                </li>
                <li class="beacon-option-item nav-item">
                    <a class="nav-link menu-item px-5" href="{{asset('asset-pdd/guidebook.pdf')}}"> Guidebook </a>
                </li>
                <!-- <li class="beacon-option-item nav-item">
                    <a class="nav-link menu-item px-5" href="/login_tim"> Login/Register </a>
                </li> -->
            </ul>
        </div>
    </div>
    </nav>
    <!-- {{-- BUAT NON HP --}}
    <nav class="beacon-navbar fixed-top d-none d-lg-block">
        <div class="container-fluid">   
            <div class="row pt-2 pb-3">
                <div class="col-1">
                    {{-- BUAT SPACE --}}
                </div>
                <div class="col-2">
                    <img src="{{asset('asset-pdd/updated_i.PNG')}}" alt="" width="auto" height="50">
                </div>
                <div class="col-4">
                    {{-- BUAT SPACE --}}
                </div>
                <div class="col-4 pt-2 ps-5">
                    <ul class="beacon-option">
                        <li class="beacon-option-item ">
                            <a href="/"> Home </a>
                        </li>
                        <li class="beacon-option-item">
                            <a href="/about-us"> About Us </a>
                        </li>
                        <li class="beacon-option-item">
                            <a href="/guidebook"> Guidebook </a>
                        </li>
                        <li class="beacon-option-item">
                            <a href="/login_tim"> Login </a>
                        </li>
                    </ul>
                </div>
                
                <div class="col-1">
                    {{-- BUAT SPACE --}}
                </div>
            </div>
        </div>
    </nav>
    {{-- BUAT HP --}}
    <nav class="beacon-navbar d-block d-lg-none sticky-top ">
        <div class="container-fluid ">
            <div class="topnav">
                <div class="row pt-3 pb-3">
                    <div class="col-1">
                        {{-- BUAT SPACE --}}
                    </div>
                    <div class="col-6 ">
                        <img src="{{asset('asset-pdd/updated_i.PNG')}}" alt="" width="auto" height="50">
                    </div>
                    <div class="col-3"></div>
                    <div class="col-2">
                        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                        </a>
                    </div>
                </div>
                <div id="myLinks" class="option">
                    <div class="row pt-2 ps-2">
                        <div class="col beacon-option-item-hp">   
                            <a href="/home"> Home </a>
                        </div>
                    </div>
                    <div class="row pt-2 ps-2">
                        <div class="col beacon-option-item-hp">
                            <a href="/about-us"> About Us </a>
                        </div>
                    </div>
                    <div class="row pt-2 ps-2">
                        <div class="col beacon-option-item-hp">
                            <a href="/guidebook"> Guidebook </a>
                        </div>
                    </div>
                    <div class="row pt-2 ps-2">
                        <div class="col beacon-option-item-hp">
                            <a href="/login_tim"> Login </a>
                        </div>
                    </div>
                    
                    
                    <div class="row pb-2"></div>
                </div>
                
            </div>
            
        </div>
    </nav> -->
    <div class="pt-5">
        @yield('content')
    </div>
    
    
    <!-- Footer  -->
    <footer class="pt-1 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-6 mt-3">
                    <div class="row">
                        <div class="col">
                            <img src="{{asset('asset-pdd/updated_i.PNG')}}" alt="" width="auto" height="70">
                        </div>
                    </div>
                </div>
                <div class="col-6"> </div>
            </div>
            <div class="row pt-2 ps-3">
                <table style="width:30px">
                    <tr class="ps-3">
                        <td>
                          <img src="{{asset('asset-pdd/icon_line.PNG')}}" alt="" width="auto" height="22">
                        </td>
                        <td class="pt-3">
                            <p style="color:#4F0202">Line</p>
                        </td>
                    </tr>
                    <tr >
                        <td><img src="{{asset('asset-pdd/icon_instagram.PNG')}}" alt="" width="auto" height="22"></td>
                        <td class="pt-3">
                            <p style="color:#4F0202">Instagram</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                          <img src="{{asset('asset-pdd/icon_whatsapp.PNG')}}" alt="" width="auto" height="22">
                        </td>
                        <td class="pt-3">
                            <p style="color:#4F0202">Whatsapp</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </footer>
    <script>
        jQuery(document).ready(function($){
	var timelines = $('.cd-horizontal-timeline'),
		eventsMinDistance = 60;

	(timelines.length > 0) && initTimeline(timelines);

	function initTimeline(timelines) {
		timelines.each(function(){
			var timeline = $(this),
				timelineComponents = {};
			//cache timeline components 
			timelineComponents['timelineWrapper'] = timeline.find('.events-wrapper');
			timelineComponents['eventsWrapper'] = timelineComponents['timelineWrapper'].children('.events');
			timelineComponents['fillingLine'] = timelineComponents['eventsWrapper'].children('.filling-line');
			timelineComponents['timelineEvents'] = timelineComponents['eventsWrapper'].find('a');
			timelineComponents['timelineDates'] = parseDate(timelineComponents['timelineEvents']);
			timelineComponents['eventsMinLapse'] = minLapse(timelineComponents['timelineDates']);
			timelineComponents['timelineNavigation'] = timeline.find('.cd-timeline-navigation');
			timelineComponents['eventsContent'] = timeline.children('.events-content');

			//assign a left postion to the single events along the timeline
			setDatePosition(timelineComponents, eventsMinDistance);
			//assign a width to the timeline
			var timelineTotWidth = setTimelineWidth(timelineComponents, eventsMinDistance);
			//the timeline has been initialize - show it
			timeline.addClass('loaded');

			//detect click on the next arrow
			timelineComponents['timelineNavigation'].on('click', '.next', function(event){
				event.preventDefault();
				updateSlide(timelineComponents, timelineTotWidth, 'next');
			});
			//detect click on the prev arrow
			timelineComponents['timelineNavigation'].on('click', '.prev', function(event){
				event.preventDefault();
				updateSlide(timelineComponents, timelineTotWidth, 'prev');
			});
			//detect click on the a single event - show new event content
			timelineComponents['eventsWrapper'].on('click', 'a', function(event){
				event.preventDefault();
				timelineComponents['timelineEvents'].removeClass('selected');
				$(this).addClass('selected');
				updateOlderEvents($(this));
				updateFilling($(this), timelineComponents['fillingLine'], timelineTotWidth);
				updateVisibleContent($(this), timelineComponents['eventsContent']);
			});

			//on swipe, show next/prev event content
			timelineComponents['eventsContent'].on('swipeleft', function(){
				var mq = checkMQ();
				( mq == 'mobile' ) && showNewContent(timelineComponents, timelineTotWidth, 'next');
			});
			timelineComponents['eventsContent'].on('swiperight', function(){
				var mq = checkMQ();
				( mq == 'mobile' ) && showNewContent(timelineComponents, timelineTotWidth, 'prev');
			});

			//keyboard navigation
			$(document).keyup(function(event){
				if(event.which=='37' && elementInViewport(timeline.get(0)) ) {
					showNewContent(timelineComponents, timelineTotWidth, 'prev');
				} else if( event.which=='39' && elementInViewport(timeline.get(0))) {
					showNewContent(timelineComponents, timelineTotWidth, 'next');
				}
			});
		});
	}

	function updateSlide(timelineComponents, timelineTotWidth, string) {
		//retrieve translateX value of timelineComponents['eventsWrapper']
		var translateValue = getTranslateValue(timelineComponents['eventsWrapper']),
			wrapperWidth = Number(timelineComponents['timelineWrapper'].css('width').replace('px', ''));
		//translate the timeline to the left('next')/right('prev') 
		(string == 'next') 
			? translateTimeline(timelineComponents, translateValue - wrapperWidth + eventsMinDistance, wrapperWidth - timelineTotWidth)
			: translateTimeline(timelineComponents, translateValue + wrapperWidth - eventsMinDistance);
	}

	function showNewContent(timelineComponents, timelineTotWidth, string) {
		//go from one event to the next/previous one
		var visibleContent =  timelineComponents['eventsContent'].find('.selected'),
			newContent = ( string == 'next' ) ? visibleContent.next() : visibleContent.prev();

		if ( newContent.length > 0 ) { //if there's a next/prev event - show it
			var selectedDate = timelineComponents['eventsWrapper'].find('.selected'),
				newEvent = ( string == 'next' ) ? selectedDate.parent('li').next('li').children('a') : selectedDate.parent('li').prev('li').children('a');
			
			updateFilling(newEvent, timelineComponents['fillingLine'], timelineTotWidth);
			updateVisibleContent(newEvent, timelineComponents['eventsContent']);
			newEvent.addClass('selected');
			selectedDate.removeClass('selected');
			updateOlderEvents(newEvent);
			updateTimelinePosition(string, newEvent, timelineComponents, timelineTotWidth);
		}
	}

	function updateTimelinePosition(string, event, timelineComponents, timelineTotWidth) {
		//translate timeline to the left/right according to the position of the selected event
		var eventStyle = window.getComputedStyle(event.get(0), null),
			eventLeft = Number(eventStyle.getPropertyValue("left").replace('px', '')),
			timelineWidth = Number(timelineComponents['timelineWrapper'].css('width').replace('px', '')),
			timelineTotWidth = Number(timelineComponents['eventsWrapper'].css('width').replace('px', ''));
		var timelineTranslate = getTranslateValue(timelineComponents['eventsWrapper']);

        if( (string == 'next' && eventLeft > timelineWidth - timelineTranslate) || (string == 'prev' && eventLeft < - timelineTranslate) ) {
        	translateTimeline(timelineComponents, - eventLeft + timelineWidth/2, timelineWidth - timelineTotWidth);
        }
	}

	function translateTimeline(timelineComponents, value, totWidth) {
		var eventsWrapper = timelineComponents['eventsWrapper'].get(0);
		value = (value > 0) ? 0 : value; //only negative translate value
		value = ( !(typeof totWidth === 'undefined') &&  value < totWidth ) ? totWidth : value; //do not translate more than timeline width
		setTransformValue(eventsWrapper, 'translateX', value+'px');
		//update navigation arrows visibility
		(value == 0 ) ? timelineComponents['timelineNavigation'].find('.prev').addClass('inactive') : timelineComponents['timelineNavigation'].find('.prev').removeClass('inactive');
		(value == totWidth ) ? timelineComponents['timelineNavigation'].find('.next').addClass('inactive') : timelineComponents['timelineNavigation'].find('.next').removeClass('inactive');
	}

	function updateFilling(selectedEvent, filling, totWidth) {
		//change .filling-line length according to the selected event
		var eventStyle = window.getComputedStyle(selectedEvent.get(0), null),
			eventLeft = eventStyle.getPropertyValue("left"),
			eventWidth = eventStyle.getPropertyValue("width");
		eventLeft = Number(eventLeft.replace('px', '')) + Number(eventWidth.replace('px', ''))/2;
		var scaleValue = eventLeft/totWidth;
		setTransformValue(filling.get(0), 'scaleX', scaleValue);
	}

	function setDatePosition(timelineComponents, min) {
		for (i = 0; i < timelineComponents['timelineDates'].length; i++) { 
		    var distance = daydiff(timelineComponents['timelineDates'][0], timelineComponents['timelineDates'][i]),
		    	distanceNorm = Math.round(distance/timelineComponents['eventsMinLapse']) + 2;
		    timelineComponents['timelineEvents'].eq(i).css('left', distanceNorm*min+'px');
		}
	}

	function setTimelineWidth(timelineComponents, width) {
		var timeSpan = daydiff(timelineComponents['timelineDates'][0], timelineComponents['timelineDates'][timelineComponents['timelineDates'].length-1]),
			timeSpanNorm = timeSpan/timelineComponents['eventsMinLapse'],
			timeSpanNorm = Math.round(timeSpanNorm) + 4,
			totalWidth = timeSpanNorm*width;
		timelineComponents['eventsWrapper'].css('width', totalWidth+'px');
		updateFilling(timelineComponents['timelineEvents'].eq(0), timelineComponents['fillingLine'], totalWidth);
	
		return totalWidth;
	}

	function updateVisibleContent(event, eventsContent) {
		var eventDate = event.data('date'),
			visibleContent = eventsContent.find('.selected'),
			selectedContent = eventsContent.find('[data-date="'+ eventDate +'"]'),
			selectedContentHeight = selectedContent.height();

		if (selectedContent.index() > visibleContent.index()) {
			var classEnetering = 'selected enter-right',
				classLeaving = 'leave-left';
		} else {
			var classEnetering = 'selected enter-left',
				classLeaving = 'leave-right';
		}

		selectedContent.attr('class', classEnetering);
		visibleContent.attr('class', classLeaving).one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
			visibleContent.removeClass('leave-right leave-left');
			selectedContent.removeClass('enter-left enter-right');
		});
		eventsContent.css('height', selectedContentHeight+'px');
	}

	function updateOlderEvents(event) {
		event.parent('li').prevAll('li').children('a').addClass('older-event').end().end().nextAll('li').children('a').removeClass('older-event');
	}

	function getTranslateValue(timeline) {
		var timelineStyle = window.getComputedStyle(timeline.get(0), null),
			timelineTranslate = timelineStyle.getPropertyValue("-webkit-transform") ||
         		timelineStyle.getPropertyValue("-moz-transform") ||
         		timelineStyle.getPropertyValue("-ms-transform") ||
         		timelineStyle.getPropertyValue("-o-transform") ||
         		timelineStyle.getPropertyValue("transform");

        if( timelineTranslate.indexOf('(') >=0 ) {
        	var timelineTranslate = timelineTranslate.split('(')[1];
    		timelineTranslate = timelineTranslate.split(')')[0];
    		timelineTranslate = timelineTranslate.split(',');
    		var translateValue = timelineTranslate[4];
        } else {
        	var translateValue = 0;
        }

        return Number(translateValue);
	}

	function setTransformValue(element, property, value) {
		element.style["-webkit-transform"] = property+"("+value+")";
		element.style["-moz-transform"] = property+"("+value+")";
		element.style["-ms-transform"] = property+"("+value+")";
		element.style["-o-transform"] = property+"("+value+")";
		element.style["transform"] = property+"("+value+")";
	}

	//based on http://stackoverflow.com/questions/542938/how-do-i-get-the-number-of-days-between-two-dates-in-javascript
	function parseDate(events) {
		var dateArrays = [];
		events.each(function(){
			var dateComp = $(this).data('date').split('/'),
				newDate = new Date(dateComp[2], dateComp[1]-1, dateComp[0]);
			dateArrays.push(newDate);
		});
	    return dateArrays;
	}

	function parseDate2(events) {
		var dateArrays = [];
		events.each(function(){
			var singleDate = $(this),
				dateComp = singleDate.data('date').split('T');
			if( dateComp.length > 1 ) { //both DD/MM/YEAR and time are provided
				var dayComp = dateComp[0].split('/'),
					timeComp = dateComp[1].split(':');
			} else if( dateComp[0].indexOf(':') >=0 ) { //only time is provide
				var dayComp = ["2000", "0", "0"],
					timeComp = dateComp[0].split(':');
			} else { //only DD/MM/YEAR
				var dayComp = dateComp[0].split('/'),
					timeComp = ["0", "0"];
			}
			var	newDate = new Date(dayComp[2], dayComp[1]-1, dayComp[0], timeComp[0], timeComp[1]);
			dateArrays.push(newDate);
		});
	    return dateArrays;
	}

	function daydiff(first, second) {
	    return Math.round((second-first));
	}

	function minLapse(dates) {
		//determine the minimum distance among events
		var dateDistances = [];
		for (i = 1; i < dates.length; i++) { 
		    var distance = daydiff(dates[i-1], dates[i]);
		    dateDistances.push(distance);
		}
		return Math.min.apply(null, dateDistances);
	}

	/*
		How to tell if a DOM element is visible in the current viewport?
		http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
	*/
	function elementInViewport(el) {
		var top = el.offsetTop;
		var left = el.offsetLeft;
		var width = el.offsetWidth;
		var height = el.offsetHeight;

		while(el.offsetParent) {
		    el = el.offsetParent;
		    top += el.offsetTop;
		    left += el.offsetLeft;
		}

		return (
		    top < (window.pageYOffset + window.innerHeight) &&
		    left < (window.pageXOffset + window.innerWidth) &&
		    (top + height) > window.pageYOffset &&
		    (left + width) > window.pageXOffset
		);
	}

	function checkMQ() {
		//check if mobile or desktop device
		return window.getComputedStyle(document.querySelector('.cd-horizontal-timeline'), '::before').getPropertyValue('content').replace(/'/g, "").replace(/"/g, "");
	}
});
    </script>
</body>
</html>
<script>
    function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
</script>
<script>
  AOS.init();
</script>
