<?php

class Produit {
    private string $nom;
    private float $prix;
    private int $quantite;

    public function __construct(string $nom, float $prix, int $quantite = 1) {
        $this->nom = $nom;
        $this->prix = $prix;
        $this->quantite = $quantite;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getPrix(): float {
        return $this->prix;
    }

    public function getQuantite(): int {
        return $this->quantite;
    }

    public function afficherProduit(): void {
        echo "Produit: {$this->nom} | Prix: {$this->prix} € | Quantité: {$this->quantite}<br>";
    }

    public function ajouterAuPanier(int $quantite): void {
        $this->quantite += $quantite;
    }

    public function getTotal(): float {
        return $this->prix * $this->quantite;
    }
}
