<?php
namespace App\Model;

class Etudiant {
    private string $ine;
    private string $nom;
    private string $prenom;
    private string $email;

    public function __construct(string $nom, string $prenom,string $email) {
        $this->ine = "";
        for ($i=0; $i<11; $i++) {
            rand(0, 1) === 0 ? $this->ine .= rand(0, 9) : $this->ine .= chr(rand(65, 90));
        }
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

    public function getINE(): string {
        return $this->ine;
    } 

}
