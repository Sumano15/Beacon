@extends('layouts.app')

@section('title')
    Home
@endsection

<style>
    .register-members-tim { 
        min-height: 300px;
        width:500px;
        background: #fff;
        border-radius: 20px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.25);
        padding-bottom: 15px;
    }

    .member-text {
        color: #111;
        font-family: 'Hina Mincho', serif;
        font-size: 24px;
        font-weight: 800;
        font-size:1.4rem;
        text-align: center;
        margin-bottom: 20px;
    }

    .form-label {
        font-family: 'Hina Mincho', serif;
        font-size: 18px;
    }

    .form-control {
        font-family: 'Hina Mincho', serif;
        font-size: 18px;
    }

    .register-members-tim input { 
        background: transparent;
        border-radius: 10px;
    }

    .register-members-tim input[type="file"] {
        display: none;
    }

    .upload-button {
        width: 100%;
        height: 40px;
        color: white;
        font-family: 'Hina Mincho', serif;
        text-align: center;
        font-size: 18px;
        background-color: #86340A;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.25);
    }

    .confirm-btn {
        font-family: 'Hina Mincho', serif;
        font-size: 30px;
        color: white;
        justify-content: center;
        width: 100%;
        padding: 15px 20px;
        text-align: center;
        border: none;
        background: #C36839;
        outline: none; 
        border-radius: 20px;
        cursor: pointer; 
        transition: .3s;
    }

    .confirm-btn:hover {
        transform: translateY(-5px);
        background: #86340A;
    }

</style>

@section('content')

