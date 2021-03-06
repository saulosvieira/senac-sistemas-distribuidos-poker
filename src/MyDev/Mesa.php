<?php

namespace MyDev;


use MyDev\Interfaces\BaralhoInterface;
use MyDev\Interfaces\JogadorInterface;
use MyDev\Interfaces\MesaInterface;
use \Exception;

class Mesa implements MesaInterface
{
    /* @var Baralho $baralho */
    private $baralho;
    /* @var JogadorInterface[] $jogadores */
    private $jogadores;
    /* @var Carta[] $cartasDaMesa */
    private $cartasDaMesa = array();
    /* @var Carta[] $flop */
    private $flop;
    /* @var Carta $river */
    private $river;
    /* @var Carta */
    private $turn;

    /**
     * @param BaralhoInterface $baralho
     * @param Jogador[] $jogadores
     */
    public function __construct(BaralhoInterface $baralho, array $jogadores)
    {
        $this->baralho = $baralho;
        $this->jogadores = $jogadores;

    }

    /**
     * Retira as 3 cartas do baralho para abertura do flop
     */
    public function abrirFlop()
    {
        $c1 = $this->baralho->getCartaDoTopo();
        $c2 = $this->baralho->getCartaDoTopo();
        $c3 = $this->baralho->getCartaDoTopo();
        array_push($this->cartasDaMesa, $c1, $c2, $c3);
        $this->flop = $this->cartasDaMesa;
    }

    /**
     * Retorna as 3 cartas do Flop
     * @return Carta[]
     * @throws Exception
     */
    public function getFlop()
    {
        if (count($this->flop) != 3) {
            throw new Exception('É necessário abrir o flop antes de recuperá-lo');
        }
        return $this->flop;
    }

    /**
     * Retirna 1 cartas do topo do baralho para o turn
     */
    public function abrirTurn()
    {
        if (count($this->flop) != 3) {
            throw new Exception('É necessário abrir o flop antes de abrir o turn');
        }

        $c = $this->baralho->getCartaDoTopo();
        $this->turn = $c;
    }

    /**
     * Retorna 1 carta do turn
     * @return Carta
     * @throws Exception
     */
    public function getTurn()
    {
        if (is_null($this->turn)) {
            throw new Exception('É necessário abrir o turn antes de recuperá-lo');
        }
        return $this->turn;
    }

    /**
     * Retira 1 carta do topo do baralho para o river
     * @throws Exception
     */
    public function abrirRiver()
    {
        if (count($this->flop) != 3 || is_null($this->turn)) {
            throw new Exception('É necessário abrir o flop e o turn antes de abrir o river');
        }

        $c = $this->baralho->getCartaDoTopo();
        $this->river = $c;
    }

    /**
     * Retorna 1 carta do river
     * @return Carta
     * @throws Exception
     */
    public function getRiver()
    {
        if(is_null($this->river)){
            throw new Exception('É necessário abrir o river para recuperálo');
        }
        return $this->river;
    }

    /**
     * @param JogadorInterface $jogador
     * @return JogadorInterface|Jogador
     * @throws Exception
     */
    public function getProximoJogador(JogadorInterface $jogador)
    {
        if(count($this->jogadores) <= 1){
            throw new \Exception('Para buscar o próximo jogador é necessário ter mais de um jogador na mesa;');
        }

        $jogador_encontrado = false;
        $volta_na_mesa = false;
        for($i = 1; $i <= 8; $i++){
            if($jogador->getPosicao() == $i && !$jogador_encontrado){
                $jogador_encontrado = $jogador->getPosicao();
            }
            if($i < 8) {

                if ($jogador_encontrado && $i > $jogador->getPosicao() && !$volta_na_mesa) {
                    foreach ($this->jogadores as $jog) {
                        if($i == $jog->getPosicao()){
                            return $jog;
                        }
                    }
                }

                if($volta_na_mesa){
                    echo $i;
                    foreach ($this->jogadores as $jog) {
                        if($i == $jog->getPosicao()){
                            return $jog;
                        }
                    }
                }
            }else{
                $i = 0;
                $volta_na_mesa = true;
            }
        }
        return $jogador;
    }

    /**
     * @return JogadorInterface[]
     */
    public function getJogadores()
    {
        return $this->jogadores;
    }

    /**
     * Retorna o tatal de jogadores na mesa
     * @return int
     */
    public function getTotalJogadores()
    {
        return count($this->jogadores);
    }


}