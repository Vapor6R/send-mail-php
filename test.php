<?php
  $dest = "desination@email.com";
  $sujet = "Email de test";
  $corp = "Salut ceci est un email de test envoyer par un script PHP";
  $headers = "From: envoyeur@email.com";
  if (mail($dest, $sujet, $corp, $headers)) {
    echo "Email envoy� avec succ�s � $dest ...";
  } else {
    echo "�chec de l'envoi de l'email...";
  }
?>