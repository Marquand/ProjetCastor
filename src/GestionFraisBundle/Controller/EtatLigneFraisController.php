<?php

namespace GestionFraisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GestionFraisBundle\Entity\EtatLigneFrais;
use GestionFraisBundle\Form\EtatLigneFraisType;

/**
 * EtatLigneFrais controller.
 *
 */
class EtatLigneFraisController extends Controller
{

    /**
     * Lists all EtatLigneFrais entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GestionFraisBundle:EtatLigneFrais')->findAll();

        return $this->render('GestionFraisBundle:EtatLigneFrais:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new EtatLigneFrais entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new EtatLigneFrais();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('etatlignefrais_show', array('id' => $entity->getId())));
        }

        return $this->render('GestionFraisBundle:EtatLigneFrais:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a EtatLigneFrais entity.
     *
     * @param EtatLigneFrais $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(EtatLigneFrais $entity)
    {
        $form = $this->createForm(new EtatLigneFraisType(), $entity, array(
            'action' => $this->generateUrl('etatlignefrais_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new EtatLigneFrais entity.
     *
     */
    public function newAction()
    {
        $entity = new EtatLigneFrais();
        $form   = $this->createCreateForm($entity);

        return $this->render('GestionFraisBundle:EtatLigneFrais:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a EtatLigneFrais entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionFraisBundle:EtatLigneFrais')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EtatLigneFrais entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionFraisBundle:EtatLigneFrais:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing EtatLigneFrais entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionFraisBundle:EtatLigneFrais')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EtatLigneFrais entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionFraisBundle:EtatLigneFrais:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a EtatLigneFrais entity.
    *
    * @param EtatLigneFrais $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(EtatLigneFrais $entity)
    {
        $form = $this->createForm(new EtatLigneFraisType(), $entity, array(
            'action' => $this->generateUrl('etatlignefrais_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing EtatLigneFrais entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionFraisBundle:EtatLigneFrais')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EtatLigneFrais entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('etatlignefrais_edit', array('id' => $id)));
        }

        return $this->render('GestionFraisBundle:EtatLigneFrais:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a EtatLigneFrais entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionFraisBundle:EtatLigneFrais')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find EtatLigneFrais entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('etatlignefrais'));
    }

    /**
     * Creates a form to delete a EtatLigneFrais entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('etatlignefrais_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
