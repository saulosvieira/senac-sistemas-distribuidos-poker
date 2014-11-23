<?php

namespace MyDev\Interfaces;


interface PokerInterface{


    /**
     * Retorna true se o jogo atual for uma sequencia
     * @return boolean
     */
    public function isStraightFlush();
}