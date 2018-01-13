<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_a67ffad798e140ef688a0d09755377aa1115e2fd7507478b9ab6195b2f8b45bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_f08a7db991ea1e808a4e6f5229ce9891a0789d1aa43f94841f5bdb17c2ab340d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f08a7db991ea1e808a4e6f5229ce9891a0789d1aa43f94841f5bdb17c2ab340d->enter($__internal_f08a7db991ea1e808a4e6f5229ce9891a0789d1aa43f94841f5bdb17c2ab340d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_f9f5195d5405f2b3e0d867d8936bdedc6d0243a9faa8ac55b1d49e9715a53452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f5195d5405f2b3e0d867d8936bdedc6d0243a9faa8ac55b1d49e9715a53452->enter($__internal_f9f5195d5405f2b3e0d867d8936bdedc6d0243a9faa8ac55b1d49e9715a53452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f08a7db991ea1e808a4e6f5229ce9891a0789d1aa43f94841f5bdb17c2ab340d->leave($__internal_f08a7db991ea1e808a4e6f5229ce9891a0789d1aa43f94841f5bdb17c2ab340d_prof);

        
        $__internal_f9f5195d5405f2b3e0d867d8936bdedc6d0243a9faa8ac55b1d49e9715a53452->leave($__internal_f9f5195d5405f2b3e0d867d8936bdedc6d0243a9faa8ac55b1d49e9715a53452_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6ea1230455401167116a17a71d63c2077b8c596db788ab34d163c48be2417099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ea1230455401167116a17a71d63c2077b8c596db788ab34d163c48be2417099->enter($__internal_6ea1230455401167116a17a71d63c2077b8c596db788ab34d163c48be2417099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_99f455c46315e7b67dea8daca11a7337bf1df00bd64e928ce5cd319aa01eef8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f455c46315e7b67dea8daca11a7337bf1df00bd64e928ce5cd319aa01eef8e->enter($__internal_99f455c46315e7b67dea8daca11a7337bf1df00bd64e928ce5cd319aa01eef8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_99f455c46315e7b67dea8daca11a7337bf1df00bd64e928ce5cd319aa01eef8e->leave($__internal_99f455c46315e7b67dea8daca11a7337bf1df00bd64e928ce5cd319aa01eef8e_prof);

        
        $__internal_6ea1230455401167116a17a71d63c2077b8c596db788ab34d163c48be2417099->leave($__internal_6ea1230455401167116a17a71d63c2077b8c596db788ab34d163c48be2417099_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/recap/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
