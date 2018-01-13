<?php

/* CaptchaBundle::captcha.html.twig */
class __TwigTemplate_5ddd9031e9fc24743e3023eb564f5e9f089706ddd0730f925dc4134a8597750f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'captcha_widget' => array($this, 'block_captcha_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b31f2cd2520804ca8548ba9e7c7094d1ff7eadab70ca036853bcf9c48502cce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b31f2cd2520804ca8548ba9e7c7094d1ff7eadab70ca036853bcf9c48502cce->enter($__internal_0b31f2cd2520804ca8548ba9e7c7094d1ff7eadab70ca036853bcf9c48502cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaptchaBundle::captcha.html.twig"));

        $__internal_a7b3e6fa4db02d95433faa11127ff8ef2f34b49a90bfaccc4956bc1a1a2e45ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b3e6fa4db02d95433faa11127ff8ef2f34b49a90bfaccc4956bc1a1a2e45ac->enter($__internal_a7b3e6fa4db02d95433faa11127ff8ef2f34b49a90bfaccc4956bc1a1a2e45ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaptchaBundle::captcha.html.twig"));

        // line 1
        $this->displayBlock('captcha_widget', $context, $blocks);
        
        $__internal_0b31f2cd2520804ca8548ba9e7c7094d1ff7eadab70ca036853bcf9c48502cce->leave($__internal_0b31f2cd2520804ca8548ba9e7c7094d1ff7eadab70ca036853bcf9c48502cce_prof);

        
        $__internal_a7b3e6fa4db02d95433faa11127ff8ef2f34b49a90bfaccc4956bc1a1a2e45ac->leave($__internal_a7b3e6fa4db02d95433faa11127ff8ef2f34b49a90bfaccc4956bc1a1a2e45ac_prof);

    }

    public function block_captcha_widget($context, array $blocks = array())
    {
        $__internal_3059b5b4356bdbac2a6270dceed237d8b5cbb528d06704e0dd4d86b01446bc25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3059b5b4356bdbac2a6270dceed237d8b5cbb528d06704e0dd4d86b01446bc25->enter($__internal_3059b5b4356bdbac2a6270dceed237d8b5cbb528d06704e0dd4d86b01446bc25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "captcha_widget"));

        $__internal_78976b72d3e8ea8278e91f7f7685cc6ef247eb27d2a1bcb4cd2e699440390f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78976b72d3e8ea8278e91f7f7685cc6ef247eb27d2a1bcb4cd2e699440390f51->enter($__internal_78976b72d3e8ea8278e91f7f7685cc6ef247eb27d2a1bcb4cd2e699440390f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "captcha_widget"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        if ((isset($context["addLayoutStylesheetInclude"]) || array_key_exists("addLayoutStylesheetInclude", $context) ? $context["addLayoutStylesheetInclude"] : (function () { throw new Twig_Error_Runtime('Variable "addLayoutStylesheetInclude" does not exist.', 3, $this->getSourceContext()); })())) {
            // line 4
            echo "            <link href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("captcha_layout_stylesheet_url");
            echo "\" rel=\"stylesheet\" />
        ";
        }
        // line 6
        echo "
        ";
        // line 7
        echo (isset($context["captcha_html"]) || array_key_exists("captcha_html", $context) ? $context["captcha_html"] : (function () { throw new Twig_Error_Runtime('Variable "captcha_html" does not exist.', 7, $this->getSourceContext()); })());
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'widget', array("id" => (isset($context["user_input_id"]) || array_key_exists("user_input_id", $context) ? $context["user_input_id"] : (function () { throw new Twig_Error_Runtime('Variable "user_input_id" does not exist.', 8, $this->getSourceContext()); })()), "value" => ""));
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_78976b72d3e8ea8278e91f7f7685cc6ef247eb27d2a1bcb4cd2e699440390f51->leave($__internal_78976b72d3e8ea8278e91f7f7685cc6ef247eb27d2a1bcb4cd2e699440390f51_prof);

        
        $__internal_3059b5b4356bdbac2a6270dceed237d8b5cbb528d06704e0dd4d86b01446bc25->leave($__internal_3059b5b4356bdbac2a6270dceed237d8b5cbb528d06704e0dd4d86b01446bc25_prof);

    }

    public function getTemplateName()
    {
        return "CaptchaBundle::captcha.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  59 => 7,  56 => 6,  50 => 4,  47 => 3,  44 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block captcha_widget %}
    {% spaceless %}
        {% if addLayoutStylesheetInclude %}
            <link href=\"{{ path('captcha_layout_stylesheet_url') }}\" rel=\"stylesheet\" />
        {% endif %}

        {{ captcha_html | raw }}
        {{ form_widget(form, { 'id': user_input_id, 'value': '' }) }}
    {% endspaceless %}
{% endblock %}", "CaptchaBundle::captcha.html.twig", "/var/www/recap/vendor/captcha-com/symfony-captcha-bundle/Resources/views/captcha.html.twig");
    }
}
