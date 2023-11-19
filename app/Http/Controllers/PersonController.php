<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use Illuminate\Support\Facades\Hash;


class PersonController extends Controller
{
    public function login(Request $request){
        $user = Person::where(['email' => $request->email])->first();

        if(!$user || (!Hash::check($request->password,$user->password))){
            return "username or password is not matched";
        }
        else{
            $request->session()->put('user', $user);
            return redirect('/');
        }
    }
}