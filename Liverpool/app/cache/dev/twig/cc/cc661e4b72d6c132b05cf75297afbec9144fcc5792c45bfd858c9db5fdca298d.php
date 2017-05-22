<?php

/* LiverpooltiendaBundle:Default:index.html.twig */
class __TwigTemplate_43d89af7293bae403abb069b53dd0100c08f16e6106f81733a92c807e75da036 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be8bcc44c18fab13eead5e15d4d04b76b84d51a3a7a95a49d37d0dbf819dc5d2 = $this->env->getExtension("native_profiler");
        $__internal_be8bcc44c18fab13eead5e15d4d04b76b84d51a3a7a95a49d37d0dbf819dc5d2->enter($__internal_be8bcc44c18fab13eead5e15d4d04b76b84d51a3a7a95a49d37d0dbf819dc5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LiverpooltiendaBundle:Default:index.html.twig"));

        // line 1
        echo "<h1>Liverpool</h1>

<ul>
    <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("viewUser");
        echo "\">Usuarios</a></li>
    <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("departamento_index");
        echo "\">Departamentos</a></li>
    <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("categoria_index");
        echo "\">Categorias</a></li>
    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("empleado_index");
        echo "\">Productos</a></li>
    <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("empleado_index");
        echo "\">Empleados</a></li>
</ul>";
        
        $__internal_be8bcc44c18fab13eead5e15d4d04b76b84d51a3a7a95a49d37d0dbf819dc5d2->leave($__internal_be8bcc44c18fab13eead5e15d4d04b76b84d51a3a7a95a49d37d0dbf819dc5d2_prof);

    }

    public function getTemplateName()
    {
        return "LiverpooltiendaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* <h1>Liverpool</h1>*/
/* */
/* <ul>*/
/*     <li><a href="{{path('viewUser')}}">Usuarios</a></li>*/
/*     <li><a href="{{path('departamento_index')}}">Departamentos</a></li>*/
/*     <li><a href="{{path('categoria_index')}}">Categorias</a></li>*/
/*     <li><a href="{{path('empleado_index')}}">Productos</a></li>*/
/*     <li><a href="{{path('empleado_index')}}">Empleados</a></li>*/
/* </ul>*/
