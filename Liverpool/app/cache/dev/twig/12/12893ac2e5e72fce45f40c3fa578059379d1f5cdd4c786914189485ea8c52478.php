<?php

/* security/login.html.twig */
class __TwigTemplate_f077ebf184eb9ac75a11706dba9e96f8d927b42132c68e487d620aa0c9ec0199 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        $__internal_7ba6af1617069edf827b0f75afd6c54972490cecc08d5abdb0f0d19df4b48d0d = $this->env->getExtension("native_profiler");
        $__internal_7ba6af1617069edf827b0f75afd6c54972490cecc08d5abdb0f0d19df4b48d0d->enter($__internal_7ba6af1617069edf827b0f75afd6c54972490cecc08d5abdb0f0d19df4b48d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ba6af1617069edf827b0f75afd6c54972490cecc08d5abdb0f0d19df4b48d0d->leave($__internal_7ba6af1617069edf827b0f75afd6c54972490cecc08d5abdb0f0d19df4b48d0d_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_d03897ef9fc5861f119cbb8057e35259f3ac8020ac086397e9fffbb3278a1042 = $this->env->getExtension("native_profiler");
        $__internal_d03897ef9fc5861f119cbb8057e35259f3ac8020ac086397e9fffbb3278a1042->enter($__internal_d03897ef9fc5861f119cbb8057e35259f3ac8020ac086397e9fffbb3278a1042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 10
        echo "
<form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    <button type=\"submit\">login</button>
</form>
    <br/>
<h4>Si no tienes un usuario registrate:</h4>
<a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("newUser", array("regAs" => "Cliente"));
        echo "\">Registrarme</a>
";
        
        $__internal_d03897ef9fc5861f119cbb8057e35259f3ac8020ac086397e9fffbb3278a1042->leave($__internal_d03897ef9fc5861f119cbb8057e35259f3ac8020ac086397e9fffbb3278a1042_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  56 => 13,  51 => 11,  48 => 10,  42 => 8,  40 => 7,  34 => 6,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {# app/Resources/views/security/login.html.twig #}*/
/* {# ... you will probably extend your base template, like base.html.twig #}*/
/* */
/* */
/* {% block body %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <form action="{{ path('login_check') }}" method="post">*/
/*     <label for="username">Username:</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*     <label for="password">Password:</label>*/
/*     <input type="password" id="password" name="_password" />*/
/* */
/*     <button type="submit">login</button>*/
/* </form>*/
/*     <br/>*/
/* <h4>Si no tienes un usuario registrate:</h4>*/
/* <a href="{{path('newUser',{'regAs':'Cliente'})}}">Registrarme</a>*/
/* {% endblock %}*/
