<?php include'./inc/header.inc.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="index.php">Retour Accueil</a> / Inscription</span>
    <h2>Créer votre compte</h2>
  </div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
        <form id="register-form" action="./core/service-user.php" method="post" class="mb-3">
        <input type="hidden" name="action" value="add">
            <input id="nom" type="text" name="nom" class="form-control" required="required" placeholder="Nom">
            <input id="prenom" type="text" name="prenom" class="form-control" required="required" placeholder="Prénom">
            <input id="mail" type="text" name="mail" class="form-control" required="required" placeholder="Email">
            <input id="adresse" type="text" name="adresse" class="form-control" required="required" placeholder="Adresse">
            <input id="cp" type="text" name="cp" class="form-control" required="required" placeholder="Code Postal">
            <input id="ville" type="text" name="ville" class="form-control" required="required" placeholder="Ville">
            <input id="tel" type="text" name="tel" class="form-control" required="" placeholder="téléphone">
            <input id="lon" type="hidden" name="lon" class="form-control">
            <input id="lat" type="hidden" name="lat" class="form-control">
            <input id="pseudo" type="text" name="pseudo" class="form-control" required="required" placeholder="Votre pseudo">
            <input id="mdp" type="text" name="mdp" class="form-control" required="required" placeholder="Votre mot de passe">
            <input id="confpwd" type="text" name="confpwd" class="form-control" required="required" placeholder="Confirmez votre mot de passe">
            <!--<img src="images/CheckBox.png" widht= "20px" height= "20px" alt="checkbox"></img>En validant mon inscription, j'accèpte les CGU et le mentions légales de Lend Your Phone-->
            
            <img class="box" src="./images/CheckBox.png" id="box" name="box" class="img-responsive" alt="properties">J'ai lu et j'accepte les <a href="">CGU et les mentions légales de Lend Your Phone.</a>
            
            <button type="button" id="RegisterMe" class="btn btn-success" name="Submit">Valider</button>
        </form>    
            
        </div>
  
</div>
</div>
</div>

<?php include'./inc/footer.inc.php';?>