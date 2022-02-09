<?php

Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Experience
    Route::delete('experiences/destroy', 'ExperienceController@massDestroy')->name('experiences.massDestroy');
    Route::resource('experiences', 'ExperienceController');

    // Services
    Route::delete('services/destroy', 'ServicesController@massDestroy')->name('services.massDestroy');
    Route::post('services/media', 'ServicesController@storeMedia')->name('services.storeMedia');
    Route::post('services/ckmedia', 'ServicesController@storeCKEditorImages')->name('services.storeCKEditorImages');
    Route::resource('services', 'ServicesController');

    // Projects
    Route::delete('projects/destroy', 'ProjectsController@massDestroy')->name('projects.massDestroy');
    Route::post('projects/media', 'ProjectsController@storeMedia')->name('projects.storeMedia');
    Route::post('projects/ckmedia', 'ProjectsController@storeCKEditorImages')->name('projects.storeCKEditorImages');
    Route::resource('projects', 'ProjectsController');

    // Products
    Route::delete('products/destroy', 'ProductsController@massDestroy')->name('products.massDestroy');
    Route::post('products/media', 'ProductsController@storeMedia')->name('products.storeMedia');
    Route::post('products/ckmedia', 'ProductsController@storeCKEditorImages')->name('products.storeCKEditorImages');
    Route::resource('products', 'ProductsController');

    // News
    Route::delete('news/destroy', 'NewsController@massDestroy')->name('news.massDestroy');
    Route::post('news/media', 'NewsController@storeMedia')->name('news.storeMedia');
    Route::post('news/ckmedia', 'NewsController@storeCKEditorImages')->name('news.storeCKEditorImages');
    Route::resource('news', 'NewsController');

    // Appointment
    Route::delete('appointments/destroy', 'AppointmentController@massDestroy')->name('appointments.massDestroy');
    Route::resource('appointments', 'AppointmentController');

    // Employment
    Route::delete('employments/destroy', 'EmploymentController@massDestroy')->name('employments.massDestroy');
    Route::post('employments/media', 'EmploymentController@storeMedia')->name('employments.storeMedia');
    Route::post('employments/ckmedia', 'EmploymentController@storeCKEditorImages')->name('employments.storeCKEditorImages');
    Route::resource('employments', 'EmploymentController');

    // Contactus
    Route::delete('contactus/destroy', 'ContactusController@massDestroy')->name('contactus.massDestroy');
    Route::resource('contactus', 'ContactusController');

    // About Us
    Route::delete('aboutuses/destroy', 'AboutUsController@massDestroy')->name('aboutuses.massDestroy');
    Route::post('aboutuses/media', 'AboutUsController@storeMedia')->name('aboutuses.storeMedia');
    Route::post('aboutuses/ckmedia', 'AboutUsController@storeCKEditorImages')->name('aboutuses.storeCKEditorImages');
    Route::resource('aboutuses', 'AboutUsController');

    // Slider
    Route::delete('sliders/destroy', 'SliderController@massDestroy')->name('sliders.massDestroy');
    Route::post('sliders/media', 'SliderController@storeMedia')->name('sliders.storeMedia');
    Route::post('sliders/ckmedia', 'SliderController@storeCKEditorImages')->name('sliders.storeCKEditorImages');
    Route::resource('sliders', 'SliderController');

    // Distributors
    Route::delete('distributors/destroy', 'DistributorsController@massDestroy')->name('distributors.massDestroy');
    Route::post('distributors/media', 'DistributorsController@storeMedia')->name('distributors.storeMedia');
    Route::post('distributors/ckmedia', 'DistributorsController@storeCKEditorImages')->name('distributors.storeCKEditorImages');
    Route::resource('distributors', 'DistributorsController');

    // Subscription
    Route::delete('subscriptions/destroy', 'SubscriptionController@massDestroy')->name('subscriptions.massDestroy');
    Route::resource('subscriptions', 'SubscriptionController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
//-----------------------------------------------------------
  //frontend routes
  Route::group([ 'as' => 'frontend.', 'namespace' => 'Frontend'],function () {
        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/contact', 'ContactusController@index')->name('contact');
        Route::post('/contact_store', 'ContactusController@store')->name('contact.store');
        Route::get('/target', 'AboutController@target')->name('target');
        Route::get('/vision', 'AboutController@vision')->name('vision');
        Route::get('/services', 'ServiceController@index')->name('services');
        Route::get('/service/{id}', 'ServiceController@show')->name('service');
        Route::get('/products', 'ProductController@index')->name('products');
        Route::get('/projects', 'ProjectController@index')->name('projects');
        Route::get('/project/{id}', 'ProjectController@show')->name('project');
        Route::get('/news', 'NewsController@index')->name('news');
        Route::get('/new/{id}', 'NewsController@show')->name('new');
        Route::get('/agents', 'DistributorsController@index')->name('agents');
        Route::get('/appointement', 'AppointementController@index')->name('appointement'); 
        Route::post('/appointement_store', 'AppointementController@store')->name('appointement.store');
        Route::get('/job', 'JobController@index')->name('job'); 
        Route::post('/job_store', 'JobController@store')->name('job.store');
        Route::post('job/media', 'JobController@storeMedia')->name('storeMedia');
        Route::post('subscription', 'ContactusController@subscription')->name('subscription.store');
        
    

          });