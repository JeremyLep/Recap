<?php

/* UserBundle:Resetting:request.html.twig */
class __TwigTemplate_6c1da521cd69125a9fb4971f55bdfe8007549daf4188bfd91112730432b2c0e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'menutop' => array($this, 'block_menutop'),
            'menuleft' => array($this, 'block_menuleft'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_061e8fc3cd6dd2723ebe7668f0044b455608eb9c7fcbd80e6ac3d3de55265766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_061e8fc3cd6dd2723ebe7668f0044b455608eb9c7fcbd80e6ac3d3de55265766->enter($__internal_061e8fc3cd6dd2723ebe7668f0044b455608eb9c7fcbd80e6ac3d3de55265766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request.html.twig"));

        $__internal_e7c5dc4f1e630d261d7b1afa29b63433b599745128350493055d1fcbcb6bfcd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c5dc4f1e630d261d7b1afa29b63433b599745128350493055d1fcbcb6bfcd6->enter($__internal_e7c5dc4f1e630d261d7b1afa29b63433b599745128350493055d1fcbcb6bfcd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_061e8fc3cd6dd2723ebe7668f0044b455608eb9c7fcbd80e6ac3d3de55265766->leave($__internal_061e8fc3cd6dd2723ebe7668f0044b455608eb9c7fcbd80e6ac3d3de55265766_prof);

        
        $__internal_e7c5dc4f1e630d261d7b1afa29b63433b599745128350493055d1fcbcb6bfcd6->leave($__internal_e7c5dc4f1e630d261d7b1afa29b63433b599745128350493055d1fcbcb6bfcd6_prof);

    }

    // line 3
    public function block_menutop($context, array $blocks = array())
    {
        $__internal_c277109a97102f30bc272fda3a7dfa23855253564735f92fb7eb894b775ae0ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c277109a97102f30bc272fda3a7dfa23855253564735f92fb7eb894b775ae0ec->enter($__internal_c277109a97102f30bc272fda3a7dfa23855253564735f92fb7eb894b775ae0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menutop"));

        $__internal_11bfee1b746439942b3c3bf8c221533095316197a29849ac285706f8b113fcd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11bfee1b746439942b3c3bf8c221533095316197a29849ac285706f8b113fcd9->enter($__internal_11bfee1b746439942b3c3bf8c221533095316197a29849ac285706f8b113fcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menutop"));

        
        $__internal_11bfee1b746439942b3c3bf8c221533095316197a29849ac285706f8b113fcd9->leave($__internal_11bfee1b746439942b3c3bf8c221533095316197a29849ac285706f8b113fcd9_prof);

        
        $__internal_c277109a97102f30bc272fda3a7dfa23855253564735f92fb7eb894b775ae0ec->leave($__internal_c277109a97102f30bc272fda3a7dfa23855253564735f92fb7eb894b775ae0ec_prof);

    }

    // line 6
    public function block_menuleft($context, array $blocks = array())
    {
        $__internal_8c8d86e99b8a9dddd2209c51be28faca9b892ca517809029811e8dfaeb2dc1a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c8d86e99b8a9dddd2209c51be28faca9b892ca517809029811e8dfaeb2dc1a9->enter($__internal_8c8d86e99b8a9dddd2209c51be28faca9b892ca517809029811e8dfaeb2dc1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuleft"));

        $__internal_fb4763454705405a582486d155bac1fae40086cfd3e780e2a002bf45d7a1875f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4763454705405a582486d155bac1fae40086cfd3e780e2a002bf45d7a1875f->enter($__internal_fb4763454705405a582486d155bac1fae40086cfd3e780e2a002bf45d7a1875f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuleft"));

        
        $__internal_fb4763454705405a582486d155bac1fae40086cfd3e780e2a002bf45d7a1875f->leave($__internal_fb4763454705405a582486d155bac1fae40086cfd3e780e2a002bf45d7a1875f_prof);

        
        $__internal_8c8d86e99b8a9dddd2209c51be28faca9b892ca517809029811e8dfaeb2dc1a9->leave($__internal_8c8d86e99b8a9dddd2209c51be28faca9b892ca517809029811e8dfaeb2dc1a9_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f3bf3cc5f93d64efc652540a0f657ac6b34728db6371c8494cecb2836bf1480a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3bf3cc5f93d64efc652540a0f657ac6b34728db6371c8494cecb2836bf1480a->enter($__internal_f3bf3cc5f93d64efc652540a0f657ac6b34728db6371c8494cecb2836bf1480a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8931b53f9570ec34e53bc4aee3386f6e920e35212430ca279c05e9102927ac6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8931b53f9570ec34e53bc4aee3386f6e920e35212430ca279c05e9102927ac6c->enter($__internal_8931b53f9570ec34e53bc4aee3386f6e920e35212430ca279c05e9102927ac6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "UserBundle:Resetting:request.html.twig", 10)->display($context);
        
        $__internal_8931b53f9570ec34e53bc4aee3386f6e920e35212430ca279c05e9102927ac6c->leave($__internal_8931b53f9570ec34e53bc4aee3386f6e920e35212430ca279c05e9102927ac6c_prof);

        
        $__internal_f3bf3cc5f93d64efc652540a0f657ac6b34728db6371c8494cecb2836bf1480a->leave($__internal_f3bf3cc5f93d64efc652540a0f657ac6b34728db6371c8494cecb2836bf1480a_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 10,  76 => 9,  59 => 6,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block menutop %}
{% endblock %}

{% block menuleft %}
{% endblock %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "UserBundle:Resetting:request.html.twig", "/var/www/recap/src/UserBundle/Resources/views/Resetting/request.html.twig");
    }
}
