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
                        <h3 class="card-title">Add Chemist</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('chemist.save')}}" method="POST">
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
                                <label>Owner Name</label>
                                <input type="text" name="owner_name" class="form-control" placeholder="Owner Name">
                            </div>
                            <div class="form-group">
                                <label>Product</label>
                                <input type="text" name="product" class="form-control" placeholder="Product">
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