<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/position', function () {
    return view('position');
})->middleware(['auth', 'verified'])->name('position');

Route::get('/roles', function () {
    return view('roles');
})->middleware(['auth', 'verified'])->name('roles');

Route::get('/designations', function () {
    return view('designation');
})->middleware(['auth', 'verified'])->name('designations');

Route::get('/team_members', function () {
    return view('team_members');
})->middleware(['auth', 'verified'])->name('team_members');

Route::get('/calendar', function () {
    return view('calendar');
})->middleware(['auth', 'verified'])->name('calendar');

Route::get('/kanban', function () {
    return view('kanban');
})->middleware(['auth', 'verified'])->name('kanban');

Route::get('/inbox', function () {
    return view('inbox');
})->middleware(['auth', 'verified'])->name('inbox');

Route::get('/compose', function () {
    return view('compose');
})->middleware(['auth', 'verified'])->name('compose');

Route::get('/read-mail', function () {
    return view('read-mail');
})->middleware(['auth', 'verified'])->name('read-mail');

Route::get('/view_project', function () {
    return view('projects');
})->middleware(['auth', 'verified'])->name('projects');

Route::get('/create_project', function () {
    return view('project-add');
})->middleware(['auth', 'verified'])->name('project-add');

Route::get('/project_edit', function () {
    return view('project-edit');
})->middleware(['auth', 'verified'])->name('project-edit');

Route::get('/project-details', function () {
    return view('project-detail');
})->middleware(['auth', 'verified'])->name('project-detail');

Route::get('/Project Management', function () {
    return view('Project Management');
});

Route::get('/Settings', function () {
    return view('Settings');
});

Route::get('/Objective', function () {
    return view('Objective');
});


Route::middleware('auth')->group(function () {
    Route::get('/roles', [RolesController::class, 'index'])->name('roles.index');
    Route::Post('/roles', [RolesController::class, 'store'])->name('roles.store');
    Route::put('/roles{roles}', [RolesController::class, 'update'])->name('roles.update');
    Route::get('/roles/{id}', [RolesController::class, 'show'])->name('roles.show');
});


require __DIR__.'/auth.php';
