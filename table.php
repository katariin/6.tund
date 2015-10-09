<?php


          //table.php
		  require_once("fuction.php");
		  $car_list=getCarData();
		  //var_dump($car_list);
		  
		  
		  // kas kasutaja tahab kustutada
		  //kas adressireal on ?delete=??!??!??
		  if(isset($_GET["delete"])){
			  
			  //saadan kaasa id, mida kustutada
			  deleteCar($_GET["delete"]);
			  
		  }
?>		  

<table border=1>
<tr>
    <th>id</th>
	<th>kasut id</th>
	<th>auto nr märk</th>
	<th>XS</th>
	
	<?php
	                   //iga massiivis olema elemendi kohta
					   //count ($car_list) - massiiivi pikkus
					   for($i = 0; $i < count($cat_list); $i++){
						   // $i = $i + 1; sama mis $i= +=1; sama mis $i++;
						   echo"<tr>";
						   
						   echo "<td>". $car_list[$i]->id."</td>";
						   echo "<td>". $car_list[$i]->user_id."</td>";
						   echo "<td>". $car_list[$i]->number_plate."</td>";
						   echo "<td>". $car_list[$i]->color."</td>";
						   echo "<td><a href='?delete=". $car_list[$i]->id."'>X</a></td>";
						   
						   echo"</tr>";
					   }
					   
					   $stmt $mysqli->prepare("SELECT user_id, color FROM car_plates");
					   $stmt->bind_result($user_id, $color_from_db);
			           $stmt->execute();
	
	?>
</tr>
</table>
