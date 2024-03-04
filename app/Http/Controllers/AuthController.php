<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Rules\PhoneValidationRule;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        $token = $user->createToken('ds')->accessToken;
        return response()->json(['token' => $token]);
    }

    return response()->json(['error' => 'Unauthorized'], 401);
}

public function register(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => ['required', 'string'],
        'phone' => ['required', 'string', 'max:15', Rule::unique('users', 'phone')->ignore($request->user()), new PhoneValidationRule],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string','min:4'],
    ]);

    if ($validator->fails()) {
        return response()->json($validator->errors(), 400);
    }

    $user = new User([
        'name' => $request->name,
        'phone' => $request->phone,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);

    $user->save();


    return response()->json(['message' => 'Вы успешно зарегистрированы!']);
}

public function logout(Request $request)
{
    $request->user()->token()->revoke();
    return response()->json(['message' => 'Вы успешно вышли из системы.']);
}


}
