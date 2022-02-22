@extends('layouts.backend.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('employee.save') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{printOldOrDbValue('name', $user)}}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{printOldOrDbValue('email', $user)}}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="phone_no" class="col-md-4 col-form-label text-md-end">{{ __('Mobile Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone_no" type="number" class="form-control @error('phone_no') is-invalid @enderror" name="phone_no" value="{{printOldOrDbValue('phone_no', $user)}}" >

                                @error('phone_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <textarea name="address" id="address" class="form-control">{{printOldOrDbValue('address', $user)}}</textarea>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="designation" class="col-md-4 col-form-label text-md-end">{{ __('Designation') }}</label>

                            <div class="col-md-6">
                                <input id="designation" type="text" class="form-control @error('designation') is-invalid @enderror" name="designation" value="{{printOldOrDbValue('designation', $user)}}" >

                                @error('designation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="headquarter_name" class="col-md-4 col-form-label text-md-end">{{ __('Headquarter Name') }}</label>

                            <div class="col-md-6">
                                <input id="headquarter_name" type="text" class="form-control @error('headquarter_name') is-invalid @enderror" name="headquarter_name" value="{{printOldOrDbValue('headquarter_name', $user)}}" >

                                @error('headquarter_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="aadhar_card" class="col-md-4 col-form-label text-md-end">{{ __('Aadhar Card') }}</label>
                            <div class="col-md-6">
                                <input id="aadhar_card" type="file" class="form-control @error('aadhar_card') is-invalid @enderror" name="aadhar_card">

                                @error('aadhar_card')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                @if(!empty($user && $user->aadhar_card))
                                    <img src="{{asset('storage/user/addhar/'.$user->aadhar_card)}}" alt="" height="120px" width="120px" class="img-responsive"/>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="pan_card" class="col-md-4 col-form-label text-md-end">{{ __('PAN Card') }}</label>
                            <div class="col-md-6">
                                <input id="pan_card" type="file" class="form-control @error('pan_card') is-invalid @enderror" name="pan_card">

                                @error('pan_card')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                @if(!empty($user && $user->pan_card))
                                    <img src="{{asset('storage/user/pan/'.$user->pan_card)}}" alt="" height="120px" width="120px" class="img-responsive"/>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="driving_voter_card" class="col-md-4 col-form-label text-md-end">{{ __('Driving / Voter ID Card') }}</label>
                            <div class="col-md-6">
                                <input id="driving_voter_card" type="file" class="form-control @error('driving_voter_card') is-invalid @enderror" name="driving_voter_card">

                                @error('driving_voter_card')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                @if(!empty($user && $user->driving_voter_card))
                                    <img src="{{asset('storage/user/driving_voter_card/'.$user->driving_voter_card)}}" alt="" height="120px" width="120px" class="img-responsive"/>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="active" class="col-md-4 col-form-label text-md-end">{{ __('Active') }}</label>
                            <div class="col-md-6">
                                <input id="active" type="checkbox" name="active" {{ ($user->is_active) ? "checked" : '' }}>
                            </div>
                        </div>

                        {{-- <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        {{-- <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div> --}}

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
