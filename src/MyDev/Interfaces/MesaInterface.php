<?php

namespace MyDev\Interfaces;

interface MesaInterface{

    public function __construct(BaralhoInterface $baralho, array $jogadores);

    public function abrirFlop();

    public function getFlop();

    public function abrirTurn();

    public function getTurn();

    public function abrirRiver();

    public function getRiver();

    /**
     * Retorna o próximo jogador da mesa em sentido horário
     * @param JogadorInterface $jogador
     * @return JogadorInterface
     */
    public function getProximoJogador(JogadorInterface $jogador);

    /**
     * Retorna todos os jogadores na mesa
     * @return JogadorInterface[]
     */
    public function getJogadores();

    /**
     * Retorna o tatal de jogadores na mesa
     * @return int
     */
    public function getTotalJogadores();
}