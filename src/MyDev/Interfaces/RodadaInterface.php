<?php

namespace MyDev\Interfaces;

/**
 * Interface RodadaInterface
 * @package MyDev\Interfaces
 */
interface RodadaInterface {

    /**
     * @param PartidaInterface $partida
     */
    public function __construct(PartidaInterface $partida);

    /**
     * @param JogadorInterface $jogador
     * @param $valor
     * @return mixed
     */
    public function apostar(JogadorInterface $jogador, $valor);

    /**
     * @param JogadorInterface $jogador
     * @return mixed
     */
    public function mesa(JogadorInterface $jogador);

    /**
     * @param JogadorInterface $jogador
     * @return void
     */
    public function correr(JogadorInterface $jogador);

    /**
     * @return void
     */
    public function preFlopy();

    /**
     * @return void
     */
    public function flopy();

    /**
     * @return void
     */
    public function turn();

    /**
     * @return void
     */
    public function river();
}