<?php
/**
 * Created by PhpStorm.
 * User: Eddy
 * Date: 28/11/2015
 * Time: 13:06
 */

namespace GestionFraisBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FicheFraisOldController extends Controller
{

    /**
     * Affiche le contenue d'une fiche de frais pour le visiteur
     *
     */
    public function consulterFicheAction($mois)
    {
        $idVisiteur = '1993'/*$_SESSION['idVisiteur']*/;
        $em = $this->getDoctrine()->getManager();

        //recupération de la fiche frais

        $fichefrais = $em->getRepository('GestionFraisBundle:FicheFrais')->findBy(
            array(
                'mois' => $mois,
                'idVisiteur' => $idVisiteur));

        //recupération des ligne de frais forfait de cette fiche
        $lignefraisForfait[] = $fichefrais = $em->getRepository('GestionFraisBundle:LigneFraisForfait')->findBy(
            array(
                'mois' => $mois,
                'idVisiteur' => $idVisiteur
            )
        );

        //recupération des ligne de frais hors forfait de cette fiche
        $lignefraisForfait[] = $fichefrais = $em->getRepository('GestionFraisBundle:LigneFraisHorsForfait')->findBy(
            array(
                'mois' => $mois,
                'idVisiteur' => $idVisiteur
            )
        );


        return $this->render('GestionFraisBundle:FicheFrais:consulterFiche.html.twig', array(
            'fichefrais'      => $fichefrais));

    }
    /**
     * Affiche le contenue d'une fiche de frais et offre la possibilité de la modifier au visiteur
     *
     */
    public function renseignerFicheAction($mois)
    {
        $fichefrais = $this->recupereFicheFrais($mois);

        return $this->render('GestionFraisBundle:FicheFrais:renseignerFiche.html.twig', array(
            'fichefrais'      => $fichefrais));
    }
    /**
     * Affiche le contenue d'une fiche de frais et permet la modification de l'etat au comptable
     *
     */
    public function validerFicheAction($visteur, $mois)
    {
        $fichefrais = $this->recupereFicheFrais($mois);

        return $this->render('GestionFraisBundle:FicheFrais:validerFiche.html.twig', array(
            'fichefrais'      => $fichefrais));
    }

    /**
     * @param $mois
     * @return array
     *
     * recupere la fiche frais depuis la base de donnée en fonction de l'idVisiteur et du mois
     */
    public function recupereFicheFrais($mois)
    {

        $idVisiteur = '1993'/*$_SESSION['idVisiteur']*/;
        $em = $this->getDoctrine()->getManager();
        $fichefrais = $em->getRepository('GestionFraisBundle:FicheFrais')->findBy(
            array(
                'mois' => $mois,
                'idVisiteur' => $idVisiteur));
        return $fichefrais;
    }

}