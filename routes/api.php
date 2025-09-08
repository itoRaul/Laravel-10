<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ForumController;

Route::apiResource('/forums', ForumController::class);