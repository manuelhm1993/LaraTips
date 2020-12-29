<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/users', function () {
    /**
     * Forma de realizar consultas más elaboradas
     * $model = App\User::where('id', '<=', 30)->where('email', 'like', '%.com');
     * return datatables()->eloquent($model)->toJson();
     */
    return datatables()->eloquent(App\User::query())
                       ->addColumn('btn', 'actions')//Agrega los botones a su columna
                       ->rawColumns(['btn'])//Renderiza los botones
                       ->toJson();
});
