<?php

namespace Liverpool\tiendaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipouser
 *
 * @ORM\Table(name="tipouser", indexes={@ORM\Index(name="idPersona", columns={"idPersona"}), @ORM\Index(name="idUsuario", columns={"idUsuario"})})
 * @ORM\Entity
 */
class Tipouser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idTipoUser", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipouser;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=13, nullable=true)
     */
    private $tipo;

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
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUsuario", referencedColumnName="idUsuario")
     * })
     */
    private $idusuario;



    /**
     * Get idtipouser
     *
     * @return integer
     */
    public function getIdtipouser()
    {
        return $this->idtipouser;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Tipouser
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set idpersona
     *
     * @param \Liverpool\tiendaBundle\Entity\Persona $idpersona
     *
     * @return Tipouser
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

    /**
     * Set idusuario
     *
     * @param \Liverpool\tiendaBundle\Entity\Usuario $idusuario
     *
     * @return Tipouser
     */
    public function setIdusuario(\Liverpool\tiendaBundle\Entity\Usuario $idusuario = null)
    {
        $this->idusuario = $idusuario;

        return $this;
    }

    /**
     * Get idusuario
     *
     * @return \Liverpool\tiendaBundle\Entity\Usuario
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }
}
