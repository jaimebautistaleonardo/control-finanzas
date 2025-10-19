<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/dbtest/ping', function () {
    try {
        DB::connection()->getPdo();

        return response()->json([
            'status' => 'ok',
            'database' => DB::getDatabaseName(),
        ]);
    } catch (\Throwable $exception) {
        return response()->json([
            'status' => 'error',
            'message' => $exception->getMessage(),
        ], 500);
    }
});

Route::view('/{any?}', 'app')->where('any', '.*');
