<?php

use Statamic\Facades\Entry;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

// Route that accepts a slug as a parameter and fetches the entry by slug
Route::get('/api/posts/{slug}', function ($slug) {
    // Fetch the entry from the 'clientside' collection where the slug matches
    $entry = Entry::query()
        ->where('collection', 'clientside')
        ->where('slug', $slug)
        ->first();

    // Check if the entry exists
    if (!$entry) {
        return response()->json(['message' => 'Entry not found'], 404);
    }

    // Return the entry as a JSON response
    return response()->json($entry);
});
