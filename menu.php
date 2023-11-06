<html>
	<head>
		<link href="monstyle.css" media="all" rel="stylesheet" type="text/css" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="shortcut icon" href="images/favicon.ico" />
		<title>Menu | Delim's Burger</title>
	</head>
	<body>
		<?php include '_conf.php'; 
			if($bdd = mysqli_connect($serveurBDD, $userBDD, $mdpBDD, $nomBDD))
			{
			}
			else // Mais si elle rate...
			{
			}
		?>
		<center>
			<h1>Menu du Delim's Burger</h1>
		</center>
		<table id=menu>
			<tr>
				<td class="tdexept"><a href="#menu-sandwich" class="PDP">Menu Sandwich</a></td>
			</tr>
			<tr>
				<td class="tdexept"><a href="#menu-burger" class="PDP">Menu Burger</a></td>
			</tr>
			<tr>
				<td class="tdexept"><a href="#menu-tex-mex" class="PDP">Menu Tex-Mex</a></td>
			</tr>
			<tr>
				<td class="tdexept"><a href="#sandwich" class="PDP">Sandwitch</a></td>
			</tr>
			<tr>
				<td class="tdexept"><a href="#burger" class="PDP">Burger</a></td>
			</tr>
			<tr>
				<td class="tdexept"><a href="#tex-mex" class="PDP">Tex-Mex</a></td>
			</tr>
			<tr>
				<td class="tdexept"><a href="#assiette" class="PDP">Assiette</a></td>
			</tr>
			<tr>
				<td class="tdexept"><a href="#enfant" class="PDP">Menu Enfant</a></td>
			</tr>
			<tr>
				<td class="tdexept"><a href="#dessert" class="PDP">Dessert</a></td>
			</tr>
			<tr>
				<td class="tdexept"><a href="#boisson" class="PDP">Boisson</a></td>
			</tr>
		</table>
		<section id="menu-sandwich">
			<table class="produit">
				<tr>
					<td class="tdexept"><h2>Menu Sandwich &nbsp; <img src="images/pain_au_choix.png" width="150"height="40" ><img src="images/pains.png" width="170" height="50" style="vertical-align:middle;"> + frites et boisson 33cl </h2></td>
				</tr>
				<tr>
					<td>
						<table>
							<tr>	
								<td><img src="images/sandwich_chicken_curry_tandoori.png" width="150"height="80"></td>
								<td width="50px"></td>
								<td><img src="images/sandwich_deux_viandes.png" width="150"height="80"></td>
								<td width="50px"></td>
								<td><img src="images/sandwich_l'escalope_boursin.png" width="150"height="80"></td>
								<td width="50px"></td>
								<td><img src="images/sandwich_le_cdi.png" width="150"height="80"></td>
								<td width="50px"></td>
								<td><img src="images/sandwich_le_country.png" width="150"height="80"></td>
							</tr>
							<?php
								$requete="Select * FROM sandwich WHERE id=1";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuS1=$donnees['prix_menu'];
									$soloS1=$donnees['prix_seul'];
								}
								$requete="Select * FROM sandwich WHERE id=2";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuS2=$donnees['prix_menu'];
									$soloS2=$donnees['prix_seul'];
								}
								$requete="Select * FROM sandwich WHERE id=3";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuS3=$donnees['prix_menu'];
									$soloS3=$donnees['prix_seul'];
								}
								$requete="Select * FROM sandwich WHERE id=4";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuS4=$donnees['prix_menu'];
									$soloS4=$donnees['prix_seul'];
								}
								$requete="Select * FROM sandwich WHERE id=5";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuS5=$donnees['prix_menu'];
									$soloS5=$donnees['prix_seul'];
								}
							?>
							<tr>
								<td><b>Menu Le chicken<br>curry ou tandoori</b><br><font size="2pt">Escalope de poulet au<br>curry ou tandoori, 2 cheddars</font><br><b><?php echo "$menuS1"?> €</b></td>
								<td></td>
								<td><b>Menu Le deux viandes</b><br><font size="2pt">2 viandes au choix (Steak,curry,<br>tandoori,boursin,tenders,<br>cordon bleu), 2 cheddars</font><br><b><?php echo "$menuS2"?> €</b></td>
								<td></td>
								<td><b>Menu L'escalope boursin</b><br><font size="2pt">Escalope de poulet au boursin,<br>2 cheddars<br></font><br><b><?php echo "$menuS3"?> €</b></td>
								<td></td>
								<td><b>Menu Le CDI</b><br><font size="2pt">Escalope de poulet au boursin, 2 cheddars,<br> kiri, emmental<br></font><br><b><?php echo "$menuS4"?> €</b></td>
								<td></td>
								<td><b>Menu Le country</b><br><font size="2pt">2 steaks de 45g, 2 cheddars,<br>oeuf, galette de pomme de terre,<br>bacon de dinde</font><br><b><?php echo "$menuS5"?> €</b></td>
							</tr>
							<tr>
								<td><img src="images/sandwich_steak_boursin.png" width="150"height="80"></td>
								<td></td>
								<td><img src="images/sandwich_buffalo.png" width="150"height="80"></td>
								<td></td>
								<td><img src="images/sandwich_trois_steaks.png" width="150"height="80"></td>
								<td></td>
								<td><img src="images/sandwich_paname.png" width="150"height="80"></td>
								<td></td>
								<td><img src="images/sandwich_rz.png" width="150"height="80"></td>
							</tr>
							<?php
								$requete="Select * FROM sandwich WHERE id=6";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuS6=$donnees['prix_menu'];
									$soloS6=$donnees['prix_seul'];
								}
								$requete="Select * FROM sandwich WHERE id=7";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuS7=$donnees['prix_menu'];
									$soloS7=$donnees['prix_seul'];
								}
								$requete="Select * FROM sandwich WHERE id=8";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuS8=$donnees['prix_menu'];
									$soloS8=$donnees['prix_seul'];
								}
								$requete="Select * FROM sandwich WHERE id=9";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuS9=$donnees['prix_menu'];
									$soloS9=$donnees['prix_seul'];
								}
								$requete="Select * FROM sandwich WHERE id=10";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuS10=$donnees['prix_menu'];
									$soloS10=$donnees['prix_seul'];
								}
							?>
							<tr>
								<td><b>Menu Le steak boursin</b><br><font size="2pt">3 steaks de 45g, 2 cheddars,<br>oeuf, bacon de dinde</font><br><b><?php echo "$menuS6"?> €</b></td>
								<td></td>
								<td><b>Menu Le buffalo</b><br><font size="2pt">3 steaks de 45g, 2 cheddars,<br>oeuf, bacon de dinde</font><br><b><?php echo "$menuS7"?> €</b></td>
								<td></td>
								<td><b>Menu Le trois steak</b><br><font size="2pt">3 steaks de 45g, 2 cheddars<br></font><br><b><?php echo "$menuS8"?> €</b></td>
								<td></td>
								<td><b>Menu Le paname</b><br><font size="2pt">2 steaks de 45g, cheddars,<br>oeuf, jambon de dinde, emmental</font><br><b><?php echo "$menuS9"?> €</b></td>
								<td></td>
								<td><b>Menu RZ</b><br><font size="2pt">Escalope curry, poivrons, olives,<br>emmental, 2 cheddars, kiri</font><br><b><?php echo "$menuS10"?> €</b></td>
							</tr>
							<tr>
								<td><img src="images/sandwich_pyro.png" width="150"height="80"></td>
								<td></td>
								<td><img src="images/sandwich_dayli.png" width="150"height="80"></td>
								<td></td>
								<td><img src="images/sandwich_grill_mix.png" width="150"height="70"></td>
								<td></td>
								<td><img src="images/sandwich_escalope_grill.png" width="150"height="70"></td>
								<td></td>
								<td><img src="images/sandwich_steak_grill.png" width="150"height="70"></td>
								<td></td>
							</tr>
							<?php
								$requete="Select * FROM sandwich WHERE id=11";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuS11=$donnees['prix_menu'];
									$soloS11=$donnees['prix_seul'];
								}
								$requete="Select * FROM sandwich WHERE id=12";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuS12=$donnees['prix_menu'];
									$soloS12=$donnees['prix_seul'];
								}
								$requete="Select * FROM sandwich WHERE id=13";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuS13=$donnees['prix_menu'];
									$soloS13=$donnees['prix_seul'];
								}
								$requete="Select * FROM sandwich WHERE id=14";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuS14=$donnees['prix_menu'];
									$soloS14=$donnees['prix_seul'];
								}
								$requete="Select * FROM sandwich WHERE id=15";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuS15=$donnees['prix_menu'];
									$soloS15=$donnees['prix_seul'];
								}
							?>
							<tr>
								<td><b>Menu Pyro</b><br><font size="2pt">Escalope de poulet au boursin, kiri,<br>emmental, oeuf, poulet fumé, olives</font><br><b><?php echo "$menuS11"?> €</b></td>
								<td></td>
								<td><b>Menu Dayli</b><br><font size="2pt">Escalope de poulet au tandoori & chili thai,<br>poivrons, oignons rouges frits</font><br><b><?php echo "$menuS12"?> €</b></td>
								<td></td>
								<td><b>Menu Grill mix</b><br><font size="2pt">Escalope de poulet, 2 steaks de 45g, 2 cheddars,<br>sauce et condiments au choix</font><br><b><?php echo "$menuS13"?> €</b></td>
								<td></td>
								<td><b>Menu Escalope grill</b><br><font size="2pt">Escalope de poulet, 2 cheddars,<br>sauce et condiments au choix</font><br><b><?php echo "$menuS14"?> €</b></td>
								<td></td>
								<td><b>Menu Steaks grill</b><br><font size="2pt">3 steaks de 45g, 2 cheddars,<br>sauce et condiments au choix</font><br><b><?php echo "$menuS15"?> €</b></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td><img src="images/sandwich_DFC.png" width="80" height="100"></td>
								<td></td>
								<td></td>
								<td></td>
								<td><img src="images/sandwich_wrap_poulet.png" width="150" height="70"></td>
							</tr>
							<?php
								$requete="Select * FROM sandwich WHERE id=16";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuS16=$donnees['prix_menu'];
									$soloS16=$donnees['prix_seul'];
								}
								$requete="Select * FROM sandwich WHERE id=17";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuS17=$donnees['prix_menu'];
									$soloS17=$donnees['prix_seul'];
								}
							?>
							<tr>
								<td></td>
								<td></td>
								<td><b>Menu D.F.C</b><br><font size="2pt">2 tenders, PDT, poivre,<br>mayo, salade, tomate, cheddar</font><br><b><?php echo "$menuS16"?> €</b></td>
								<td></td>
								<td></td>
								<td></td>
								<td><b>Menu Le wrap poulet</b><br><font size="2pt">2 tenders, cheddar, poivre,<br>mayonnaise, salade</font><br><b><?php echo "$menuS17"?> €</b></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</section>
		<section id="menu-burger">
			<table class="produit">
				<tr>
					<td class="tdexept"><h2>Menu Burger	+ frites et boisson 33cl </h2></td>
				</tr>
				<tr>
					<td>
						<table>
							<tr>
								<td><img src="images/burger-big-burger.png" width="90"height="100"></td>
								<td width="30px"></td>
								<td><img src="images/burger-double-cheese.png" width="90"height="80"></td>
								<td width="30px"></td>
								<td><img src="images/burger-geant.png" width="110" height="90"></td>
								<td width="30px"></td>
								<td><img src="images/burger-le-kiri.png" width="110" height="90"></td>
								<td width="30px"></td>
								<td><img src="images/burger-le-chevre.png" width="110" height="90"></td>
							</tr>
							<?php
								$requete="Select * FROM burger WHERE id=1";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB1=$donnees['prix_menu'];
									$soloB1=$donnees['prix_seul'];
								}
								$requete="Select * FROM burger WHERE id=2";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB2=$donnees['prix_menu'];
									$soloB2=$donnees['prix_seul'];
								}
								$requete="Select * FROM burger WHERE id=3";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB3=$donnees['prix_menu'];
									$soloB3=$donnees['prix_seul'];
								}
								$requete="Select * FROM burger WHERE id=4";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB4=$donnees['prix_menu'];
									$soloB4=$donnees['prix_seul'];
								}
								$requete="Select * FROM burger WHERE id=5";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB5=$donnees['prix_menu'];
									$soloB5=$donnees['prix_seul'];
								}
							?>
							<tr>
								<td><b>Menu Big burger*</b><br><font size="2pt">2 steaks de 45g, cheddar, biggy,<br>salade, oignon, cornichon</font><br><b><?php echo "$menuB1"?> €</b></td>
								<td></td>
								<td><b>Menu Double cheese*</b><br><font size="2pt">2 steaks de 45g, 2 cheddars, ketchup,<br>moutarde douce, salade, oignon, cornichon</font><br><b><?php echo "$menuB2"?> €</b></td>
								<td></td>
								<td><b>Menu Géant*</b><br><font size="2pt">2 steaks de 45g, 2 cheddars, sauce hamburger,<br>salade, oignon, cornichon</font><br><b><?php echo "$menuB3"?> €</b></td>
								<td></td>
								<td><b>Menu Le kiri*</b><br><font size="2pt">2 steaks de 45g, 2 cheddars, kiri,<br>mayonnaise, salade</font><br><b><?php echo "$menuB4"?> €</b></td>
								<td></td>
								<td><b>Menu Le chèvre*</b><br><font size="2pt">2 steaks de 45g, 2 cheddars, chèvre,<br>mayonnaise, salade</font><br><b><?php echo "$menuB5"?> €</b></td>
							</tr>
							<tr>
								<td><img src="images/burger-double-egg.png" width="110" height="90"></td>
								<td></td>
								<td><img src="images/burger-mak-chicken.png" width="130" height="90"></td>
								<td></td>
								<td><img src="images/burger-fish.png" width="130" height="90"></td>
								<td></td>
								<td><img src="images/burger-le-monster.png" width="130" height="90"></td>
								<td></td>
								<td><img src="images/burger-180.png" width="130" height="90"></td>
							</tr>
							<?php
								$requete="Select * FROM burger WHERE id=6";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB6=$donnees['prix_menu'];
									$soloB6=$donnees['prix_seul'];
								}
								$requete="Select * FROM burger WHERE id=7";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB7=$donnees['prix_menu'];
									$soloB7=$donnees['prix_seul'];
								}
								$requete="Select * FROM burger WHERE id=8";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB8=$donnees['prix_menu'];
									$soloB8=$donnees['prix_seul'];
								}
								$requete="Select * FROM burger WHERE id=9";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB9=$donnees['prix_menu'];
									$soloB9=$donnees['prix_seul'];
								}
								$requete="Select * FROM burger WHERE id=10";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB10=$donnees['prix_menu'];
									$soloB10=$donnees['prix_seul'];
								}
							?>
							<tr>
								<td><b>Menu Double egg*</b><br><font size="2pt">2 steaks de 45g, 2 chaddars, oeuf,<br>bacon de dinde, biggy, salade, oignon</font><br><b><?php echo "$menuB6"?> €</b></td>
								<td></td>
								<td><b>Menu Mak chicken*</b><br><font size="2pt">Poulet pané, cheddar, salade,<br>mayonnaise</font><br><b><?php echo "$menuB7"?> €</b></td>
								<td></td>
								<td><b>Menu Fish*</b><br><font size="2pt">Poisson pané, cheddar, salade,<br>fish to fish</font><br><b><?php echo "$menuB8"?> €</b></td>
								<td></td>
								<td><b>Menu Le monster</b><br><font size="2pt">1 steak de 175g, bacon de dinde,<br>galette de pomme de terre, 3 cheddars,<br>oeuf, biggy, oignons, salade</font><br><b><?php echo "$menuB9"?> €</b></td>
								<td></td>
								<td><b>Menu 180</b><br><font size="2pt">1 steak de 175g, 2 cheddars,<br>biggy, salade, oignon</font><br><b><?php echo "$menuB10"?> €</b></td>
							</tr>
							<tr>
								<td><img src="images/burger-dn-toast-steak.png" width="130" height="90"></td>
								<td></td>
								<td><img src="images/burger-dn-toast-esc.png" width="130" height="90"></td>
								<td></td>
								<td><img src="images/burger-chevre-miel-steak.png" width="130" height="90"></td>
								<td></td>
								<td><img src="images/burger-chevre-miel-esc.png" width="130" height="90"></td>
								<td></td>
								<td><img src="images/burger-mega-mak.png" width="110" height="90"></td>
							</tr>
							<?php
								$requete="Select * FROM burger WHERE id=11";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB11=$donnees['prix_menu'];
									$soloB11=$donnees['prix_seul'];
								}
								$requete="Select * FROM burger WHERE id=12";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB12=$donnees['prix_menu'];
									$soloB12=$donnees['prix_seul'];
								}
								$requete="Select * FROM burger WHERE id=13";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB13=$donnees['prix_menu'];
									$soloB13=$donnees['prix_seul'];
								}
								$requete="Select * FROM burger WHERE id=14";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB14=$donnees['prix_menu'];
									$soloB14=$donnees['prix_seul'];
								}
								$requete="Select * FROM burger WHERE id=15";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB15=$donnees['prix_menu'];
									$soloB15=$donnees['prix_seul'];
								}
							?>
							<tr>
								<td><b>Menu D'N'toast steak</b><br><font size="2pt">1 steak de 90g, 2 cheddars, mayonnaise,<br> bacon de dinde, moutarde douce, tomate</font><br><b><?php echo "$menuB11"?> €</b></td>
								<td></td>
								<td><b>Menu D'N'toast esc.</b><br><font size="2pt">Escalope de poulet, 2 cheddars, mayonnaise, <br>bacon de dinde, moutarde douce, tomate</font><br><b><?php echo "$menuB12"?> €</b></td>
								<td></td>
								<td><b>Menu Chèvre miel steak</b><br><font size="2pt">1 steak de 90g, chèvre, cheddar, salde,<br>une touche de miel, sauce miel moutarde</font><br><b><?php echo "$menuB13"?> €</b></td>
								<td></td>
								<td><b>Menu Chèvre miel esc.</b><br><font size="2pt">Escalope de poulet, chèvre, cheddar, salde,<br>une touche de miel, sauce miel moutarde</font><br><b><?php echo "$menuB14"?> €</b></td>
								<td></td>
								<td><b>Menu Mega mak</b><br><font size="2pt">4 steaks de 45g, 2 cheddars, biggy,<br>salade, oignons, cornichons</font><br><b><?php echo "$menuB15"?> €</b></td>
							</tr>
							<tr>
								<td><img src="images/burger-chicken-tower.png" width="130" height="90"></td>
								<td></td>
								<td><img src="images/burger-le-timale.png" width="160" height="100"></td>
								<td></td>
								<td><img src="images/burger-royal-delims.png" width="110" height="90"></td>
								<td></td>
								<td><img src="images/burger-mega-geant.png" width="110" height="90"></td>
								<td></td>
								<td><img src="images/burger-chicken-woopper.png" width="110" height="90"></td>
							</tr>
							<?php
								$requete="Select * FROM burger WHERE id=16";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB16=$donnees['prix_menu'];
									$soloB16=$donnees['prix_seul'];
								}
								$requete="Select * FROM burger WHERE id=17";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB17=$donnees['prix_menu'];
									$soloB17=$donnees['prix_seul'];
								}
								$requete="Select * FROM burger WHERE id=18";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB18=$donnees['prix_menu'];
									$soloB18=$donnees['prix_seul'];
								}
								$requete="Select * FROM burger WHERE id=19";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB19=$donnees['prix_menu'];
									$soloB19=$donnees['prix_seul'];
								}
								$requete="Select * FROM burger WHERE id=20";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB20=$donnees['prix_menu'];
									$soloB20=$donnees['prix_seul'];
								}
							?>
							<tr>
								<td><b>Menu Chicken tower</b><br><font size="2pt">1 filet de poulet pané, 2 cheddars, mayo,<br>galette de pomme de terre, salade</font><br><b><?php echo "$menuB16"?> €</b></td>
								<td></td>
								<td><b>Menu Le timale</b><br><font size="2pt">Escalope de poulet curry, cheddar, salade,<br>sauce coco nawhal's</font><br><b><?php echo "$menuB17"?> €</b></td>
								<td></td>
								<td><b>Menu Royal delims</b><br><font size="2pt">1 steak de 90g ou escalope, barbecue, mayo,<br>jambon de dinde, tomate, oignons crousty, salade</font><br><b><?php echo "$menuB18"?> €</b></td>
								<td></td>
								<td><b>Menu Mega géant</b><br><font size="2pt">2 steaks de 90g, sauce géant, salade,<br>oignons, 2 cheddars</font><br><b><?php echo "$menuB19"?> €</b></td>
								<td></td>
								<td><b>Menu Chicken Woopper</b><br><font size="2pt">Escalope de poulet au grill, 2 cheddars, barbecue,<br>mayo, salade, tomates, oignons rouges</font><br><b><?php echo "$menuB20"?> €</b></td>
							</tr>
							<tr>
								<td><img src="images/burger-wooper.png" width="110" height="90"></td>
								<td></td>
								<td><img src="images/burger-wooper.png" width="110" height="90"></td>
								<td></td>
								<td><img src="images/burger-wooper.png" width="110" height="90"></td>
								<td></td>
								<td><img src="images/burger-classic.png" width="110" height="90"></td>
								<td></td>
								<td><img src="images/burger-mixture.png" width="120" height="90"></td>
							</tr>
							<?php
								$requete="Select * FROM burger WHERE id=21";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB21=$donnees['prix_menu'];
									$soloB21=$donnees['prix_seul'];
								}
								$requete="Select * FROM burger WHERE id=22";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB22=$donnees['prix_menu'];
									$soloB22=$donnees['prix_seul'];
								}
								$requete="Select * FROM burger WHERE id=23";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB23=$donnees['prix_menu'];
									$soloB23=$donnees['prix_seul'];
								}
								$requete="Select * FROM burger WHERE id=24";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB24=$donnees['prix_menu'];
									$soloB24=$donnees['prix_seul'];
								}
								$requete="Select * FROM burger WHERE id=25";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB25=$donnees['prix_menu'];
									$soloB25=$donnees['prix_seul'];
								}
							?>
							<tr>
								<td><b>Menu Wooper</b><br><font size="2pt">1 steak de 90g, cheddar, ketchup, salade,<br>mayonnaise, tomates, oignons rouges, cornichons</font><br><b><?php echo "$menuB21"?> €</b></td>
								<td></td>
								<td><b>Menu Double wooper</b><br><font size="2pt">2 steak de 90g, 2 cheddars, ketchup, salade,<br>mayonnaise, tomates, oignons rouges, cornichons</font><br><b><?php echo "$menuB22"?> €</b></td>
								<td></td>
								<td><b>Menu Triple wooper</b><br><font size="2pt">3 steak de 90g, 3 cheddars, ketchup, salade,<br>mayonnaise, tomates, oignons rouges, cornichons</font><br><b><?php echo "$menuB23"?> €</b></td>
								<td></td>
								<td><b>Menu Classic</b><br><font size="2pt">1 steak de 90g, bacon américain, ketchup, salade,<br>mayo, tomate, oignons rouges, cornichons</font><br><b><?php echo "$menuB24"?> €</b></td>
								<td></td>
								<td><b>Menu Mixture</b><br><font size="2pt">1 steak de 90g, 1 escalope de poulet, kiri,<br>cheddar, mayo, ketchup, salade, tomates,<br>oignons rouges, cornichons</font><br><b><?php echo "$menuB25"?> €</b></td>
							</tr>
							<tr>
								<td><img src="images/burger-bladi.png" width="110" height="90"></td>
								<td></td>
								<td><img src="images/burger-cheese.png" width="110" height="80"></td>
								<td></td>
								<td><img src="images/burger-cheese-egg.png" width="110" height="80"></td>
								<td></td>
								<td><img src="images/burger-croq.png" width="140" height="70"></td>
								<td></td>
								<td><img src="images/burger-croq-steak.png" width="140" height="80"></td>
							</tr>
							<?php
								$requete="Select * FROM burger WHERE id=26";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB26=$donnees['prix_menu'];
									$soloB26=$donnees['prix_seul'];
								}
								$requete="Select * FROM burger WHERE id=27";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB27=$donnees['prix_menu'];
									$soloB27=$donnees['prix_seul'];
								}
								$requete="Select * FROM burger WHERE id=28";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB28=$donnees['prix_menu'];
									$soloB28=$donnees['prix_seul'];
								}
								$requete="Select * FROM burger WHERE id=29";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB29=$donnees['prix_menu'];
									$soloB29=$donnees['prix_seul'];
								}
								$requete="Select * FROM burger WHERE id=30";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB30=$donnees['prix_menu'];
									$soloB30=$donnees['prix_seul'];
								}
							?>
							<tr>
								<td><b>Menu Bladi</b><br><font size="2pt">1 steak de 90g cuit au grill, oeuf, cheddar,<br>«bacon américain», sauce Marocaine, salade,<br>tomate, poivrons & oignons rouge frit, olives</font><br><b><?php echo "$menuB26"?> €</b></td>
								<td></td>
								<td><b>Menu Cheese</b><br><font size="2pt">1 steak de 45g, cheddar, ketchup,<br>moutarde douce, salade, oignon, cornichon</font><br><br><b><?php echo "$menuB27"?> €</b></td>
								<td></td>
								<td><b>Menu Cheese egg</b><br><font size="2pt">1 steak de 45g, cheddar, oeuf, salade,<br>bacon de dinde</font><br><br><b><?php echo "$menuB28"?> €</b></td>
								<td></td>
								<td><b>Menu Croq</b><br><font size="2pt"> 1 tranche de jambon de dinde, 2 cheddars</font><br><br><b><?php echo "$menuB29"?> €</b></td>
								<td></td>
								<td><b>Menu Croq steak</b><br><font size="2pt">1 steak de 45g, 2 cheddars,<br>1 tranche de jambon de dinde</font><br><br><b><?php echo "$menuB30"?> €</b></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td><img src="images/burger-double-classic.png" width="150" height="80"></td>
								<td></td>
								<td></td>
								<td></td>
								<td><img src="images/burger-L.png" width="150" height="80"></td>
							</tr>
							<?php
								$requete="Select * FROM burger WHERE id=31";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB31=$donnees['prix_menu'];
									$soloB31=$donnees['prix_seul'];
								}
								$requete="Select * FROM burger WHERE id=32";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuB32=$donnees['prix_menu'];
									$soloB32=$donnees['prix_seul'];
								}
							?>
							<tr>
								<td></td>
								<td></td>
								<td><b>Menu Double classic</b><br><font size="2pt">2 burgers au choix parmis ceux ayant une "*"</font><br><br><b><?php echo "$menuB31"?> €</b></td>
								<td></td>
								<td></td>
								<td></td>
								<td><b>Menu L</b><br><font size="2pt">1 burger au choix parmis ceux ayant une "*"<br>+ un cheese</font><br><b><?php echo "$menuB32"?> €</b></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</section>
		<section id="menu-tex-mex">
			<table class="produit" style="margin-top:108px;">
				<tr>
					<td class="tdexept"><h2>Menu Tex-Mex + frites et boisson 33cl</h2></td>
				</tr>
				<tr>
					<td>
						<table>
							<tr>
								<td><img src="images/tex-mex-chili-cheese.png" width="150" height="90"></td>
								<td width="30px"></td>
								<td><img src="images/tex-mex-bouchees-boursin.png" width="150" height="90"></td>
								<td width="30px"></td>
								<td><img src="images/tex-mex-mozzasticks.png" width="150" height="90"></td>
								<td width="30px"></td>
								<td><img src="images/tex-mex-bouchees-camenbert.png" width="150" height="90"></td>
								<td width="30px"></td>
								<td><img src="images/tex-mex-tomate-mozza.png" width="150" height="90"></td>
								<td width="30px"></td>
								<td><img src="images/tex-mex-nuggets.png" width="150" height="90"></td>
								<td width="30px"></td>
								<td><img src="images/tex-mex-tenders.png" width="150" height="90">
							</tr>
							<?php
								$requete="Select * FROM `tex-mex` WHERE id=1";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuT1=$donnees['prix_menu'];
									$soloT1=$donnees['prix_seul'];
								}
								$requete="Select * FROM `tex-mex` WHERE id=2";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuT2=$donnees['prix_menu'];
									$soloT2=$donnees['prix_seul'];
								}
								$requete="Select * FROM `tex-mex` WHERE id=3";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuT3=$donnees['prix_menu'];
									$soloT3=$donnees['prix_seul'];
								}
								$requete="Select * FROM `tex-mex` WHERE id=4";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuT4=$donnees['prix_menu'];
									$soloT4=$donnees['prix_seul'];
								}
								$requete="Select * FROM `tex-mex` WHERE id=5";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuT5=$donnees['prix_menu'];
									$soloT5=$donnees['prix_seul'];
								}
								$requete="Select * FROM `tex-mex` WHERE id=6";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuT6=$donnees['prix_menu'];
									$soloT6=$donnees['prix_seul'];
								}
								$requete="Select * FROM `tex-mex` WHERE id=7";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$menuT7=$donnees['prix_menu'];
									$soloT7=$donnees['prix_seul'];
								}
							?>
							<tr>
								<td><b>Menu Chili cheese * 6<br><?php echo "$menuT1"?> €</b></td>
								<td></td>
								<td><b>Menu Bouchées boursin * 6<br><?php echo "$menuT2"?> €</b></td>
								<td></td>
								<td><b>Menu Mozzasticks * 6<br><?php echo "$menuT3"?> €</b></td>
								<td></td>
								<td><b>Menu Bouchées camenbert * 6<br><?php echo "$menuT4"?> €</b></td>
								<td></td>
								<td><b>Menu Tomate mozza * 6<br><?php echo "$menuT5"?> €</b></td>
								<td></td>
								<td><b>Menu Nuggets * 6<br><?php echo "$menuT6"?> €</b></td>
								<td></td>
								<td><b>Menu Tenders * 3<br><?php echo "$menuT7"?> €</b></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</section>
		<section id="sandwich">
			<table class="produit" style="margin-top:108px;">
				<tr>
					<td class="tdexept"><h2>Sandwich &nbsp; <img src="images/pain_au_choix.png" width="150"height="40" ><img src="images/pains.png" width="170" height="50" style="vertical-align:middle;"></h2></td>
				</tr>
				<tr>
					<td>
						<table>
							<tr>	
								<td><img src="images/sandwich_chicken_curry_tandoori.png" width="150"height="80"></td>
								<td width="50px"></td>
								<td><img src="images/sandwich_deux_viandes.png" width="150"height="80"></td>
								<td width="50px"></td>
								<td><img src="images/sandwich_l'escalope_boursin.png" width="150"height="80"></td>
								<td width="50px"></td>
								<td><img src="images/sandwich_le_cdi.png" width="150"height="80"></td>
								<td width="50px"></td>
								<td><img src="images/sandwich_le_country.png" width="150"height="80"></td>
							</tr>
							<tr>
								<td><b>Le chicken<br>curry ou tandoori</b><br><font size="2pt">Escalope de poulet au<br>curry ou tandoori, 2 cheddars</font><br><b><?php echo "$soloS1"?> €</b></td>
								<td></td>
								<td><b>Le deux viandes</b><br><font size="2pt">2 viandes au choix (Steak,curry,<br>tandoori,boursin,tenders,<br>cordon bleu), 2 cheddars</font><br><b><?php echo "$soloS2"?> €</b></td>
								<td></td>
								<td><b>L'escalope boursin</b><br><font size="2pt">Escalope de poulet au boursin,<br>2 cheddars<br></font><br><b><?php echo "$soloS3"?> €</b></td>
								<td></td>
								<td><b>Le CDI</b><br><font size="2pt">Escalope de poulet au boursin, 2 cheddars,<br> kiri, emmental<br></font><br><b><?php echo "$soloS4"?> €</b></td>
								<td></td>
								<td><b>Le country</b><br><font size="2pt">2 steaks de 45g, 2 cheddars,<br>oeuf, galette de pomme de terre,<br>bacon de dinde</font><br><b><?php echo "$soloS5"?> €</b></td>
							</tr>
							<tr>
								<td><img src="images/sandwich_steak_boursin.png" width="150"height="80"></td>
								<td></td>
								<td><img src="images/sandwich_buffalo.png" width="150"height="80"></td>
								<td></td>
								<td><img src="images/sandwich_trois_steaks.png" width="150"height="80"></td>
								<td></td>
								<td><img src="images/sandwich_paname.png" width="150"height="80"></td>
								<td></td>
								<td><img src="images/sandwich_rz.png" width="150"height="80"></td>
							</tr>
							<tr>
								<td><b>Le steak boursin</b><br><font size="2pt">3 steaks de 45g, 2 cheddars,<br>oeuf, bacon de dinde</font><br><b><?php echo "$soloS6"?> €</b></td>
								<td></td>
								<td><b>Le buffalo</b><br><font size="2pt">3 steaks de 45g, 2 cheddars,<br>oeuf, bacon de dinde</font><br><b><?php echo "$soloS7"?> €</b></td>
								<td></td>
								<td><b>Le trois steak</b><br><font size="2pt">3 steaks de 45g, 2 cheddars<br></font><br><b><?php echo "$soloS8"?> €</b></td>
								<td></td>
								<td><b>Le paname</b><br><font size="2pt">2 steaks de 45g, cheddars,<br>oeuf, jambon de dinde, emmental</font><br><b><?php echo "$soloS9"?> €</b></td>
								<td></td>
								<td><b>RZ</b><br><font size="2pt">Escalope curry, poivrons, olives,<br>emmental, 2 cheddars, kiri</font><br><b><?php echo "$soloS10"?> €</b></td>
							</tr>
							<tr>
								<td><img src="images/sandwich_pyro.png" width="150"height="80"></td>
								<td></td>
								<td><img src="images/sandwich_dayli.png" width="150"height="80"></td>
								<td></td>
								<td><img src="images/sandwich_grill_mix.png" width="150"height="70"></td>
								<td></td>
								<td><img src="images/sandwich_escalope_grill.png" width="150"height="70"></td>
								<td></td>
								<td><img src="images/sandwich_steak_grill.png" width="150"height="70"></td>
								<td></td>
							</tr>
							<tr>
								<td><b>Pyro</b><br><font size="2pt">Escalope de poulet au boursin, kiri,<br>emmental, oeuf, poulet fumé, olives</font><br><b><?php echo "$soloS11"?> €</b></td>
								<td></td>
								<td><b>Dayli</b><br><font size="2pt">Escalope de poulet au tandoori & chili thai,<br>poivrons, oignons rouges frits</font><br><b><?php echo "$soloS12"?> €</b></td>
								<td></td>
								<td><b>Grill mix</b><br><font size="2pt">Escalope de poulet, 2 steaks de 45g, 2 cheddars,<br>sauce et condiments au choix</font><br><b><?php echo "$soloS13"?> €</b></td>
								<td></td>
								<td><b>Escalope grill</b><br><font size="2pt">Escalope de poulet, 2 cheddars,<br>sauce et condiments au choix</font><br><b><?php echo "$soloS14"?> €</b></td>
								<td></td>
								<td><b>Steaks grill</b><br><font size="2pt">3 steaks de 45g, 2 cheddars,<br>sauce et condiments au choix</font><br><b><?php echo "$soloS15"?> €</b></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td><img src="images/sandwich_DFC.png" width="80" height="100"></td>
								<td></td>
								<td></td>
								<td></td>
								<td><img src="images/sandwich_wrap_poulet.png" width="150" height="70"></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td><b>D.F.C</b><br><font size="2pt">2 tenders, PDT, poivre,<br>mayo, salade, tomate, cheddar</font><br><b><?php echo "$soloS16"?> €</b></td>
								<td></td>
								<td></td>
								<td></td>
								<td><b>Le wrap poulet</b><br><font size="2pt">2 tenders, cheddar, poivre,<br>mayonnaise, salade</font><br><b><?php echo "$soloS17"?> €</b></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</section>
		<section id="burger">
			<table class="produit">
				<tr>
					<td class="tdexept"><h2>Burger</h2></td>
				</tr>
				<tr>
					<td>
						<table>
							<tr>
								<td><img src="images/burger-big-burger.png" width="90"height="100"></td>
								<td width="30px"></td>
								<td><img src="images/burger-double-cheese.png" width="90"height="80"></td>
								<td width="30px"></td>
								<td><img src="images/burger-geant.png" width="110" height="90"></td>
								<td width="30px"></td>
								<td><img src="images/burger-le-kiri.png" width="110" height="90"></td>
								<td width="30px"></td>
								<td><img src="images/burger-le-chevre.png" width="110" height="90"></td>
							</tr>
							<tr>
								<td><b>Big burger</b><br><font size="2pt">2 steaks de 45g, cheddar, biggy,<br>salade, oignon, cornichon</font><br><b><?php echo "$soloB1"?> €</b></td>
								<td></td>
								<td><b>Double cheese</b><br><font size="2pt">2 steaks de 45g, 2 cheddars, ketchup,<br>moutarde douce, salade, oignon, cornichon</font><br><b><?php echo "$soloB2"?> €</b></td>
								<td></td>
								<td><b>Géant</b><br><font size="2pt">2 steaks de 45g, 2 cheddars, sauce hamburger,<br>salade, oignon, cornichon</font><br><b><?php echo "$soloB3"?> €</b></td>
								<td></td>
								<td><b>Le kiri</b><br><font size="2pt">2 steaks de 45g, 2 cheddars, kiri,<br>mayonnaise, salade</font><br><b><?php echo "$soloB4"?> €</b></td>
								<td></td>
								<td><b>Le chèvre</b><br><font size="2pt">2 steaks de 45g, 2 cheddars, chèvre,<br>mayonnaise, salade</font><br><b><?php echo "$soloB5"?> €</b></td>
							</tr>
							<tr>
								<td><img src="images/burger-double-egg.png" width="110" height="90"></td>
								<td></td>
								<td><img src="images/burger-mak-chicken.png" width="130" height="90"></td>
								<td></td>
								<td><img src="images/burger-fish.png" width="130" height="90"></td>
								<td></td>
								<td><img src="images/burger-le-monster.png" width="130" height="90"></td>
								<td></td>
								<td><img src="images/burger-180.png" width="130" height="90"></td>
							</tr>
							<tr>
								<td><b>Double egg</b><br><font size="2pt">2 steaks de 45g, 2 chaddars, oeuf,<br>bacon de dinde, biggy, salade, oignon</font><br><b><?php echo "$soloB6"?> €</b></td>
								<td></td>
								<td><b>Mak chicken</b><br><font size="2pt">Poulet pané, cheddar, salade,<br>mayonnaise</font><br><b><?php echo "$soloB7"?> €</b></td>
								<td></td>
								<td><b>Fish</b><br><font size="2pt">Poisson pané, cheddar, salade,<br>fish to fish</font><br><b><?php echo "$soloB8"?> €</b></td>
								<td></td>
								<td><b>4Le monster</b><br><font size="2pt">1 steak de 175g, bacon de dinde,<br>galette de pomme de terre, 3 cheddars,<br>oeuf, biggy, oignons, salade</font><br><b><?php echo "$soloB9"?> €</b></td>
								<td></td>
								<td><b>180</b><br><font size="2pt">1 steak de 175g, 2 cheddars,<br>biggy, salade, oignon</font><br><b><?php echo "$soloB10"?> €</b></td>
							</tr>
							<tr>
								<td><img src="images/burger-dn-toast-steak.png" width="130" height="90"></td>
								<td></td>
								<td><img src="images/burger-dn-toast-esc.png" width="130" height="90"></td>
								<td></td>
								<td><img src="images/burger-chevre-miel-steak.png" width="130" height="90"></td>
								<td></td>
								<td><img src="images/burger-chevre-miel-esc.png" width="130" height="90"></td>
								<td></td>
								<td><img src="images/burger-mega-mak.png" width="110" height="90"></td>
							</tr>
							<tr>
								<td><b>D'N'toast steak</b><br><font size="2pt">1 steak de 90g, 2 cheddars, mayonnaise,<br> bacon de dinde, moutarde douce, tomate</font><br><b><?php echo "$soloB11"?> €</b></td>
								<td></td>
								<td><b>D'N'toast esc.</b><br><font size="2pt">Escalope de poulet, 2 cheddars, mayonnaise, <br>bacon de dinde, moutarde douce, tomate</font><br><b><?php echo "$soloB12"?> €</b></td>
								<td></td>
								<td><b>Chèvre miel steak</b><br><font size="2pt">1 steak de 90g, chèvre, cheddar, salde,<br>une touche de miel, sauce miel moutarde</font><br><b><?php echo "$soloB13"?> €</b></td>
								<td></td>
								<td><b>Chèvre miel esc.</b><br><font size="2pt">Escalope de poulet, chèvre, cheddar, salde,<br>une touche de miel, sauce miel moutarde</font><br><b><?php echo "$soloB14"?> €</b></td>
								<td></td>
								<td><b>Mega mak</b><br><font size="2pt">4 steaks de 45g, 2 cheddars, biggy,<br>salade, oignons, cornichons</font><br><b><?php echo "$soloB15"?> €</b></td>
							</tr>
							<tr>
								<td><img src="images/burger-chicken-tower.png" width="130" height="90"></td>
								<td></td>
								<td><img src="images/burger-le-timale.png" width="160" height="100"></td>
								<td></td>
								<td><img src="images/burger-royal-delims.png" width="110" height="90"></td>
								<td></td>
								<td><img src="images/burger-mega-geant.png" width="110" height="90"></td>
								<td></td>
								<td><img src="images/burger-chicken-woopper.png" width="110" height="90"></td>
							</tr>
							<tr>
								<td><b>Chicken tower</b><br><font size="2pt">1 filet de poulet pané, 2 cheddars, mayo,<br>galette de pomme de terre, salade</font><br><b><?php echo "$soloB16"?> €</b></td>
								<td></td>
								<td><b>Le timale</b><br><font size="2pt">Escalope de poulet curry, cheddar, salade,<br>sauce coco nawhal's</font><br><b><?php echo "$soloB17"?> €</b></td>
								<td></td>
								<td><b>Royal delims</b><br><font size="2pt">1 steak de 90g ou escalope, barbecue, mayo,<br>jambon de dinde, tomate, oignons crousty, salade</font><br><b><?php echo "$soloB18"?> €</b></td>
								<td></td>
								<td><b>Mega géant</b><br><font size="2pt">2 steaks de 90g, sauce géant, salade,<br>oignons, 2 cheddars</font><br><b><?php echo "$soloB19"?> €</b></td>
								<td></td>
								<td><b>Chicken Woopper</b><br><font size="2pt">Escalope de poulet au grill, 2 cheddars, barbecue,<br>mayo, salade, tomates, oignons rouges</font><br><b><?php echo "$soloB20"?> €</b></td>
							</tr>
							<tr>
								<td><img src="images/burger-wooper.png" width="110" height="90"></td>
								<td></td>
								<td><img src="images/burger-wooper.png" width="110" height="90"></td>
								<td></td>
								<td><img src="images/burger-wooper.png" width="110" height="90"></td>
								<td></td>
								<td><img src="images/burger-classic.png" width="110" height="90"></td>
								<td></td>
								<td><img src="images/burger-mixture.png" width="120" height="90"></td>
							</tr>
							<tr>
								<td><b>Wooper</b><br><font size="2pt">1 steak de 90g, cheddar, ketchup, salade,<br>mayonnaise, tomates, oignons rouges, cornichons</font><br><b><?php echo "$soloB21"?> €</b></td>
								<td></td>
								<td><b>Double wooper</b><br><font size="2pt">2 steak de 90g, 2 cheddars, ketchup, salade,<br>mayonnaise, tomates, oignons rouges, cornichons</font><br><b><?php echo "$soloB22"?> €</b></td>
								<td></td>
								<td><b>Triple wooper</b><br><font size="2pt">3 steak de 90g, 3 cheddars, ketchup, salade,<br>mayonnaise, tomates, oignons rouges, cornichons</font><br><b><?php echo "$soloB23"?> €</b></td>
								<td></td>
								<td><b>Classic</b><br><font size="2pt">1 steak de 90g, bacon américain, ketchup, salade,<br>mayo, tomate, oignons rouges, cornichons</font><br><b><?php echo "$soloB24"?> €</b></td>
								<td></td>
								<td><b>Mixture</b><br><font size="2pt">1 steak de 90g, 1 escalope de poulet, kiri,<br>cheddar, mayo, ketchup, salade, tomates,<br>oignons rouges, cornichons</font><br><b><?php echo "$soloB25"?> €</b></td>
							</tr>
							<tr>
								<td><img src="images/burger-bladi.png" width="110" height="90"></td>
								<td></td>
								<td><img src="images/burger-cheese.png" width="110" height="80"></td>
								<td></td>
								<td><img src="images/burger-cheese-egg.png" width="110" height="80"></td>
								<td></td>
								<td><img src="images/burger-croq.png" width="140" height="70"></td>
								<td></td>
								<td><img src="images/burger-croq-steak.png" width="140" height="80"></td>
							</tr>
							<tr>
								<td><b>Bladi</b><br><font size="2pt">1 steak de 90g cuit au grill, oeuf, cheddar,<br>«bacon américain», sauce Marocaine, salade,<br>tomate, poivrons & oignons rouge frit, olives</font><br><b><?php echo "$soloB26"?> €</b></td>
								<td></td>
								<td><b>Cheese</b><br><font size="2pt">1 steak de 45g, cheddar, ketchup,<br>moutarde douce, salade, oignon, cornichon</font><br><br><b><?php echo "$soloB27"?> €</b></td>
								<td></td>
								<td><b>Cheese egg</b><br><font size="2pt">1 steak de 45g, cheddar, oeuf, salade,<br>bacon de dinde</font><br><br><b><?php echo "$soloB28"?> €</b></td>
								<td></td>
								<td><b>Croq</b><br><font size="2pt"> 1 tranche de jambon de dinde, 2 cheddars</font><br><br><b><?php echo "$soloB29"?> €</b></td>
								<td></td>
								<td><b>Croq steak</b><br><font size="2pt">1 steak de 45g, 2 cheddars,<br>1 tranche de jambon de dinde</font><br><br><b><?php echo "$soloB30"?> €</b></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</section>
		<section id="tex-mex">
			<table class="produit" style="margin-top:108px;">
				<tr>
					<td class="tdexept"><h2>Tex-Mex</h2></td>
				</tr>
				<tr>
					<td>
						<table>
							<tr>
								<td><img src="images/tex-mex-chili-cheese.png" width="150" height="90"></td>
								<td width="30px"></td>
								<td><img src="images/tex-mex-bouchees-boursin.png" width="150" height="90"></td>
								<td width="30px"></td>
								<td><img src="images/tex-mex-mozzasticks.png" width="150" height="90"></td>
								<td width="30px"></td>
								<td><img src="images/tex-mex-bouchees-camenbert.png" width="150" height="90"></td>
								<td width="30px"></td>
								<td><img src="images/tex-mex-tomate-mozza.png" width="150" height="90"></td>
								<td width="30px"></td>
								<td><img src="images/tex-mex-nuggets.png" width="150" height="90"></td>
								<td width="30px"></td>
								<td><img src="images/tex-mex-tenders.png" width="150" height="90">
							</tr>
							<tr>
								<td><b>Chili cheese * 6<br><?php echo "$soloT1"?> €</b></td>
								<td></td>
								<td><b>Bouchées boursin * 6<br><?php echo "$soloT2"?> €</b></td>
								<td></td>
								<td><b>Mozzasticks * 6<br><?php echo "$soloT3"?> €</b></td>
								<td></td>
								<td><b>Bouchées camenbert * 6<br><?php echo "$soloT4"?> €</b></td>
								<td></td>
								<td><b>Tomate mozza * 6<br><?php echo "$soloT5"?> €</b></td>
								<td></td>
								<td><b>Nuggets * 6<br><?php echo "$soloT6"?> €</b></td>
								<td></td>
								<td><b>Tenders * 3<br><?php echo "$soloT7"?> €</b></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</section>
		<section id="assiette">
			<table class="produit" style="margin-top:108px;">
				<tr>
					<td class="tdexept"><h2>Assiette + frites, pain maison et sauce blanche</h2></td>
				</tr>
				<tr>
					<td>
						<table>
							<tr>
								<td><img src="images/assiette.png" width="150" height="80"></td>
								<td></td>
								<td rowspan="2" class="tdexept">Viandes disponibles:<br><ul><li>steak</li><li>curry</li><li>tandoori</li><li>boursin</li><li>escalope grille</li><li>tenders</li><li>cordon bleu</li></ul></td>
							</tr>
							<?php
								$requete="Select * FROM `autres_plats` WHERE id=1";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$prixA1=$donnees['prix'];
								}
							?>
							<tr>
								<td><b>Assiette</b><br><font size="2pt">Salade, tomate, oignon rouge, cornichons,<br>cheddar, 1 viande au choix</font><br><b><?php echo "$prixA1"?> €</b></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</section>
		<section id="enfant">
			<table class="produit" style="margin-top:108px;">
				<tr>
					<td class="tdexept"><h2>Menu Enfant</h2></td>
				</tr>
				<tr>
					<td>
						<table>
							<tr>
								<td><img src="images/menu-enfant.png" width="150" height="150"></td>
							</tr>
							<?php
								$requete="Select * FROM `autres_plats` WHERE id=2";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$prixA2=$donnees['prix'];
								}
							?>
							<tr>
								<td><b>Menu Enfant</b><br><font size="2pt">Cheese ou 4 nuggets, frites,<br>capri-sun, kinder surprise</font><br><b><?php echo "$prixA2"?> €</b></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</section>
		<section id="dessert">
			<table class="produit" style="margin-top:108px;">
				<tr>
					<td class="tdexept"><h2>Dessert</h2></td>
				</tr>
				<tr>
					<td>
						<table style="margin-left:20px;">
							<tr>
								<td><img src="images/dessert-tarte-au-dain.png" height="130" width="170"></td>
								<td width="80px"></td>
								<td><img src="images/dessert-tiramisu-dain.png" width="150" height="150"></td>
								<td width="80px"></td>
								<td><img src="images/dessert-tiramisu-nutella.png" width="150" height="150"></td>
								<td width="80px"></td>
								<td><img src="images/dessert-verrine-banofee.png" width="150" height="150"></td>
								<td width="80px"></td>
								<td><img src="images/dessert-verrine-caramel-twix.png" width="150" height="150"></td>
							</tr>
							<?php
								$requete="Select * FROM dessert WHERE id=1";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$prixD1=$donnees['prix'];
								}
								$requete="Select * FROM dessert WHERE id=2";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$prixD2=$donnees['prix'];
								}
								$requete="Select * FROM dessert WHERE id=3";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$prixD3=$donnees['prix'];
								}
								$requete="Select * FROM dessert WHERE id=4";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$prixD4=$donnees['prix'];
								}
								$requete="Select * FROM dessert WHERE id=5";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$prixD5=$donnees['prix'];
								}
							?>
							<tr>
								<td><b>Tarte au dain<br><?php echo "$prixD1"?> €</b></td>
								<td></td>
								<td><b>Tiramisu au dain<br><?php echo "$prixD2"?> €</b></td>
								<td></td>
								<td><b>Tiramisu au nutella<br><?php echo "$prixD3"?> €</b></td>
								<td></td>
								<td><b>Verrine au banofee<br><?php echo "$prixD4"?> €</b></td>
								<td></td>
								<td><b>Verrine au caramel twix<br><?php echo "$prixD5"?> €</b></td>
							</tr>
							<tr>
								<td><img src="images/dessert-verrine-oreo.png" width="150" height="150"></td>
								<td></td>
								<td><img src="images/dessert-verrine-coco-rocher.png" width="150" height="150"></td>
								<td></td>
								<td></td>
								<td></td>
								<td><img src="images/dessert-verrine-fraise.png" width="150" height="150"></td>
								<td></td>
								<td><img src="images/dessert-verrine-pistache.png" width="150" height="150"></td>
							</tr>
							<?php
								$requete="Select * FROM dessert WHERE id=6";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$prixD6=$donnees['prix'];
								}
								$requete="Select * FROM dessert WHERE id=7";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$prixD7=$donnees['prix'];
								}
								$requete="Select * FROM dessert WHERE id=8";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$prixD8=$donnees['prix'];
								}
								$requete="Select * FROM dessert WHERE id=9";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$prixD9=$donnees['prix'];
								}
							?>
							<tr>
								<td><b>Verrine à l'oreo<br><?php echo "$prixD6"?> €</b></td>
								<td></td>
								<td><b>Verrine au coco rocher<br><?php echo "$prixD7"?> €</b></td>
								<td></td>
								<td></td>
								<td></td>
								<td><b>Verrine à la fraise<br><?php echo "$prixD8"?> €</b></td>
								<td></td>
								<td><b>Verrine à la pistache<br><?php echo "$prixD9"?> €</b></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</section>
		<section id="boisson">
			<table class="produit" style="margin-top:108px;">
				<tr>
					<td class="tdexept"><h2>Boisson</h2></td>
				</tr>
				<tr>
					<td>
						<table>
							<tr>
								<td><img src="images/boisson-coca.png" width="70" height="150"></td>
								<td width="40px"></td>
								<td><img src="images/boisson-coca-cherry.png" width="70" height="150"></td>
								<td width="40px"></td>
								<td><img src="images/boisson-coca-zero.png" width="70" height="150"></td>
								<td width="40px"></td>
								<td><img src="images/boisson-7up.png" width="70" height="150"></td>
								<td width="40px"></td>
								<td><img src="images/boisson-7up-mojito.png" width="70" height="150"></td>
								<td width="40px"></td>
								<td><img src="images/boisson-cristalline.png" width="70" height="150"></td>
								<td width="20px"></td>
								<td><img src="images/boisson-cristalline-citronnade.png" width="70" height="150"></td>
								<td width="20px"></td>
								<td><img src="images/boisson-cristalline-fraise.png" width="70" height="150"></td>
								<td width="20px"></td>
								<td><img src="images/boisson-cristalline-peche.png" width="70" height="150"></td>
							</tr>
							<?php
								$requete="Select * FROM boisson WHERE id=1";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$prixBO1=$donnees['prix'];
								}
								$requete="Select * FROM boisson WHERE id=2";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$prixBO2=$donnees['prix'];
								}
								$requete="Select * FROM boisson WHERE id=3";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$prixBO3=$donnees['prix'];
								}
								$requete="Select * FROM boisson WHERE id=4";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$prixBO4=$donnees['prix'];
								}
								$requete="Select * FROM boisson WHERE id=5";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$prixBO5=$donnees['prix'];
								}
								$requete="Select * FROM boisson WHERE id=6";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$prixBO6=$donnees['prix'];
								}
								$requete="Select * FROM boisson WHERE id=7";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$prixBO7=$donnees['prix'];
								}
								$requete="Select * FROM boisson WHERE id=8";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$prixBO8=$donnees['prix'];
								}
								$requete="Select * FROM boisson WHERE id=9";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$prixBO9=$donnees['prix'];
								}
							?>
							<tr>
								<td><b>Coca Cola<br>33cl<br><?php echo "$prixBO1"?> €</b></td>
								<td></td>
								<td><b>Coca Cola Cherry<br>33cl<br><?php echo "$prixBO2"?> €</b></td>
								<td></td>
								<td><b>Coca Cola Zero<br>33cl<br><?php echo "$prixBO3"?> €</b></td>
								<td></td>
								<td><b>7up<br>33cl<br><?php echo "$prixBO4"?> €</b></td>
								<td></td>
								<td><b>7up Mojito<br>33cl<br><?php echo "$prixBO5"?> €</b></td>
								<td></td>
								<td><b>Cristalline<br>50cl<br><?php echo "$prixBO6"?> €</b></td>
								<td></td>
								<td><b>Cristalline Citronnade<br>50cl<br><?php echo "$prixBO7"?> €</b></td>
								<td></td>
								<td><b>Cristalline Fraise<br>50cl<br><?php echo "$prixBO8"?> €</b></td>
								<td></td>
								<td><b>Cristalline Pêche<br>50cl<br><?php echo "$prixBO9"?> €</b></td>
							</tr>
							<tr>
								<td><img src="images/boisson-fanta-citron.png" width="70" height="150"></td>
								<td width="40px"></td>
								<td><img src="images/boisson-fanta-exotique.png" width="70" height="150"></td>
								<td width="40px"></td>
								<td><img src="images/boisson-fanta-orange.png" width="90" height="150"></td>
								<td width="40px"></td>
								<td><img src="images/boisson-hawai-tropical.png" width="70" height="150"></td>
								<td width="50px"></td>
								<td><img src="images/boisson-oasis-tropical.png" width="70" height="150"></td>
								<td width="40px"></td>
								<td><img src="images/boisson-perrier.png" width="70" height="150"></td>
								<td width="20px"></td>
								<td><img src="images/boisson-tropico.png" width="70" height="150"></td>
								<td width="20px"></td>
								<td><img src="images/boisson-coca-bouteille.png" width="70" height="150"></td>
								<td width="20px"></td>
								<td><img src="images/boisson-oasis-tropical-bouteille.png" width="70" height="150"></td>
							</tr>
							<?php
								$requete="Select * FROM boisson WHERE id=10";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$prixBO10=$donnees['prix'];
								}
								$requete="Select * FROM boisson WHERE id=11";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$prixBO11=$donnees['prix'];
								}
								$requete="Select * FROM boisson WHERE id=12";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$prixBO12=$donnees['prix'];
								}
								$requete="Select * FROM boisson WHERE id=13";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$prixBO13=$donnees['prix'];
								}
								$requete="Select * FROM boisson WHERE id=14";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$prixBO14=$donnees['prix'];
								}
								$requete="Select * FROM boisson WHERE id=15";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$prixBO15=$donnees['prix'];
								}
								$requete="Select * FROM boisson WHERE id=16";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$prixBO16=$donnees['prix'];
								}
								$requete="Select * FROM boisson WHERE id=17";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$prixBO17=$donnees['prix'];
								}
								$requete="Select * FROM boisson WHERE id=18";
								$resultat=mysqli_query($bdd, $requete);
								while($donnees=mysqli_fetch_assoc($resultat))
								{
									$prixBO18=$donnees['prix'];
								}
							?>
							<tr>
								<td><b>Fanta Citron<br>33cl<br><?php echo "$prixBO10"?> €</b></td>
								<td></td>
								<td><b>Fanta Exotique<br>33cl<br><?php echo "$prixBO11"?> €</b></td>
								<td></td>
								<td><b>Fanta Orange<br>33cl<br><?php echo "$prixBO12"?> €</b></td>
								<td></td>
								<td><b>Hawai Tropical<br>33cl<br><?php echo "$prixBO13"?> €</b></td>
								<td></td>
								<td><b>Oasis Tropical<br>33cl<br><?php echo "$prixBO14"?> €</b></td>
								<td></td>
								<td><b>Perrier<br>33cl<br><?php echo "$prixBO15"?> €</b></td>
								<td></td>
								<td><b>Tropico<br>33cl<br><?php echo "$prixBO16"?> €</b></td>
								<td></td>
								<td><b>Coca Cola<br>1L25<br><?php echo "$prixBO17"?> €</b></td>
								<td></td>
								<td><b>Oasis Tropical<br>2L<br><?php echo "$prixBO18"?> €</b></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</section>
		<br>
	</body>
	<footer>
		<center>
			<div><a href="index.html" class="PDP">Acceuil</a></div>
			<div><a href="CGU.pdf" target="_blank" class="PDP">CGU</a></div>
			<div><a href="menu.php" class="PDP">Menu</a></div></br>
			<div> © 2020 Delim's Burger Tout droits réservé </div>
		</center>
	</footer>
</html>