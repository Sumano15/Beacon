@extends('layouts.app')

@section('title')
    Home
@endsection

<style>
    .book {
        margin: auto;
        max-width: 800px;
        /* background-color: #eee; */
        padding-top: 1rem;
        padding-bottom: 1rem;
        display: flex;
        justify-content: center;
    }

    .beacon-text-content {
        /* padding-top: 100px; */
        height: 400px;
        background: #D0B781;
        /* background-size: cover;
        background-repeat: repeat;
        background-image: url({{asset('asset-pdd/main-bg-2.PNG')}}); */
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
    .landing-page{
        min-height:80vh;
    }
    .counter-txt {
        text-align: center;
        font-weight: bold;
        text-transform: uppercase;
        
        
    }
    .counter-Txt span {
        display: block;
    }
    .prize-pool{
        font-family:Requiem; 
        color:#470806 !important;
        font-size:25pt;
    }
    @media screen and (max-width: 578px) {
        .landing-page{
            min-height:50vh;
        }
        .about-title{
            font-size:2.0rem;
        }
        .about-isi{
            font-size:1.0rem !important;
        }
        .prize-pool{
            font-size:1.0rem !important;
        }
    }
}

/* .slider {
  max-height: 80vh;
}

section {
  height: 80vh;
} */
</style>
@section('content')

