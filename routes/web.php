<?php

use Illuminate\Support\Facades\Route;
use App\Models\Pothole;
use App\Models\Roadblock;
use App\Models\Help;
use App\Http\Controllers\PotholeController;
use App\Http\Controllers\RoadblockController;
use App\Http\Controllers\HelpController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/addPothole', function () {
    Pothole::create(['lng'=>'312','lat'=>'421', 'number of reports'=>3, 'user'=>'249fj', 'grid'=>3]);  
});

Route::get('getPotholesGrid/{grid}', [PotholeController::class, 'getGrid']);
Route::get('addPothole/{lat},{lng},{user},{grid}', [PotholeController::class, 'add']); // TODO: change to POST?
Route::get('addPotholeExisisting/{id},{user}', [PotholeController::class, 'addExisisting']); // TODO: change to POST?
Route::get('removePothole/{id},{user}', [PotholeController::class, 'removePothole']);

Route::get('getRoadblocksGrid/{grid}', [RoadblockController::class, 'getGrid']);
Route::get('addRoadblock/{lat},{lng},{user},{grid}', [RoadblockController::class, 'add']);
Route::get('removeRoadblock/{id}', [RoadblockController::class, 'remove']);

Route::get('getHelpGrid/{grid}', [HelpController::class, 'getGrid']);
Route::get('addHelp/{lat},{lng},{user},{grid}', [HelpController::class, 'add']);
Route::get('removeHelp/{id},{user}', [HelpController::class, 'remove']);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
