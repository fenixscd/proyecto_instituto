<?php

namespace core\dominio;


class Usuario implements UsuarioInterfaz
{
    private $idUsuario;
    private $nombreUsuario;
    private $email;
    private $password;

    /**
     * @return string
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * @param mixed $idUsuario
     * @return Usuario
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }

    /**
     * @param tring $nombreUsuario
     * @return Usuario
     */
    public function setNombreUsuario($nombreUsuario)
    {
        $this->nombreUsuario = $nombreUsuario;
        return $this;
    }

    /**
     * @return tring
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @param UsuarioInterfaz $usuario
     * @return boolean
     */
    public function isElMismo(UsuarioInterfaz $usuario)
    {
        return $this->nombreUsuario == $usuario->getNombreUsuario();
    }

    /**
     * @return boolean
     */
    public function isNombreEsNuloOVacio()
    {
        if($this->nombreUsuario == false) return false;
        else return true;
    }

    public function __toString()
    {
        $idUsuario = $this->idUsuario;
        $nombreUsuario = $this->getNombreUsuario();
        $email = $this->getEmail();

        if (!$idUsuario) $idUsuario = "Sin idUsuario ";
        if (!$nombreUsuario) $nombreUsuario = "Sin nombre de usuario ";
        if (!$email) $email = "Sin email ";

        return "IdUsuario" . $idUsuario ." Usuario " . $nombreUsuario . " Email " . $email;
    }
}