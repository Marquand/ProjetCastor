<?php
/**
 * Created by PhpStorm.
 * User: Eddy
 * Date: 28/11/2015
 * Time: 13:06
 */

namespace GestionFraisBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FicheFraisController extends Controller
{

    /**
     * Affiche le contenue d'une fiche de frais pour le visiteur
     *
     */
    public function consulterFicheAction($mois)
    {
        return $this->render('GestionFraisBundle:FicheFrais:consulterFiche.html.twig', array(
            'mois'      => $mois));

    }
    /**
     * Affiche le contenue d'une fiche de frais et offre la possibilité de la modifier au visiteur
     *
     */
    public function renseignerFicheAction($mois)
    {

    }
    /**
     * Affiche le contenue d'une fiche de frais et permet la modification de l'etat au comptable
     *
     */
    public function validerFicheAction($visteur, $mois)
    {

    }
}