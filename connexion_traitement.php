<?php

session_start();


// $identify = 'kouss';
// $password = 'azerty';

// if ($_POST['password'] == $password && $_POST['login'] == $identify) {
//     header('location:accueil.php');
//     $_SESSION['pseudo'] = $identify;
// } else {
//     echo 'utilisateur incorrect';
// }

$users = json_decode(file_get_contents('user.json'),true);

foreach ($users as $user) {
    if ($_POST['login'] == ($user['login']) && $_POST['password'] == ($user['password'])) {
        $_SESSION['pseudo'] = $user['pseudo'];
        header('location: ./accueil.php');
    } else {
        echo "utilisateur incorrect";
    }
}


