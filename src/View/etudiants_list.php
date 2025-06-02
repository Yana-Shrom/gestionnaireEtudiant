<h1>Liste des étudiants</h1>
<ul>
<?php foreach ($etudiants as $etudiant): ?>
    <li><?= $etudiant->getINE() ."-".  htmlspecialchars($etudiant->getNom()) ?> (<?= htmlspecialchars($etudiant->getEmail()) ?>)</li>
<?php endforeach; ?>
</ul>
