<?php

namespace Liverpool\tiendaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Liverpool\tiendaBundle\Tools\User;
use Liverpool\tiendaBundle\Entity\Producto;

class DefaultController extends Controller{
    public function indexAction()
    {        
        $tools = new User();
        if ($tools->isLogged($this)) {
            $user = $this->getUser();
            
            $user->newCarrito();
            $producto1 = new Producto();
            $producto1->setNombre("espada Lazer!");
            $producto2 = new Producto();
            $producto2->setNombre("pistola Lazer!");
            $carrito = $user->getCarrito();
            
//            $prueba = new \Doctrine\Common\Collections\ArrayCollection();
            
            $carrito->add($producto1);
            $carrito->add($producto2);
            
            $user->setCarrito($carrito);
                
            $em = $this->getDoctrine()->getManager();
            $tipoUser = $em->getRepository('LiverpooltiendaBundle:Tipouser')->find($user);      
            echo $tipoUser->getTipo();
            
//            echo $user;                
            echo $user->getCarrito()->get(0)->getNombre();                
            echo $user->getCarrito()->get(1)->getNombre();                
        }else{
            echo "no hay user";  
        } 
        
        return $this->render('LiverpooltiendaBundle:Default:index.html.twig');
    }
}
