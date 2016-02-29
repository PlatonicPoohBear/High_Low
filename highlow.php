<?php 

$random_number = rand(0, 100);

$input;

if (gettype($argv[1]) == "integer" && gettype($argv[2]) == "integer") {
	if ($argv[1] < $argv[2]) {
		$random_number = rand($argv[1], $argv[2]);
	}
}

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