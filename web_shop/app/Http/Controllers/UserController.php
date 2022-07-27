<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function registerUser(StoreUserRequest $request)
    {
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
//        $user->username = $request->username;
        $user->email = $request->email;
        $user->photo = $request->photo;
        $user->admin = 0;
        $user->verified = 0;
        $user->password = bcrypt($request->password);
        $user->funds = 1000;


        $user->save();
        $accessToken = $user->createToken('authToken');

        return response()->json([
            'success' => true,
            'message' => 'User created successfully!',
            'data' => $user,
            'access_token' => $accessToken->plainTextToken,
            'token_type' => 'Bearer'
        ], 200);
    }

    public function login(Request $request):  JsonResponse
    {

        $user = User::where('email','=',$request->email)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            return response()->json([
                'success' => false,
                'message' => 'Wrong Credentials!',
                'req' => $request->all(),
            ], 200);
        }
        else{
            $accessToken = $user->createToken('authToken');
            return response()->json([
                'success' => true,
                'message' => 'Logged in!',
                'user' => $user,
                'access_token' => $accessToken,
                'token_type' => 'Bearer'
            ], 200);
        }

    }



}
