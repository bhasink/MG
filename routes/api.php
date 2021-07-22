<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::post('/invoice-generate-view',[ApiController::class, 'invoice_generate'])->name('invoice_generate_view_api');

Route::post('/contactless-payment',[ApiController::class, 'contactless_payment'])->name('contactless_payment');



