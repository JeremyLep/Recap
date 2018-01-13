<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_fe55043c1199577881d6e5e3941e74b9bf4b9dfaf66f4e8ef460186a515899d9 extends Twig_Template
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
        $__internal_e578fd3dbaa479cb7f229c384a16e90e0ddb76e3e13ddde900bdebb3849d8b40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e578fd3dbaa479cb7f229c384a16e90e0ddb76e3e13ddde900bdebb3849d8b40->enter($__internal_e578fd3dbaa479cb7f229c384a16e90e0ddb76e3e13ddde900bdebb3849d8b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_a51be3bf70d4186ff860e2f543e4bad414f4b314c40bfb14344758943e4f9cfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51be3bf70d4186ff860e2f543e4bad414f4b314c40bfb14344758943e4f9cfe->enter($__internal_a51be3bf70d4186ff860e2f543e4bad414f4b314c40bfb14344758943e4f9cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_e578fd3dbaa479cb7f229c384a16e90e0ddb76e3e13ddde900bdebb3849d8b40->leave($__internal_e578fd3dbaa479cb7f229c384a16e90e0ddb76e3e13ddde900bdebb3849d8b40_prof);

        
        $__internal_a51be3bf70d4186ff860e2f543e4bad414f4b314c40bfb14344758943e4f9cfe->leave($__internal_a51be3bf70d4186ff860e2f543e4bad414f4b314c40bfb14344758943e4f9cfe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/var/www/recap/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
