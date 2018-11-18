<?php

use App\Product;

use Illuminate\Support\Facades\Input;

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




/*
Route::get('/', function () {
    return view('order.add_to_cart');
});
*/

Auth::routes();


Route::get('/','ManageController@welcome');
Route::get('/about','ManageController@about');
Route::get('/contact','ManageController@contact');
Route::get('/products','ManageController@allProduct');
Route::get('/t-shirt','ManageController@M_1');
Route::get('/c-shirt','ManageController@M_2');
Route::get('/f-shirt','ManageController@M_3');
Route::get('/sweater','ManageController@M_4');
Route::get('/jackets','ManageController@M_5');
Route::get('/Coats','ManageController@M_6');
Route::get('/suits','ManageController@M_7');
Route::get('//jeans','ManageController@M_8');
Route::get('/Casual-trousers','ManageController@M_9');
Route::get('/formal-trousers','ManageController@M_10');
Route::get('/Shorts','ManageController@M_11');
Route::get('/Track-pants','ManageController@M_12');
Route::get('/A-T-shirt','ManageController@M_13');
Route::get('/Track-Pants-&-Shorts','ManageController@M_14');
Route::get('/Swimwear','ManageController@M_16');
Route::get('/Sports-Accessories','ManageController@M_17');
Route::get('/Sports-Equipment','ManageController@M_18');
Route::get('/Sports-Shoes','ManageController@M_19');
Route::get('/Wallets','ManageController@M_20');
Route::get('/Belts','ManageController@M_21');
Route::get('/Headphones','ManageController@M_22');
Route::get('/Caps-&-Hats','ManageController@M_23');
Route::get('/Travel-Accessories','ManageController@M_24');



Route::get('/salwar-kameez','ManageController@M_26');
Route::get('/saree','ManageController@M_27');
Route::get('/KURTIS-TUNICS','ManageController@M_28');
Route::get('/HIJAB-SCARF','ManageController@M_29');
Route::get('/PALAZZO-LEGGINGS','ManageController@M_30');
Route::get('/w-T-SHIRTS','ManageController@M_31');
Route::get('/SHIRTS','ManageController@M_32');
Route::get('/PANTS','ManageController@M_33');
Route::get('/BAGS','ManageController@M_34');
Route::get('/EYEWEAR','ManageController@M_35');
Route::get('/CAPS','ManageController@M_36');
Route::get('/WEDDING-COLLECTION','ManageController@M_37');
Route::get('/JEWELLERY','ManageController@M_38');
Route::get('/PERFUMES-DEO','ManageController@M_39');
Route::get('/MAKE UP','ManageController@M_40');
Route::get('/SKIN-CARE','ManageController@M_41');
Route::get('/HAIR-CARE','ManageController@M_42');
Route::get('/HEALTH','ManageController@M_43');
Route::get('/HEELS','ManageController@M_44');
Route::get('/SANDALS','ManageController@M_45');
Route::get('/FLAT-SHOES','ManageController@M_46');
Route::get('//WATCHES','ManageController@M_47');

Route::get('/home', 'HomeController@index');


Route::get('/product-details/{id}', 'ManageController@productDetails');
Route::get('/manage-product','ManageProductController@index');
Route::get('/show-products','ManageProductController@showProduct');
Route::post('/store-product','ManageProductController@store');
Route::get('/edit-product/{id}', 'ManageProductController@edit');
Route::get('/deleteProduct/{id}', 'ManageProductController@destroy');


Route::get('/admin/category/show', 'ManageCategoryController@showCategory');
Route::get('/admin/category/create', 'ManageCategoryController@index');
Route::post('/store-categories', 'ManageCategoryController@store');
Route::get('/admin/category/delete/{id}', 'ManageCategoryController@destroy');
Route::get('/admin/category/edit/{id}', 'ManageCategoryController@edit');


Route::get('/add_to_cart/{id}', 'CartController@addToCart');
Route::get('/mycart', 'CartController@mycart');
Route::post('/update-cart', 'CartController@updateCart');
Route::post('/cartItemDelete', 'CartController@cartItemDelete');
Route::get('/delete/{id}', 'CartController@cartItemDelete');

Route::get('/checkout', 'Order@checkout');
Route::post('/confirm-order', 'Order@addToOrders');
Route::get('/thankyou', 'Order@thnx');
Route::get('/getUpazila/{id}', 'Order@getUpazila');


Route::get('/user-profile/{id}', 'HomeController@profile');

Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $product= Product::where('product_name','LIKE','%'.$q.'%')->paginate(8);
    if(count($product) > 0)
        return view('search')->withDetails($product)->withQuery ( $q );
    else return view ('search')->withMessage('No Details found. Try to search again !');
});
