<?php


Route::get('/', 'Controller@getIndex')->name('index');
Route::get('/gallery/{slug}', 'Controller@getGalleryBySlug')->name('gallery.slug');

Route::get('image/{id}', function($id){
	$cat = App\Attachment::find($id);
	header('Pragma: public');
	header('Cache-Control: max-age=360000, must-revalidate');
	header('Content-Type: ' . $cat->type);
	readfile('/var/www/production/dariushnaghashi/crm/data/upload/' . $cat->id );
})->name('image');