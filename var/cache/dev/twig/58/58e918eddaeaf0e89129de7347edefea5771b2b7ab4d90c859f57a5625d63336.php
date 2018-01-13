<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_d1143e20c90c97996ccd88b5bb93d962282a2107d78842f98051c41195373137 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc8b4ce5d9edfa520b0fa3f411b4e582e57aa9328b7309f994174ca9a75ddf29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc8b4ce5d9edfa520b0fa3f411b4e582e57aa9328b7309f994174ca9a75ddf29->enter($__internal_bc8b4ce5d9edfa520b0fa3f411b4e582e57aa9328b7309f994174ca9a75ddf29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_ef54a90dd31d2abd8fb4e14ad82d2a7bee2c7bf26bf5b48e83658e3a1322516a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef54a90dd31d2abd8fb4e14ad82d2a7bee2c7bf26bf5b48e83658e3a1322516a->enter($__internal_ef54a90dd31d2abd8fb4e14ad82d2a7bee2c7bf26bf5b48e83658e3a1322516a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc8b4ce5d9edfa520b0fa3f411b4e582e57aa9328b7309f994174ca9a75ddf29->leave($__internal_bc8b4ce5d9edfa520b0fa3f411b4e582e57aa9328b7309f994174ca9a75ddf29_prof);

        
        $__internal_ef54a90dd31d2abd8fb4e14ad82d2a7bee2c7bf26bf5b48e83658e3a1322516a->leave($__internal_ef54a90dd31d2abd8fb4e14ad82d2a7bee2c7bf26bf5b48e83658e3a1322516a_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_65a8fbd0b1419c895626621a1c30b7555d373544dce1109a4f2cf770a627425f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65a8fbd0b1419c895626621a1c30b7555d373544dce1109a4f2cf770a627425f->enter($__internal_65a8fbd0b1419c895626621a1c30b7555d373544dce1109a4f2cf770a627425f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_1c90d5f8c9a19a16ad37d4de27ace35d3690cb62427e20b810aaf69e8c01b1ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c90d5f8c9a19a16ad37d4de27ace35d3690cb62427e20b810aaf69e8c01b1ca->enter($__internal_1c90d5f8c9a19a16ad37d4de27ace35d3690cb62427e20b810aaf69e8c01b1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_1c90d5f8c9a19a16ad37d4de27ace35d3690cb62427e20b810aaf69e8c01b1ca->leave($__internal_1c90d5f8c9a19a16ad37d4de27ace35d3690cb62427e20b810aaf69e8c01b1ca_prof);

        
        $__internal_65a8fbd0b1419c895626621a1c30b7555d373544dce1109a4f2cf770a627425f->leave($__internal_65a8fbd0b1419c895626621a1c30b7555d373544dce1109a4f2cf770a627425f_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6315ad9b40efc96cdefffdb17f8ab065a60c6fa3c00d3e6169ed0cad00abc937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6315ad9b40efc96cdefffdb17f8ab065a60c6fa3c00d3e6169ed0cad00abc937->enter($__internal_6315ad9b40efc96cdefffdb17f8ab065a60c6fa3c00d3e6169ed0cad00abc937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_afa522cad3f1d93887a7c284ed2fa0640a27717199386206b4a5681e451a4ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa522cad3f1d93887a7c284ed2fa0640a27717199386206b4a5681e451a4ce6->enter($__internal_afa522cad3f1d93887a7c284ed2fa0640a27717199386206b4a5681e451a4ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_afa522cad3f1d93887a7c284ed2fa0640a27717199386206b4a5681e451a4ce6->leave($__internal_afa522cad3f1d93887a7c284ed2fa0640a27717199386206b4a5681e451a4ce6_prof);

        
        $__internal_6315ad9b40efc96cdefffdb17f8ab065a60c6fa3c00d3e6169ed0cad00abc937->leave($__internal_6315ad9b40efc96cdefffdb17f8ab065a60c6fa3c00d3e6169ed0cad00abc937_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
