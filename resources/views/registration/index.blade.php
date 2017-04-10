@extends('layouts.master')

@section('content')




 <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
            <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
            <div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
                <div class="container">
                    <div class="c-page-title c-pull-left">
                        <h3 class="c-font-uppercase c-font-sbold">Anmeldung</h3>
                    </div>
                    <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                        <li>
                            <a href="{{url('/')}}">Anmeldung</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
            <!-- BEGIN: PAGE CONTENT -->
            <!-- BEGIN: CONTENT/MISC/LATEST-ITEMS-3 -->
            <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="c-content-media-1 c-bordered wow animated fadeInLeft" style="min-height: 380px;">
                                <!--<div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">Sommerfest</div>-->
                                <a href="#" class="c-title c-font-uppercase c-theme-on-hover c-font-bold">Sommerfest der Eigentümergemeinschaften Golfplatz Bad Saarow</a>
                                <p>Liebe Freunde!</p>
                                   <p> Am 18. und 19. Juni 2017 wollen wir mit einem Sommerfest 20 Jahre „Genießen in Bad Saarow“ feiern. 1997 sind die ersten von uns in diese herrliche Anlage eingezogen.
                                    </p>
                                <div class="c-author">
                                    <div class="c-portrait" style="background-image: url(assets/base/img/content/team/team16.jpg)"></div>
                                    <div class="c-name c-font-uppercase">Jens Krause</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="c-content-media-2-slider wow animated fadeInRight" data-slider="owl">
                                
                                <div class="owl-carousel owl-theme c-theme owl-single" data-single-item="true" data-navigation-dots="true" data-auto-play="4000" data-rtl="false">
                                    <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/content/stock3/63.jpg); min-height: 380px;">
                                        
                                    </div>
                                    <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/content/stock3/62.jpg); min-height: 380px;">
                                    </div>
                                     <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/content/stock3/bad-saarow.png); min-height: 380px;">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/MISC/LATEST-ITEMS-3 -->
           
         <!-- BEGIN: CONTENT/CONTACT/FEEDBACK-1 -->
            <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <div class="c-content-feedback-1 c-option-1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="c-container c-bg-green c-bg-img-bottom-right" style="background-image:url(assets/base/img/content/misc/feedback_box_1.png)">
                                    <div class="c-content-title-1 c-inverse">
                                        <h3 class="c-font-uppercase c-font-bold">Um besser disponieren zu können, starten wir heute mit einer Abfrage zur beabsichtigten Teilnahme.</h3>
                                        <div class="c-line-left"></div>
                                        <p class="c-font-lowercase">Wir freuen uns über zahlreiche Anmeldungen.</p>
                                        <!--<a href="#" class="btn btn-md c-btn-border-2x c-btn-white c-btn-uppercase c-btn-square c-btn-bold">Learn More</a>-->
                                    </div>
                                </div>
                                <div class="c-container c-bg-grey-1 c-bg-img-bottom-right" style="background-image:url(assets/base/img/content/misc/feedback_box_2.png)">
                                    <div class="c-content-title-1">
                                        <h3 class="c-font-uppercase c-font-bold">Fragen?</h3>
                                        
                                        <div class="c-line-left"></div>
                                        <a href="{{url('/contact')}}" class="btn btn-xlg c-theme-btn c-btn-green c-btn-border-1x c-btn-uppercase c-btn-square c-font-bold">Kontakt</a>
                                        
                                        <p>Bei Fragen könnt ihr Euch direkt an Jens Krause wenden oder nutzt einfach das Kontaktformular!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="c-contact">
                                    <div class="c-content-title-1">
                                        <h3 class="c-font-uppercase c-font-bold">Anmeldung</h3>
                                        <div class="c-line-left"></div>
                                        <!--<p class="c-font-lowercase">Our helpline is always open to receive any inquiry or feedback. Please feel free to drop us an email from the form below and we will get back to you as soon as we can.</p>-->
                                    </div>

                                         {!! Form::open( [
                                            'method' => 'POST',
                                            'action' => 'RegisterController@store',
                                            'files' => TRUE
                                            
                                        ]) !!}

                                                    @include('registration.form')

                                        {!! Form::close() !!}

                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           
            <!-- END: CONTENT/CONTACT/FEEDBACK-1 -->
            <!-- BEGIN: CONTENT/SLIDERS/TEAM-2 -->
           
            <!-- END: CONTENT/SLIDERS/TEAM-2 -->
            <!-- BEGIN: CONTENT/MISC/ABOUT-1 -->
            
            <!-- END: CONTENT/MISC/ABOUT-1 -->
            <!-- BEGIN: CONTENT/TESTIMONIALS/TESTIMONIALS-2 -->
            
            <!-- END: CONTENT/TESTIMONIALS/TESTIMONIALS-2 -->
            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->


@push('scripts')
   
    @if(session()->has('success'))

    <script>
        
        swal(
            'Good Job!',
            '{!! session()->get('success') !!}',
            'success'
        )


    </script>

@endif

@if(count($errors) > 0)

    <script>

        swal(
            'Oops...',
            'Irgendwas ist schief gelaufen!',
            'error'
        )
    
    </script>

@endif  
@endpush

@endsection