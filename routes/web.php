<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\AdminEmployeesController;
use App\Http\Controllers\AdminServicesController;
use App\Http\Controllers\AdminAppointmentsController;


use App\Http\Controllers\OfficeController;

use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\ServicesController;


Route::get('/home', [HomeController::class, 'index'])->name('home.index');

// Route::get('/', function () { return view('home.index'); });



Route::get('/profile', [OfficeController::class, 'profile'])->name('office.profile');
//     Route::get('/profile/edit', [OfficeController::class, 'editProfile'])->name('office.editProfile');
//     Route::put('/profile/update', [OfficeController::class, 'updateProfile'])->name('office.updateProfile');


//__________________Маршруты, доступные только для гостя__________________\\
Auth::routes();
Route::resource('services', ServicesController::class);
Route::resource('appointments', AppointmentsController::class);

//__________________Маршруты, доступные только для администраторов__________________\\
Route::middleware(['admin'])->group(function () {
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

//__________________Маршруты для контроллера "Клиенты"__________________\\
Route::get('admin/users', [AdminUsersController::class, 'index'])->name('user.index');
Route::get('admin/users/create', [AdminUsersController::class, 'create'])->name('user.create');
Route::post('admin/users', [AdminUsersController::class, 'store'])->name('user.store');
Route::get('admin/users/{user}',[AdminUsersController::class, 'show'])->name('user.show');
Route::get('admin/users/{user}/edit',[AdminUsersController::class, 'edit'])->name('user.edit');
Route::put('admin/users/{user}', [AdminUsersController::class, 'update'])->name('user.update');
Route::get('admin/users/delete/{id}', [AdminUsersController::class, 'destroy']);
Route::delete('admin/users/delete/{user}', [AdminUsersController::class, 'delete'])->name('user.delete');

//__________________Маршруты для контроллера "Сотрудники"__________________\\
Route::get('admin/employees', [AdminEmployeesController::class, 'index'])->name('employee.index');
Route::get('admin/employees/create', [AdminEmployeesController::class, 'create'])->name('employee.create');
Route::post('admin/employees', [AdminEmployeesController::class, 'store'])->name('employee.store');
Route::get('admin/employees/{employee}',[AdminEmployeesController::class, 'show'])->name('employee.show');
Route::get('admin/employees/{employee}/edit',[AdminEmployeesController::class, 'edit'])->name('employee.edit');
Route::put('admin/employees/{employee}', [AdminEmployeesController::class, 'update'])->name('employee.update');
Route::get('admin/employees/delete/{id}', [AdminEmployeesController::class, 'destroy']);
Route::delete('admin/employees/delete/{employee}', [AdminEmployeesController::class, 'delete'])->name('employee.delete');

//__________________Маршруты для контроллера "Услуги"__________________\\
Route::get('admin/services', [AdminServicesController::class, 'index'])->name('service.index');
Route::get('admin/services/create', [AdminServicesController::class, 'create'])->name('service.create');
Route::post('admin/services', [AdminServicesController::class, 'store'])->name('service.store');
Route::get('admin/services/{service}',[AdminServicesController::class, 'show'])->name('service.show');
Route::get('admin/services/{service}/edit',[AdminServicesController::class, 'edit'])->name('service.edit');
Route::put('admin/services/{service}', [AdminServicesController::class, 'update'])->name('service.update');
Route::get('admin/services/delete/{id}', [AdminServicesController::class, 'destroy']);
Route::delete('admin/services/delete/{service}', [AdminServicesController::class, 'delete'])->name('service.delete');

//__________________Маршруты для контроллера "Записи"__________________\\
Route::get('admin/appointments', [AdminAppointmentsController::class, 'index'])->name('appointment.index');
Route::get('admin/appointments/create', [AdminAppointmentsController::class, 'create'])->name('appointment.create');
Route::post('admin/appointments', [AdminAppointmentsController::class, 'store'])->name('appointment.store');
Route::get('admin/appointments/{appointment}',[AdminAppointmentsController::class, 'show'])->name('appointment.show');
Route::get('admin/appointments/{appointment}/edit',[AdminAppointmentsController::class, 'edit'])->name('appointment.edit');
Route::put('admin/appointments/{appointment}', [AdminAppointmentsController::class, 'update'])->name('appointment.update');
Route::get('admin/appointments/delete/{id}', [AdminAppointmentsController::class, 'destroy']);
Route::delete('admin/appointments/delete/{appointment}', [AdminAppointmentsController::class, 'delete'])->name('appointment.delete');

});



