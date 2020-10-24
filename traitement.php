<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Triathlon</title>
	<link type="text/css" href="css/projet.css" rel="stylesheet" media="all"/>
</head>

<body>
	<div id="socialmediadiv">
			<a href="https://www.facebook.com/FFTRI/"><img src="Image/facebook.png" title="Page Facebook"></a>
			<a href="https://twitter.com/fftri"><img src="Image/twitter.png" title="Page Twitter"></a>
	</div>
	<header>
		<h1> Triathlon </h1>
		<img class="imgHaut" src="Image/Triathlon.png">
	</header>

	
		<nav id="fondmenu">
         	<ul id="menu">
         		<li>
            		<a href="accueil.html">Accueil</a>
            	</li>
            	<li>
            		<a href="planning.html">Planning</a>
            	</li>
            	<li>
            		<a href="tarifs.html">Tarifs</a>
            	</li>
            	<li>
		            <div id="dropdown">
		               <a href="#" id="dropdown-button">Activité</a>
		               <div id="dropdown-content">
		                  <a href="athletisme.html">Athlétisme</a>
		                  <a href="cyclisme.html">Cyclisme</a>
		                  <a href="natation.html">Natation</a>
		               </div>
		            </div>
		        </li>
		        <li>
		            <div id="dropdown">
		               <a href="#" id="dropdown-button">Média</a>
		               <div id="dropdown-content">
		                  <a href="photos.html">Photos</a>
		                  <a href="videos.html">Vidéos</a>
		               </div>
		            </div>
		        </li>
		    
				<li>
					<a href="contact.html">Contact</a>
				</li>
			</ul> 
		</nav>

		<section>
				<?php

					if(isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['message']) && isset($_POST['act']) && isset($_POST['hor']) && isset($_POST['btn_radio']))
					{
						if(!empty($_POST['nom']) && !empty($_POST['mail']) && !empty($_POST['message']) && !empty($_POST['act']) && !empty($_POST['hor']) && !empty($_POST['btn_radio']))
						{
							if(filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL))
							{
								echo "<p>Voici le résultat du remplissage du formulaire</p>";

								echo "<p>Nom : " . $_POST['nom'] . "</p>";

								echo "<p>Adresse Mail : " . $_POST['mail'] . "</p>";

								if($_POST['act'] == "act1")
								{
									echo "<p>Activité : Athlétisme</p>";
								}elseif($_POST['act'] == "act2")
								{
									echo "<p>Activité : Cyclisme</p>";
								}else
								{
									echo "<p>Activité : Natation</p>";
								}

								if($_POST['hor'] == "h1")
								{
									echo "<p>Horaire : Lundi de 14h à 18h</p>";
								}elseif($_POST['hor'] == "h2")
								{
									echo "<p>Horaire : Mardi de 8h à 18h</p>";
								}elseif($_POST['hor'] == "h3")
								{
									echo "<p>Horaire : Mercredi de 12h à 18h</p>";
								}elseif($_POST['hor'] == "h4")
								{
									echo "<p>Horaire : Mercredi de 16h à 20h</p>";
								}elseif($_POST['hor'] == "h5")
								{
									echo "<p>Horaire : Jeudi de 11h à 20h</p>";
								}elseif($_POST['hor'] == "h6")
								{
									echo "<p>Horaire : Jeudi de 12h à 18h </p>";
								}else
								{
									echo "<p>Horaire : Samedi de 12h à 15h</p>";
								}

								if(!empty($_POST['telephone'])){
									echo "<p>Télephone : " . $_POST['telephone'] . "</p>";
								}

								if($_POST['btn_radio'] == "1")
								{
									echo "<p>C'est votre première demande</p>";
								}else
								{
									echo "<p>Vous avez déjà fait une demande !</p>";
								}
								if($_POST['message'])
								{
									$message=$_POST['message'] ;
									echo "Message : $message";
								}

								echo "<p>Votre demande a été pris en compte !</p>";
								echo "<p><a href='accueil.html'>Retour vers le site</a></p>";

							}else
							{
								echo "<p>L'adresse mail est malheureusement incorrecte !</p>";
								echo "<p>Veuillez corriger cela !</p>";
							}

						}else
						{

							echo "<p>Vous avez oubliez de remplir le formulaire en entier !</p>";
							if(empty($_POST['nom']))
							{
								echo "Vous avez pas rempli le champ nom du formulaire !";
							}
							if(empty($_POST['mail']))
							{
								echo "Vous avez pas rempli le champ mail du formulaire !";
							}
							if(empty($_POST['message']))
							{
								echo "Vous avez pas rempli le champ message du formulaire !";
							}
							if(empty($_POST['act']))
							{
								echo "Vous avez pas rempli le champ objet du formulaire !";
							}
							if(empty($_POST['hor']))
							{
								echo "Vous avez pas rempli le champ objet du formulaire !";
							}
							if(empty($_POST['btn_radio']))
							{
								echo "Vous avez pas désignez votre situation vis-à-vis du site dans le formulaire !";
							}

							echo "<p>Veuillez le complétez en entier : <a href='contact.html'>Formulaire</a></p>";

						}
					}else
					{
						echo "<p>Vous devez remplir le formulaire à l'adresse suivante : <a href='contact.html'>Formulaire</a></p>";
					}


				?>

			</section>
	</div>

	<footer>
		<p>Anthony COSTA / Adrien BLAY G8</p>
	</footer>

</body>
</html>