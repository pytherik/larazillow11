<?php

namespace App\Http\Controllers;


use App\Models\Listing;

class IndexController extends Controller
{
    public function index()
    {
        return inertia('Index/Index', [
            'message' => 'Hallo meine liebe Petra!'
        ]);
    }

    public function show()
    {
        return inertia('Index/Show');
    }
}
