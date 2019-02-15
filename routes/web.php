<?php


Route::get('/', 'Controller@getIndex')->name('index');
Route::get('/gallery/{slug}', 'Controller@getGalleryBySlug')->name('gallery.slug');

Route::get('/', function () {

	$jobs = ['job1', 'job2', 'job3'];

    return view('welcome', [
    	'jobs' => $jobs
    ]);
});
