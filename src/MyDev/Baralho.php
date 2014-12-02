<?php


namespace MyDev;


use MyDev\Interfaces\BaralhoInterface;
use MyDev\Interfaces\CartaInterface;
use Exception;

class Baralho implements BaralhoInterface
{
    /* @var CartaInterface[] $cartas */
    private $cartas = array();
    private $nipes = array('C', 'E', 'O', 'P');
    private $valores = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13);

    /**
     * Gera o baralho
     */
    public function gerarBaralho()
    {
        foreach ($this->nipes as $n) {
            foreach ($this->valores as $v) {
                array_push($this->cartas, new Carta($n, $v));
            }
        }
    }

    /**
     * Emabaralha as cartas do baralho
     * @throws Exception
     */
    public function embaralhar()
    {
        if (count($this->cartas) < 52) {
            throw new \Exception('O baralho deve ser gerado antes de ser embaralhado');
        }

        $cartas_embaralhadas = array();
        $keys = array_keys($this->cartas);
        shuffle($keys);

        foreach ($keys as $key) {
            array_push($cartas_embaralhadas, $this->cartas[$key]);
        }

        $this->setCartas($cartas_embaralhadas);
    }

    /**
     * @return Carta[]
     * @throws Exception
     */
    public function getCartas()
    {
        if(count($this->cartas) == 0){
            throw new Exception('Baralho vazio, verifique se o baralho foi gerado corretamente.');
        }
        return $this->cartas;
    }

    /**
     * @param CartaInterface[] $cartas
     */
    public function setCartas(array $cartas)
    {
        if (isset($this->cartas)) {
            $this->cartas = array();
        }
        $this->cartas = $cartas;
    }

    /**
     * Retorna a carta da posição solicitada
     * @param $key
     * @return CartaInterface
     */
    public function getCarta($key)
    {
        return $this->cartas[$key];
    }


    /**
     * Retorna a segunda carta do topo, descartando a primeira
     * @return CartaInterface
     * @throws Exception
     */
    public function getCartaDoTopo()
    {
        if(count($this->cartas) == 0){
            throw new Exception('Baralho vazio, verifique se o baralho foi gerado corretamente.');
        }
        $key = key($this->cartas);
        $this->descartarCarta($key);
        return array_shift($this->cartas);
    }

    /**
     * Descarta a carta da posição passada para o array de cartas
     * @param int $key
     */
    public function descartarCarta($key)
    {
        unset($this->cartas[$key]);

    }


    /**
     * @return int
     */
    public function getTotalCartas()
    {
        return count($this->cartas);
    }
}