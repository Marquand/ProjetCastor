<?php

namespace GestionFraisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GestionFraisBundle\Entity\FraisForfait;
use GestionFraisBundle\Form\FraisForfaitType;

/**
 * FraisForfait controller.
 *
 */
class FraisForfaitController extends Controller
{

    /**
     * Lists all FraisForfait entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GestionFraisBundle:FraisForfait')->findAll();

        return $this->render('GestionFraisBundle:FraisForfait:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new FraisForfait entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new FraisForfait();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('fraisforfait_show', array('id' => $entity->getId())));
        }

        return $this->render('GestionFraisBundle:FraisForfait:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a FraisForfait entity.
     *
     * @param FraisForfait $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(FraisForfait $entity)
    {
        $form = $this->createForm(new FraisForfaitType(), $entity, array(
            'action' => $this->generateUrl('fraisforfait_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new FraisForfait entity.
     *
     */
    public function newAction()
    {
        $entity = new FraisForfait();
        $form   = $this->createCreateForm($entity);

        return $this->render('GestionFraisBundle:FraisForfait:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a FraisForfait entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionFraisBundle:FraisForfait')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FraisForfait entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionFraisBundle:FraisForfait:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing FraisForfait entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionFraisBundle:FraisForfait')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FraisForfait entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionFraisBundle:FraisForfait:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a FraisForfait entity.
    *
    * @param FraisForfait $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(FraisForfait $entity)
    {
        $form = $this->createForm(new FraisForfaitType(), $entity, array(
            'action' => $this->generateUrl('fraisforfait_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing FraisForfait entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionFraisBundle:FraisForfait')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FraisForfait entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('fraisforfait_edit', array('id' => $id)));
        }

        return $this->render('GestionFraisBundle:FraisForfait:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a FraisForfait entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionFraisBundle:FraisForfait')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find FraisForfait entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('fraisforfait'));
    }

    /**
     * Creates a form to delete a FraisForfait entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fraisforfait_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
