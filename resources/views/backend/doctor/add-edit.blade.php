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
                        <h3 class="card-title">Add Dcotor</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('doctor.save')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label>Mobile Number</label>
                                <input type="number" name="mob" class="form-control" placeholder="Mobile Number">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" placeholder="Address">
                            </div>
                            <div class="form-group">
                                <label>Qualification</label>
                                <input type="text" name="qualification" class="form-control" placeholder="Qualification">
                            </div>
                            <div class="form-group">
                                <label>Date of birth</label>
                                <div class="input-group date">
                                    <input type="date" name="dob" class="form-control datetimepicker-input">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Anniversary Date</label>
                                <div class="input-group date">
                                    <input type="date" name="anniversary_date" class="form-control datetimepicker-input">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Speciality</label>
                                <input type="text" name="speciality" class="form-control" placeholder="Speciality">
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