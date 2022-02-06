@extends('layouts.backend.backend')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Standard Fare Chart</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('employee.standard-fare-chart-save')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>From</label>
                                <input type="text" name="from" class="form-control" placeholder="From">
                            </div>
                            <div class="form-group">
                                <label>To</label>
                                <input type="email" name="to" class="form-control" placeholder="To">
                            </div>
                            <div class="form-group">
                                <label>One way distance</label>
                                <input type="number" name="one_way_distance" class="form-control" placeholder="One way distance">
                            </div>
                            <div class="form-group">
                                <label>Fare</label>
                                <input type="text" name="fare" class="form-control" placeholder="Fare">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>
@endsection