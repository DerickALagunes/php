<?php

namespace Liverpool\tiendaBundle\Tools;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class User extends Controller
{
    public function isLogged($context)
    {        
        if (!$context->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            return false;
        }else{
            return true;
        }
    }
}