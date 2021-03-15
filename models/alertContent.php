<?php
function alertContent()
{
  if (!empty($_GET['reg_err'])) {
    $error = htmlspecialchars($_GET['reg_err']);
    switch ($error) {
      case 'champs_vides':
        echo
        ' <div class="alert alert-danger mx-5">Veuillez remplir tous les champs
        </div>';
      case 'champs_sport_vide':
        echo
        ' <div class="alert alert-danger mx-5">Veuillez remplir le champ sport
        </div>';
        break;
      case 'already':
        echo
        ' <div class="alert alert-danger mx-5">votre email est déja enregistré
         </div>';
        break;
      case 'passwordconfirm':
        echo
        ' <div class="alert alert-danger mx-5">votre mot de passe n\'a pas bien été confirmé
         </div>';
        break;
      case 'succes':
        echo
        ' <div class="alert alert-success mx-5">vous êtes enregistré ! 
         </div>';
      case 'succes_sport':
        echo
        ' <div class="alert alert-success mx-5">votre sport est ajouté ! 
         </div>';
        break;
      case 'connection':
        echo
        ' <div class="alert alert-danger mx-5">mauvais email ou password 
            <a href="../views/inscription.php">
            <button type="button" class="btn btn-primary mx-5">m\'inscrire</button>
            </a>
         </div>';
        break;
    }
  }
}
