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


Route::get('/logout', function () {
    Auth::logout();
    return view('welcome');
});
Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    
        Route::get('/home', 'HomeController@index')->name('home');
    
        //Route::resource('users','UserController');
    

        Route::get('users',['as'=>'users.index','uses'=>'UserController@index','middleware' => ['permission:user-list|user-create|user-edit|user-delete']]);
        Route::get('users/create',['as'=>'users.create','uses'=>'UserController@create','middleware' => ['permission:user-create']]);
        Route::post('users/create',['as'=>'users.store','uses'=>'UserController@store','middleware' => ['permission:user-create']]);
        Route::get('users/{id}',['as'=>'users.show','uses'=>'UserController@show']);
        Route::get('users/{id}/edit',['as'=>'users.edit','uses'=>'UserController@edit','middleware' => ['permission:user-edit']]);
        Route::patch('users/{id}',['as'=>'users.update','uses'=>'UserController@update','middleware' => ['permission:user-edit']]);
        Route::delete('users/{id}',['as'=>'users.destroy','uses'=>'UserController@destroy','middleware' => ['permission:user-delete']]);

        Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
        Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:role-create']]);
        Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:role-create']]);
        Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
        Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:role-edit']]);
        Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:role-edit']]);
        Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:role-delete']]);
    
        Route::get('itemCRUD2',['as'=>'itemCRUD2.index','uses'=>'ItemCRUD2Controller@index','middleware' => ['permission:item-list|item-create|item-edit|item-delete']]);
        Route::get('itemCRUD2/create',['as'=>'itemCRUD2.create','uses'=>'ItemCRUD2Controller@create','middleware' => ['permission:item-create']]);
        Route::post('itemCRUD2/create',['as'=>'itemCRUD2.store','uses'=>'ItemCRUD2Controller@store','middleware' => ['permission:item-create']]);
        Route::get('itemCRUD2/{id}',['as'=>'itemCRUD2.show','uses'=>'ItemCRUD2Controller@show']);
        Route::get('itemCRUD2/{id}/edit',['as'=>'itemCRUD2.edit','uses'=>'ItemCRUD2Controller@edit','middleware' => ['permission:item-edit']]);
        Route::patch('itemCRUD2/{id}',['as'=>'itemCRUD2.update','uses'=>'ItemCRUD2Controller@update','middleware' => ['permission:item-edit']]);
        Route::delete('itemCRUD2/{id}',['as'=>'itemCRUD2.destroy','uses'=>'ItemCRUD2Controller@destroy','middleware' => ['permission:item-delete']]);
  
  


        Route::get('initiative',['as'=>'initiativeCRUD.index','uses'=>'InitiativesController@index','middleware' => ['permission:initiative-list|initiative-create|initiative-edit|initiative-delete']]);
        Route::get('initiative/create',['as'=>'initiativeCRUD.create','uses'=>'InitiativesController@create','middleware' => ['permission:initiative-create']]);
        Route::post('initiative/create',['as'=>'initiativeCRUD.store','uses'=>'InitiativesController@store','middleware' => ['permission:initiative-create']]);
        Route::get('initiative/{id}',['as'=>'initiativeCRUD.show','uses'=>'InitiativesController@show']);
        Route::get('initiative/{id}/edit',['as'=>'initiativeCRUD.edit','uses'=>'InitiativesController@edit','middleware' => ['permission:initiative-edit']]);
        Route::patch('initiative/{id}',['as'=>'initiativeCRUD.update','uses'=>'InitiativesController@update','middleware' => ['permission:initiative-edit']]);
        Route::delete('initiative/{id}',['as'=>'initiativeCRUD.destroy','uses'=>'InitiativesController@destroy','middleware' => ['permission:initiative-delete']]);


        Route::get('patient',['as'=>'patientCRUD.index','uses'=>'PatientController@index','middleware' => ['permission:patient-list|patient-create|patient-edit|patient-delete']]);
        Route::get('patient/create',['as'=>'patientCRUD.create','uses'=>'PatientController@create','middleware' => ['permission:patient-create']]);
        Route::post('patient/create',['as'=>'patientCRUD.store','uses'=>'PatientController@store','middleware' => ['permission:patient-create']]);
        Route::get('patient/{id}',['as'=>'patientCRUD.show','uses'=>'PatientController@show']);
        Route::get('patient/{id}/edit',['as'=>'patientCRUD.edit','uses'=>'PatientController@edit','middleware' => ['permission:patient-edit']]);
        Route::patch('patient/{id}',['as'=>'patientCRUD.update','uses'=>'PatientController@update','middleware' => ['permission:patient-edit']]);
        Route::delete('patient/{id}',['as'=>'patientCRUD.destroy','uses'=>'PatientController@destroy','middleware' => ['permission:patient-delete']]);


    Route::get('treatment',['as'=>'treatmentCRUD.index','uses'=>'TreatmentController@index','middleware' => ['permission:treatment-list|treatment-create|treatment-edit|treatment-delete']]);
    Route::get('treatment/create',['as'=>'treatmentCRUD.create','uses'=>'TreatmentController@create','middleware' => ['permission:treatment-create']]);
    Route::post('treatment/create',['as'=>'treatmentCRUD.store','uses'=>'TreatmentController@store','middleware' => ['permission:treatment-create']]);
    Route::get('treatment/{id}',['as'=>'treatmentCRUD.show','uses'=>'TreatmentController@show']);
    Route::get('treatment/{id}/edit',['as'=>'treatmentCRUD.edit','uses'=>'TreatmentController@edit','middleware' => ['permission:treatment-edit']]);
    Route::patch('treatment/{id}',['as'=>'treatmentCRUD.update','uses'=>'TreatmentController@update','middleware' => ['permission:treatment-edit']]);
    Route::delete('treatment/{id}',['as'=>'treatmentCRUD.destroy','uses'=>'TreatmentController@destroy','middleware' => ['permission:treatment-delete']]);


});
