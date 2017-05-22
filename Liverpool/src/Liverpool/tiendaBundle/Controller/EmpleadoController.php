<?php

namespace Liverpool\tiendaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Liverpool\tiendaBundle\Entity\Empleado;
use Liverpool\tiendaBundle\Form\EmpleadoType;

/**
 * Empleado controller.
 *
 */
class EmpleadoController extends Controller {

    /**
     * Lists all Empleado entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $empleados = $em->getRepository('LiverpooltiendaBundle:Empleado')->findAll();

        return $this->render('empleado/index.html.twig', array(
                    'empleados' => $empleados,
        ));
    }

    /**
     * Creates a new Empleado entity.
     *
     */
    public function newAction(Request $request) {
        $empleado = new Empleado();

        $form = $this->createForm(new EmpleadoType());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $data = $request->request->get('empleado');

            $persona = $em->getRepository('LiverpooltiendaBundle:Tipouser')->find($data['idpersona']);
            $departamento = $em->getRepository('LiverpooltiendaBundle:Departamento')->find($data['iddepartamento']);
            
            $empleado->setIdpersona($persona->getIdpersona());
            $empleado->setIddepartamento($departamento);

            $em->persist($empleado);
            $em->flush();

            return $this->redirectToRoute('empleado_show', array('id' => $empleado->getIdempleado()));
        }

        return $this->render('empleado/new.html.twig', array(
                    'empleado' => $empleado,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Empleado entity.
     *
     */
    public function showAction(Empleado $empleado) {
        $deleteForm = $this->createDeleteForm($empleado);

        return $this->render('empleado/show.html.twig', array(
                    'empleado' => $empleado,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Empleado entity.
     *
     */
    public function editAction(Request $request, Empleado $empleado) {
        $deleteForm = $this->createDeleteForm($empleado);
        $editForm = $this->createForm(new EmpleadoType());
        
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $data = $request->request->get('empleado');

            $persona = $em->getRepository('LiverpooltiendaBundle:Tipouser')->find($data['idpersona']);
            $departamento = $em->getRepository('LiverpooltiendaBundle:Departamento')->find($data['iddepartamento']);
            
            $empleado->setIdpersona($persona->getIdpersona());
            $empleado->setIddepartamento($departamento);
                     
            $em->persist($empleado);
            $em->flush();

            return $this->redirectToRoute('empleado_index', array('id' => $empleado->getIdempleado()));
        }

        return $this->render('empleado/edit.html.twig', array(
                    'empleado' => $empleado,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Empleado entity.
     *
     */
    public function deleteAction(Request $request, Empleado $empleado) {
        $form = $this->createDeleteForm($empleado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($empleado);
            $em->flush();
        }

        return $this->redirectToRoute('empleado_index');
    }

    /**
     * Creates a form to delete a Empleado entity.
     *
     * @param Empleado $empleado The Empleado entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Empleado $empleado) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('empleado_delete', array('id' => $empleado->getIdempleado())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }
}
