<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Добавьте метод для вывода информации об авторизованном пользователе
    public function show(Request $request)
    {
        return $request->user();
    }

    // Другие методы контроллера
}
