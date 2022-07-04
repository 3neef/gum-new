<?php

Route::redirect('/', '/login');
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

    // Customer
    Route::delete('customers/destroy', 'CustomerController@massDestroy')->name('customers.massDestroy');
    Route::post('customers/media', 'CustomerController@storeMedia')->name('customers.storeMedia');
    Route::post('customers/ckmedia', 'CustomerController@storeCKEditorImages')->name('customers.storeCKEditorImages');
    Route::resource('customers', 'CustomerController');

    // Brand
    Route::delete('brands/destroy', 'BrandController@massDestroy')->name('brands.massDestroy');
    Route::post('brands/media', 'BrandController@storeMedia')->name('brands.storeMedia');
    Route::post('brands/ckmedia', 'BrandController@storeCKEditorImages')->name('brands.storeCKEditorImages');
    Route::resource('brands', 'BrandController');

    // Phone
    Route::delete('phones/destroy', 'PhoneController@massDestroy')->name('phones.massDestroy');
    Route::post('phones/media', 'PhoneController@storeMedia')->name('phones.storeMedia');
    Route::post('phones/ckmedia', 'PhoneController@storeCKEditorImages')->name('phones.storeCKEditorImages');
    Route::resource('phones', 'PhoneController');

    // Sales
    Route::delete('sales/destroy', 'SalesController@massDestroy')->name('sales.massDestroy');
    Route::post('sales/media', 'SalesController@storeMedia')->name('sales.storeMedia');
    Route::post('sales/ckmedia', 'SalesController@storeCKEditorImages')->name('sales.storeCKEditorImages');
    Route::resource('sales', 'SalesController');

    // Swap
    Route::delete('swaps/destroy', 'SwapController@massDestroy')->name('swaps.massDestroy');
    Route::post('swaps/media', 'SwapController@storeMedia')->name('swaps.storeMedia');
    Route::post('swaps/ckmedia', 'SwapController@storeCKEditorImages')->name('swaps.storeCKEditorImages');
    Route::resource('swaps', 'SwapController');
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
