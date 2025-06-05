<?php
namespace App\Model;

class Note {
    private float $valeur;

    public function __construct(float $valeur) {
        $this->valeur = $valeur;
    }

    public function getValeur(): float {
        return $this->valeur;
    }
}
