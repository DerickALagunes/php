<?php

/* categoria/new.html.twig */
class __TwigTemplate_3daf313b85aec6595462edfe1a80421f0c018f487f824acac099138542478bba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "categoria/new.html.twig", 1);
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
        $__internal_b0c7eef61edd2654eca11688bfaa54465b78aa8a4e84680fcee001dba24ce450 = $this->env->getExtension("native_profiler");
        $__internal_b0c7eef61edd2654eca11688bfaa54465b78aa8a4e84680fcee001dba24ce450->enter($__internal_b0c7eef61edd2654eca11688bfaa54465b78aa8a4e84680fcee001dba24ce450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categoria/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0c7eef61edd2654eca11688bfaa54465b78aa8a4e84680fcee001dba24ce450->leave($__internal_b0c7eef61edd2654eca11688bfaa54465b78aa8a4e84680fcee001dba24ce450_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fee3f5e714991f5fb270359cbfa0b0367a52ba17800f8b20c713d0291defab6 = $this->env->getExtension("native_profiler");
        $__internal_2fee3f5e714991f5fb270359cbfa0b0367a52ba17800f8b20c713d0291defab6->enter($__internal_2fee3f5e714991f5fb270359cbfa0b0367a52ba17800f8b20c713d0291defab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Categoria creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("categoria_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_2fee3f5e714991f5fb270359cbfa0b0367a52ba17800f8b20c713d0291defab6->leave($__internal_2fee3f5e714991f5fb270359cbfa0b0367a52ba17800f8b20c713d0291defab6_prof);

    }

    public function getTemplateName()
    {
        return "categoria/new.html.twig";
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
/*     <h1>Categoria creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('categoria_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
