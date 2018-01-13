<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_406c0d24ffb83e9bc1fc767897d7c27526c35d3ee3b7fceec038ed9d4c0a1607 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25b4644c8ed7240b85c483b8b9b8eee819c9be9f27554930232432b737df7b44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25b4644c8ed7240b85c483b8b9b8eee819c9be9f27554930232432b737df7b44->enter($__internal_25b4644c8ed7240b85c483b8b9b8eee819c9be9f27554930232432b737df7b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_9bbec4a4bca97f7b563a3f781bbf3ac71cc1147a7b4d80f5b7a84c676074ed06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bbec4a4bca97f7b563a3f781bbf3ac71cc1147a7b4d80f5b7a84c676074ed06->enter($__internal_9bbec4a4bca97f7b563a3f781bbf3ac71cc1147a7b4d80f5b7a84c676074ed06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25b4644c8ed7240b85c483b8b9b8eee819c9be9f27554930232432b737df7b44->leave($__internal_25b4644c8ed7240b85c483b8b9b8eee819c9be9f27554930232432b737df7b44_prof);

        
        $__internal_9bbec4a4bca97f7b563a3f781bbf3ac71cc1147a7b4d80f5b7a84c676074ed06->leave($__internal_9bbec4a4bca97f7b563a3f781bbf3ac71cc1147a7b4d80f5b7a84c676074ed06_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9112379f0edeeefe5519029fe25a979272ee54ccc3f6b6b1bd696fe33187eca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9112379f0edeeefe5519029fe25a979272ee54ccc3f6b6b1bd696fe33187eca->enter($__internal_e9112379f0edeeefe5519029fe25a979272ee54ccc3f6b6b1bd696fe33187eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4ec72b8f8d79a7f8cec73c5e9785292a4e7763b9183d59479f33a757be82d94d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec72b8f8d79a7f8cec73c5e9785292a4e7763b9183d59479f33a757be82d94d->enter($__internal_4ec72b8f8d79a7f8cec73c5e9785292a4e7763b9183d59479f33a757be82d94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4ec72b8f8d79a7f8cec73c5e9785292a4e7763b9183d59479f33a757be82d94d->leave($__internal_4ec72b8f8d79a7f8cec73c5e9785292a4e7763b9183d59479f33a757be82d94d_prof);

        
        $__internal_e9112379f0edeeefe5519029fe25a979272ee54ccc3f6b6b1bd696fe33187eca->leave($__internal_e9112379f0edeeefe5519029fe25a979272ee54ccc3f6b6b1bd696fe33187eca_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a040d4fcc54cae6a9bc98f5a7b458e69e4e86240e35c456b24aad4bfb68b7d22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a040d4fcc54cae6a9bc98f5a7b458e69e4e86240e35c456b24aad4bfb68b7d22->enter($__internal_a040d4fcc54cae6a9bc98f5a7b458e69e4e86240e35c456b24aad4bfb68b7d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_33fbc8cddcf63a2618868cd6e1d0f7d98749ff37bd60d8ca7e66b87e0093d062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33fbc8cddcf63a2618868cd6e1d0f7d98749ff37bd60d8ca7e66b87e0093d062->enter($__internal_33fbc8cddcf63a2618868cd6e1d0f7d98749ff37bd60d8ca7e66b87e0093d062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_33fbc8cddcf63a2618868cd6e1d0f7d98749ff37bd60d8ca7e66b87e0093d062->leave($__internal_33fbc8cddcf63a2618868cd6e1d0f7d98749ff37bd60d8ca7e66b87e0093d062_prof);

        
        $__internal_a040d4fcc54cae6a9bc98f5a7b458e69e4e86240e35c456b24aad4bfb68b7d22->leave($__internal_a040d4fcc54cae6a9bc98f5a7b458e69e4e86240e35c456b24aad4bfb68b7d22_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
