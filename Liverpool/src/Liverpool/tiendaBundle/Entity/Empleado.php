<?php

namespace Liverpool\tiendaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empleado
 *
 * @ORM\Table(name="empleado", indexes={@ORM\Index(name="idDepartamento", columns={"idDepartamento"}), @ORM\Index(name="idPersona", columns={"idPersona"})})
 * @ORM\Entity
 */
class Empleado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idEmpleado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idempleado;

    /**
     * @var \Departamento
     *
     * @ORM\ManyToOne(targetEntity="Departamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDepartamento", referencedColumnName="idDepartamento")
     * })
     */
    private $iddepartamento;

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
     * Get idempleado
     *
     * @return integer
     */
    public function getIdempleado()
    {
        return $this->idempleado;
    }

    /**
     * Set iddepartamento
     *
     * @param \Liverpool\tiendaBundle\Entity\Departamento $iddepartamento
     *
     * @return Empleado
     */
    public function setIddepartamento(\Liverpool\tiendaBundle\Entity\Departamento $iddepartamento = null)
    {
        $this->iddepartamento = $iddepartamento;

        return $this;
    }

    /**
     * Get iddepartamento
     *
     * @return \Liverpool\tiendaBundle\Entity\Departamento
     */
    public function getIddepartamento()
    {
        return $this->iddepartamento;
    }

    /**
     * Set idpersona
     *
     * @param \Liverpool\tiendaBundle\Entity\Persona $idpersona
     *
     * @return Empleado
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
