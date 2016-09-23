<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calendari</title>
</head>
<body>

<table>

<?php
	$files = 6;
	$cols = 7;
	$num = 1;
	$b=0;

	for ($ifiles=0; $ifiles < $files; $ifiles++) { 

		echo "<tr>";

		for ($dia=0; $b < 7; $b++) { 
			
			switch ($b) {

				case '0':
					
					echo "<td>"."dl"."</td>";

					break;

				case '1':
					
					echo "<td>"."dt"."</td>";

					break;

				case '2':
					
					echo "<td>"."dc"."</td>";

					break;

				case '3':
					
					echo "<td>"."dj"."</td>";

					break;

				case '4':
					
					echo "<td>"."dv"."</td>";

					break;


				case '5':
					
					echo "<td>"."ds"."</td>";

					break;


				case '6':
					
					echo "<td>"."dm"."</td>";

					break;

			}

			echo "</tr>";

		}

		echo "<tr>";

		for ($icols=1; $icols < $cols; $icols++) { 
			
			echo "<td>"."$num"."</td>";
			$num++;

		}

	}

	echo "</tr>";

?>

</table>


</body>
</html>
