<?php

namespace MyDev;


use MyDev\Interfaces\CartaInterface;
use MyDev\Interfaces\JogadorInterface;

class Jogador implements JogadorInterface{

    private $posicao;
    private $carta1;
    private $carta2;

    /**
     * @param int $posicao
     */
    public function __construct($posicao)
    {
        $this->posicao = $posicao;
    }

    /**
     * Recebe 2 cartas que compoõe a mão do jogador
     * @param CartaInterface $carta1
     * @param CartaInterface $carta2
     */
    public function setMao(CartaInterface $carta1, CartaInterface $carta2)
    {
        $this->carta1 = $carta1;
        $this->carta2 = $carta2;
    }

    /**
     * Retorna um array de 2 posições com as cartas na mão do jogador
     * @return CartaInterface[]
     */
    public function getMao()
    {
        return array($this->carta1, $this->carta2);
    }

    /**
     * @return int
     */
    public function getPosicao()
    {
        return $this->posicao;
    }



}