<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="keywords" content="Bootstrap 5, Hospital, Doctor, Medical, Multipurpose, Health, RTL" />
<meta name="description" content="Bootstrap 5 HTML5 Template" />
<meta name="author" content="www.themeht.com" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Title -->
<title>Hectolab - Medical & Health Multipurpose Bootstrap5 Template</title>

<!-- favicon icon -->
<link rel="shortcut icon" href="images/favicon.ico" />
<link href="{{asset('assets/frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/frontend/css/animate.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/frontend/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/frontend/css/themify-icons.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/frontend/css/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/frontend/css/owl-carousel/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/frontend/css/date-picker/date-picker.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/frontend/css/spacing.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/frontend/css/base.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/frontend/css/shortcodes.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/frontend/css/style.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/frontend/css/theme-color/theme-blue.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/frontend/css/responsive.css')}}" rel="stylesheet" type="text/css" />
<link href="#" data-style="styles" rel="stylesheet">
<link href="{{asset('assets/frontend/css/color-customize/color-customizer.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
<style>
    span.bottom-slider {
        color: #fff;
        font-size: 20px;
        font-weight: 600;
        font-style: italic;
    }
    .featured-step{
        height: 100%;
    }
    .featured-step h5{
        font-size: 15px;
    }
    .team-images:before{
        content: none;
    }
    .fixed-width h5{
        width: 80%;
        word-break: break-all;
    }

    .progress {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    height: 40px;
    margin: 0 0 1em;
    padding: 0;
}

.progress > li {
    width: 100% !important;
    height: 100% !important;
    border-radius: 0 !important;
    color: #fff !important;
    list-style: none;
    font-size: 16px;
    background-color: #bbb;
    position: relative;
}

.progress > li:last-child {
    border-right: 0;
}

.progress > li.completed {
    background-color: #0999be;
}

.progress > li:not(.completed) {
  padding-left: 20px;
}

.progress > li span {
    position: relative;
    top: 5px;
 }

.progress > li span .order {
    display: inline-block;
    border: 2px solid #555;
    border-radius: 27px;
    width: 27px;
    height: 27px;
    background-color: #fff;
    color: #555;
    margin: 0 5px 0 10px;
    font-weight: bold;
    text-align: center;
    position: relative;
    top: -1px;
    line-height: 25px;
}

.diagonal {
  width: 0; 
  height: 0; 
  border-top: 20px solid transparent;
  border-bottom: 20px solid transparent;
  border-left: 20px solid #bbb;
  top: 0; right: 0;
  position: absolute;
  transform: translateX(100%);
  z-index: 1;
}
.completed .diagonal {
  border-left-color: #0999be;
}

.progress > li span {
    position: relative;
    top: 10px;
    font-weight: 500;
}

.inspired{
    background-color: #cd3b46!important;
}
.determined{
    background-color: #09881f !important;
}
.dynamic{
    background-color: #d3b201 !important;
}
.remarkable{
    background-color: #212d81 !important;
}
.noble{
    background-color: #5d43a6 !important;
}
.mfp-title{
    display: none;
}
.pdf-container img{
    max-width: 500px;
    width: auto;
}
.content-fix{
    word-break: break-word;
}
</style>
</head>

<body>


<div class="page-wrapper">
    <div id="ht-preloader">
        <div class="loader clear-loader"><img src="images/loader.gif" alt=""></div>
    </div>

    @include('layouts.frontend.menu')
    @yield('content')
    @include('layouts.frontend.footer')
</div>

<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="fas fa-angle-up"></i></a></div>

<script src="{{asset('assets/frontend/js/theme.js')}}"></script>
<script src="{{asset('assets/frontend/js/magnific-popup/jquery.magnific-popup.min.js')}}"></script> 
<script src="{{asset('assets/frontend/js/owl-carousel/owl.carousel.min.js')}}"></script> 
<script src="{{asset('assets/frontend/js/jarallax/jarallax.min.js')}}"></script> 
<script src="{{asset('assets/frontend/js/counter/counter.js')}}"></script> 
<script src="{{asset('assets/frontend/js/skill/circle-progressbar.js')}}"></script> 
<script src="{{asset('assets/frontend/js/countdown/jquery.countdown.min.js')}}"></script> 
<script src="{{asset('assets/frontend/js/isotope/isotope.pkgd.min.js')}}"></script> 
<script src="{{asset('assets/frontend/js/contact-form/contact-form.js')}}"></script>
<script src="{{asset('assets/frontend/js/date-picker/date-picker.js')}}"></script>
<script src="{{asset('assets/frontend/js/color-customize/color-customizer.js')}}"></script> 
<script src="{{asset('assets/frontend/js/wow.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/theme-script.js')}}"></script>
<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.headquarter-select2').select2({
            placeholder: 'Keyword...',
            // multiple: true,
            ajax: {
                type: 'GET',
                url: "{{route('list-of-headquarter')}}",
                processResults: function(data) {
                    return {
                        results: $.map(data, function(item) {
                            return {
                                text: item.name,
                                id: item.id
                            }
                        })
                    };
                }
            }
        });
	});
</script>
</body>
</html>
