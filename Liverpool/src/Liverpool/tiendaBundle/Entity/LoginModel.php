<?php

namespace Liverpool\tiendaBundle\Entity;

class LoginModel
{

    private $idusuario;
    private $usuario;
    private $contrasena;

    public function getIdusuario()
    {
        return $this->idusuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;

        return $this;
    }

    public function getContrasena()
    {
        return $this->contrasena;
    }

}
