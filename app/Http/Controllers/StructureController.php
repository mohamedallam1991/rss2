<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStructureRequest;
use App\Models\Structure;
use Illuminate\Http\Request;

class StructureController extends Controller
{
    public function index()
    {
        return view('structures.index', with([
            'structures' => Structure::all(),
        ]));
    }

    public function show(Structure $structure)
    {
        return view('structures.show', with([
            'structure' => $structure,
            'systems' => $structure->systems,
        ]));
    }

    public function create()
    {
        return view('structures.create');
    }

    public function store(StoreStructureRequest $request)
    {
        Structure::create($request->validated());
        return redirect()->route('structures.index');
    }

    public function destroy(Structure $structure)
    {
        // return $structure->ds::;
    }
}
