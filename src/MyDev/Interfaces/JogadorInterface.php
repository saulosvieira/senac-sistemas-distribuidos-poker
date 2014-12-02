<?php

namespace MyDev\Interfaces;

interface JogadorInterface{

    /**
     * @param int $posicao
     */
    public function __construct($posicao);

    /**
     * Recebe 2 cartas que compoõe a mão do jogador
     * @param CartaInterface $carta1
     * @param CartaInterface $carta2
     */
    public function setMao(CartaInterface $carta1, CartaInterface $carta2);

    /**
     * Retorna um array de 2 posições com as cartas na mão do jogador
     * @return CartaInterface[]
     */
    public function getMao();


    public function getPosicao();


}