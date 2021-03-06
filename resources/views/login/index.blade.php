@extends('layouts.app')

@section('title')
    Home
@endsection

<style>
    .login-content {
        padding-top: 80px;
    }

    .login-form {
        min-height: 340px;
        width: auto;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.25);
    }

    .login-text {
        color: #111;
        font-family: 'Hina Mincho', serif;
        font-size: 24px;
        font-weight: 600;
        text-align: center;
        margin-bottom: 20px;
    }

    .login-form .login-tim .btn{
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

    .login-form .login-tim .btn:hover {
        transform: translateY(-5px);
        background: #2F4858;
    }   

    .g-recaptcha{
        margin: 10px auto;
        width: 100%;
    } 

    .form-label {
        font-family: 'Hina Mincho', serif;
        font-size: 20px;
    }

    .form-control{
        font-family: 'Hina Mincho', serif;
    }

    .register-here-text {
        font-family: 'Hina Mincho', serif;
        font-size: 20px;
    }

    .register-here-text a {
        color: #C36839;
        text-decoration: none;
    }

    .register-here-text a:hover {
        color: #86340A;
    }

    .login-btn {
        font-family: 'Hina Mincho', serif;
        font-size: 30px;
        color: white;
        
    }

</style>

@section('content')
    <div class="container-fluid login-content pb-5">
        <div class="row justify-content-center" style="width:auto;">
            <div class="col-4 d-none d-md-block"></div>
            <div class="col-12 col-md-4  login-form px-4 py-4">
                <form class="login-tim" method="POST" action="{{ url('/login') }}" style="width:auto;" id="form-login">
                    @if (isset($errors) && count($errors))
                    
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }} </li>
                        @endforeach
                    </ul>
                    
                    @endif
                    @csrf
                    <p class="login-text pt-3"> Log In </p>
        
                    <div class="row pt-3">
                        <div class="col-12">
                            <label for="tn" class="form-label"> Team's Name </label>
                            <input type="text" class="form-control" id="tn" name="tn" placeholder="Team's Name">
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-12">
                            <label for="nama" class="form-label"> Password </label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-12 register-here-text text-center">
                            <p> Didn't have an account? </p>
                            <a href="{{ route('tim.create') }}"> Register here </a>
                        </div>
                    </div>
                    <!-- <div class="row pt-3">
                        <div class="col-1"> </div>
                            <div class="col-10 register-here-text text-center justify-content-center">
                                <div class="g-recaptcha justify-content-center" data-sitekey="6LeeM3UcAAAAAD6Nqj4-rN-Xk_jfwd3GxiyE9N1N"> </div>
                            </div>
                        <div class="col-1"> </div>
                    </div> -->
                    <div class="row justify-content-center mt-4 pb-4">
                        <!-- <button class="btn login-btn"> Log In </button> -->
                        <button class="g-recaptcha btn login-btn" 
                        data-sitekey="6LeeM3UcAAAAAD6Nqj4-rN-Xk_jfwd3GxiyE9N1N" 
                        data-callback='onSubmit' 
                        data-action='submit'> Log In </button>
                    </div>
                </form>
            </div>
            <div class="col-4 d-none d-md-block"></div>
        </div>
    </div>

    <script>
        function onSubmit(token) {
            document.getElementById("form-login").submit();
        }
    </script>
@endsection