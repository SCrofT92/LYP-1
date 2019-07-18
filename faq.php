<?php
    session_start();
?>
<?php
    if(file_exists('./inc/header.inc.php')) include('./inc/header.inc.php');
?>
<head>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</head>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="index.php">Accueil</a> / Faq</span>
    <h2>Faq</h2>
  </div>
</div>
<!-- banner -->
<div class="container">
  <div class="row">
    <div class="col-lg-12">
  <!-- Question sécurité -->
<h2> Questions sécurité </h2> 
  <div class="accordion" id="accordionExample">
    <div class="card">
    <div class="card-header" id="heading6">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
        Les annonces parues sur Lend Your Phone font-elles l'objet d'une vérification avant diffusion ? 
        </button>
      </h5>
    </div>
  <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample">
      <div class="card-body">
      Afin de protéger au mieux les utilisateurs de Lend Your Phone, chaque annonce est vérifiée manuellement par l’équipe de Lend Your Phone. Pas de robot, ni d’informatisation, nous vérifions nous même si les annonces suivent nos Conditions Générales de Ventes. C’est pourquoi l’étape de modération nécessite un certain temps. 
      </div>
    </div>
</div>
  <div class="card">
    <div class="card-header" id="heading7">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
        Que faire si je détecte un comportement suspect chez un vendeur ? 
        </button>
      </h5>
    </div>
    <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionExample">
      <div class="card-body">
      Si vous remarquez un comportement “suspect” chez un vendeur, ou qu’une annonce vous semble être une arnaque, vous pouvez “Signaler cette annonce” via le lien se trouvant à droite de votre écran.
      
      Décrivez ensuite ce qui vous semble suspect dans l’annonce afin de nous aider à améliorer la sécurité de Kicherchekoi.

      L’annonce sera ensuite analysée par l’équipe de Kicherchekoi afin de déterminer si il s’agit réellement d’une arnaque. En cas d’arnaque, l’annonce est supprimée et l’utilisateur est banni du site.
      
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="heading8">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
        Pourquoi mon annonce a-t-elle été refusée ? 
        </button>
      </h5>
    </div>
    <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordionExample">
      <div class="card-body">
        Si votre annonce a été refusé c’est qu’elle ne respecte pas nos Conditions Générales de Ventes.
        En cas de refus de votre annonce, vous recevrez un mail vous indiquant les raisons du refu de votre annonce par l’équipe de Kicherchekoi.
        Votre annonce peut être refusé si son contenu est inapproprié mais également si le prix indiqué de correspond pas à la valeur du produit (souvent synonyme de fraude), ou si l’annonce a déjà été posté plusieurs fois sur le site par le même utilisateur.

        Cependant vous pouvez déposer à nouveau votre annonce, en adaptant son contenu ou son prix.

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
        Comment savoir si il s’agit d’une arnaque ? 
        </button>
      </h5>
    </div>
    <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordionExample">
      <div class="card-body">
        Malgré notre modération manuelle de chaque annonce, il est possible que vous rencontriez des annonces “à risque” sur le site.
        Afin d’informer au mieux nos utilisateurs, nous avons mis en place un guide anti-arnaques, donnant de nombreuses informations afin d’éviter au mieux tout risques d’arnaques et de fraudes.

        Consulter notre Guide Anti-Arnaques
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="heading10">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
        Quelles sont les conditions générales d'utilisation et de vente du site Lend Your Phone ? 
        </button>
      </h5>
    </div>
    <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordionExample">
      <div class="card-body">
      Afin de facilité l’utilisation de Lend Your Phone, des CGU et CGV ont été mise en place.
      Vous pouvez les consulter simplement en consultant les “Mentions légales” accessible depuis le pied de page de chaque page du site. 
      </div>
    </div>
  </div>
</div>
<!-- Fin question sécruité -->
<br>
<!-- Question info & Inscription-->
<h2> Questions Info & Inscription </h2> 
  <div class="accordion" id="accordionExample">
    <div class="card">
    <div class="card-header" id="heading1">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
        A quoi sert Len Your Phone ? 
        </button>
      </h5>
    </div>
    <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionExample">
      <div class="card-body">
      Lend Your Phone est un site de petites annonces spécialisé sur la location de smartphones entre particuliers et/ou professionnels. Cela vous permet de louer et/ou de trouver un téléphone à la location et ainsi gagner de l'argent et/ou économiser de l'argent.

      Consultez les milliers d’annonces en ligne, déposez autant d’annonces que vous le souhaitez, le tout gratuitement. Devenez tout simplement loueur, prêteur, ou bien même les deux, sans dépenser ne serait-ce qu’un centime !

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="heading2">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
        Pourquoi choisir Lend Your Phone ? 
        </button>
      </h5>
    </div>
    <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample">
      <div class="card-body">
      Oui, c’est vrai ? Pourquoi ? Parce que notre équipe tente chaque jour d’améliorer votre expérience de la petite annonce en facilitant la mise en contact entre l'annonceur et le loueur dans les meilleures conditions possibles.

      Tout est mis en oeuvre afin de maximiser le niveau de sécurité sur Lend Your Phone: les annonces sont vérifiées une par une par notre équipe. 
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="heading3">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
        Lend Your Phone est-il un site de petite annonces gratuites ? 
        </button>
      </h5>
    </div>
    <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
      <div class="card-body">
      Nous offrons la possibilité de déposer et consulter l’ensemble des annonces du site de façon complètement gratuite !

      Pour Déposer une annonce gratuite ou contacter un annonceur, il vous suffit de vous connecter à votre compte ou de vous inscrire (gratuitement, bien sûr).
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="heading4">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
        Len Your Phone est-il accessible sur mobile et/ou tablette ? 
        </button>
      </h5>
    </div>
    <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
      <div class="card-body">
      Oui, même pas besoin de télécharger une application, vous pouvez accéder directement au site Kicherchekoi depuis votre smartphone ou votre tablette via votre navigateur internet habituel.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="heading5">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
        Comment s’inscrire sur Lend Your Phone ? 
        </button>
      </h5>
    </div>
    <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
      <div class="card-body">
      Pour s’inscrire sur Lend Your Phone (si vous n’avez pas déjà un compte), rien de plus simple, il vous suffit de suivre les étapes suivantes :

      Cliquez sur “Connexion” en haut de votre écran,
      Saisissez le nom d’utilisateur que vous souhaitez (libre cour à votre imagination, il n’y a pas de règle), votre adresse mail, votre adresse postale et un mot de passe dont vous vous souviendrez. Une fois cette étape terminée, vous pouvez consulter nos CGV puis cocher la case “j'accepte les CGV de Lend Your Phone”.
      Cliquez sur “Valider”, et le tour est joué ! Vous pouvez dès lors déposer votre première annonce gratuite, consulter les annonces ou contacter un annonceur sur le site.

      Un seul compte ne peut être crée par adresse mail, mais vous pouvez vous connecter de façon illimité à votre compte Lend Your Phone, une fois celui-ci créée.

      </div>
    </div>
  </div>
<br>
</div>
  </div>
  </div>
</div>

<?php
    if(file_exists('./inc/footer.inc.php')) include('./inc/footer.inc.php');
?>

