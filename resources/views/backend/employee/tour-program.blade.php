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
                        <h3 class="card-title">Add Tour Program</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('employee.tour-program-save')}}" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Date of tour</label>
                                <input type="date" name="date_of_tour" class="form-control" placeholder="Date of tour" value="{{printOldOrDbValue('date_of_tour', $tour)}}">
                                @error('date_of_tour')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Place</label>
                                <input type="text" name="place" class="form-control" placeholder="place" value="{{printOldOrDbValue('place', $tour)}}">
                                @error('place')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Working with</label>
                                <select name="working_with[]" id="working_with" class="form-control select2-ajax" data-multiselect="true" multiple="multiple" data-url="{{route('verified-registered-employee')}}">
                                    @if(!empty($tour) && !empty($tour->working_with))
                                    @foreach(explode(',',$tour->working_with) as $key => $val)
                                        <option value="{{$val}}" selected> {{fetchingSingleValue('users', 'id', $val, 'name')}} </option>
                                    @endforeach
                                    @endif
                                </select>
                                @error('working_with')
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