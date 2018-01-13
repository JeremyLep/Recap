<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_85c3141b5312c784cd2143ae93aca9418dffac730a192df8dda3a5d46417ddd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_ac71122d381e6c566acdedcf8cd575375989d09dbc5850155009f3c9f5fe6442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac71122d381e6c566acdedcf8cd575375989d09dbc5850155009f3c9f5fe6442->enter($__internal_ac71122d381e6c566acdedcf8cd575375989d09dbc5850155009f3c9f5fe6442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_36d0f299bdc50274aee94842ee6c18bcf3fce715cde8661f5cd1cf56718cde8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d0f299bdc50274aee94842ee6c18bcf3fce715cde8661f5cd1cf56718cde8c->enter($__internal_36d0f299bdc50274aee94842ee6c18bcf3fce715cde8661f5cd1cf56718cde8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac71122d381e6c566acdedcf8cd575375989d09dbc5850155009f3c9f5fe6442->leave($__internal_ac71122d381e6c566acdedcf8cd575375989d09dbc5850155009f3c9f5fe6442_prof);

        
        $__internal_36d0f299bdc50274aee94842ee6c18bcf3fce715cde8661f5cd1cf56718cde8c->leave($__internal_36d0f299bdc50274aee94842ee6c18bcf3fce715cde8661f5cd1cf56718cde8c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a51606f3ce6157c9e09b32c40763767e27ac88a7db0a44bf2f3cd3c7f4c5bae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a51606f3ce6157c9e09b32c40763767e27ac88a7db0a44bf2f3cd3c7f4c5bae6->enter($__internal_a51606f3ce6157c9e09b32c40763767e27ac88a7db0a44bf2f3cd3c7f4c5bae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0ee63742e41b01c16b4ecaaecd431f1164638cfc3c57cc3f425dc4e77a7ac240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee63742e41b01c16b4ecaaecd431f1164638cfc3c57cc3f425dc4e77a7ac240->enter($__internal_0ee63742e41b01c16b4ecaaecd431f1164638cfc3c57cc3f425dc4e77a7ac240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_0ee63742e41b01c16b4ecaaecd431f1164638cfc3c57cc3f425dc4e77a7ac240->leave($__internal_0ee63742e41b01c16b4ecaaecd431f1164638cfc3c57cc3f425dc4e77a7ac240_prof);

        
        $__internal_a51606f3ce6157c9e09b32c40763767e27ac88a7db0a44bf2f3cd3c7f4c5bae6->leave($__internal_a51606f3ce6157c9e09b32c40763767e27ac88a7db0a44bf2f3cd3c7f4c5bae6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/recap/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
