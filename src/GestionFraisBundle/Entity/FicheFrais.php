<?php

namespace GestionFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FicheFrais
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GestionFraisBundle\Entity\FicheFraisRepository")
 */
class FicheFrais
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
     * @ORM\Column(name="idEtatFicheFrais", type="integer")
     */
    private $idEtatFicheFrais;

    /**
     * @var string
     *
     * @ORM\Column(name="montantValide", type="string", length=255)
     */
    private $montantValide;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateModif", type="datetime")
     */
    private $dateModif;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbJustificatif", type="integer")
     */
    private $nbJustificatif;


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
     * @return FicheFrais
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
     * @return FicheFrais
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
     * Set idEtatFicheFrais
     *
     * @param integer $idEtatFicheFrais
     *
     * @return FicheFrais
     */
    public function setIdEtatFicheFrais($idEtatFicheFrais)
    {
        $this->idEtatFicheFrais = $idEtatFicheFrais;

        return $this;
    }

    /**
     * Get idEtatFicheFrais
     *
     * @return integer
     */
    public function getIdEtatFicheFrais()
    {
        return $this->idEtatFicheFrais;
    }

    /**
     * Set montantValide
     *
     * @param string $montantValide
     *
     * @return FicheFrais
     */
    public function setMontantValide($montantValide)
    {
        $this->montantValide = $montantValide;

        return $this;
    }

    /**
     * Get montantValide
     *
     * @return string
     */
    public function getMontantValide()
    {
        return $this->montantValide;
    }

    /**
     * Set dateModif
     *
     * @param \DateTime $dateModif
     *
     * @return FicheFrais
     */
    public function setDateModif($dateModif)
    {
        $this->dateModif = $dateModif;

        return $this;
    }

    /**
     * Get dateModif
     *
     * @return \DateTime
     */
    public function getDateModif()
    {
        return $this->dateModif;
    }

    /**
     * Set nbJustificatif
     *
     * @param integer $nbJustificatif
     *
     * @return FicheFrais
     */
    public function setNbJustificatif($nbJustificatif)
    {
        $this->nbJustificatif = $nbJustificatif;

        return $this;
    }

    /**
     * Get nbJustificatif
     *
     * @return integer
     */
    public function getNbJustificatif()
    {
        return $this->nbJustificatif;
    }
}

