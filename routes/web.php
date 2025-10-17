<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolYearController;

Route::resource("school_years", SchoolYearController::class);
