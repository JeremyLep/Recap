<?php

/* UserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_b15496e2a81aba9765b118ff31acfb14c9777f71f420526039da6ca6d2af0eb3 extends Twig_Template
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
        $__internal_45397b20a82050146a7186bb40784daf1f3c794374308e1ef93f88fe76ad9e85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45397b20a82050146a7186bb40784daf1f3c794374308e1ef93f88fe76ad9e85->enter($__internal_45397b20a82050146a7186bb40784daf1f3c794374308e1ef93f88fe76ad9e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:reset_content.html.twig"));

        $__internal_44fd6bace0817263fe338ff98d5ca3a8c8be7c784b6c92ecb4cf268d25bd4c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44fd6bace0817263fe338ff98d5ca3a8c8be7c784b6c92ecb4cf268d25bd4c45->enter($__internal_44fd6bace0817263fe338ff98d5ca3a8c8be7c784b6c92ecb4cf268d25bd4c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:reset_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 3, $this->getSourceContext()); })()))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Valider\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_45397b20a82050146a7186bb40784daf1f3c794374308e1ef93f88fe76ad9e85->leave($__internal_45397b20a82050146a7186bb40784daf1f3c794374308e1ef93f88fe76ad9e85_prof);

        
        $__internal_44fd6bace0817263fe338ff98d5ca3a8c8be7c784b6c92ecb4cf268d25bd4c45->leave($__internal_44fd6bace0817263fe338ff98d5ca3a8c8be7c784b6c92ecb4cf268d25bd4c45_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  32 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}
    {{ form_widget(form) }}
    <div>
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Valider\" />
    </div>
{{ form_end(form) }}
", "UserBundle:Resetting:reset_content.html.twig", "/var/www/recap/src/UserBundle/Resources/views/Resetting/reset_content.html.twig");
    }
}
