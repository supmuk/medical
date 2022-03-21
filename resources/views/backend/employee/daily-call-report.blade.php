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
                        @if(!empty($dailyReport))
                            <input type="hidden" name="id" value="{{$dailyReport->id}}">
                        @endif
                        @csrf
                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Headquarter Name</label>
                                <select name="headquarter_name[]" id="headquarter_name" class="form-control headquarter-select2" multiple="multiple" data-url="{{route('verified-registered-employee')}}">
                                    @if(!empty($dailyReport) && !empty($dailyReport->headquarter_name))
                                        @foreach(explode(',',$dailyReport->headquarter_name) as $key => $val)
                                            <option value="{{$val}}" selected> {{fetchingSingleValue('headquarter', 'id', $val, 'name')}} </option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('headquarter_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Place of working</label>
                                <select name="place_of_working[]" id="place_of_working" class="form-control select2-ajax" data-multiselect="true" multiple="multiple" data-url="{{route('list-of-place')}}">
                                    @if(!empty($dailyReport) && !empty($dailyReport->place_of_working))
                                        @foreach(explode(',',$dailyReport->place_of_working) as $key => $val)
                                            <option value="{{$val}}" selected> {{fetchingSingleValue('place_of_working', 'id', $val, 'name')}} </option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('place_of_working')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Working with</label>
                                <select name="working_with[]" id="working_with" class="form-control select2-ajax" data-multiselect="true" multiple="multiple" data-url="{{route('verified-registered-employee')}}">
                                    @if(!empty($dailyReport) && !empty($dailyReport->working_with))
                                        @foreach(explode(',',$dailyReport->working_with) as $key => $val)
                                            <option value="{{$val}}" selected> {{fetchingSingleValue('users', 'id', $val, 'name')}} </option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('working_with')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Visited Doctor Name</label>
                                <select name="visited_doctor_name[]" id="visited_doctor_name" class="form-control select2-ajax" data-multiselect="true" multiple="multiple" data-url="{{route('doctor-list')}}">
                                    @if(!empty($dailyReport) && !empty($dailyReport->visited_doctor_name))
                                        @foreach(explode(',',$dailyReport->visited_doctor_name) as $key => $val)
                                            <option value="{{$val}}" selected> {{fetchingSingleValue('doctors', 'id', $val, 'name')}} </option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('visited_doctor_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Visited Chemist Name</label>
                                <select name="visited_chemist_name[]" id="visited_chemist_name" class="form-control select2-ajax" data-multiselect="true" multiple="multiple" data-url="{{route('chemist-list')}}">
                                    @if(!empty($dailyReport) && !empty($dailyReport->visited_chemist_name))
                                        @foreach(explode(',',$dailyReport->visited_chemist_name) as $key => $val)
                                            <option value="{{$val}}" selected> {{fetchingSingleValue('chemists', 'id', $val, 'name')}} </option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('visited_chemist_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Personel Order Booking</label>
                                <textarea name="pob" id="pob" class="form-control">{{printOldOrDbValue('pob', $dailyReport)}}</textarea>
                                @error('pob')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- <div class="form-group">
                                <label>Stockist Visited</label>
                                <input type="text" name="stockist_visited" class="form-control" placeholder="Stockist Visited">
                                @error('stockist_visited')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div> --}}
                            <div class="form-group">
                                <label>Product</label>
                                <select class="form-control select2" name="product[]" multiple="multiple" value="">
                                    @if(!empty($dailyReport) && !empty($dailyReport->product))
                                    @foreach(explode(',',$dailyReport->product) as $key => $val)
                                        <option value="{{$val}}" selected> {{fetchingSingleValue('products', 'id', $val, 'name')}} </option>
                                    @endforeach
                                    @endif
                                </select>
                                @error('product')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Direct Allowance</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="direct_allowance" id="exampleRadios1" value="{{$directAllowance->hq}}">
                                    <label class="form-check-label" for="exampleRadios1">
                                      Headquarter
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="direct_allowance" id="exampleRadios2" value="{{$directAllowance->ehq}}">
                                    <label class="form-check-label" for="exampleRadios2">
                                       Ex Headquarter
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="direct_allowance" id="exampleRadios3" value="{{$directAllowance->outstation}}">
                                    <label class="form-check-label" for="exampleRadios3">
                                      Outstation
                                    </label>
                                </div>
                                
                                </div>
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