<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class RegisterController extends Controller
{
    public function verRegister()
    {
       return view('auth.register');
    }
    public function register(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required',
            'especialidad' =>'required',
            'password'=>'required',
        ]);

        if(!$name=User::where('name','=',$request->name)->first()){   
            if($validator){
                
                $user   =  new User;
                $user->name=$request->name;
                $user->email=$request->email;
                $user->especialidad = 'Cliente';
                $user->password=Hash::make($request->password);
                $user->assignRole('Cliente');
                $user->save();
                Alert::success('Registro Exitoso');
                return redirect()->route('verLogin'); 
            }else{
                Alert::error('Falta un campo');
                return view('auth.register');
            }
        }else{
            Alert::error('El nombre de usuario ya existe');
            return view('auth.register');
        }

    
                
    }
}
