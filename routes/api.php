<?php

use App\Http\Controllers\ProjectsController;
use App\Models\Project;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ProjectsController::class)->group(function () {
    Route::get('/projects', 'index');
    Route::post('/projects', 'store');
    Route::get('/projects/{project}', 'show');
});
