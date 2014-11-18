<?php


use MyDev\Baralho;
use MyDev\Mesa;

class MesaTest extends PHPUnit_Framework_TestCase
{

    public function testAbreFlopCorretamente()
    {
        $b = new Baralho();
        $b->gerarBaralho();
        $b->embaralhar();
        $m = new Mesa($b);

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
}