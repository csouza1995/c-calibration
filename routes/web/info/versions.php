<?php

use App\Livewire\Info\VersionsIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', VersionsIndex::class)->name('index');
