<?php 
if(!empty($_POST)) {
	
	if(isset($_POST['ime']) && isset($_POST['prezime']) && isset($_POST['pol']) && isset($_POST['email']) && isset($_POST['telefon']) && isset($_POST['datumRodjenja'])  
	 && isset($_POST['oprema']) && isset($_POST['planine']) && isset($_POST['pripada']) && isset($_POST['pdrustvo'])){
		  

		$ime=trim($_POST['ime']);
		$prezime=trim($_POST['prezime']);
		$pol=trim($_POST['pol']);
		$email = trim($_POST['email']);
		$telefon = trim($_POST['telefon']);
		$datumRodjenja = trim($_POST['datumRodjenja']);
		$oprema = trim($_POST['oprema']);
		$planine = trim($_POST['planine']);
		$pripada = trim($_POST['pripada']);
		$pdrustvo = trim($_POST['pdrustvo']);
		
		
		

		require "crud.php";
		$crud = new crud();
		$crud -> ubaciPlaninare($ime, $prezime, $pol, $email, $telefon, $datumRodjenja, $oprema, $planine, $pripada, $pdrustvo);


		
	}else{
		echo "Los pokusaj unosa!" ;
		
	}
			require "crud.php";

			$crud = new crud();

	$crud -> zatvoriKonekciju();
}else{
	//echo "broken post";
}

?>