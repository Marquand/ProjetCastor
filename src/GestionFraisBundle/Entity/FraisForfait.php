<?php

namespace GestionFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FraisForfait
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GestionFraisBundle\Entity\FraisForfaitRepository")
 */
class FraisForfait
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
     * @ORM\Column(name="libelleFraisForfait", type="string", length=255)
     */
    private $libelleFraisForfait;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float")
     */
    private $montant;


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
     * Set libelleFraisForfait
     *
     * @param string $libelleFraisForfait
     *
     * @return FraisForfait
     */
    public function setLibelleFraisForfait($libelleFraisForfait)
    {
        $this->libelleFraisForfait = $libelleFraisForfait;

        return $this;
    }

    /**
     * Get libelleFraisForfait
     *
     * @return string
     */
    public function getLibelleFraisForfait()
    {
        return $this->libelleFraisForfait;
    }

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return FraisForfait
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }
}

