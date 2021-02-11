<?php
//https://www.baulphp.com/llenar-select-html-con-mysql-php-ejemplos/
//$mysqli = new mysqli('localhost', 'root', '', 'Microcontroladores');
$mysqli = new mysqli('localhost', 'root', '', 'mcdb');


if (!isset($_SESSION)) { session_start(); }

if (!isset($_SESSION['user_admin'])){
  header('Location: index.php');//Aqui lo redireccionas al lugar que quieras.
  die();
}

?>

<html>
  <head>
    <title>Microcontroladores</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>

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
	      if ($_SESSION['user_admin'])
	      {
	      ?>
	        <li><a href="editar_productos.php">Editar productos</a></li>
	      <?php
	      }
	      ?>

        </ul>
	    <a href="../_controladores/indexController.php?logout=true">Cerrar Sesión</a>
      </nav>

      <article>
        <div class="container">
          <h3 align="center">Editar productos</h3>
          <br />
          <div class="panel panel-default">
            <div class="panel-heading">Productos</div>
            <div class="panel-body">
              <div class="table-responsive">
                <table id="sample_data" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Marca</th>
		              <th>Modelo</th>
                      <th>Frecuencia</th>
                      <th>N&uacute;mero de pines</th>
		              <th>Memoria programa</th>
                      <th>Ram</th>
                      <th>EE Prom</th>
                      <th>N&uacute;mero ADC</th>
		              <th>UART</th>
                      <th>I2C</th>
                      <th>Timer 8 Bits</th>
                      <th>Timer 16 Bits</th>
		              <th>Timer 32 Bits</th>
                    </tr>
                  </thead>
                  <tbody></tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <br />
        <br />

        <form method="post" action="editar_productos.php">
          <table class="default">
            <tr>
              <td>Marca</td>
              <td>
		        <input type="text" id="Marca" name="Marca" value="Marca" required>
	          </td>
            </tr>
            <tr>
              <td>Modelo</td>
              <td>
		        <input type="text" id="Modelo" name="Modelo" value="Modelo" required>
	          </td>
            </tr>
            <tr>
              <td>Frecuencia</td>
              <td>
		        <input type="number" id="Frec_Max_MHZ" name="Frec_Max_MHZ" value="0" required>
	          </td>
            </tr>
            <tr>
              <td>N&uacute;m Pines</td>
              <td>
		        <input type="number" id="Num_Pines" name="Num_Pines" value="0" required>
	          </td>
            </tr>
            <tr>
              <td>Memoria</td>
              <td>
		        <input type="number" id="Mem_Prog_KB" name="Mem_Prog_KB" value="0" required>
	          </td>
            </tr>
            <tr>
              <td>Ram</td>
              <td>
		        <input type="number" id="Ram" name="Ram" value="0" required>
	          </td>
            </tr>
            <tr>
              <td>EE Prom</td>
              <td>
		        <input type="number" id="EE_Prom" name="EE_Prom" value="0" required>
	          </td>
            </tr>
            <tr>
              <td>ADC</td>
              <td>
		        <input type="number" id="ADC" name="ADC" value="0" required>
	          </td>
            </tr>
            <tr>
              <td>UART</td>
              <td>
		        <input type="number" id="UART" name="UART" value="0" required>
	          </td>
            </tr>
            <tr>
              <td>I2C</td>
              <td>
		        <input type="number" id="I2C" name="I2C" value="0" required>
	          </td>
            </tr>
            <tr>
              <td>Timer 8 Bits</td>
              <td>
		        <input type="number" id="Tmr_8_Bits" name="Tmr_8_Bits" value="0" required>
	          </td>
            </tr>
            <tr>
              <td>Timer 16 Bits</td>
              <td>
		        <input type="number" id="Tmr_16_Bits" name="Tmr_16_Bits" value="0" required>
	          </td>
            </tr>
            <tr>
              <td>Timer 32 Bits</td>
              <td>
		        <input type="number" id="Tmr_32_Bits" name="Tmr_32_Bits" value="0" required>
	          </td>
            </tr>

          </table>
          <input type="submit" value="Nuevo registro"/>
        </form>
      </article>
    </section>

  </body>
</html>
<?php
if ($_POST)
{
  if ($_POST['Marca'] <> 'Marca' || $_POST['Modelo'] <> 'Modelo'){
	$where="INSERT INTO `productos` (`id`, `Marca`, `Modelo`, `Frec_Max_MHZ`,
		`Num_Pines`, `Mem_Prog_KB`, `Ram`, `EE_Prom`, `ADC`, `UART`, `I2C`, `Tmr_8_Bits`,
		`Tmr_16_Bits`, `Tmr_32_Bits`)
		VALUES
		(NULL, '$_POST[Marca]', '$_POST[Modelo]', '$_POST[Frec_Max_MHZ]',
		'$_POST[Num_Pines]', '$_POST[Mem_Prog_KB]', '$_POST[Ram]', '$_POST[EE_Prom]', '$_POST[ADC]', '$_POST[UART]', '$_POST[I2C]', '$_POST[Tmr_8_Bits]',
		'$_POST[Tmr_16_Bits]', '$_POST[Tmr_32_Bits]') ";

	//https://www.guru99.com/mysql-php-and-other-database-access-methods.html
	$result = mysqli_query($mysqli,$where); //execute SQL statement
	if (!$result)
	  die("Error: " . mysqli_error());
	//output error message if query execution failed
	echo "OK";
  }
  else
  {
	echo "Ingrese los datos";
  }
}
?>

<script type="text/javascript" language="javascript" >
 $(document).ready(function(){

   var dataTable = $('#sample_data').DataTable({
     "processing" : true,
     "serverSide" : true,
     "order" : [],
     "ajax" : {
       url:"../_controladores/fetch.php",
       type:"POST"
     }
   });

   $('#sample_data').on('draw.dt', function(){
     $('#sample_data').Tabledit({
       url:'../_controladores/action.php',
       dataType:'json',
       columns:{
         identifier : [0, 'id'],
         editable:[[1, 'Marca'], [2, 'Modelo'], [3, 'Frec_Max_MHZ'], [4, 'Num_Pines'], [5, 'Mem_Prog_KB'], [6, 'Ram'], [7, 'EE_Prom'], [8, 'ADC'], [9, 'UART'], [10, 'I2C'], [11, 'Tmr_8_Bits'], [12, 'Tmr_16_Bits'], [13, 'Tmr_32_Bits']]
       },
       restoreButton:false,
       onSuccess:function(data, textStatus, jqXHR)
       {
         if(data.action == 'delete')
         {
           $('#' + data.id).remove();
           $('#sample_data').DataTable().ajax.reload();
         }
       }
     });
   });

 });
</script>
