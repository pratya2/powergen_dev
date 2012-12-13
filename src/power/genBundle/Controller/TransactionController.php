<?php

namespace power\genBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use power\genBundle\Entity\Transaction;
use power\genBundle\Form\TransactionType;

/**
 * Transaction controller.
 *
 */
class TransactionController extends Controller
{
    /**
     * Lists all Transaction entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('powergenBundle:Transaction')->findAll();

        return $this->render('powergenBundle:Transaction:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Transaction entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('powergenBundle:Transaction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Transaction entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('powergenBundle:Transaction:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Transaction entity.
     *
     */
    public function newAction()
    {
        $entity = new Transaction();
        $form   = $this->createForm(new TransactionType(), $entity);

        return $this->render('powergenBundle:Transaction:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Transaction entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Transaction();
        $form = $this->createForm(new TransactionType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('transaction_show', array('id' => $entity->getId())));
        }

        return $this->render('powergenBundle:Transaction:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Transaction entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('powergenBundle:Transaction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Transaction entity.');
        }

        $editForm = $this->createForm(new TransactionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('powergenBundle:Transaction:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Transaction entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('powergenBundle:Transaction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Transaction entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new TransactionType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('transaction_edit', array('id' => $id)));
        }

        return $this->render('powergenBundle:Transaction:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Transaction entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('powergenBundle:Transaction')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Transaction entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('transaction'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
