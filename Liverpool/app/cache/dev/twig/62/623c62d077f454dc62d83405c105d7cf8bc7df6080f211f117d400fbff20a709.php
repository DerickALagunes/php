<?php

/* departamento/index.html.twig */
class __TwigTemplate_b4862f8e3c744d296daf493433351eece023bcf4d190da2b385fc3bd7bacca7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "departamento/index.html.twig", 1);
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
        $__internal_ee54446c85407cde8ac8cfaf630fdd146dfc2766829cc09b0dc4fb42d19597be = $this->env->getExtension("native_profiler");
        $__internal_ee54446c85407cde8ac8cfaf630fdd146dfc2766829cc09b0dc4fb42d19597be->enter($__internal_ee54446c85407cde8ac8cfaf630fdd146dfc2766829cc09b0dc4fb42d19597be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "departamento/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee54446c85407cde8ac8cfaf630fdd146dfc2766829cc09b0dc4fb42d19597be->leave($__internal_ee54446c85407cde8ac8cfaf630fdd146dfc2766829cc09b0dc4fb42d19597be_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e332821748db695c99884dc3fb2ee258e0ad63a8a6081d220bab19d4b918df6 = $this->env->getExtension("native_profiler");
        $__internal_2e332821748db695c99884dc3fb2ee258e0ad63a8a6081d220bab19d4b918df6->enter($__internal_2e332821748db695c99884dc3fb2ee258e0ad63a8a6081d220bab19d4b918df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Departamento list</h1>

    <table>
        <thead>
            <tr>
                <th>Iddepartamento</th>
                <th>Nombre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["departamentos"]) ? $context["departamentos"] : $this->getContext($context, "departamentos")));
        foreach ($context['_seq'] as $context["_key"] => $context["departamento"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("departamento_show", array("id" => $this->getAttribute($context["departamento"], "iddepartamento", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["departamento"], "iddepartamento", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["departamento"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("departamento_show", array("id" => $this->getAttribute($context["departamento"], "iddepartamento", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("departamento_edit", array("id" => $this->getAttribute($context["departamento"], "iddepartamento", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['departamento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("departamento_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("liverpooltienda_homepage");
        echo "\">Home</a>
";
        
        $__internal_2e332821748db695c99884dc3fb2ee258e0ad63a8a6081d220bab19d4b918df6->leave($__internal_2e332821748db695c99884dc3fb2ee258e0ad63a8a6081d220bab19d4b918df6_prof);

    }

    public function getTemplateName()
    {
        return "departamento/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 39,  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Departamento list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Iddepartamento</th>*/
/*                 <th>Nombre</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for departamento in departamentos %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('departamento_show', { 'id': departamento.iddepartamento }) }}">{{ departamento.iddepartamento }}</a></td>*/
/*                 <td>{{ departamento.nombre }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('departamento_show', { 'id': departamento.iddepartamento }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('departamento_edit', { 'id': departamento.iddepartamento }) }}">edit</a>*/
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
/*             <a href="{{ path('departamento_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/*             <a href="{{path('liverpooltienda_homepage')}}">Home</a>*/
/* {% endblock %}*/
/* */
