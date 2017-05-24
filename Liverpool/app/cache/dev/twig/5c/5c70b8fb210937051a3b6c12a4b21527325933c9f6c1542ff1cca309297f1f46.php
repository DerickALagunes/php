<?php

/* LiverpooltiendaBundle:Default:index.html.twig */
class __TwigTemplate_e15f13b58ec1c066b1ec1da02c39200c737cfa9642c26dfcfcf9775abfe28d2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "LiverpooltiendaBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf951a15f69fb352351f06b444d1e6d29192a72526e8325a631caa7323053cc9 = $this->env->getExtension("native_profiler");
        $__internal_cf951a15f69fb352351f06b444d1e6d29192a72526e8325a631caa7323053cc9->enter($__internal_cf951a15f69fb352351f06b444d1e6d29192a72526e8325a631caa7323053cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LiverpooltiendaBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf951a15f69fb352351f06b444d1e6d29192a72526e8325a631caa7323053cc9->leave($__internal_cf951a15f69fb352351f06b444d1e6d29192a72526e8325a631caa7323053cc9_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0a2327169dda259dd00a8a529306bc6246e4bce2080b31a68840ea108051c863 = $this->env->getExtension("native_profiler");
        $__internal_0a2327169dda259dd00a8a529306bc6246e4bce2080b31a68840ea108051c863->enter($__internal_0a2327169dda259dd00a8a529306bc6246e4bce2080b31a68840ea108051c863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("styles/bootstrap/css/bootstrap.min.css "), "html", null, true);
        echo "\" />
";
        
        $__internal_0a2327169dda259dd00a8a529306bc6246e4bce2080b31a68840ea108051c863->leave($__internal_0a2327169dda259dd00a8a529306bc6246e4bce2080b31a68840ea108051c863_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_86937c6acb38df65b189c0d646361ee2395301e3c87eb1314f13b65c7526130c = $this->env->getExtension("native_profiler");
        $__internal_86937c6acb38df65b189c0d646361ee2395301e3c87eb1314f13b65c7526130c->enter($__internal_86937c6acb38df65b189c0d646361ee2395301e3c87eb1314f13b65c7526130c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <body style=\"padding-top: 50px;\">
    
    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">Liverpool</a>
            </div>
            <div id=\"navbar\" class=\"collapse navbar-collapse\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"#\">Home</a></li>
                    <li><a href=\"#about\">About</a></li>
                    <li><a href=\"#contact\">Contact</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    
    <div class=\"container\">

        <div style=\"padding: 40px 15px;\">
            <h1>Home</h1>
            <hr/>
            <ul>
                <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("viewUser");
        echo "\">Usuarios</a></li>
                <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("departamento_index");
        echo "\">Departamentos</a></li>
                <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("categoria_index");
        echo "\">Categorias</a></li>
                <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("empleado_index");
        echo "\">Productos</a></li>
                <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("empleado_index");
        echo "\">Empleados</a></li>
            </ul>
            <br />
            <br />
            <hr />
            <br />
            <br />
            <ul>
                <li><a href=\"#\">Registrate</a></li>
            </ul>
            <hr />
            <br />
            <br />
            <ul>
                <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Iniciar sesión</a></li>
            </ul>
        </div>

    </div><!-- /.container -->

    ";
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "
</body>
";
        
        $__internal_86937c6acb38df65b189c0d646361ee2395301e3c87eb1314f13b65c7526130c->leave($__internal_86937c6acb38df65b189c0d646361ee2395301e3c87eb1314f13b65c7526130c_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a42440746b598a492810b59b73934baa1c4787986f3b2fe95355a332cd083e0 = $this->env->getExtension("native_profiler");
        $__internal_4a42440746b598a492810b59b73934baa1c4787986f3b2fe95355a332cd083e0->enter($__internal_4a42440746b598a492810b59b73934baa1c4787986f3b2fe95355a332cd083e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("styles/bootstarp/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
        
        $__internal_4a42440746b598a492810b59b73934baa1c4787986f3b2fe95355a332cd083e0->leave($__internal_4a42440746b598a492810b59b73934baa1c4787986f3b2fe95355a332cd083e0_prof);

    }

    public function getTemplateName()
    {
        return "LiverpooltiendaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 63,  148 => 62,  142 => 61,  133 => 65,  131 => 61,  122 => 55,  105 => 41,  101 => 40,  97 => 39,  93 => 38,  89 => 37,  58 => 8,  52 => 7,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{ asset('styles/bootstrap/css/bootstrap.min.css ') }}" />*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     <body style="padding-top: 50px;">*/
/*     */
/*     <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*         <div class="container">*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="#">Liverpool</a>*/
/*             </div>*/
/*             <div id="navbar" class="collapse navbar-collapse">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li class="active"><a href="#">Home</a></li>*/
/*                     <li><a href="#about">About</a></li>*/
/*                     <li><a href="#contact">Contact</a></li>*/
/*                 </ul>*/
/*             </div><!--/.nav-collapse -->*/
/*         </div>*/
/*     </nav>*/
/*     */
/*     <div class="container">*/
/* */
/*         <div style="padding: 40px 15px;">*/
/*             <h1>Home</h1>*/
/*             <hr/>*/
/*             <ul>*/
/*                 <li><a href="{{path('viewUser')}}">Usuarios</a></li>*/
/*                 <li><a href="{{path('departamento_index')}}">Departamentos</a></li>*/
/*                 <li><a href="{{path('categoria_index')}}">Categorias</a></li>*/
/*                 <li><a href="{{path('empleado_index')}}">Productos</a></li>*/
/*                 <li><a href="{{path('empleado_index')}}">Empleados</a></li>*/
/*             </ul>*/
/*             <br />*/
/*             <br />*/
/*             <hr />*/
/*             <br />*/
/*             <br />*/
/*             <ul>*/
/*                 <li><a href="#">Registrate</a></li>*/
/*             </ul>*/
/*             <hr />*/
/*             <br />*/
/*             <br />*/
/*             <ul>*/
/*                 <li><a href="{{path('login')}}">Iniciar sesión</a></li>*/
/*             </ul>*/
/*         </div>*/
/* */
/*     </div><!-- /.container -->*/
/* */
/*     {% block javascripts %}*/
/*         <script src="{{ asset('styles/bootstarp/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>*/
/*     {% endblock %}*/
/* */
/* </body>*/
/* {% endblock %}*/
/* */
