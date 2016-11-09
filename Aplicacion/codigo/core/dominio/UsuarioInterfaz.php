<?php

namespace core\dominio;

interface UsuarioInterfaz
{
    /**
     * @return mixed
     */
    public function getIdUsuario();

    /**
     * @param mixed $idUsuario
     * @return Usuario
     */
    public function setIdUsuario($idUsuario);

    /**
     * @return mixed
     */
    public function getNombreUsuario();

    /**
     * @param mixed $nombreUsuario
     * @return Usuario
     */
    public function setNombreUsuario($nombreUsuario);

    /**
     * @return mixed
     */
    public function getEmail();

    /**
     * @param mixed $email
     * @return Usuario
     */
    public function setEmail($email);

    /**
     * @return mixed
     */
    public function getPassword();
    /**
     * @param mixed $password
     * @return Usuario
     */
    public function setPassword($password);

    /**
     * @param mixed
     */
    public function __toString();

}