<?php

use Illuminate\Support\Facades\Route;
use App\produits;
use App\categories;

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
//Route::get('/', 'HomeController@index')->name('home');


Route::get('/', function () {
    return view('pharma/index');
});

Route::get('/home', function () {
    return view('pharma/index');
});






Route::get('/shop',function(){return view ('pharma.shop');});
Route::get('/cart',function(){return view ('pharma.cart');});
//Route::get('/search/{a}','shopController@search');

Route::get('/shop',
['uses'=>'shopController@show',
'as'=>'shop.show']);




Route::get('/search','shopController@search')->name('shop.search');
Route::get('/cart','panierController@shopCount')->name('Cart.shopCount');



Route::get('/shop-single/{id}','shopController@Affiche')->name('shop.Affiche');
   //return view('pharma/shop-single',['categories'=>$categories]);
   Route::get('/destroy/{id}',
   ['uses'=>'CartController@destroy',
   'as'=>'Cart.destroy']);

   //Route::delete(paniers.'/{id}', array('as' => 'noorsi.employee.destroy','uses' => Employeecontroller.'@destroy'));

// Route::get('/shop', function () {
//     return view('pharma/shop');
// });




Route::get('/about', function () {
    return view('pharma/about');
});

Route::get('/shop-single', function () {
    return view('pharma/shop-single');
});


Route::get('/cart',function(){
   
});







Route::get('/searchCat/{id}', function ($id) {
    $produits=produits::where('idCategorie',$id)->get();
    $categories=categories::all();
    //dd($produits);
    //return view('pharma/shop',['produits'=>$produits],['categories'=>$categories]);
   return view('pharma/searchCat',['produits'=>$produits],['categories'=>$categories]);
});

Route::post('/cart','CartController@store')->name('cart.store');

//Route::get('/searchCat/{id}','shopController@searchCat')->name('searchCat');



// Route::post('/create',
// ['uses'=>'panierController@create',
// 'as'=>'paniers.create']);

Route::get('/connF', function () {
    return view('connF');
});

Route::get('/connA', function () {
    return view('connA');
});





Route::get('/Commandes','commandesController@showProduct')->name('commandes.showProduct');

Route::get('/',
['uses'=>'categoriesController@showIndex',
'as'=>'categories.showIndex']);

Route::get('/home',
['uses'=>'categoriesController@showIndex',
'as'=>'categories.showIndex']);


Route::get('/cart','panierController@showP')->name('panier.showP');


//Route::get('/productDetail/{id}','HomeController@detailPro');

Route::post('/AuthF',
['uses'=>'FournisseurController@AuthF',
'as'=>'Fournisseur.AuthF']);

Route::post('/AuthA',
['uses'=>'AdminController@AuthA',
'as'=>'Admin.AuthA']);

Route::post('/loginA',function(){
    return view('pharma/loginA');
});

// Route::post('/loginA',
// ['uses'=>'AdminController@AuthA',
// 'as'=>'clients.AuthA']);



Route::get('/thankyou',function(){
    return view('pharma/thankyou');
});

// Route::get('/', function () {
//     return view('test');
// });

Route::get('/thankyou/{a}',
['uses'=>'userController@del',
'as'=>'user.del']);

Route::get('/thankyou/{b}',
['uses'=>'userController@delE',
'as'=>'user.delE']);


Route::get('/login',function()
{
    return  view('/Auth/login');
});
Route::get('/commandes','commandesController@showProduct')->name('commandes.showPrroduct');
Route::get('/contact',function()
{
    return view('pharma/contact');
});
Auth::routes();

Route::get('/authCl', 'HomeController@index')->name('home.index');

// Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');



//---------------------------------------------------------------------------------
Route::get('/gescom','CommandeController@index');
Route::post('/gescom','CommandeController@store');
Route::get('/gescom/{id}/edit','CommandeController@edit');
Route::put('/gescom/{id}','CommandeController@update');
Route::delete('/gescom/{id}','CommandeController@destroy');
Route::get('/gesprod','ProduitController@index');
Route::post('/gesprod','ProduitController@store');
Route::get('/gesprod/{id}/edit','ProduitController@edit');
Route::put('/gesprod/{id}','ProduitController@update');

Route::get('/destroyP/{id}',
['uses'=>'ProduitController@destroyP',
'as'=>'Produit.destroyP']);

Route::get('/destroyCl/{id}',
['uses'=>'ClientController@destroyCl',
'as'=>'Users.destroyCl']);

Route::get('/destroyF/{id}',
['uses'=>'FournisseurController@destroyF',
'as'=>'Users.destroyF']);

Route::get('/destroyCo/{id}',
['uses'=>'CommandeController@destroyCo',
'as'=>'Users.destroyCo']);

Route::get('/decA',
['uses'=>'AdminController@decA',
'as'=>'Admin.decA']);

Route::get('/dec',
['uses'=>'FournisseurController@dec',
'as'=>'Fournisseur.dec']);

Route::get('/gescli','ClientController@index');
Route::post('/gescli','ClientController@store');
Route::get('/gescli/{id}/edit','ClientController@edit');
Route::put('/gescli/{id}','ClientController@update');
Route::delete('/gescli/{id}','ClientController@destroy');
Route::get('/gesfour','FournisseurController@index');
Route::post('/gesfour','FournisseurController@store');
Route::get('/gesfour/{id}/edit','FournisseurController@edit');
Route::put('/gesfour/{id}','FournisseurController@update');
Route::delete('/gesfour/{id}','FournisseurController@destroy');
Route::get('/gescat','CategorieController@index');
Route::post('/gescat','CategorieController@store');
Route::get('/gescat/{id}/edit','CategorieController@edit');
Route::put('/gescat/{id}','CategorieController@update');
Route::delete('/gescat/{id}','CategorieController@destroy');

Route::put('/modadm/{id}','AdminController@update');
Route::get('/FOURgesprod','ProduitController@indexF');
Route::post('/FOURgesprod','ProduitController@storeF');
Route::get('/FOURgesprod/{id}/edit','ProduitController@editF');
Route::put('/FOURgesprod/{id}','ProduitController@updateF');
Route::delete('/FOURgesprod/{id}','ProduitController@destroyF');
Route::get('/FOURgescat','CategorieController@indexF');
Route::post('/FOURgescat','CategorieController@storeF');
Route::get('/FOURgescat/{id}/edit','CategorieController@editF');
Route::put('/FOURgescat/{id}','CategorieController@updateF');
Route::delete('/FOURgescat/{id}','CategorieController@destroyF');
Route::get('/FOURmod/{id}','FournisseurController@editF');
Route::put('/FOURmod/{id}','FournisseurController@updateF');
Route::get('/modadm/{id}','AdminController@edit');
