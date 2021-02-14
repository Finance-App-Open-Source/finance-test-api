<?php

use Illuminate\Support\Facades\Route;
use  \App\Models\wallet;

Route::get('/', function () {
    $wallets = wallet::findOrFail(1);
    return $wallets->entries;
});
