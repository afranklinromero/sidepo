<?php

namespace App\Http\Controllers;

use App\Models\TipoTramite;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TipoTramiteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TipoTramiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tipoTramites = TipoTramite::paginate();

        return view('tipo-tramite.index', compact('tipoTramites'))
            ->with('i', ($request->input('page', 1) - 1) * $tipoTramites->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tipoTramite = new TipoTramite();

        return view('tipo-tramite.create', compact('tipoTramite'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TipoTramiteRequest $request): RedirectResponse
    {
        TipoTramite::create($request->validated());

        return Redirect::route('tipos-tramites.index')
            ->with('success', 'TipoTramite created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tipoTramite = TipoTramite::find($id);

        return view('tipo-tramite.show', compact('tipoTramite'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tipoTramite = TipoTramite::find($id);

        return view('tipo-tramite.edit', compact('tipoTramite'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TipoTramiteRequest $request, TipoTramite $tipoTramite): RedirectResponse
    {
        $tipoTramite->update($request->validated());

        return Redirect::route('tipos-tramites.index')
            ->with('success', 'TipoTramite updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        TipoTramite::find($id)->delete();

        return Redirect::route('tipos-tramites.index')
            ->with('success', 'TipoTramite deleted successfully');
    }
}
