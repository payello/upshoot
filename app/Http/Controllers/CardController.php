<?php

namespace App\Http\Controllers;

use App\Services\CardService;

class CardController extends Controller
{
    /**
     * The card service instance
     *
     * @var CardService
     */
    protected $cardService;

    /**
     * CardController constructor.
     *
     * @param CardService $cardService
     */
    public function __construct(CardService $cardService)
    {
        $this->cardService = $cardService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $cards = collect($this->cardService->getCard());

        return view('cards.index')
            ->with('cards', $cards);
    }
}
