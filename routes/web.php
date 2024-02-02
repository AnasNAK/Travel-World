<?php

use App\Models\Adventure;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('home/{recit}',function($test){

//     $path = __DIR__ . "/../resources/adventures/{$test}.html";
//     if(!file_exists($path)){
// dd('we have a biig problem ');

//     }

//     $recit = file_get_contents($path);

// return view('Adventure' , [
//     'recit' => $recit
// ]);


Route::get('/', function () {
    return view('Home',[
        'adventures' => adventure::all()
    ]);
});


Route::get('/home/{adventure}',function(Adventure $adventure){

return view('Adventure',[
    'adventure' => $adventure
    ]);


});
