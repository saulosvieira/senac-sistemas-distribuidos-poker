<?php

namespace MyDev;


use MyDev\Interfaces\CartaInterface;
use MyDev\Interfaces\JogadorInterface;

class Jogador implements JogadorInterface{

    public function setMao(CartaInterface $carta1, CartaInterface $carta2)
    {
        // TODO: Implement setMao() method.
    }

    /**
     * Retorna um array de 2 posições com as cartas na mão do jogador
     * @return array
     */
    public function getMao()
    {
        // TODO: Implement getMao() method.
    }
}