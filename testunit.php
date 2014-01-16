<p>Si plus petit c'est gagné...</p>


<?php

// Ajout d'un nombre aléatoire..entre 3 et 9
//$roue = rand(3,9);

$roue = 7;

$result = $roue + 2;

echo $result."<br>";


if ($result < 6){
	echo "Le résultat est plus petit";
}
else{
	echo "dommage c'est plus grand...";	
}
?>