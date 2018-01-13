<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_49f783c85d434f33da958cba71fd86b9362fdeb38ef64ccf657cdab75bb1797e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_8e46bf7379e00a394afb38455ff1f3f2c241fbc87c4ecb1a96447d3a885c4a4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e46bf7379e00a394afb38455ff1f3f2c241fbc87c4ecb1a96447d3a885c4a4c->enter($__internal_8e46bf7379e00a394afb38455ff1f3f2c241fbc87c4ecb1a96447d3a885c4a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_abc7522fb1cb1b0e980a8e50884d24ab237a887695e2d8ae54d695d13da7af81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abc7522fb1cb1b0e980a8e50884d24ab237a887695e2d8ae54d695d13da7af81->enter($__internal_abc7522fb1cb1b0e980a8e50884d24ab237a887695e2d8ae54d695d13da7af81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e46bf7379e00a394afb38455ff1f3f2c241fbc87c4ecb1a96447d3a885c4a4c->leave($__internal_8e46bf7379e00a394afb38455ff1f3f2c241fbc87c4ecb1a96447d3a885c4a4c_prof);

        
        $__internal_abc7522fb1cb1b0e980a8e50884d24ab237a887695e2d8ae54d695d13da7af81->leave($__internal_abc7522fb1cb1b0e980a8e50884d24ab237a887695e2d8ae54d695d13da7af81_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4ba85c3953aeef6e6357dffd72c1b65f50dee7c2ba8ea3cfa555239eef0e6ba3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba85c3953aeef6e6357dffd72c1b65f50dee7c2ba8ea3cfa555239eef0e6ba3->enter($__internal_4ba85c3953aeef6e6357dffd72c1b65f50dee7c2ba8ea3cfa555239eef0e6ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5b95701c7537dcb488a10aa290ecae1331cfe40726ca560719b7e0d0f9fd712f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b95701c7537dcb488a10aa290ecae1331cfe40726ca560719b7e0d0f9fd712f->enter($__internal_5b95701c7537dcb488a10aa290ecae1331cfe40726ca560719b7e0d0f9fd712f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_5b95701c7537dcb488a10aa290ecae1331cfe40726ca560719b7e0d0f9fd712f->leave($__internal_5b95701c7537dcb488a10aa290ecae1331cfe40726ca560719b7e0d0f9fd712f_prof);

        
        $__internal_4ba85c3953aeef6e6357dffd72c1b65f50dee7c2ba8ea3cfa555239eef0e6ba3->leave($__internal_4ba85c3953aeef6e6357dffd72c1b65f50dee7c2ba8ea3cfa555239eef0e6ba3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/recap/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
