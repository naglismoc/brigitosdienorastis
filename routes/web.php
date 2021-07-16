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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'teachers'], function(){
    // Route::get('logs', 'App\Http\Controllers\TeacherController@logs')->name('teacher.logs');
    // Route::get('camelCaseUsers', 'App\Http\Controllers\TeacherController@camelCaseUsers')->name('teacher.camelCaseUsers');
    Route::get('', 'App\Http\Controllers\TeacherController@index')->name('teacher.index');
    Route::get('/time/{teacher}', 'App\Http\Controllers\TeacherController@time')->name('teacher.time');
    Route::post('/timeStore/{teacher}', 'App\Http\Controllers\TeacherController@timeStore')->name('teacher.timeStore');
    Route::get('/create', 'App\Http\Controllers\TeacherController@create')->name('teacher.create');
    // Route::post('/addTeacher', 'App\Http\Controllers\TeacherController@addTeacher')->name('addTeacher');
    Route::post('store', 'App\Http\Controllers\TeacherController@store')->name('teacher.store');
    // Route::get('edit/{teacher}', 'App\Http\Controllers\TeacherController@edit')->name('teacher.edit');
    // Route::post('update/{teacher}', 'App\Http\Controllers\TeacherController@update')->name('teacher.update');
    // Route::post('delete/{teacher}', 'App\Http\Controllers\TeacherController@destroy')->name('teacher.destroy');
    // Route::post('delete-photo/{teacher}', 'App\Http\Controllers\TeacherController@destroyPhoto')->name('teacher.destroy.photo');
    Route::get('show/{teacher}', 'App\Http\Controllers\TeacherController@show')->name('teacher.show');
    // Route::get('pdf/{teacher}', 'App\Http\Controllers\TeacherController@pdf')->name('teacher.pdf');
});



