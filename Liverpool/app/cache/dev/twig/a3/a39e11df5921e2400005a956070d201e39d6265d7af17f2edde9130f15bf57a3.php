<?php

/* categoria/index.html.twig */
class __TwigTemplate_c9674eceafa78cd9385eba29621f4fc7087a49e91463bb636d72c7ab94aec07d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "categoria/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bea360d095a0a0f00691f90909bdf2c7a0c671feacb227a8b08fce8b83a08fc = $this->env->getExtension("native_profiler");
        $__internal_2bea360d095a0a0f00691f90909bdf2c7a0c671feacb227a8b08fce8b83a08fc->enter($__internal_2bea360d095a0a0f00691f90909bdf2c7a0c671feacb227a8b08fce8b83a08fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categoria/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bea360d095a0a0f00691f90909bdf2c7a0c671feacb227a8b08fce8b83a08fc->leave($__internal_2bea360d095a0a0f00691f90909bdf2c7a0c671feacb227a8b08fce8b83a08fc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfa64c5285c2f3507786dbadefd5f02b95f55267b3d3d2b7406441c430beb5b6 = $this->env->getExtension("native_profiler");
        $__internal_bfa64c5285c2f3507786dbadefd5f02b95f55267b3d3d2b7406441c430beb5b6->enter($__internal_bfa64c5285c2f3507786dbadefd5f02b95f55267b3d3d2b7406441c430beb5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Categoria list</h1>

    <table>
        <thead>
            <tr>
                <th>Idcategoria</th>
                <th>Nombre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorium"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria_show", array("id" => $this->getAttribute($context["categorium"], "idcategoria", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorium"], "idcategoria", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorium"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria_show", array("id" => $this->getAttribute($context["categorium"], "idcategoria", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria_edit", array("id" => $this->getAttribute($context["categorium"], "idcategoria", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorium'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("categoria_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("liverpooltienda_homepage");
        echo "\">Home</a>
";
        
        $__internal_bfa64c5285c2f3507786dbadefd5f02b95f55267b3d3d2b7406441c430beb5b6->leave($__internal_bfa64c5285c2f3507786dbadefd5f02b95f55267b3d3d2b7406441c430beb5b6_prof);

    }

    public function getTemplateName()
    {
        return "categoria/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 39,  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Categoria list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Idcategoria</th>*/
/*                 <th>Nombre</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for categorium in categorias %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('categoria_show', { 'id': categorium.idcategoria }) }}">{{ categorium.idcategoria }}</a></td>*/
/*                 <td>{{ categorium.nombre }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('categoria_show', { 'id': categorium.idcategoria }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('categoria_edit', { 'id': categorium.idcategoria }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('categoria_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/*             <a href="{{path('liverpooltienda_homepage')}}">Home</a>*/
/* {% endblock %}*/
/* */