<div class="container-fluid register-members-content pt-5 pb-5">
    <div class="row pb-4 justify-content-center">
        <div class="col-6">
            <div class="row register-members-form justify-content-center">
                <div class="col-12">
                    <form class="register-members-tim pb-5">
                        <p class="member-text pt-3"> Member 1 </p>

                        <div class="row pt-3"> 
                            <div class="col-1"></div>
                            <div class="col-10">
                                <label for="member1-fullname" class="form-label"> Full Name </label>
                                <input type="text" class="form-control" id="member1-fullname" name="member1-fullname" placeholder="Full Name">
                            </div>
                        </div>

                        <div class="row pt-3"> 
                            <div class="col-1"></div>
                            <div class="col-10">
                                <label for="member1-phone-number" class="form-label"> Phone Number </label>
                                <input type="text" class="form-control" id="member1-phone-number" name="member1-phone-number" placeholder="Phone Number">
                            </div>
                        </div>

                        <div class="row pt-3"> 
                            <div class="col-1"></div>
                            <div class="col-10">
                                <label for="member1-id-line" class="form-label"> ID Line </label>
                                <input type="text" class="form-control" id="member1-id-line" name="member1-id-line" placeholder="ID Line">
                            </div>
                        </div>

                        <div class="row pt-3"> 
                            <div class="col-1"> </div>
                            <div class="col-10">
                                <label for="member1-instagram" class="form-label"> Instagram </label>
                                <input type="text" class="form-control" id="member1-instagram" name="member1-instagram" placeholder="Instagram">
                            </div>
                        </div>

                        <div class="row pt-3"> 
                            <div class="col-1"> </div>
                            <div class="col-10">
                                <label for="member1-email" class="form-label"> Email </label>
                                <input type="email" class="form-control" id="member1-email" name="member1-email" placeholder="Email">
                            </div>
                        </div>

                        <div class="row pt-3"> 
                            <div class="col-1"> </div>
                            <div class="col-10">
                                <label for="member1-photo" class="form-label"> Upload Photo 3x4 </label>
                                <label for="member1-photo" class="upload-button text-center"> Upload Photo </label>
                                <input type="file" class="form-control form-upload" id="member1-photo" name="member1-photo" accept="image/*">
                            </div>
                        </div>

                        <div class="row pt-3"> 
                            <div class="col-1"> </div>
                            <div class="col-10">
                                <label for="member1-student-card" class="form-label"> Upload Student Card </label>
                                <label for="member1-student-card" class="upload-button text-center"> Upload Student Card </label>
                                <input type="file" class="form-control form-upload" id="member1-student-card" name="member1-student-card" accept="image/*">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
     <!--Member 2-->
    <div class="row pb-4">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="row register-members-form">
                <div class="col-12">
                    <form class="register-members-tim pb-5">
                        <p class="member-text pt-3"> Member 2 </p>

                        <div class="row pt-3"> 
                            <div class="col-1"></div>
                            <div class="col-10">
                                <label for="member2-fullname" class="form-label"> Full Name </label>
                                <input type="text" class="form-control" id="member2-fullname" name="member2-fullname" placeholder="Full Name">
                            </div>
                        </div>

                        <div class="row pt-3"> 
                            <div class="col-1"></div>
                            <div class="col-10">
                                <label for="member2-phone-number" class="form-label"> Phone Number </label>
                                <input type="text" class="form-control" id="member2-phone-number" name="member2-phone-number" placeholder="Phone Number">
                            </div>
                        </div>

                        <div class="row pt-3"> 
                            <div class="col-1"></div>
                            <div class="col-10">
                                <label for="member2-id-line" class="form-label"> ID Line </label>
                                <input type="text" class="form-control" id="member2-id-line" name="member2-id-line" placeholder="ID Line">
                            </div>
                        </div>

                        <div class="row pt-3"> 
                            <div class="col-1"> </div>
                            <div class="col-10">
                                <label for="member2-instagram" class="form-label"> Instagram </label>
                                <input type="text" class="form-control" id="member2-instagram" name="member2-instagram" placeholder="Instagram">
                            </div>
                        </div>

                        <div class="row pt-3"> 
                            <div class="col-1"> </div>
                            <div class="col-10">
                                <label for="member2-email" class="form-label"> Email </label>
                                <input type="email" class="form-control" id="member2-email" name="member2-email" placeholder="Email">
                            </div>
                        </div>

                        <div class="row pt-3"> 
                            <div class="col-1"> </div>
                            <div class="col-10">
                                <label for="member2-photo" class="form-label"> Upload Photo 3x4 </label>
                                <label for="member2-photo" class="upload-button text-center"> Upload Photo </label>
                                <input type="file" class="form-control form-upload" id="member2-photo" name="member2-photo" accept="image/*">
                            </div>
                        </div>

                        <div class="row pt-3"> 
                            <div class="col-1"> </div>
                            <div class="col-10">
                                <label for="member2-student-card" class="form-label"> Upload Student Card </label>
                                <label for="member2-student-card" class="upload-button text-center"> Upload Student Card </label>
                                <input type="file" class="form-control form-upload" id="member2-student-card" name="member2-student-card" accept="image/*">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Member3 -->
    <div class="row pb-4">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="row resgister-members-form">
                <div class="col-12">
                    <form class="register-members-tim pb-5">
                        <p class="member-text pt-3"> Member 3 </p>

                        <div class="row pt-3"> 
                            <div class="col-1"></div>
                            <div class="col-10">
                                <label for="member3-fullname" class="form-label"> Full Name </label>
                                <input type="text" class="form-control" id="member3-fullname" name="member3-fullname" placeholder="Full Name">
                            </div>
                        </div>

                        <div class="row pt-3"> 
                            <div class="col-1"></div>
                            <div class="col-10">
                                <label for="member3-phone-number" class="form-label"> Phone Number </label>
                                <input type="text" class="form-control" id="member3-phone-number" name="member3-phone-number" placeholder="Phone Number">
                            </div>
                        </div>

                        <div class="row pt-3"> 
                            <div class="col-1"></div>
                            <div class="col-10">
                                <label for="member3-id-line" class="form-label"> ID Line </label>
                                <input type="text" class="form-control" id="member3-id-line" name="member3-id-line" placeholder="ID Line">
                            </div>
                        </div>

                        <div class="row pt-3"> 
                            <div class="col-1"> </div>
                            <div class="col-10">
                                <label for="member3-instagram" class="form-label"> Instagram </label>
                                <input type="text" class="form-control" id="member3-instagram" name="member3-instagram" placeholder="Instagram">
                            </div>
                        </div>

                        <div class="row pt-3"> 
                            <div class="col-1"> </div>
                            <div class="col-10">
                                <label for="member3-email" class="form-label"> Email </label>
                                <input type="email" class="form-control" id="member3-email" name="member3-email" placeholder="Email"> 
                            </div>
                        </div>

                        <div class="row pt-3"> 
                            <div class="col-1"> </div>
                            <div class="col-10">
                                <label for="member3-photo" class="form-label"> Upload Photo 3x4 </label>
                                <label for="member3-photo" class="upload-button text-center"> Upload Photo </label>
                                <input type="file" class="form-control form-upload" id="member3-photo" name="member3-photo" accept="image/*">
                            </div>
                        </div>

                        <div class="row pt-3"> 
                            <div class="col-1"> </div>
                            <div class="col-10">
                                <label for="member3-student-card" class="form-label"> Upload Student Card </label>
                                <label for="member3-student-card" class="upload-button text-center"> Upload Student Card </label>
                                <input type="file" class="form-control form-upload" id="member3-student-card" name="member3-student-card" accept="image/*">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Payment -->
    <div class="row pb-4">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="row register-members-form">
                <div class="col-12">
                    <form class="register-members-tim pb-5">
                        <p class="member-text pt-3"> Payment Information </p>

                        <div class="row pt-3"> 
                            <div class="col-1"></div>
                            <div class="col-10"> 
                                <label for="bank-account" class="form-label"> Bank Account Number  </label>
                                <input type="text" class="form-control" id="bank-account" name="bank-account" placeholder="Bank Account Number">
                            </div>
                        </div>

                        <div class="row pt-3"> 
                            <div class="col-1"></div>
                            <div class="col-10">
                                <label for="bank-name" class="form-label"> Bank Name </label>
                                <input type="text" class="form-control" id="bank-name" name="bank-name" placeholder="Bank Name">
                            </div>
                        </div>

                        <div class="row pt-3"> 
                            <div class="col-1"></div>
                            <div class="col-10">
                                <label for="account-name" class="form-label"> Account Owner Name </label>
                                <input type="text" class="form-control" id="account-name" name="account-name" placeholder="Account Owner Name">
                            </div>
                        </div>

                        <div class="row pt-3"> 
                            <div class="col-1"> </div>
                            <div class="col-10">
                                <label for="payment-script" class="form-label"> Upload Payment Script </label>
                                <label for="payment-script" class="upload-button text-center"> Upload Payment Script </label>
                                <input type="file" class="form-control form-upload" id="payment-script" name="payment-script" accept="image/*">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row pb-4">
        <div class="col-3"> </div>
        <div class="col-6 justify-content-center">
            <button class="btn confirm-btn" type="submit"> Confirm </button>
        </div>
        <div class="col-3"></div>
    </div>

    <!-- <div class="row pb-4 justify-content-center">
            <button class="btn confirm-btn" type="submit"> Confirm </button>
    </div> -->
</div>

@endsection