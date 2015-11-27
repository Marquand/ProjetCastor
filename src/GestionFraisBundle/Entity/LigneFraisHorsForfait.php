<?php

namespace GestionFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneFraisHorsForfait
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GestionFraisBundle\Entity\LigneFraisHorsForfaitRepository")
 */
class LigneFraisHorsForfait
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
     * @var integer
     *
     * @ORM\Column(name="idVisiteur", type="integer")
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
     * @ORM\Column(name="idEtatLigneFrais", type="integer")
     */
    private $idEtatLigneFrais;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float")
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleLigneHorsForfait", type="string", length=255)
     */
    private $libelleLigneHorsForfait;


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
     * @param integer $idVisiteur
     *
     * @return LigneFraisHorsForfait
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
     * @param \DateTime $mois
     *
     * @return LigneFraisHorsForfait
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
     * Set idEtatLigneFrais
     *
     * @param integer $idEtatLigneFrais
     *
     * @return LigneFraisHorsForfait
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

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return LigneFraisHorsForfait
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return LigneFraisHorsForfait
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

    /**
     * Set libelleLigneHorsForfait
     *
     * @param string $libelleLigneHorsForfait
     *
     * @return LigneFraisHorsForfait
     */
    public function setLibelleLigneHorsForfait($libelleLigneHorsForfait)
    {
        $this->libelleLigneHorsForfait = $libelleLigneHorsForfait;

        return $this;
    }

    /**
     * Get libelleLigneHorsForfait
     *
     * @return string
     */
    public function getLibelleLigneHorsForfait()
    {
        return $this->libelleLigneHorsForfait;
    }
}

