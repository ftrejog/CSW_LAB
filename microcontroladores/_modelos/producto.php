<?php

$mysqli = new mysqli('localhost', 'root', '', 'mcdb');

/**
 * Clase Producto
 * Representa a un producto dentro de la base de datos.
 * Cada producto tiene diferentes atributos o propiedades
 **/
class Producto
{
    public $id;
    public $Marca;
    public $Modelo;
    public $Frec_Max_MHZ;
    public $Num_Pines;
    public $Mem_Prog_KB;
    public $Ram;
    public $EE_Prom;
    public $ADC;
    public $UART;
    public $I2C;
    public $Tmr_8_Bits;
    public $Tmr_16_Bits;
    public $Tmr_32_Bits;

    // método constructor de la clase
    // Permite construir un nuevo objeto de clase Producto con sus diferentes
    // propiedades. Los valores de cada propiedad son tomadas de los registros
    // en base de datos.
    function __construct($id, $Marca, $Modelo, $Frec_Max_MHZ, $Num_Pines,
        $Mem_Prog_KB, $Ram, $EE_Prom, $ADC, $UART, $I2C, $Tmr_8_Bits,
        $Tmr_16_Bits, $Tmr_32_Bits) {
        $this->id = $id;
        $this->Marca = $Marca;
        $this->Modelo = $Modelo;
        $this->Frec_Max_MHZ = $Frec_Max_MHZ;
        $this->Num_Pines = $Num_Pines;
        $this->Mem_Prog_KB = $Mem_Prog_KB;
        $this->Ram = $Ram;
        $this->EE_Prom = $EE_Prom;
        $this->ADC = $ADC;
        $this->UART = $UART;
        $this->I2C = $I2C;
        $this->Tmr_8_Bits = $Tmr_8_Bits;
        $this->Tmr_16_Bits = $Tmr_16_Bits;
        $this->Tmr_32_Bits = $Tmr_32_Bits;
    }

    // Busca productos según la cláusula where.
    public static function busca($where)
    {
        GLOBAL $mysqli;
        $query = $mysqli->query($where);
        $results = [];
        while ($result = mysqli_fetch_array($query)) {
            $producto = new Producto(
                $result['id'],
                $result['Marca'],
                $result['Modelo'],
                $result['Frec_Max_MHZ'],
                $result['Num_Pines'],
                $result['Mem_Prog_KB'],
                $result['Ram'],
                $result['EE_Prom'],
                $result['ADC'],
                $result['UART'],
                $result['I2C'],
                $result['Tmr_8_Bits'],
                $result['Tmr_16_Bits'],
                $result['Tmr_32_Bits']
            );
            array_push($results, $producto);
        }
        $query->close();

        return $results;
    }

    // Obtiene las diferentes marcas de los productos registrados
    public static function obtenMarcas()
    {
        GLOBAL $mysqli;
        $result = [];
        $query = $mysqli -> query ("SELECT DISTINCT `Marca` FROM productos ORDER BY `Marca`");
        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            array_push($result, $row);
        }
        $query->close();
        return $result;
    }

    // Obtiene los diferentes modelos de los productos registrados
    public static function obtenModelos()
    {
        GLOBAL $mysqli;
        $result = [];
        $query = $mysqli -> query ("SELECT DISTINCT `Modelo` FROM productos ORDER BY `Modelo`");
        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            array_push($result, $row);
        }
        $query->close();
        return $result;
    }

    // Obiene las diferentes frecuendias de los productos registrados
    public static function obtenFrecuencias()
    {
        GLOBAL $mysqli;
        $result = [];
        $query = $mysqli -> query ("SELECT DISTINCT `Frec_Max_MHZ` FROM productos ORDER BY `Frec_Max_MHZ`");
        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            array_push($result, $row);
        }
        $query->close();
        return $result;
    }

    // Obtiene los diferentes números de pines de los productos registrados
    public static function obtenPines()
    {
        GLOBAL $mysqli;
        $result = [];
        $query = $mysqli -> query ("SELECT DISTINCT `Num_Pines` FROM productos ORDER BY `Num_Pines`");
        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            array_push($result, $row);
        }
        $query->close();
        return $result;
    }

    // Obtiene las diferentes valores Mem_Prog_KB de los productos registrados
    public static function obtenMemoria()
    {
        GLOBAL $mysqli;
        $result = [];
        $query = $mysqli -> query ("SELECT DISTINCT `Mem_Prog_KB` FROM productos ORDER BY `Mem_Prog_KB`");
        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            array_push($result, $row);
        }
        $query->close();
        return $result;
    }

    // Obtiene las diferentes valores RAM de los productos registrados
    public static function obtenRam()
    {
        GLOBAL $mysqli;
        $result = [];
        $query = $mysqli -> query ("SELECT DISTINCT `Ram` FROM productos ORDER BY `Ram`");
        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            array_push($result, $row);
        }
        $query->close();
        return $result;
    }

    // Obtiene los diferentes valores EEPROM de los prodcutos registrados
    public static function obtenEeprom()
    {
        GLOBAL $mysqli;
        $result = [];
        $query = $mysqli -> query ("SELECT DISTINCT `EE_Prom` FROM productos ORDER BY `EE_Prom`");
        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            array_push($result, $row);
        }
        $query->close();
        return $result;
    }

    // Obtiene los diferentes valores ADC de los productos registrados
    public static function obtenNoAdc()
    {
        GLOBAL $mysqli;
        $result = [];
        $query = $mysqli -> query ("SELECT DISTINCT `ADC` FROM productos ORDER BY `ADC`");
        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            array_push($result, $row);
        }
        $query->close();
        return $result;
    }

    // Obtiene los diferentes valores UART de los productos registrados
    public static function obtenUart()
    {
        GLOBAL $mysqli;
        $result = [];
        $query = $mysqli -> query ("SELECT DISTINCT `UART` FROM productos ORDER BY `UART`");
        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            array_push($result, $row);
        }
        $query->close();
        return $result;
    }

    // Obtiene los diferentes valores I2C de los productos registrados
    public static function obtenI2c()
    {
        GLOBAL $mysqli;
        $result = [];
        $query = $mysqli -> query ("SELECT DISTINCT `I2C` FROM productos ORDER BY `I2C`");
        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            array_push($result, $row);
        }
        $query->close();
        return $result;
    }

    // Obtiene los diferentes valores timer 8 bits de los productos registrados
    public static function obtenT8bit()
    {
        GLOBAL $mysqli;
        $result = [];
        $query = $mysqli -> query ("SELECT DISTINCT `Tmr_8_Bits` FROM productos ORDER BY `Tmr_8_Bits`");
        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            array_push($result, $row);
        }
        $query->close();
        return $result;
    }

    // Obtiene los diferentes valores timer 16 bits de los productos registrados
    public static function obtenT16bit()
    {
        GLOBAL $mysqli;
        $result = [];
        $query = $mysqli -> query ("SELECT DISTINCT `Tmr_16_Bits` FROM productos ORDER BY `Tmr_16_Bits`");
        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            array_push($result, $row);
        }
        $query->close();
        return $result;
    }

    // Obtiene los diferentes valores timer 32 bits de los productos registrados
    public static function obtenT32bit()
    {

        GLOBAL $mysqli;
        $result = [];
        $query = $mysqli -> query ("SELECT DISTINCT `Tmr_32_Bits` FROM productos ORDER BY `Tmr_32_Bits`");
        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            array_push($result, $row);
        }
        $query->close();
        return $result;;
    }
}
?>
