<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePosters;
use App\Models\Catalog;
use App\Models\Genres;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animegenres = Genres::orderBy('id')->get();
        $animedesc = Catalog::orderBy('id')->get();

        return view('catalog', [
            'animegenres' => $animegenres,
            'animedesc' => $animedesc
        ]);
        // return view('/catalog', compact('animedesc'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePosters $request)
    {
        Catalog::create($request->validated());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(StorePosters $anime)
    {
        $path = storage_path('/app/public/images/') . $image;
        
        return response()->file($path);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
