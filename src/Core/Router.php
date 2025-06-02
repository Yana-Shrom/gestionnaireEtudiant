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
            default:
                echo "Page non trouvée.";
        }
    }
}
