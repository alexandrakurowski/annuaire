<?php 
try {
	$bdd=new
	PDO('mysql:host=localhost;dbname=base_annuaire;charset=utf8','alex','alexandra32'); 
 	
    } catch (Exception $e) 
 {
   die('Erreur:'.$e->getMessage()); 	
 } 
 

$reponse = $bdd->query('SELECT * FROM contacts') ;
$cpt = $bdd->query('SELECT COUNT(*) AS nb_contacts FROM contacts') ;
$email = $bdd->query('SELECT email FROM contacts') ; 
$ville = $bdd->query('SELECT * FROM contacts WHERE ville = "Auch"') ;
while($donnees=$reponse->fetch()){
      echo '<p>Nom user= ' . $donnees['nom'] . ' - Email user= ' . $donnees['email'] ;
}
while($result=$cpt->fetch()){
      echo '<p>Nombre de contacts= ' . $result[0]; 
}
while ($city=$ville->fetch()) {
	echo '<p>Nom user= ' . $city['nom']. " " . "ville= " . $city['ville'] ;

}
$oce = $bdd->query('UPDATE contacts SET email = "ogatien@simplon.co" WHERE id = 18') ;
$sup = $bdd->query('DELETE FROM appartenir WHERE fk_contact = 1 ');
$suporel = $bdd->query('DELETE FROM contacts WHERE id = 1') ;
 ?>