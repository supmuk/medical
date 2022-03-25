@extends('layouts.backend.backend')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dashboard</h1>
            </div>
            <div class="col-sm-6">
                {{-- <a href="{{route('doctor.add')}}" class="float-sm-right btn btn-primary"> Add New </a> --}}
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div id="linechart"></div>
            </div>
            <div class="col-md-6">
                <div id="linechart_doctor"></div>
            </div>
            <div class="col-md-6 mt-5">
                <div id="linechart_chemist"></div>
            </div>
            <div class="col-md-6 mt-5">

            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
    // User
    var visitor = <?php echo $user; ?>;

    if(visitor.length > 1) {
      google.charts.load('current', {'packages':['corechart']});
      
      google.charts.setOnLoadCallback(drawChart);
      
        function drawChart() {
          var data = google.visualization.arrayToDataTable(visitor);
          var options = {
            title: 'User Count',
            curveType: 'function',
            legend: { position: 'bottom' }
          };
          var chart = new google.visualization.ColumnChart(document.getElementById('linechart'));
          chart.draw(data, options);
      }
    }

    // Docotor
    var doctor = <?php echo $doctor; ?>;

    if(doctor.length > 1) {
      google.charts.load('current', {'packages':['corechart']});
      
      google.charts.setOnLoadCallback(drawChartDoctor);
      
        function drawChartDoctor() {
          var data = google.visualization.arrayToDataTable(doctor);
          var options = {
            title: 'Doctor Count',
            curveType: 'function',
            legend: { position: 'bottom' }
          };
          var chart = new google.visualization.ColumnChart(document.getElementById('linechart_doctor'));
          chart.draw(data, options);
      }
    }

    // Chemist
    var chemist = <?php echo $doctor; ?>;

    if(chemist.length > 1) {
      google.charts.load('current', {'packages':['corechart']});
      
      google.charts.setOnLoadCallback(drawChartChemist);
      
        function drawChartChemist() {
          var data = google.visualization.arrayToDataTable(chemist);
          var options = {
            title: 'Chemist Count',
            curveType: 'function',
            legend: { position: 'bottom' }
          };
          var chart = new google.visualization.ColumnChart(document.getElementById('linechart_chemist'));
          chart.draw(data, options);
      }
    }
  </script>
@endpush