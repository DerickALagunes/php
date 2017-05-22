<?php

/* base.html.twig */
class __TwigTemplate_24f9316b357b7b5b3fc78858744e858b687b7882879422969dbf1d34bacece77 extends Twig_Template
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
        $__internal_841fe1aa58145fd8619fb5e18682753457fd24ad5267cfd4c7dafd9a32ec6948 = $this->env->getExtension("native_profiler");
        $__internal_841fe1aa58145fd8619fb5e18682753457fd24ad5267cfd4c7dafd9a32ec6948->enter($__internal_841fe1aa58145fd8619fb5e18682753457fd24ad5267cfd4c7dafd9a32ec6948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_841fe1aa58145fd8619fb5e18682753457fd24ad5267cfd4c7dafd9a32ec6948->leave($__internal_841fe1aa58145fd8619fb5e18682753457fd24ad5267cfd4c7dafd9a32ec6948_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec4f11444ff2dedae87ee97e9990138be149c1c1b052fdce8165a75b218293e4 = $this->env->getExtension("native_profiler");
        $__internal_ec4f11444ff2dedae87ee97e9990138be149c1c1b052fdce8165a75b218293e4->enter($__internal_ec4f11444ff2dedae87ee97e9990138be149c1c1b052fdce8165a75b218293e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ec4f11444ff2dedae87ee97e9990138be149c1c1b052fdce8165a75b218293e4->leave($__internal_ec4f11444ff2dedae87ee97e9990138be149c1c1b052fdce8165a75b218293e4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e38ea9cca150f1514ae3736a6a6a155851cf69d994814f46fe4efd43a2fa983 = $this->env->getExtension("native_profiler");
        $__internal_3e38ea9cca150f1514ae3736a6a6a155851cf69d994814f46fe4efd43a2fa983->enter($__internal_3e38ea9cca150f1514ae3736a6a6a155851cf69d994814f46fe4efd43a2fa983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3e38ea9cca150f1514ae3736a6a6a155851cf69d994814f46fe4efd43a2fa983->leave($__internal_3e38ea9cca150f1514ae3736a6a6a155851cf69d994814f46fe4efd43a2fa983_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_91891428edcee8894fbece39f53e9f6ed0da3f69002fd6d9eea39b0b9731b00a = $this->env->getExtension("native_profiler");
        $__internal_91891428edcee8894fbece39f53e9f6ed0da3f69002fd6d9eea39b0b9731b00a->enter($__internal_91891428edcee8894fbece39f53e9f6ed0da3f69002fd6d9eea39b0b9731b00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_91891428edcee8894fbece39f53e9f6ed0da3f69002fd6d9eea39b0b9731b00a->leave($__internal_91891428edcee8894fbece39f53e9f6ed0da3f69002fd6d9eea39b0b9731b00a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_de627a8f514e0b7f9138bfeb27394fe53e15c16fff25aedbbd7278a205f8d2a9 = $this->env->getExtension("native_profiler");
        $__internal_de627a8f514e0b7f9138bfeb27394fe53e15c16fff25aedbbd7278a205f8d2a9->enter($__internal_de627a8f514e0b7f9138bfeb27394fe53e15c16fff25aedbbd7278a205f8d2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_de627a8f514e0b7f9138bfeb27394fe53e15c16fff25aedbbd7278a205f8d2a9->leave($__internal_de627a8f514e0b7f9138bfeb27394fe53e15c16fff25aedbbd7278a205f8d2a9_prof);

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
