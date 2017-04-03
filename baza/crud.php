<?php

class crud{
private $mysql_server ;
private $mysql_user ;
private $mysql_password;
private $mysql_db;
private $mysqli;

function crud() {

    $this->mysql_server = "localhost";
    $this->mysql_user = "root";
    $this->mysql_password = "";
    $this->mysql_db= "marija";

    $this->mysqli = new mysqli($this->mysql_server, $this->mysql_user, $this->mysql_password, $this->mysql_db);
    if ($this->mysqli->connect_errno) {
    printf("Konekcija neuspešna: %s\n", $this->mysqli->connect_error);
    exit();
}

$this->mysqli->set_charset("utf8");
}

function zatvoriKonekciju() {

    $this->mysqli->close();
}

function ubaciPlaninare($ime, $prezime, $pol, $email, $telefon, $datumRodjenja, $oprema, $planine, $pripada, $pdrustvo) {

    $unos = $this->mysqli->prepare("INSERT INTO members (ime, prezime, pol, email, telefon, datumRodjenja, oprema, planine, pripada, pdrustvo)
             VALUES (?,?,?,?,?,?,?,?,?,?)");

    $unos->bind_param('ssssssssss', $ime, $prezime, $pol, $email, $telefon, $datumRodjenja, $oprema, $planine, $pripada, $pdrustvo);

    if($unos->execute()) {
                header("Location: http://localhost/marija/index.php#registracija");
                //echo "Unos je izvrsen uspjesno!";
                //exit();
            }else{
                echo "Greska pri unosu!";
            }
}


function uzmiPlaninare($sql) {
    
    $rezultat = $this->mysqli->query($sql);
    if($rezultat->num_rows==0){
    echo 'Tabela members je prazna';
    die();
    }
   return $rezultat;
}

function izbrisiIzBaze($id) {

    $sql = "DELETE FROM members WHERE id='.$id";
    if($results = $this->mysqli->query($sql)){
        header("Location: http://localhost/marija/index.php#portfolio");
    }else{
        echo '{"status":"error"}';  
    }

}
}
?>