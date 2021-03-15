<?php

trait Verification
{

  function checkEmpty($checkme)
  {
    isset($checkme) ? true :
      header('Location:../views/inscription.php?reg_err=champs_vides');
  }
}
