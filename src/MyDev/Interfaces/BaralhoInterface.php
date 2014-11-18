<?php

namespace MyDev\Interfaces;

interface BaralhoInterface{

    public function gerarBaralho();

    public function embaralhar();

    public function getCartas();

    public function setCartas(array $cartas);

    /**
     * @return int
     */
    public function getTotalCartas();

    /**
     * Retorna a carta da posição solicitada
     * @param $key
     * @return CartaInterface
     */
    public function getCarta($key);



    /**
     * Retorna a segunda carta do topo, descartando a primeira
     * @return CartaInterface
     */
    public function getCartaDoTopo();

    /**
     * Descarta a carta da posição passada para o array de cartas
     * @param $key
     */
    public function descartarCarta($key);
}