<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste Étudiants</title>
</head>
<body>
    <h1>Étudiants</h1>
    <?php foreach ($etudiants as $etudiant): ?>
        <div>
            <?php $etudiant->afficherInformations(); ?>
        </div>
    <?php endforeach; ?>
    <a href="?">Retour</a>
</body>
</html>
