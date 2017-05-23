<?php

/* departamento/show.html.twig */
class __TwigTemplate_bda0fab5299b5e5b0855aca7e56b219b29e3cbaf28313131da26eab227ed4cb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "departamento/show.html.twig", 1);
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
        $__internal_ac5515c416331b8334a60bdf63b3adebce0f206ac21b15d9ec20693885932a6f = $this->env->getExtension("native_profiler");
        $__internal_ac5515c416331b8334a60bdf63b3adebce0f206ac21b15d9ec20693885932a6f->enter($__internal_ac5515c416331b8334a60bdf63b3adebce0f206ac21b15d9ec20693885932a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "departamento/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac5515c416331b8334a60bdf63b3adebce0f206ac21b15d9ec20693885932a6f->leave($__internal_ac5515c416331b8334a60bdf63b3adebce0f206ac21b15d9ec20693885932a6f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c3f6a8701751afb1fff7f9f59519ec0757a769d6c2b1950c12ce68ddcc802d3 = $this->env->getExtension("native_profiler");
        $__internal_3c3f6a8701751afb1fff7f9f59519ec0757a769d6c2b1950c12ce68ddcc802d3->enter($__internal_3c3f6a8701751afb1fff7f9f59519ec0757a769d6c2b1950c12ce68ddcc802d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Departamento</h1>

    <table>
        <tbody>
            <tr>
                <th>Iddepartamento</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["departamento"]) ? $context["departamento"] : $this->getContext($context, "departamento")), "iddepartamento", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["departamento"]) ? $context["departamento"] : $this->getContext($context, "departamento")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("departamento_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("departamento_edit", array("id" => $this->getAttribute((isset($context["departamento"]) ? $context["departamento"] : $this->getContext($context, "departamento")), "iddepartamento", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_3c3f6a8701751afb1fff7f9f59519ec0757a769d6c2b1950c12ce68ddcc802d3->leave($__internal_3c3f6a8701751afb1fff7f9f59519ec0757a769d6c2b1950c12ce68ddcc802d3_prof);

    }

    public function getTemplateName()
    {
        return "departamento/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  77 => 27,  71 => 24,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Departamento</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Iddepartamento</th>*/
/*                 <td>{{ departamento.iddepartamento }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ departamento.nombre }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('departamento_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('departamento_edit', { 'id': departamento.iddepartamento }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