<div class="container-fluid pt-5 slider">
    <section id="home">
        <div class="container-fluid landing-page">
            <div class="row px-0 d-none d-md-flex" style="margin-top:22vh;" >
                <div class="col-12 text-center align-middle">
                    <a href="#" data-aos="zoom-in" data-aos-duration="3000"><img class="pb-2" src="{{asset('asset-pdd/updated_i.PNG')}}" alt="" width="40%"></a>
                    <a href="#" data-aos="zoom-in" data-aos-duration="3000"><img src="{{asset('asset-pdd/theme_and_date1.PNG')}}" alt="" width="60%"></a>
                </div> 
            </div>
            <!-- BUAT HP -->
            <div class="row px-0 d-flex d-md-none" style="margin-top:22vh;" data-aos="zoom-in" data-aos-duration="3000">
                <div class="col-12 text-center align-middle">
                    <a href="#"><img class="pb-2" src="{{asset('asset-pdd/updated_i.PNG')}}" alt="" width="100%"></a>
                    <a href="#"><img src="{{asset('asset-pdd/theme_and_date1.PNG')}}" alt="" width="100%"></a>
                </div> 
            </div>
        </div>
    </section>

    <section id="aboutUs" style="min-height:70vh;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="row" data-aos="fade-right" data-aos-duration="3000">
                        <div class="col-12 text-center align-middle">
                            <h1 class="beacon-text mx-auto about-title" style="font-family:Requiem; color:#470806; font-size: 2.6em; font-weight: 700; line-height: 1.2;"> About Beacon</h1>
                        </div>
                        <p class="about-isi mb-5" style="font-family:TimesNewRoman; font-size:25px; text-align:justify;">
                        BEACON 2021 (Business Engineering Annual 
                        Competition) is an annual competition held by Petra 
                        Christian University’s International Business Engineering 
                        Program. This competition is a series of online based 
                        activities in the study of International Business 
                        Engineering. BEACON 2021 is specifically held for 
                        highschool students. 
                        Business engineering is a discipline in between business 
                        management, engineering and technology. As more and 
                        more organizations are innovated by combining 
                        technological products and processes with remixing old 
                        and new business model patterns, it becomes critical to 
                        understand, drive, and optimize those processes.
                        <a href="">Read More...</a>
                        </p>
                    </div>
                    <div class="row" data-aos="fade-left" data-aos-duration="3000">
                        <div class="col-12 text-center align-middle mt-5">
                        <h1 class="beacon-text about-title" style="font-family:Requiem; color:#470806; font-size: 2.6em; font-weight: 700; line-height: 1.2;"> About IBE</h1>
                        </div>
                        <div class="row"> 
                            <p class="about-isi" style="font-family:TimesNewRoman; font-size:25px;text-align:justify;">
                            At the beginning of 2015, Dr. Indriati Bisono had a dream. She envisioned a new world where Indonesian graduates (in particular from Industrial Engineering at Petra Christian University) could work in an International setting. She believed with a right education, those dream can be achieved. She pitched the idea to Prof. Dr. Rolly Intan, then the Rector of Petra Christian University, and other Faculties of Industrial Engineering Department to create a program that produced T-shaped engineer. <a href="https://ibe.petra.ac.id/history">Read More...</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="cd-horizontal-timeline" id="timeline">
        <center><h1 style="font-family:Requiem; color:#470806; font-size: 2.6em; font-weight: 700; line-height: 1.2;" data-aos="fade-up" data-aos-duration="3000">TimeLine</h1></center>
        <div class="timeline" data-aos="fade-up" data-aos-duration="3000">
            <div class="events-wrapper">
                <div class="events">
                    <ol style="list-style-type:none; font-family:Chenier-Regular;">
                        <li><a href="#0" data-date="01/09/2021" class="selected">24 Sep</a></li>
                        <li><a href="#0" data-date="08/09/2021">18 Oct</a></li>
                        <li><a href="#0" data-date="13/09/2021">30 Oct</a></li>
                        <li><a href="#0" data-date="15/09/2021">31 Oct</a></li>
                        <li><a href="#0" data-date="18/09/2021">3 Nov</a></li>
                        <li><a href="#0" data-date="20/09/2021">6 Nov</a></li>
                    </ol>

                    <span class="filling-line" aria-hidden="true"></span>
                </div> <!-- .events -->
            </div> <!-- .events-wrapper -->
                
            <ul class="cd-timeline-navigation" style="list-style-type:none;">
                <li><a href="#0" class="prev inactive"></a></li>
                <li><a href="#0" class="next"></a></li>
            </ul> <!-- .cd-timeline-navigation -->
        </div> <!-- .timeline -->

        <div class="events-content" >
            <ol style="list-style-type:none;" data-aos="fade-up" data-aos-duration="3000">
                <li class="selected" data-date="01/09/2021">
                    <h2 style="font-family:Requiem; color:#470806;">Open Registration</h2>
                    <em style="font-family:Chenier-Regular; color:#470806;">September 24, 2021</em>
                    <!-- <p>	
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                    </p> -->
                </li>

                <li data-date="08/09/2021">
                    <h2 style="font-family:Requiem; color:#470806;">Roadshow</h2>
                    <em style="font-family:Chenier-Regular; color:#470806;">October 18, 2021</em>
                    <!-- <p>	
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                    </p> -->
                </li>

                <li data-date="13/09/2021">
                    <h2 style="font-family:Requiem; color:#470806;">Technical Meeting </h2>
                    <em style="font-family:Chenier-Regular; color:#470806;">October 30, 2021</em>
                    <!-- <p>	
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                    </p> -->
                </li>

                <li data-date="15/09/2021">
                    <h2 style="font-family:Requiem; color:#470806;">End Of Roadshow </h2>
                    <em style="font-family:Chenier-Regular; color:#470806;">October 31, 2021</em>
                    <!-- <p>	
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                    </p> -->
                </li>

                <li data-date="18/09/2021">
                    <h2 style="font-family:Requiem; color:#470806;">Registration Closed</h2>
                    <em style="font-family:Chenier-Regular; color:#470806;">November 3, 2021</em>
                    <!-- <p>	
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                    </p> -->
                </li>

                <li data-date="20/09/2021">
                    <h2 style="font-family:Requiem; color:#470806;">Main Event</h2>
                    <em style="font-family:Chenier-Regular; color:#470806;">November 6, 2021</em>
                    <!-- <p>	
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                    </p> -->
                </li>
            </ol>
        </div> <!-- .events-content -->
    </section>


    <section id="prizepool" style="min-height:30vh;">
        <div class="row pt-5" id="counter" style="height: auto;">
            <!-- <div class="col-2"></div> -->
            <div class="col-12 counter-txt text-white prize-pool text-center">
                <div class="row">
                    <div class="col-2 d-none d-md-block"></div>
                    <div class="col-4 d-none d-md-block">
                        <p class="prize-pool">
                            Total Prize
                        </p>
                    </div>
                    <div class="col-5 d-block d-md-none">
                        <p class="prize-pool">
                            Total Prize
                        </p>
                    </div>
                    <div class="col-2 d-none d-md-block">
                        <p class="prize-pool">
                            <span class="counter-value " data-count="40625000">0</span> 
                        </p>
                    </div>
                    <div class="col-2 d-none d-md-block">
                        <p class="prize-pool">
                            Rupiah
                        </p>
                    </div> 
                    <div class="col-4 d-block d-md-none">
                        <p class="prize-pool">
                            <span class="counter-value " data-count="40625000">0</span> 
                        </p>
                    </div>
                    <div class="col-3 d-block d-md-none">
                        <p class="prize-pool">
                            Rupiah
                        </p>
                    </div> 
                </div>
                
            </div>
            <!-- <div class="col-2"></div> -->
        </div>        
    </section>
    <section style="min-height:70vh;">
        <div class="row pt-5 pb-5">
            <div class="col">
                <div class="row text-center">
                    <div class="col">
                        <h1 style="font-family:Requiem; color:#470806; font-size: 2.6em; font-weight: 700; line-height: 1.2;"> Sponsored By </h1>
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
    </section>


    <section>
        <div class="row media-partner-content">
            <div class="col">
                <div class="row media-partner-text text-center">
                    <div class="col">
                        <h1 style="font-family:Requiem; color:#470806; font-size: 2.6em; font-weight: 700; line-height: 1.2;">> Media Partners </h1>
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
    </section>
</div>

@endsection 

