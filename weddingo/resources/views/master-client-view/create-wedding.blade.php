@extends('layouts.master-client-layout.header-ext')
@section('title', 'Create Wedding')
@section('ext-scripts-n-styles')
    <link href="{{ URL::asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/colors/blue.css') }}" id="theme"  rel="stylesheet">
@endsection
@section('content')
    <div id="myModal" class="modal fade" data-keyboard="false" data="show" data-backdrop="static" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="javascript:void(0)" class="text-center db"><img src="{{ URL::asset('plugins/images/eliteadmin-logo-dark.png') }}" alt="Home" /><br/><img src="{{ URL::asset('plugins/images/eliteadmin-text-dark.png') }}" alt="Home" /></a>
                    <h3 class="box-title m-t-40 m-b-0">צור את החתונה שלך</h3>
                </div>
                <form class="form-horizontal form-material" id="create_wedding_form" action="" method="POST">
                    <div class="modal-body">
                        <div class="form-group m-t-20">
                            <div class="col-xs-12">
                                <input id="groom_name" class="form-control" type="text" required="" name="groom_name" placeholder="שם החתן">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input id="bride_name" class="form-control" type="text" required="" name="bride_name" placeholder="שם הכלה">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input id="date" class="form-control" type="date" required="" name="date">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <select id="wedding_hall" name="wedding_hall" class="form-control">
                                    <option value=0 disabled selected>בחר אולם אירועים</option>
                                    @foreach($wedding_halls as $wedding_hall)
                                        <option value={{$wedding_hall->id}}>{{$wedding_hall->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <input type="hidden" id="create_wedding_token" name="_token" value="{{csrf_token()}}">
                    </div>
                    <div class="modal-footer">
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button id="confirm_button" class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">צור חתונה!</button>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                <a href="create-wedding/logout" class="text-primary m-l-5"><b>התנתק</b></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('ext-footer-scripts')
    <script src="{{ URL::asset('plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/waves.js') }}"></script>
    <script src="{{ URL::asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.slimscroll.js') }}"></script>

    <script>
        $(document).ready(function(){
            $("#groom_name").change(function (event) {
                $("#groom_name").get(0).setCustomValidity("");
            })
            $("#bride_name").change(function (event) {
                $("#bride_name").get(0).setCustomValidity("");
            })
            $("#date").change(function (event) {
                $("#date").get(0).setCustomValidity("");
            })
            $("#wedding_hall").change(function (event) {
                $("#wedding_hall").get(0).setCustomValidity("");
            })
          });
    </script>
    <script>
        $(document).ready(function(){
            $("#create_wedding_form").submit(function(e){
                e.preventDefault();
                var data =  {
                    groom_name: $("#groom_name").val(),
                    bride_name: $("#bride_name").val(),
                    date: $("#date").val(),
                    wedding_hall: $("#wedding_hall").val(),
                    _token:$("#create_wedding_token").val(),
                };

                $.post('create-wedding/store', data, function(callback) {
                    if(callback['success'] == false) {
                        if(callback['errors'].groom_name != undefined) {
                            $("#groom_name").get(0).setCustomValidity(callback['errors'].groom_name[0]);
                        }
                        if(callback['errors'].bride_name != undefined) {
                            $("#bride_name").get(0).setCustomValidity(callback['errors'].bride_name[0]);
                        }
                        if(callback['errors'].date != undefined) {
                            $("#date").get(0).setCustomValidity(callback['errors'].date[0]);
                        }
                        if(callback['errors'].wedding_hall != undefined) {
                            $("#wedding_hall").get(0).setCustomValidity(callback['errors'].wedding_hall[0]);
                        }
                        $("#confirm_button").click()
                    }
                    else {
                        window.location = "pricing";
                    }
                });
            });
        });
    </script>
@endsection