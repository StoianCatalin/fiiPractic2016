<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Validator;
use Hash;
use Auth;

class AccountController extends Controller
{
    public function registerAccount(Request $request) {
        $informations = array(
            'name' => htmlentities($request->input('name')),
            'email' => $request->input('email'),
            'address' => htmlentities($request->input('address')),
            'phone' => htmlentities($request->input('phone')),
            'password' => $request->input('password')
        );
        $validator =  Validator::make($informations, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'address' => 'required',
            'phone' => 'required|size:10',
            'password' => 'required|min:6'
        ]);
        if (!$validator->fails()){
            $user = new User();
            $user->nume = $informations['name'];
            $user->type = 0;
            $user->email = $informations['email'];
            $user->adresa = $informations['address'];
            $user->telefon = $informations['phone'];
            $user->password = Hash::make($informations['password']);
            $user->save();
            Auth::login($user);
            return "Inregistrarea s-a facut cu succes!";
        }
        else {
            $messages = $validator->errors();
            echo $messages->first();
        }
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/cont');
    }
    public function login(Request $request) {
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], true)) {
            return "Logare efectuata cu success!";
        }
        else return "Email sau parola incorecte!";
    }
}
