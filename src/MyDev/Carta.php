<?php

namespace MyDev;


use MyDev\Interfaces\CartaInterface;

class Carta implements CartaInterface
{

    private $valor;
    private $nipe;


    public function __construct($nipe, $valor)
    {
        $this->setNipe($nipe);
        $this->setValor($valor);
    }

    /**
     * @param mixed $nipe
     */
    public function setNipe($nipe)
    {
        $this->nipe = $nipe;
    }

    /**
     * @return mixed
     */
    public function getNipe()
    {
        return $this->nipe;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }


}