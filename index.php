<?php
    //imports
    include './model/model_utilisateur.php';
    include './model/model_admin.php';
    //instances des objets :
    $util = new Utilisateur("Dupond", "Marc");
    $util2 = new Utilisateur("Albert", "Patricia");
    //admin utilise le constructeur d'Utilisateur
    $admin = new Admin("Durand", "Marie");
    echo '<p>Utilisateur : '.$util->getName().'</p>';
    echo '<p>Utilisateur : '.$util2->getName().'</p>';
    //admin utilise le getter public d'utilisateur
    echo '<p>Admin : '.$admin->getName().'</p>';
    //appel de la méthode setActiveUser
    $admin->setActiveUser($util);
    $admin->setActiveUser($util2);
    //affichage de la liste des utilisateurs activés
    $admin->getActiveUser();
?>