<?php 

$random_number = rand(0, 100);

$input;

do {
	fwrite(STDOUT, 'Guess? ');

	$input = fgets(STDIN);

	if ($input < $random_number) {
		echo "HIGHER\n";
	} elseif ($input > $random_number) {
		echo "LOWER\n";
	} elseif ($input == $random_number) {
		echo "GOOD GUESS\n";
	}

} while ($input != $random_number)

 ?>