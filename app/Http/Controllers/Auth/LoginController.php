<?php

namespace App\Http\Controllers\Auth;

use auth;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    public function store(Request $request){
        $input = $request->all();
         $this->validate($request, [
             'email' => 'required',
             'password' => 'required',
         ]);
        if(auth::attempt(array('email' => $input['email'], 'password' => $input['password']))){
               if(auth::user())
               {
                   //dd('ADMIN');
                   return  redirect()->route('dashboard.index');
               }
             }else{
                //dd('errors');
            return  redirect()->back()->with('Error','Adresse email ou mot de passe erroné');
            //response()->json(['error'=>true]);
            //
        }

        
    }
    public function delete($id){
     $user = User::find($id);
     $user->logout();
    }
}
