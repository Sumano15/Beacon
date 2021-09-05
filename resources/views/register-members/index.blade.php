@extends('layouts.app')

@section('title')
    Home
@endsection

<style>
    .register-members-tim { 
        min-height: 300px;
        width:auto;
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
        color: white !important;
        background-color: #C36839 !important;
        justify-content: center;
        width: 100%;
        text-align: center;
        border: none;
        border-radius: 20px !important;
        cursor: pointer; 
       
    }

    .confirm-btn:hover {
        background-color: white !important;
        color: #C36839 !important;
    }

</style>

@section('content')

<div class="container-fluid register-members-content pt-5 pb-5">
    <form action="{{ url('peserta') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="nama_tim" value="{{ $model->nama_tim }}">
        <input type="hidden" name="asal_sekolah" value="{{ $model->asal_sekolah }}">
        <input type="hidden" name="asal_kota" value="{{ $model->asal_kota }}">
        <input type="hidden" name="password" value="{{ $model->password }}">
        <div class="row pb-4 justify-content-center">
            <div class="col-12 col-md-4 ps-md-0 pe-md-0">
                <div class="row register-members-form justify-content-center">
                    <div class="col-12">
                        <div class="register-members-tim pb-5">
                            <p class="member-text pt-3"> Member 1 </p>

                            <div class="row pt-3"> 
                                <div class="col-1"></div>
                                <div class="col-10">
                                    <label for="member_fullname[]" class="form-label"> Full Name </label>
                                    <input type="text" class="form-control" id="member_fullname[]" name="member_fullname[]" placeholder="Full Name">
                                </div>
                            </div>

                            <div class="row pt-3"> 
                                <div class="col-1"></div>
                                <div class="col-10">
                                    <label for="member_phone_number[]" class="form-label"> Phone Number </label>
                                    <input type="text" class="form-control" id="member_phone_number[]" name="member_phone_number[]" placeholder="Phone Number">
                                </div>
                            </div>

                            <div class="row pt-3"> 
                                <div class="col-1"></div>
                                <div class="col-10">
                                    <label for="member_id_line[]" class="form-label"> ID Line </label>
                                    <input type="text" class="form-control" id="member_id_line[]" name="member_id_line[]" placeholder="ID Line">
                                </div>
                            </div>

                            <div class="row pt-3"> 
                                <div class="col-1"> </div>
                                <div class="col-10">
                                    <label for="member_instagram[]" class="form-label"> Instagram </label>
                                    <input type="text" class="form-control" id="member_instagram[]" name="member_instagram[]" placeholder="Instagram">
                                </div>
                            </div>

                            <div class="row pt-3"> 
                                <div class="col-1"> </div>
                                <div class="col-10">
                                    <label for="member_email[]" class="form-label"> Email </label>
                                    <input type="email" class="form-control" id="member_email[]" name="member_email[]" placeholder="Email">
                                </div>
                            </div>

                            <div class="row pt-3"> 
                                <div class="col-1"> </div>
                                <div class="col-10">
                                    <label for="member_photo[0]" class="form-label"> Upload Photo 3x4 </label>
                                    <label for="member_photo[0]" class="upload-button text-center"> Upload Photo </label>
                                    <input type="file" class="form-control form-upload" id="member_photo[0]" name="member_photo[0]" accept="image/*">
                                </div>
                            </div>

                            <div class="row pt-3"> 
                                <div class="col-1"> </div>
                                <div class="col-10">
                                    <label for="member_student_card[0]" class="form-label"> Upload Student Card </label>
                                    <label for="member_student_card[0]" class="upload-button text-center"> Upload Student Card </label>
                                    <input type="file" class="form-control form-upload" id="member_student_card[0]" name="member_student_card[0]" accept="image/*">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Member 2-->
        <div class="row pb-4 justify-content-center">
            <div class="col-12 col-md-4 ps-md-0 pe-md-0">
                <div class="row register-members-form">
                    <div class="col-12">
                        <div class="register-members-tim pb-5">
                            <p class="member-text pt-3"> Member 2 </p>

                            <div class="row pt-3"> 
                                <div class="col-1"></div>
                                <div class="col-10">
                                    <label for="member_fullname[]" class="form-label"> Full Name </label>
                                    <input type="text" class="form-control" id="member_fullname[]" name="member_fullname[]" placeholder="Full Name">
                                </div>
                            </div>

                            <div class="row pt-3"> 
                                <div class="col-1"></div>
                                <div class="col-10">
                                    <label for="member_phone_number[]" class="form-label"> Phone Number </label>
                                    <input type="text" class="form-control" id="member_phone_number[]" name="member_phone_number[]" placeholder="Phone Number">
                                </div>
                            </div>

                            <div class="row pt-3"> 
                                <div class="col-1"></div>
                                <div class="col-10">
                                    <label for="member_id_line[]" class="form-label"> ID Line </label>
                                    <input type="text" class="form-control" id="member_id_line[]" name="member_id_line[]" placeholder="ID Line">
                                </div>
                            </div>

                            <div class="row pt-3"> 
                                <div class="col-1"> </div>
                                <div class="col-10">
                                    <label for="member_instagram[]" class="form-label"> Instagram </label>
                                    <input type="text" class="form-control" id="member_instagram[]" name="member_instagram[]" placeholder="Instagram">
                                </div>
                            </div>

                            <div class="row pt-3"> 
                                <div class="col-1"> </div>
                                <div class="col-10">
                                    <label for="member_email[]" class="form-label"> Email </label>
                                    <input type="email" class="form-control" id="member_email[]" name="member_email[]" placeholder="Email">
                                </div>
                            </div>

                            <div class="row pt-3"> 
                                <div class="col-1"> </div>
                                <div class="col-10">
                                    <label for="member_photo[1]" class="form-label"> Upload Photo 3x4 </label>
                                    <label for="member_photo[1]" class="upload-button text-center"> Upload Photo </label>
                                    <input type="file" class="form-control form-upload" id="member_photo[1]" name="member_photo[1]" accept="image/*">
                                </div>
                            </div>

                            <div class="row pt-3"> 
                                <div class="col-1"> </div>
                                <div class="col-10">
                                    <label for="member_student_card[1]" class="form-label"> Upload Student Card </label>
                                    <label for="member_student_card[1]" class="upload-button text-center"> Upload Student Card </label>
                                    <input type="file" class="form-control form-upload" id="member_student_card[1]" name="member_student_card[1]" accept="image/*">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Member3 -->
        <div class="row pb-4 justify-content-center">
            <div class="col-12 col-md-4 ps-md-0 pe-md-0">
                <div class="row resgister-members-form">
                    <div class="col-12">
                        <div class="register-members-tim pb-5">
                            <p class="member-text pt-3"> Member 3 </p>

                            <div class="row pt-3"> 
                                <div class="col-1"></div>
                                <div class="col-10">
                                    <label for="member_fullname[]" class="form-label"> Full Name </label>
                                    <input type="text" class="form-control" id="member_fullname[]" name="member_fullname[]" placeholder="Full Name">
                                </div>
                            </div>

                            <div class="row pt-3"> 
                                <div class="col-1"></div>
                                <div class="col-10">
                                    <label for="member_phone_number[]" class="form-label"> Phone Number </label>
                                    <input type="text" class="form-control" id="member_phone_number[]" name="member_phone_number[]" placeholder="Phone Number">
                                </div>
                            </div>

                            <div class="row pt-3"> 
                                <div class="col-1"></div>
                                <div class="col-10">
                                    <label for="member_id_line[]" class="form-label"> ID Line </label>
                                    <input type="text" class="form-control" id="member_id_line[]" name="member_id_line[]" placeholder="ID Line">
                                </div>
                            </div>

                            <div class="row pt-3"> 
                                <div class="col-1"> </div>
                                <div class="col-10">
                                    <label for="member_instagram[]" class="form-label"> Instagram </label>
                                    <input type="text" class="form-control" id="member_instagram[]" name="member_instagram[]" placeholder="Instagram">
                                </div>
                            </div>

                            <div class="row pt-3"> 
                                <div class="col-1"> </div>
                                <div class="col-10">
                                    <label for="member_email[]" class="form-label"> Email </label>
                                    <input type="email" class="form-control" id="member_email[]" name="member_email[]" placeholder="Email"> 
                                </div>
                            </div>

                            <div class="row pt-3"> 
                                <div class="col-1"> </div>
                                <div class="col-10">
                                    <label for="member_photo[2]" class="form-label"> Upload Photo 3x4 </label>
                                    <label for="member_photo[2]" class="upload-button text-center"> Upload Photo </label>
                                    <input type="file" class="form-control form-upload" id="member_photo[2]" name="member_photo[2]" accept="image/*">
                                </div>
                            </div>

                            <div class="row pt-3"> 
                                <div class="col-1"> </div>
                                <div class="col-10">
                                    <label for="member_student_card[2]" class="form-label"> Upload Student Card </label>
                                    <label for="member_student_card[2]" class="upload-button text-center"> Upload Student Card </label>
                                    <input type="file" class="form-control form-upload" id="member_student_card[2]" name="member_student_card[2]" accept="image/*">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Payment -->
        <div class="row pb-4 justify-content-center">
            <div class="col-12 col-md-4 ps-md-0 pe-md-0">
                <div class="row register-members-form">
                    <div class="col-12">
                        <div class="register-members-tim pb-5">
                            <p class="member-text pt-3"> Payment Information </p>

                            <div class="row pt-3"> 
                                <div class="col-1"></div>
                                <div class="col-10"> 
                                    <label for="bank_account" class="form-label"> Bank Account Number  </label>
                                    <input type="text" class="form-control" id="bank_account" name="bank_account" placeholder="Bank Account Number">
                                </div>
                            </div>

                            <div class="row pt-3"> 
                                <div class="col-1"></div>
                                <div class="col-10">
                                    <label for="bank_name" class="form-label"> Bank Name </label>
                                    <input type="text" class="form-control" id="bank_name" name="bank_name" placeholder="Bank Name">
                                </div>
                            </div>

                            <div class="row pt-3"> 
                                <div class="col-1"></div>
                                <div class="col-10">
                                    <label for="account_name" class="form_label"> Account Owner Name </label>
                                    <input type="text" class="form-control" id="account_name" name="account_name" placeholder="Account Owner Name">
                                </div>
                            </div>

                            <div class="row pt-3"> 
                                <div class="col-1"> </div>
                                <div class="col-10">
                                    <label for="payment_script" class="form-label"> Upload Payment Script </label>
                                    <label for="payment_script" class="upload-button text-center"> Upload Payment Script </label>
                                    <input type="file" class="form-control form-upload" id="payment_script" name="payment_script" accept="image/*">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pb-4 ">
            <center>
                <div class="col-3">   
                    <button class="btn confirm-btn" type="submit"> Confirm </button>
                </div>
            </center>
            
        </div>

        <!-- <div class="row pb-4 justify-content-center">
                <button class="btn confirm-btn" type="submit"> Confirm </button>
        </div> -->
    </form>
</div>

@endsection