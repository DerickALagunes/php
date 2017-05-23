<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8dba4a102f9e1d9ddcbc7d71e141dc20efea8603d2fc047e140fd5a70a4ac05c extends Twig_Template
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
        $__internal_8678d9edf3845a5a3b73e1256db2ef485c12789d8fc69c489a513be0442de413 = $this->env->getExtension("native_profiler");
        $__internal_8678d9edf3845a5a3b73e1256db2ef485c12789d8fc69c489a513be0442de413->enter($__internal_8678d9edf3845a5a3b73e1256db2ef485c12789d8fc69c489a513be0442de413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8678d9edf3845a5a3b73e1256db2ef485c12789d8fc69c489a513be0442de413->leave($__internal_8678d9edf3845a5a3b73e1256db2ef485c12789d8fc69c489a513be0442de413_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1e8814633beda5b9b28fde4238f473f4838594f7ad511c19418853e35b9d8be3 = $this->env->getExtension("native_profiler");
        $__internal_1e8814633beda5b9b28fde4238f473f4838594f7ad511c19418853e35b9d8be3->enter($__internal_1e8814633beda5b9b28fde4238f473f4838594f7ad511c19418853e35b9d8be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1e8814633beda5b9b28fde4238f473f4838594f7ad511c19418853e35b9d8be3->leave($__internal_1e8814633beda5b9b28fde4238f473f4838594f7ad511c19418853e35b9d8be3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f89a0b6f491ff337aa3b0735a2a279f929ec159ab10dede3d68e91dc3c2e49d = $this->env->getExtension("native_profiler");
        $__internal_4f89a0b6f491ff337aa3b0735a2a279f929ec159ab10dede3d68e91dc3c2e49d->enter($__internal_4f89a0b6f491ff337aa3b0735a2a279f929ec159ab10dede3d68e91dc3c2e49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4f89a0b6f491ff337aa3b0735a2a279f929ec159ab10dede3d68e91dc3c2e49d->leave($__internal_4f89a0b6f491ff337aa3b0735a2a279f929ec159ab10dede3d68e91dc3c2e49d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5adad7f879ac40df59696ad02eb6bad95912088df3204be312883cca8e019857 = $this->env->getExtension("native_profiler");
        $__internal_5adad7f879ac40df59696ad02eb6bad95912088df3204be312883cca8e019857->enter($__internal_5adad7f879ac40df59696ad02eb6bad95912088df3204be312883cca8e019857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5adad7f879ac40df59696ad02eb6bad95912088df3204be312883cca8e019857->leave($__internal_5adad7f879ac40df59696ad02eb6bad95912088df3204be312883cca8e019857_prof);

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
