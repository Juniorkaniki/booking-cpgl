<?php 
include_once 'config.php';

if (isset($_POST['country_id'])) {
	$query = "SELECT * FROM state where c_id=".$_POST['country_id'];
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<option value="">Selectionner la province</option>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<option value='.$row['id'].'>'.$row['state_name'].'</option>';
		 }
	}else{

		echo '<option>Aucune province detecter!</option>';
	}

}elseif (isset($_POST['state_id'])) {
	 

	$query = "SELECT * FROM city where s_id=".$_POST['state_id'];
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<option value="">Selectionner la ville</option>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<option value='.$row['id'].'>'.$row['city_name'].'</option>';
		 }
	}else{

		echo '<option>Aucune ville selectionner!</option>';
	}

}elseif (isset($_POST['city_id'])) {
	 

	$query = "SELECT * FROM commune where city_id=".$_POST['city_id'];
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<option value="">Selectionner la commune</option>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<option value='.$row['id'].'>'.$row['nom_com'].'</option>';
		 }
	}else{

		echo '<option>Aucune commune selectionner!</option>';
	}

}elseif (isset($_POST['com_id'])) {
	 

	$query = "SELECT * FROM quartier where com_id=".$_POST['com_id'];
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<option value="">Selectionner le quartier</option>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<option value='.$row['id'].'>'.$row['nom_quartier'].'</option>';
		 }
	}else{

		echo '<option>Aucun quartier selectionner!</option>';
	}

}


?>