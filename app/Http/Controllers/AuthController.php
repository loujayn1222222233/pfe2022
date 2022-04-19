<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function register(Request $request){
        $fields = $request->validate([
            'name'=>'reqired|string',
            'email'=>'reqired|string|unique:users,email',
            'password'=>'reqired|string|confirmed'
        ]);
        $user =User::create([
            'name'=>$fields['name'],
            'email'=>$fields['email'],
            'password'=>bcrypt($fields['password']),
        ]);
        $token =$user->createToken('myapptoken')->plainTextToken;
        $response =[
            'user'=>$user,
            'token'=>$token
        ];
        return response($response,201);

    }
    public function logout(Request $request){
        auth()->user()->tokens()->delete();
        return[
            'message'=>'logged out'
        ];
    }
    
        public function login (Request $request){
            $fields = $request->validate([
                
                'email'=>'reqired|string',
                'password'=>'reqired|string'
            ]);
            
            
            //check email
            $user=User::where('email',$fields['email'])->first();
            //check password
            if(!$user ||!hash::check($fields['password'],$user->password)){
                return response(['message'=>'bad creds'],401);
            }
            $token =$user->createToken('myapptoken')->plainTextToken;
            $response =[
                'user'=>$user,
                'token'=>$token
            ];
            return response($response,201);
    
        }
       
    }
    
