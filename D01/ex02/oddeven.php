<?php
	$stdin = fopen("php://stdin", "r");
	while ($stdin && !feof($stdin))
	{
		echo "Entrer un nombre: ";
		$number = fgets($stdin);
		if ($number)
		{
			$number = str_replace("\n", "", "$number");
			if (is_numeric($number))
			{
				if ($number % 2 == 0)
					echo "Le chiffre " . $number . " est Pair\n";
				else
					echo "Le chiffre " . $number . " est Impair\n";
            } 
            else
				echo "'" . $number . "' n'est pas un chiffre\n";
		}
	}
	fclose($stdin);
	echo "\n";
?>
