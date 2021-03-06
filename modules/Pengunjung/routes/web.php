<?php

use Modules\Pengunjung\Controllers\PengunjungController;

Route::group(
    [
        'prefix' => config('modules.pengunjung.route.prefix'),
        'as' => 'modules::',
        'middleware' => config('modules.pengunjung.route.middleware'),
    ],
    function () {
        Route::resource('pengunjung', PengunjungController::class);
    }
);
        Route::get('auth/register-pengunjung', [PengunjungController::class, 'registerPengunjung'])->name('register.pengunjung');
        Route::post('/register-pengunjung', [PengunjungController::class, 'store'])->name('register.pengunjung.store');
