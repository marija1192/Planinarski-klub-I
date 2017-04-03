<?php 
include "konekcija.php";

if(isset($_GET['action']) && isset ($_GET['id'])){
	$action = $_GET['action'];
	$id=$_GET['id'];

	switch ($action) {
		case 'delete':
			if($results = $db->query('DELETE FROM members WHERE id='.$id)){
				echo '{"status":"ok"}';
			}else{
				echo '{"status":"error"}';
				//die();

			}
			break;
		
		case 'update':
			$ime=$db->real_escape_string($_POST['ime']);
			$prezime=$db->real_escape_string($_POST['prezime']);
			$telefon=$db->real_escape_string($_POST['telefon']);
			$email=$db->real_escape_string($_POST['email']);
			$oprema=$db->real_escape_string($_POST['oprema']);
			$planine=$db->real_escape_string($_POST['planine']);
			$pdrustvo=$db->real_escape_string($_POST['pdrustvo']);
			if($update=$db->query('UPDATE members SET ime="'.$ime.'", prezime="'.$prezime.'", telefon="'.$telefon.'", email="'.$email.'", oprema="'.$oprema.'", planine="'.$planine.'", pdrustvo="'.$pdrustvo.'" WHERE id='.$id)){
				echo '{"status":"ok"}';

			}else{
				$response = array('status' => "error", 'message'=>$db->error);
				echo json_encode($response);
			}

			break;
		default:
			echo "Nista";
			break;
	}
}



 ?>