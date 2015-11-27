<?php

namespace GestionFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtatLigneFrais
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GestionFraisBundle\Entity\EtatLigneFraisRepository")
 */
class EtatLigneFrais
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleEtatLigneFrais", type="string", length=255)
     */
    private $libelleEtatLigneFrais;


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
     * Set libelleEtatLigneFrais
     *
     * @param string $libelleEtatLigneFrais
     *
     * @return EtatLigneFrais
     */
    public function setLibelleEtatLigneFrais($libelleEtatLigneFrais)
    {
        $this->libelleEtatLigneFrais = $libelleEtatLigneFrais;

        return $this;
    }

    /**
     * Get libelleEtatLigneFrais
     *
     * @return string
     */
    public function getLibelleEtatLigneFrais()
    {
        return $this->libelleEtatLigneFrais;
    }
}

