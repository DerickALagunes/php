<?php

/* LiverpooltiendaBundle:Default:index.html.twig */
class __TwigTemplate_e15f13b58ec1c066b1ec1da02c39200c737cfa9642c26dfcfcf9775abfe28d2a extends Twig_Template
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
        $__internal_550d5708e5cae57d42cb729a82c13bb688979cc558883279e0052e576f60a327 = $this->env->getExtension("native_profiler");
        $__internal_550d5708e5cae57d42cb729a82c13bb688979cc558883279e0052e576f60a327->enter($__internal_550d5708e5cae57d42cb729a82c13bb688979cc558883279e0052e576f60a327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LiverpooltiendaBundle:Default:index.html.twig"));

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
</ul>
<br />
<br />
<hr />
<br />
<br />
<ul>
    <li><a href=\"#\">Registrate</a></li>
</ul>";
        
        $__internal_550d5708e5cae57d42cb729a82c13bb688979cc558883279e0052e576f60a327->leave($__internal_550d5708e5cae57d42cb729a82c13bb688979cc558883279e0052e576f60a327_prof);

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
/* <br />*/
/* <br />*/
/* <hr />*/
/* <br />*/
/* <br />*/
/* <ul>*/
/*     <li><a href="#">Registrate</a></li>*/
/* </ul>*/
