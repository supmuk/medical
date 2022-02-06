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
                        <h3 class="card-title">Add Daily Call Report</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
      
                    <form action="{{route('employee.daily-call-report-save')}}" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Headquarter Name</label>
                                <input type="text" name="headquarter_name" class="form-control" placeholder="Headquarter Name">
                                @error('headquarter_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Place of working</label>
                                <input type="text" name="place_of_working" class="form-control" placeholder="Place of working">
                                @error('place_of_working')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Working with</label>
                                <input type="text" name="working_with" class="form-control" placeholder="Working with">
                                @error('working_with')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Visited Doctor Name</label>
                                <input type="text" name="visited_doctor_name" class="form-control" placeholder="Visited Doctor Name">
                                @error('visited_doctor_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Visited Chemist Name</label>
                                <input type="text" name="visited_chemist_name" class="form-control" placeholder="Visited Chemist Name">
                                @error('visited_chemist_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Personel Order Booking</label>
                                <input type="text" name="pob" class="form-control" placeholder="Personel Order Booking">
                                @error('pob')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Stockist Visited</label>
                                <input type="text" name="stockist_visited" class="form-control" placeholder="Stockist Visited">
                                @error('stockist_visited')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
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