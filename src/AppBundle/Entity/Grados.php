<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grados
 *
 * @ORM\Table(name="grados")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GradosRepository")
 */
class Grados
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
     * @ORM\Column(name="nombreGrado", type="string", length=15)
     */
    private $nombreGrado;


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
     * Set nombreGrado
     *
     * @param string $nombreGrado
     *
     * @return Grados
     */
    public function setNombreGrado($nombreGrado)
    {
        $this->nombreGrado = $nombreGrado;

        return $this;
    }

    /**
     * Get nombreGrado
     *
     * @return string
     */
    public function getNombreGrado()
    {
        return $this->nombreGrado;
    }
}

