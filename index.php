<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <link type="text/css" rel="stylesheet" href="style.css" />
  <title>Page d'inscription</title>
 </head>
 <body>
  <div id="bloc_page" >
  
    <div id="formulaire" >
      <h1>Inscrivez-vous</h1> 
      <form method="post" action="traitement.php" id="form">
       <p>
        <label for="nom">Votre nom</label> : <input type="text" name="nom" id="nom" />
       </p>
       <p>
        <label for="prenom">Votre prénom</label> : <input type="text" name="prenom" id="prenom"/>
       </p>
       <p>
        <label for="email">Votre email</label> : <input type="text" name="email" id="email"/>
       </p>
       <p>
        <label for="mdp">Votre mot de passe</label> : <input type="password" name="mdp" id="mdp"/>
       </p>
       <p>
        <label for="mdp2">Confirmer le mot de passe</label> : <input type="password" name="mdp2" id="mdp2"/>
       </p>
       <p>
        <input id="submit" type="submit" value="Valider"/>
        <input type="reset" name="reset" value="Reset"/>
       </p>

      </form>
      
      <p id='erreur'>
      </p>
       

    </div>

    <div id="membre">
     <p>Déjà membre? Alors <a href="connexion.php">connectez-vous</a></p> 
    </div>
  
  </div>
  <script src="jquery-2.1.3.min.js"></script>
  <script>
    var myform = document.getElementById('form');
    txtErreur = document.getElementById('erreur'); 
    myform.addEventListener('submit', function(e) {
    if($('#nom').val()=='')
    {
      txtErreur.innerHTML='nom obligatoire';
      e.preventDefault() ;
    }
    else if ($('#prenom').val()==''){
      txtErreur.innerHTML='prénom obligatoire';
      e.preventDefault() ;
    }
    else if ($('#email').val()==''){
      txtErreur.innerHTML='email obligatoire';
      e.preventDefault() ;
    }
    else if (!/^[ a-z0-9. _-]+@[a-z0-9. _-]+\.[a-z]{2,6}$/.test($('#email').val())) {  
      txtErreur.innerHTML='L\'adresse mail n\'est pas valide';
      e.preventDefault() ;
    }
    else if ($('#mdp').val()==''){
      txtErreur.innerHTML='Mot de passe obligatoire';
      e.preventDefault() ;    
    }
    else if ($('#mdp').val().length<6){
      txtErreur.innerHTML='Le mot de passe doit comporter au moins 6 caractères';
      e.preventDefault() ; 
    }
    else if ($('#mdp2').val()==''){
      txtErreur.innerHTML='Veuillez confirmer le mot de passe';
      e.preventDefault() ;
    } 
    else if ($('#mdp2').val()!=$('#mdp').val()){
      txtErreur.innerHTML='Les mots de passe ne sont pas identiques';
      e.preventDefault() ;
    }    
    else{
    //  submit est exécuté
    }  
    } , true) ;
    
    myform.addEventListener('reset', function(e) {
      txtErreur.innerHTML=''; //vider le msg d'erreur
    } , false);  
  
  </script>
  
 </body>
</html