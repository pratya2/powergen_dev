<?php

namespace power\genBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use power\genBundle\Entity\Owner;
use power\genBundle\Form\OwnerType;

/**
 * Owner controller.
 *
 */
class OwnerController extends Controller
{
    /**
     * Lists all Owner entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('powergenBundle:Owner')->findAll();

        return $this->render('powergenBundle:Owner:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Owner entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('powergenBundle:Owner')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Owner entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('powergenBundle:Owner:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Owner entity.
     *
     */
    public function newAction()
    {
        $entity = new Owner();
        $form   = $this->createForm(new OwnerType(), $entity);

        return $this->render('powergenBundle:Owner:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Owner entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Owner();
        $form = $this->createForm(new OwnerType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('owner_show', array('id' => $entity->getId())));
        }

        return $this->render('powergenBundle:Owner:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Owner entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('powergenBundle:Owner')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Owner entity.');
        }

        $editForm = $this->createForm(new OwnerType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('powergenBundle:Owner:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Owner entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('powergenBundle:Owner')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Owner entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new OwnerType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('owner_edit', array('id' => $id)));
        }

        return $this->render('powergenBundle:Owner:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Owner entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('powergenBundle:Owner')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Owner entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('owner'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
