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

Route::get('/', [App\Http\Controllers\UserController::class,'getAllData'] )->middleware('auth') ;

Route::get('/job_titles', [App\Http\Controllers\JobTitlesController::class,'getAllJobs'] )->middleware('auth') ;
Route::post('/job_data/save', [App\Http\Controllers\JobTitlesController::class,'SaveJobsData'] )->middleware('auth') ;
Route::get('/job_data_s/edit/{id}', [App\Http\Controllers\JobTitlesController::class,'EditingJobDatas'] )->middleware('auth') ;
Route::post('/job_data_s/updating', [App\Http\Controllers\JobTitlesController::class,'UpdatingJobData'] )->middleware('auth') ;
Route::delete('/job_s_data/delete/{id}', [App\Http\Controllers\JobTitlesController::class,'DeleteJobDatas'] )->middleware('auth') ;

Route::get('/depart', [App\Http\Controllers\DepartmentController::class,'getAllDepartment'] )->middleware('auth') ;
Route::post('/departme-nts/save', [App\Http\Controllers\DepartmentController::class,'SaveDepartments'] )->middleware('auth') ;
Route::get('/departme-nts/edit/{id}', [App\Http\Controllers\DepartmentController::class,'EditingDepartment'] )->middleware('auth') ;
Route::post('/departme-nts/edit/updates', [App\Http\Controllers\DepartmentController::class,'UpdateDepartments'] )->middleware('auth') ;
Route::delete('/departme-nts/delete/{id}', [App\Http\Controllers\DepartmentController::class,'DeleteDepartments'] )->middleware('auth');

Route::get('/employee_s', [ App\Http\Controllers\EmployeesController::class,'getAllEmployeesDatas'])->middleware('auth');
Route::post('/add_employee/data/save/register', [ App\Http\Controllers\EmployeesController::class,'RegisterEmployees'])->middleware('auth');
Route::get('/Editing_employee/data/save/Edit/{id}', [ App\Http\Controllers\EmployeesController::class,'EditingEmployeesDatas'])->middleware('auth');
Route::post('/updating/edit_employee/save/update', [ App\Http\Controllers\EmployeesController::class,'UpdatingEmployeesDatas'])->middleware('auth');
Route::delete('/trash/remove_employee/delete/{id}', [ App\Http\Controllers\EmployeesController::class,'DeleteEmployee'])->middleware('auth');

Route::get('/attendence', [ App\Http\Controllers\AttendencesController::class,'getAttendencesEmployees'])->middleware('auth');
Route::post('/Take_Attandance/Save', [ App\Http\Controllers\AttendencesController::class,'MakeEmployeesAttandances'])->middleware('auth');
Route::get('/view_Attandance/watch', [ App\Http\Controllers\AttendencesController::class,'ViewAttendence'])->middleware('auth');

    //return User::all();
 // return  User::where('email','email')->get();
 // return  User::where('email','email2@gmail.com')->get()->first();
    //return view('welcome');
//});

Route::get('/home', function () {
    return redirect('/');
});
Route::get('/user', function () {
    return view('user');
})->middleware('auth');



Route::get('/job-title', function () {
    return view('job-title');
})->middleware('auth');

// Route::get('/depart', function () {
//     return view('depart');
// });
Route::get('/icons', function () {
    return view('icons');
})->middleware('auth');

Route::get('/maps', function () {
    return view('maps');
})->middleware('auth');

Route::get('/notifications', function () {
    return view('notifications');
})->middleware('auth');

Route::get('/upgrade-pro', function () {
    return view('upgrade-pro');
})->middleware('auth');


