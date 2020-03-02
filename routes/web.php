<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

// user side
Route::get('/', function () {
    return view('index');
});

Route::get('/event_detail', function () {
    return view('event_detail');
});

Route::get('/demo', function () {
    return view('demo');
});

Route::get('/contact_us', function () {
    return view('contact_us');
});
Route::get('/demo1', function () {
    return view('demo1');
});

// client side

Route::get('/AdminPanel', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('AdminPanel.dashboard');
});

Route::get('/department', function () {
    return view('AdminPnel.department');
});

Route::get('/add_department', function () {
    return view('AdminPanel.add_department');
});

Route::get('/dept_detail', function () {
    return view('AdminPanel.dept_detail');
});
Route::get('/event', function () {
    return view('AdminPanel.event');
});
Route::get('/add_event', function () {
    return view('AdminPanel.add_event');
});
Route::get('/add_sub_event', function () {
    return view('AdminPanel.add_sub_event');
});
Route::get('/sub_event', function () {
    return view('AdminPanel.sub_event');
});
Route::get('/library', function () {
    return view('AdminPanel.library');
});

Route::get('/add_library', function () {
    return view('AdminPanel.add_library');
});

Route::get('/professor', function () {
    return view('AdminPanel.professor');
});
Route::get('/add_professor', function () {
    return view('AdminPanel.add_professor');
});
Route::get('/add_achivement', function () {
    return view('AdminPanel.add_achivement');
});
Route::get('/achivement', function () {
    return view('AdminPanel.achivement');
});
Route::get('/profile', function () {
    return view('AdminPanel.profile');
});

Route::get('/staff', function () {
    return view('AdminPanel.staff');
});

Route::get('/student', function () {
    return view('AdminPanel.student');
});

Route::get('/add_tnp', function () {
    return view('AdminPanel.add_tnp');
});
Route::get('/tnp', function () {
    return view('AdminPanel.tnp');
});
Route::get('/add_administration', function () {
    return view('AdminPanel.add_administration');
});
Route::get('/administration', function () {
    return view('AdminPanel.administration');
});

// UserSide TnP Route

Route::get('/contect_as', function () {
    return view('contect_as');
});

Route::get('/prof_profile', function () {
    return view('prof_profile');
});

Route::get('/career_as', function () {
    return view('career_as');
});

Route::get('/tnpinvitationletter', function () {
    return view('TnP.tnpinvitationletter');
});

Route::get('/placementprocedure', function () {
    return view('TnP.placementprocedure');
});

Route::get('/acadnindusexpo', function () {
    return view('TnP.acadnindusexpo');
});

Route::get('/recruterinterprog', function () {
    return view('TnP.recruterinterprog');
});

Route::get('/listofrecruiter', function () {
    return view('TnP.listofrecruiter');
});

Route::get('/tips', function () {
    return view('TnP.tips');
});

//User Side About us Route

Route::get('/deskofchairman', function () {
    return view('About_us.deskofchairman');
});

Route::get('/deskofprincipal', function () {
    return view('About_us.deskofprincipal');
});

Route::get('/scet', function () {
    return view('About_us.scet');
});

Route::get('/deskofchairman', function () {
    return view('About_us.deskofchairman');
});

Route::get('/deskofchairman', function () {
    return view('About_us.deskofchairman');
});

Route::get('/deskofchairman', function () {
    return view('About_us.deskofchairman');
});

Route::get('/deskofchairman', function () {
    return view('About_us.deskofchairman');
});

Route::get('/deskofchairman', function () {
    return view('About_us.deskofchairman');
});

Route::get('/scetcommittees', function () {
    return view('About_us.scetcommittees');
});

//User Side About us/Scet Committees Route

Route::get('/internalcommittees', function () {
    return view('About_us.internalcommittees');
});

Route::get('/cwdc', function () {
    return view('About_us.cwdc');
});

Route::get('/anti-raggingcell', function () {
    return view('About_us.anti-raggingcell');
});

Route::get('/grievanceredressalcommittee', function () {
    return view('About_us.grievanceredressalcommittee');
});

Route::get('/disabilityresourcecenter', function () {
    return view('About_us.disabilityresourcecenter');
});

Route::get('/sarvajanikeducationsociety', function () {
    return view('About_us.sarvajanikeducationsociety');
});

