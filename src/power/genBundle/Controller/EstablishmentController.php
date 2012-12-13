<?php

namespace power\genBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use power\genBundle\Entity\Establishment;
use power\genBundle\Form\EstablishmentType;

/**
 * Establishment controller.
 *
 */
class EstablishmentController extends Controller
{
    /**
     * Lists all Establishment entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('powergenBundle:Establishment')->findAll();

        return $this->render('powergenBundle:Establishment:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Establishment entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('powergenBundle:Establishment')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Establishment entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('powergenBundle:Establishment:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Establishment entity.
     *
     */
    public function newAction()
    {
        $entity = new Establishment();
        $form   = $this->createForm(new EstablishmentType(), $entity);

        return $this->render('powergenBundle:Establishment:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Establishment entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Establishment();
        $form = $this->createForm(new EstablishmentType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('establishment_show', array('id' => $entity->getId())));
        }

        return $this->render('powergenBundle:Establishment:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Establishment entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('powergenBundle:Establishment')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Establishment entity.');
        }

        $editForm = $this->createForm(new EstablishmentType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('powergenBundle:Establishment:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Establishment entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('powergenBundle:Establishment')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Establishment entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new EstablishmentType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('establishment_edit', array('id' => $id)));
        }

        return $this->render('powergenBundle:Establishment:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Establishment entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('powergenBundle:Establishment')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Establishment entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('establishment'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
