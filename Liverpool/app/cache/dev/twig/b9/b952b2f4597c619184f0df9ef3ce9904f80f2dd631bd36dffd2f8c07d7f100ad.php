<?php

/* departamento/new.html.twig */
class __TwigTemplate_73ff4a39558600ab5bd2a41b2d01063ab4952bf076892c370723182ab941cd3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "departamento/new.html.twig", 1);
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
        $__internal_8dcf26c2510d655083e2747a90633f14906ed7b6a40eb35e6ee04dd45fd347a8 = $this->env->getExtension("native_profiler");
        $__internal_8dcf26c2510d655083e2747a90633f14906ed7b6a40eb35e6ee04dd45fd347a8->enter($__internal_8dcf26c2510d655083e2747a90633f14906ed7b6a40eb35e6ee04dd45fd347a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "departamento/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dcf26c2510d655083e2747a90633f14906ed7b6a40eb35e6ee04dd45fd347a8->leave($__internal_8dcf26c2510d655083e2747a90633f14906ed7b6a40eb35e6ee04dd45fd347a8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_425c26e9bc2001d4e13c52d787028162ac094c6cb3aef38fc4c82f9f24aa3993 = $this->env->getExtension("native_profiler");
        $__internal_425c26e9bc2001d4e13c52d787028162ac094c6cb3aef38fc4c82f9f24aa3993->enter($__internal_425c26e9bc2001d4e13c52d787028162ac094c6cb3aef38fc4c82f9f24aa3993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Departamento creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("departamento_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_425c26e9bc2001d4e13c52d787028162ac094c6cb3aef38fc4c82f9f24aa3993->leave($__internal_425c26e9bc2001d4e13c52d787028162ac094c6cb3aef38fc4c82f9f24aa3993_prof);

    }

    public function getTemplateName()
    {
        return "departamento/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Departamento creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('departamento_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
