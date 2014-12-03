<?php

namespace MyDev\Interfaces;

interface RodadaInterface {

    public function __construct(PartidaInterface $partida);

    public function apostar(JogadorInterface $jogador, $valor);

    public function mesa(JogadorInterface $jogador);

    public function correr(JogadorInterface $jogador);

    public function preFlopy();

    public function flopy();

    public function turn();

    public function river();
}