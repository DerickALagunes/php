<?php

namespace Liverpool\tiendaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Liverpool\tiendaBundle\Entity\LoginModel;

class LoginController extends Controller {

    public function loginAction() {
        
        
        
        
        $res = $this->getDoctrine()->getRepository('LiverpooltiendaBundle:Usuario')->findAll();
        return $this->render('LiverpooltiendaBundle:Default:usuarioView.html.twig', array("result" => $res));
    }
    
    public function terminarSesion($id){       
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