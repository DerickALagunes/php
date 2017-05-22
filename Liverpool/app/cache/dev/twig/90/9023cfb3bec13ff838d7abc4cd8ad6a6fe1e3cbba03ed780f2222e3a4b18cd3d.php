<?php

/* categoria/edit.html.twig */
class __TwigTemplate_2f6d59e9d01f8d23e9bf5778a99279d8548fb84203ad0cfef76fa593c3f109e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "categoria/edit.html.twig", 1);
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
        $__internal_735f9b727d585fd7a1d41b949a8bb077eef5f21c3882b02704cf5309a386e6d8 = $this->env->getExtension("native_profiler");
        $__internal_735f9b727d585fd7a1d41b949a8bb077eef5f21c3882b02704cf5309a386e6d8->enter($__internal_735f9b727d585fd7a1d41b949a8bb077eef5f21c3882b02704cf5309a386e6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categoria/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_735f9b727d585fd7a1d41b949a8bb077eef5f21c3882b02704cf5309a386e6d8->leave($__internal_735f9b727d585fd7a1d41b949a8bb077eef5f21c3882b02704cf5309a386e6d8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d32e3e1b430fe1b892c19076920a649fed40bf2acba4f70d6e3881fb14b3b16 = $this->env->getExtension("native_profiler");
        $__internal_1d32e3e1b430fe1b892c19076920a649fed40bf2acba4f70d6e3881fb14b3b16->enter($__internal_1d32e3e1b430fe1b892c19076920a649fed40bf2acba4f70d6e3881fb14b3b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Categoria edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("categoria_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_1d32e3e1b430fe1b892c19076920a649fed40bf2acba4f70d6e3881fb14b3b16->leave($__internal_1d32e3e1b430fe1b892c19076920a649fed40bf2acba4f70d6e3881fb14b3b16_prof);

    }

    public function getTemplateName()
    {
        return "categoria/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Categoria edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('categoria_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
