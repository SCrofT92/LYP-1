<?php
    session_start();
?>

<?php include'./inc/header.inc.php';?>
<!-- banner -->
<div class="inside-banner">
<div class="container"> 
    <span class="pull-right"><a href="index.php">Accueil</a> / Déposer votre annonce</span>
    <h2>Déposer votre annonce</h2>
</div>
</div>
<!-- form-annonce -->
<div class="container">
    <div class="spacer agents">
        <div class="row">
            <div class="col-lg-8  col-lg-offset-2 col-sm-12">
                <?php
                    if(file_exists('./inc/form_annonce.inc.php')) include('./inc/form_annonce.inc.php');
                ?>
            </div>
        </div>
    </div>
</div>

</div>

<?php include'./inc/footer.inc.php';?>


