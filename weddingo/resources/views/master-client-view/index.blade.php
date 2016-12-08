@extends('layouts.master-client-layout.header-ext')
@section('title', 'Homepage')
@section('ext-scripts-n-styles')
    <!-- morris CSS -->
    <link href="{{ URL::asset('plugins/bower_components/morrisjs/morris.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="col-lg-3 col-sm-6 col-xs-12">
    <div class="white-box analytics-info">
        <h3 class="box-title">Total Visit</h3>
        <ul class="list-inline two-part">
            <li>
                <div id="sparklinedash"></div>
            </li>
            <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">8659</span></li>
        </ul>
    </div>
</div>
<div class="col-lg-3 col-sm-6 col-xs-12">
    <div class="white-box analytics-info">
        <h3 class="box-title">Total Page Views</h3>
        <ul class="list-inline two-part">
            <li>
                <div id="sparklinedash2"></div>
            </li>
            <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">7469</span></li>
        </ul>
    </div>
</div>
<div class="col-lg-3 col-sm-6 col-xs-12">
    <div class="white-box analytics-info">
        <h3 class="box-title">Unique Visitor</h3>
        <ul class="list-inline two-part">
            <li>
                <div id="sparklinedash3"></div>
            </li>
            <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">6011</span></li>
        </ul>
    </div>
</div>
<div class="col-lg-3 col-sm-6 col-xs-12">
    <div class="white-box analytics-info">
        <h3 class="box-title">Bounce Rate</h3>
        <ul class="list-inline two-part">
            <li>
                <div id="sparklinedash4"></div>
            </li>
            <li class="text-right"><i class="ti-arrow-down text-danger"></i> <span class="text-danger">18%</span></li>
        </ul>
    </div>
</div>
</div>
<!--/.row -->
<!-- .row -->
<div class="row">
<div class="col-md-12">
    <div class="white-box">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <h3 class="box-title">Sales in 2016</h3>
                <p class="m-t-30">Lorem ipsum dolor sit amet, ectetur adipiscing elit. viverra tellus. ipsumdolorsitda amet, ectetur adipiscing elit.</p>
                <p>
                    <br/> Ectetur adipiscing elit. viverra tellus.ipsum dolor sit amet, dag adg ecteturadipiscingda elitdglj. vadghiverra tellus.</p>
            </div>
            <div class="col-md-8 col-sm-6 col-xs-12">
                <div id="morris-area-chart" style="height:250px;"></div>
            </div>
        </div>
    </div>
