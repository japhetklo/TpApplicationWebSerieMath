<!DOCTYPE html>
<html>
<head>
	<title>Mon projet</title>
	<style>
		/* styles pour le menu latéral */
		.menu {
			float: left;
			width: 20%;
			background-color: #f2f2f2;
			height: 100%;
			position: fixed;
			overflow-y: auto;
		}
		/* styles pour le contenu centré */
		.content {
			margin-left: 20%;
			padding: 20px;
		}
	</style>
</head>
<body>

	<div class="menu">
		<ul>
			<li><a href="?action=home">Accueil</a></li>
			<li><a href="?action=addition">Additionner</a></li>
			<li><a href="?action=leplusgrandnombre">Le plus grand nombre</a></li>
		</ul>
	</div>

	<div class="content">
		<?php
		// Vérifiez quelle action a été demandée
		if(isset($_GET['action'])) {
			$action = $_GET['action'];
		} else {
			$action = 'home';
		}

		// Chargez le contenu approprié en fonction de l'action
		switch($action) {
			case 'addition':
				if(isset($_POST['num1']) && isset($_POST['num2'])) {
					// Si des valeurs ont été soumises, effectuez l'addition et affichez le résultat
					$num1 = $_POST['num1'];
					$num2 = $_POST['num2'];
					$result = $num1 + $num2;
					echo "<h2>Résultat: $result</h2>";
				} else {
					// Sinon, affichez le formulaire d'addition
					echo '<h2>Additionner</h2>';
					echo '<form method="post">';
					echo 'Nombre 1: <input type="text" name="num1"><br>';
					echo 'Nombre 2: <input type="text" name="num2"><br>';
					echo '<input type="submit" value="Additionner">';
					echo '</form>';
				}
				break;

			case'leplusgrandnombre':
				if(isset($_POST['num1']) && isset($_POST['num2'])){
					$num1 = $_POST['num1'];
					$num2 = $_POST['num2'];
					$resultat = $num1 > $num2;
					echo"<h2>Le plus grand nombre : $num1</h2>";
				}

				else{
					echo '<h2>Le plus grand nombre</h2>';
					echo '<form method="post">';
					echo 'Nombre 1: <input type="text" name="num1"><br>';
					echo 'Nombre 2: <input type="text" name="num2"><br>';
					echo '<input type="submit" value="Le plus grand nombre">';
					echo '</form>';
				}
				
				break;

						

			default:
				echo '<h2>Accueil</h2>';
				echo '<p>Bienvenue sur la page d\'accueil de mon projet.</p>';
		}
		?>
	</div>

</body>
</html>
