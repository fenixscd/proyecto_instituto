<?php

namespace core\dominio;

interface UsuarioInterfaz
{
    /**
     * @return mixed
     */
    public function getIdUsuario();

    /**
     * @param int $idUsuario
     * @return Usuario
     */
    public function setIdUsuario(int $idUsuario);

    /**
     * @return mixed
     */
    public function getNombreUsuario();

    /**
     * @param string $nombreUsuario
     * @return Usuario
     */
    public function setNombreUsuario(string $nombreUsuario);

    /**
     * @return mixed
     */
    public function getEmail();

    /**
     * @param string $email
     * @return Usuario
     */
    public function setEmail(string $email);

    /**
     * @return string
     */
    public function getPassword();
    /**
     * @param string $password
     * @return Usuario
     */
    public function setPassword(string $password);

    /**
     * @param string
     */
    public function __toString();

    /**
     * @param UsuarioInterfaz $usuario
     * @return boolean
     */
    public function isElMismo(UsuarioInterfaz $usuario);

    /**
     * @return boolean
     */
    public function isNombreEsNuloOVacio();

}