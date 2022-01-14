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

Route::post('/search', 'Backend\SearchController@search')->name('search');

Route::get('/contact-us', 'Frontend\SaanoController@Contact')->name('contact-us');

Route::get('/volunteer-form', 'Frontend\SaanoController@Volunteerform')->name('volunteer-form');

Route::group(['middleware' => 'auth'], function() {
Route::get('/volunteer', 'Frontend\SaanoController@Volunteer')->name('volunteer');
});

Route::get('/blog-detail/{id}', 'Frontend\SaanoController@blogDetail')->name('blog-detail');

Route::get('/blog', 'Frontend\SaanoController@Blog')->name('blog');

Route::get('/event', 'Frontend\SaanoController@Event')->name('event');

Route::group(['middleware' => 'auth'], function() {
Route::get('/profile', 'Frontend\SaanoController@Profile')->name('profile');
Route::get('/updateprofile','Frontend\SaanoController@updateProfile')->name('updateprofile');
});

Route::get('/event-detail/{id}', 'Frontend\SaanoController@eventDetail')->name('event-detail');

Route::group(['middleware' => 'auth'], function() {
Route::get('/stripe', 'Frontend\SaanoController@Stripe')->name('stripe');

Route::get('/dropoff', 'Frontend\SaanoController@Dropoff')->name('dropoff');
 
Route::get('/donate', 'Frontend\SaanoController@Donate')->name('donate');
});

Route::get('/about-us', 'Frontend\SaanoController@About')->name('about-us');

Route::get('/', 'Frontend\SaanoController@Index')->name('index');

/*Change Password*/
Route::get('/change-password', 'Backend\ChangePasswordController@index');
Route::post('/change-password', 'Backend\ChangePasswordController@store')->name('change.password');

/*Forget Password*/
Route::get('/forget-password', 'Auth\ForgotPasswordController@getEmail');
Route::post('/forget-password', 'Auth\ForgotPasswordController@postEmail');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@getPassword');
Route::post('/password/reset', 'Auth\ResetPasswordController@updatePassword');

/*Profile*/
Route::put('/updateprofile/{id}', 'Backend\ProfileController@updateprofile')->name('updateprofile');

/*Volunteer*/
Route::group(['middleware' => 'auth:admin'], function() {
Route::get('/viewvolunteer', 'Backend\VolunteerController@viewvolunteer')->name('viewvolunteer');
});
Route::post('/storevolunteer', 'Backend\VolunteerController@storevolunteer')->name('storevolunteer');

/*Donate*/
Route::group(['middleware' => 'auth:admin'], function() {
Route::get('/viewdonate', 'Backend\DonateController@viewdonate')->name('viewdonate');
});
Route::post('/storedonate', 'Backend\DonateController@storedonate')->name('storedonate');

/*Contact us*/
Route::group(['middleware' => 'auth:admin'], function() {
Route::get('/viewcontact', 'Backend\ContactController@viewcontact')->name('viewcontact');
});
Route::post('/storecontact', 'Backend\ContactController@storecontact')->name('storecontact');

/*JoinEvent*/
Route::group(['middleware' => 'auth:admin'], function() {
Route::get('/viewapplyevent', 'Backend\ApplyeventController@viewapplyevent')->name('viewapplyevent');
});
Route::post('/storeapplyevent', 'Backend\ApplyeventController@storeapplyevent')->name('storeapplyevent');

/*Blog*/
Route::group(['middleware' => 'auth:admin'], function() {
Route::get('/viewblog', 'Backend\BlogController@viewblog')->name('viewblog');
Route::get('/createblog', 'Backend\BlogController@createblog')->name('createblog');
Route::post('/storeblog', 'Backend\BlogController@storeblog')->name('storeblog');
Route::get('/editblog/{id}', 'Backend\BlogController@editblog')->name('editblog');
Route::put('/updateblog/{id}', 'Backend\BlogController@updateblog')->name('updateblog');
Route::get('/deleteblog/{id}', 'Backend\BlogController@deleteblog')->name('deleteblog');
});

/*Event*/
Route::group(['middleware' => 'auth:admin'], function () {
Route::get('/viewevent', 'Backend\EventController@viewevent')->name('viewevent');
Route::get('/createevent', 'Backend\EventController@createevent')->name('createevent');
Route::post('/storeevent', 'Backend\EventController@storeevent')->name('storeevent');
Route::get('/editevent/{id}', 'Backend\EventController@editevent')->name('editevent');
Route::put('/updateevent/{id}', 'Backend\EventController@updateevent')->name('updateevent');
Route::get('/deleteevent/{id}', 'Backend\EventController@deleteevent')->name('deleteevent');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

/* Admin Route */
Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});


Route::get('/test-pusher',function(){

event(new App\Events\Myevent('Someone Just booked an ticket for the event'));

});

Route::get('/show-message',function(){
	return view('pusher');
});