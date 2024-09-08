<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\ResponseFactory;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response|ResponseFactory
     */
    public function index(): Response|ResponseFactory
    {
        {
            return inertia('Listing/Index', [
                'listings' => Listing::all()
            ]);
        }

    }

    /**
     * Display the specified resource.
     * @param Listing $listing
     * @return Response|ResponseFactory
     */
    public function show(Listing $listing): Response|ResponseFactory
    {
       return inertia('Listing/Show',[
           'listing' => $listing
       ]);
    }

    /**
     * @return Response|ResponseFactory
     */
    public function create(): Response|ResponseFactory
    {
        return inertia('Listing/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        Listing::create(
            $request->validate([
                'beds' => 'required|integer|min:1|max:20',
                'baths' => 'required|integer|min:0|max:5',
                'area' => 'required|integer|min:20|max:400',
                'city' => 'required|string',
                'street' => 'required',
                'street_nr' => 'required',
                'code' => 'required|string|size:5',
                'price' => 'required|integer',
            ])
        );
        return redirect()->route('listing.index')
            ->with('success', 'Eintrag wurde erstellt!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Listing $listing): Response|ResponseFactory
    {
        return inertia('Listing/Edit',[
            'listing' => $listing
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Listing $listing): RedirectResponse
    {
        $listing->update(
            $request->validate([
                'beds' => 'required|integer|min:1|max:20',
                'baths' => 'required|integer|min:0|max:5',
                'area' => 'required|integer|min:20|max:400',
                'city' => 'required|string',
                'street' => 'required',
                'street_nr' => 'required',
                'code' => 'required|string|size:5',
                'price' => 'required|integer',
            ])
        );
        return redirect()->route('listing.index')
            ->with('success', 'Eintrag wurde geändert!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Listing $listing): RedirectResponse
    {
        $listing->delete();
        return redirect()->back()
            ->with('success', 'Eintrag wurde gelöscht!');
    }
}
