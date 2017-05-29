<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_bacbafd05ec994fb2d909f02748e645d6c7c4caa4cff3722c0012c8d8b1d576b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17d1c1ff0d926e8c2498340ff4fd78916d2b0a1af081b6087b2f06f5a010b1ac = $this->env->getExtension("native_profiler");
        $__internal_17d1c1ff0d926e8c2498340ff4fd78916d2b0a1af081b6087b2f06f5a010b1ac->enter($__internal_17d1c1ff0d926e8c2498340ff4fd78916d2b0a1af081b6087b2f06f5a010b1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_17d1c1ff0d926e8c2498340ff4fd78916d2b0a1af081b6087b2f06f5a010b1ac->leave($__internal_17d1c1ff0d926e8c2498340ff4fd78916d2b0a1af081b6087b2f06f5a010b1ac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
