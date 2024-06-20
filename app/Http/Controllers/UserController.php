<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                "email" => ["required", "string", "email"],
                "password" => ["required", "string", "min:6"],
            ],
            [],
            [
                "email" => "Email address",
                "password" => "Password",
            ]
        );

        if ($validator->fails()) {
            return response()->json(
                [
                    "status" => false,
                    "message" => $validator->errors(),
                    "data" => [],
                ],
                200
            ); // Pass Validation Errors
        }

        if ($request->email == 'vipin@quickbookproadvisors.us' AND $request->password == 'Admin@8285')
        {
            $request->session()->put('loggedIn', true);
        }

        // return redirect('user/dashboard');
        return response()->json([
            'status' => true,
            'message' => 'Logged In',
            'data' => 'user/dashboard'
        ]);
    }

    public function logout(Request $request)
    {
        $request->session()->forget('loggedIn');

        return redirect('login');
    }
}
