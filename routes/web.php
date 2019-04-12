<?php


Route::get('/', 'Controller@getIndex')->name('index');
Route::get('/gallery/{slug}', 'Controller@getGalleryBySlug')->name('gallery.slug');
Route::get('video', 'Controller@getVideos')->name('videos');

Route::post('booking', 'Controller@postBooking')->name('booking');

Route::get('/shop/card', 'Controller@getShopCard')->name('shop.card');
Route::post('/shop/card/add', 'Controller@postAddToCard')->name('shop.card.add');
Route::post('/shop/card/product', 'Controller@getProduct');




Route::get('image/{id}', function($id){
	$cat = App\Attachment::find($id);
	header('Pragma: public');
	header('Cache-Control: max-age=360000, must-revalidate');
	header('Content-Type: ' . $cat->type);
	readfile('/home/production/onpermise/5c96a5002b4e543eb/data/upload/' . $cat->id );
})->name('image');