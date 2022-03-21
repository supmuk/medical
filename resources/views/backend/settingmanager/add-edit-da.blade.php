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
                        <h3 class="card-title">Add Direct Allowance</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('fare_amount.directAllowanceSave')}}" method="POST">
                        @csrf
                        @if(!empty($directAllowanceData))
                            <input type="hidden" name="id" value="{{$directAllowanceData->id}}">
                        @endif
                        <div class="card-body">
                            <div class="form-group">
                                <label>HQ</label>
                                <input type="number" min="0" name="hq" class="form-control" placeholder="Enter Amount" value="{{printOldOrDbValue('hq', $directAllowanceData)}}" required>
                                @error('hq')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Ex - HQ</label>
                                <input type="number" min="0" name="ehq" class="form-control" placeholder="Enter Amount" value="{{printOldOrDbValue('ehq', $directAllowanceData)}}" required>
                                @error('ehq')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Outstation</label>
                                <input type="number" min="0" name="outstation" class="form-control" placeholder="Enter Amount" value="{{printOldOrDbValue('outstation', $directAllowanceData)}}" required>
                                @error('outstation')
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