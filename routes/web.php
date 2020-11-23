<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    // use App\Models\image;

Route::get('/', function () {

    // $images = image::all();
    // foreach($images as $image){
    //     echo "<h2>Imagen: $image->image_path</h2>";
    //     echo "<p>Descripcion: $image->description</p>";
    //     echo "<h3>Creado Por: {$image->user->name} {$image->user->surname}</h3>";

    //     if (count($image->comments) >= 1 ){
    //         echo "<h3>Comentarios:</h3>";
    //         echo "<ul>";
    //         foreach($image->comments as $coment){
    //             echo "<li>{$coment->user->name} {$coment->user->surname} : $coment->content </li>";
    //         }
    //         echo "</ul>";
    //     }

    //     echo "Likes: ".count($image->likes);
        
    //     echo "<hr>";
    // }
    // die();
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
