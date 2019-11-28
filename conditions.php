<?php 
	$age = 9;
	/*if ($age <= 12) {
		echo "salut gamin, bienvenue sur mon site <br />";
		$autorisation_entrer = "oui";
	}
	else
	{
		echo "ce site est un site pour enfant, vous etes trop vieux pour entrer.Au revoir!<br />";
		$autorisation_entrer = "non";

	}
	echo "Avez vous l'autorisation d'entrer?<br/> la reponse est : $autorisation_entrer";*/

	$langue = "francais";
	if ($age <= 12 and $langue == "francais") {
		echo "Bienvenue sur mon site !";
	}
	elseif ($age <= 12 and $langue == "anglais" ) {
		echo "welcome to my site!";
	}



 ?>