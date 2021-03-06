@extends('layouts.app')

@section('title')
    Register
@endsection

<style>
    .register-form {
        min-height: 700px;
        max-width: 400px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.25);
    }

    .register-text {
        color: #111;
        font-family: 'Hina Mincho', serif;
        font-size: 24px;
        font-weight: 600;
        text-align: center;
        margin-bottom: 20px;
    }

    .form-label  {
        font-family: 'Hina Mincho', serif;
        font-size: 20px;
    }

    .form-control { 
        font-family: 'Hina Mincho', serif;
        font-size: 20px;
    }

    .register-form .register-tim .btn{
        display: block;
        width: 50%;
        padding: 15px 20px;
        text-align: center;
        border: none;
        background: #3E5952;
        outline: none; 
        border-radius: 20px;
        font-size: 1.2rem;
        color: #fff;
        cursor: pointer; 
        transition: .3s;
    }

    .register-form .register-tim .btn:hover {
        transform: translateY(-5px);
        background: #2F4858;
    }   

    /* .g-recaptcha{
        margin: 10px auto;
    }  */

    .login-here-text {
        font-family: 'Hina Mincho', serif;
        font-size: 20px;
    }

    .login-here-text p {
        line-height: 18px;
        margin-top: 15px;
    }

    .login-here-text a {
        color: #C36839;
        line-height: 15px;
        text-decoration: none;
    }

    .login-here-text a:hover {
        color: #86340A;
    }

    .register-btn {
        background: ##3E5952;
        font-family: 'Hina Mincho', serif;
        font-size: 20px;
    }
    
    .register-btn btn:hover {
        background: #2F4858;
    }
</style>

@section('content')
    <div class="container-fluid register-content pt-5 pb-5">
        <div class="row">
            <div class="col-4 d-none d-md-block"></div>
            <div class="col-12 col-md-4 ps-md-0 pe-md-0">
                <div class="row justify-content-center">
                    <div class="col-10 register-form">
                        <form action="{{ route('tim.store') }}" method="POST"  enctype="multipart/form-data" class="register-tim" id="form-register">
                            @csrf
                            <p class="register-text pt-4"> Registration Page </p>
                            
                            <!-- <div class="row pt-3">
                                <div class="col-1"></div>
                                <div class="col-10">
                                    <label for="nama" class="form-label"> Email </label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" require>
                                </div>
                                <div class="col-1"> </div>
                            </div> -->
        
                            <div class="row pt-3">
                                <div class="col-1"></div>
                                <div class="col-10">
                                    <label for="nama_tim" class="form-label"> Team's Name </label>
                                    <input type="text" class="form-control" id="nama_tim" name="nama_tim" placeholder="Team's Name" require>
                                </div>
                                <div class="col-1"> </div>
                            </div>
        
                            <div class="row pt-3">
                                <div class="col-1"></div>
                                <div class="col-10">
                                    <label for="asal_kota" class="form-label"> City </label>
                                    <input type="text" class="form-control" id="asal_kota" name="asal_kota" placeholder="City" require> 
                                </div>
                                <div class="col-1"> </div>
                            </div>
        
                            <div class="row pt-3">
                                <div class="col-1"></div>
                                <div class="col-10">
                                    <label for="asal_sekolah" class="form-label"> School Origin </label>
                                    <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder="School Origin" require>
                                </div>
                                <div class="col-1"> </div>
                            </div>
        
                            <div class="row pt-3">
                                <div class="col-1"></div>
                                <div class="col-10">
                                    <label for="password" class="form-label"> Team's Password </label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Team's Password" require>
                                </div>
                                <div class="col-1"> </div>
                            </div>
                            
                            <div class="row pt-3">
                                <div class="col-1"> </div>
                                <div class="col-10 login-here-text text-center">
                                    <p> Already have an account?</p>
                                    <a href="{{ url('/login_tim') }}"> Login here </a>
                                </div>
                                <div class="col-1"> </div>
                            </div>
        
                            <!-- <div class="row pt-3">
                                <div class="col-1"> </div>
                                <center>
                                    <div class="col-10 ">
                                        <div class="g-recaptcha" data-sitekey="6Le1GnUcAAAAAGh6GqtthTpGl2AXX7Cb91cobf5i"> </div>
                                    </div>
                                </center>
                                <div class="col-1"> </div>
                            </div> -->
        
                            <div class="input-group justify-content-center pt-4 pb-5">
                                <button class="g-recaptcha btn register-btn" style="border-radius: 20px"
                                data-sitekey="6LeeM3UcAAAAAD6Nqj4-rN-Xk_jfwd3GxiyE9N1N" 
                                data-callback='onSubmit' 
                                data-action='submit'> Register </button>
                                <!-- <button class="btn register-btn" type="submit"> Register </button> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4 d-none d-md-block"></div>
        </div>
        
    </div>
    <script>
        function onSubmit(token) {
            document.getElementById("form-register").submit();
        }
    </script>
@endsection