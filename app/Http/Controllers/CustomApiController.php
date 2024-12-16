<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Statamic\Facades\Collection;
use Statamic\Facades\Entry;
use Statamic\Facades\Antlers;
use Illuminate\Support\Facades\Http;

class CustomApiController extends Controller
{
    public function getCustomData()
    {
        $entries = Collection::all();
        return response()->json($entries);
    }

    public function getentryData()
    {
        // Return the parsed content to a view
        // $entryData = Entry::query()->where('uri', '/pages/diamond-blog')->first();
        $page = Entry::query()->where('uri', '/pages/diamond-blog')->first();
        // $singlePageResponse = Http::get('https://demo.statamic.com/');
        return response()->json($page);
    }
}
