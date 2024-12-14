<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::view('/', 'welcome');

//Dashboard after login
Route::get('/dashboard', function(){
        $users = User::where('id', '!=', auth()->user()->id)->get();
        return view('dashboard', [
            'users' => $users
        ]);
    })
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

//Chat Dashboard
Route::get('/chat/{id}', function($id){
    return view('chat', [
        'id' => $id
    ]);
})
->middleware(['auth', 'verified'])
->name('chat');

//ProfileS
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
