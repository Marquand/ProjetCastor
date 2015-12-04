<?php

namespace GestionFraisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use GestionFraisBundle\Entity\FicheFrais;
use GestionFraisBundle\Form\FicheFraisType;

/**
 * FicheFrais controller.
 *
 * @Route("/fichefrais")
 */
class FicheFraisController extends Controller
{

    /**
     * Lists all FicheFrais entities.
     *
     * @Route("/", name="fichefrais")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GestionFraisBundle:FicheFrais')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new FicheFrais entity.
     *
     * @Route("/", name="fichefrais_create")
     * @Method("POST")
     * @Template("GestionFraisBundle:FicheFrais:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new FicheFrais();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('fichefrais_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a FicheFrais entity.
     *
     * @param FicheFrais $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(FicheFrais $entity)
    {
        $form = $this->createForm(new FicheFraisType(), $entity, array(
            'action' => $this->generateUrl('fichefrais_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new FicheFrais entity.
     *
     * @Route("/new", name="fichefrais_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new FicheFrais();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a FicheFrais entity.
     *
     * @Route("/{id}", name="fichefrais_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionFraisBundle:FicheFrais')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FicheFrais entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing FicheFrais entity.
     *
     * @Route("/{id}/edit", name="fichefrais_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionFraisBundle:FicheFrais')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FicheFrais entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a FicheFrais entity.
    *
    * @param FicheFrais $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(FicheFrais $entity)
    {
        $form = $this->createForm(new FicheFraisType(), $entity, array(
            'action' => $this->generateUrl('fichefrais_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing FicheFrais entity.
     *
     * @Route("/{id}", name="fichefrais_update")
     * @Method("PUT")
     * @Template("GestionFraisBundle:FicheFrais:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionFraisBundle:FicheFrais')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FicheFrais entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('fichefrais_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a FicheFrais entity.
     *
     * @Route("/{id}", name="fichefrais_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionFraisBundle:FicheFrais')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find FicheFrais entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('fichefrais'));
    }

    /**
     * Creates a form to delete a FicheFrais entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fichefrais_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
