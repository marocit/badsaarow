@extends('layouts.master')

@section('content')

     <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
            <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
            <div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
                <div class="container">
                    <div class="c-page-title c-pull-left">
                        <h3 class="c-font-uppercase c-font-sbold">Kontakt</h3>
                    </div>
                    <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li>/</li>
                        <li class="c-state_active">Kontakt</li>
                    </ul>
                </div>
            </div>
            <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
            <!-- BEGIN: PAGE CONTENT -->
            <!-- BEGIN: CONTENT/CONTACT/CONTACT-1 -->
            <div class="c-content-box c-size-md c-bg-img-top c-no-padding c-pos-relative">
                <div class="container">
                    <div class="c-content-contact-1 c-opt-1">
                        <div class="row" data-auto-height=".c-height">
                            <div class="col-md-8">
                                <div class="c-body">
                                    <div class="c-content-title-1">
                                        <h3 class="c-font-uppercase c-font-bold">Kontakt</h3>
                                        <div class="c-line-left"></div>
                                        <p class="c-font-lowercase">Our helpline is always open to receive any inquiry or feedback. Please feel free to drop us an email from the form below and we will get back to you as soon as we can.</p>
                                    </div>
                                    <form action="#">
                                        <div class="form-group">
                                            <input type="text" placeholder="Your Name" class="form-control c-square c-theme input-lg"> </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Your Email" class="form-control c-square c-theme input-lg"> </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Contact Phone" class="form-control c-square c-theme input-lg"> </div>
                                        <div class="form-group">
                                            <textarea rows="8" name="message" placeholder="Write comment here ..." class="form-control c-theme c-square input-lg"></textarea>
                                        </div>
                                        <button type="submit" class="btn c-theme-btn c-btn-uppercase btn-lg c-btn-bold c-btn-square">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="c-body">
                                    <div class="c-section">
                                        <h3>Jens Krause</h3>
                                    </div>
                                    <div class="c-section">
                                        <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">Addresse</div>
                                        <p>Erbacher Str. 9
                                            <br/>14193 Berlin
                                            </p>
                                    </div>
                                    <div class="c-section">
                                        <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">Kontakt</div>
                                        <p>
                                            <strong>T</strong> 800 123 0000
                                            <br/>
                                            <strong>F</strong> 800 123 8888</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
           
            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->

@endsection