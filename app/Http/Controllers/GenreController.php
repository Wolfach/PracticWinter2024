<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GenreRequest;
use App\Http\Requests\StorePosters;
use App\Models\Genres;
use App\Models\Catalog;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $ag = Genres::orderBy('id')->get();
        // return view('/catalog', compact('ag'));

        // $animegenres = Genres::orderBy('id')->get();
        // return view('/catalog', ['animegenres' => $animegenres]);

        // $animes = Catalog::with('genres')->get();
        // return view('/catalog', ['animes' => $animes]);
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
    public function store(GenreRequest $genres)
    {
        Genres::create($request->validated());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
