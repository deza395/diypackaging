<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/perfil';

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
            'nombre' => ['required', 'string', 'max:255'],
            'username'=> ['required', 'string', 'max:255'],
            'password' => ['required', 'min:8', 'confirmed', 'regex:/DH/'],
            'pais'=> ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],],

            ['required' => 'El campo :attribute es obligatorio',
            'password.regex' => 'La contraseña debe tener las letras DH']);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User

     */
    protected function create(array $data)
    {

     $request = request();
     $profileImage = $request->file('avatar');
     $profileImageName = uniqid('img-') . '.' . $profileImage->extension();
     $profileImage->storePubliclyAs("public/avatars", $profileImageName);

        return User::create([
            'nombre' => $data['nombre'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'pais' => $data['pais'],
            'avatar'=> $profileImageName,
            'provincia' => $data['provincia'],
            'email' => $data['email'],
        ]);
    }
}
