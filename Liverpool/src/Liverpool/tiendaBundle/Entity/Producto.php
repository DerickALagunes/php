<?php

namespace Liverpool\tiendaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producto
 *
 * @ORM\Table(name="producto", indexes={@ORM\Index(name="idCategoria", columns={"idCategoria"})})
 * @ORM\Entity
 */
class Producto
{    
    /**
     * @var integer
     *
     * @ORM\Column(name="idProducto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idproducto;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=20, nullable=true)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="text", length=16777215, nullable=true)
     */
    private $imagen;

    /**
     * @var float
     *
     * @ORM\Column(name="precioCompra", type="float", precision=10, scale=0, nullable=true)
     */
    private $preciocompra;

    /**
     * @var float
     *
     * @ORM\Column(name="precioVenta", type="float", precision=10, scale=0, nullable=true)
     */
    private $precioventa;

    /**
     * @var integer
     *
     * @ORM\Column(name="existencia", type="integer", nullable=true)
     */
    private $existencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="stockMinimo", type="integer", nullable=true)
     */
    private $stockminimo;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=true)
     */
    private $estado = '1';

    /**
     * @var \Categoria
     *
     * @ORM\ManyToOne(targetEntity="Categoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCategoria", referencedColumnName="idCategoria")
     * })
     */
    private $idcategoria;



    /**
     * Get idproducto
     *
     * @return integer
     */
    public function getIdproducto()
    {
        return $this->idproducto;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     *
     * @return Producto
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Producto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Producto
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     *
     * @return Producto
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set preciocompra
     *
     * @param float $preciocompra
     *
     * @return Producto
     */
    public function setPreciocompra($preciocompra)
    {
        $this->preciocompra = $preciocompra;

        return $this;
    }

    /**
     * Get preciocompra
     *
     * @return float
     */
    public function getPreciocompra()
    {
        return $this->preciocompra;
    }

    /**
     * Set precioventa
     *
     * @param float $precioventa
     *
     * @return Producto
     */
    public function setPrecioventa($precioventa)
    {
        $this->precioventa = $precioventa;

        return $this;
    }

    /**
     * Get precioventa
     *
     * @return float
     */
    public function getPrecioventa()
    {
        return $this->precioventa;
    }

    /**
     * Set existencia
     *
     * @param integer $existencia
     *
     * @return Producto
     */
    public function setExistencia($existencia)
    {
        $this->existencia = $existencia;

        return $this;
    }

    /**
     * Get existencia
     *
     * @return integer
     */
    public function getExistencia()
    {
        return $this->existencia;
    }

    /**
     * Set stockminimo
     *
     * @param integer $stockminimo
     *
     * @return Producto
     */
    public function setStockminimo($stockminimo)
    {
        $this->stockminimo = $stockminimo;

        return $this;
    }

    /**
     * Get stockminimo
     *
     * @return integer
     */
    public function getStockminimo()
    {
        return $this->stockminimo;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Producto
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set idcategoria
     *
     * @param \Liverpool\tiendaBundle\Entity\Categoria $idcategoria
     *
     * @return Producto
     */
    public function setIdcategoria(\Liverpool\tiendaBundle\Entity\Categoria $idcategoria = null)
    {
        $this->idcategoria = $idcategoria;

        return $this;
    }

    /**
     * Get idcategoria
     *
     * @return \Liverpool\tiendaBundle\Entity\Categoria
     */
    public function getIdcategoria()
    {
        return $this->idcategoria;
    }
}
