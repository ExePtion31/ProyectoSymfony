<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estudiantes
 *
 * @ORM\Table(name="estudiantes")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EstudiantesRepository")
 */
class Estudiantes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreEst", type="string", length=50)
     */
    private $nombreEst;

    /**
     * @var string
     *
     * @ORM\Column(name="Edad", type="decimal", precision=2, scale=0)
     */
    private $edad;

    /**
     * @var string
     *
     * @ORM\Column(name="Grado", type="decimal", precision=2, scale=0)
     */
    private $grado;


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
     * Set nombreEst
     *
     * @param string $nombreEst
     *
     * @return Estudiantes
     */
    public function setNombreEst($nombreEst)
    {
        $this->nombreEst = $nombreEst;

        return $this;
    }

    /**
     * Get nombreEst
     *
     * @return string
     */
    public function getNombreEst()
    {
        return $this->nombreEst;
    }

    /**
     * Set edad
     *
     * @param string $edad
     *
     * @return Estudiantes
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return string
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set grado
     *
     * @param string $grado
     *
     * @return Estudiantes
     */
    public function setGrado($grado)
    {
        $this->grado = $grado;

        return $this;
    }

    /**
     * Get grado
     *
     * @return string
     */
    public function getGrado()
    {
        return $this->grado;
    }
}

