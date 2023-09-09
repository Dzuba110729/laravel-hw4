<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Добавьте метод для создания токенов
    public function createToken(Request $request)
    {
        $user = Auth::user();
        $token = $user->createToken('API Token')->accessToken;

        return response()->json(['token' => $token], 200);
    }

    // Другие методы контроллера
}
