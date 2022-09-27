<?php header('Content-type: text/xml' ) ; ?>
<?xml version="1.0" encoding="utf-8"?>
<?php
$email=strip_tags($_POST['email']);
$mdp=strip_tags($_POST['mdp']);
//$mdp=crypt($mdp);
include('modele.php');//connexion
$reqtest=$bdd->prepare('SELECT * FROM membres where mem_mail=? and mem_mdp=?');
$reqtest->execute(array($email,$mdp));
if ($donnees=$reqtest->fetch())
{
	//$donnees=$reqtest->fetch();
	$retour='Bienvenue '.$donnees['mem_nom'].' '.$donnees['mem_prenom'];
}
else{
	$retour='Veuilez verifier';	
}
?>
<cel id='nom'><?php echo $retour ?></cel>