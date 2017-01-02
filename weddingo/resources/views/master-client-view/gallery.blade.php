@extends('layouts.master-client-layout.header-ext')
@section('title', 'Gallery')
@section('ext-scripts-n-styles')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/bower_components/gallery/css/animated-masonry-gallery.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/bower_components/fancybox/ekko-lightbox.min.css') }}"/>
@endsection
@section('content')
<div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title">Gallery Page</h3>
                        <div id="gallery">
                            <div id="gallery-header">
                                <div id="gallery-header-center">
                                    <form class="form-horizontal form-material" action="gallery/store" method="POST" enctype="multipart/form-data">
                                        <input type="file" id="image" name="image[]" multiple>
                                        <br>
                                        <input type="hidden" id="gallery_token" name="_token" value="{{csrf_token()}}">
                                        <button type="submit" name="confirm_button" id="confirm_button">אעלה תמונות</button>
                                    </form>
                                    <br>________________________________________________<br><br>

                                    <div id="gallery-header-center-left">
                                        <div class="gallery-header-center-right-links" id="filter-all">All</div>
                                        <div class="gallery-header-center-right-links" id="filter-studio">Studio</div>
                                        <div class="gallery-header-center-right-links" id="filter-landscape">Landscapes</div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div id="gallery-content">
                                <div id="gallery-content-center"> <a href="{{ URL::asset('plugins/images/assets/studio1.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="plugins/images/assets/studio1.jpg" alt="gallery" class="all studio"/> </a> <a href="{{ URL::asset('plugins/images/assets/landscape1.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ URL::asset('plugins/images/assets/landscape1.jpg') }}" class="all landscape" alt="gallery" /> </a> <a href="{{ URL::asset('plugins/images/assets/studio2.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ URL::asset('plugins/images/assets/studio2.jpg') }}" class="all studio" alt="gallery"/> </a> <a href="{{ URL::asset('plugins/images/assets/studio25.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ URL::asset('plugins/images/assets/studio25.jpg') }}" class="all studio" alt="gallery"/> </a> <a href="{{ URL::asset('plugins/images/assets/landscape2.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ URL::asset('plugins/images/assets/landscape2.jpg') }}" class="all landscape" alt="gallery"/></a> <a href="{{ URL::asset('plugins/images/assets/studio27.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ URL::asset('plugins/images/assets/studio27.jpg') }}" class="all studio" alt="gallery"/> </a> <a href="{{ URL::asset('plugins/images/assets/studio3.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ URL::asset('plugins/images/assets/studio3.jpg') }}" class="all studio" alt="gallery"/> </a> <a href="{{ URL::asset('plugins/images/assets/landscape3.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
@endsection
@section('ext-footer-scripts')
<!--slimscroll JavaScript -->
<script src="{{ URL::asset('js/jquery.slimscroll.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('plugins/bower_components/gallery/js/animated-masonry-gallery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('plugins/bower_components/gallery/js/jquery.isotope.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('plugins/bower_components/fancybox/ekko-lightbox.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function ($) {
        // delegate calls to data-toggle="lightbox"
        $(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
            event.preventDefault();
            return $(this).ekkoLightbox({
                onShown: function() {
                    if (window.console) {
                        return console.log('Checking our the events huh?');
                    }
                },
                onNavigate: function(direction, itemIndex) {
                    if (window.console) {
                        return console.log('Navigating '+direction+'. Current item: '+itemIndex);
                    }
                }
            });
        });

        //Programatically call
        $('#open-image').click(function (e) {
            e.preventDefault();
            $(this).ekkoLightbox();
        });
        $('#open-youtube').click(function (e) {
            e.preventDefault();
            $(this).ekkoLightbox();
        });

        // navigateTo
        $(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
            event.preventDefault();

            var lb;
            return $(this).ekkoLightbox({
                onShown: function() {

                    lb = this;

                    $(lb.modal_content).on('click', '.modal-footer a', function(e) {

                        e.preventDefault();
                        lb.navigateTo(2);

                    });

                }
            });
        });


    });
</script>
<!-- Custom Theme JavaScript -->
<script src="{{ URL::asset('js/custom.min.js') }}"></script>
@endsection
