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
Route::get('/logout', 'Auth\LoginController@logout');
Route::auth();
Route::get('register/verify/{token}', 'Auth\RegisterController@verify'); 

Route::group(['middleware' => ['auth']], function() {

	Route::get('home', ['as'=>'home','uses'=>'HomeController@index']);

	Route::resource('users','UserController');

	Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:ROLES']]);
	Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:ROLES']]);
	Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:ROLES']]);
        Route::post('roles/create2',['as'=>'roles.store2','uses'=>'RoleController@store2','middleware' => ['permission:ROLES']]);
	Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
	Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:ROLES']]);
	Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:ROLES']]);
	Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:ROLES']]);
	//Route::get('item',['as'=>'item.index','uses'=>'ItemController@index','middleware' => ['permission:ITEMS']]);
	//Route::get('item/create',['as'=>'item.create','uses'=>'ItemController@create','middleware' => ['permission:ITEMS']]);
	//Route::post('item/create',['as'=>'item.store','uses'=>'ItemController@store','middleware' => ['permission:ITEMS']]);
	//Route::get('item/{id}',['as'=>'item.show','uses'=>'ItemController@show']);
	//Route::get('item/{id}/edit',['as'=>'item.edit','uses'=>'ItemController@edit','middleware' => ['permission:ITEMS']]);
	//Route::patch('item/{id}',['as'=>'item.update','uses'=>'ItemController@update','middleware' => ['permission:ITEMS']]);
	//Route::delete('item/{id}',['as'=>'item.destroy','uses'=>'ItemController@destroy','middleware' => ['permission:ITEMS']]);
        Route::get('pdfview',['as'=>'pdfview','uses'=>'ItemController@pdfmethode']);
        Route::get('profile' ,'UserController@profile');
        Route::post('profile' ,'UserController@update_avatar');
        
        Route::get('switchinfo/{parameter}' ,['as'=>'page','uses'=>'PageController@index']);
           
        
        Route::resource('permissions','PermissionController');
        
     //   Route::get('crud', 'ItemController@index');
   // Route::post('crud', 'ItemController@add');
  //  Route::get('crud/view', 'ItemController@view');
  //  Route::post('crud/update', 'ItemController@update');
  //  Route::post('crud/delete', 'ItemController@delete');
    
    
    
    Route::get('manage-item', ['as'=>'item.manageItem','uses'=>'ItemController@manageItem']);
    Route::resource('item', 'ItemController');
       // Route::get('/search1', 'SearchController@index');,'middleware' => ['permission:$data1']
        // Route::get('/search', 'SearchController@search');,'middleware' => ['permission:$Session->somekey']
    //  Route::get('page', array('as' => 'page', function()
//{
     //  $a=Session::get('some');
     //   $role = Role::find($id);
      //  $rolePermissions = Permission::join("permission_role","permission_role.permission_id","=","permissions.id")
      //     ->where("permission_role.role_id",$id)
       //    ->get();
       // dd($rolePermissions);
     //if ('item-edit'==$a){
     //return View::make('page');}
//}));
        
     
});
