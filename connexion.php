<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>Page de connexion</title>
 </head>
 <body>
  <div id="bloc_page" >
  
    <div id="formulaire" >
      <h1>Connectez-vous</h1>
      <form method="post" action="bienvenue.php" id="form">
      	<p>
        	<label for="email">Votre mail</label> : <input type="text" name="email" id="email" />
        </p>
        <p>
        	<label for="mdp">Votre mot de passe</label> : <input type="password" name="mdp" id="mdp"/>
        </p>
        <p>
          <input id="submit" type="button" value="Valider"/>
          <input type="reset" name="reset" value="Reset"/>
       </p>
      </form>
      	<p id='result'>
        </p>
    </div>
  </div>
 <script src='jquery-2.1.3.min.js'></script>
 <script>
  var sub = document.getElementById('submit');
  var xhr = new XMLHttpRequest() ;
  sub.addEventListener('click',function(){
  xhr.open('POST', 'verification.php' ) ;
  var form = new FormData( ) ;
  form.append('email', $('#email').val() ) ;
  form.append('mdp', $('#mdp').val() ) ;
  xhr.send(form) ; } ,false);

  xhr.onreadystatechange = function( ) {
  if ( xhr.readyState == 4 && xhr.status == 200) {
  var cels = xhr.responseXML.getElementById('nom') ;
  txtres = document.getElementById('result'); 
  txtres.innerHTML=cels.innerHTML;
  }
  } ;
  

 </script>
 </body>
</html>
      