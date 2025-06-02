<?php
namespace App\Controller;

use App\Model\Etudiant;

class EtudiantController {
    public function list() {
        $etudiants = [
            new Etudiant(1, 'Alice', 'alice@example.com'),
            new Etudiant(2, 'Bob', 'bob@example.com')
        ];
        include __DIR__ . '/../View/etudiants_list.php';
    }
}
