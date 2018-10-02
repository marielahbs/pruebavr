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
use App\Mail\Welcome;
use App\Mail\WelcomeUser;

use Illuminate\Support\Facades\Mail;


Auth::routes();
/* CoreUI templates */

Route::middleware('auth')->group(function() {
	Route::view('/', 'panel.blank');
	Route::view('/sample/dashboard','samples.dashboard');
	

	// Section INDEXES
	Route::view('/position/index','Position.index');
	Route::view('/department/index','Department.index');
	Route::view('/role/index','Role.index');
	Route::view('/user/index','User.index');
	Route::view('/location/index','Location.index');
	Route::view('/center/index','Center.index');
	Route::view('/station/index','Station.index');
	Route::view('/session/index','Session.index');
	Route::view('/course/index','Course.index');
	Route::view('/subject/index','Subject.index');
	Route::view('/mission/index','Mission.index');
	Route::view('/process/index','Process.index');


	// Section CONTROLLERS
	Route::resource('/position', 'PositionController');
	Route::resource('/department', 'DepartmentController');
	Route::resource('/role', 'RoleController');
	Route::resource('/user', 'UserController');
	Route::resource('/location','LocationController');
	Route::resource('/center','CenterController');
	Route::resource('/station','StationController');
	Route::resource('/session','SessionController');
	Route::resource('/course','CourseController');
	Route::resource('/subject','SubjectController');
	Route::resource('/mission','MissionController');
	Route::resource('/process','ProcessController');
});
// Section Pages
Route::view('/sample/error404','errors.404')->name('error404');
Route::view('/sample/error500','errors.500')->name('error500');

Route::get('welcome', function(){
	Mail::to('trevinoare@outlook.com', 'Cristian Areli')
	->send(new Welcome());
});


Route::get('email', function() {
	return (new App\Mail\WelcomeUser());
});