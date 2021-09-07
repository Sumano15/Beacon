@extends('layouts.app')

@section('title')
    Home
@endsection

<style>
    .beacon-text-content {
        /* padding-top: 100px; */
        height: 400px;
        background: #D0B781;
    }

    .sponsor-content {
        min-height: 400px;
        
    }

    .sponsor1 {
        width: 120px;
        height: 120px;
        border-radius: 360px;
        background: #5E0000;
    }

    .medpar1 {
        width: 120px;
        height: 120px;
        border-radius: 360px;
        background: #5E0000;
    }
    
    .media-partner-content {
        height: 400px;
    }

    .medpar-card {
        min-width: 120px !important;
        min-height: 120px !important;
        background: #5E0000 !important;
        border-radius: 100px !important;
    }
</style>
@section('content')

<div class="container-fluid pt-5">
    <div class="row beacon-text-content px-0 pt-5">
        <div class="col-12 text-center align-middle">
            <h1 class="beacon-text"> Beacon </h1>
            <p class="beacon-full-text"> Business Engineering Annual Competition </p>
            <p class="beacon-theme-text"> Uniting Nusantara </p>
        </div>
    </div>

    <div class="row pt-5 pb-5">
        <div class="col">
            <div class="row text-center">
                <div class="col">
                    <h3> Sponsored By </h3>
                </div>
            </div>
        </div>

        <div class="row pt-5 d-md-flex d-none">
            <div class="col-2"> </div>
            <center>
                <div class="col-8"> 
                    <div class="row">
                        <div class="col"> <div class="sponsor1"> </div> </div>
                        <div class="col"> <div class="sponsor1"> </div> </div>
                        <div class="col"> <div class="sponsor1"> </div> </div>
                        <div class="col"> <div class="sponsor1"> </div> </div>
                    </div>
                </div>
            </center>
            <div class="col-2"> </div>
        </div>

        <div class="row pt-5 d-none d-md-flex">
            <div class="col-3"> </div>
            <center>
                <div class="col-6">
                    <div class="row">
                        <div class="col"> <div class="sponsor1"> </div> </div>
                        <div class="col"> <div class="sponsor1"> </div> </div>
                        <div class="col"> <div class="sponsor1"> </div> </div>
                    </div>
                </div>
            </center>
            <div class="col-3"> </div>
        </div>

        <div class="container pt-2 d-block d-md-none">
            <div class="pb-2 d-flex flex-row flex-nowrap overflow-auto ">
                <div class="card card-block mx-2 medpar-card">
                    <!-- <div class="medpar1"> </div> -->
                </div>
                <div class="card card-block mx-2 medpar-card">
                    <!-- <div class="medpar1"> </div> -->
                </div>
                <div class="card card-block mx-2 medpar-card">
                    <!-- <div class="medpar1"> </div> -->
                </div>
                <div class="card card-block mx-2 medpar-card">
                    <!-- <div class="medpar1"> </div> -->
                </div>
                <div class="card card-block mx-2 medpar-card">
                    <!-- <div class="medpar1"> </div> -->
                </div>
                <div class="card card-block mx-2 medpar-card">
                    <!-- <div class="medpar1"> </div> -->
                </div>
                <div class="card card-block mx-2 medpar-card">
                    <!-- <div class="medpar1"> </div> -->
                </div>
                <div class="card card-block mx-2 medpar-card">
                    <!-- <div class="medpar1"> </div> -->
                </div>
                <div class="card card-block mx-2 medpar-card">
                    <!-- <div class="medpar1"> </div> -->
                </div>
                <div class="card card-block mx-2 medpar-card">
                    <!-- <div class="medpar1"> </div> -->
                </div>
                <div class="card card-block mx-2 medpar-card">
                    <!-- <div class="medpar1"> </div> -->
                </div>
                <div class="card card-block mx-2 medpar-card">
                    <!-- <div class="medpar1"> </div> -->
                </div>
                <div class="card card-block mx-2 medpar-card">
                    <!-- <div class="medpar1"> </div> -->
                </div>
            </div>
        </div>
    </div>

    <div class="row media-partner-content">
        <div class="col">
            <div class="row media-partner-text text-center">
                <div class="col">
                    <h3> Media Partners </h3>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="pb-2 d-flex flex-row flex-nowrap overflow-auto ">
                <div class="card card-block mx-2 medpar-card">
                    <!-- <div class="medpar1"> </div> -->
                </div>
                <div class="card card-block mx-2 medpar-card">
                    <!-- <div class="medpar1"> </div> -->
                </div>
                <div class="card card-block mx-2 medpar-card">
                    <!-- <div class="medpar1"> </div> -->
                </div>
                <div class="card card-block mx-2 medpar-card">
                    <!-- <div class="medpar1"> </div> -->
                </div>
                <div class="card card-block mx-2 medpar-card">
                    <!-- <div class="medpar1"> </div> -->
                </div>
                <div class="card card-block mx-2 medpar-card">
                    <!-- <div class="medpar1"> </div> -->
                </div>
                <div class="card card-block mx-2 medpar-card">
                    <!-- <div class="medpar1"> </div> -->
                </div>
                <div class="card card-block mx-2 medpar-card">
                    <!-- <div class="medpar1"> </div> -->
                </div>
                <div class="card card-block mx-2 medpar-card">
                    <!-- <div class="medpar1"> </div> -->
                </div>
                <div class="card card-block mx-2 medpar-card">
                    <!-- <div class="medpar1"> </div> -->
                </div>
                <div class="card card-block mx-2 medpar-card">
                    <!-- <div class="medpar1"> </div> -->
                </div>
                <div class="card card-block mx-2 medpar-card">
                    <!-- <div class="medpar1"> </div> -->
                </div>
                <div class="card card-block mx-2 medpar-card">
                    <!-- <div class="medpar1"> </div> -->
                </div>
            </div>
        </div>
    </div>


</div>

@endsection 