<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('nona', function () {
//     return 'welcome_nowara';
// });

// Route::get('nonas/{id?}', function ($id = 0) {
//     return "nowara number" . $id;
// })->where([
//     'id' => '[0-9]+',
// ]);

// Route::get('noura/{id?}', function ($id = 0) {
//     return "nowara number" . $id;
// })->wherenumber('íd');

// Route::get('users/{name}/{age}', function ($name, $age) {
//     return "Username is " . $name . " and age is " . $age;
// })->whereAlpha('name')->whereNumber('age');

// Route::get('user/{name}/{age}', function ($name, $age) {
//     return "user name is " . $name . " and age is " . $age;
// })->where(
//     [

//         'name' => '[a-zA-Z]+',
//         'age' => '[0-9]+',
//     ]
// );

// Route::get('/car/{id}', function ($id) {
//     return 'The id is: ' . $id;
// });

Route::prefix('accounts')->group(function () {
    Route::get('', function () {
        return 'welcom to your cars';
    });
    Route::get('admin', function () {
        return 'the _king';
    });

    Route::get('user', function () {
        return 'our pretty baby';
    });
});

Route::prefix('cars')->group(function () {
    Route::get('', function () {
        return 'welcom to your cars';
    });

    Route::prefix('accounts')->group(function () {
        Route::get('', function () {
            return 'This our website';
        });

        Route::get('admin', function () {
            return 'the _king';
        });

        Route::get('user', function () {
            return 'our pretty baby';
        });
    });

    Route::prefix('usa')->group(function () {
        Route::get('ford', function () {
            return 'FO_RD';
        });

        Route::get('tesla', function () {
            return 'TES_la';
        });
    });
    Route::prefix('ger')->group(function () {
        Route::get('mercedes', function () {
            return 'Mer_Cedes*cars';
        });

        Route::get('audi', function () {
            return 'Au_di*cars';
        });

        Route::get('volkswagen', function () {
            return 'Volk_SWang*cars';
        });
    });

});
