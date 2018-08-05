<?php

namespace App\Http\Controllers;

use App\Magazine;
use App\Http\Requests\CreateMagazineRequest;

class MagazineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $magazines = Magazine::get();

        return view('magazine.index')
            ->with('magazines', $magazines);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('magazine.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateMagazineRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateMagazineRequest $request)
    {
        $magazine = new Magazine;

        $magazine->name   = $request->get('name');
        $magazine->price  = $request->get('price');
        $magazine->cover  = $request->get('cover');
        $magazine->colour = $request->get('colour');
        $magazine->size   = $request->get('size');
        $magazine->theme  = $request->get('theme');

        $magazine->save();

        return redirect()->route('magazine.index')
            ->with('message', "success|'It has been created successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $magazine = Magazine::find($id);
        $magazine->delete();

        return redirect()
            ->route('magazine.index')
            ->with('status', $magazine->name . ' has been deleted');
    }
}
