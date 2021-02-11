<?php

//action.php
//Actualiza un registro o lo borra
//https://www.webslesson.info/2020/05/make-editable-datatable-using-jquery-tabledit-plugin-with-php-ajax.html

include('../database_connection.php');
if($_POST['action'] == 'edit')
{
	 $Marca=$_POST["Marca"];
	 $Modelo =$_POST["Modelo"];
	 $Frec_Max_MHZ =$_POST["Frec_Max_MHZ"];
	 $Num_Pines =$_POST["Num_Pines"];
	 $Mem_Prog_KB =$_POST["Mem_Prog_KB"];
	 $Ram =$_POST["Ram"];
	 $EE_Prom =$_POST["EE_Prom"];
	 $ADC =$_POST["ADC"];
	 $UART =$_POST["UART"];
	 $I2C =$_POST["I2C"];
	 $Tmr_8_Bits =$_POST["Tmr_8_Bits"];
	 $Tmr_16_Bits =$_POST["Tmr_16_Bits"];
	 $Tmr_32_Bits =$_POST["Tmr_32_Bits"];
	 $id=$_POST["id"];

	$query = "UPDATE productos SET `Marca` = '$Marca', `Modelo` = '$Modelo', `Frec_Max_MHZ` = '$Frec_Max_MHZ', `Num_Pines` = '$Num_Pines', `Mem_Prog_KB` = '$Mem_Prog_KB', `Ram` = '$Ram', `EE_Prom` = '$EE_Prom', `ADC` = '$ADC', `UART` = '$UART', `I2C` = '$I2C', `Tmr_8_Bits` = '$Tmr_8_Bits', `Tmr_16_Bits` = '$Tmr_16_Bits', `Tmr_32_Bits` = '$Tmr_32_Bits' WHERE `id` = '$id';";
	//$mysqli = new mysqli('localhost', 'root', '', 'Microcontroladores');
	$mysqli = new mysqli('localhost', 'root', '', 'mcdb');
	$result = mysqli_query($mysqli,$query); //execute SQL statement
	echo json_encode($_POST);
}

if($_POST['action'] == 'delete')
{
 $query = "
 DELETE FROM productos
 WHERE id = '".$_POST["id"]."'
 ";
 $statement = $connection->prepare($query);
 $statement->execute();
 echo json_encode($_POST);
}


?>
