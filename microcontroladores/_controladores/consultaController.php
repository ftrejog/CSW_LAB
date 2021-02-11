<?php
include "../_modelos/producto.php";

//https://www.baulphp.com/llenar-select-html-con-mysql-php-ejemplos/
//$mysqli = new mysqli('localhost', 'root', '', 'Microcontroladores');
$mysqli = new mysqli('localhost', 'root', '', 'mcdb');

// Si es necesario inicializa la variable de sesión para colocar datos del
// modelo.
if (!isset($_SESSION)) { session_start(); }
if (!isset($_SESSION['user_admin'])){
  header('Location: index.php');//Aqui lo redireccionas al lugar que quieras.
  die();
}

// Genera consulta SQL
if ($_POST) {
    //https://stackoverflow.com/questions/17139501/using-post-to-get-select-option-value-from-html/17139538

    if (empty($where)){
        if ($_POST["Marca"] <> '-All-'){
            $where="`Marca` = '".$_POST["Marca"]."'";
        }
    }
    else{
        if ($_POST["Marca"] <> '-All-'){
            $where=$where." AND `Marca` = '".$_POST["Marca"]."'";
        }
    }
    if (empty($where)){
        if ($_POST["Modelo"] <> '-All-'){
            $where="`Modelo` = '".$_POST["Modelo"]."'";
        }
    }
    else{
        if ($_POST["Modelo"] <> '-All-'){
            $where=$where." AND `Modelo` = '".$_POST["Modelo"]."'";
        }
    }

    //Comparar mayor que o menor que
    if (empty($where)){
        if ($_POST["Frec_Max_MHZ_1"] <> '-All-'){
            $where="`Frec_Max_MHZ` >= ".$_POST["Frec_Max_MHZ_1"];
        }
    }
    else{
        if ($_POST["Frec_Max_MHZ_1"] <> '-All-'){
            $where=$where." AND `Frec_Max_MHZ` >= ".$_POST["Frec_Max_MHZ_1"];
        }
    }
    if (empty($where)){
        if ($_POST["Frec_Max_MHZ_2"] <> '-All-'){
            $where="`Frec_Max_MHZ` <= ".$_POST["Frec_Max_MHZ_2"];
        }
    }
    else{
        if ($_POST["Frec_Max_MHZ_2"] <> '-All-'){
            $where=$where." AND `Frec_Max_MHZ` <= ".$_POST["Frec_Max_MHZ_2"];
        }
    }
    //Fin
    //Comparar mayor que o menor que Num_Pines
    if (empty($where)){
        if ($_POST["Num_Pines_1"] <> '-All-'){
            $where="`Num_Pines` >= ".$_POST["Num_Pines_1"];
        }
    }
    else{
        if ($_POST["Num_Pines_1"] <> '-All-'){
            $where=$where." AND `Num_Pines` >= ".$_POST["Num_Pines_1"];
        }
    }
    if (empty($where)){
        if ($_POST["Num_Pines_2"] <> '-All-'){
            $where="`Num_Pines` <= ".$_POST["Num_Pines_2"];
        }
    }
    else{
        if ($_POST["Num_Pines_2"] <> '-All-'){
            $where=$where." AND `Num_Pines` <= ".$_POST["Num_Pines_2"];
        }
    }
    //Fin
    //Comparar mayor que o menor que Mem_Prog_KB
    if (empty($where)){
        if ($_POST["Mem_Prog_KB_1"] <> '-All-'){
            $where="`Mem_Prog_KB` >= ".$_POST["Mem_Prog_KB_1"];
        }
    }
    else{
        if ($_POST["Mem_Prog_KB_1"] <> '-All-'){
            $where=$where." AND `Mem_Prog_KB` >= ".$_POST["Mem_Prog_KB_1"];
        }
    }
    if (empty($where)){
        if ($_POST["Mem_Prog_KB_2"] <> '-All-'){
            $where="`Mem_Prog_KB` <= ".$_POST["Mem_Prog_KB_2"];
        }
    }
    else{
        if ($_POST["Mem_Prog_KB_2"] <> '-All-'){
            $where=$where." AND `Mem_Prog_KB` <= ".$_POST["Mem_Prog_KB_2"];
        }
    }
    //Fin
    //Comparar mayor que o menor que Ram
    if (empty($where)){
        if ($_POST["Ram_1"] <> '-All-'){
            $where="`Ram` >= ".$_POST["Ram_1"];
        }
    }
    else{
        if ($_POST["Ram_1"] <> '-All-'){
            $where=$where." AND `Ram` >= ".$_POST["Ram_1"];
        }
    }
    if (empty($where)){
        if ($_POST["Ram_2"] <> '-All-'){
            $where="`Ram` <= ".$_POST["Ram_2"];
        }
    }
    else{
        if ($_POST["Ram_2"] <> '-All-'){
            $where=$where." AND `Ram` <= ".$_POST["Ram_2"];
        }
    }
    //Fin
    //Comparar mayor que o menor que EE_Prom
    if (empty($where)){
        if ($_POST["EE_Prom_1"] <> '-All-'){
            $where="`EE_Prom` >= ".$_POST["EE_Prom_1"];
        }
    }
    else{
        if ($_POST["EE_Prom_1"] <> '-All-'){
            $where=$where." AND `EE_Prom` >= ".$_POST["EE_Prom_1"];
        }
    }
    if (empty($where)){
        if ($_POST["EE_Prom_2"] <> '-All-'){
            $where="`EE_Prom` <= ".$_POST["EE_Prom_2"];
        }
    }
    else{
        if ($_POST["EE_Prom_2"] <> '-All-'){
            $where=$where." AND `EE_Prom` <= ".$_POST["EE_Prom_2"];
        }
    }
    //Fin
    //Comparar mayor que o menor que ADC
    if (empty($where)){
        if ($_POST["ADC_1"] <> '-All-'){
            $where="`ADC` >= ".$_POST["ADC_1"];
        }
    }
    else{
        if ($_POST["ADC_1"] <> '-All-'){
            $where=$where." AND `ADC` >= ".$_POST["ADC_1"];
        }
    }
    if (empty($where)){
        if ($_POST["ADC_2"] <> '-All-'){
            $where="`ADC` <= ".$_POST["ADC_2"];
        }
    }
    else{
        if ($_POST["ADC_2"] <> '-All-'){
            $where=$where." AND `ADC` <= ".$_POST["ADC_2"];
        }
    }
    //Fin
    //Comparar mayor que o menor que UART
    if (empty($where)){
        if ($_POST["UART_1"] <> '-All-'){
            $where="`UART` >= ".$_POST["UART_1"];
        }
    }
    else{
        if ($_POST["UART_1"] <> '-All-'){
            $where=$where." AND `UART` >= ".$_POST["UART_1"];
        }
    }
    if (empty($where)){
        if ($_POST["UART_2"] <> '-All-'){
            $where="`UART` <= ".$_POST["UART_2"];
        }
    }
    else{
        if ($_POST["UART_2"] <> '-All-'){
            $where=$where." AND `UART` <= ".$_POST["UART_2"];
        }
    }
    //Fin
    //Comparar mayor que o menor que I2C
    if (empty($where)){
        if ($_POST["I2C_1"] <> '-All-'){
            $where="`I2C` >= ".$_POST["I2C_1"];
        }
    }
    else{
        if ($_POST["I2C_1"] <> '-All-'){
            $where=$where." AND `I2C` >= ".$_POST["I2C_1"];
        }
    }
    if (empty($where)){
        if ($_POST["I2C_2"] <> '-All-'){
            $where="`I2C` <= ".$_POST["I2C_2"];
        }
    }
    else{
        if ($_POST["I2C_2"] <> '-All-'){
            $where=$where." AND `I2C` <= ".$_POST["I2C_2"];
        }
    }
    //Fin
    //Comparar mayor que o menor que Tmr_8_Bits
    if (empty($where)){
        if ($_POST["Tmr_8_Bits_1"] <> '-All-'){
            $where="`Tmr_8_Bits` >= ".$_POST["Tmr_8_Bits_1"];
        }
    }
    else{
        if ($_POST["Tmr_8_Bits_1"] <> '-All-'){
            $where=$where." AND `Tmr_8_Bits` >= ".$_POST["Tmr_8_Bits_1"];
        }
    }
    if (empty($where)){
        if ($_POST["Tmr_8_Bits_2"] <> '-All-'){
            $where="`Tmr_8_Bits` <= ".$_POST["Tmr_8_Bits_2"];
        }
    }
    else{
        if ($_POST["Tmr_8_Bits_2"] <> '-All-'){
            $where=$where." AND `Tmr_8_Bits` <= ".$_POST["Tmr_8_Bits_2"];
        }
    }
    //Fin
    //Comparar mayor que o menor que Tmr_16_Bits
    if (empty($where)){
        if ($_POST["Tmr_16_Bits_1"] <> '-All-'){
            $where="`Tmr_16_Bits` >= ".$_POST["Tmr_16_Bits_1"];
        }
    }
    else{
        if ($_POST["Tmr_16_Bits_1"] <> '-All-'){
            $where=$where." AND `Tmr_16_Bits` >= ".$_POST["Tmr_16_Bits_1"];
        }
    }
    if (empty($where)){
        if ($_POST["Tmr_16_Bits_2"] <> '-All-'){
            $where="`Tmr_16_Bits` <= ".$_POST["Tmr_16_Bits_2"];
        }
    }
    else{
        if ($_POST["Tmr_16_Bits_2"] <> '-All-'){
            $where=$where." AND `Tmr_16_Bits` <= ".$_POST["Tmr_16_Bits_2"];
        }
    }
    //Fin
    //Comparar mayor que o menor que Tmr_32_Bits
    if (empty($where)){
        if ($_POST["Tmr_32_Bits_1"] <> '-All-'){
            $where="`Tmr_32_Bits` >= ".$_POST["Tmr_32_Bits_1"];
        }
    }
    else{
        if ($_POST["Tmr_32_Bits_1"] <> '-All-'){
            $where=$where." AND `Tmr_32_Bits` >= ".$_POST["Tmr_32_Bits_1"];
        }
    }
    if (empty($where)){
        if ($_POST["Tmr_32_Bits_2"] <> '-All-'){
            $where="`Tmr_32_Bits` <= ".$_POST["Tmr_32_Bits_2"];
        }
    }
    else{
        if ($_POST["Tmr_32_Bits_2"] <> '-All-'){
            $where=$where." AND `Tmr_32_Bits` <= ".$_POST["Tmr_32_Bits_2"];
        }
    }
    //Fin
    if (!empty($where)){
        $where="SELECT * FROM productos WHERE ".$where;
    }
    else{
        $where="SELECT * FROM productos";
    }

    //Esta linea es para mostrar la condicion sql a ejecutar
    // echo $where;
}
else{
    $where="SELECT * FROM productos";
}

// Inicializa datos y los registra dentro de la variable de sesión para
// tenerlos disponibles en la vista (consulta.php).
$_SESSION['marcas'] = Producto::obtenMarcas();
$_SESSION['modelos'] = Producto::obtenModelos();
$_SESSION['frec'] = Producto::obtenFrecuencias();
$_SESSION['pines'] = Producto::obtenPines();
$_SESSION['mem'] = Producto::obtenMemoria();
$_SESSION['ram'] = Producto::obtenRam();
$_SESSION['eeprom'] = Producto::obtenEeprom();
$_SESSION['adc'] = Producto::obtenNoAdc();
$_SESSION['uart'] = Producto::obtenUart();
$_SESSION['i2c'] = Producto::obtenI2c();
$_SESSION['t8bit'] = Producto::obtenT8bit();
$_SESSION['t16bit'] = Producto::obtenT16bit();
$_SESSION['t32bit'] = Producto::obtenT32bit();
$_SESSION['productos'] = Producto::busca($where);
$_SESSION['where'] = $where;

// Redirige hacia la vista
header("Location: ../_vistas/consulta.php");
?>