</div>
</div>
<!--/.row -->
<!-- .row -->
<div class="row">
<div class="col-md-4 col-sm-12 col-xs-12">
    <div class="white-box">
        <h3 class="box-title">Weather</h3>
        <div class="weather-box">
            <div class="weather-top">
                <h2 class="pull-left">Monday <br>
                    <small>7th May 2016</small></h2>
                <div class="today_crnt pull-right">
                    <canvas class="sleet" width="44" height="44"></canvas> <span>32<sup>°F</sup></span> </div>
            </div>
            <div class="weather-info">
                <h5 class="font-bold">Weather info</h5>
                <div class="row">
                    <div class="col-xs-6 p-r-10">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="pull-left">Wind</p>
                                <p class="pull-right font-bold">16km/h</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="pull-left">Sunrise</p>
                                <p class="pull-right font-bold">05:20</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="pull-left">Humanfeel</p>
                                <p class="pull-right font-bold">32 <sup>°F</sup></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 p-l-10">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="pull-left">Sunset</p>
                                <p class="pull-right font-bold">21:05</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="pull-left">Pressure </p>
                                <p class="pull-right font-bold">22 in</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="weather-time">
                <ul class="list-unstyled weather-days row">
                    <li class="col-xs-4 col-sm-2"><span>Tue</span>
                        <canvas class="sleet" width="30" height="30"></canvas> <span>32<sup>°F</sup></span></li>
                    <li class="col-xs-4 col-sm-2"><span>Wed</span>
                        <canvas class="clear-day" width="30" height="30"></canvas> <span>34<sup>°F</sup></span></li>
                    <li class="col-xs-4 col-sm-2"><span>Thu</span>
                        <canvas class="partly-cloudy-day" width="30" height="30"></canvas> <span>35<sup>°F</sup></span></li>
                    <li class="col-xs-4 col-sm-2"><span>Fri</span>
                        <canvas class="cloudy" width="30" height="30"></canvas> <span>34<sup>°F</sup></span></li>
                    <li class="col-xs-4 col-sm-2"><span>Sat</span>
                        <canvas class="snow" width="30" height="30"></canvas> <span>30<sup>°F</sup></span></li>
                    <li class="col-xs-4 col-sm-2"><span>Sun</span>
                        <canvas class="wind" width="30" height="30"></canvas> <span>26<sup>°F</sup></span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="col-md-4 col-sm-12 col-xs-12">
    <div class="white-box">
        <h3 class="box-title">User Activity</h3>
        <div class="steamline">
            <div class="sl-item">
                <div class="sl-left"> <img class="img-circle" alt="user" src="{{ URL::asset('plugins/images/users/genu.jpg') }}"> </div>
                <div class="sl-right">
                    <div><a href="#">Gohn Doe</a> <span class="sl-date">5 minutes ago</span></div>
                    <p>Contrary to popular belief</p>
                </div>
            </div>
            <div class="sl-item">
                <div class="sl-left"> <img class="img-circle" alt="user" src="{{ URL::asset('plugins/images/users/ritesh.jpg') }}"> </div>
                <div class="sl-right">
                    <div><a href="#">Gohn Doe</a> <span class="sl-date">5 minutes ago</span></div>
                    <p>Lorem Ipsum is simply dummy</p>
                </div>
            </div>
            <div class="sl-item">
                <div class="sl-left"> <img class="img-circle" alt="user" src="{{ URL::asset('plugins/images/users/sonu.jpg') }}"> </div>
                <div class="sl-right">
                    <div><a href="#">Gohn Doe</a> <span class="sl-date">5 minutes ago</span></div>
                    <p>The standard chunk of ipsum </p>
                </div>
            </div>
            <div class="sl-item">
                <div class="sl-left"> <img class="img-circle" alt="user" src="{{ URL::asset('plugins/images/users/ritesh.jpg') }}"> </div>
                <div class="sl-right">
                    <div><a href="#">Gohn Doe</a> <span class="sl-date">5 minutes ago</span></div>
                    <p>Contrary to popular belief</p>
                </div>
            </div>
            <div class="sl-item">
                <div class="sl-left"> <img class="img-circle" alt="user" src="{{ URL::asset('plugins/images/users/govinda.jpg') }}"> </div>
                <div class="sl-right">
                    <div><a href="#">Gohn Doe</a> <span class="sl-date">5 minutes ago</span></div>
                    <p>The generated lorem ipsum</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-4 col-sm-12 col-xs-12">
    <div class="white-box">
        <h3 class="box-title">Feeds</h3>
        <ul class="feeds">
            <li>
                <div class="bg-info"><i class="fa fa-bell-o text-white"></i></div> You have 4 pending tasks. <span class="text-muted">Just Now</span></li>
            <li>
                <div class="bg-success"><i class="ti-server text-white"></i></div> Server #1 overloaded.<span class="text-muted">2 Hours ago</span></li>
            <li>
                <div class="bg-warning"><i class="ti-shopping-cart text-white"></i></div> New order received.<span class="text-muted">31 May</span></li>
            <li>
                <div class="bg-danger"><i class="ti-user text-white"></i></div> New user registered.<span class="text-muted">30 May</span></li>
            <li>
                <div class="bg-inverse"><i class="fa fa-bell-o text-white"></i></div> New Version just arrived. <span class="text-muted">27 May</span></li>
            <li>
                <div class="bg-purple"><i class="ti-settings text-white"></i></div> You have 4 pending tasks. <span class="text-muted">27 May</span></li>
        </ul>
    </div>
