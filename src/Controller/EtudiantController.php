<?php
namespace App\Controller;

use App\Model\Etudiant;

class EtudiantController {
    public function list() {
        $etudiants = [
            new Etudiant('De La CRUZ','Alice', 'alice@example.com'),
            new Etudiant('Jean','Bob', 'bob@example.com')
        ];
        include __DIR__ . '/../View/etudiants_list.php';
    }

}
