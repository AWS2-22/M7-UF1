<!DOCTYPE html>
<html lang="en">
<style type="text/css">
	ul {
		list-style-type: none;
		text-align: left;
	}
	div {
		margin-left: 10%;
		margin-top: 5%;
	}
</style>
<head>
	<meta charset="UTF-8">
	<title>Pizzeria</title>
</head>
<body>
<div>
	<h3>Escull ingredients de la pizza:</h3>
	<form action ="Pizza_di_Marco.php" method="post">
		<ul>
			<li>
				<input type="checkbox" name="ingredient[]" value="massa">Massa
			</li>
			<li>
				<input type="checkbox" name="ingredient[]" value="orenga">Orenga
			</li>
			<li>
				<input type="checkbox" name="ingredient[]" value="tomaquet">Tomàquet
			</li>
			<li>
				<input type="checkbox" name="ingredient[]" value="mozzarella">Mozzarella
			</li>
			<li>
				<input type="checkbox" name="ingredient[]" value="pepperoni">Pepperoni
			</li>
			<li>
				<input type="checkbox" name="ingredient[]" value="olives">Olives
			</li>
			<li>
				<input type="checkbox" name="ingredient[]" value="xampinyons">Xampinyons
			</li>
			<input type="submit" value="Envia">
		</ul>
		</form>
<?php 
	if (isset($_POST['ingredient'])) {
		$check = $_POST['ingredient'];
		if ($check[0]=="massa" && (count($check)>1)){
			if ($check[1]=="orenga") {
				echo "<h4>Ingredients:</h4>";
				echo "<ul>";
				for ($i=1; $i < count($check); $i++) { 
					echo  "<li>" . $check[$i] . "</li>";
				}
			echo "</ul>";
			echo "<h2>Preu final: " . ((($i)*0.5)+5) . "€ </br>";
			}
			elseif ($check[0]!="massa" || $check[1]!="orenga") {
				echo "<h1>Una pizza sempre ha de portar massa i orenga!</h1>";
			}
		}
		else {
			echo "<h1>Una pizza sempre ha de portar massa i orenga!</h1>";
		}
	}
 ?>
</div>
</body>
</html>