</div>
</div>
<!--/.row -->
<div class="row">
<div class="col-md-12">
    <div class="white-box">
        <h3 class="box-title">Order Status</h3>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Invoice</th>
                    <th>User</th>
                    <th>Order date</th>
                    <th>Amount</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Tracking Number</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="javascript:void(0)" class="btn-link"> Order #53431</a></td>
                    <td>Steve N. Horton</td>
                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 22, 2014</span></td>
                    <td>$45.00</td>
                    <td class="text-center">
                        <div class="label label-table label-success">Paid</div>
                    </td>
                    <td class="text-center">-</td>
                </tr>
                <tr>
                    <td><a href="javascript:void(0)" class="btn-link"> Order #53432</a></td>
                    <td>Charles S Boyle</td>
                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 24, 2014</span></td>
                    <td>$245.30</td>
                    <td class="text-center">
                        <div class="label label-table label-info">Shipped</div>
                    </td>
                    <td class="text-center"><i class="fa fa-plane"></i> CGX0089734531</td>
                </tr>
                <tr>
                    <td><a href="javascript:void(0)" class="btn-link"> Order #53433</a></td>
                    <td>Lucy Doe</td>
                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 24, 2014</span></td>
                    <td>$38.00</td>
                    <td class="text-center">
                        <div class="label label-table label-info">Shipped</div>
                    </td>
                    <td class="text-center"><i class="fa fa-plane"></i> CGX0089934571</td>
                </tr>
                <tr>
                    <td><a href="javascript:void(0)" class="btn-link"> Order #53434</a></td>
                    <td>Teresa L. Doe</td>
                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 15, 2014</span></td>
                    <td>$77.99</td>
                    <td class="text-center">
                        <div class="label label-table label-info">Shipped</div>
                    </td>
                    <td class="text-center"><i class="fa fa-plane"></i> CGX0089734574</td>
                </tr>
                <tr>
                    <td><a href="javascript:void(0)" class="btn-link"> Order #53435</a></td>
                    <td>Teresa L. Doe</td>
                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 12, 2014</span></td>
                    <td>$18.00</td>
                    <td class="text-center">
                        <div class="label label-table label-success">Paid</div>
                    </td>
                    <td class="text-center">-</td>
                </tr>
                <tr>
                    <td><a href="javascript:void(0)" class="btn-link">Order #53437</a></td>
                    <td>Charles S Boyle</td>
                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 17, 2014</span></td>
                    <td>$658.00</td>
                    <td class="text-center">
                        <div class="label label-table label-danger">Refunded</div>
                    </td>
                    <td class="text-center">-</td>
                </tr>
                <tr>
                    <td><a href="javascript:void(0)" class="btn-link">Order #536584</a></td>
                    <td>Scott S. Calabrese</td>
                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 19, 2014</span></td>
                    <td>$45.58</td>
                    <td class="text-center">
                        <div class="label label-table label-warning">Unpaid</div>
                    </td>
                    <td class="text-center">-</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection
@section('ext-footer-scripts')
<!--weather icon -->
<script src="{{ URL::asset('plugins/bower_components/skycons/skycons.js') }}"></script>
<!--Counter js -->
<script src="{{ URL::asset('plugins/bower_components/waypoints/lib/jquery.waypoints.js') }}"></script>
<script src="{{ URL::asset('plugins/bower_components/counterup/jquery.counterup.min.js') }}"></script>
<!--Morris JavaScript -->
<script src="{{ URL::asset('plugins/bower_components/raphael/raphael-min.js') }}"></script>
<script src="{{ URL::asset('plugins/bower_components/morrisjs/morris.js') }}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{ URL::asset('js/custom.min.js') }}"></script>
<script src="{{ URL::asset('js/dashboard4.js') }}"></script>
<!-- Sparkline chart JavaScript -->
<script src="{{ URL::asset('plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ URL::asset('plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js') }}"></script>
@endsection