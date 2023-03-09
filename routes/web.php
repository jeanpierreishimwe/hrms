<?php
//use App\Http\Controllers\UserController;
use App\Models\User;
use App\Models\salary;
use App\Models\department;
use App\Models\employee;
use App\Models\job_title;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\UserController::class,'getAllData'] ) ;
Route::get('/job_title', [App\Http\Controllers\JobTitleController::class,'getAllJobTitle'] ) ;
Route::post('/job_title/save',[App\Http\Controllers\JobTitleController::class,'saveJobTitle']);
Route::get('/depart', [App\Http\Controllers\DepartmentController::class,'getAllDepartment'] ) ;
Route::post('/departme-nts/save', [App\Http\Controllers\DepartmentController::class,'SaveDepartments'] ) ;
Route::delete('/departme-nts/delete/{id}', [App\Http\Controllers\DepartmentController::class,'DeleteDepartments'] ) ;
Route::get('/departme-nts/edit/{id}', [App\Http\Controllers\DepartmentController::class,'EditingDepartment'] ) ;
Route::post('/departme-nts/edit/updates', [App\Http\Controllers\DepartmentController::class,'UpdateDepartments'] ) ;

    //return User::all();
 // return  User::where('email','email')->get();
 // return  User::where('email','email2@gmail.com')->get()->first();
    //return view('welcome');
//});

Route::get('/user', function () {
    return view('user');
});

Route::get('/job-title', function () {
    return view('job-title');
});

// Route::get('/depart', function () {
//     return view('depart');
// });
Route::get('/icons', function () {
    return view('icons');
});

Route::get('/maps', function () {
    return view('maps');
});

Route::get('/notifications', function () {
    return view('notifications');
});

Route::get('/upgrade-pro', function () {
    return view('upgrade-pro');
});


