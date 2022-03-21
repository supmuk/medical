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
                        <h3 class="card-title">Add Place</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('place-of-working.save')}}" method="POST">
                        @if(!empty($placeOfWorking))
                            <input type="hidden" name="id" value="{{$placeOfWorking->id}}">
                        @endif
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter name" value="{{printOldOrDbValue('name', $placeOfWorking ?? '')}}">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="headquarter_name" class="col-form-label text-md-end">{{ __('Headquarter Name') }}</label>
    
                                    {{-- <input id="headquarter_name" type="text" class="form-control @error('headquarter_name') is-invalid @enderror" name="headquarter_name" value="{{printOldOrDbValue('headquarter_name', $user)}}" > --}}
                                    <select class="form-control headquarter-select2" name="headquarter_name">
                                        
                                        @if(!empty($placeOfWorking) && !empty($placeOfWorking->headquarter_name))
                                            @foreach(explode(',',$placeOfWorking->headquarter_name) as $key => $val)
                                                <option value="{{$val}}" selected> {{fetchingSingleValue('headquarter', 'id', $val, 'name')}} </option>
                                            @endforeach
                                        @endif
                                    </select>
    
                                    @error('headquarter_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    
                            </div>

                            <div class="">
                                <input type="checkbox" name="is_active" {{printOldOrDbValue('is_active', $placeOfWorking ?? '') ? 'checked="checked"' : ''}} >
                                <label> Is Active </label>
                            </div>
                        </div>

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