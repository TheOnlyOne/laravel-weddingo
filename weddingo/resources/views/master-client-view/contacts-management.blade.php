@extends('layouts.master-client-layout.header-ext')
@section('title', 'Contacts Management')
@section('ext-scripts-n-styles')
    <!-- Those are extended css files -->
    <link href="{{ URL::asset('plugins/bower_components/footable/css/footable.core.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('plugins/bower_components/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" />
@endsection
@section('inner-page-title', 'ניהול מוזמנים')
@section('breadcrumbs-nav')
    <li><a href="#">לוח ניהול</a></li>
    <li class="active">ניהול מוזמנים</li>
@endsection
@section('content')
    <div class="col-md-12">
        <div class="white-box p-0">
            <!-- .left-right-aside-column-->
            <div class="page-aside">
                <!-- .left-aside-column-->
                <div class="left-aside">
                    <div class="scrollable">
                        <ul class="list-style-none">
                            <li class="box-label"><a href="javascript:void(0)">כל המוזמנים <span>123</span></a></li>
                            <li class="divider"></li>
                            @foreach($categories as $cat)
                                <li><a href="javascript:void(0)">{{ $cat->name }} <span>103</span></a></li>
                            @endforeach
                            <!--<li><a href="javascript:void(0)">Family <span>19</span></a></li>
                            <li><a href="javascript:void(0)">Friends <span>623</span></a></li>
                            <li><a href="javascript:void(0)">Private <span>53</span></a></li> -->
                            <li class="box-label"><a href="javascript:void(0)" data-toggle="modal" data-target="#responsive-modal-add-group" id="add-group-btn">+ הוספת קבוצה חדשה</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.left-aside-column-->
                <div class="right-aside">
                    <div class="right-page-header"><div class="pull-right"><input type="text" id="demo-input-search2" placeholder="חיפוש מוזמנים" class="form-control"></div><h3>ניהול מוזמנים</h3>
                    </div>
                    <div class="clearfix"></div>
                    <div class="scrollable">
                        <div class="table-responsive">
                            <table id="demo-foo-addrow" class="table m-t-80 table-hover contact-list" data-page-size="10">
                                <thead>
                                <tr>
                                    <th>שם</th>
                                    <th>מס' טלפון</th>
                                    <th>מס' מוזמנים</th>
                                    <th>סטטוס אישור</th>
                                    <th>מחיקה</th>
                                    <th>עריכה</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($guests as $guest)
                                    <tr class="{{ $guest->id }}">
                                        <td>{{ $guest->name }}</td>
                                        <td>{{ $guest->phone_number }}</td>
                                        <td>{{ $guest->guests_num }}</td>
                                        @if($guest->is_coming == 1)
                                            <td>אישר\ה הגעה</td>
                                        @endif
                                        @if($guest->is_coming == 2)
                                            <td>ביטל\ה הגעה</td>
                                        @endif
                                        @if($guest->is_coming == 0)
                                            <td>לא מעודכן</td>
                                        @endif
                                        <td><span class="label label-danger"><a href='' style="color: #fff;" id="remove_wedding_guest" class="{{ $guest->id }}">X</a></span> </td>
                                        <td><span class="label label-danger"><a href='' data-toggle="modal" data-target="#responsive-modal" style="color: #fff;" id="edit_wedding_guest" class="{{ $guest->id }}">X</a></span> </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>

                                    <td colspan="2"><button type="button" class="btn btn-info btn-rounded" id="add-guest-btn" data-toggle="modal" data-target="#responsive-modal-add-contact">הוספת מוזמן חדש</button></td>
                                    <td colspan="7"><div class="text-right">
                                            <ul class="pagination">
                                            </ul>
                                        </div></td>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
                <!-- .left-aside-column-->
                <div class="myadmin-alert myadmin-alert-icon myadmin-alert-click alert-success myadmin-alert-top alerttop" style="display: none; z-index:999999;" id="error_results">
                </div>
            </div>
            <!-- /.left-right-aside-column-->
            <!-- Edit contact form -->
            <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">עריכת מוזמן חתונה</h4>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">שם מלא:</label>
                                    <input type="text" class="form-control" id="edit-guest-fullname">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">מס' טלפון:</label>
                                    <input type="text" class="form-control" id="edit-guest-phonenumber">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">מס' אורחים:</label>
                                    <input type="text" class="form-control" id="edit-guest-no-guests">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">קטגוריה:</label>
                                    <select name="category" class="form-control" id="edit-guest-category-id">
                                        <option>ללא שינוי</option>
                                        <option>חברים</option>
                                        <option>עבודה</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">סטטס הגעה:</label>
                                    <select name="category" class="form-control" id="edit-guest-status">
                                        <option>ללא שינוי</option>
                                        <option>מאשר הגעה</option>
                                        <option>לא מעודכן</option>
                                        <option>לא מאשר הגעה</option>
                                    </select>
                                </div>
                                <input type="hidden" class="form-control" id="edit-guest-id" />
                                <input type="hidden" id="edit-guest-token" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">ביטול</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light" id="submit-edit-guest">שמור שינווים</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add contact form -->
            <div id="responsive-modal-add-contact" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">הוספת מוזמן חתונה</h4>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">שם מלא:</label>
                                    <input type="text" class="form-control" id="guest-fullname" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">מס' טלפון:</label>
                                    <input type="text" class="form-control" id="guest-phonenumber" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">קטגוריה:</label>
                                    <select name="category" class="form-control" id="guest-category-id" required="required">
                                        <option>חברים</option>
                                        <option>עבודה</option>
                                    </select>
                                </div>
                                <input type="hidden" id="guest-token" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">ביטול</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light" id="submit-add-guest">הוסף מוזמן</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add group form -->
            <div id="responsive-modal-add-group" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">הוספת קבוצה חדשה</h4>
                        </div>
                        <div class="modal-body">
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">שם הקבוצה:</label>
                                        <input type="text" class="form-control" id="group_name" required="required">
                                    </div>
                                    <input type="hidden" id="group_token" name="_token" value="{{ csrf_token() }}">
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">ביטול</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light" id="submit-add-group">הוסף קבוצה</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
@section('ext-footer-scripts')
    <!-- Those are extended javascript files -->
    <!-- Footable -->
    <script src="{{ URL::asset('plugins/bower_components/footable/js/footable.all.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/bower_components/bootstrap-select/bootstrap-select.min.js') }}" type="text/javascript"></script>
    <!--FooTable init-->
    <script src="{{ URL::asset('js/footable-init.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#add-group-btn").click(function(e) {
                e.preventDefault();
                console.log("add group button has been clicked");
                $("#responsive-modal add-group").show("slow");
            });

            $("#add-guest-btn").click(function(e) {
                e.preventDefault();
                $("#responsive-modal-add-contact").show("slow");
                console.log("add contact button has been clicked");
            });

            $("#demo-foo-addrow #remove_wedding_guest").click(function(e) {
               e.preventDefault();
               console.log("remove wedding guest link has been clicked");
               var guest_id = $(this).attr("class");
               var data = {
                   guest_id,
               }

               var footable_even_id = $(this).parent().parent().parent();

               $.post('master-client/remove-wedding-guest', data, function(callback) {
                   console.log(callback);
                   footable_even_id.fadeOut("slow");
               });
            });

            $("#demo-foo-addrow #edit_wedding_guest").click(function(e) {
                e.preventDefault();
                console.log("edit wedding guest button has been clicked");
                e.preventDefault();
                $("#responsive-modal-test").show("slow");

                var id = $(this).attr("class");

                var data = {
                    id,
                }

                $.post('master-client/get-updated-guest-data', data, function(callback) {
                    console.log(callback.name);
                    $("#edit-guest-fullname").val(callback.name);
                    $("#edit-guest-phonenumber").val(callback.phone_number);
                    $("#edit-guest-no-guests").val(callback.guests_num);
                    $("#edit-guest-id").val(id);
                });
            });

            $("#submit-add-group").click(function(e) {
                e.preventDefault();
                console.log("#submit-add-group btn clicked");
                var _token = $("#group_token").val();
                var name = $("#group_name").val();

                var data = {
                    name,
                    _token,
                }

                console.log(data);

                /*
                $.post('master-client/add-new-group-category', data, function(callback_data) {
                    data = '';
                    $("#error_results").html('<i class="ti-user"></i>' + callback_data + '<a href="" class="closed">×</a>');
                    $("#error_results").fadeIn("slow");
                });
                */
                $.post('master-client/get-last-group-cateogry-data', data, function(inner_callback_data) {
                    console.log(inner_callback_data);
                });
            });

            $("#submit-add-guest").click(function(e) {
               e.preventDefault();
               console.log("#submit-add-guest btn clicked");
                var _token = $("#guest-token").val();
                var name = $("#guest-fullname").val();
                var group_cat = $("#guest-category-id").val();
                var phone_number = $("#guest-phonenumber").val();

                var data = {
                    _token,
                    name,
                    phone_number,
                    group_cat,
                }

                console.log(data);

                $.post('master-client/add-new-wedding-guest', data, function(data) {
                    $("#error_results").html('<i class="ti-user"></i>' + data + '<a href="" class="closed">×</a>');
                    $("#error_results").fadeIn("slow");
                });
            });

            $("#submit-edit-guest").click(function(e) {
                e.preventDefault();
                console.log("#submit-edit-guest btn clicked");

                var fullname = $("#edit-guest-fullname").val();
                var phonenumber = $("#edit-guest-phonenumber").val();
                var guests_num = $("#edit-guest-no-guests").val();
                var status = $("#edit-guest-status").val();
                var category = $("#edit-guest-category-id").val();
                var guest_id = $("#edit-guest-id").val();
                var _token = $("#edit-guest-token").val();

                var data = {
                    guest_id,
                    fullname,
                    phonenumber,
                    guests_num,
                    status,
                    category,
                    _token
                };

                console.log(data);

                $.post('master-client/update_wedding_guest', data, function(callback) {
                    // TODO: check if callback data is updating confirmation status
                    console.log(callback);
                });
            });
        });
    </script>
@endsection

