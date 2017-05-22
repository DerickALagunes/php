<?php

/* empleado/show.html.twig */
class __TwigTemplate_8bcebd6dfcbd61b76a0a26b9b6f849d32d66eebd32e11b4d8767bcb2622e56a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "empleado/show.html.twig", 1);
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
        $__internal_3ee749098fe1a619bf227f7aab75b16e9d2ef5f44e00f3abbefd9bed971722eb = $this->env->getExtension("native_profiler");
        $__internal_3ee749098fe1a619bf227f7aab75b16e9d2ef5f44e00f3abbefd9bed971722eb->enter($__internal_3ee749098fe1a619bf227f7aab75b16e9d2ef5f44e00f3abbefd9bed971722eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "empleado/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ee749098fe1a619bf227f7aab75b16e9d2ef5f44e00f3abbefd9bed971722eb->leave($__internal_3ee749098fe1a619bf227f7aab75b16e9d2ef5f44e00f3abbefd9bed971722eb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c447746e0696dfb39abd0e5a64a3e67c80f3f2a107e3432acf63e9fa32c4d45a = $this->env->getExtension("native_profiler");
        $__internal_c447746e0696dfb39abd0e5a64a3e67c80f3f2a107e3432acf63e9fa32c4d45a->enter($__internal_c447746e0696dfb39abd0e5a64a3e67c80f3f2a107e3432acf63e9fa32c4d45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Empleado</h1>

    <table>
        <tbody>
            <tr>
                <th>Idempleado</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empleado"]) ? $context["empleado"] : $this->getContext($context, "empleado")), "idempleado", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("empleado_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("empleado_edit", array("id" => $this->getAttribute((isset($context["empleado"]) ? $context["empleado"] : $this->getContext($context, "empleado")), "idempleado", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_c447746e0696dfb39abd0e5a64a3e67c80f3f2a107e3432acf63e9fa32c4d45a->leave($__internal_c447746e0696dfb39abd0e5a64a3e67c80f3f2a107e3432acf63e9fa32c4d45a_prof);

    }

    public function getTemplateName()
    {
        return "empleado/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  70 => 23,  64 => 20,  58 => 17,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Empleado</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idempleado</th>*/
/*                 <td>{{ empleado.idempleado }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('empleado_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('empleado_edit', { 'id': empleado.idempleado }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
