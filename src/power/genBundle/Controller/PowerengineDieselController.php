<?php

namespace power\genBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use power\genBundle\Entity\PowerengineDiesel;
use power\genBundle\Form\PowerengineDieselType;

/**
 * PowerengineDiesel controller.
 *
 */
class PowerengineDieselController extends Controller
{
    /**
     * Lists all PowerengineDiesel entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('powergenBundle:PowerengineDiesel')->findAll();

        return $this->render('powergenBundle:PowerengineDiesel:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a PowerengineDiesel entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('powergenBundle:PowerengineDiesel')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PowerengineDiesel entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('powergenBundle:PowerengineDiesel:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new PowerengineDiesel entity.
     *
     */
    public function newAction()
    {
        $entity = new PowerengineDiesel();
        $form   = $this->createForm(new PowerengineDieselType(), $entity);

        return $this->render('powergenBundle:PowerengineDiesel:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new PowerengineDiesel entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new PowerengineDiesel();
        $form = $this->createForm(new PowerengineDieselType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('powerenginediesel_show', array('id' => $entity->getId())));
        }

        return $this->render('powergenBundle:PowerengineDiesel:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing PowerengineDiesel entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('powergenBundle:PowerengineDiesel')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PowerengineDiesel entity.');
        }

        $editForm = $this->createForm(new PowerengineDieselType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('powergenBundle:PowerengineDiesel:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing PowerengineDiesel entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('powergenBundle:PowerengineDiesel')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PowerengineDiesel entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new PowerengineDieselType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('powerenginediesel_edit', array('id' => $id)));
        }

        return $this->render('powergenBundle:PowerengineDiesel:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a PowerengineDiesel entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('powergenBundle:PowerengineDiesel')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find PowerengineDiesel entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('powerenginediesel'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
