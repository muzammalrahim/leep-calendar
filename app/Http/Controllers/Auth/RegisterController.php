<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\admin;
use App\Models\member;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


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
        $this->middleware('guest:admin');
        $this->middleware('guest:member');
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
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    
    public function showAdminRegisterForm()
    {
        return view('auth.register', ['url' => 'admin']);
    }

    public function showMemberRegisterForm()
    {
        return view('auth.register', ['url' => 'member']);
    }    
    protected function createAdmin(Request $request)
    {
        // dd($request->all());
        $this->validator($request->all())->validate();
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->intended('login/admin');
    }
    protected function createMember(Request $request)
    {
        $this->validator($request->all())->validate();
        Member::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->intended('login/member');
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

    // Registering User Here

    protected function create(array $data)
    {
        // dd($data);

        $role = array(2,3);

        if (in_array($data['role'], $role)) {
            return User::create([
                'fname' => $data['fname'],
                'lname' => $data['lname'],
                'email' => $data['email'],
                'role_id' => $data['role'],
                'password' => Hash::make($data['password'])
            ]);
        }
        else{
            return redirect('/');
        }
        
    }
 


}
