<?php 
$db = new mysqli('localhost', 'root', '', 'marija');

if( $db -> connect_errno){ 
	echo $db->connect_error;
	
}

?>