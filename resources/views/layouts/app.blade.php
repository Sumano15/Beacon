<!DOCTYPE html>
<html lang="en">
    
<head>
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
    <script src="https://kit.fontawesome.com/c57fb16e37.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hina+Mincho&display=swap" rel="stylesheet">
    
</head>
<style>
    body{
        background-color: #FAF2E1;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        background-image: url({{asset('asset-pdd/main-bg-1.PNG')}}) ;
        
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
        color: white !important;
        font-family: 'Hina Mincho', serif !important;
        font-size: 18px !important;
        text-decoration: none !important;
        padding: 30px;
    }

  
    .beacon-navbar-nav ul li a:hover {
        color: #ffe5d8 !important;
        /* transform: translateY(-3px); */
    }

    .beacon-navbar-nav ul {
        margin-left: auto;
    }

    .user-profile {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: white;
    }

    footer {
        background: #3F2418;
        color: #FAF2E1;
        
    }

    footer ul li {
        list-style-type: none;
    }

    footer ul li a {
        color: #FAF2E1;
        text-decoration: none;
        font-family: 'Hina Mincho', serif;
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
        color: white !important;
        font-family: 'Hina Mincho', serif !important;
        font-size: 18px !important;
        text-decoration: none !important;
        
    }
    

   
</style>

<body>
    {{-- BUAT NON HP --}}
    <nav class="beacon-navbar fixed-top d-none d-lg-block">
        <div class="container-fluid">
            <div class="row pt-2 pb-3">
                <div class="col-1">
                    {{-- BUAT SPACE --}}
                </div>
                <div class="col-2">
                    <img src="{{asset('asset-pdd/updated_i.PNG')}}" alt="" width="auto" height="50">
                </div>
                <div class="col-2">
                    {{-- BUAT SPACE --}}
                </div>
                <div class="col-6 pt-2 ps-5">
                    <ul class="beacon-option">
                        <li class="beacon-option-item ">
                            <a href="/home"> Home </a>
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
    </nav>
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