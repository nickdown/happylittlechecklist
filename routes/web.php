<?php

use App\Models\Checklist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/checklists/{checklist}', function (Request $request) {
        // TODO: checklist belongs to currentTeam
        $name = Checklist::find($request->checklist)->name;

        return view('tasks', compact('name'));
    })->name('checklist.show');
    Route::view('/checklists', 'checklists')->name('checklists');
});
