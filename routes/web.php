<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\projectController;
use App\Http\Controllers\userController;

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
    return view('landing');
});
/*Route::get('/login', function () {
    return view('login');
});
*/
//Auth::routes();
Route::resource('project', projectController::class);
Route::get('deleteproject', [projectController::class, 'delete'])->name('project.delete');
Route::get('toedit', [projectController::class, 'toedit'])->name('project.toedit');
Route::get('update', [projectController::class, 'updatestatus'])->name('project.updatestatus');
Route::get('status/{project}', [projectController::class, 'status'])->name('project.status');
Route::get('topdf', [projectController::class, 'topdf'])->name('project.topdf');
//Route::get('progress_report/{project}', [projectController::class, 'progress_report'])->name('project.progress_report');
//Route::put('projects/generateProjectPDF/{projectId}', [ProjectController::class, 'generateProjectPDF'])->name('project.generateProjectPDF');
//Route::post('projects/storereport/{project_id}', [ProjectController::class, 'storereport'])->name('project.storereport');
// Route to display the progress report form
Route::get('progress_report/{project}', [ProjectController::class, 'progress_report'])->name('project.progress_report');

// Route to handle progress report form submission
Route::match(['post', 'put'], 'projects/storereport/{project}', [ProjectController::class, 'storereport'])->name('project.storereport');
Route::get('reportpage/{project}', [ProjectController::class, 'reportpage'])->name('project.reportpage');

// Route to generate the PDF
Route::get('projects/generateProjectPDF/{projectId}', [ProjectController::class, 'generateProjectPDF'])->name('project.generateProjectPDF');

Route::get('requestform', [ProjectController::class,'requestform'])->name('project.requestform');
Route::post('/project/storerequest', [ProjectController::class,'storerequest'])->name('project.storerequest');
Route::get('viewRequests', [ProjectController::class,'viewRequests'])->name('project.requests');


//Route::get('/project/{projectId}/pdf', [ProjectController::class, 'generateProjectPDF'])->name('project.pdf');
/*Route::get('/project/{projectId}/submit-progress-report', [ProjectController::class, 'showProgressReportForm'])
    ->name('project.showProgressReportForm');

Route::post('/project/{projectId}/store-progress-report', [ProjectController::class, 'storeProgressReport'])
    ->name('project.storeProgressReport');

Route::get('/project/{projectId}/pdf', [ProjectController::class, 'generateProjectPDF'])
    ->name('project.pdf');

Route::get('/project/{projectId}/progress-reports', [ProjectController::class, 'showProgressReports'])
    ->name('project.progressReports');
*/
    
Route::resource('user', userController::class);
Route::get('deleteuser', [userController::class, 'deleteuser'])->name('user.delete');
Route::get('makeedit', [userController::class, 'makeedit'])->name('user.makeedit');

/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function () {
    Route::resource('lecturer', LecturerController::class);

    // only userLevel ==0 can access this route
    Route::resource('subject', SubjectController::class);
});*/

Route::get('superadmin',function(){
    return view('superadmin');
})->name('superadmin')->middleware('superadmin');

Route::get('manager',function(){
    return view('manager');
})->name('manager')->middleware('manager');

Route::get('leaddeveloper',function(){
    return view('leaddeveloper');
})->name('leaddeveloper')->middleware('leaddeveloper');

Route::get('developer',function(){
    return view('developer');
})->name('developer')->middleware('developer');

Route::get('owner',function(){
    return view('owner');
})->name('owner')->middleware('owner');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');