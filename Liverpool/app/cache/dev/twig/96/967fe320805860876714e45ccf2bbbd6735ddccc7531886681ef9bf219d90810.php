<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f3f1a980939fb5299769e73d6a6878b2579208d3a86afb86d99959ed426e9bf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29949009a952eb834e96c066600efa768a5c41ddc8ed8066b81ccd43eb11c2a2 = $this->env->getExtension("native_profiler");
        $__internal_29949009a952eb834e96c066600efa768a5c41ddc8ed8066b81ccd43eb11c2a2->enter($__internal_29949009a952eb834e96c066600efa768a5c41ddc8ed8066b81ccd43eb11c2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29949009a952eb834e96c066600efa768a5c41ddc8ed8066b81ccd43eb11c2a2->leave($__internal_29949009a952eb834e96c066600efa768a5c41ddc8ed8066b81ccd43eb11c2a2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_64a8dc4ccdd6ec6aa5a6542cb50328df06b4c59dc4f5dc5330011efe917bd837 = $this->env->getExtension("native_profiler");
        $__internal_64a8dc4ccdd6ec6aa5a6542cb50328df06b4c59dc4f5dc5330011efe917bd837->enter($__internal_64a8dc4ccdd6ec6aa5a6542cb50328df06b4c59dc4f5dc5330011efe917bd837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_64a8dc4ccdd6ec6aa5a6542cb50328df06b4c59dc4f5dc5330011efe917bd837->leave($__internal_64a8dc4ccdd6ec6aa5a6542cb50328df06b4c59dc4f5dc5330011efe917bd837_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_706b42a625f1af24c65b1a9761b8c08db5eb7afa6515e57b6eb51c6ad001af3a = $this->env->getExtension("native_profiler");
        $__internal_706b42a625f1af24c65b1a9761b8c08db5eb7afa6515e57b6eb51c6ad001af3a->enter($__internal_706b42a625f1af24c65b1a9761b8c08db5eb7afa6515e57b6eb51c6ad001af3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_706b42a625f1af24c65b1a9761b8c08db5eb7afa6515e57b6eb51c6ad001af3a->leave($__internal_706b42a625f1af24c65b1a9761b8c08db5eb7afa6515e57b6eb51c6ad001af3a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_08a7f18e16f0090cd98417886e97a1a4e65f7407b9b4e13ae5ecb42572157fb7 = $this->env->getExtension("native_profiler");
        $__internal_08a7f18e16f0090cd98417886e97a1a4e65f7407b9b4e13ae5ecb42572157fb7->enter($__internal_08a7f18e16f0090cd98417886e97a1a4e65f7407b9b4e13ae5ecb42572157fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_08a7f18e16f0090cd98417886e97a1a4e65f7407b9b4e13ae5ecb42572157fb7->leave($__internal_08a7f18e16f0090cd98417886e97a1a4e65f7407b9b4e13ae5ecb42572157fb7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
