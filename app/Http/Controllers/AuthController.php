<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function signIn(Request $request){

        $email = filter_var($request->email,FILTER_VALIDATE_EMAIL);
        $password = $request->password;
 
        $credentials = ['email'=> $email,'password'=>$password];

        //verifica se o email existe
        if (!Auth::attempt($credentials)) {
            return response()->json(['erro'=>'Email e ou senha inválidos'],404);
        }

        if (Auth::User()->role !== '1') {
            return response()->json(['erro'=>'Acesso não autorizado'],403);
        }

        $token = Auth::User()->createToken('taxibraz');
        $loggedUser = Auth::User();
        $loggedUser['token'] = $token->plainTextToken;
        if (!Auth::User()->hasVerifiedEmail()){
           return response()->json($loggedUser,401); 
        } else {
            return response()->json($loggedUser,200); 
        }

    }

    public function signOut (Request $request) {

        //Auth::User()->currentAccessToken()->delete();
        Auth::User()->tokens()->delete();
        return response()->json(['mensagem'=>'User logged out'],200);
    }
}
