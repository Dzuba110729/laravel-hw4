<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {
        // Вернуть список всех автомобилей
    }

    public function show($id)
    {
        // Вернуть информацию о конкретном автомобиле по $id
    }

    public function store(Request $request)
    {
        // Создать новый автомобиль на основе данных из $request
    }

    public function update(Request $request, $id)
    {
        // Обновить информацию о конкретном автомобиле по $id и данным из $request
    }

    public function destroy($id)
    {
        // Удалить автомобиль по $id
    }
}
