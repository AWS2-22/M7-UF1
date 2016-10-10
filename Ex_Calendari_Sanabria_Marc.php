<!DOCTYPE html>
<style type="text/css">
	td {
    	border: 1px solid black;
    	border-collapse: collapse;
    	padding: 0px;
    	text-align: center;
    }

    th {
    	border: 1px solid black;
    	border-collapse: collapse;
    	padding: 0px;
    	background-color: green;
    }

	table {
		border-spacing: 0px;
		width: 40%;
		height: 160px;
	}
</style>

<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>Calendari</title>

</head>
<body>

<table>

<?php
	
	$files = 5; // Inici de variables
	$cols = 7;
	$num = 1;
	$b=0;
	$dies_max=0;
	$num_mes=date("n");
	$num_any=date("Y");
	$dia1_mesActual_unix=mktime(01, 01, 01, $num_mes, 01, $num_any);
	$dia_setmana=date("w ", $dia1_mesActual_unix);
	$mesos_31 = array(1, 3, 5, 7, 8, 10, 12);
	$mesos_30= array(4, 6, 9, 11);
	$dia_actual=date("j");
	$dia_cal=1;

	if (in_array ($num_mes, $mesos_31) ) {	//inici de condicionals per número màxim de dies
		$dies_max=31;
	}

	elseif (in_array ($num_mes, $mesos_30)) {
		$dies_max=30;
	}

	elseif (($num_mes==2) && (($num_any%4==0))) {
		$dies_max=29;
	}

	elseif (($num_mes==2) && (($num_any%4!=0))) {
		$dies_max=28;
	}

	for ($ifiles=0; $ifiles <= $files; $ifiles++) { 

		echo "<tr border: 2px solid black;>";

		for ($dia=0; $b < 7; $b++) { // bucles + switch pels headers amb el nom dels dies
			
			switch ($b) {

				case '0':
					
					echo "<th>"."dl"."</th>";

					break;

				case '1':
					
					echo "<th>"."dt"."</th>";

					break;

				case '2':
					
					echo "<th>"."dc"."</th>";

					break;

				case '3':
					
					echo "<th>"."dj"."</th>";

					break;

				case '4':
					
					echo "<th>"."dv"."</th>";

					break;


				case '5':
					
					echo "<th>"."ds"."</th>";

					break;


				case '6':
					
					echo "<th>"."dm"."</th>";

					break;

			}

		}

		echo "</tr>";

		echo "<tr>";

		for ($icols=1; $icols <= $cols; $icols++) { 
			
			if (($dia_cal <= $dies_max) && ($num  >= $dia_setmana)) {
				if ($dia_cal==$dia_actual) {
					echo "<td style= 'background-color: blue; color: white'>" . "$dia_cal" . "</td>";
					$dia_cal++;
				}
				else {
				echo "<td>"."$dia_cal"."</td>";
				$dia_cal++;
				}
			}
			else {
				echo "<td></td>";
			}
			$num++;
		}

	}

	echo "</tr>";

	/*echo "inici dia setmana del mes actual: " . date("w ") . "<br>";

	/echo "numero mes actual: " . date("n ") . "<br>";

	echo "Timestamp del dia 1: " . $dia1_mesActual_unix . "<br>";

	echo "Dia del 1: " . date("w ", $dia1_mesActual_unix) . "<br>";

	echo "Dia actual: " . $dia_actual;*/

?>

</table>

</body>
</html>
