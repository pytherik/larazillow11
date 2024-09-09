<?php

namespace App\Http\Controllers;


use App\Models\Listing;

class IndexController extends Controller
{
    public function index()
    {
        dd(\Auth::user());
        return inertia('Index/Index', [
            'message' => 'Hallo Leute!'
        ]);
    }

    public function show()
    {
        return inertia('Index/Show');
    }
}
