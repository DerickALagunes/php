<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_624cd0d146159f83c0f4da548a10e07347a1d464213ca2bd9ff60cef04edba01 extends Twig_Template
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
        $__internal_2434a3f99b5c58bef1aaa2ad22f9b34ba23ad6d27b5b3bd459de7658828b2a1a = $this->env->getExtension("native_profiler");
        $__internal_2434a3f99b5c58bef1aaa2ad22f9b34ba23ad6d27b5b3bd459de7658828b2a1a->enter($__internal_2434a3f99b5c58bef1aaa2ad22f9b34ba23ad6d27b5b3bd459de7658828b2a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2434a3f99b5c58bef1aaa2ad22f9b34ba23ad6d27b5b3bd459de7658828b2a1a->leave($__internal_2434a3f99b5c58bef1aaa2ad22f9b34ba23ad6d27b5b3bd459de7658828b2a1a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c38191dc1063d3722a9d46d40d0e7578cee19ac113b946e7e522ed3d98549038 = $this->env->getExtension("native_profiler");
        $__internal_c38191dc1063d3722a9d46d40d0e7578cee19ac113b946e7e522ed3d98549038->enter($__internal_c38191dc1063d3722a9d46d40d0e7578cee19ac113b946e7e522ed3d98549038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c38191dc1063d3722a9d46d40d0e7578cee19ac113b946e7e522ed3d98549038->leave($__internal_c38191dc1063d3722a9d46d40d0e7578cee19ac113b946e7e522ed3d98549038_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_034b122cec4aa69dae3c3ff9602c41ec2eabf0349d402085b0bc6cdbd565d07a = $this->env->getExtension("native_profiler");
        $__internal_034b122cec4aa69dae3c3ff9602c41ec2eabf0349d402085b0bc6cdbd565d07a->enter($__internal_034b122cec4aa69dae3c3ff9602c41ec2eabf0349d402085b0bc6cdbd565d07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_034b122cec4aa69dae3c3ff9602c41ec2eabf0349d402085b0bc6cdbd565d07a->leave($__internal_034b122cec4aa69dae3c3ff9602c41ec2eabf0349d402085b0bc6cdbd565d07a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cdb1d4b14604faa4797fda28179aa4f860323b203614f0c44ee5652318909ad5 = $this->env->getExtension("native_profiler");
        $__internal_cdb1d4b14604faa4797fda28179aa4f860323b203614f0c44ee5652318909ad5->enter($__internal_cdb1d4b14604faa4797fda28179aa4f860323b203614f0c44ee5652318909ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cdb1d4b14604faa4797fda28179aa4f860323b203614f0c44ee5652318909ad5->leave($__internal_cdb1d4b14604faa4797fda28179aa4f860323b203614f0c44ee5652318909ad5_prof);

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
