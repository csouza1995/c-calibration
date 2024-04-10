<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('info.versions'))->name('index');
