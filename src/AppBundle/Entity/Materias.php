<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materias
 *
 * @ORM\Table(name="materias")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MateriasRepository")
 */
class Materias
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
     * @ORM\Column(name="nombreMateria", type="string", length=20)
     */
    private $nombreMateria;


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
     * Set nombreMateria
     *
     * @param string $nombreMateria
     *
     * @return Materias
     */
    public function setNombreMateria($nombreMateria)
    {
        $this->nombreMateria = $nombreMateria;

        return $this;
    }

    /**
     * Get nombreMateria
     *
     * @return string
     */
    public function getNombreMateria()
    {
        return $this->nombreMateria;
    }
}

