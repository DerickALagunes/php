<?php

/* LiverpooltiendaBundle:Default:usuarioUpdate.html.twig */
class __TwigTemplate_ddfb2fe913b5b21efb7ce529322b4276107a50da336076d0be6f40fb7267455a extends Twig_Template
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
        $__internal_d74d81ed7ce83eb69f1d3caa345211166327352e635eaad403d7c6dc969b3a5d = $this->env->getExtension("native_profiler");
        $__internal_d74d81ed7ce83eb69f1d3caa345211166327352e635eaad403d7c6dc969b3a5d->enter($__internal_d74d81ed7ce83eb69f1d3caa345211166327352e635eaad403d7c6dc969b3a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LiverpooltiendaBundle:Default:usuarioUpdate.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formTWIG"]) ? $context["formTWIG"] : $this->getContext($context, "formTWIG")), 'form_start', array("method" => "POST"));
        echo "

    <div class=\"form-group\">
        ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTWIG"]) ? $context["formTWIG"] : $this->getContext($context, "formTWIG")), "nombre", array()), 'row', array("value" => $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "nombre", array())));
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTWIG"]) ? $context["formTWIG"] : $this->getContext($context, "formTWIG")), "apellidopaterno", array()), 'row', array("value" => $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "apellidopaterno", array())));
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTWIG"]) ? $context["formTWIG"] : $this->getContext($context, "formTWIG")), "apellidomaterno", array()), 'row', array("value" => $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "apellidomaterno", array())));
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTWIG"]) ? $context["formTWIG"] : $this->getContext($context, "formTWIG")), "fechanacimiento", array()), 'row', array("value" => twig_date_format_filter($this->env, $this->getAttribute(        // line 14
(isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "fechanacimiento", array()), "Y-m-d")));
        // line 15
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTWIG"]) ? $context["formTWIG"] : $this->getContext($context, "formTWIG")), "direccion", array()), 'row', array("value" => $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "direccion", array())));
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTWIG"]) ? $context["formTWIG"] : $this->getContext($context, "formTWIG")), "email", array()), 'row', array("value" => $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "email", array())));
        echo "
    </div>
    <div class=\"form-group\">
        <br />
        <hr/>
        <h4>Crea tu usuario:</h4>
    </div>
    <div class=\"form-group\">
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTWIG"]) ? $context["formTWIG"] : $this->getContext($context, "formTWIG")), "usuario", array()), 'row', array("value" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "usuario", array())));
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTWIG"]) ? $context["formTWIG"] : $this->getContext($context, "formTWIG")), "contrasena", array()), 'row', array("value" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "contrasena", array())));
        echo "
    </div>
    <div class=\"form-group\">
        
    </div>
    <div class=\"form-group\">
        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTWIG"]) ? $context["formTWIG"] : $this->getContext($context, "formTWIG")), "tipo", array()), 'row', array("value" => $this->getAttribute((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")), "tipo", array())));
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTWIG"]) ? $context["formTWIG"] : $this->getContext($context, "formTWIG")), "submit", array()), 'row', array("label" => (isset($context["var"]) ? $context["var"] : $this->getContext($context, "var"))));
        echo "
    </div>

";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formTWIG"]) ? $context["formTWIG"] : $this->getContext($context, "formTWIG")), 'form_end');
        
        $__internal_d74d81ed7ce83eb69f1d3caa345211166327352e635eaad403d7c6dc969b3a5d->leave($__internal_d74d81ed7ce83eb69f1d3caa345211166327352e635eaad403d7c6dc969b3a5d_prof);

    }

    public function getTemplateName()
    {
        return "LiverpooltiendaBundle:Default:usuarioUpdate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 44,  92 => 41,  86 => 38,  77 => 32,  71 => 29,  60 => 21,  54 => 18,  49 => 15,  47 => 14,  46 => 13,  40 => 10,  34 => 7,  28 => 4,  22 => 1,);
    }
}
/* {{ form_start(formTWIG, {'method': 'POST'}) }}*/
/* */
/*     <div class="form-group">*/
/*         {{form_row (formTWIG.nombre,{'value':persona.nombre})}}*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{form_row (formTWIG.apellidopaterno,{'value':persona.apellidopaterno})}}*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{form_row (formTWIG.apellidomaterno,{'value':persona.apellidomaterno})}}*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{form_row (formTWIG.fechanacimiento,{*/
/*                 'value':persona.fechanacimiento|date('Y-m-d')*/
/*         })}}*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{form_row (formTWIG.direccion,{'value':persona.direccion})}}*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{form_row (formTWIG.email,{'value':persona.email})}}*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <br />*/
/*         <hr/>*/
/*         <h4>Crea tu usuario:</h4>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{form_row (formTWIG.usuario,{'value':user.usuario})}}*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{form_row (formTWIG.contrasena,{'value':user.contrasena})}}*/
/*     </div>*/
/*     <div class="form-group">*/
/*         */
/*     </div>*/
/*     <div class="form-group">*/
/*         {{form_row (formTWIG.tipo,{'value':tipo.tipo})}}*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{form_row (formTWIG.submit , {'label': var })}}*/
/*     </div>*/
/* */
/* {{form_end(formTWIG)}}*/
