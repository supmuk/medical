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

<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="flaticon-stethoscope"></i></a></div>

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
