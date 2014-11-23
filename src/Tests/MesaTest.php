<?php


use MyDev\Baralho;
use MyDev\Carta;
use MyDev\Jogador;
use MyDev\Mesa;

class MesaTest extends PHPUnit_Framework_TestCase
{
    protected $jogadores;
    protected $carta1;
    protected $carta2;

    protected function setUp(){
        $carta1 = new Carta('o', 1);
        $carta2 = new Carta('o', 2);
        $this->jogadores = array(new Jogador($carta1, $carta2), new Jogador($carta1, $carta2));
    }

    public function testAbreFlopCorretamente()
    {
        $b = new Baralho();
        $b->gerarBaralho();
        $b->embaralhar();
        $m = new Mesa($b, $this->jogadores);

        $cartas_flop = array(
            $b->getCarta(1),
            $b->getCarta(3),
            $b->getCarta(5)
        );

        $total_antes_do_flop = $b->getTotalCartas();

        $m->abrirFlop();
        //assets
        $this->assertEquals(52, $total_antes_do_flop);
        $this->assertEquals(46, $b->getTotalCartas());
        $this->assertEquals($m->getFlop(), $cartas_flop);
        $this->assertEquals(count($m->getFlop()), 3);
    }

    public function testAbreTurnCorretamente(){
        $b = new Baralho();
        $b->gerarBaralho();
        $b->embaralhar();
        $m = new Mesa($b, $this->jogadores);

        $cartas = $b->getCartas();
        $m->abrirFlop();

        $m->abrirTurn();

        $this->assertEquals($m->getTurn(), $cartas[7]);

    }

    public function testAbreRiverCorretamente(){
        $b = new Baralho();
        $b->gerarBaralho();
        $b->embaralhar();
        $m = new Mesa($b, $this->jogadores);

        $cartas = $b->getCartas();
        $m->abrirFlop();

        $m->abrirTurn();

        $m->abrirRiver();

        $this->assertEquals($m->getRiver(), $cartas[9]);
    }
}