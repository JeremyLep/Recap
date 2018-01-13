<?php

/* AppBundle:Groupe:add.html.twig */
class __TwigTemplate_eb40ac1400ffd4bb43075f989455b4c040f1a9b76e682c1d899fe4c7d891221e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Groupe:add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e7824c49f53593a47bedeb6254efaaf3628eab1ee9eefc6a34a28ba756f96d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e7824c49f53593a47bedeb6254efaaf3628eab1ee9eefc6a34a28ba756f96d8->enter($__internal_9e7824c49f53593a47bedeb6254efaaf3628eab1ee9eefc6a34a28ba756f96d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Groupe:add.html.twig"));

        $__internal_30fe89d22bd1ab4251f9288c032c24085c685b829ae0e54dc371b2e5a21f3d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30fe89d22bd1ab4251f9288c032c24085c685b829ae0e54dc371b2e5a21f3d94->enter($__internal_30fe89d22bd1ab4251f9288c032c24085c685b829ae0e54dc371b2e5a21f3d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Groupe:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e7824c49f53593a47bedeb6254efaaf3628eab1ee9eefc6a34a28ba756f96d8->leave($__internal_9e7824c49f53593a47bedeb6254efaaf3628eab1ee9eefc6a34a28ba756f96d8_prof);

        
        $__internal_30fe89d22bd1ab4251f9288c032c24085c685b829ae0e54dc371b2e5a21f3d94->leave($__internal_30fe89d22bd1ab4251f9288c032c24085c685b829ae0e54dc371b2e5a21f3d94_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7267b56e5ebccc97d4e947f7179ba2d6f949da448281fb80cdcdfd4b8341015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7267b56e5ebccc97d4e947f7179ba2d6f949da448281fb80cdcdfd4b8341015->enter($__internal_a7267b56e5ebccc97d4e947f7179ba2d6f949da448281fb80cdcdfd4b8341015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_94574e91beb1a4e0afed9f3f34d8b21e01bb353520be95690ee9188d499dd18e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94574e91beb1a4e0afed9f3f34d8b21e01bb353520be95690ee9188d499dd18e->enter($__internal_94574e91beb1a4e0afed9f3f34d8b21e01bb353520be95690ee9188d499dd18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Groupe creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home");
        echo "\">Retour à la page d'acceuil</a>
        </li>
    </ul>
";
        
        $__internal_94574e91beb1a4e0afed9f3f34d8b21e01bb353520be95690ee9188d499dd18e->leave($__internal_94574e91beb1a4e0afed9f3f34d8b21e01bb353520be95690ee9188d499dd18e_prof);

        
        $__internal_a7267b56e5ebccc97d4e947f7179ba2d6f949da448281fb80cdcdfd4b8341015->leave($__internal_a7267b56e5ebccc97d4e947f7179ba2d6f949da448281fb80cdcdfd4b8341015_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Groupe:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle::layout.html.twig\" %}

{% block body %}
    <h1>Groupe creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('app_home') }}\">Retour à la page d'acceuil</a>
        </li>
    </ul>
{% endblock %}
", "AppBundle:Groupe:add.html.twig", "/var/www/recap/src/AppBundle/Resources/views/Groupe/add.html.twig");
    }
}
