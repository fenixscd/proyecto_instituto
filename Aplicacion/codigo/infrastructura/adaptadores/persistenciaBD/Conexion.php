<?php

namespace infrastructura\adaptadores\persistenciaBD;
use Exception;
use mysqli;

/***
 * Crea una conexion a la base de datos
 * @author Samuel
 *
 */
class Conexion
{

    private $db_database;
    private $db_hostname;
    private $db_username;
    private $db_password;

    public function __construct(){
        $this->db_hostname = '192.168.56.20';
        $this->db_username = 'root';
        $this->db_password = '1234';
        $this->db_database = 'mydb';

    }

    /***
     *
     * @return \infrastructura\adaptadores\persistenciaBD\mysqli|NULL
     */
    public function getConexion(){

            $mysqli = new mysqli(   $this->db_hostname,
                                    $this->db_username,
                                    $this->db_password,
                                    $this->db_database);

            if ($mysqli === false){
                die("ERROR: No se estableció la conexión. ". mysqli_connect_error());
            }
            $sql = "SELECT * FROM Usuarios";
            if ($result = $mysqli->query($sql) ){
                if ($result->num_rows > 0 ){

//                     while($row = $result->fetch_array() ){
//                         echo $row[0]. " : ". trim($row[1])."\n";
//                     }

                    //$resultado =$result->fetch_assoc();
                    /* obtener un array asociativo */
                    while ($fila = $result->fetch_assoc()) {
                        printf ("%s (%s)\n", $fila["idUsuario"], $fila["nombreUsuario"]);
                    }


                    /* liberar el conjunto de resultados */
                    //$result->free();
                    //$resultado[0][]
                    //printf ("%s (%s)\n", $resultado[0]["idUsuario"], $resultado[0]["nombreUsuario"]);
                    print_r($result);
                    $result->close();



                } else {
                    echo "NO se encontró ningún registro que coincida con su busqueda.";
                }

            } else {
                echo "Error: No fue posible ejecutar la consulta $sql ". $mysqli->error;
            }
            $mysqli->close();












    }

    public function consulta(String $senticiaSQL){

        $conexion = $this->getConexion();
        $resultado;
        $rerualtoConsulta =  $conexion->query($senticiaSQL);
        $rerualtoConsulta->fetch_assoc();



//         if ($conexion){
//             $rerualtoConsulta =  $conexion->query($senticiaSQL);
//             return $rerualtoConsulta->fetch_assoc();

//         }else{
//             return null;
//         }
    }
}