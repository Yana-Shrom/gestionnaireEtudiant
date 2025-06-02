<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion etudiant</title>
</head>
<body>
    <main>
        <section>
            <form action="ajout_etudiant">
                <label for="prenom">Prenom :</label>
                <input type="text" name="prenom" id="prenom">
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom">
                <label for="email">Email : </label>
                <input type="email" name="email" id="email">
                <input type="submit" value="Ajouter">
            </form>
        </section>

        <section>
            <h2>Voir les étudiant : <a href="?action=list_etudiants">ici</a></h2>
        </section>
    </main>
</body>
</html>