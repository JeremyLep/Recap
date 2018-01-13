<?php

/* UserBundle:Security:login_content.html.twig */
class __TwigTemplate_40c6f0d0b721c2fb457bfe7a45ebf25045f4b236e4c84bd5746faf8024111eb2 extends Twig_Template
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
        $__internal_cef770c1368cd3bf7963b17855b21a706e0db9f812b21b32d6781e3d79a71e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cef770c1368cd3bf7963b17855b21a706e0db9f812b21b32d6781e3d79a71e1a->enter($__internal_cef770c1368cd3bf7963b17855b21a706e0db9f812b21b32d6781e3d79a71e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login_content.html.twig"));

        $__internal_9a02b12ce236b2c6294bcf4ba13bcee19b28f2b0a238b5370c70d01eac4d3ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a02b12ce236b2c6294bcf4ba13bcee19b28f2b0a238b5370c70d01eac4d3ebb->enter($__internal_9a02b12ce236b2c6294bcf4ba13bcee19b28f2b0a238b5370c70d01eac4d3ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 3, $this->getSourceContext()); })())) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 4, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 4, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 8
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 8, $this->getSourceContext()); })())) {
            // line 9
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
    ";
        }
        // line 11
        echo "    <div class=\"form-group\">
        <label for=\"username\">Identifiant</label>
        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "\" required=\"required\" />
    </div>
    <div class=\"form-group\">
        <label for=\"password\">Mot de passe</label>
        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    </div>
    <div class=\"form-group\">
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">Se rappeler de moi</label>
    </div>
    <input class=\"btn btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Valider\" />
</form>
";
        
        $__internal_cef770c1368cd3bf7963b17855b21a706e0db9f812b21b32d6781e3d79a71e1a->leave($__internal_cef770c1368cd3bf7963b17855b21a706e0db9f812b21b32d6781e3d79a71e1a_prof);

        
        $__internal_9a02b12ce236b2c6294bcf4ba13bcee19b28f2b0a238b5370c70d01eac4d3ebb->leave($__internal_9a02b12ce236b2c6294bcf4ba13bcee19b28f2b0a238b5370c70d01eac4d3ebb_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  51 => 11,  45 => 9,  43 => 8,  39 => 7,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path('fos_user_security_check') }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}
    <div class=\"form-group\">
        <label for=\"username\">Identifiant</label>
        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
    </div>
    <div class=\"form-group\">
        <label for=\"password\">Mot de passe</label>
        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    </div>
    <div class=\"form-group\">
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">Se rappeler de moi</label>
    </div>
    <input class=\"btn btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Valider\" />
</form>
", "UserBundle:Security:login_content.html.twig", "/var/www/recap/src/UserBundle/Resources/views/Security/login_content.html.twig");
    }
}
