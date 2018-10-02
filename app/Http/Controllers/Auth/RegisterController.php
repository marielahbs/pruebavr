<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\role;
use App\position;
use App\department;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


class RegisterController extends Controller {

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
    protected $redirectTo = '/';

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
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {

        return view('pages.register');
    }

    protected function getRoles(){
        $roles = role::all();
        $selectedRole = User::first()->role_id;
        return view('auth.register', compact('roles', 'selectedRole'));
    }

    protected function getPosition(){
        $pos = position::all();
        $selectedPos = User::first()->position_id;
        return view('auth.register', compact('pos', 'selectedPos'));
    }

    protected function getDepartments(){
        $dep = department::all();
        $selectedDep = User::first()->department_id;
        return view('auth.register', compact('dep', 'selectedDep'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'     => 'required|string|max:255',
            'fatherlastname'     => 'required|string|max:255',
            'motherlastname'     => 'required|string|max:255',
            'birthdate'     => 'required|required|after:1900-01-01',
            'gender'     => 'required|string|max:255',
            'phonenumber'     => 'required|string|max:255',
            'address'     => 'required|string|max:255',
            'arrivaldate'     => 'required|required|after:1900-01-01',
            'registrationdate'     => 'required|required|after:1900-01-01',
            'role_id'     => 'required|not_in:0',
            'position_id'     => 'required|not_in:0',
            'department_id'     => 'required|not_in:0',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name'     => $data['name'],
            'fatherlastname'     => $data['fatherlastname'],
            'motherlastname'     => $data['motherlastname'],
            'birthdate'     => $data['birthdate'],
            'gender'     => $data['gender'],
            'phonenumber'     => $data['phonenumber'],
            'address'     => $data['address'],
            'arrivaldate'     => $data['arrivaldate'],
            'registrationdate'     => $data['arrivaldate'],
            'role_id'     => $data['role_id'],
            'position_id'     => $data['position_id'],
            'department_id'     => $data['department_id'],

            'email'    => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

    }
}
