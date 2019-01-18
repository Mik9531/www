<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Articulos
 *
 * @ORM\Table(name="articulos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArticulosRepository")
 */
class Articulos
{
    /**
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * Assert\NotBlank(message="El campo titulo no puede estar vacio")
	 * Assert\Length(
	 *	max = 100,
	 *	maxMessage = "El titulo no puede tener más" ,
	 * )
	 @ORM\Column(name="titulo", type="string", length=100)
     */
    private $titulo;

    /**
     * @var string
     * Assert\NotBlank(message="El campo titulo no puede estar vacio")
	 * Assert\Length(
	 *	max = 100,
	 *	maxMessage = "El titulo no puede tener más" ,
	 * )
     * @ORM\Column(name="descripcion", type="string", length=200)
     */
    private $descripcion;

    /**
     * @var string
     * Assert\NotBlank(message="El campo titulo no puede estar vacio")
	 * Assert\Length(
	 *	max = 100,
	 *	maxMessage = "El titulo no puede tener más" ,
	 * )
     * @ORM\Column(name="cuerpo", type="text")
     */
    private $cuerpo;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Articulos
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Articulos
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
     * Set cuerpo
     *
     * @param string $cuerpo
     *
     * @return Articulos
     */
    public function setCuerpo($cuerpo)
    {
        $this->cuerpo = $cuerpo;

        return $this;
    }

    /**
     * Get cuerpo
     *
     * @return string
     */
    public function getCuerpo()
    {
        return $this->cuerpo;
    }
}

