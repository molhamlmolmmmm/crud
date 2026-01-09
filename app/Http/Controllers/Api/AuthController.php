<?php
namespace App\Http\Controllers\Api;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function register(Request $request){
        $validateDate = $request->validate([
            'name'=>'required|string|max:250',
            'email'=>'required|string|email:rfc,dns|max:250|unique:users,email',
            'password'=>'required|string|min:8|confirmed '
        ]);
        $user = User::create([
            'name'=>$validateDate['name'],
            'email'=>$validateDate['email'],
            'password'=>Hash::make($validateDate['email']),
        ]);
        $token = $user->createToken($validateDate['email'])->plainTextToken;
        $response=[
            'status'=>'success',
            'message'=>'User is created successfully',
            'data'=>[
                'token'=>$token,
                'user'=>$user,
            ],
        ];
        return response()->json($response,201);
    }
    public function login(Request $request){
         $request->validate([
            'email'=>'required|string|email',
            'password'=>'required|string',
         ]);
         $user =User::where('email',$request->email)->first();
         if(!$user || !Hash::check($request->password,$user->password)){
            return response()->json([
                'status=>failed',
                'message=>Invalid credentials',
            ],401);
         }
         $token=$user->createToken('token-name')->plainTextToken;
         $response=[
            'status'=>'success',
            'message'=>'user is logged in successfully',
            'data'=>[
                'token'=>$token,
                'user'=>$user,
            ],
        ];
        return response()->json($response,200);
    }
    public function logout(Request $request){
        auth()->user()->tokens()->delete();
        return response()->json([
            'status'=>'success',
            'message'=>'user is looged out successfully',
        ],200);
    }
    
}
