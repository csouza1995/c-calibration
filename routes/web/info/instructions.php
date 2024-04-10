<?php

use App\Livewire\Info\InstructionsIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', InstructionsIndex::class)->name('index');
