<?php

namespace MyDev\Interfaces;

interface JogadorInterface{

    public function setMao(CartaInterface $carta1, CartaInterface $carta2);

    /**
     * Retorna um array de 2 posições com as cartas na mão do jogador
     * @return array
     */
    public function getMao();

}