<?php

use App\Http\Controllers\CustomApiController;
use Illuminate\Support\Facades\Route;
use Statamic\Facades\Entry;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

// Example route that returns all entries from the 'pages' collection
Route::get('/api/posts', function () {
    dd('dd');
    // Fetch all entries from the 'pages' collection
    $entries = Entry::query()->where('collection', 'pages')->get();

    // Return the entries as a JSON response
    return response()->json($entries);
});
