<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use TCG\Voyager\Facades\Voyager;

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

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'namespace' => 'Front',
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ],
], function() {

    Route::get('/', 'IndexController')->name('index');
    //Route::get('/o-nas', 'AboutController')->name('about');
    //Route::get('/works', 'WorksController')->name('works');
    //Route::get('/work/{slug}', 'WorkController')->name('work');
    //Route::get('/directions', 'DirectionsController')->name('directions');
    //Route::get('/direction/{slug}', 'DirectionController')->name('direction');
    //Route::get('/price', 'PriceController')->name('price');
    //Route::get('/posts', 'PostsController')->name('posts');
    //Route::get('/post/{slug}', 'PostController')->name('post');
    //Route::get('/contacts', 'ContactsController')->name('contacts');
    //Route::post('/contacts', 'MessageController')->name('message');
    //Route::get('/message-send', 'SendController')->name('send');
    //Route::get('/sitemap.xml', 'SitemapController')->name('sitemap');
    //Route::get('/sitemap/pages', 'SitemapController@pages')->name('sitemap.pages');
    //Route::get('/sitemap/posts', 'SitemapController@posts')->name('sitemap.posts');
    //Route::get('/sitemap/directions', 'SitemapController@directions')->name('sitemap.directions');
    //Route::get('/sitemap/works', 'SitemapController@works')->name('sitemap.works');

}
);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
