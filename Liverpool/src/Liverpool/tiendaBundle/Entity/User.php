<?php

namespace Liverpool\tiendaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario", indexes={@ORM\Index(name="idPersona", columns={"idPersona"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idUsuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idusuario;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=70, nullable=true)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="contrasena", type="string", length=70, nullable=true)
     */
    private $contrasena;

    /**
     * @var \Persona
     *
     * @ORM\ManyToOne(targetEntity="Persona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPersona", referencedColumnName="idPersona")
     * })
     */
    private $idpersona;



    /**
     * Get idusuario
     *
     * @return integer
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     *
     * @return Usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set contrasena
     *
     * @param string $contrasena
     *
     * @return Usuario
     */
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;

        return $this;
    }

    /**
     * Get contrasena
     *
     * @return string
     */
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * Set idpersona
     *
     * @param \Liverpool\tiendaBundle\Entity\Persona $idpersona
     *
     * @return Usuario
     */
    public function setIdpersona(\Liverpool\tiendaBundle\Entity\Persona $idpersona = null)
    {
        $this->idpersona = $idpersona;

        return $this;
    }

    /**
     * Get idpersona
     *
     * @return \Liverpool\tiendaBundle\Entity\Persona
     */
    public function getIdpersona()
    {
        return $this->idpersona;
    }
}
