<?php
namespace App\Model;

class Etudiant extends Personne {
    private array $notes = [];

    public function ajouterNote(Note $note) {
        $this->notes[] = $note;
    }

    public function getNotes(): array {
        return $this->notes;
    }

    public function calculerMoyenne(): float {
        if (empty($this->notes)) return 0;
        $total = array_reduce($this->notes, fn($carry, $note) => $carry + $note->getValeur(), 0);
        return $total / count($this->notes);
    }

    public function afficherInformations() {
        echo "Nom: {$this->nom}, Prénom: {$this->prenom}<br>";
        echo "Notes: ";
        foreach ($this->notes as $note) {
            echo $note->getValeur() . " ";
        }
        echo "<br>Moyenne: " . $this->calculerMoyenne() . "<br>";
    }
}
