<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('financeira', 'App\Http\Controllers\FinanceiraController@apifinanceira');