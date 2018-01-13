<?php

/* FOSUserBundle:Group:new_content.html.twig */
class __TwigTemplate_56b1fd7cc997f1e73512430edde6fdb24c014ea62d5a14a92605859c7d2fd667 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1bb218f65144bd25a5acd853096c14cfd3a785d12f96495957ee75d4d0a80bf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bb218f65144bd25a5acd853096c14cfd3a785d12f96495957ee75d4d0a80bf8->enter($__internal_1bb218f65144bd25a5acd853096c14cfd3a785d12f96495957ee75d4d0a80bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        $__internal_4398409553af3f969f0890d0aa0c7a860588073bbb87bbf34e9f74e6f0ef7bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4398409553af3f969f0890d0aa0c7a860588073bbb87bbf34e9f74e6f0ef7bb9->enter($__internal_4398409553af3f969f0890d0aa0c7a860588073bbb87bbf34e9f74e6f0ef7bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new"), "attr" => array("class" => "fos_user_group_new")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_1bb218f65144bd25a5acd853096c14cfd3a785d12f96495957ee75d4d0a80bf8->leave($__internal_1bb218f65144bd25a5acd853096c14cfd3a785d12f96495957ee75d4d0a80bf8_prof);

        
        $__internal_4398409553af3f969f0890d0aa0c7a860588073bbb87bbf34e9f74e6f0ef7bb9->leave($__internal_4398409553af3f969f0890d0aa0c7a860588073bbb87bbf34e9f74e6f0ef7bb9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_group_new'), 'attr': { 'class': 'fos_user_group_new' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Group:new_content.html.twig", "/var/www/recap/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new_content.html.twig");
    }
}
