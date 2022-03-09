<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  {{-- <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}"> --}}
  <!-- fullCalendar -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fullcalendar/main.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/summernote/summernote-bs4.min.css')}}">
</head>
<style>
    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background-color : #080808;
    }
</style>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @include('layouts.backend.navigation')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.backend.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  @include('layouts.backend.footer')

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}
<script src="{{asset('assets/plugins/daterangepicker/daterangepicker.min.js')}}"></script>
<!-- jQuery UI -->
<script src="{{asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/js/adminlte.min.js')}}"></script>
<!-- fullCalendar 2.2.5 -->
<script src="{{asset('assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('assets/plugins/fullcalendar/main.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/js/demo.js')}}"></script>
<!-- Page specific script -->
<script src="{{asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
$(document).ready(function() {
    $('.select2').select2({
        placeholder: 'Keyword...',
        multiple: true,
        ajax: {
            type: 'GET',
            url: "{{route('product.list-of-product')}}",
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
    $('.headquarter-select2').select2({
        placeholder: 'Keyword...',
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

$(document).ready(function(){
    // Common for select2
    $('.select2-ajax').each(function(key, val){
        select2($(this).attr('id'), $(this).data('url'), $(this).data('multiselect'))
    });

    // Delete Confirmation Dialog 
    $('.delete-confirm').click(function(e){
        e.preventDefault();
        if (confirm('Are you sure?')) {
            $(e.target).closest('form').submit();
        }
    });

    $('#summernote').summernote({
        callbacks: {
        onChange: function(contents, $editable) {
            console.log('onChange:', contents, $editable);
        }
    }

    });

});

function select2(className, url, multiselect = false) {
    if(url != undefined && url != 'undefined') {
        $('#'+className).select2({
            placeholder: 'Keyword...',
            multiple: multiselect,
            ajax: {
                type: 'GET',
                url: url,
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
    }
    
}

</script>
@stack('scripts')
</body>
</html>
