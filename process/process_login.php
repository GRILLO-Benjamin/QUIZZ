<?php
if (isset($_POST['pseudo'])) {
    //connexion bdd 
    try {
        $pdo = new PDO('mysql:host=141.94.22.233;dbname=Quizz;charset=utf8','root','', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    } catch (\Throwable $th) {
        die('erreur db');
    }
    // faire la requete
    $pdostmnt = $pdo->prepare('INSERT INTO users(pseudo) VALUES (?)');
    $isSuccess =  $pdostmnt->execute(array($_POST['pseudo']));

    if ($isSuccess) {
        header('Location: ../themes.php?success=Le pseudo à bien été ajouté !');    
    } else {
        header('Location: ../login.php?error=Erreur lors de l\'enregistrement du pseudo !');    
    }
    
    //rediriger vers une page
} else {
    header('Location: ../login.php?error=Le formulaire n\'est pas valide !');    
}
