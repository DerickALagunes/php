<?php

/* LiverpooltiendaBundle:Default:usuarioView.html.twig */
class __TwigTemplate_c86612010bad56e845e6cf615ef13d6c06b3c02f0d32b4f4d04ddec57d36f686 extends Twig_Template
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
        $__internal_943a38b57275c644c8cfac83139ecea2826c5e871f38eed93dbec61693f4c2f1 = $this->env->getExtension("native_profiler");
        $__internal_943a38b57275c644c8cfac83139ecea2826c5e871f38eed93dbec61693f4c2f1->enter($__internal_943a38b57275c644c8cfac83139ecea2826c5e871f38eed93dbec61693f4c2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LiverpooltiendaBundle:Default:usuarioView.html.twig"));

        // line 1
        echo "<h1>Lista de usuarios</h1>

<a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("newUser", array("regAs" => "Empleado"));
        echo "\">Nuevo</a>
<br/>
<br/>

";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 8
            echo "    <span>
        <div>
            <b>Nombre:</b>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "usuario", array()), "html", null, true);
            echo "      <br/>
        </div>
        <div>
            <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editUser", array("id" => $this->getAttribute($context["row"], "idUsuario", array()))), "html", null, true);
            echo "\">Modificar</a>
            <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("removeUser", array("id" => $this->getAttribute($context["row"], "idUsuario", array()))), "html", null, true);
            echo "\">Eliminar</a>
        </div>
    </span>
    <br/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
<a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("liverpooltienda_homepage");
        echo "\">Home</a>";
        
        $__internal_943a38b57275c644c8cfac83139ecea2826c5e871f38eed93dbec61693f4c2f1->leave($__internal_943a38b57275c644c8cfac83139ecea2826c5e871f38eed93dbec61693f4c2f1_prof);

    }

    public function getTemplateName()
    {
        return "LiverpooltiendaBundle:Default:usuarioView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  62 => 19,  51 => 14,  47 => 13,  41 => 10,  37 => 8,  33 => 7,  26 => 3,  22 => 1,);
    }
}
/* <h1>Lista de usuarios</h1>*/
/* */
/* <a href="{{path('newUser',{'regAs':'Empleado'})}}">Nuevo</a>*/
/* <br/>*/
/* <br/>*/
/* */
/* {% for row in result %}*/
/*     <span>*/
/*         <div>*/
/*             <b>Nombre:</b>{{ row.usuario}}      <br/>*/
/*         </div>*/
/*         <div>*/
/*             <a href="{{path('editUser',{'id':row.idUsuario})}}">Modificar</a>*/
/*             <a href="{{path('removeUser',{'id':row.idUsuario})}}">Eliminar</a>*/
/*         </div>*/
/*     </span>*/
/*     <br/>*/
/* {% endfor %}*/
/* */
/* <a href="{{path('liverpooltienda_homepage')}}">Home</a>*/
