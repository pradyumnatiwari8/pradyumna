<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function ()
{
    return view('welcome');
});

Route::get("","Homecontroller@index");
Route::get("index","Homecontroller@index");
Route::get("registration","Homecontroller@registration");
Route::post("registrationcode","Homecontroller@registrationcode");
Route::get("login","Homecontroller@login");
Route::post("logincode","Homecontroller@logincode");
Route::get("aboutus","Homecontroller@aboutus");
Route::get("notification","Homecontroller@notification");
Route::get("contactus","Homecontroller@contactus");
Route::post("contactuscode","Homecontroller@contactuscode");


Route::get("UserZone/dashboard","Homecontroller@dashboard");
Route::get("UserZone/myprofile","Homecontroller@myprofile");
Route::post("UserZone/myprofilecode","Homecontroller@myprofilecode");
Route::get("UserZone/complaint","Homecontroller@complaint");
Route::post("UserZone/complaintcode","Homecontroller@complaintcode");
Route::get("UserZone/changepassword","Homecontroller@changepassword");
Route::post("UserZone/changepasswordcode","Homecontroller@changepasswordcode");
Route::get("UserZone/logout","Homecontroller@logout");

Route::get("AdminZone/dashboarda","Homecontroller@dashboarda");
Route::get("AdminZone/changepassworda","Homecontroller@changepassworda");
Route::post("AdminZone/changepasswordacode","Homecontroller@changepasswordacode");
Route::get("AdminZone/logouta","Homecontroller@logouta");
Route::get("AdminZone/viewcomplaint","Homecontroller@viewcomplaint");
Route::get("AdminZone/viewcontact","Homecontroller@viewcontact");
Route::get("AdminZone/viewregistration","Homecontroller@viewregistration");
Route::get("AdminZone/addnotification","Homecontroller@addnotification");
Route::post("AdminZone/addnotificationcode","Homecontroller@addnotificationcode");
