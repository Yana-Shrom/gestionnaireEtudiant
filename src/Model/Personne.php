<?php 
namespace App\Model;

abstract class Personne {
    protected string $nom;
    protected string $prenom;
    protected string $email;

    public function getNom(): string {
        return $this->nom;
    }

    public function getPrenom(): string {
        return $this->prenom;
    }
    public function getEmail(): string {
        return $this->email;
    }
}