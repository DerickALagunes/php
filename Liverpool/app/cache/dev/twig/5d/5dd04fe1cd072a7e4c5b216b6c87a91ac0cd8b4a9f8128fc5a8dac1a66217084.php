<?php

/* empleado/new.html.twig */
class __TwigTemplate_15bcd0ee9bd5be80783d38748fa5cb5f36dbcfae3e970d7d2da6c11a5160dde7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "empleado/new.html.twig", 1);
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
        $__internal_669669ff08f5a2bd3780eb61d0e49ed879b42c48a3c47248999d3a55b0cab9a5 = $this->env->getExtension("native_profiler");
        $__internal_669669ff08f5a2bd3780eb61d0e49ed879b42c48a3c47248999d3a55b0cab9a5->enter($__internal_669669ff08f5a2bd3780eb61d0e49ed879b42c48a3c47248999d3a55b0cab9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "empleado/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_669669ff08f5a2bd3780eb61d0e49ed879b42c48a3c47248999d3a55b0cab9a5->leave($__internal_669669ff08f5a2bd3780eb61d0e49ed879b42c48a3c47248999d3a55b0cab9a5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9503cc9ae631344acc1288b829d5aab859ae64f20c8f6f968ee4992ca0876b1a = $this->env->getExtension("native_profiler");
        $__internal_9503cc9ae631344acc1288b829d5aab859ae64f20c8f6f968ee4992ca0876b1a->enter($__internal_9503cc9ae631344acc1288b829d5aab859ae64f20c8f6f968ee4992ca0876b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Empleado creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("empleado_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_9503cc9ae631344acc1288b829d5aab859ae64f20c8f6f968ee4992ca0876b1a->leave($__internal_9503cc9ae631344acc1288b829d5aab859ae64f20c8f6f968ee4992ca0876b1a_prof);

    }

    public function getTemplateName()
    {
        return "empleado/new.html.twig";
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
/*     <h1>Empleado creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('empleado_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
