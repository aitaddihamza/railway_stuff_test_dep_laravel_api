<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/test_laravel_api', function () {
    $user = new User([
        "name" => "test",
        "eamil", "test@gmail.com",
        "password" => bcrypt("password"),
    ]);
    $user->save();
    return "the user has been created successfully" . $user->name;
});
