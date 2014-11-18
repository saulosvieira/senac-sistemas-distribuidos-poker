<?php

namespace MyDev\Interfaces;

interface MesaInterface{

    public function __construct(BaralhoInterface $baralho);

    public function abrirFlop();

    public function getFlop();

    public function abrirTurn();

    public function getTurn();

    public function abrirRiver();

    public function getRiver();
}