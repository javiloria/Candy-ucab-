<?php

namespace CandyUcab\Http\Controllers\Auth;

use CandyUcab\Http\Controllers\Controller;
use Auth;
use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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
     protected $redirectTo = '/';


public function login(Request $request){
//validando los datos
  $datos  = $this->validate(request(), [
       $this->username() => 'required|string',
       $this->getAuthPassword() => 'required|string'
  ]);
      // valida si lo datos son correctos crea la sesion
  if (Auth::attempt($datos )) {
return redirect('/');
}
//si hay errores entro aca
return back()->withErrors(['u_username'=>trans('auth.failed')])->withInput(request(['u_username']));
}



    // funcion para cerrar sesion
    public function logout(){


        // cierra sesion y devuelve al login
        Auth::logout();

        return redirect('/');
    }

    public function getAuthPassword () {

            return "password";

        }

    public function username(){


        return "u_username";
    }

}
