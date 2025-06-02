<?php
namespace App\Model;

class Etudiant {
    private int $ine;
    private string $nom;
    private string $prenom;
    private string $email;

    public function __construct(int $ine, string $nom, string $prenom,string $email) {
        $this->ine = $ine;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getEmail(): string {
        return $this->email;
    }
}
