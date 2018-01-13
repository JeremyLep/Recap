<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_1c1ae2aed34f024f1dcd2c5d6f208b504c1254fddb2d14aa1285b6f724bdd91b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7cc571a2001b252f4a224fd9f98127ee65b82c772e1d802b003c58447022da13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cc571a2001b252f4a224fd9f98127ee65b82c772e1d802b003c58447022da13->enter($__internal_7cc571a2001b252f4a224fd9f98127ee65b82c772e1d802b003c58447022da13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_03d8ba48d96fae0122824667873ea0702592d09e33867474f0b53bf0664be3cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d8ba48d96fae0122824667873ea0702592d09e33867474f0b53bf0664be3cb->enter($__internal_03d8ba48d96fae0122824667873ea0702592d09e33867474f0b53bf0664be3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cc571a2001b252f4a224fd9f98127ee65b82c772e1d802b003c58447022da13->leave($__internal_7cc571a2001b252f4a224fd9f98127ee65b82c772e1d802b003c58447022da13_prof);

        
        $__internal_03d8ba48d96fae0122824667873ea0702592d09e33867474f0b53bf0664be3cb->leave($__internal_03d8ba48d96fae0122824667873ea0702592d09e33867474f0b53bf0664be3cb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ecfd7629aff7176423ccf7bd750e4ea21fd3a456f2970d974397dad5d62590c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecfd7629aff7176423ccf7bd750e4ea21fd3a456f2970d974397dad5d62590c4->enter($__internal_ecfd7629aff7176423ccf7bd750e4ea21fd3a456f2970d974397dad5d62590c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fb48704068971285a904e64a317bbaf505c41f743d754c6b5fd35d1dc689e637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb48704068971285a904e64a317bbaf505c41f743d754c6b5fd35d1dc689e637->enter($__internal_fb48704068971285a904e64a317bbaf505c41f743d754c6b5fd35d1dc689e637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_fb48704068971285a904e64a317bbaf505c41f743d754c6b5fd35d1dc689e637->leave($__internal_fb48704068971285a904e64a317bbaf505c41f743d754c6b5fd35d1dc689e637_prof);

        
        $__internal_ecfd7629aff7176423ccf7bd750e4ea21fd3a456f2970d974397dad5d62590c4->leave($__internal_ecfd7629aff7176423ccf7bd750e4ea21fd3a456f2970d974397dad5d62590c4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/recap/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
