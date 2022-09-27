<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <link type="text/css" rel="stylesheet" href="style.css" />
  <title>Page d'inscription</title>
 </head>
 <body>
<?php
include('modele.php');//connexion

if (isset($_POST['nom'])  && $_POST['nom']!='')
{
	$nom=strip_tags($_POST['nom']);	
}
if (isset($_POST['prenom'])  && $_POST['prenom']!='')
{
	$prenom=strip_tags($_POST['prenom']);
}
if (isset($_POST['email'])  && preg_match('#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,6}$#', $_POST['email']))
{
	$email=strip_tags($_POST['email']);
}
if (isset($_POST['mdp']) && $_POST['mdp']!='')
{
	$mdp=strip_tags($_POST['mdp']);
}
if ($mdp==$_POST['mdp2']) 
{
	$mdp=crypt($mdp);
}

//si le mail est déjà utilisé
$reqtest=$bdd->prepare('SELECT * FROM membres where mem_mail=?');
$reqtest->execute(array($email));
if ($reqtest->fetch())
{
	echo "Cette adresse est déjà utilisée" ;
}	
else if ($nom!='' && $prenom!='' && $email!='' && $mdp!='') {
	$insert=$bdd->prepare("INSERT INTO membres VALUES (:id,:nom,:prenom,:mail,:mdp)");
	$insert->execute(array('id'=> '','nom' => $nom, 'prenom' => $prenom, 'mail' => $email, 'mdp' => $mdp));
	echo "Félicitations! Vous êtes désormais membre "."<a href='connexion.php'>connectez-vous</a>";
}
else{
	echo "Il y a eu erreur lors de la validation du formulaire";
}

?>