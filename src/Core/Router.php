<?php
namespace App\Core;

use App\Controller\EtudiantController;

class Router {
    public function handleRequest() {
        $action = $_GET['action'] ?? 'index';

        switch ($action) {
            case 'list_etudiants':
                (new EtudiantController())->list();
                break;
            case 'ajout_etudiant':
                (new EtudiantController())->ajouter($_POST);
                break;
            default:
                include __DIR__ . '/../View/home.php';
        }
    }
}
