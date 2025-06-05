<?php
namespace App\Controller;

use App\Model\Etudiant;
use App\Model\Note;

class EtudiantController {
    private array $etudiants = [];

    public function __construct() {
        session_start();
        if (!isset($_SESSION['etudiants'])) {
            $_SESSION['etudiants'] = [];
        }
        $this->etudiants = &$_SESSION['etudiants'];
    }

    public function list() {
        $etudiants = $this->etudiants;
        include __DIR__ . '/../View/etudiants_list.php';
    }

    public function ajouter(array $data) {
        if (!empty($data['nom']) && !empty($data['prenom'])) {
            $etudiant = new Etudiant($data['nom'], $data['prenom']);
            $etudiant->ajouterNote(new Note(15));
            $etudiant->ajouterNote(new Note(17));
            $this->etudiants[] = $etudiant;
        }
        header("Location: ?action=list_etudiants");
        exit;
    }
}
