<?php

    Route::get('/media/vgrsystem/esra/{rating}', function () {
        return VgrSystem::showImage();
    })->name('vgrs-esra');
?>
