<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Contracts\Auth\Guard;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\LoginRequest;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    
    
      /**
     * User model instance
     * @var User
     */
    protected $user; 
    
    /**
     * For Guard
     *
     * @var Authenticator
     */
    protected $auth;

   
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Guard $auth, User $user)
    {
        $this->user = $user; 
        $this->auth = $auth;
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    
    
   
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  
     * @return User
     */
  protected function postRegister(Request $request) {
      
      
        $this->user->name = $request->name;
        $this->user->email = $request->email;
        $this->user->password = bcrypt($request->password);
        $this->user->phone_number = $request->phonenumber;
        $this->user->type = 'customer';
        $this->user->save();

        
       
       return redirect('/'); 
        
       // return redirect('/');
    }

    
     protected function postLogin(LoginRequest $request) {
         echo 'i am in login request';
        if ($this->auth->attempt($request->only('email', 'password'))) {
            return redirect('/');
        }
 
        return redirect('login/index')->withErrors([
            'email' => 'The email or the password is invalid. Please try again.',
        ]);
    }
    
     /* Register get post methods */
    protected function getRegister() {
         return view('pages.user');
    }

    
    
    public function loginview()
    {
        return view('pages.auth.login');
    }
    
    
    
     /**
     * Log the user out of the application.
     *
     * @return Response
     */
    protected function getLogout()
    {
        $this->auth->logout();
        return redirect('users/login');
    }
}
