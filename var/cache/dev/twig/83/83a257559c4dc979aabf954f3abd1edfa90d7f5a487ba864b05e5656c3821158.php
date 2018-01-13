<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_66d61928fa57437fed0dabaf6ad882032bc13ec62aafd70220e8807e3f294b4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_df6288451e87d70676187e62cd663e9cc947c76437d95c86b168272b11fd6940 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df6288451e87d70676187e62cd663e9cc947c76437d95c86b168272b11fd6940->enter($__internal_df6288451e87d70676187e62cd663e9cc947c76437d95c86b168272b11fd6940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_7f0039de78f245537e3991e8a30e848031e1da3a7177cf8124660bcdf1673f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0039de78f245537e3991e8a30e848031e1da3a7177cf8124660bcdf1673f63->enter($__internal_7f0039de78f245537e3991e8a30e848031e1da3a7177cf8124660bcdf1673f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df6288451e87d70676187e62cd663e9cc947c76437d95c86b168272b11fd6940->leave($__internal_df6288451e87d70676187e62cd663e9cc947c76437d95c86b168272b11fd6940_prof);

        
        $__internal_7f0039de78f245537e3991e8a30e848031e1da3a7177cf8124660bcdf1673f63->leave($__internal_7f0039de78f245537e3991e8a30e848031e1da3a7177cf8124660bcdf1673f63_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c1e60ad9622f970d097ae536592ba2b71fed92edb9e5d922ac1883e2095e7b4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1e60ad9622f970d097ae536592ba2b71fed92edb9e5d922ac1883e2095e7b4d->enter($__internal_c1e60ad9622f970d097ae536592ba2b71fed92edb9e5d922ac1883e2095e7b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_da4b18e1b92d6b4e62b48eb80468a218b8fd4133fe762d6fa6f9662973b6c6e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4b18e1b92d6b4e62b48eb80468a218b8fd4133fe762d6fa6f9662973b6c6e7->enter($__internal_da4b18e1b92d6b4e62b48eb80468a218b8fd4133fe762d6fa6f9662973b6c6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_da4b18e1b92d6b4e62b48eb80468a218b8fd4133fe762d6fa6f9662973b6c6e7->leave($__internal_da4b18e1b92d6b4e62b48eb80468a218b8fd4133fe762d6fa6f9662973b6c6e7_prof);

        
        $__internal_c1e60ad9622f970d097ae536592ba2b71fed92edb9e5d922ac1883e2095e7b4d->leave($__internal_c1e60ad9622f970d097ae536592ba2b71fed92edb9e5d922ac1883e2095e7b4d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/recap/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
