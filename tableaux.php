<?php 
/*$prenom[0] = 'Fily';
$prenom[1] = 'Papa';
$prenom[2] = 'Fatou';
*/
//ou encore faire
$prenom = array('nom'=>'SEYE','prenom'=>'Fily','age'=>'11');
foreach ($prenom as $id => $frere) {
	echo '<p>'.$id.' vaut: '.$frere.'<p/>';
}

 ?>