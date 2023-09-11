<?php

use App\Http\Controllers\ClientRegController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PreschoolInstitution3Controller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrivateController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;


Route::get('/feedback', 'FeedbackController@create')->name('feedback');; // отображение формы обратной связи
Route::post('/feedback', 'FeedbackController@store')->name('feedback');; // отправка данных формы обратной связи

Route::get('/', function () {
    return view('main');
})->name('Main');
Route::post('/', 'ClientRegController@regist')->name('Main');
Route::get('/',  [ReviewController::class, 'index'])->name('Main');

Route::get('/create', function(){
    return view('create');
})->name('create');

Route::get('/AboutUs', function(){
    return view('about_us');
})->name('AboutUs');

Route::get('/Contact', function(){
    return view('contact');
})-> name('Contact');

Route::get('/MemoToParents',function(){
    return view('memo_to_parents');
})-> name('MemoToParents');

Route::get('/GardenInterior', function() {
    return view('garden_interior');
})->name('GardenInterior');

Route::get('/ref', function() {
    return view('ref');
})->name('ref');


Route::get('/OurEmployees', [PreschoolInstitution3Controller::class, 'index']
)->name('OurEmployees');

Route::name('user.')->group(function(){
    Route::view('/private', 'private')->middleware('auth')->name('private');
    Route::get('/login', function(){
        if (Auth::check()) {
            return redirect(route('user.private'));
        }
        return view('login');
    })->name('login');

    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/registration', [RegisterController::class, 'index'])->name('registration')->middleware('token');
    Route::post('/registration', [RegisterController::class, 'save']);

    Route::get('/logout', function(){
        Auth::logout();
        return redirect('/');
    })->name('logout');


    Route::get('private', [PrivateController::class, 'index'])->name('private');
});



