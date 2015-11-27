<?php

namespace GestionFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneFraisForfait
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GestionFraisBundle\Entity\LigneFraisForfaitRepository")
 */
class LigneFraisForfait
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
     * @ORM\Column(name="idVisiteur", type="string", length=255)
     */
    private $idVisiteur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mois", type="date")
     */
    private $mois;

    /**
     * @var integer
     *
     * @ORM\Column(name="idFraisForfait", type="integer")
     */
    private $idFraisForfait;

    /**
     * @var float
     *
     * @ORM\Column(name="quantite", type="float")
     */
    private $quantite;

    /**
     * @var integer
     *
     * @ORM\Column(name="idEtatLigneFrais", type="integer")
     */
    private $idEtatLigneFrais;


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
     * Set idVisiteur
     *
     * @param string $idVisiteur
     *
     * @return LigneFraisForfait
     */
    public function setIdVisiteur($idVisiteur)
    {
        $this->idVisiteur = $idVisiteur;

        return $this;
    }

    /**
     * Get idVisiteur
     *
     * @return string
     */
    public function getIdVisiteur()
    {
        return $this->idVisiteur;
    }

    /**
     * Set mois
     *
     * @param \DateTime $mois
     *
     * @return LigneFraisForfait
     */
    public function setMois($mois)
    {
        $this->mois = $mois;

        return $this;
    }

    /**
     * Get mois
     *
     * @return \DateTime
     */
    public function getMois()
    {
        return $this->mois;
    }

    /**
     * Set idFraisForfait
     *
     * @param integer $idFraisForfait
     *
     * @return LigneFraisForfait
     */
    public function setIdFraisForfait($idFraisForfait)
    {
        $this->idFraisForfait = $idFraisForfait;

        return $this;
    }

    /**
     * Get idFraisForfait
     *
     * @return integer
     */
    public function getIdFraisForfait()
    {
        return $this->idFraisForfait;
    }

    /**
     * Set quantite
     *
     * @param float $quantite
     *
     * @return LigneFraisForfait
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return float
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set idEtatLigneFrais
     *
     * @param integer $idEtatLigneFrais
     *
     * @return LigneFraisForfait
     */
    public function setIdEtatLigneFrais($idEtatLigneFrais)
    {
        $this->idEtatLigneFrais = $idEtatLigneFrais;

        return $this;
    }

    /**
     * Get idEtatLigneFrais
     *
     * @return integer
     */
    public function getIdEtatLigneFrais()
    {
        return $this->idEtatLigneFrais;
    }
}

