<?php

/* departamento/new.html.twig */
class __TwigTemplate_0e2695886e19c6c2f329369f7e8f7c490b05859de3d4f00d71aeec879d1adb9d extends Twig_Template
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
        $__internal_19021b3aab1850e408cfa2b40b1bf5bd4af025aded949876710279e09dac98f3 = $this->env->getExtension("native_profiler");
        $__internal_19021b3aab1850e408cfa2b40b1bf5bd4af025aded949876710279e09dac98f3->enter($__internal_19021b3aab1850e408cfa2b40b1bf5bd4af025aded949876710279e09dac98f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "departamento/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19021b3aab1850e408cfa2b40b1bf5bd4af025aded949876710279e09dac98f3->leave($__internal_19021b3aab1850e408cfa2b40b1bf5bd4af025aded949876710279e09dac98f3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f094575f8da1731304c28b647179f7e757ab45f768b6132751e09a9c0753845 = $this->env->getExtension("native_profiler");
        $__internal_4f094575f8da1731304c28b647179f7e757ab45f768b6132751e09a9c0753845->enter($__internal_4f094575f8da1731304c28b647179f7e757ab45f768b6132751e09a9c0753845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4f094575f8da1731304c28b647179f7e757ab45f768b6132751e09a9c0753845->leave($__internal_4f094575f8da1731304c28b647179f7e757ab45f768b6132751e09a9c0753845_prof);

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
