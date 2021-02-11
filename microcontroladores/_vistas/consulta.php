<?php
// Incluye la definición de la clase Producto para poder recuperar datos de los productos desde
// variables de sesión.
include "../_modelos/producto.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Microcontroladores</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css" media="screen" />
  </head>
  <body>
    <header>
      <h2>Microcontroladores</h2>
    </header>

    <section>
      <nav>
        <ul>
          <li><a href="consulta.php">Consulta</a></li>
	      <?php
	      if ($_SESSION['user_admin']) {
	      ?>
	        <li><a href="editar_productos.php">Editar productos</a></li>
	      <?php
	      }
	      ?>

        </ul>
	    <a href="../_controladores/indexController.php?logout=true">Cerrar Sesión</a>
      </nav>

      <article>
        <form method="post" action="../_controladores/consultaController.php">
          <table class="default">
            <tr>
              <td>Marca</td>
              <td>
		        <select name="Marca">
			      <option value="-All-">-All-</option>
			      <?php
                  foreach ($_SESSION['marcas'] as $valor)
                    echo '<option value="'.$valor['Marca'].'">'.$valor['Marca'].'</option>';
			      ?>
		        </select>
	          </td>
	          <td></td>
	        </tr>
            <tr>
              <td>Model
              <td>
		        <select name="Modelo">
			      <option value="-All-">-All-</option>
			      <?php
			      foreach ($_SESSION['modelos'] as $valor)
                    echo '<option value="'.$valor['Modelo'].'">'.$valor['Modelo'].'</option>';
			      ?>
		        </select>
	          </td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Valor M&iacute;nimo</td>
              <td>Valor M&aacute;ximo</td>
            </tr>
            <tr>
              <td>Frecuencia</td>
              <td>
	            <select name="Frec_Max_MHZ_1">
                  <option value="-All-">-All-</option>
                  <?php
                  foreach ($_SESSION['frec'] as $valor)
                    echo '<option value="'.$valor['Frec_Max_MHZ'].'">'.$valor['Frec_Max_MHZ'].'</option>';
                  ?>
	            </select>
	          </td>
              <td>
	            <select name="Frec_Max_MHZ_2">
                  <option value="-All-">-All-</option>
                  <?php
                  foreach ($_SESSION['frec'] as $valor)
                    echo '<option value="'.$valor['Frec_Max_MHZ'].'">'.$valor['Frec_Max_MHZ'].'</option>';
                  ?>
	            </select>
	          </td>
            </tr>
            <tr>
              <td>N&uacute;mero pines</td>
              <td>
	            <select name="Num_Pines_1">
                  <option value="-All-">-All-</option>
                  <?php
                  foreach ($_SESSION['pines'] as $valor)
                    echo '<option value="'.$valor['Num_Pines'].'">'.$valor['Num_Pines'].'</option>';
                  ?>
	            </select>
	          </td>
              <td>
	            <select name="Num_Pines_2">
                  <option value="-All-">-All-</option>
                  <?php
		          foreach ($_SESSION['pines'] as $valor)
                    echo '<option value="'.$valor['Num_Pines'].'">'.$valor['Num_Pines'].'</option>';
                  ?>
	            </select>
	          </td>
            </tr>
            <tr>
              <td>Memoria programa</td>
              <td>
	            <select name="Mem_Prog_KB_1">
                  <option value="-All-">-All-</option>
                  <?php
                  foreach ($_SESSION['mem'] as $valor)
                    echo '<option value="'.$valor['Mem_Prog_KB'].'">'.$valor['Mem_Prog_KB'].'</option>';
                  ?>
	            </select>
	          </td>
              <td>
	            <select name="Mem_Prog_KB_2">
                  <option value="-All-">-All-</option>
                  <?php
                  foreach ($_SESSION['mem'] as $valor)
                    echo '<option value="'.$valor['Mem_Prog_KB'].'">'.$valor['Mem_Prog_KB'].'</option>';
                  ?>
	            </select>
	          </td>
            </tr>
            <tr>
              <td>Ram</td>
              <td>
	            <select name="Ram_1">
                  <option value="-All-">-All-</option>
                  <?php
                  foreach ($_SESSION['ram'] as $valor)
                    echo '<option value="'.$valor['Ram'].'">'.$valor['Ram'].'</option>';
                  ?>
	            </select>
	          </td>
              <td>
	            <select name="Ram_2">
                  <option value="-All-">-All-</option>
                  <?php
		          foreach ($_SESSION['ram'] as $valor)
                    echo '<option value="'.$valor['Ram'].'">'.$valor['Ram'].'</option>';
                  ?>
	            </select>
	          </td>
            </tr>
            <tr>
              <td>EE_Prom</td>
              <td>
	            <select name="EE_Prom_1">
                  <option value="-All-">-All-</option>
                  <?php
                  foreach ($_SESSION['eeprom'] as $valor)
                    echo '<option value="'.$valor['EE_Prom'].'">'.$valor['EE_Prom'].'</option>';
                  ?>
	            </select>
	          </td>
              <td>
	            <select name="EE_Prom_2">
                  <option value="-All-">-All-</option>
                  <?php
		          foreach ($_SESSION['eeprom'] as $valor)
                    echo '<option value="'.$valor['EE_Prom'].'">'.$valor['EE_Prom'].'</option>';
                  ?>
	            </select>
	          </td>
            </tr>
            <tr>
              <td>N&uacute;mero ADC</td>
              <td>
	            <select name="ADC_1">
                  <option value="-All-">-All-</option>
                  <?php
                  foreach ($_SESSION['adc'] as $valor)
                    echo '<option value="'.$valor['ADC'].'">'.$valor['ADC'].'</option>';
                  ?>
	            </select>
	          </td>
              <td>
	            <select name="ADC_2">
                  <option value="-All-">-All-</option>
                  <?php
		          foreach ($_SESSION['adc'] as $valor)
                    echo '<option value="'.$valor['ADC'].'">'.$valor['ADC'].'</option>';
                  ?>
	            </select>
	          </td>
            </tr>
            <tr>
              <td>UART</td>
              <td>
	            <select name="UART_1">
                  <option value="-All-">-All-</option>
                  <?php
		          foreach ($_SESSION['uart'] as $valor)
                    echo '<option value="'.$valor['UART'].'">'.$valor['UART'].'</option>';
                  ?>
	            </select>
	          </td>
              <td>
	            <select name="UART_2">
                  <option value="-All-">-All-</option>
                  <?php
		          foreach ($_SESSION['uart'] as $valor)
                    echo '<option value="'.$valor['UART'].'">'.$valor['UART'].'</option>';
                  ?>
	            </select>
	          </td>
            </tr>
            <tr>
              <td>I2C</td>
              <td>
	            <select name="I2C_1">
                  <option value="-All-">-All-</option>
                  <?php
                  foreach ($_SESSION['i2c'] as $valor)
                    echo '<option value="'.$valor['uart'].'">'.$valor['uart'].'</option>';
                  ?>
	            </select>
	          </td>
              <td>
	            <select name="I2C_2">
                  <option value="-All-">-All-</option>
                  <?php
		          foreach ($_SESSION['i2c'] as $valor)
                    echo '<option value="'.$valor['uart'].'">'.$valor['uart'].'</option>';
                  ?>
	            </select>
	          </td>
            </tr>
            <tr>
              <td>Timer 8 Bits</td>
              <td>
	            <select name="Tmr_8_Bits_1">
                  <option value="-All-">-All-</option>
                  <?php
                  foreach ($_SESSION['t8bit'] as $valor)
                    echo '<option value="'.$valor['Tmr_8_Bits'].'">'.$valor['Tmr_8_Bits'].'</option>';
                  ?>
	            </select>
	          </td>
              <td>
	            <select name="Tmr_8_Bits_2">
                  <option value="-All-">-All-</option>
                  <?php
		          foreach ($_SESSION['t8bit'] as $valor)
                    echo '<option value="'.$valor['Tmr_8_Bits'].'">'.$valor['Tmr_8_Bits'].'</option>';
                  ?>
	            </select>
	          </td>
            </tr>
            <tr>
              <td>Timer 16 Bits</td>
              <td>
	            <select name="Tmr_16_Bits_1">
                  <option value="-All-">-All-</option>
                  <?php
                  foreach ($_SESSION['t16bit'] as $valor)
                    echo '<option value="'.$valor['Tmr_16_Bits'].'">'.$valor['Tmr_16_Bits'].'</option>';
                  ?>
	            </select>
	          </td>
              <td>
	            <select name="Tmr_16_Bits_2">
                  <option value="-All-">-All-</option>
                  <?php
		          foreach ($_SESSION['t16bit'] as $valor)
                    echo '<option value="'.$valor['Tmr_16_Bits'].'">'.$valor['Tmr_16_Bits'].'</option>';
                  ?>
	            </select>
	          </td>
            </tr>
            <tr>
              <td>Timer 32 Bits</td>
              <td>
	            <select name="Tmr_32_Bits_1">
                  <option value="-All-">-All-</option>
                  <?php
		          foreach ($_SESSION['t32bit'] as $valor)
                    echo '<option value="'.$valor['Tmr_32_Bits'].'">'.$valor['Tmr_32_Bits'].'</option>';
                  ?>
	            </select>
	          </td>
              <td>
	            <select name="Tmr_32_Bits_2">
                  <option value="-All-">-All-</option>
                  <?php
		          foreach ($_SESSION['t32bit'] as $valor)
                    echo '<option value="'.$valor['Tmr_32_Bits'].'">'.$valor['Tmr_32_Bits'].'</option>';
                  ?>
	            </select>
	          </td>
            </tr>
          </table>
          <input type="submit" value="Buscar"/>
        </form>

        <div>
          <?php echo $_SESSION['where']; ?>
        </div>
        <table>
	      <tr>
	        <td>id</td>
	        <td>Marca</td>
	        <td>Modelo</td>
	        <td>Frecuencia </td>
	        <td>Num_Pines</td>
	        <td>Mem_Prog_KB</td>
	        <td>Ram</td>
	        <td>EE_Prom</td>
	        <td>ADC</td>
	        <td>UART</td>
	        <td>I2C</td>
	        <td>Timer 8 Bits</td>
	        <td>Timer 16 Bits</td>
	        <td>Timer 32 Bits</td>
	          </tr>
          <?php
	      //Mostrar la tabla de busqueda
	      foreach ($_SESSION['productos'] as $producto)
	      {
	        echo '<tr>';
	        echo '<td>'.$producto->id.'</td>';
	        echo '<td>'.$producto->Marca.'</td>';
	        echo '<td>'.$producto->Modelo.'</td>';
	        echo '<td>'.$producto->Frec_Max_MHZ.'</td>';
	        echo '<td>'.$producto->Num_Pines.'</td>';
	        echo '<td>'.$producto->Mem_Prog_KB.'</td>';
	        echo '<td>'.$producto->Ram.'</td>';
	        echo '<td>'.$producto->EE_Prom.'</td>';
	        echo '<td>'.$producto->ADC.'</td>';
	        echo '<td>'.$producto->UART.'</td>';
	        echo '<td>'.$producto->I2C.'</td>';
	        echo '<td>'.$producto->Tmr_8_Bits.'</td>';
	        echo '<td>'.$producto->Tmr_16_Bits.'</td>';
	        echo '<td>'.$producto->Tmr_32_Bits.'</td>';
	        echo '</tr>';
	      }
          ?>
        </table>

      </article>
    </section>

    <footer>
      <p>Footer</p>
    </footer>

  </body>
</html>
