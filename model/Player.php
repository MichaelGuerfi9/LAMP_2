<?php
class Player
{
    protected $hand;
    protected $pseudo;

    public function __construct($toto)
    {
        $this->hand = [];
        $this->pseudo = $toto;
    }

    public function take($cards)
    {
        foreach ($cards as $card) {
            $this->hand[] = $card;
        }
    }

    public function getHandValue()
    {
        $i = 0;
        foreach ($this->hand as $card) {
            $i += $card->getValue();
        }
        return $i;
    }
}
