<?php

namespace infrastructura\adaptadores\persistenciaBD;

//use aplicacion\puertos\repositorios\UsuarioRepositorioInterface;

class UsuarioPersistencia //implements UsuarioRepositorioInterface
{
    private $conexion;

    public function __construct(){

    }

    /**
     *
     * @param int $idUsuario
     * @return UsuarioInterfaz
     */
    public function getUsuario(int $idUsuario)
    {
        $conexion = new Conexion();
        $consulta = "SELECT * FROM Usuarios;";

        $conexion->getConexion();

        /*
         * Guardamos el resultado que devuelve MySQL
         */
        //$resultado = $conexion->consulta($consulta);






        //printf($resultado["nombreUsuario"]);

//         printf($mysqli->affected_rows." Filas afectadas");

//         $resultado->free();
//         $mysqli->close();
    }

    /**
     * @param UsuarioInterfaz $usuario
     * @return boolean
     */
    public function save(UsuarioInterfaz $usuario)
    {

    }

}