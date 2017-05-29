<?php

namespace Liverpool\tiendaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Liverpool\tiendaBundle\Entity\Persona;
use Liverpool\tiendaBundle\Entity\Usuario;
use Liverpool\tiendaBundle\Entity\Tipouser;
use Liverpool\tiendaBundle\Form\UsuarioType;

class UsuarioController extends Controller {

    public function usuarioAction() {
        $res = $this->getDoctrine()->getRepository('LiverpooltiendaBundle:Usuario')->findAll();
        return $this->render('LiverpooltiendaBundle:Default:usuarioView.html.twig', array("result" => $res));
    }

    public function nuevoUsuarioAction($regAs, Request $request) {
        $person = new Persona();
        $user = new Usuario();
        $type = new Tipouser();
        
        $form = $this->createForm(new UsuarioType());
        $form->handleRequest($request);
        
        if ($request->isMethod("POST")) {                     
            $em = $this->getDoctrine()->getManager();
            $data = $request->request->get('usuario');
            
            $person->setNombre($data['nombre']);
            $person->setApellidopaterno($data['apellidopaterno']);
            $person->setApellidomaterno($data['apellidomaterno']);
            $person->setFechanacimiento(date_create(date($data['fechanacimiento'])));
            $person->setDireccion($data['direccion']);
            $person->setEmail($data['email']);
                       
            $em->persist($person);
            $em->flush();
            
            $user->setIdpersona($person);
            $user->setUsuario($data['usuario']);
            $user->setContrasena($data['contrasena']);
            
            $em->persist($user);
            $em->flush();
            
            $type->setIdpersona($person);
            $type->setIdusuario($regAs);
            $type->setTipo($data['tipo']);
            
            $em->persist($type);
            $em->flush();
            
            return $this->redirect($this->generateUrl('viewUser'));
        }
        return $this->render('LiverpooltiendaBundle:Default:usuarioNew.html.twig', array('formTWIG' => $form->createView(), 'var' => 'Crear'));
    }

    
    public function modificarUsuarioAction($id, Request $request){
        $em = $this->getDoctrine()->getManager();
        
        $usuarioRepo = $em->getRepository('LiverpooltiendaBundle:Usuario');
        $user = $usuarioRepo->find($id);
        
        $personaRepo = $em->getRepository('LiverpooltiendaBundle:Persona');
        $person = $personaRepo->find($user->getIdpersona());
        
        $typeRepo = $em->getRepository('LiverpooltiendaBundle:Tipouser');
        $type = $typeRepo->find($user->getIdusuario());
        
        $form = $this->createForm(new UsuarioType());
        $form->handleRequest($request);
        if ($request->isMethod("POST")) {
            
            $em = $this->getDoctrine()->getManager();
            $data = $request->request->get('usuario');
            
            $person->setNombre($data['nombre']);
            $person->setApellidopaterno($data['apellidopaterno']);
            $person->setApellidomaterno($data['apellidomaterno']);
            $person->setFechanacimiento(date_create(date($data['fechanacimiento'])));
            $person->setDireccion($data['direccion']);
            $person->setEmail($data['email']);
                       
            $em->persist($person);
            $em->flush();
            
            $user->setIdpersona($person);
            $user->setUsuario($data['usuario']);
            $user->setContrasena($data['contrasena']);
            
            $em->persist($user);
            $em->flush();
            
            $type->setIdpersona($person);
            $type->setIdusuario($user);
            $type->setTipo($data['tipo']);
            
            $em->persist($type);
            $em->flush();
            
            return $this->redirect($this->generateUrl('viewUser'));
            
        }
        return $this->render('LiverpooltiendaBundle:Default:usuarioUpdate.html.twig', array(
            'formTWIG' => $form->createView(),
            'var' => 'Actualizar',
            'user' => $user,
            'tipo' => $type,
            'persona' => $person));
        
    }

    
    public function eliminarUsuarioAction($id){       
        $em = $this->getDoctrine()->getManager();
        
        $usuarioRepo = $em->getRepository('LiverpooltiendaBundle:Usuario');
        $user = $usuarioRepo->find($id);
        
        $personaRepo = $em->getRepository('LiverpooltiendaBundle:Persona');
        $person = $personaRepo->find($user->getIdpersona());
        
        $typeRepo = $em->getRepository('LiverpooltiendaBundle:Tipouser');
        $type = $typeRepo->find($user->getIdusuario());
               
        $em->remove($type);
        $em->remove($user);
        $em->remove($person);
        
        $em->flush();   
        
        return $this->redirect($this->generateUrl('viewUser'));
    }

}
