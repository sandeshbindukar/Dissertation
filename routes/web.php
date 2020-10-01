<?php

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

Route::group(['middleware' => 'web'], function () {

    //Authentication
    Route::auth();

    //Home page
    Route::get('/', 'HomeController@index');
    Route::get('/user_home', 'HomeController@home');

    //Donors page
    Route::get('donors', 'UserController@view_donors');
    Route::get('donors/{id}', 'UserController@donor_profile_details');

    //Message Donors
    Route::post('donors_message', 'MessageController@sendMessageToDonor');
    Route::get('donors_message/{id}', 'MessageController@viewMessage');
    Route::post('donors_message/reply', 'MessageController@replyMessage');
    Route::get('delete/donors_message/{id}', 'MessageController@deleteMessage');

    //Camps pages
    Route::get('camps', 'CampController@view_camps');
    Route::get('camps/add', 'CampController@add_new_camp');
    Route::post('camps/add', 'CampController@save_new_camp');

    //Blood Center page
    Route::get('blood_center', 'BloodCenterController@index');
	Route::get('blood_center/add', 'BloodCenterController@view_add_center');
    Route::post('blood_center/add', 'BloodCenterController@store_new_center');

    //Contact Support page
    Route::get('supports', 'SupportController@viewSupport');
    Route::post('supports', 'SupportController@saveSupport');

    //Blood Requests and Who Needs Blood Page
    Route::get('request_blood', 'RequestBloodController@requestBlood');
	Route::post('request_blood', 'RequestBloodController@storeRequestDetails');
	Route::get('blood_requests', 'RequestBloodController@viewRequests');
	Route::get('blood_request_details/{id}', 'RequestBloodController@viewRequestDetails');

    //Password Change
    Route::get('password_change', 'UserController@reqPasswordChange');
    Route::post('password_change', 'UserController@updateNewPassword');

    //Logout
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

    //API
    Route::get('api', 'ApiController@api');
    Route::get('api/donors', 'ApiController@getDonors');

    //User Profile
    Route::get('/user_profile', 'UserController@viewUserProfile');
    Route::post('/user_profile', 'UserController@updateUserProfile');


    //For Admin Pages
    Route::get('admin', 'AdminController@index');

    //manage user
    Route::get('admin/user/edit/{id}', 'AdminController@editUserDetails');
    Route::post('admin/user/edit/{id}', 'AdminController@updateUserDetails');
    Route::get('admin/make/admin/{id}', 'AdminController@makeUserAdmin');
	Route::get('admin/remove/admin/{id}', 'AdminController@removeFromAdmin');
    Route::get('admin/delete/user/{id}', 'AdminController@deleteUserDetails');

    //manage blood center
    Route::get('admin/blood_center', 'AdminController@viewBloodCenter');
    Route::get('admin/blood_center/edit/{id}', 'AdminController@viewEditBloodCenter');
	Route::post('admin/blood_center/edit/{id}', 'AdminController@updateBloodCenterDetails');
    Route::get('admin/delete/blood_center/{id}', 'AdminController@deleteBloodCenterDetails');

    //manage camp
    Route::get('admin/camp', 'AdminController@viewCamp');
	Route::get('admin/camp/edit/{id}', 'AdminController@viewEditCamp');
	Route::post('admin/camp/edit/{id}', 'AdminController@updateCampDetails');
    Route::get('admin/delete/camp/{id}', 'AdminController@deleteCampDetails');

    //manage blood requests
    Route::get('admin/blood_request','AdminController@viewBloodRequestsDetails');
    Route::get('admin/view/blood_request/{id}', 'AdminController@viewBloodRequestDetails');
    Route::get('admin/delete/blood_request/{id}', 'AdminController@deleteBloodRequestDetails');

    //manage admin support
    Route::get('admin/support', 'AdminController@viewSupportDetails');
	Route::get('admin/view/support/{id}', 'AdminController@viewSupportMessage');
    Route::get('admin/delete/support/{id}', 'AdminController@deleteSupportMessage');
    Route::post('admin/reply', 'AdminController@replySupportMessage');

    //manage announcement
    Route::get('admin/announcement', 'AdminController@viewAnnouncement');
    Route::get('admin/announcement/add', 'AdminController@viewAddAnnouncement');
    Route::post('admin/announcement/add', 'AdminController@saveAddAnnouncement');
    Route::get('admin/announcement/edit/{id}', 'AdminController@viewEditAnnouncement');
	Route::post('admin/announcement/edit/{id}', 'AdminController@updateAnnouncementDetails');
    Route::get('admin/delete/announcement/{id}', 'AdminController@deleteAnnouncement');

    //password resets
    Route::view('passwords/reset', 'auth.passwords.reset')->name('password.reset');
    Route::post('passwords/reset', 'Auth\ForgotPasswordController@reset');
});
