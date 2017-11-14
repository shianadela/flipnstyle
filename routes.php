<?php

// INDEX
	Route::get('/', [
		'uses' => 'HomeController@index',
		'as'   => 'flipnstyle'
	]);

	Route::get('/flipnstyle_u', [
		'uses' => 'HomeController@index_u',
		'as'   => 'flipnstyle_u'
	]);
// INDEX


// CRUD EMBELLISHMENTS
	Route::get('/saveElement','UserScrapbookPageElementController@saveElement');
	Route::get('/editElement','UserScrapbookPageElementController@editElement');
	Route::get('/deleteElement','UserScrapbookPageElementController@deleteElement');

	Route::get('/saveText','UserScrapbookPageElementController@saveText');
	Route::get('/saveEditedText','UserScrapbookPageElementController@saveEditedText');
	Route::get('/editText','UserScrapbookPageElementController@editText');
	Route::get('/deleteLoadedText','UserScrapbookPageElementController@deleteLoadedText');
// CRUD EMBELLISHMENTS

// SAVE TITLE
	Route::get('/set/title','UserScrapbookController@postTitle');
	Route::get('/update/title','UserScrapbookController@updateTitle');
// SAVE TITLE

// SAVE BACKGROUND PAGE
	Route::get('/save/scrapbookpage','UserScrapbookPageController@savePage');
	//
// SAVE BACKGROUND PAGE

// UPLOAD IMAGES
	Route::post('/store','FilesController@store');
	//
// UPLOAD IMAGES

// SHARE SCRAPBOOK
	Route::get('/share/scrapbook','UserSharedScrapbookController@shareScrapbook');
	//
// SHARE SCRAPBOOK

// USER DASHBOARD
	Route::get('dashboard','HomeController@dashboard');
	//
// USER DASHBOARD

// PURCHASE LIST
	Route::get('purchases', 'PurchaseController@purchaseList');
	//
// PURCHASE LIST

// PURCHASE SCRAPBOOK
	Route::get('/purchaseScrapbook', 'PurchaseController@purchase');
	//
// PURCHASE SCRAPBOOK

// USER'S AUTHENTICATION
	Route::get('/register', [
		'uses' => 'AuthController@getUserRegister',
		'as'   => 'auth.register',
		'middleware' => ['guest']
	]);

	Route::post('/register', [
		'uses' => 'AuthController@postUserRegister',
		'middleware' => ['guest']
	]);

	Route::get('/login', [
		'uses' => 'AuthController@getUserLogin',
		'as' => 'auth.login',
		'middleware' => ['guest']
	]);

	Route::post('/login', [
		'uses' => 'AuthController@postUserLogIn',
		'middleware' => ['guest']
	]);

	Route::get('/logout', [
		'uses' => 'AuthController@logout',
		'as' => 'auth.logout'
	]);
// USER'S AUTHENTICATION

// USER WORKSPACE
	Route::post('workspace','HomeController@workspace');
	Route::post('/special/workspace','HomeController@showSpecialworkspace');
	Route::post('/edit/workspace','HomeController@showEditworkspace');
	Route::post('/purchase/scrapbook','HomeController@showPurchasescrapbook');
// USER WORKSPACE

// ADMIN
	Route::get('admin','AdminController@showLogin');
	Route::post('admin/dashboard','AdminController@showDashboard');
	Route::get('admin/index','AdminController@showIndex');
	
	Route::get('admin/submissions','AdminController@showSubmissions');
	Route::get('admin/purchases','AdminController@showPurchases');

	Route::get('approve_theme','AdminController@updateStatusApproved');
	Route::get('onhold_theme','AdminController@updateStatusOnHold');

	Route::post('admin/review','AdminController@showReview');
	Route::post('admin/viewtheme','AdminController@showTheme');
// ADMIN


// DESIGNER
	Route::get('specialthemes','HomeController@designerThemes');
	Route::post('preview/specialthemes','HomeController@previewDesignerThemes');

	Route::get('/updateThemeBG','DesignerScrapbookThemeBackgroundController@updateBG');
	Route::get('/updateThemeBD','DesignerScrapbookThemeBorderController@updateBD');
	Route::get('/updateThemeEM','DesignerScrapbookThemeEmbellishmentController@updateEM');
	Route::get('/updateThemeStatus','DesignerScrapbookThemeController@updateTheme');

	Route::get('designer','DesignerController@showLogin');
	Route::get('designer/lists','DesignerController@lists');

	Route::get('update_elementstatusBG','DesignerScrapbookThemeBackgroundController@updateBGStatus');
	Route::get('update_elementstatusBD','DesignerScrapbookThemeBorderController@updateBDStatus');
	Route::get('update_elementstatusEM','DesignerScrapbookThemeEmbellishmentController@updateEMStatus');
		
	Route::post('designer_index','DesignerController@index');
	Route::post('designer_viewThemesList','DesignerController@viewThemesList');
	Route::post('designer_notifications','DesignerController@notifications');

	Route::post('designer/index','DesignerController@postLogin');
	Route::post('designer/viewtheme','DesignerController@showTheme');
	Route::post('designer/changeupload','DesignerController@changeUpload');
	
	Route::post('designer_newsubmissions', 'DesignerController@newsubmissions');
	Route::post('designer_lists','DesignerController@lists');

	Route::post('/storeDesignerThemesBG/publicFolder','DesignerScrapbookThemeBackgroundController@storeDesignerThemesBG_public');
	Route::post('/storeDesignerThemesBD/publicFolder','DesignerScrapbookThemeBorderController@storeDesignerThemesBD_public');
	Route::post('/storeDesignerThemesEM/publicFolder','DesignerScrapbookThemeEmbellishmentController@storeDesignerThemesEM_public');


	Route::get('/storeDesignerThemesBG','DesignerScrapbookThemeBackgroundController@storeDesignerThemesBG');
	Route::get('/storeDesignerThemesBD','DesignerScrapbookThemeBorderController@storeDesignerThemesBD');
	Route::get('/storeDesignerThemesEM','DesignerScrapbookThemeEmbellishmentController@storeDesignerThemesEM');

	Route::get('/storeDesignerTheme','DesignerScrapbookThemeController@saveDesignerTheme');
// DESIGNER

