<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_89a1e0044aa12737cce773c499380c5b494211131c239417ec524615820a52b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12ddb75b74b5bc4e65e8ae236a5773062ecfd3647150078f2abc9042c80f6b81 = $this->env->getExtension("native_profiler");
        $__internal_12ddb75b74b5bc4e65e8ae236a5773062ecfd3647150078f2abc9042c80f6b81->enter($__internal_12ddb75b74b5bc4e65e8ae236a5773062ecfd3647150078f2abc9042c80f6b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12ddb75b74b5bc4e65e8ae236a5773062ecfd3647150078f2abc9042c80f6b81->leave($__internal_12ddb75b74b5bc4e65e8ae236a5773062ecfd3647150078f2abc9042c80f6b81_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bef40bb7ff4b08b6c61ef85725d86e5e55fdb845ab10253db7571f0146b5107e = $this->env->getExtension("native_profiler");
        $__internal_bef40bb7ff4b08b6c61ef85725d86e5e55fdb845ab10253db7571f0146b5107e->enter($__internal_bef40bb7ff4b08b6c61ef85725d86e5e55fdb845ab10253db7571f0146b5107e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bef40bb7ff4b08b6c61ef85725d86e5e55fdb845ab10253db7571f0146b5107e->leave($__internal_bef40bb7ff4b08b6c61ef85725d86e5e55fdb845ab10253db7571f0146b5107e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f79bb6f2ec8d67579c3871a5f6c376dc056fedd6fca753a9180a3b9e7ca74f1 = $this->env->getExtension("native_profiler");
        $__internal_4f79bb6f2ec8d67579c3871a5f6c376dc056fedd6fca753a9180a3b9e7ca74f1->enter($__internal_4f79bb6f2ec8d67579c3871a5f6c376dc056fedd6fca753a9180a3b9e7ca74f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4f79bb6f2ec8d67579c3871a5f6c376dc056fedd6fca753a9180a3b9e7ca74f1->leave($__internal_4f79bb6f2ec8d67579c3871a5f6c376dc056fedd6fca753a9180a3b9e7ca74f1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_721ef8a8f3f7776a2c3d02be20e59b9169f50924f39ee727ebb4f32bcb0c0ad5 = $this->env->getExtension("native_profiler");
        $__internal_721ef8a8f3f7776a2c3d02be20e59b9169f50924f39ee727ebb4f32bcb0c0ad5->enter($__internal_721ef8a8f3f7776a2c3d02be20e59b9169f50924f39ee727ebb4f32bcb0c0ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_721ef8a8f3f7776a2c3d02be20e59b9169f50924f39ee727ebb4f32bcb0c0ad5->leave($__internal_721ef8a8f3f7776a2c3d02be20e59b9169f50924f39ee727ebb4f32bcb0c0ad5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
