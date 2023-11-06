<html>
    <head>
        <title> Oubli du MDP </title>
		<link href="monstyle.css" media="all" rel="stylesheet" type="text/css" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="shortcut icon" href="images/favicon.ico" />
		<meta name="robots" content="noindex">
    </head>
    <body>
        <?php
        if(isset($_POST['email']))
        {
            $lemail=$_POST['email'];
            include '_conf.php';
            if($bdd = mysqli_connect($serveurBDD, $userBDD, $mdpBDD, $nomBDD))
            {
            }
            else // Mais si elle rate...
            {
                echo 'Erreur'; //On affiche un message d'erreur.
            }
            $requete="Select * from utilisateur WHERE '$lemail'=email";
            $resultat=mysqli_query($bdd, $requete);
            $trouve=0;
            while($donnees = mysqli_fetch_assoc($resultat))
            {
                $trouve=1;
                $login=$donnees['login'];
                $mdp=$donnees['mdp'];
                $mail=$donnees['email'];
                $prenom=$donnees['prenom'];
                $id=$donnees['id'];
            }     
            
            if($trouve==0)
            {
                echo "Erreur l'email n'est pas attribue";
            }
            else
            {
                $headers[] = 'MIME-Version: 1.0';
                $headers[] = 'Content-type: text/html; charset=iso-8859-1';
                $headers[] = 'From: donotreply@sioreport.com'. "\r\n".
                'Reply-To: ""'. "\r\n";
                $message="<html><head></head><body><p>Bonjour ".$prenom.",<br>Vous avez demandé à récupérer vos identifiants, les voici:<br><br>Identifiant: <b>".$login."</b><br>Pour modifier votre mot de passe: allez sur ce lien: <a href='http://sioreport.fr/AUDEBERT/delims/newmdp.php?id=$id&mdp=$mdp'>http://sioreport.fr/AUDEBERT/delims/newmdp.php?id=$id&mdp=$mdp</a><br><br>Merci de votre connexion.<br>L'équipe de Delim's Burger.</p></body></html>";
                mail($mail, "Vos identifiants de connexion", $message, implode("\r\n",$headers));
            }
                
        }
        else
        {
            ?>
            <center>
                <h2>Retrouvez votre MDP</h2>
                <form method="POST">
                    <input type="email" name="email" placeholder="Email"><br><br>
                    <input type="submit" value="Confirmer">
                </form>
            </center>
            <?php
        }
        ?>
        
    </body>
</html>
