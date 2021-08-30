@extends('layouts.app')

@section('title')
    Register
@endsection

<style>
    .register-form {
        min-height: 700px;
        width: 400px;
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
        background: #C36839;
        outline: none; 
        border-radius: 20px;
        font-size: 1.2rem;
        color: #fff;
        cursor: pointer; 
        transition: .3s;
    }

    .register-form .register-tim .btn:hover {
        transform: translateY(-5px);
        background: #86340A;
    }   

    .g-recaptcha{
        margin: 10px auto;
    } 

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
        font-family: 'Hina Mincho', serif;
        font-size: 20px;
    }

</style>

@section('content')
    <div class="container-fluid register-content pt-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-5 register-form">
                <form class="register-tim">
                    <p class="register-text pt-4"> Registagion Page </p>
                    
                    <div class="row pt-3">
                        <div class="col-1"></div>
                        <div class="col-10">
                            <label for="nama" class="form-label"> Email </label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="col-1"> </div>
                    </div>

                    <div class="row pt-3">
                        <div class="col-1"></div>
                        <div class="col-10">
                            <label for="province" class="form-label"> Province </label>
                            <input type="text" class="form-control" id="province" name="province" placeholder="Province">
                        </div>
                        <div class="col-1"> </div>
                    </div>

                    <div class="row pt-3">
                        <div class="col-1"></div>
                        <div class="col-10">
                            <label for="city" class="form-label"> City </label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="City">
                        </div>
                        <div class="col-1"> </div>
                    </div>

                    <div class="row pt-3">
                        <div class="col-1"></div>
                        <div class="col-10">
                            <label for="school" class="form-label"> School Origin </label>
                            <input type="text" class="form-control" id="school" name="school" placeholder="School Origin">
                        </div>
                        <div class="col-1"> </div>
                    </div>

                    <div class="row pt-3">
                        <div class="col-1"></div>
                        <div class="col-10">
                            <label for="password" class="form-label"> Team's Password </label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Team's Password">
                        </div>
                        <div class="col-1"> </div>
                    </div>
                    
                    <div class="row pt-3">
                        <div class="col-1"> </div>
                            <div class="col-10 login-here-text text-center">
                                <p> Already have an account?</p>
                                <a href="login"> Login here </a>
                            </div>
                        <div class="col-1"> </div>
                    </div>

                    <div class="row pt-3 justify-content-center">
                        <div class="col-1"> </div>
                            <div class="col-10 text-center justify-content-center">
                            <div class="g-recaptcha justify-content-center" data-sitekey="6LdUZCgcAAAAAAWi5MPg6tkwkYYlo01i5OldbALN"> </div>
                            </div>
                        <div class="col-1"> </div>
                    </div>

                    <div class="input-group justify-content-center pt-4 pb-5">
                        <button class="btn register-btn" type="submit"> Register </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection