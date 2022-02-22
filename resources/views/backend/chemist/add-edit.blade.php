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
                        @if(!empty($chemist))
                            <input type="hidden" name="id" value="{{$chemist->id}}">
                        @endif
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter name" value="{{printOldOrDbValue('name', $chemist)}}">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter name" value="{{printOldOrDbValue('email', $chemist)}}">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Mobile Number</label>
                                <input type="number" name="mob" class="form-control" placeholder="Mobile Number" value="{{printOldOrDbValue('mob', $chemist)}}">
                                @error('mob')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" placeholder="Address" value="{{printOldOrDbValue('address', $chemist)}}">
                                @error('address')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Owner Name</label>
                                <input type="text" name="owner_name" class="form-control" placeholder="Owner Name" value="{{printOldOrDbValue('owner_name', $chemist)}}">
                                @error('owner_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Product</label>
                                {{-- <input type="text" name="product[]" id="autoCompleteSelect2" placeholder="Product" value="{{printOldOrDbValue('product', $chemist)}}" multiple="multiple" /> --}}
                                <select class="form-control select2" name="product[]" multiple="multiple" value="{{printOldOrDbValue('product', $chemist)}}">
                                    @if(!empty($chemist) && !empty($chemist->product))
                                    @foreach(explode(',',$chemist->product) as $key => $val)
                                        <option value="{{$val}}" selected> {{fetchingSingleValue('products', 'id', $val, 'name')}} </option>
                                    @endforeach
                                    @endif
                                </select>
                                @error('product')
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