<?php

namespace MyDev\Interfaces;

use MyDev\Interfaces\BaralhoInterface;

interface PokerInterface{


    /**
     * Retorna true se o jogo atual for uma sequencia
     * @return boolean
     */
    public function isStraightFlush();
}