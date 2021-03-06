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
Route::group(['middleware'=>['auth','AdminMiddleware']],function (){
    Route::get('user/create','UserController@create')->name('user.create');
    Route::post('user/store','UserController@store')->name('user.store');
    Route::get('user/index','UserController@index')->name('user.index');
    Route::get('user/{id}/edit','UserController@edit')->name('user.edit');
    Route::put('user/{id}/update','UserController@update')->name('user.update');
    Route::delete('user/{id}/delete','UserController@destroy')->name('user.destroy');
    Route::get('user/getdata','UserController@getData')->name('user.getdata');
    Route::resource('beverage_category',BeverageCategoryController::class);
    Route::resource('beverage_size',BeverageSizeController::class);
    Route::resource('snacks_category',SnacksCategoryController::class);
    Route::resource('snacks_size',SnacksSizeController::class);
    Route::resource('beverage_flavor',BeverageFlavorController::class);
    Route::resource('snacks_flavor',SnacksFlavorController::class);
    Route::resource('stock',StockController::class);
    Route::resource('beverage_type',BeverageTypeController::class);
    Route::resource('snacks_type',SnacksTypeController::class);
    Route::get('inventory/{category}/create','InventoryController@create')->name('inventory.create');
    Route::post('inventory/store','InventoryController@store')->name('inventory.store');
    Route::get('inventory/index','InventoryController@index')->name('inventory.index');
    Route::get('inventory/{type}/{id}/edit','InventoryController@edit')->name('inventory.edit');
    Route::put('inventory/{id}/update','InventoryController@update')->name('inventory.update');
    Route::delete('inventory/{id}/delete','InventoryController@destroy')->name('inventory.destroy');
    Route::resource('area',AreaController::class);
    Route::resource('area_manager',AreaManagerController::class);
    Route::get('salary_list','EmployeeManagementController@salaryList')->name('employee.salaryList');
    Route::post('salary_list/store','EmployeeManagementController@salaryListStore')->name('employee.salaryListStore');
    Route::get('employee_salary_list','EmployeeManagementController@employeeSalaryList')->name('employee.employeeSalaryList');
    Route::resource('expenses',ExpenseController::class);
    Route::get('per_month_calculation','ReportGenerateController@perMonthCalculation')->name('report.perMonthCalculation');
    Route::get('total_order_per_month','ReportGenerateController@totalOrderPerMonth')->name('report.perMonthOrder');
    Route::get('user_transaction_status','ReportGenerateController@userTransactionStatus')->name('report.userTransaction');
    Route::get('empployee/{id}/isApproved','EmployeeManagementController@isApporved')->name('employee.isApproved');
    Route::get('empployee/{id}/isPaid','EmployeeManagementController@isPaid')->name('employee.isPaid');
    Route::get('return_products/admin_index','ReturnProductController@index')->name('return_products.admin_index');
    Route::get('return_products/{id}/approve','ReturnProductController@approve')->name('return_products.approve');
});

Route::group(['middleware'=>['auth','AreaManagerMiddleware']],function (){
    Route::resource('shop_registration',ShopRegistrationController::class);
    Route::get('return_products/area_manager_index','ReturnProductController@index')->name('return_products.area_manager_index');
    Route::get('return_products/edit/{id}','ReturnProductController@edit')->name('return_product.edit');
    Route::put('return_products/update/{id}','ReturnProductController@update')->name('return_product.update');
    Route::delete('return_products/{id}/delete','ReturnProductController@destroy')->name('return_product.destroy');
});

Route::group(['middleware'=>['auth','ShopkeeperMiddleware']],function (){
    Route::get('order', 'OrderController@order')->name('order');
    Route::get('user_order_list','OrderController@userOrderList')->name('order.list');
    Route::post('place_order', 'OrderController@placeOrder')->name('place.order');
    Route::get('inventory/{id}/show','InventoryController@show')->name('inventory.show');
    Route::get('user/portal','UserController@userPortal')->name('user.portal');
    Route::get('payment','userPaymentController@index')->name('user.payment');
    Route::post('payment/success','userPaymentController@success')->name('user.payment.success');
    Route::post('payment/fail','userPaymentController@fail')->name('user.payment.fail');
    Route::post('payment/cancel','userPaymentController@cancel')->name('user.payment.cancel');
    Route::get('user/report_of_status','ReportGenerateController@perMonthCalculationForShopkeeper')->name('user.transaction.status');
    Route::get('return_products/create','ReturnProductController@create')->name('return_products.create');
    Route::post('return_products/store','ReturnProductController@store')->name('return_products.store');
    Route::get('return_products/index','ReturnProductController@index')->name('return_products.index');
});

Route::group(['middleware'=>['auth','ShopkeeperAreaManagerMiddleware']],function (){
    Route::get('user/info/{id}','UpdateProfile@info')->name('user.info');
    Route::put('user/update/{id}','UpdateProfile@updateInfo')->name('user.info_update');
});

Route::group(['middleware'=>['auth','AdminAreaManagerMiddleware']],function (){
    Route::get('pending_delivery', 'DeliveryController@pendingDelivery')->name('pending.delivery');
    Route::resource('shopkeeper',ShopkeeperController::class);
});

Route::group(['middleware'=>['auth','AdminShopkeeperAreaManagerMiddleware']],function (){
    Route::get('dashboard',function (){
        $data['title']='Dashboard';
        return view('admin.dashboard',$data);
    })->name('dashboard');
    Route::get('pending_delivery/{id}/order_status', 'DeliveryController@orderStatus')->name('order.status');
    Route::get('pending_delivery/{id}/order_details', 'DeliveryController@orderDetails')->name('order.details');
    Route::get('deliver/{order_id}/{user_id}', 'DeliveryController@deliver')->name('order.deliver');
    Route::get('user/portal','UserController@userPortal')->name('user.portal');
});





//Route::get('make_order', 'OrderController@home')->name('make_order');

//Route::get('cart',function (){
//    $data['title']="cart";
//    return view('cart',$data);
//})->name('cart');
//Route::resource('user',UserController::class);
//Route::post('stock/store/{id}','StockController@store')->name('stock.store');
//Route::post('add_to_cart','InventoryController@AddToCart')->name('add_to_cart');
//Route::get('cart_list','InventoryController@cartList')->name('cart_list');
//Route::get('remove_cart/{id}','InventoryController@cartRemove')->name('remove_cart');
//Route::resource('employee',EmployeeController::class);
\Illuminate\Support\Facades\Auth::routes(['register'=>false]);
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// web.php
