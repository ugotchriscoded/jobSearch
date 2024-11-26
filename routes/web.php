<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfferControllers;

Route::get('/', [OfferController::class, 'index'])->name('home');