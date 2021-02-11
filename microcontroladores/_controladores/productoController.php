<?php

//fetch.php
//Extrae los datos de la base de datos
//https://www.webslesson.info/2020/05/make-editable-datatable-using-jquery-tabledit-plugin-with-php-ajax.html
include('../database_connection.php');

$column = array("id", "Marca", "Modelo", "Frec_Max_MHZ", "Num_Pines", "Mem_Prog_KB", "Ram", "EE_Prom", "ADC", "UART", "I2C", "Tmr_8_Bits", "Tmr_16_Bits", "Tmr_32_Bits");
$query = "SELECT * FROM productos ";

//Parametros para realizar la busqueda
if(isset($_POST["search"]["value"]))
{
 $query .= '
	WHERE `Marca`  LIKE "%'.$_POST["search"]["value"].'%"
	OR `Modelo` LIKE "%'.$_POST["search"]["value"].'%"
	OR `Frec_Max_MHZ` LIKE "%'.$_POST["search"]["value"].'%"
	OR `Num_Pines` LIKE "%'.$_POST["search"]["value"].'%"
	OR `Mem_Prog_KB` LIKE "%'.$_POST["search"]["value"].'%"
	OR `Ram` LIKE "%'.$_POST["search"]["value"].'%"
	OR `EE_Prom` LIKE "%'.$_POST["search"]["value"].'%"
	OR `ADC` LIKE "%'.$_POST["search"]["value"].'%"
	OR `UART` LIKE "%'.$_POST["search"]["value"].'%"
	OR `I2C` LIKE "%'.$_POST["search"]["value"].'%"
	OR `Tmr_8_Bits` LIKE "%'.$_POST["search"]["value"].'%"
	OR `Tmr_16_Bits` LIKE "%'.$_POST["search"]["value"].'%"
	OR `Tmr_32_Bits` LIKE "%'.$_POST["search"]["value"].'%"
 ';
}

//Parametros para ordenar la busqueda
if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY id DESC ';
}

$query1 = '';
if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connection->prepare($query);
$statement->execute();
$number_filter_row = $statement->rowCount();
$statement = $connection->prepare($query . $query1);
$statement->execute();
$result = $statement->fetchAll();
$data = array();

foreach($result as $row)
{
	$sub_array = array();
	$sub_array[] = $row['id'];
	$sub_array[] = $row['Marca'];
	$sub_array[] = $row['Modelo'];
	$sub_array[] = $row['Frec_Max_MHZ'];
	$sub_array[] = $row['Num_Pines'];
	$sub_array[] = $row['Mem_Prog_KB'];
	$sub_array[] = $row['Ram'];
	$sub_array[] = $row['EE_Prom'];
	$sub_array[] = $row['ADC'];
	$sub_array[] = $row['UART'];
	$sub_array[] = $row['I2C'];
	$sub_array[] = $row['Tmr_8_Bits'];
	$sub_array[] = $row['Tmr_16_Bits'];
	$sub_array[] = $row['Tmr_32_Bits'];
	$data[] = $sub_array;
}

//Cuenta los registros
function count_all_data($connection)
{
 $query = "SELECT * FROM productos";
 $statement = $connection->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

//Salida de datos
$output = array(
 'draw'   => intval($_POST['draw']),
 'recordsTotal' => count_all_data($connection),
 'recordsFiltered' => $number_filter_row,
 'data'   => $data
);

echo json_encode($output);
?>
