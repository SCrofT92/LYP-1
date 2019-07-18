<?php
    session_start();
?>

<?php include'./inc/header.inc.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="index.php">Accueil</a> / Les annonces</span>
    <h2>Les annonces</h2>
  </div>
</div>
<!-- banner  -->
<div class="container">
    <div class="properties-listing spacer">
        <div class="row">
            <!-- Search -->
            <div class="col-lg-3 col-sm-4 ">
                <?php
                require ("./core/connexion.php");
                    if(isset($_GET['motclef'])){
                        $motclef = $_GET['motclef'];
                        $q = array('motclef'=>'%'.$motclef.'%');
                        $sql = 'SELECT marque, model FROM annonces WHERE marque like :motclef or model like :motclef';
                        $fsearch = $bdd->prepare($sql);
                        $fsearch->execute($q);
                        $count = $fsearch->rowCount($sql);
                        if ($count >= 1)
                        {
                            while ($result = $fsearch->fetch())
                            {
                            echo '<a class="liensearch" href="lesannonces.php">'.$result[''].'</a>';
                            }
                        }else{
                            echo "<div>Aucun resultat pour :".$motclef."</div>";
                        }
                        $fsearch->closeCursor();
                    }
                ?>
            <?php include'./inc/form_search.inc.php';?>
            </div>
<!-- Les Annonces-->
<div class="col-lg-9 col-sm-8">
    <div class="row">
        <?php
        //1 connexion
        require ("./core/connexion.php");
        if (isset($_GET['pageno'])) {
        $pageno = $_GET['pageno'];
        } else {
        $pageno = 1;
        }

        $no_of_records_per_page = 9;
        $offset = $pageno * 9 - 9;
        
        $total_pages_sql = "SELECT COUNT(*) FROM annonces";
        $result = mysqli_query($connexion,$total_pages_sql);

        //2 écriture de la requête
        if (!isset($_POST['rechercher'])){
        $sql = "SELECT * FROM annonces WHERE enabled=1 ORDER BY date DESC LIMIT $no_of_records_per_page OFFSET $offset";
        }else {
        $recherche = $_POST['rechercher'];
        $sql = "SELECT * FROM annonces WHERE enabled=1 AND marque='$recherche' OR prix='$recherche' OR model='$recherche' ORDER BY date DESC LIMIT $no_of_records_per_page OFFSET $offset";
        }
        //3 éxécution de la requête
        $req = mysqli_query($connexion, $sql) or die(mysqli_error($connexion));
        $total_rows = mysqli_num_rows($req);
        $total_pages = ceil($total_rows / $no_of_records_per_page);
        //4 traitement des données
        if(mysqli_num_rows($req)==0){
            echo "Désolé aucune annonce correspond à votre recherche. <a href='lesannonces.php'>Retour aux annonces.</a>";
        }else{
            while($annonce = mysqli_fetch_array($req)){
            
        $tpl = file_get_contents('./tpl/front-annonce.tpl.html');

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
<!-- Pagination -->
<div class="center">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item" ><a class="page-link pagina" href="?pageno=1"><<</a></li>
            <li class="page-item""<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>"><a class="page-link pagina actief" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">1</a>
            <li class="page-item""<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>"><a class="page-link pagina" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">2</a>
            <li class="page-item"><a class="page-link pagina" href="?pageno=<?php echo $total_pages; ?>">>></a></li>
        </ul>
    </nav>
</div>

</div>
</div>
</div>
</div>

<?php include'./inc/footer.inc.php';?>