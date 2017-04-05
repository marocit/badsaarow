@extends('layouts.admin')

@section('content')


<!-- BEGIN PAGE HEADER-->
                       
    <!-- BEGIN PAGE BAR -->
     <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.html">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>Dashboard</span>
                                </li>
                            </ul>
                           
                        </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h1 class="page-title"> Admin Dashboard
        <small>statistics, charts, recent events and reports</small>
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
   <!-- BEGIN DASHBOARD STATS 1-->
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                                    <div class="visual">
                                        <i class="fa fa-comments"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="{{$answer1}}">0</span>
                                        </div>
                                        <div class="desc"> Ich Werde Zum Sommerfest Am 18. Juni Kommen </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                                    <div class="visual">
                                        <i class="fa fa-bar-chart-o"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="{{$answer2}}">0</span> </div>
                                        <div class="desc"> Ich Beteilige Mich Bei Der Vorbereitung </div>
                                        
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                                    <div class="visual">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="{{$answer3}}">0</span>
                                        </div>
                                        <div class="desc"> Ich Helfe Beim Fest: </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                                    <div class="visual">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number"> 
                                            <span data-counter="counterup" data-value="{{$answer4}}"></span> </div>
                                        <div class="desc"> Ich Nehme Am Golfturnier Am 19. Juni Teil </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- END DASHBOARD STATS 1-->

                        <div class="row">
                            <div class="col-lg-12 col-xs-12 col-sm-12">
                                <div class="portlet light bordered">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption">
                                            <i class="icon-bubbles font-dark hide"></i>
                                            <span class="caption-subject font-dark bold uppercase">Teilnehmer</span>
                                        </div>
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#portlet_comments_1" data-toggle="tab"> Zusage <span class="badge badge-danger"> {{$answer1}} </span></a>
                                            </li>
                                            <li>
                                                <a href="#portlet_comments_2" data-toggle="tab"> Beteiligung <span class="badge badge-danger"> {{$answer2}} </span> </a>
                                            </li>
                                            <li>
                                                <a href="#portlet_comments_3" data-toggle="tab"> Hilfe <span class="badge badge-danger"> {{$answer3}} </span> </a>
                                            </li>
                                            <li>
                                                <a href="#portlet_comments_4" data-toggle="tab"> Golfturnier <span class="badge badge-danger"> {{$answer4}} </span> </a>
                                            </li>
                                            <li>
                                                <a href="#portlet_comments_5" data-toggle="tab"> Spende  <span class="badge badge-danger"> {{$answer5}} </span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="portlet_comments_1">
                                                <!-- BEGIN: Comments -->
                                                <div class="mt-comments">
                                                    @foreach($users as $user)

                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="../assets/pages/media/users/avatar.jpg" /> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">{{$user->name}}</span>
                                                                <span class="mt-comment-date">{{$user->date}}</span>
                                                            </div>
                                                            <div class="mt-comment-text"> {!!$user->message()!!} </div>
                                                            
                                                        </div>
                                                    </div>
                                                   
                                                   @endforeach

                                                </div>
                                                <!-- END: Comments -->
                                            </div>
                                            <div class="tab-pane" id="portlet_comments_2">
                                                <!-- BEGIN: Comments -->
                                                <div class="mt-comments">

                                                @foreach($select2 as $selected2)
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="../assets/pages/media/users/avatar.jpg" /> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">{{$selected2->name}}</span>
                                                                <span class="mt-comment-date">{{$selected2->date}}</span>
                                                            </div>
                                                            <div class="mt-comment-text"> {!!$selected2->message()!!} </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                </div>
                                                <!-- END: Comments -->
                                            </div>
                                            <div class="tab-pane" id="portlet_comments_3">
                                                <!-- BEGIN: Comments -->
                                                <div class="mt-comments">

                                                @foreach($select3 as $selected3)
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="../assets/pages/media/users/avatar.jpg" /> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">{{$selected3->name}}</span>
                                                                <span class="mt-comment-date">{{$selected3->date}}</span>
                                                            </div>
                                                            <div class="mt-comment-text"> {!!$selected3->message()!!} </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                </div>
                                                <!-- END: Comments -->
                                            </div>
                                            <div class="tab-pane" id="portlet_comments_4">
                                                <!-- BEGIN: Comments -->
                                                <div class="mt-comments">

                                                @foreach($select4 as $selected4)
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="../assets/pages/media/users/avatar.jpg" /> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">{{$selected4->name}}</span>
                                                                <span class="mt-comment-date">{{$selected4->date}}</span>
                                                            </div>
                                                            <div class="mt-comment-text"> {!!$selected4->message()!!} </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                </div>
                                                <!-- END: Comments -->
                                            </div>
                                            <div class="tab-pane" id="portlet_comments_5">
                                                <!-- BEGIN: Comments -->
                                                <div class="mt-comments">

                                                @foreach($select5 as $selected5)
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="../assets/pages/media/users/avatar.jpg" /> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">{{$selected5->name}}</span>
                                                                <span class="mt-comment-date">{{$selected5->date}}</span>
                                                            </div>
                                                            <div class="mt-comment-text"> {!!$selected5->message()!!} </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                </div>
                                                <!-- END: Comments -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                        </div>
    
@endsection

@push('scripts')


    <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/horizontal-timeline/horizontal-timeline.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

@endpush