// Маршруты для контроллера "Записи"
// Route::get('/appointments', [AppointmentsController::class, 'index'])->name('appointments.index');
// Route::get('/appointments/create', [AppointmentsController::class, 'create'])->name('appointments.create');
// Route::post('/appointments', [AppointmentsController::class, 'store'])->name('appointments.store');
// Route::get('/appointments/{appointment}',[AppointmentsController::class, 'show'])->name('appointments.show');
// Route::get('/appointments/{appointment}/edit',[AppointmentsController::class, 'edit'])->name('appointments.edit');
// Route::put('/appointments/{appointment}', [AppointmentsController::class, 'update'])->name('appointments.update');

// Route::get('appointments/delete/{id}', [AppointmentsController::class, 'destroy']);
// Route::delete('/appointments/delete/{appointment}', [AppointmentsController::class, 'delete'])->name('appointments.delete');

// });


// use App\Http\Controllers\UserController;
// use App\Http\Controllers\EmployeesController;
// Маршруты для контроллера "Клиенты"
// Route::get('/users', [UserController::class, 'index'])->name('users.index');
// Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
// Route::post('/users', [UserController::class, 'store'])->name('users.store');
// Route::get('/users/{user}',[UserController::class, 'show'])->name('users.show');
// Route::get('/users/{user}/edit',[UserController::class, 'edit'])->name('users.edit');
// Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');

// Route::get('users/delete/{id}', [UserController::class, 'destroy']);
// Route::delete('/users/delete/{user}', [UserController::class, 'delete'])->name('users.delete');
// Route::resource('users', UserController::class);

// Маршруты для контроллера "Сотрудники"
// Route::get('/employees', [EmployeesController::class, 'index'])->name('employees.index');
// Route::get('/employees/create', [EmployeesController::class, 'create'])->name('employees.create');
// Route::post('/employees', [EmployeesController::class, 'store'])->name('employees.store');
// Route::get('/employees/{employee}',[EmployeesController::class, 'show'])->name('employees.show');
// Route::get('/employees/{employee}/edit',[EmployeesController::class, 'edit'])->name('employees.edit');
// Route::put('/employees/{employee}', [EmployeesController::class, 'update'])->name('employees.update');

// Route::get('employees/delete/{id}', [EmployeesController::class, 'destroy']);
// Route::delete('/employees/delete/{employee}', [EmployeesController::class, 'delete'])->name('employees.delete');
// Route::resource('employees', EmployeesController::class);

// Маршруты для контроллера "Услуги"
// Route::get('/services', [ServicesController::class, 'index'])->name('services.index');

// Route::get('/services/create', [ServicesController::class, 'create'])->name('services.create');
// Route::post('/services', [ServicesController::class, 'store'])->name('services.store');
// Route::get('/services/{service}',[ServicesController::class, 'show'])->name('services.show');
// Route::get('/services/{service}/edit',[ServicesController::class, 'edit'])->name('services.edit');
// Route::put('/services/{service}', [ServicesController::class, 'update'])->name('services.update');

// Route::get('services/delete/{id}', [ServicesController::class, 'destroy']);
// Route::delete('/services/delete/{service}', [ServicesController::class, 'delete'])->name('services.delete');


// Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
//     // Маршруты для административной панели
//     Route::get('/', [AdminController::class, 'index'])->name('admin.index');

//     Route::resource('services', Admin\ServicesController::class);

//     Route::resource('appointments', Admin\AppointmentsController::class);

//     Route::resource('employees', Admin\EmployeesController::class);

//     Route::resource('clients', Admin\UserController::class);

// });


  
//   Route::group(['middleware' => 'guest'], function() {
//   // Маршруты для контроллера "Авторизации"
//   Route::get('login', [LoginController::class, 'index'])->name('login.index');
//   Route::post('login', [LoginController::class, 'store'])->name('login.store');
//       // Маршруты для контроллера "Регистрация"
//   Route::get('register', [AuthController::class, 'index'])->name('register.index');
//   Route::post('register', [AuthController::class, 'store'])->name('register.store');
// });



// Маршруты для сброса пароля
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

