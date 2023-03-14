<?php
//use App\Http\Controllers\UserController;
use App\Models\User;
use App\Models\salary;
use App\Models\employee;
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

Route::get('/job_titles', [App\Http\Controllers\JobTitlesController::class,'getAllJobs'] ) ;
Route::post('/job_data/save', [App\Http\Controllers\JobTitlesController::class,'SaveJobsData'] ) ;
Route::get('/job_data_s/edit/{id}', [App\Http\Controllers\JobTitlesController::class,'EditingJobDatas'] ) ;
Route::post('/job_data_s/updating', [App\Http\Controllers\JobTitlesController::class,'UpdatingJobData'] ) ;
Route::delete('/job_s_data/delete/{id}', [App\Http\Controllers\JobTitlesController::class,'DeleteJobDatas'] ) ;

Route::get('/depart', [App\Http\Controllers\DepartmentController::class,'getAllDepartment'] ) ;
Route::post('/departme-nts/save', [App\Http\Controllers\DepartmentController::class,'SaveDepartments'] ) ;
Route::get('/departme-nts/edit/{id}', [App\Http\Controllers\DepartmentController::class,'EditingDepartment'] ) ;
Route::post('/departme-nts/edit/updates', [App\Http\Controllers\DepartmentController::class,'UpdateDepartments'] ) ;
Route::delete('/departme-nts/delete/{id}', [App\Http\Controllers\DepartmentController::class,'DeleteDepartments'] );

Route::get('/employee_s', [ App\Http\Controllers\EmployeesController::class,'getAllEmployeesDatas']);
Route::post('/add_employee/data/save/register', [ App\Http\Controllers\EmployeesController::class,'RegisterEmployees']);
Route::get('/Editing_employee/data/save/Edit/{id}', [ App\Http\Controllers\EmployeesController::class,'EditingEmployeesDatas']);
Route::post('/updating/edit_employee/save/update', [ App\Http\Controllers\EmployeesController::class,'UpdatingEmployeesDatas']);
Route::delete('/trash/remove_employee/delete/{id}', [ App\Http\Controllers\EmployeesController::class,'DeleteEmployee']);


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


