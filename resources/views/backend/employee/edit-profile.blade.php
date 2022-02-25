@extends('layouts.backend.backend')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="m-3">
            {!! displayAlert() !!}
        </div>
        <div class="row">
            
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Profile</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('edit-profile-save')}}" method="POST">
                        @csrf
                        
                        <input type="hidden" name="id" value="{{auth()->user()->id}}">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Name" value="{{printOldOrDbValue('name', $auth_user)}}">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="email" value="{{printOldOrDbValue('email', $auth_user)}}">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="number" name="phone_no" class="form-control" placeholder="Phone no" value="{{printOldOrDbValue('phone_no', $auth_user)}}">
                                @error('phone_no')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea name="address" class="form-control">{{printOldOrDbValue('address', $auth_user)}}</textarea>
                                @error('address')
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