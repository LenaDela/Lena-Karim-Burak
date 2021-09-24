<?php

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

Route::get('/', function () {
    return view('welcome');
});

// // 1.Get /
// //  '/' c'est le localhost
// Route::get('/', function () {
//     return view('welcome');
// });

// // 2.Get tests
// Route::get('tests', function () {
//     return view('welcome');
// });

// // 3.Get tests/1
// Route::get('tests/1', function () {
//     return view('welcome');
// });

// // 4.Get tests/10
// Route::get('tests/10', function () {
//     return view('welcome');
// });

// // 5.Get tests id
// Route::get('tests/{id}', function ($id) {
//     return view('welcome');
// });

// // 6.Get users
// Route::get('users', function () {
//     return 'Page des utilisateurs';
// });

// // 7.Get users name
// Route::get('users/{name}', function ($name) {
//     return "Page de l'utilisateur";
// })->whereAlpha('name');

// // 8.Post kids
// Route::post('kids', function () {
//     return view('welcome');
// });

// // 9.Delete kids
// Route::delete('kids', function () {
//     return view('welcome');
// });

// // 10.Put kids
// Route::put('kids', function () {
//     return view('welcome');
// });

// // 11.Patch kids
// Route::patch('kids', function () {
//     return view('welcome');
// });

// // 12.Get kids
// Route::get('kids', function () {
//     return view('welcome');
// });

// PARTIE B
// Route::get('/', function () {
//         return view('welcome');
//     });

// Route::get('users/{name}/kids', function () {
//         return "Page de l'utilisateur";
//     });

// Route::get('users/{name}/kids/{namekid}', function ($name, $namekid) {
//         return view('kids', ['nom'=>$name, 'nomKid'=>$namekid]);
//     });


// PARTIE C
// Route::get('/', function () {
//         return view('welcome');
//     });

// Route::get('/', function () {
//         return view('sommaire');
//     });

// // PARTIE D
// // 18
// Route::get('users/{name}/kids', function () {
//         return "Page de l'utilisateur";
//     });
// // 19

// // 20

// // PARTIE E
// // Route::fallback(funcMon	()	{	
// //     return view('welcome');
// // });

// // PARTIE F
// // 21
// Route::get('admin/users', function () {
//     return "Page admin";
// });

// // 22
// Route::get('admin/posts', function () {
//     return "Page admin";
// });

// // 23
// Route::get('admin/comments', function () {
//     return "Page admin";
// });

// // 24
// Route::get('admin/plan', function () {
//     return "Page admin";
// });


// Route::get('/', function () {
//     return view('enfant');
// });

// Route::get('enfant2', function () {
//     return view('enfant2');
// });

// // route qui appelle la fonction du controleur
// Route::get('vue1', "App\Http\Controllers\ProjectController@index");

// Route::get('vue2/{param}', "App\Http\Controllers\ProjectController@test");

// get pour recuper
Route::get('posts', "App\Http\Controllers\PostController@index");

Route::get('addPost', "App\Http\Controllers\PostController@create");

// route qui envoie dans la fonction store qui se trouve dans le fichier PostController
Route::post('storePost', "App\Http\Controllers\PostController@store")->name('storePost');

Route::get('findPost/{id}', "App\Http\Controllers\PostController@show")->name('findPost');

