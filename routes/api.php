<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Employescontroller;
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
Route::resource('Employes',Employescontroller::class);
Route::put('Employes\{id}',[Employescontroller::class,'update']);
Route::delete('Employes\{id}',[Employescontroller::class,'destroy']);
Route::post('/register',[AuthController::class,'logout']);
//protection des root
//Route::group([middleware->['auth:sanctum']] function () {
    
//});

//Route::get('/Employes',[Employescontroller::class,'index']);
Route::post('/Employes',[Employescontroller::class,'store']);
 

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('Congés',CongesController::class);
Route::put('Congés\{id}',[CongesController::class,'update']);
Route::delete('Congés\{id}',[CongesController::class,'destroy']);
Route::post('/Congés',[CongésController::class,'store']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
