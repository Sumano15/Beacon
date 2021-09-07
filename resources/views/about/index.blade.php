@extends('layouts.app')

@section('title')
    Home
@endsection

<style>
    .beacon-text-content {
        padding-top: 100px;
    }

</style>

@section('content')

<div class="container">
    <div class="row beacon-text-content pb-5">
        <div class="col-12 text-center align-middle">
            <h1 class="beacon-text"> Beacon </h1>
            <p class="beacon-full-text"> Business Engineering Annual Competition </p>
            <p class="beacon-theme-text"> Uniting Nusantara </p>
        </div>
    </div>

    <div class="about-beacon-text">
        <div class="col-12 text-center pb-4">
            <h3> What is Beacon? </h3>
            <p class="pt-3"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Sed vehicula quam at odio pellentesque, vel pulvinar quam tincidunt. Vestibulum sodales 
                malesuada metus, ac cursus sem aliquam eget. Phasellus rutrum lacus arcu, ut congue mauris 
                auctor id. Proin non est tincidunt, accumsan risus tincidunt, ultricies neque. Ut sit amet 
                cursus diam. Integer aliquet quam a nibh feugiat pulvinar. Mauris eget laoreet velit. Donec 
                feugiat volutpat orci. Duis id ligula mauris. Curabitur aliquet, neque et tristique vulputate, 
                nulla ipsum ullamcorper purus, id tempus nibh risus quis elit. Ut tincidunt nisl eu velit 
                facilisis, nec gravida augue imperdiet. Integer posuere, tellus eget fermentum convallis, 
                tortor eros maximus lectus, eget cursus mi velit eget nisi. </p>
        </div>
    </div>

    <div class="activity-beacon-text">
        <div class="col-12 text-center pb-5">
            <h3> Our Activity </h3>
            <p class="pt-3"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Sed vehicula quam at odio pellentesque, vel pulvinar quam tincidunt. Vestibulum sodales 
                malesuada metus, ac cursus sem aliquam eget. Phasellus rutrum lacus arcu, ut congue mauris 
                auctor id. Proin non est tincidunt, accumsan risus tincidunt, ultricies neque. Ut sit amet 
                cursus diam. Integer aliquet quam a nibh feugiat pulvinar. Mauris eget laoreet velit. Donec 
                feugiat volutpat orci. Duis id ligula mauris. Curabitur aliquet, neque et tristique vulputate, 
                nulla ipsum ullamcorper purus, id tempus nibh risus quis elit. Ut tincidunt nisl eu velit 
                facilisis, nec gravida augue imperdiet. Integer posuere, tellus eget fermentum convallis, 
                tortor eros maximus lectus, eget cursus mi velit eget nisi. </p>
        </div>
    </div>
</div>

@endsection