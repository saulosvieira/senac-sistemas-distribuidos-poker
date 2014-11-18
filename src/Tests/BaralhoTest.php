<?php


use MyDev\Baralho;

class BaralhoTest extends PHPUnit_Framework_TestCase {

    public function testEmbaralhaBaralhoCorretamente(){
        $b = new Baralho();

        $b->gerarBaralho();
        $cartas = $b->getCartas();
        $this->assertEquals($b->getCartas(), $cartas);
        //emabaralhando o baralho
        $b->embaralhar();

        $this->assertNotEquals($b->getCartas(), $cartas);
    }


    public function testGetCartaDoTopoCorretamente(){
        $b = new Baralho();
        $b->gerarBaralho();
        //emabaralhando o baralho
        $b->embaralhar();
        $cartas = $b->getCartas();
        $this->assertEquals($b->getCartaDoTopo(),$cartas[1]);
        $this->assertEquals(50, count($b->getCartas()));
        $this->assertNotNull($b->getCartaDoTopo());
    }

    
} 