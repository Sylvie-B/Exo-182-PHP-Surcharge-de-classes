<?php


class Sorcier extends Personnage
{
    public function __construct()
    {
        parent::__construct();

        // def des propriétés de sorcier
        $this->x = 125;
        $this->y = 125;
    }
}

