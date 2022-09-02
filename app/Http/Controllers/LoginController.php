<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function verLogin()
    {
        return view('auth.login');

    }
    public function login(Request $request)
    {
        if($user=User::where('email','=',$request->email)->first()){

            if(Hash::check($request->password,$user->password)){

                $credenciales  = [
                    'email'     =>$request->email,
                    'password'  =>$request->password
                ];
                $token=$user->createToken('auth_token')->plainTextToken;
                    if(Auth::attempt($credenciales)){
                            Alert::success('Inicio de Sesión Exitoso');
                            return redirect()->route('?', compact('user'));
                    }else{
                    return  redirect()->route('verLogin');
                    }
            }else{
                Alert::error('Inicio de Sesión Incorrecto');
                return redirect()->route('verLogin');
            }
        }else{
              Alert::error('Inicio de Sesión Incorrecto');
              return redirect()->route('verLogin');
        }  
    }

    public function logout(){
          Auth::logout();
          Alert::warning('Cerró de Sesión');
          return redirect()->route('verLogin');
    }

}

