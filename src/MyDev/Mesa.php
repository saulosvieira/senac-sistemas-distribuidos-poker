<?php

namespace MyDev;


use MyDev\Interfaces\BaralhoInterface;
use MyDev\Interfaces\MesaInterface;
use \Exception;

class Mesa implements MesaInterface{

    private $baralho;
    private $flop;
    private $cartasDaMesa = array();

    public function __construct(BaralhoInterface $baralho)
    {
        $this->baralho = $baralho;
    }

    public function abrirFlop()
    {
        $c1 = $this->baralho->getCartaDoTopo();
        $c2 = $this->baralho->getCartaDoTopo();
        $c3 = $this->baralho->getCartaDoTopo();
        array_push($this->cartasDaMesa, $c1, $c2, $c3);
        $this->flop = $this->cartasDaMesa;
    }

    public function getFlop()
    {
        if(count($this->flop) != 3){
            throw new Exception('É necessário abrir o flop antes de recuperálo');
        }
        return $this->flop;
    }

    public function abrirTurn()
    {
        // TODO: Implement abrirTurn() method.
    }

    public function getTurn()
    {
        // TODO: Implement getTurn() method.
    }

    public function abrirRiver()
    {
        // TODO: Implement abrirRiver() method.
    }

    public function getRiver()
    {
        // TODO: Implement getRiver() method.
    }
}