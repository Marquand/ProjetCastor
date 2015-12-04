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
     * @ORM\Id
     *
     * @ORM\Column(name="idVisiteur", type="integer")
     *
     * @ORM\OneToOne(targetEntity="Fichefrais")
     * @ORM\JoinColumn(name="$idVisiteur", referencedColumnName="idVisiteur")
     */
    private $idVisiteur;

    /**
     * @var \string
     *
     * @ORM\Id
     *
     * @ORM\Column(name="mois", type="string", length=6)
     *
     * @ORM\OneToOne(targetEntity="Fichefrais")
     * @ORM\JoinColumn(name="$mois", referencedColumnName="mois")
     */
    private $mois;

    /**
     * @var integer
     *
     * @ORM\Id
     *
     * @ORM\Column(name="idFraisForfait", type="integer")
     *
     * @ORM\ManyToOne(targetEntity="FraisForfait")
     * @ORM\JoinColumn(name="$id", referencedColumnName="id")
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
     *
     * @ORM\ManyToOne(targetEntity="EtatLigneFrais")
     * @ORM\JoinColumn(name="$id", referencedColumnName="id")
     */
    private $idEtatLigneFrais;

    /**
     * Set idVisiteur
     *
     * @param integer $idVisiteur
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
     * @return integer
     */
    public function getIdVisiteur()
    {
        return $this->idVisiteur;
    }

    /**
     * Set mois
     *
     * @param \string $mois
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
     * @return \string
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

