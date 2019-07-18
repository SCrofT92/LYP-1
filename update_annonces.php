<?php
    session_start();
?>

<?php
    if(file_exists('./inc/header.inc.php')) include('./inc/header.inc.php');
?>
<!-- banner -->
<div class="inside-banner">
    <div class="container"> 
        <span class="pull-right"><a href="index.php">Accueil</a> / Modifier mon annonce</span>
        <h2>Modifier mon annonce</h2>
    </div>
</div>
<!-- banner -->
<div class="container">
<div class="properties-listing spacer">
    <?php
    $idAnnonce = $_GET['id'];
    //1 connexion
    require ("./core/connexion.php");
    //2 écriture de la requête
    $sql = "SELECT a.* FROM annonces AS a JOIN users AS u ON a.author=u.id WHERE a.id=".$_GET['id'];
    //3 éxécution de la requête
    $req = mysqli_query($connexion, $sql) or die(mysqli_error($connexion));
    //4 traitement des données
    if(mysqli_num_rows($req)==0){
        echo "désolé pas d'annonce";
    }else{
        while($annonce = mysqli_fetch_array($req)){
        $tpl = file_get_contents('./tpl/update_annonces.tpl.html');
        $tpl = str_replace('##marque##',trim(addslashes(ucfirst($annonce['marque']))), $tpl);
        $tpl = str_replace('##model##',trim(stripslashes(ucfirst($annonce['model']))), $tpl);
        $tpl = str_replace('##systeme##',trim(stripslashes(ucfirst($annonce['systeme']))), $tpl);
        $tpl = str_replace('##stockage##',trim(stripslashes(ucfirst($annonce['stockage']))), $tpl);
        $tpl = str_replace('##accessoires##',trim(stripslashes(ucfirst($annonce['accessoires']))), $tpl);
        $tpl = str_replace('##couleur##',trim(stripslashes(ucfirst($annonce['couleur']))), $tpl);
        $tpl = str_replace('##prix##',trim(stripslashes(ucfirst($annonce['prix']))), $tpl);
        $tpl = str_replace('##texte##',trim(stripslashes(ucfirst($annonce['texte']))), $tpl);
        $tpl = str_replace('##image##',$annonce['images'], $tpl);
        $tpl = str_replace('##image2##',$annonce['images2'], $tpl);
        $tpl = str_replace('##id##',$annonce['id'], $tpl);     
        $tpl = str_replace('##userId##',$_SESSION['user']['id'], $tpl);     



        echo $tpl;
        }
    }  
    ?>      
</div>
<br>
<?php
    if(file_exists('./inc/footer.inc.php')) include('./inc/footer.inc.php');
?>