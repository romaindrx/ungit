

<?php
/*
*	Author : Romain
*	date : 2014-01-16
*
*  Rmonte a un moment tout ceci !
*
*/
// Ajout d'un nombre aléatoire..entre 3 et 9
$roue = rand(3,9);

//$roue = 7;

$result = $roue + 2;


?>
<!doctype html>
<!--[if lte IE 7]> <html class="no-js ie67 ie678" lang="fr"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 ie678" lang="fr"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9" lang="fr"> <![endif]-->
<!--[if gt IE 9]> <!--><html class="no-js" lang="fr"> <!--<![endif]-->
<head>
		<meta charset="UTF-8">
		<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
		<title>J'aime Schnaps.it</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="css/knacss.css" media="all">
		<link rel="stylesheet" href="css/styles.css" media="all">
</head>
<body>
<p>Si plus petit c'est gagné...</p>
	<p><?php echo $result."<br>"; ?></p>

<?php
if ($result < 6){
	echo "<p>Le résultat est plus petit</p>";
}
else{
	echo "<p>dommage c'est plus grand...</p>";	
}
?>
</body>
</html>
