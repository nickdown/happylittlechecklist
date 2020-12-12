<?php

use App\Models\Checklist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (auth()->check()) {
        return redirect(route('checklists'));
    }

    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/checklists/{checklist}', function (Request $request) {
        // TODO: checklist belongs to currentTeam
        $name = Checklist::query()->find($request->checklist)->name;

        return view('tasks', compact('name'));
    })->name('checklist.show');

    Route::view('/checklists', 'checklists')->name('checklists');
});
