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
                        @if(!empty($standardFare))
                        <input type="hidden" name="id" value="{{$standardFare->id}}">
                        @endif
                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                        <div class="card-body">
                            <div class="form-group">
                                <label>From</label>
                                <input type="text" name="from" class="form-control" placeholder="From" value="{{printOldOrDbValue('from', $standardFare)}}">
                                @error('from')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>To</label>
                                <input type="email" name="to" class="form-control" placeholder="To" value="{{printOldOrDbValue('to', $standardFare)}}">
                                @error('to')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>One way distance</label>
                                <input type="number" name="one_way_distance" class="form-control" placeholder="One way distance" value="{{printOldOrDbValue('one_way_distance', $standardFare)}}">
                                @error('one_way_distance')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Fare</label>
                                <input type="number" name="fare" class="form-control" placeholder="Fare" value="{{printOldOrDbValue('fare', $standardFare)}}">
                                @error('fare')
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