Route::group(['prefix' => 'teachersskills'], function(){
    // Route::get('logs', 'App\Http\Controllers\TeacherController@logs')->name('teacher.logs');
    // Route::get('camelCaseUsers', 'App\Http\Controllers\TeacherController@camelCaseUsers')->name('teacher.camelCaseUsers');
    Route::get('', 'App\Http\Controllers\TeacherskillController@index')->name('teacherskill.index');
    Route::get('/create', 'App\Http\Controllers\TeacherskillController@create')->name('teacherskill.create');
    // Route::post('/addTeacher', 'App\Http\Controllers\TeacherController@addTeacher')->name('addTeacher');
    Route::post('store', 'App\Http\Controllers\TeacherskillController@store')->name('teacherskill.store');
    // Route::get('edit/{teacher}', 'App\Http\Controllers\TeacherController@edit')->name('teacher.edit');
    // Route::post('update/{teacher}', 'App\Http\Controllers\TeacherController@update')->name('teacher.update');
    // Route::post('delete/{teacher}', 'App\Http\Controllers\TeacherController@destroy')->name('teacher.destroy');
    // Route::post('delete-photo/{teacher}', 'App\Http\Controllers\TeacherController@destroyPhoto')->name('teacher.destroy.photo');
    Route::get('show/{teachersskill}', 'App\Http\Controllers\TeacherskillController@show')->name('teacherskill.show');
    // Route::get('pdf/{teacher}', 'App\Http\Controllers\TeacherController@pdf')->name('teacher.pdf');
});
Route::group(['prefix' => 'courses'], function(){
    // Route::get('logs', 'App\Http\Controllers\TeacherController@logs')->name('teacher.logs');
    // Route::get('camelCaseUsers', 'App\Http\Controllers\TeacherController@camelCaseUsers')->name('teacher.camelCaseUsers');
    Route::get('/genertate', 'App\Http\Controllers\CourseController@generate')->name('course.generate');
    Route::get('', 'App\Http\Controllers\CourseController@index')->name('course.index');
    Route::get('/create', 'App\Http\Controllers\CourseController@create')->name('course.create');
    // Route::post('/addTeacher', 'App\Http\Controllers\TeacherController@addTeacher')->name('addTeacher');
    Route::post('store', 'App\Http\Controllers\CourseController@store')->name('course.store');
    // Route::get('edit/{teacher}', 'App\Http\Controllers\TeacherController@edit')->name('teacher.edit');
    // Route::post('update/{teacher}', 'App\Http\Controllers\TeacherController@update')->name('teacher.update');
    // Route::post('delete/{teacher}', 'App\Http\Controllers\TeacherController@destroy')->name('teacher.destroy');
    // Route::post('delete-photo/{teacher}', 'App\Http\Controllers\TeacherController@destroyPhoto')->name('teacher.destroy.photo');
    Route::get('show/{course}', 'App\Http\Controllers\CourseController@show')->name('course.show');
    // Route::get('pdf/{teacher}', 'App\Http\Controllers\TeacherController@pdf')->name('teacher.pdf');
});
Route::group(['prefix' => 'coursemodules'], function(){
    // Route::get('logs', 'App\Http\Controllers\TeacherController@logs')->name('teacher.logs');
    // Route::get('camelCaseUsers', 'App\Http\Controllers\TeacherController@camelCaseUsers')->name('teacher.camelCaseUsers');
    Route::get('', 'App\Http\Controllers\CoursemoduleController@index')->name('coursemodule.index');
    Route::get('/create', 'App\Http\Controllers\CoursemoduleController@create')->name('coursemodule.create');
    // Route::post('/addTeacher', 'App\Http\Controllers\TeacherController@addTeacher')->name('addTeacher');
    Route::post('store', 'App\Http\Controllers\CoursemoduleController@store')->name('coursemodule.store');
    // Route::get('edit/{teacher}', 'App\Http\Controllers\TeacherController@edit')->name('teacher.edit');
    // Route::post('update/{teacher}', 'App\Http\Controllers\TeacherController@update')->name('teacher.update');
    // Route::post('delete/{teacher}', 'App\Http\Controllers\TeacherController@destroy')->name('teacher.destroy');
    // Route::post('delete-photo/{teacher}', 'App\Http\Controllers\TeacherController@destroyPhoto')->name('teacher.destroy.photo');
    Route::get('show/{coursemodule}', 'App\Http\Controllers\CoursemoduleController@show')->name('coursemodule.show');
    // Route::get('pdf/{teacher}', 'App\Http\Controllers\TeacherController@pdf')->name('teacher.pdf');
});
// Route::group(['prefix' => 'modules'], function(){
//     // Route::get('logs', 'App\Http\Controllers\TeacherController@logs')->name('teacher.logs');
//     // Route::get('camelCaseUsers', 'App\Http\Controllers\TeacherController@camelCaseUsers')->name('teacher.camelCaseUsers');
//     Route::get('', 'App\Http\Controllers\ModuleController@index')->name('module.index');
//     Route::get('/create', 'App\Http\Controllers\ModuleController@create')->name('module.create');
//     // Route::post('/addTeacher', 'App\Http\Controllers\TeacherController@addTeacher')->name('addTeacher');
//     Route::post('store', 'App\Http\Controllers\ModuleController@store')->name('module.store');
//     // Route::get('edit/{teacher}', 'App\Http\Controllers\TeacherController@edit')->name('teacher.edit');
//     // Route::post('update/{teacher}', 'App\Http\Controllers\TeacherController@update')->name('teacher.update');
//     // Route::post('delete/{teacher}', 'App\Http\Controllers\TeacherController@destroy')->name('teacher.destroy');
//     // Route::post('delete-photo/{teacher}', 'App\Http\Controllers\TeacherController@destroyPhoto')->name('teacher.destroy.photo');
//     Route::get('show/{module}', 'App\Http\Controllers\ModuleController@show')->name('module.show');
//     // Route::get('pdf/{teacher}', 'App\Http\Controllers\TeacherController@pdf')->name('teacher.pdf');
// });

Route::group(['prefix' => 'skills'], function(){
    // Route::get('logs', 'App\Http\Controllers\SkillController@logs')->name('skill.logs');
    // Route::get('camelCaseUsers', 'App\Http\Controllers\SkillController@camelCaseUsers')->name('skill.camelCaseUsers');
    Route::get('', 'App\Http\Controllers\SkillController@index')->name('skill.index');
    Route::get('/create', 'App\Http\Controllers\SkillController@create')->name('skill.create');
    // Route::post('/addSkill', 'App\Http\Controllers\SkillController@addSkill')->name('addSkill');
    Route::post('store', 'App\Http\Controllers\SkillController@store')->name('skill.store');
    // Route::get('edit/{skill}', 'App\Http\Controllers\SkillController@edit')->name('skill.edit');
    // Route::post('update/{skill}', 'App\Http\Controllers\SkillController@update')->name('skill.update');
    // Route::post('delete/{skill}', 'App\Http\Controllers\SkillController@destroy')->name('skill.destroy');
    // Route::post('delete-photo/{skill}', 'App\Http\Controllers\SkillController@destroyPhoto')->name('skill.destroy.photo');
    // Route::get('show/{skill}', 'App\Http\Controllers\SkillController@show')->name('skill.show');
    // Route::get('pdf/{skill}', 'App\Http\Controllers\SkillController@pdf')->name('skill.pdf');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
