<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calificaciones
 *
 * @ORM\Table(name="calificaciones")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CalificacionesRepository")
 */
class Calificaciones
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="Estudiante", type="decimal", precision=11, scale=0)
     */
    private $estudiante;

    /**
     * @var string
     *
     * @ORM\Column(name="Materia", type="decimal", precision=11, scale=0)
     */
    private $materia;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="decimal", precision=10, scale=0)
     */
    private $nota;


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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Calificaciones
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set estudiante
     *
     * @param string $estudiante
     *
     * @return Calificaciones
     */
    public function setEstudiante($estudiante)
    {
        $this->estudiante = $estudiante;

        return $this;
    }

    /**
     * Get estudiante
     *
     * @return string
     */
    public function getEstudiante()
    {
        return $this->estudiante;
    }

    /**
     * Set materia
     *
     * @param string $materia
     *
     * @return Calificaciones
     */
    public function setMateria($materia)
    {
        $this->materia = $materia;

        return $this;
    }

    /**
     * Get materia
     *
     * @return string
     */
    public function getMateria()
    {
        return $this->materia;
    }

    /**
     * Set nota
     *
     * @param string $nota
     *
     * @return Calificaciones
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return string
     */
    public function getNota()
    {
        return $this->nota;
    }
}

