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
                        <h3 class="card-title">Add Fare Amount</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('fare_amount.save')}}" method="POST">
                        @csrf
                        @if(!empty($fare_amount))
                            <input type="hidden" name="id" value="{{$fare_amount->id}}">
                        @endif
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="number" min="0" name="amount" class="form-control" placeholder="Enter Amount" value="{{printOldOrDbValue('amount', $fare_amount)}}" required>
                                @error('name')
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