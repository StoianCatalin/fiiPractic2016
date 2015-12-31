<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Validator;
use Hash;
use Auth;
use App\Role;

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
            $user->username = $informations['name'];
            $user->role_id = Role::where('role', 'user')->first()->id;
            $user->email = $informations['email'];
            $user->adress = $informations['address'];
            $user->phone = $informations['phone'];
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

    public function updateUserInfo(Request $request){
        $informations = array(
            'name' => htmlentities($request->input('name')),
            'email' => $request->input('email'),
            'address' => htmlentities($request->input('address')),
            'phone' => htmlentities($request->input('phone')),
            'password' => $request->input('password'),
            'repeatPassword' => $request->input('repeatPassword'),
        );
        $validator =  Validator::make($informations, [
            'name' => 'required',
            'email' => 'required|email|exists:users,email',
            'address' => 'required',
            'phone' => 'required|size:10',
            'password' => 'min:6',
            'repeatPassword' => 'same:password'
        ]);

        if(!$validator->fails()){
            if(Auth::check()){
                Auth::user()->username = $informations['name'];
                Auth::user()->adress = $informations['address'];
                Auth::user()->phone = $informations['phone'];
                Auth::user()->password = Hash::make($informations['password']);
                Auth::user()->save();
                return "Modificarea datelor personale a fost efectuata cu succes!";
            }else{
                return "Eroare!";
            }
        }else{
            $messages = $validator->errors();
            echo $messages->first();
        }
    }
}
