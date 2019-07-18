<?php
    ini_set('display_errors', true);
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<!-- includes-->
<?php
    if(file_exists('./inc/header.inc.php')) include('./inc/header.inc.php');
    if(file_exists('./inc/carousel.inc.php')) include('./inc/carousel.inc.php');
?>
</head>

<div class="container">
    <?php
        if(!empty($_SESSION['user']['id'])){
        echo '<div class="properties-listing spacer"> <a href="lesannonces.php" class="pull-right viewall">Voir toutes les annonces</a> ';
        }else{
        echo '<div class="properties-listing spacer"><a href="" data-toggle="modal" data-target="#loginpop" class="pull-right viewall">Voir toutes les annonces</a> ';
        }
    ?>
<h2>Dernières annonces mises en ligne</h2>
</div>
    <div id="owl-example" class="owl-carousel">
    <?php
    //1 connexion
    require ("./core/connexion.php");
    //2 écriture de la requête
    $sql = "SELECT * FROM annonces WHERE enabled=1 ORDER BY id DESC LIMIT 8";
    //3 éxécution de la requête
    $req = mysqli_query($connexion, $sql) or die(mysqli_error($connexion));
    //traitement des données
    if(mysqli_num_rows($req)==0){
        echo "désolé pas d'annonce";
    }else{
        while($annonce = mysqli_fetch_array($req)){
        
    $tpl = file_get_contents('./tpl/banner_annonces.tpl.html');
    $tpl = str_replace('##marque##',trim(addslashes(ucfirst($annonce['marque']))), $tpl);
    $tpl = str_replace('##model##',trim(stripslashes(ucfirst($annonce['model']))), $tpl);
    $tpl = str_replace('##prix##',trim(stripslashes(ucfirst($annonce['prix']))), $tpl);
    $tpl = str_replace('##image##',$annonce['images'], $tpl);
    $tpl = str_replace('##id##',trim(stripslashes(ucfirst($annonce['id']))), $tpl); 
    echo $tpl;
        }
    }  
    ?>
</div>
</div>
<br>
<?php
    if(file_exists('./inc/footer.inc.php')) include('./inc/footer.inc.php');
?>
</html>