<?php

/* base.html.twig */
class __TwigTemplate_dfc9ba8a5781ab8fae4498d889e20b286f711255c1b884400a1d149615875377 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8ba4176529b482186207cbd85ac9a778e71f02633ba01e934a3073fa71bc006 = $this->env->getExtension("native_profiler");
        $__internal_f8ba4176529b482186207cbd85ac9a778e71f02633ba01e934a3073fa71bc006->enter($__internal_f8ba4176529b482186207cbd85ac9a778e71f02633ba01e934a3073fa71bc006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f8ba4176529b482186207cbd85ac9a778e71f02633ba01e934a3073fa71bc006->leave($__internal_f8ba4176529b482186207cbd85ac9a778e71f02633ba01e934a3073fa71bc006_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_80b61716025a93c51b0ff10ce1c4a3eec6fec7d3e3bee13ec3e22f199a3fb142 = $this->env->getExtension("native_profiler");
        $__internal_80b61716025a93c51b0ff10ce1c4a3eec6fec7d3e3bee13ec3e22f199a3fb142->enter($__internal_80b61716025a93c51b0ff10ce1c4a3eec6fec7d3e3bee13ec3e22f199a3fb142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_80b61716025a93c51b0ff10ce1c4a3eec6fec7d3e3bee13ec3e22f199a3fb142->leave($__internal_80b61716025a93c51b0ff10ce1c4a3eec6fec7d3e3bee13ec3e22f199a3fb142_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b01524221a713602fd9a1a369f98adc702f5a65e06780d23d35653e9848b88e4 = $this->env->getExtension("native_profiler");
        $__internal_b01524221a713602fd9a1a369f98adc702f5a65e06780d23d35653e9848b88e4->enter($__internal_b01524221a713602fd9a1a369f98adc702f5a65e06780d23d35653e9848b88e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b01524221a713602fd9a1a369f98adc702f5a65e06780d23d35653e9848b88e4->leave($__internal_b01524221a713602fd9a1a369f98adc702f5a65e06780d23d35653e9848b88e4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc2368b4e759a0be9958b8ac0c457bd8dfbec44bc7c8e01160d4d862e83acaa9 = $this->env->getExtension("native_profiler");
        $__internal_dc2368b4e759a0be9958b8ac0c457bd8dfbec44bc7c8e01160d4d862e83acaa9->enter($__internal_dc2368b4e759a0be9958b8ac0c457bd8dfbec44bc7c8e01160d4d862e83acaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dc2368b4e759a0be9958b8ac0c457bd8dfbec44bc7c8e01160d4d862e83acaa9->leave($__internal_dc2368b4e759a0be9958b8ac0c457bd8dfbec44bc7c8e01160d4d862e83acaa9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_edf78e71c5ff6b1dea1ade6ab56aeb66321ec3941ab94f36160dff245c4e8ffe = $this->env->getExtension("native_profiler");
        $__internal_edf78e71c5ff6b1dea1ade6ab56aeb66321ec3941ab94f36160dff245c4e8ffe->enter($__internal_edf78e71c5ff6b1dea1ade6ab56aeb66321ec3941ab94f36160dff245c4e8ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_edf78e71c5ff6b1dea1ade6ab56aeb66321ec3941ab94f36160dff245c4e8ffe->leave($__internal_edf78e71c5ff6b1dea1ade6ab56aeb66321ec3941ab94f36160dff245c4e8ffe_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
