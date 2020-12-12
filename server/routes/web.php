<?php

/**
 * routes/api.phpのAPIエンドポイントのURI以外のすべてアクセスは layouts.blade.phpに振られる
 */
Route::get('/{any}', function() {
    return view('layouts');
})->where('any', '.*');