<?php
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
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

Route::get('/', 'StudentController@live') ;
 

// Admin panel---------------------------------------------------------------------------------


Route::get('/admincheck','AdminController@adminchck')->name('admin.check');
Route::get('/adminlogin','Admincontroller@index');
Route::get('/admin','Admincontroller@main');



Route::get('/assignments','AssignmentController@index');
Route::post('/store/assignments', 'AssignmentController@store')->name('assignment.save');
Route::get('/assignmentshow','AssignmentController@show');
Route::get('/assignmenu','AssignmentController@menu');
Route::get('/submissions','AssignmentController@submissions');
Route::get('edit/assignments/{id}', 'AssignmentController@edit');
Route::get('update/assignments/{id}', 'AssignmentController@update');


Route::get('/showassign','SubmissionController@showassign');
Route::get('/submit','SubmissionController@submithere');
Route::post('/store/submission', 'SubmissionController@store')->name('submission.save');



Route::get('/parents','ParentsController@create');
Route::post('/incomesave', 'ParentsController@send')->name('email.send');


Route::get('/incometab','IncometabController@create');
Route::post('/store/incomesave', 'IncometabController@store')->name('income.save');
Route::get('/incomeshow','IncometabController@show');
Route::post('/incomesearch', 'IncometabController@searchsalary')->name('searchsalary');
Route::get('edit/income/{id}', 'IncometabController@edit');
Route::get('update/income/{id}', 'IncometabController@update');




Route::get('/schedulemenu','ScheduleController@index');
Route::get('/schedule','ScheduleController@create');
Route::post('/store/schedule', 'ScheduleController@store')->name('schedule.save');
Route::get('/scheduleshow','ScheduleController@show');
Route::get('edit/schedule/{id}', 'ScheduleController@edit');
Route::get('update/schedule/{id}', 'ScheduleController@update');



Route::get('/marksheetmenu','MarksheetController@index');
Route::get('/marksheet','MarksheetController@create');
Route::post('/store/marksheet', 'MarksheetController@store')->name('marksheet.save');
Route::get('/showmarksheet','MarksheetController@show');
Route::post('/searchmarks', 'MarksheetController@search')->name('search');
Route::get('edit/marksheet/{id}', 'MarksheetController@edit');
Route::get('update/marksheet/{id}', 'MarksheetController@update');


Route::get('/noticemenu','NoticeController@index');
Route::get('/notice','NoticeController@create');
Route::post('/store/notice', 'NoticeController@store')->name('notice.save');
Route::get('/noticeshow','NoticeController@show');


Route::get('/attend','AttendanceController@index');
Route::post('/store/attend', 'AttendanceController@store')->name('attend.save');
Route::get('/searchadmin','AttendanceController@search'); 
Route::get('/attendview','AttendanceController@show');


Route::get('/assistcheck','AssistanceController@check');


Route::get('/regstudents','AdminController@checkregstudent');
Route::get('edit/User/{id}', 'AdminController@edit');
Route::get('update/User/{id}', 'AdminController@update');
Route::get('delete/User/{id}', 'AdminController@destroy')->name('destroy.User');


Route::get('/assistancemenu','AssistanceController@index');
Route::get('/assistance','AssistanceController@create');
Route::post('/store/assistance', 'AssistanceController@store')->name('assistance.save');
Route::get('/assistanceshow','AssistanceController@show');
Route::get('edit/assistance/{id}', 'AssistanceController@edit');
Route::get('update/assistance/{id}', 'AssistanceController@update');
Route::get('/reports','StudapplyController@show');



Route::get('/studentmsgs','PanelController@studentmsgs');






// Route::post('/assitance', 'MarksheetController@search')->name('search');


Route::get('/index','NotesController@index')->name('notes.index');
Route::get('/create','NotesController@create');
Route::post('/store/notes', 'NotesController@store')->name('notes.store');
// Route::get('delete/notes/{id}', 'NotesController@destroy');
Route::get('/viewnotes','StudentController@viewnotes');


// Route::get('edit/notes/{id}', 'NotesController@edit')->name('notes.edit');
// Route::get('update/notes/{id}', 'NotesController@update')->name('notes.update');
// Route::get('delete/notes/{id}', 'NotesController@destroy')->name('notes.destroy');










// Admin panel---------------------------------------------------------------------------------


// Student Panel---------------------------------------------------------------------------------



// Route::get('/admincheck','StudentController@validatechck')->name('checknow');
Route::get('/sms','SmsController@index')->name('sms');

Auth::routes();
Route::get('/student','StudentController@index')->middleware('auth');

Route::get('/schedulestu','StudentController@schedule');
Route::get('/seemore','StudentController@seemore');

Route::get('/stumenu','AssistanceController@stumenu');
Route::get('/stushow','StudentController@stushow');
Route::get('/assistance','StudentController@assistmenu');
Route::get('/studapply','StudapplyController@stuapply');
Route::post('/store/applynow', 'StudapplyController@appstore')->name('studapply.save');
Route::get('/appview','StudapplyController@show');
Route::get('edit/studapply/{id}', 'StudapplyController@edit');
Route::get('update/studapply/{id}', 'StudapplyController@update');
Route::get('delete/studapply/{id}', 'StudapplyController@destroy')->name('destroy.studapply');

Route::get('/marksview','StudentController@marksview');
Route::get('/viewattend','StudentController@attendance');
Route::get('/noticeshow','StudentController@notice');
Route::get('/search','StudentController@search'); 
Route::get('/payments','StudentController@payment');




Route::post('/store/newmsg', 'PanelController@store')->name('student.newmsg');
Route::get('/newmsg','PanelController@create');
Route::get('/showpanel','StudentController@show');
Route::get('/showmsgs','StudentController@mymsgs');
Route::get('edit/mymsgs/{id}', 'StudentController@editmsg');
Route::get('update/mymsgs/{id}', 'StudentController@updatemsg');
Route::get('delete/mymsgs/{id}', 'StudentController@destroymsg');





Route::get('/home', 'HomeController@index')->name('home');
