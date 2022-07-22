<?php
	Route::prefix('/media/vgrsystem')->group(function () {
		Route::get('/esra/{rating}', function () {
			return 'Hello World';
		})->name('vgrs-esra');
		
		Route::get('/esrb/{rating}', function () {
			return 'Hello World';
		})->name('vgrs-esrb');
		
		Route::get('/pegi', function () {
			return 'Hello World';
		})->name('vgrs-pegi');
	});
?>