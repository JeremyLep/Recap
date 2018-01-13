<?php

/* UserBundle:Registration:check_email.html.twig */
class __TwigTemplate_07e937ed670bba9568c30554d6b9460bf4f37579476101f59e002d6893f7bc7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_9812f8c3c58d74c67ddfcdc1f57b99f6d14651a7ac723744c6a43835c605e5f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9812f8c3c58d74c67ddfcdc1f57b99f6d14651a7ac723744c6a43835c605e5f0->enter($__internal_9812f8c3c58d74c67ddfcdc1f57b99f6d14651a7ac723744c6a43835c605e5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:check_email.html.twig"));

        $__internal_c3360091f88b5422038354dc19dbfe29b63b90e2e435bf27f567278729784e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3360091f88b5422038354dc19dbfe29b63b90e2e435bf27f567278729784e4a->enter($__internal_c3360091f88b5422038354dc19dbfe29b63b90e2e435bf27f567278729784e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9812f8c3c58d74c67ddfcdc1f57b99f6d14651a7ac723744c6a43835c605e5f0->leave($__internal_9812f8c3c58d74c67ddfcdc1f57b99f6d14651a7ac723744c6a43835c605e5f0_prof);

        
        $__internal_c3360091f88b5422038354dc19dbfe29b63b90e2e435bf27f567278729784e4a->leave($__internal_c3360091f88b5422038354dc19dbfe29b63b90e2e435bf27f567278729784e4a_prof);

    }

    // line 5
    public function block_menutop($context, array $blocks = array())
    {
        $__internal_c57b143bc08ac2637075b0dd67162c3d604542892c27387d4a2635d0ff75719b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c57b143bc08ac2637075b0dd67162c3d604542892c27387d4a2635d0ff75719b->enter($__internal_c57b143bc08ac2637075b0dd67162c3d604542892c27387d4a2635d0ff75719b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menutop"));

        $__internal_d1e38f6586f3199473e2a01fbf9b14d4461551d22c14f9cf1b894454639ff0a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e38f6586f3199473e2a01fbf9b14d4461551d22c14f9cf1b894454639ff0a3->enter($__internal_d1e38f6586f3199473e2a01fbf9b14d4461551d22c14f9cf1b894454639ff0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menutop"));

        
        $__internal_d1e38f6586f3199473e2a01fbf9b14d4461551d22c14f9cf1b894454639ff0a3->leave($__internal_d1e38f6586f3199473e2a01fbf9b14d4461551d22c14f9cf1b894454639ff0a3_prof);

        
        $__internal_c57b143bc08ac2637075b0dd67162c3d604542892c27387d4a2635d0ff75719b->leave($__internal_c57b143bc08ac2637075b0dd67162c3d604542892c27387d4a2635d0ff75719b_prof);

    }

    // line 8
    public function block_menuleft($context, array $blocks = array())
    {
        $__internal_ce422a33a2160ee4416b712b7c312381de607127684689373363bb20e0448b53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce422a33a2160ee4416b712b7c312381de607127684689373363bb20e0448b53->enter($__internal_ce422a33a2160ee4416b712b7c312381de607127684689373363bb20e0448b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuleft"));

        $__internal_aeef5764adf8dc98c28a24cf57193e9476cead4d1323649632ae7a60383ce804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeef5764adf8dc98c28a24cf57193e9476cead4d1323649632ae7a60383ce804->enter($__internal_aeef5764adf8dc98c28a24cf57193e9476cead4d1323649632ae7a60383ce804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuleft"));

        
        $__internal_aeef5764adf8dc98c28a24cf57193e9476cead4d1323649632ae7a60383ce804->leave($__internal_aeef5764adf8dc98c28a24cf57193e9476cead4d1323649632ae7a60383ce804_prof);

        
        $__internal_ce422a33a2160ee4416b712b7c312381de607127684689373363bb20e0448b53->leave($__internal_ce422a33a2160ee4416b712b7c312381de607127684689373363bb20e0448b53_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_35322b43207f20f3bc608eca0a65b378bb519b7785aa703091cec16cc907f5b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35322b43207f20f3bc608eca0a65b378bb519b7785aa703091cec16cc907f5b3->enter($__internal_35322b43207f20f3bc608eca0a65b378bb519b7785aa703091cec16cc907f5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5298c9199f40ea18df5a6515be7edc3134ecf5a8a5ecc271c35f04b34f3f5120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5298c9199f40ea18df5a6515be7edc3134ecf5a8a5ecc271c35f04b34f3f5120->enter($__internal_5298c9199f40ea18df5a6515be7edc3134ecf5a8a5ecc271c35f04b34f3f5120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "<p> Vous avez reçu un mail contenant un lien qui vous permettra de valider votre compte !
</p>
";
        
        $__internal_5298c9199f40ea18df5a6515be7edc3134ecf5a8a5ecc271c35f04b34f3f5120->leave($__internal_5298c9199f40ea18df5a6515be7edc3134ecf5a8a5ecc271c35f04b34f3f5120_prof);

        
        $__internal_35322b43207f20f3bc608eca0a65b378bb519b7785aa703091cec16cc907f5b3->leave($__internal_35322b43207f20f3bc608eca0a65b378bb519b7785aa703091cec16cc907f5b3_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 12,  76 => 11,  59 => 8,  42 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block menutop %}
{% endblock %}

{% block menuleft %}
{% endblock %}

{% block fos_user_content %}
<p> Vous avez reçu un mail contenant un lien qui vous permettra de valider votre compte !
</p>
{% endblock %}", "UserBundle:Registration:check_email.html.twig", "/var/www/recap/src/UserBundle/Resources/views/Registration/check_email.html.twig");
    }
}
