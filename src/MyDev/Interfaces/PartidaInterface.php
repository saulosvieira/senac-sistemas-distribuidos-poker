<?php

namespace MyDev\Interfaces;

interface PartidaInterface {

    public function __construct(MesaInterface $mesa);

    public function getMesa();


}