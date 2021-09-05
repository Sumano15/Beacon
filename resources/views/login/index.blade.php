@extends('layouts.app')

@section('title')
    Home
@endsection

<style>
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
        background: #C36839;
        outline: none; 
        border-radius: 20px;
        font-size: 1.2rem;
        color: #fff;
        cursor: pointer; 
        transition: .3s;
    }

    .login-form .login-tim .btn:hover {
        transform: translateY(-5px);
        background: #86340A;
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
    <div class="container-fluid login-content pt-5 pb-5">
        <div class="row justify-content-center" style="width:auto;">
            <div class="col-4 login-form px-4 py-4">
                <form class="login-tim" method="POST" action="{{ url('/login') }}" style="width:auto;">
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
                            <label for="nama_tim" class="form-label"> Team's Name </label>
                            <input type="text" class="form-control" id="nama_tim" name="nama_tim" placeholder="Team's Name">
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
                    <div class="row pt-3">
                        <div class="col-1"> </div>
                            <div class="col-10 register-here-text text-center justify-content-center">
                                <div class="g-recaptcha justify-content-center" data-sitekey="6LdUZCgcAAAAAAWi5MPg6tkwkYYlo01i5OldbALN"> </div>
                            </div>
                        <div class="col-1"> </div>
                    </div>
                    <div class="row justify-content-center mt-4 pb-4">
                        <button class="btn login-btn"> Log In </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection