<?php

/* categoria/show.html.twig */
class __TwigTemplate_6db1907e578cc13eac923b6ab4ab2177fffb3de14299e1b66e7b2a906d116bee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "categoria/show.html.twig", 1);
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
        $__internal_93ce514caea47698d998e3cd1fc59383ca83c9839f5150735ecc1ad58becfe36 = $this->env->getExtension("native_profiler");
        $__internal_93ce514caea47698d998e3cd1fc59383ca83c9839f5150735ecc1ad58becfe36->enter($__internal_93ce514caea47698d998e3cd1fc59383ca83c9839f5150735ecc1ad58becfe36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categoria/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93ce514caea47698d998e3cd1fc59383ca83c9839f5150735ecc1ad58becfe36->leave($__internal_93ce514caea47698d998e3cd1fc59383ca83c9839f5150735ecc1ad58becfe36_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7dd6edb99b738e522aa73a58997add2b636288854f2b9cfbba86a9884f52bb1c = $this->env->getExtension("native_profiler");
        $__internal_7dd6edb99b738e522aa73a58997add2b636288854f2b9cfbba86a9884f52bb1c->enter($__internal_7dd6edb99b738e522aa73a58997add2b636288854f2b9cfbba86a9884f52bb1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Categoria</h1>

    <table>
        <tbody>
            <tr>
                <th>Idcategoria</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorium"]) ? $context["categorium"] : $this->getContext($context, "categorium")), "idcategoria", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorium"]) ? $context["categorium"] : $this->getContext($context, "categorium")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("categoria_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria_edit", array("id" => $this->getAttribute((isset($context["categorium"]) ? $context["categorium"] : $this->getContext($context, "categorium")), "idcategoria", array()))), "html", null, true);
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
        
        $__internal_7dd6edb99b738e522aa73a58997add2b636288854f2b9cfbba86a9884f52bb1c->leave($__internal_7dd6edb99b738e522aa73a58997add2b636288854f2b9cfbba86a9884f52bb1c_prof);

    }

    public function getTemplateName()
    {
        return "categoria/show.html.twig";
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
/*     <h1>Categoria</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idcategoria</th>*/
/*                 <td>{{ categorium.idcategoria }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ categorium.nombre }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('categoria_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('categoria_edit', { 'id': categorium.idcategoria }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
