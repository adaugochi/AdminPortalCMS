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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin',           'AdminController@login');
Route::get('forgot-password', 'AdminController@forgetpassword');
Route::post('admin',          'AdminController@login');
Route::get('/dashboard',      'AdminController@index');

Route::group(['namespace' => 'AdminPortal\Setup'], function () {
	//retriving
	Route::get('departments',            'DepartmentSetUp@getDepartments');
	Route::get('groups',                 'GroupSetUp@getGroups');
	Route::get('events',                 'EventSetUp@getEvents');
	Route::get('sunschs',                'SundaySchoolSetUp@getSunSchs');
	Route::get('announcements',          'AnnouncementSetUp@getAnnouncements');
	Route::get('visitors',               'VisitorSetUp@getVisitors');
	Route::get('members',                'MemberSetUp@getMembers');
	Route::get('offerings',              'OfferingSetUp@getOfferings');
	Route::get('tithes',                 'TitheSetUp@getTithes');
	Route::get('givings',                 'GivingSetUp@getGivings');
	Route::get('weekly-acts',            'WeeklyActivitySetUp@getWeeklyActs');

	//creating
	Route::post('addDepartment',         'DepartmentSetUp@addDepartment');
	Route::post('addGroup',              'GroupSetUp@addGroup');
	Route::post('addEvent',              'EventSetUp@addEvent');
	Route::post('addSundaySchool',       'SundaySchoolSetUp@addSunSch');
	Route::post('addAnnouncement',       'AnnouncementSetUp@addAnnouncement');
	Route::post('addVisitor',            'VisitorSetUp@addVisitor');
	Route::post('addMember',             'MemberSetUp@addMember');
	Route::post('addOffering',           'OfferingSetUp@addOffering');
	Route::post('addTithe',             'TitheSetUp@addTithe');
	Route::post('addGiving',             'GivingSetUp@addGiving');
	Route::post('addWkAct',              'WeeklyActivitySetUp@addWkAct');

	//updating
	Route::post('department',           'DepartmentSetUp@updateDepartment');
	Route::post('group',                'GroupSetUp@updateGroup');
	Route::post('event',                'EventSetUp@updateEvent');
	Route::post('sunsch',               'SundaySchoolSetUp@updateSunSch');
	Route::post('announcement',         'AnnouncementSetUp@updateAnnounce');
	Route::post('visitor',              'VisitorSetUp@updateVisitor');
	Route::post('member',               'MemberSetUp@updateMember');
	Route::post('offering',             'OfferingSetUp@updateOffering');
	Route::post('tithe',                'TitheSetUp@updateTithe');
	Route::post('giving',               'GivingSetUp@updateGiving');
	Route::post('weekly-act',           'WeeklyActivitySetUp@updateWkAct');

	//deleting
	Route::post('del-department',       'DepartmentSetUp@deleteDepartment');
	Route::post('del-group',            'GroupSetUp@deleteGroup');
	Route::post('del-event',            'EventSetUp@deleteEvent');
	Route::post('del-sunsch',           'SundaySchoolSetUp@deleteSunSch');
	Route::post('del-announce',         'AnnouncementSetUp@deleteAnnounce');
	Route::post('del-visitor',          'VisitorSetUp@deleteVisitor');
	Route::post('del-member',           'MemberSetUp@deleteMember');
	Route::post('del-offering',         'OfferingSetUp@deleteOffering');
	Route::post('del-tithe',            'TitheSetUp@deleteTithe');
	Route::post('del-giving',           'GivingSetUp@deleteGiving');
	Route::post('del-weeklyact',        'WeeklyActivitySetUp@deleteWkAct');

	Route::get('members/{id}',          'GroupSetUp@showMember');
	Route::get('members/{id}',          'DepartmentSetUp@showDepartment');
});





Route::get('admin/create', 'AdminPortal\Setup\DepartmentSetUp@index');
Route::post('addDepartment', 'AdminPortal\Setup\DepartmentSetUp@addDepartment');



