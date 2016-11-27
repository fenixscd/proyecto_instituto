<?php

namespace core\dominio;


class Usuario implements UsuarioInterfaz
{
    private $idUsuario;
    private $nombreUsuario;
    private $email;
    private $password;

    /**
     * @return int
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * @param mixed $idUsuario
     * @return Usuario
     */
    public function setIdUsuario(int $idUsuario)
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
     * @param string $nombreUsuario
     * @return Usuario
     */
    public function setNombreUsuario(string $nombreUsuario)
    {
        $this->nombreUsuario = $nombreUsuario;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Usuario
     */
    public function setEmail(string $email)
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
    public function setPassword(string $password)
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

    /**
     * @return string
     */
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