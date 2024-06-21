<?php
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin as ADMIN;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified']);

Route::middleware(['auth','admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::prefix('/admin')->group(function() {
    Route::get('/', [ADMIN\DashboardController::class, "index"])->name('dashboard');;
    Route::get('/jabatan', [ADMIN\PositionController::class, "index"])->name('positions.index');
    Route::get('/jabatan/create', [ADMIN\PositionController::class, "create"])->name('positions.create');
    Route::post('/jabatan/store', [ADMIN\PositionController::class, "store"])->name('positions.store');
    Route::delete('/jabatan/delete/{id}', [ADMIN\PositionController::class, "delete"])->name('position.delete');
    Route::get('/jabatan/edit/{id}', [ADMIN\PositionController::class, "edit"])->name('position.edit');

    Route::get('/genres', [ADMIN\GenresController::class, "index"])->name('genres.index');
    Route::get('/genres/create', [ADMIN\GenresController::class, "create"])->name('genres.create');
    Route::post('/genres/store', [ADMIN\GenresController::class, "store"])->name('genres.store');
    Route::delete('/genres/delete/{id}', [ADMIN\GenresController::class, "delete"])->name('genre.delete');

    Route::get('/genres/edit/{id}', [ADMIN\GenresController::class, "edit"])->name('genre.edit');
    Route::get('/book', [ADMIN\BooksController::class, "index"])->name('books.index');
    Route::get('/book/create', [ADMIN\BooksController::class, "create"])->name('books.create');
    Route::post('/book/store', [ADMIN\BooksController::class, "store"])->name('books.store');
    Route::delete('/book/delete/{id}', [ADMIN\BooksController::class, "delete"])->name('book.delete');
    Route::get('/book/edit/{id}', [ADMIN\BooksController::class, "edit"])->name('book.edit');

    
    Route::get('/members', [ADMIN\MembersController::class, 'index'])->name('members.index');
    Route::get('/members/create', [ADMIN\MembersController::class, 'create'])->name('members.create');
    Route::post('/members/store', [ADMIN\MembersController::class, 'store'])->name('members.store');
    Route::get('/members/edit/{id}', [ADMIN\MembersController::class, 'edit'])->name('members.edit');
    Route::put('/members/update/{id}', [ADMIN\MembersController::class, 'update'])->name('members.update');
    Route::delete('/members/{id}', [ADMIN\MembersController::class, 'destroy'])->name('members.destroy');


    Route::get('/employees', [ADMIN\EmployeesController::class, "index"])->name('employees.index');
    Route::get('/employees/create', [ADMIN\EmployeesController::class, "create"])->name('employees.create');
    Route::post('/employees/store', [ADMIN\EmployeesController::class, "store"])->name('employees.store');
    Route::delete('/employees/delete/{id}', [ADMIN\EmployeesController::class, "delete"])->name('employee.destroy');
    Route::get('/employees/edit/{id}', [ADMIN\EmployeesController::class, "edit"])->name('employee.edit');


    Route::get('/users', [ADMIN\UsersController::class, 'index'])->name('users.index');
    Route::get('/users/create', [ADMIN\UsersController::class, 'create'])->name('users.create');
    Route::post('/users/store', [ADMIN\UsersController::class, 'store'])->name('users.store');
    Route::get('/users/edit/{id}', [ADMIN\UsersController::class, 'edit'])->name('users.edit');
    Route::put('/users/update/{id}', [ADMIN\UsersController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [ADMIN\UsersController::class, 'destroy'])->name('users.destroy');
});
require __DIR__.'/auth.php';


