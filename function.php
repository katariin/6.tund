<?php

     //function php
     // ühenduse loomiseks kasuta
	    require_once("../configglobal.php");
		$database = "if15_kati"

	// loome uue funktsiooni
        function getCarData(){
			
			$mysqli = new mysqli($GLOBALS["servername"], $GLOBALS["server_username"], $GLOBALS["server_password"], $GLOBALS["database"]);
			
			$stmt $mysqli->prepare("SELECT id, user_id, number_plate, color, FROM car_plates");
			$stmt->bind_result($id, $user_id, $number_plate, $color_from_db);
			$stmt->execute();
			
			//tühi  massiv kus hoiame objekte
			$array= array();
			
			//tee tsüklit nii mitu korda, kui saad
			//ab'ist ühe rea andmeid
			
			while($stmt->fetch()){
				 // loon objekte
				$car= new StdClass();
				$car->id=$id;
				$car=number_plate;
				
				    // lisame selle massiivi
					array_push($array, $car);
					//echo $array;
					//var_dump($array);
					//echo"</pre>";
				
			
			}
			
			$stmt->close();
			$mysqli->close();
			
		}
		

	
?>	