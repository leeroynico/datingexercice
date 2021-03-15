<?php
//require_once '../models/connectiondb.php';
require_once '../models/Requete.php';
require_once '../models/RequetesCreate.php';
$controlerequete = new Requetes();


if (
  !empty($_POST['nom']) && !empty($_POST['prenom'])
  && !empty($_POST['email']) && !empty($_POST['password'])
  && !empty($_POST['pasword-confirm'])
) {
  //récupération infos users
  $nomUser =  htmlspecialchars($_POST['nom']);
  $prenomUser = htmlspecialchars($_POST['prenom']);
  $emailUser = htmlspecialchars($_POST['email']);
  $departementUser = ($_POST['departement']);
  $passwordUser = htmlspecialchars($_POST['password']);
  $paswordConfirm = htmlspecialchars($_POST['pasword-confirm']);
  $sportUser = $_POST['sport'];
  $niveauUser = $_POST['niveau'];
  if ($controlerequete->checkEmailExist($emailUser)) //vérif si email existe déja 
  {
    header('Location:../views/inscription.php?reg_err=already');
    die();
  } else if ($passwordUser == $paswordConfirm) {
    session_start();
    $_SESSION['users'] = $emailUser;
    $passwordUser = password_hash($password, PASSWORD_DEFAULT);
    $newUser = new RequetesCreate;
    $newUser->createUsers(
      $nomUser,
      $prenomUser,
      $departementUser,
      $passwordUser,
      $emailUser,
      $sportUser,
      $niveauUser
    );
    // $insertSql = "INSERT INTO users (nom,prenom,département,password,email,code_sport,code_niveau) 
    // VALUES (:nom,:prenom,:département,:password,:email,:sport,:niveau)";
    // $insertrequete = $pdo->prepare($insertSql);
    // $insertrequete->execute([
    //   ':nom'=>$nom,
    //   ':prenom'=>$prenom,
    //   ':département'=>$departement,
    //   ':password'=>$password,
    //   ':email'=>$email,
    //   ':sport'=>$sport,
    //   ':niveau'=>$niveau
    // ]);
    header('Location:../views/inscription.php?reg_err=succes');
    die();
  } else {
    header('Location:../views/inscription.php?reg_err=passwordconfirm');
    die();
  }
} else {
  header('Location:../views/inscription.php?reg_err=champs_vides');
  die();
}
