<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil Étudiant</title>
</head>
<body>
    <h1>Bienvenue</h1>
    <form action="?action=ajout_etudiant" method="post">
        <input type="text" name="prenom" placeholder="Prénom" required>
        <input type="text" name="nom" placeholder="Nom" required>
        <button type="submit">Ajouter Étudiant</button>
    </form>
    <a href="?action=list_etudiants">Voir les étudiants</a>
</body>
</html>
