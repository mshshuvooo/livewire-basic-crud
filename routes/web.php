<?php

use App\Livewire\Components\Login;
use App\Livewire\Components\ShowStudent;
use App\Livewire\Components\Signup;
use App\Livewire\Components\StoreStudent;
use App\Livewire\Components\StudentList;
use App\Livewire\Components\UpdateStudent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['auth'],], function () {
    Route::get('/students/create', StoreStudent::class);
    Route::get('/students', StudentList::class)->name('students');
    Route::get('/students/{student}', ShowStudent::class);
    Route::get('/students/{student}/edit', UpdateStudent::class);
});

Route::group(['middleware' => ['guest']], function () {
    Route::get('/signup', Signup::class);
    Route::get('/login', Login::class)->name('login');
});

// Route::get('/login', function () {
//     if (Auth::user()) {
//         return redirect()->to('/students');
//     }
// });
