<?php

namespace AppBundle\Entity;

use Cocur\Slugify\Slugify;
use Doctrine\ORM\Mapping as ORM;

/**
 * Promocion
 *
 * @ORM\Table(name="promocion", indexes={@ORM\Index(name="IDX_CD312F74C7F0C30", columns={"modificador_id"})})
 * @ORM\Entity
 */
class Promocion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\SequenceGenerator(sequenceName="promocion_id_seq", allocationSize=1, initialValue=1)
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    protected $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="template", type="string", length=255, nullable=true)
     */
    protected $template;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="datetime", nullable=true)
     */
    protected $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_termino", type="datetime", nullable=true)
     */
    protected $fechaTermino;

    /**
     * @var boolean
     *
     * @ORM\Column(name="portada", type="boolean", nullable=false)
     */
    protected $portada = true;

    /**
     * @var string
     *
     * @ORM\Column(name="opcion_1_nombre", type="string", length=255, nullable=true)
     */
    protected $opcion1Nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="opcion_2_nombre", type="string", length=255, nullable=true)
     */
    protected $opcion2Nombre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    protected $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255, nullable=false, unique=true)
     */
    protected $slug;

    /**
     * @var Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="modificador_id", referencedColumnName="id")
     * })
     */
    protected $modificador;



    public function __toString()
    {
        return $this->getNombre();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Promocion
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        $slugify= new Slugify();
        $this->setSlug($slugify->slugify($nombre));
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
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return Promocion
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaTermino
     *
     * @param \DateTime $fechaTermino
     *
     * @return Promocion
     */
    public function setFechaTermino($fechaTermino)
    {
        $this->fechaTermino = $fechaTermino;

        return $this;
    }

    /**
     * Get fechaTermino
     *
     * @return \DateTime
     */
    public function getFechaTermino()
    {
        return $this->fechaTermino;
    }

    /**
     * Set portada
     *
     * @param boolean $portada
     *
     * @return Promocion
     */
    public function setPortada($portada)
    {
        $this->portada = $portada;

        return $this;
    }

    /**
     * Get portada
     *
     * @return boolean
     */
    public function getPortada()
    {
        return $this->portada;
    }

    /**
     * Set opcion1Nombre
     *
     * @param string $opcion1Nombre
     *
     * @return Promocion
     */
    public function setOpcion1Nombre($opcion1Nombre)
    {
        $this->opcion1Nombre = $opcion1Nombre;

        return $this;
    }

    /**
     * Get opcion1Nombre
     *
     * @return string
     */
    public function getOpcion1Nombre()
    {
        return $this->opcion1Nombre;
    }

    /**
     * Set opcion2Nombre
     *
     * @param string $opcion2Nombre
     *
     * @return Promocion
     */
    public function setOpcion2Nombre($opcion2Nombre)
    {
        $this->opcion2Nombre = $opcion2Nombre;

        return $this;
    }

    /**
     * Get opcion2Nombre
     *
     * @return string
     */
    public function getOpcion2Nombre()
    {
        return $this->opcion2Nombre;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Promocion
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set modificador
     *
     * @param Usuario $modificador
     *
     * @return Promocion
     */
    public function setModificador(Usuario $modificador = null)
    {
        $this->modificador = $modificador;

        return $this;
    }

    /**
     * Get modificador
     *
     * @return Usuario
     */
    public function getModificador()
    {
        return $this->modificador;
    }

    /**
     * Set template
     *
     * @param string $template
     *
     * @return Promocion
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Get template
     *
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Promocion
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }
}