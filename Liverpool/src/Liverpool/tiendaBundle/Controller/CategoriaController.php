<?php

namespace Liverpool\tiendaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Liverpool\tiendaBundle\Entity\Categoria;
use Liverpool\tiendaBundle\Form\CategoriaType;

/**
 * Categoria controller.
 *
 */
class CategoriaController extends Controller {

    /**
     * Lists all Categoria entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $categorias = $em->getRepository('LiverpooltiendaBundle:Categoria')->findAll();

        return $this->render('categoria/index.html.twig', array(
                    'categorias' => $categorias,
        ));
    }

    /**
     * Creates a new Categoria entity.
     *
     */
    public function newAction(Request $request) {
        $form = $this->createForm(new CategoriaType());
        $form->handleRequest($request);
        $categoria = new Categoria();

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $data = $request->request->get('categoria');

            $categoria->setNombre($data['nombre']);

            $departamentoRepo = $em->getRepository('LiverpooltiendaBundle:Departamento');
            $departamento = $departamentoRepo->find($data['iddepartamento']);

            $categoria->setIddepartamento($departamento);

            $em->persist($categoria);
            $em->flush();

            return $this->redirect($this->generateUrl('categoria_show', array('id' => $categoria->getIdcategoria() )));
        }

        return $this->render('categoria/new.html.twig', array('form' => $form->createView()));
    }

    /**
     * Finds and displays a Categoria entity.
     *
     */
    public function showAction(Categoria $categorium) {
        $deleteForm = $this->createDeleteForm($categorium);

        return $this->render('categoria/show.html.twig', array(
                    'categorium' => $categorium,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Categoria entity.
     *
     */
    public function editAction(Request $request, Categoria $categorium) {
        $deleteForm = $this->createDeleteForm($categorium);
        $editForm = $this->createForm('Liverpool\tiendaBundle\Form\CategoriaType', $categorium);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categorium);
            $em->flush();

            return $this->redirectToRoute('categoria_edit', array('id' => $categorium->getIdcategoria()));
        }

        return $this->render('categoria/edit.html.twig', array(
                    'categorium' => $categorium,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Categoria entity.
     *
     */
    public function deleteAction(Request $request, Categoria $categorium) {
        $form = $this->createDeleteForm($categorium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($categorium);
            $em->flush();
        }

        return $this->redirectToRoute('categoria_index');
    }

    /**
     * Creates a form to delete a Categoria entity.
     *
     * @param Categoria $categorium The Categoria entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Categoria $categorium) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('categoria_delete', array('id' => $categorium->getIdcategoria())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
