<!DOCTYPE HTML>
<html lang="de">
    <head>
	</head>
	<body>
	<p>
        Ausgabe
    </p>
	<table>
    <?php
        for($i=1; $i<5; $i++)
        {
			echo"<tr>";
            for($z=1; $z<5; $z++)
            {	
				echo
				("
					<td> $i-$z</td>
				);
            }
			echo"</tr>";
        }
    ?>
	</table>
	</body>
</html>