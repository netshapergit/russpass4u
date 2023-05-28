<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('auth/login/admin', 'AuthController@show');
Route::post('auth/login/admin', 'AuthController@loginAdmin');
//Route::post('auth/login', 'AuthController@loginUser');
Route::post('auth/login', 'AuthController@newloginUser');
// TODO use post
Route::get('auth/logout/admin', 'AuthController@logoutAdmin');
Route::get('auth/logout', 'AuthController@logoutUser');

Route::post('register', 'UsersController@register');

Route::post('form_uploads', 'FormUploadsController@store');

//user
Route::get(URL_USER, 'UserIndexController@index');
Route::resource(URL_USER . '/pages', 'UserPagesController');
Route::post(URL_USER . '/upload_images', 'UserUploadImagesController@store');

Route::group(array('before' => 'update'), function()
{
		
	// manager
	Route::group(array('before' => 'manager'), function()
	{
		Route::get(URL_ADMIN, 'AdminIndexController@index');

		Route::resource(URL_ADMIN . '/feedbacks', 'AdminFeedbacksController', array(
			'except' => array('create', 'store'),
		));
		Route::resource(URL_ADMIN . '/modules', 'AdminModulesController');
		Route::resource(URL_ADMIN . '/options', 'AdminOptionsController');
		Route::put(URL_ADMIN . '/pages/mass_update', 'AdminPagesController@massUpdate');
		Route::resource(URL_ADMIN . '/pages', 'AdminPagesController');
		Route::resource(URL_ADMIN . '/positions', 'AdminPositionsController');
		Route::resource(URL_ADMIN . '/users', 'AdminUsersController');

		Route::get(URL_ADMIN . '/site', 'AdminSiteController@edit');
		Route::put(URL_ADMIN . '/site', 'AdminSiteController@update');

		Route::post(URL_ADMIN . '/upload_documents', 'AdminUploadDocumentsController@store');
		Route::post(URL_ADMIN . '/upload_files', 'AdminUploadFilesController@store');
		Route::post(URL_ADMIN . '/upload_images', 'AdminUploadImagesController@store');

		Route::get(URL_ADMIN . '/files', 'AdminFileListController@index');
		Route::resource(URL_ADMIN . '/documents', 'AdminDocumentsController', array(
			'except' => array('create', 'store'),
		));

		// grid
//		Route::resource(URL_ADMIN . '/grid', 'AdminGridController');
		Route::get(URL_ADMIN . '/grid', 'AdminGridController@index');

		// admin
		Route::group(array('before' => 'admin'), function()
		{
			Route::resource(URL_ADMIN . '/formes', 'AdminFormesController');
			Route::resource(URL_ADMIN . '/forme_fields', 'AdminFormeFieldsController');
			Route::resource(URL_ADMIN . '/layouts', 'AdminLayoutsController');
			Route::resource(URL_ADMIN . '/module_type_layouts', 'AdminModuleTypeLayoutsController');
			Route::resource(URL_ADMIN . '/page_fields', 'AdminPageFieldsController');
			Route::resource(URL_ADMIN . '/selects', 'AdminSelectsController');
			Route::resource(URL_ADMIN . '/setting_fields', 'AdminSettingFieldsController');
			Route::resource(URL_ADMIN . '/user_fields', 'AdminUserFieldsController');

			Route::resource(URL_ADMIN . '/images', 'AdminImagesController', array(
				'except' => array('create', 'store'),
			));
			Route::resource(URL_ADMIN . '/scripts', 'AdminScriptsController');
			Route::resource(URL_ADMIN . '/styles', 'AdminStylesController');
			Route::resource(URL_ADMIN . '/templates', 'AdminTemplatesController');

			Route::get(URL_ADMIN . '/system', 'AdminSystemController@edit');
			Route::put(URL_ADMIN . '/system', 'AdminSystemController@update');

			Route::post(URL_ADMIN . '/upload_theme_images', 'AdminUploadThemeImagesController@store');

			// superuser
			Route::group(array('before' => 'superuser'), function()
			{
				Route::resource(URL_ADMIN . '/admins', 'AdminAdminsController');
				Route::resource(URL_ADMIN . '/aliases', 'AdminAliasesController');
				Route::resource(URL_ADMIN . '/domains', 'AdminDomainsController', array(
					'except' => array('destroy'),
				));
				Route::resource(URL_ADMIN . '/field_types', 'AdminFieldTypesController', array(
					'except' => array('create', 'store', 'destroy'),
				));
				Route::resource(URL_ADMIN . '/module_type_additions', 'AdminModuleTypeAdditionsController', array(
					'except' => array('create', 'store', 'destroy'),
				));
				Route::resource(URL_ADMIN . '/module_types', 'AdminModuleTypesController', array(
					'except' => array('create', 'store', 'destroy'),
				));
			});
		});
	});

	Route::post('form/{formeId}', 'FormsController@send')->where('formeId', '\\d+');

	Route::get('{any}', 'PagesController@show')->where('any', '.*');
});
