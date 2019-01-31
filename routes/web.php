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
    return view('login');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

	Route::post('dashboard',          'AdminController@login');
	Route::get('dashboard',           'AdminController@index');


	//retrive
	Route::get('departments',            'AdminPortal\Setup\DepartmentSetUp@getDepartments');
	Route::get('groups',                 'AdminPortal\Setup\GroupSetUp@getGroups');
	Route::get('events',                 'AdminPortal\Setup\EventSetUp@getEvents');
	Route::get('sunschs',                'AdminPortal\Setup\SundaySchoolSetUp@getSunSchs');
	Route::get('announcements',          'AdminPortal\Setup\AnnouncementSetUp@getAnnouncements');
	Route::get('visitors',               'AdminPortal\Setup\VisitorSetUp@getVisitors');
	Route::get('members',                'AdminPortal\Setup\MemberSetUp@getMembers');
	Route::get('offerings',              'AdminPortal\Setup\OfferingSetUp@getOfferings');
	Route::get('tithes',                 'AdminPortal\Setup\TitheSetUp@getTithes');
	Route::get('givings',                'AdminPortal\Setup\GivingSetUp@getGivings');
	Route::get('weekly-acts',            'AdminPortal\Setup\WeeklyActivitySetUp@getWeeklyActs');

	//create
	Route::post('addDepartment',         'AdminPortal\Setup\DepartmentSetUp@addDepartment');
	Route::post('addGroup',              'AdminPortal\Setup\GroupSetUp@addGroup');
	Route::post('addEvent',              'AdminPortal\Setup\EventSetUp@addEvent');
	Route::post('addSundaySchool',       'AdminPortal\Setup\SundaySchoolSetUp@addSunSch');
	Route::post('addAnnouncement',       'AdminPortal\Setup\AnnouncementSetUp@addAnnouncement');
	Route::post('addVisitor',            'AdminPortal\Setup\VisitorSetUp@addVisitor');
	Route::post('addMember',             'AdminPortal\Setup\MemberSetUp@addMember');
	Route::post('addOffering',           'AdminPortal\Setup\OfferingSetUp@addOffering');
	Route::post('addTithe',              'AdminPortal\Setup\TitheSetUp@addTithe');
	Route::post('addGiving',             'AdminPortal\Setup\GivingSetUp@addGiving');
	Route::post('addWkAct',              'AdminPortal\Setup\WeeklyActivitySetUp@addWkAct');

	//update
	Route::post('department',           'AdminPortal\Setup\DepartmentSetUp@updateDepartment');
	Route::post('group',                'AdminPortal\Setup\GroupSetUp@updateGroup');
	Route::post('event',                'AdminPortal\Setup\EventSetUp@updateEvent');
	Route::post('sunsch',               'AdminPortal\Setup\SundaySchoolSetUp@updateSunSch');
	Route::post('announcement',         'AdminPortal\Setup\AnnouncementSetUp@updateAnnounce');
	Route::post('visitor',              'AdminPortal\Setup\VisitorSetUp@updateVisitor');
	Route::post('member',               'AdminPortal\Setup\MemberSetUp@updateMember');
	Route::post('offering',             'AdminPortal\Setup\OfferingSetUp@updateOffering');
	Route::post('tithe',                'AdminPortal\Setup\TitheSetUp@updateTithe');
	Route::post('giving',               'AdminPortal\Setup\GivingSetUp@updateGiving');
	Route::post('weekly-act',           'AdminPortal\Setup\WeeklyActivitySetUp@updateWkAct');

	//delete
	Route::post('del-department',       'AdminPortal\Setup\DepartmentSetUp@deleteDepartment');
	Route::post('del-group',            'AdminPortal\Setup\GroupSetUp@deleteGroup');
	Route::post('del-event',            'AdminPortal\Setup\EventSetUp@deleteEvent');
	Route::post('del-sunsch',           'AdminPortal\Setup\SundaySchoolSetUp@deleteSunSch');
	Route::post('del-announce',         'AdminPortal\Setup\AnnouncementSetUp@deleteAnnounce');
	Route::post('del-visitor',          'AdminPortal\Setup\VisitorSetUp@deleteVisitor');
	Route::post('del-member',           'AdminPortal\Setup\MemberSetUp@deleteMember');
	Route::post('del-offering',         'AdminPortal\Setup\OfferingSetUp@deleteOffering');
	Route::post('del-tithe',            'AdminPortal\Setup\TitheSetUp@deleteTithe');
	Route::post('del-giving',           'AdminPortal\Setup\GivingSetUp@deleteGiving');
	Route::post('del-weeklyact',        'AdminPortal\Setup\WeeklyActivitySetUp@deleteWkAct');

	//show
	Route::get('members/{id}',          'AdminPortal\Setup\GroupSetUp@showMember');

	Route::get('members/{id}',          'AdminPortal\Setup\DepartmentSetUp@showDepartment');




