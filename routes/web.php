<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\OfficeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppointmentsController;

use App\Http\Controllers\EmployeesController;

use App\Http\Controllers\ServicesController;

use App\Http\Controllers\UserController;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/', function () {
//     return view('welcome');
// });

  
//   Route::group(['middleware' => 'guest'], function() {
//   // Маршруты для контроллера "Авторизации"
//   Route::get('login', [LoginController::class, 'index'])->name('login.index');
//   Route::post('login', [LoginController::class, 'store'])->name('login.store');
//       // Маршруты для контроллера "Регистрация"
//   Route::get('register', [AuthController::class, 'index'])->name('register.index');
//   Route::post('register', [AuthController::class, 'store'])->name('register.store');
// });

Route::get('/profile', [OfficeController::class, 'profile'])->name('office.profile');
//     Route::get('/profile/edit', [OfficeController::class, 'editProfile'])->name('office.editProfile');
//     Route::put('/profile/update', [OfficeController::class, 'updateProfile'])->name('office.updateProfile');

// Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware('role:admin');

// Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
//     // Маршруты для административной панели
//     Route::get('/', [AdminController::class, 'index'])->name('admin.index');

//     Route::resource('services', Admin\ServicesController::class);

//     Route::resource('appointments', Admin\AppointmentsController::class);

//     Route::resource('employees', Admin\EmployeesController::class);

//     Route::resource('clients', Admin\UserController::class);
// });



Route::middleware(['admin'])->group(function () {

// Маршруты, доступные только для администраторов
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::resource('services', Admin\ServicesController::class);
Route::resource('appointments', Admin\AppointmentsController::class);
Route::resource('employees', Admin\EmployeesController::class);
Route::resource('users', Admin\UserController::class);


// Маршруты для контроллера "Клиенты"
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{user}',[UserController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit',[UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');

Route::get('users/delete/{id}', [UserController::class, 'destroy']);
Route::delete('/users/delete/{user}', [UserController::class, 'delete'])->name('users.delete');
Route::resource('users', UserController::class);

// Маршруты для контроллера "Сотрудники"
Route::get('/employees', [EmployeesController::class, 'index'])->name('employees.index');
Route::get('/employees/create', [EmployeesController::class, 'create'])->name('employees.create');
Route::post('/employees', [EmployeesController::class, 'store'])->name('employees.store');
Route::get('/employees/{employee}',[EmployeesController::class, 'show'])->name('employees.show');
Route::get('/employees/{employee}/edit',[EmployeesController::class, 'edit'])->name('employees.edit');
Route::put('/employees/{employee}', [EmployeesController::class, 'update'])->name('employees.update');

Route::get('employees/delete/{id}', [EmployeesController::class, 'destroy']);
Route::delete('/employees/delete/{employee}', [EmployeesController::class, 'delete'])->name('employees.delete');
Route::resource('employees', EmployeesController::class);

// Маршруты для контроллера "Услуги"
Route::get('/services', [ServicesController::class, 'index'])->name('services.index');
Route::get('/services/create', [ServicesController::class, 'create'])->name('services.create');
Route::post('/services', [ServicesController::class, 'store'])->name('services.store');
Route::get('/services/{service}',[ServicesController::class, 'show'])->name('services.show');
Route::get('/services/{service}/edit',[ServicesController::class, 'edit'])->name('services.edit');
Route::put('/services/{service}', [ServicesController::class, 'update'])->name('services.update');

Route::get('services/delete/{id}', [ServicesController::class, 'destroy']);
Route::delete('/services/delete/{service}', [ServicesController::class, 'delete'])->name('services.delete');
Route::resource('services', ServicesController::class);

// Маршруты для контроллера "Записи"
Route::get('/appointments', [AppointmentsController::class, 'index'])->name('appointments.index');
Route::get('/appointments/create', [AppointmentsController::class, 'create'])->name('appointments.create');
Route::post('/appointments', [AppointmentsController::class, 'store'])->name('appointments.store');
Route::get('/appointments/{appointment}',[AppointmentsController::class, 'show'])->name('appointments.show');
Route::get('/appointments/{appointment}/edit',[AppointmentsController::class, 'edit'])->name('appointments.edit');
Route::put('/appointments/{appointment}', [AppointmentsController::class, 'update'])->name('appointments.update');

Route::get('appointments/delete/{id}', [AppointmentsController::class, 'destroy']);
Route::delete('/appointments/delete/{appointment}', [AppointmentsController::class, 'delete'])->name('appointments.delete');
Route::resource('appointments', AppointmentsController::class);

});

Auth::routes();

// Маршруты для сброса пароля
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

