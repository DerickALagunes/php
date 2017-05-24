<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/empleado')) {
            // empleado_index
            if (rtrim($pathinfo, '/') === '/empleado') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_empleado_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'empleado_index');
                }

                return array (  '_controller' => 'Liverpool\\tiendaBundle\\Controller\\EmpleadoController::indexAction',  '_route' => 'empleado_index',);
            }
            not_empleado_index:

            // empleado_show
            if (preg_match('#^/empleado/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_empleado_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empleado_show')), array (  '_controller' => 'Liverpool\\tiendaBundle\\Controller\\EmpleadoController::showAction',));
            }
            not_empleado_show:

            // empleado_new
            if ($pathinfo === '/empleado/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_empleado_new;
                }

                return array (  '_controller' => 'Liverpool\\tiendaBundle\\Controller\\EmpleadoController::newAction',  '_route' => 'empleado_new',);
            }
            not_empleado_new:

            // empleado_edit
            if (preg_match('#^/empleado/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_empleado_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empleado_edit')), array (  '_controller' => 'Liverpool\\tiendaBundle\\Controller\\EmpleadoController::editAction',));
            }
            not_empleado_edit:

            // empleado_delete
            if (preg_match('#^/empleado/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_empleado_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empleado_delete')), array (  '_controller' => 'Liverpool\\tiendaBundle\\Controller\\EmpleadoController::deleteAction',));
            }
            not_empleado_delete:

        }

        if (0 === strpos($pathinfo, '/departamento')) {
            // departamento_index
            if (rtrim($pathinfo, '/') === '/departamento') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_departamento_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'departamento_index');
                }

                return array (  '_controller' => 'Liverpool\\tiendaBundle\\Controller\\DepartamentoController::indexAction',  '_route' => 'departamento_index',);
            }
            not_departamento_index:

            // departamento_show
            if (preg_match('#^/departamento/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_departamento_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'departamento_show')), array (  '_controller' => 'Liverpool\\tiendaBundle\\Controller\\DepartamentoController::showAction',));
            }
            not_departamento_show:

            // departamento_new
            if ($pathinfo === '/departamento/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_departamento_new;
                }

                return array (  '_controller' => 'Liverpool\\tiendaBundle\\Controller\\DepartamentoController::newAction',  '_route' => 'departamento_new',);
            }
            not_departamento_new:

            // departamento_edit
            if (preg_match('#^/departamento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_departamento_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'departamento_edit')), array (  '_controller' => 'Liverpool\\tiendaBundle\\Controller\\DepartamentoController::editAction',));
            }
            not_departamento_edit:

            // departamento_delete
            if (preg_match('#^/departamento/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_departamento_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'departamento_delete')), array (  '_controller' => 'Liverpool\\tiendaBundle\\Controller\\DepartamentoController::deleteAction',));
            }
            not_departamento_delete:

        }

        if (0 === strpos($pathinfo, '/categoria')) {
            // categoria_index
            if (rtrim($pathinfo, '/') === '/categoria') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_categoria_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'categoria_index');
                }

                return array (  '_controller' => 'Liverpool\\tiendaBundle\\Controller\\CategoriaController::indexAction',  '_route' => 'categoria_index',);
            }
            not_categoria_index:

            // categoria_show
            if (preg_match('#^/categoria/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_categoria_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_show')), array (  '_controller' => 'Liverpool\\tiendaBundle\\Controller\\CategoriaController::showAction',));
            }
            not_categoria_show:

            // categoria_new
            if ($pathinfo === '/categoria/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_categoria_new;
                }

                return array (  '_controller' => 'Liverpool\\tiendaBundle\\Controller\\CategoriaController::newAction',  '_route' => 'categoria_new',);
            }
            not_categoria_new:

            // categoria_edit
            if (preg_match('#^/categoria/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_categoria_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_edit')), array (  '_controller' => 'Liverpool\\tiendaBundle\\Controller\\CategoriaController::editAction',));
            }
            not_categoria_edit:

            // categoria_delete
            if (preg_match('#^/categoria/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_categoria_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_delete')), array (  '_controller' => 'Liverpool\\tiendaBundle\\Controller\\CategoriaController::deleteAction',));
            }
            not_categoria_delete:

        }

        // liverpooltienda_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'liverpooltienda_homepage');
            }

            return array (  '_controller' => 'Liverpool\\tiendaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'liverpooltienda_homepage',);
        }

        // viewUser
        if ($pathinfo === '/users') {
            return array (  '_controller' => 'Liverpool\\tiendaBundle\\Controller\\UsuarioController::usuarioAction',  '_route' => 'viewUser',);
        }

        // newUser
        if (0 === strpos($pathinfo, '/createUser') && preg_match('#^/createUser/(?P<regAs>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'newUser')), array (  '_controller' => 'Liverpool\\tiendaBundle\\Controller\\UsuarioController::nuevoUsuarioAction',));
        }

        // editUser
        if (0 === strpos($pathinfo, '/editUser') && preg_match('#^/editUser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editUser')), array (  '_controller' => 'Liverpool\\tiendaBundle\\Controller\\UsuarioController::modificarUsuarioAction',));
        }

        // removeUser
        if (0 === strpos($pathinfo, '/removeUser') && preg_match('#^/removeUser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeUser')), array (  '_controller' => 'Liverpool\\tiendaBundle\\Controller\\UsuarioController::eliminarUsuarioAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Liverpool\\tiendaBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
