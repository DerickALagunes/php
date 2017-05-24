<?php

namespace Liverpool\tiendaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Liverpool\tiendaBundle\Tools\User;

class DefaultController extends Controller
{
    public function indexAction()
    {        
        $tools = new User();
        if ($tools->isLogged($this)) {
            $user = $this->getUser();
            echo $user->getUsuario();                
        }else{
            echo "no hay user";  
        } 
        
        return $this->render('LiverpooltiendaBundle:Default:index.html.twig');
    }
}
