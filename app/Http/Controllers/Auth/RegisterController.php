<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

            'phone_no' => ['required'],
            'address' => ['required'],
            'designation' => ['required'],
            'headquarter_name' => ['required'],
            'aadhar_card' => ['required'],
            'pan_card' => ['required'],
            'driving_voter_card' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $request = request();
        if ($request->hasFile('aadhar_card')) {
            $request->aadhar_card->store('user/addhar', 'public');
        }
        if ($request->hasFile('pan_card')) {
            $request->pan_card->store('user/pan', 'public');
        }
        if ($request->hasFile('driving_voter_card')) {
            $request->driving_voter_card->store('user/driving_voter_card', 'public');
        }

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone_no' => $request->phone_no,
            'address' => $request->address,
            'designation' => $request->designation,
            'headquarter_name' => $request->headquarter_name,
            'aadhar_card' => $request->aadhar_card->hashName(),
            'pan_card' => $request->pan_card->hashName(),
            'driving_voter_card'=>$request->driving_voter_card->hashName(),
        ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        return redirect($this->redirectPath())->with('message', 'Your account has been created successfully ! Please wait for approval from Admin.');
    }

    protected function redirectTo()
    {
        session(['message', 'Your account has been created successfully ! Please wait for approval from Admin.']);
        return '/login';
    }
}
