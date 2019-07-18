<?php
    session_start();

    if(file_exists('./inc/header.inc.php')) include('./inc/header.inc.php');

    //1 connexion
    require ("./core/connexion.php");
    if(isset($_SESSION['user']['id'])){
    //2 écriture de la requête
    $sql = "SELECT * FROM users WHERE id=".$_SESSION['user']['id'];
    //3 éxécution de la requête
    $req = mysqli_query($connexion, $sql) or die(mysqli_error($connexion));
    //traitement des données
    if(mysqli_num_rows($req)==0){
        echo "Une erreur est survenue, merci de vous reconnecter.";
    }else{
        $users = mysqli_fetch_array($req);
        
    $tpl = file_get_contents('./tpl/espace_users.tpl.html');
    
    $tpl = str_replace('##pseudo##',trim(addslashes(ucfirst($users['pseudo']))), $tpl);
    $tpl = str_replace('##nom##',trim(stripslashes(ucfirst($users['nom']))), $tpl);
    $tpl = str_replace('##prenom##',trim(stripslashes(ucfirst($users['prenom']))), $tpl);
    $tpl = str_replace('##adresse##',trim(stripslashes(ucfirst($users['adresse']))), $tpl);
    $tpl = str_replace('##cp##',trim(stripslashes(ucfirst($users['cp']))), $tpl); 
    $tpl = str_replace('##ville##',trim(stripslashes(ucfirst($users['ville']))), $tpl);
    $tpl = str_replace('##tel##',trim(stripslashes(ucfirst($users['tel']))), $tpl);
    $tpl = str_replace('##mail##',trim(stripslashes(ucfirst($users['mail']))), $tpl);
    $tpl = str_replace('##mdp##',trim(stripslashes(ucfirst($users['mdp']))), $tpl);
    $tpl = str_replace('##lon##',trim(stripslashes(ucfirst($users['lon']))), $tpl);
    $tpl = str_replace('##lat##',trim(stripslashes(ucfirst($users['lat']))), $tpl);
    $tpl = str_replace('##userId##',$_SESSION['user']['id'], $tpl);   
    echo $tpl;
    }  
    ?>

     <?php
        //1 connexion
        require ("./core/connexion.php");
        //2 écriture de la requête
        $sql = "SELECT * FROM annonces WHERE enabled=1 ORDER BY id DESC LIMIT 4";
        //3 éxécution de la requête
        $req = mysqli_query($connexion, $sql) or die(mysqli_error($connexion));
        //traitement des données
        if(mysqli_num_rows($req)==0){
            echo "désolé pas d'annonce";
        }else{
            while($annonce = mysqli_fetch_array($req)){
            $tpl = file_get_contents('./tpl/front_update_annonces.tpl.html');
            $tpl = str_replace('##marque##',trim(addslashes(ucfirst($annonce['marque']))), $tpl);
            $tpl = str_replace('##model##',trim(stripslashes(ucfirst($annonce['model']))), $tpl);
            $tpl = str_replace('##prix##',trim(stripslashes(ucfirst($annonce['prix']))), $tpl);
            $tpl = str_replace('##date##',$annonce['date'], $tpl);
            $tpl = str_replace('##id##',trim(stripslashes(ucfirst($annonce['id']))), $tpl); 
        echo $tpl;
            }
        }   

if(file_exists('./inc/footer.inc.php')) include('./inc/footer.inc.php');
    } else {
        header('Location: ../index.php');
    }
?>

