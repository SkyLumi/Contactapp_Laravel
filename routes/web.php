<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use Faker\Factory as Faker;

Route::get('/', function () {
    return redirect('/login');
});

Route::view('/login', 'auth.login');
Route::view('/register', 'auth.register');

Route::get("/contact", function () {
    $contacts = [];
    $faker = Faker::create();
    for ($i = 1; $i <= 100; $i++) {
        $contacts[] = [
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'phone' => $faker->phoneNumber
        ];
    };
    return view("contact.contact", ['contacts' => $contacts]);
});
