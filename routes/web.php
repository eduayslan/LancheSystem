<?php

use App\Livewire\Auth\Login;
use App\Models\Admin;
use App\Models\Cliente;
use Illuminate\Support\Facades\Route;



Route::get('/login', Login::class);