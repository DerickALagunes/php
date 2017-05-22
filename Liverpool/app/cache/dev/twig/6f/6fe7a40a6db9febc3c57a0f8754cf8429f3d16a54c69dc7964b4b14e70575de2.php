<?php

/* LiverpooltiendaBundle:Default:usuarioNew.html.twig */
class __TwigTemplate_192ce4389de7842c12fb8dfb5dbc3b523e36bb42dbd7b8caa787572426883f3a extends Twig_Template
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
        $__internal_7ba30917602c0f887dc042d655c1d2ecd053567c6a5214c33b934500a0932dbb = $this->env->getExtension("native_profiler");
        $__internal_7ba30917602c0f887dc042d655c1d2ecd053567c6a5214c33b934500a0932dbb->enter($__internal_7ba30917602c0f887dc042d655c1d2ecd053567c6a5214c33b934500a0932dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LiverpooltiendaBundle:Default:usuarioNew.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formTWIG"]) ? $context["formTWIG"] : $this->getContext($context, "formTWIG")), 'form_start', array("method" => "POST"));
        echo "

    <div class=\"form-group\">
        ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTWIG"]) ? $context["formTWIG"] : $this->getContext($context, "formTWIG")), "nombre", array()), 'row');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTWIG"]) ? $context["formTWIG"] : $this->getContext($context, "formTWIG")), "apellidopaterno", array()), 'row');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTWIG"]) ? $context["formTWIG"] : $this->getContext($context, "formTWIG")), "apellidomaterno", array()), 'row');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTWIG"]) ? $context["formTWIG"] : $this->getContext($context, "formTWIG")), "fechanacimiento", array()), 'row');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTWIG"]) ? $context["formTWIG"] : $this->getContext($context, "formTWIG")), "direccion", array()), 'row');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTWIG"]) ? $context["formTWIG"] : $this->getContext($context, "formTWIG")), "email", array()), 'row');
        echo "
    </div>
    <div class=\"form-group\">
        <br />
        <hr/>
        <h4>Crea tu usuario:</h4>
    </div>
    <div class=\"form-group\">
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTWIG"]) ? $context["formTWIG"] : $this->getContext($context, "formTWIG")), "usuario", array()), 'row');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTWIG"]) ? $context["formTWIG"] : $this->getContext($context, "formTWIG")), "contrasena", array()), 'row');
        echo "
    </div>
    <div class=\"form-group\">
        
    </div>
    <div class=\"form-group\">
        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTWIG"]) ? $context["formTWIG"] : $this->getContext($context, "formTWIG")), "tipo", array()), 'row');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTWIG"]) ? $context["formTWIG"] : $this->getContext($context, "formTWIG")), "submit", array()), 'row', array("label" => (isset($context["var"]) ? $context["var"] : $this->getContext($context, "var"))));
        echo "
    </div>

";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formTWIG"]) ? $context["formTWIG"] : $this->getContext($context, "formTWIG")), 'form_end');
        
        $__internal_7ba30917602c0f887dc042d655c1d2ecd053567c6a5214c33b934500a0932dbb->leave($__internal_7ba30917602c0f887dc042d655c1d2ecd053567c6a5214c33b934500a0932dbb_prof);

    }

    public function getTemplateName()
    {
        return "LiverpooltiendaBundle:Default:usuarioNew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 42,  90 => 39,  84 => 36,  75 => 30,  69 => 27,  58 => 19,  52 => 16,  46 => 13,  40 => 10,  34 => 7,  28 => 4,  22 => 1,);
    }
}
/* {{ form_start(formTWIG, {'method': 'POST'}) }}*/
/* */
/*     <div class="form-group">*/
/*         {{form_row (formTWIG.nombre)}}*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{form_row (formTWIG.apellidopaterno)}}*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{form_row (formTWIG.apellidomaterno)}}*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{form_row (formTWIG.fechanacimiento)}}*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{form_row (formTWIG.direccion)}}*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{form_row (formTWIG.email)}}*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <br />*/
/*         <hr/>*/
/*         <h4>Crea tu usuario:</h4>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{form_row (formTWIG.usuario)}}*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{form_row (formTWIG.contrasena)}}*/
/*     </div>*/
/*     <div class="form-group">*/
/*         */
/*     </div>*/
/*     <div class="form-group">*/
/*         {{form_row (formTWIG.tipo)}}*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{form_row (formTWIG.submit , {'label': var })}}*/
/*     </div>*/
/* */
/* {{form_end(formTWIG)}}*/
