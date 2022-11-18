<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function validateUser(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', '=', $email)->first();
        if (!$user){
            return response()->json(['Success'=>false, 'Message' =>'Login Fail']);
        }
        if (!Hash::check($password, $user->password)){
            return response()->json(['Success'=>false, 'Message'=> 'Login Fail']);
        }
            //return response()->json(['Success'=>true,'Message'=>'Success', 'data'=>$user]);
            return redirect('/home');
    } 

    public function createUser(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $name = $request->input('name');
        DB::table('users')->insert([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);
        return redirect('/home');
        
    }
}
