<?php

use Illuminate\Support\Facades\Route;
use Srikanth240369\Inspire\Controllers;
use Srikanth240369\Inspire\Controllers\InspirationController;

Route::get('inspire', InspirationController::class);