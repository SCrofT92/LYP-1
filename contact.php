<?php
    session_start();
?>

<?php include'./inc/header.inc.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="index.php">Accueil</a> / Contact</span>
    <h2>Contact</h2>
</div>
</div>
<!-- banner -->
<div class="container">
  <div class="spacer">
    <div class="row contact">
      <!-- Partie gauche form_contact -->
      <?php
        if(file_exists('./inc/form_contact.inc.php')) include('./inc/form_contact.inc.php');
      ?>
      <!-- Partie droite map -->
      <div class="col-lg-6 col-sm-6 ">
        <div class="well"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.701253283442!2d2.4309081156739087!3d48.84483687928603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6729805d9404b%3A0x3f44d85415bf7988!2s9+Avenue+de+Paris%2C+94300+Vincennes!5e0!3m2!1sfr!2sfr!4v1528914991363"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
    if(file_exists('./inc/footer.inc.php')) include('./inc/footer.inc.php');
?>

