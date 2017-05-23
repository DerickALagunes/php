<?php

/* empleado/index.html.twig */
class __TwigTemplate_77879358ffacd376759a229e526bc10e3fd6a65911e45b1e94cb17e06a9dc847 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "empleado/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c1c0fc5d3772046b8b7fa5eeb37b4d8b40bc56b1c2ea082f11b90c84e906ee4 = $this->env->getExtension("native_profiler");
        $__internal_5c1c0fc5d3772046b8b7fa5eeb37b4d8b40bc56b1c2ea082f11b90c84e906ee4->enter($__internal_5c1c0fc5d3772046b8b7fa5eeb37b4d8b40bc56b1c2ea082f11b90c84e906ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "empleado/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c1c0fc5d3772046b8b7fa5eeb37b4d8b40bc56b1c2ea082f11b90c84e906ee4->leave($__internal_5c1c0fc5d3772046b8b7fa5eeb37b4d8b40bc56b1c2ea082f11b90c84e906ee4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc630b8015aaaa7dbf5d47690570913233ce3b586405503e934f3eb929ba6287 = $this->env->getExtension("native_profiler");
        $__internal_bc630b8015aaaa7dbf5d47690570913233ce3b586405503e934f3eb929ba6287->enter($__internal_bc630b8015aaaa7dbf5d47690570913233ce3b586405503e934f3eb929ba6287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Empleado list</h1>

    <table>
        <thead>
            <tr>
                <th>Empleado</th>
                <th>Departamento</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empleados"]) ? $context["empleados"] : $this->getContext($context, "empleados")));
        foreach ($context['_seq'] as $context["_key"] => $context["empleado"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["empleado"], "idpersona", array()), "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["empleado"], "iddepartamento", array()), "nombre", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("empleado_show", array("id" => $this->getAttribute($context["empleado"], "idempleado", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("empleado_edit", array("id" => $this->getAttribute($context["empleado"], "idempleado", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empleado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("empleado_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
                        <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("liverpooltienda_homepage");
        echo "\">Home</a>
";
        
        $__internal_bc630b8015aaaa7dbf5d47690570913233ce3b586405503e934f3eb929ba6287->leave($__internal_bc630b8015aaaa7dbf5d47690570913233ce3b586405503e934f3eb929ba6287_prof);

    }

    public function getTemplateName()
    {
        return "empleado/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 39,  96 => 36,  89 => 31,  77 => 25,  71 => 22,  64 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Empleado list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Empleado</th>*/
/*                 <th>Departamento</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for empleado in empleados %}*/
/*             <tr>*/
/*                 <td>{{ empleado.idpersona.nombre }}</td>*/
/*                 <td>{{ empleado.iddepartamento.nombre }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('empleado_show', { 'id': empleado.idempleado }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('empleado_edit', { 'id': empleado.idempleado }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('empleado_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/*                         <a href="{{path('liverpooltienda_homepage')}}">Home</a>*/
/* {% endblock %}*/
/* */