Route::get('/sesmanagement', function () {
    return view('About_us.sesmanagement');
});

Route::get('/scetgoverningbody', function () {
    return view('About_us.scetgoverningbody');
});

//User Side Academics Route

Route::get('/programsoffered', function () {
    return view('Academics.programsoffered');
});

Route::get('/mouscollaborations', function () {
    return view('Academics.mouscollaborations');
});

Route::get('/researchdevelopmentactivities', function () {
    return view('Academics.researchdevelopmentactivities');
});

Route::get('/grants', function () {
    return view('Academics.grants');
});

Route::get('/awards', function () {
    return view('Academics.awards');
});

Route::get('/RandD', function () {
    return view('Academics.RandD');
});

Route::get('/swig', function () {
    return view('Academics.swig');
});

Route::get('/consultancy', function () {
    return view('Academics.consultancy');
});



Auth::routes();
Route::get('/add_department','DepartmentController@showForm');
Route::post('/depart','DepartmentController@store');
Route::get('/department','DepartmentController@index');
Route::get('/{dept_id}/editdepartment','DepartmentController@edit');
Route::put('/updatedept/{dept_id}','DepartmentController@update');
Route::get('/{dept_id}/delDepartment','DepartmentController@destroy');
Route::get('/countDepartment','DepartmentController@dept_count');

Route::get('/add_professor','ProfessorController@showForm');
Route::post('/store','ProfessorController@store');
Route::get('/professor','ProfessorController@index');
Route::get('/{prof_id}/editprofessor','ProfessorController@edit');
Route::put('/updateprof/{prof_id}','ProfessorController@update');
Route::get('/{prof_id}/delprofessor','ProfessorController@destroy');
Route::get('/profile/{id}/','ProfessorController@showProfile');
// Route::get('/profileClientIndex/{id}/','ProfessorController@showClientIndexProfile');

Route::get('/add_achivement','AchivementController@showForm');
Route::post('/achive','AchivementController@store');
Route::get('/achivement','AchivementController@index');
Route::get('/{Achivement_id}/editprofessor','AchivementController@edit');
Route::put('/updateachive/{Achivement_id}','AchivementController@update');
Route::get('/{Achivement_id}/delprofessor','AchivementController@destroy');
Route::get('/getdepartment','AchivementController@getdepartment');

Route::get('add_event','EventController@showForm');
Route::post('/event','EventController@store');
Route::get('/event','EventController@index');
Route::get('/{e_id}/editEvent','EventController@edit');
Route::put('/updateeve/{e_id}','EventController@update');
Route::get('/{e_id}/delEvent','EventController@destroy');

Route::get('/add_sub_event','Sub_eventController@showForm');
Route::post('/se_eve','Sub_eventController@store');
Route::get('/sub_event','Sub_eventController@index');
Route::get('/{se_id}/editsub_event','Sub_eventController@edit');
Route::put('/update_sub_event/{se_id}','Sub_eventController@update');
Route::get('/{se_id}/delsub_event','Sub_eventController@destroy');

Route::get('add_library','LibraryController@showForm');
Route::post('/library','LibraryController@store');
Route::get('/library','LibraryController@index');
Route::get('/{l_id}/editLibrary','LibraryController@edit');
Route::put('/updatelib/{l_id}','LibraryController@update');
Route::get('/{l_id}/delLibrary','LibraryController@destroy');

Route::get('add_tnp','TnpController@showForm');
Route::post('/tnp','TnpController@store');
Route::get('/tnp','TnpController@index');
Route::get('/{tnp_id}/editTnp','TnpController@edit');
Route::put('/updatetnp/{tnp_id}','TnpController@update');
Route::get('/{tnp_id}/delTnp','TnpController@destroy');

Route::get('add_administration','AdministrationController@showForm');
Route::post('/administration','AdministrationController@store');
Route::get('/administration','AdministrationController@index');
Route::get('/{a_id}/editAdministration','AdministrationController@edit');
Route::put('/updateadministration/{a_id}','AdministrationController@update');
Route::get('/{a_id}/delAdministration','AdministrationController@destroy');


Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/','ClientIndexColtroller@showClientIndexProfile');
Route::get('/','ClientIndexColtroller@showClientIndexEvent');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
