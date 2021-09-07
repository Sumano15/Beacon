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
    }

    .navbar {
        padding-right: 0 !important;
        padding-left: 0 !important;
        background: #3F2418;
        height: 70px;
        width: 100%;
    }

    #navbarNav ul li a {
        color: white;
        font-family: 'Hina Mincho', serif;
        font-size: 18px;
    }

    #navbarNav ul li a:hover {
        color: #ffe5d8;
        /* transform: translateY(-3px); */
    }

    #navbarNav ul {
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
</style>

<body>
    <!-- Navbar -->
    <div class="container-fluid">
        <!-- <div class="btn menu-button">
            <span class="fas fa-bars"> </span>
        </div>
        <div class="sidebar">
            <div class="btn exit-button">
                <span class="fa-solid fa-xmark"> </span>
            </div>
            <ul>
                <li> <a href="#"> Home </a> </li>
                <li> <a href="#"> About Us </a> </li>
                <li> <a href="#"> Status </a> </li>
                <li> <a href="#"> Log Out </a> </li>
            </ul>
        </div> -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <div class="user-profile">  </div>
                <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"> Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> About Us </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Guidebook </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Login </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container-fluid pt-5">
        @yield('content')
    </div>
    
    <!-- Footer  -->
    <footer class="pt-5 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-6 mt-3">
                    <div class="row">
                        <div class="col">
                            <h5> Beacon </h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <ul>
                                <li> 
                                    <i class="fab fa-line"> </i>
                                    <a href="#"> Line </a>
                                </li>
                                <li> 
                                    <i class="fab fa-instagram"> </i>
                                    <a href="#"> Instagram </a>
                                </li>
                                <li> 
                                    <i class="fab fa-whatsapp"> </i>
                                    <a href="#"> WhatsApp </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-6"> </div>
            </div>
        </div>
    </footer>
    

</body>
</html>