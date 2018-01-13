<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_5b0e46c16015bcc609f775b1796fc922d6d8fba4cb922b29cd97e49bbe7761e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_00d6bae326273c2c32aa86f080a7f007ffed74b69fcf5f6f95fdbc676f82f92e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00d6bae326273c2c32aa86f080a7f007ffed74b69fcf5f6f95fdbc676f82f92e->enter($__internal_00d6bae326273c2c32aa86f080a7f007ffed74b69fcf5f6f95fdbc676f82f92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_37f3f7f936b7f9cf5f157d80b0734dc522018ecb5cb1813f78bd4ada381de6c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37f3f7f936b7f9cf5f157d80b0734dc522018ecb5cb1813f78bd4ada381de6c4->enter($__internal_37f3f7f936b7f9cf5f157d80b0734dc522018ecb5cb1813f78bd4ada381de6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00d6bae326273c2c32aa86f080a7f007ffed74b69fcf5f6f95fdbc676f82f92e->leave($__internal_00d6bae326273c2c32aa86f080a7f007ffed74b69fcf5f6f95fdbc676f82f92e_prof);

        
        $__internal_37f3f7f936b7f9cf5f157d80b0734dc522018ecb5cb1813f78bd4ada381de6c4->leave($__internal_37f3f7f936b7f9cf5f157d80b0734dc522018ecb5cb1813f78bd4ada381de6c4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b9c7e21880ddc72d2ac64b06a9bbe6d62c23173a8279728cbe19babee14acc13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9c7e21880ddc72d2ac64b06a9bbe6d62c23173a8279728cbe19babee14acc13->enter($__internal_b9c7e21880ddc72d2ac64b06a9bbe6d62c23173a8279728cbe19babee14acc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e005a19538f18d94164c40d93a53a318b4f64ec3d7f5de7d49ac5e79f3820bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e005a19538f18d94164c40d93a53a318b4f64ec3d7f5de7d49ac5e79f3820bc7->enter($__internal_e005a19538f18d94164c40d93a53a318b4f64ec3d7f5de7d49ac5e79f3820bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_e005a19538f18d94164c40d93a53a318b4f64ec3d7f5de7d49ac5e79f3820bc7->leave($__internal_e005a19538f18d94164c40d93a53a318b4f64ec3d7f5de7d49ac5e79f3820bc7_prof);

        
        $__internal_b9c7e21880ddc72d2ac64b06a9bbe6d62c23173a8279728cbe19babee14acc13->leave($__internal_b9c7e21880ddc72d2ac64b06a9bbe6d62c23173a8279728cbe19babee14acc13_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/recap/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
