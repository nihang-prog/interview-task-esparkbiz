<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::resource('basic_detail', basic_detail_controller::class);
Route::resource('ref_contact', referancecontactcontroller::class);
Route::resource('preferance', preferancecontroller::class);
Route::resource('education', educationdetailcontroller::class);
Route::resource('work_exp', workexperiencecontroller::class);
Route::resource('language', languagecontroller::class);
Route::resource('technology', technologycontroller::class);
Route::get('/getapplication','basic_detail_controller@getapplication');
Route::patch('/deleteapplication','basic_detail_controller@deleteapplication');
Route::get('/editapplication/{user_id}','basic_detail_controller@editapplication');
Route::patch('/updatebasic','basic_detail_controller@updatebasic');
Route::patch('/updateeducation','educationdetailcontroller@updateeducation');
Route::patch('/updatereferance','referancecontactcontroller@updatereferance');
Route::patch('/updatelanguage','languagecontroller@updatelanguage');
Route::patch('/updatetechnology','technologycontroller@updatetechnology');

Route::post('login', function (Request $request) {
    
    if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
        // Authentication passed...
        $user = auth()->user();
        return response()->json([
            'Message' => 'Login Successfully',
            'Data' => $user,
        ], 200);
    }
    
    return response()->json([
        'error' => 'Unauthenticated user',
        'data' =>'' ,
    ], 201);
});
