<html>
    <head>
        <title> Changement mdp </title>
		<link href="monstyle.css" media="all" rel="stylesheet" type="text/css" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="shortcut icon" href="images/favicon.ico" />
		<meta name="robots" content="noindex">
    </head>
    <body>
        <?php
        include '_conf.php';
            if($bdd = mysqli_connect($serveurBDD, $userBDD, $mdpBDD, $nomBDD))
            {
            }
            else // Mais si elle rate...
            {
                echo 'Erreur'; //On affiche un message d'erreur.
            }
            if(isset($_POST['mdp2']))
                {
                    echo"Votre mot de passe a bien été modifié";
                    $mdp2=md5($_POST['mdp2']);
                    $id=$_GET['id'];
                    $requete="Update utilisateur SET mdp='$mdp2' WHERE id=$id";
                    if(!mysqli_query($bdd,$requete))
                    {
                        echo"Erreur BDD";
                    }
                }
                else
                {
                if(isset($_GET['id']))
                    {
                        if(isset($_GET['mdp'])){
                        $id=$_GET['id'];
                        $mdp=$_GET['mdp'];
                        $requete="Select * from utilisateur WHERE '$id'=id";
                        $resultat=mysqli_query($bdd, $requete);
                        $trouve=0;
                        while($donnees = mysqli_fetch_assoc($resultat))
                        {
                            $bddid=$donnees['id'];
                            $bddmdp=$donnees['mdp'];
                            $trouve=1;
                        }
                        if($trouve==0)
                        {
                            echo "Erreurs";
                        }
                        if($bddid!=$id || $bddmdp!=$mdp)
                        {
                            echo"Erreur il ne s'agit pas du bon utilisateur";
                        }
                        else
                        {
                        ?>
                        <center>
                            <h2>Modifier votre MDP</h2>
                            <form method="POST">
                                <input type="password" name="mdp2"><br><br>
                                <input type="submit" value="Confirmer">
                            </form>
                        </center>
                        <?php
                        }
                    }
                }
                else
                {
                }
            }
        ?>      
    </body>
</html>
