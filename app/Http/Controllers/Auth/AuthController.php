<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Contracts\Auth\Guard;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\LoginRequest;
use App\Merchant;
use Auth;

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
         
         
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'type' => 'merchant']))
        {
             return redirect('merchant/dash');
        } 
         elseif (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'type' => 'customer']))
        {
             return redirect('/');
        }   
        elseif($this->auth->attempt($request->only('email', 'password'))) {
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
    
    
    
    protected function merchantRegister(Request $request)
    {
        $this->user->name =$request->merchantname;
        $this->user->email = $request->email; 
        $this->user->password = bcrypt($request->password);
        $this->user->phone_number = $request->contactnumber;
        $this->user->type = 'merchant';
        $this->user->save();
        
        $user_id =  $this->user->id;
        
        
        $merchant = new Merchant;
           
        $merchant->shopname  = $request->input('merchantname');
        $merchant->contactnumber = $request->input('contactnumber');
        $merchant->bannerimage = $request->input('bannerimage');
        $merchant->address = $request->input('address');
        $merchant->category = $request->input('category');
        $merchant->email = $request->input('email');
        $merchant->registrationstatus = '0';
        $merchant->user_id = $user_id;
        $merchant->mall_id = 2;
        
            // upload the image //
      $file = $request->file('image');
      $destination_path =  'localhost:8000'.'/public/images/';
      $filename = str_random(6).'_'.$file->getClientOriginalName();
      $file->move($destination_path, $filename);
       
      // save image data into database //
      $merchant->bannerimage = $destination_path . $filename;
      
      $merchant->save();
        
       
      return redirect('users/login')->with('message','Merchant Created'); 
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
