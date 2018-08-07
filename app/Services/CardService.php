<?php

namespace App\Services;

class CardService
{
    /**
     * The card suits array
     *
     * @return array
     */
    public function suits()
    {
        return $suits = [
            'H' => 'Hearts',
            'C' => 'Clubs',
            'S' => 'Spades',
            'D' => 'Diamonds',
        ];
    }

    /**
     * The card values array.
     *
     * @return array
     */
    public function values()
    {
        return $cards = [
            'A'  => 'Ace',
            '2'  => 'Two',
            '3'  => 'Three',
            '4'  => 'Four',
            '5'  => 'Five',
            '6'  => 'Six',
            '7'  => 'Seven',
            '8'  => 'Eight',
            '9'  => 'Nine',
            '10' => 'Ten',
            'J'  => 'Jack',
            'Q'  => 'Queen',
            'K'  => 'King',
        ];
    }

    /**
     * Gets the cards value.
     *
     * @return array
     */
    public function getCard()
    {
        $cards = [];

        $suits  = $this->suits();
        $values = $this->values();

        foreach ($values as $value) {
            foreach ($suits as $suit) {
                array_push($cards, $value . ' ' . $suit);
            }
        }
        return $cards;
    }
}
