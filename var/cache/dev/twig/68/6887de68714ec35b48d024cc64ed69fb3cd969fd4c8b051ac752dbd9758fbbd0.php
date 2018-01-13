<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_c8643b347df3fef17dfc9815281906922069fc2c18335eb9b085b2abf4723e40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_691733c4d5a60f2d7f090b02e6230f710883ea99a0b01881273ffdd55a3a5912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_691733c4d5a60f2d7f090b02e6230f710883ea99a0b01881273ffdd55a3a5912->enter($__internal_691733c4d5a60f2d7f090b02e6230f710883ea99a0b01881273ffdd55a3a5912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_60c5a2ea4ce2af33859114edd0699e925a4f8b4e68829bf530173956b6e4e284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c5a2ea4ce2af33859114edd0699e925a4f8b4e68829bf530173956b6e4e284->enter($__internal_60c5a2ea4ce2af33859114edd0699e925a4f8b4e68829bf530173956b6e4e284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_691733c4d5a60f2d7f090b02e6230f710883ea99a0b01881273ffdd55a3a5912->leave($__internal_691733c4d5a60f2d7f090b02e6230f710883ea99a0b01881273ffdd55a3a5912_prof);

        
        $__internal_60c5a2ea4ce2af33859114edd0699e925a4f8b4e68829bf530173956b6e4e284->leave($__internal_60c5a2ea4ce2af33859114edd0699e925a4f8b4e68829bf530173956b6e4e284_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_398892da8a19de9732b441cfa7c604bc7396a9f143faa61de31873b54b342f84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_398892da8a19de9732b441cfa7c604bc7396a9f143faa61de31873b54b342f84->enter($__internal_398892da8a19de9732b441cfa7c604bc7396a9f143faa61de31873b54b342f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a342dbce2d234e1c84c6a69a1ccb5ef0746a04afa89e130eb8d92947fe5874c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a342dbce2d234e1c84c6a69a1ccb5ef0746a04afa89e130eb8d92947fe5874c9->enter($__internal_a342dbce2d234e1c84c6a69a1ccb5ef0746a04afa89e130eb8d92947fe5874c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a342dbce2d234e1c84c6a69a1ccb5ef0746a04afa89e130eb8d92947fe5874c9->leave($__internal_a342dbce2d234e1c84c6a69a1ccb5ef0746a04afa89e130eb8d92947fe5874c9_prof);

        
        $__internal_398892da8a19de9732b441cfa7c604bc7396a9f143faa61de31873b54b342f84->leave($__internal_398892da8a19de9732b441cfa7c604bc7396a9f143faa61de31873b54b342f84_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d5adb1b88947095eaa5cca9f1d97083ac79b93adfa6af31abdfd594cf7b12da8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5adb1b88947095eaa5cca9f1d97083ac79b93adfa6af31abdfd594cf7b12da8->enter($__internal_d5adb1b88947095eaa5cca9f1d97083ac79b93adfa6af31abdfd594cf7b12da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d6a0f43cc11f38a0e2d6a6d8cecf9af2b880eec0347cf35475a0d64f2c83d60a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a0f43cc11f38a0e2d6a6d8cecf9af2b880eec0347cf35475a0d64f2c83d60a->enter($__internal_d6a0f43cc11f38a0e2d6a6d8cecf9af2b880eec0347cf35475a0d64f2c83d60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d6a0f43cc11f38a0e2d6a6d8cecf9af2b880eec0347cf35475a0d64f2c83d60a->leave($__internal_d6a0f43cc11f38a0e2d6a6d8cecf9af2b880eec0347cf35475a0d64f2c83d60a_prof);

        
        $__internal_d5adb1b88947095eaa5cca9f1d97083ac79b93adfa6af31abdfd594cf7b12da8->leave($__internal_d5adb1b88947095eaa5cca9f1d97083ac79b93adfa6af31abdfd594cf7b12da8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e2fe861cf7f195710e3cd69ec3f551fc0437ae9ed57fba9af29e469256b18ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2fe861cf7f195710e3cd69ec3f551fc0437ae9ed57fba9af29e469256b18ff7->enter($__internal_e2fe861cf7f195710e3cd69ec3f551fc0437ae9ed57fba9af29e469256b18ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_90fe0337ed8466b7c7fa8213bf636404dc45506472c3e2de91a587e824c0d5d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90fe0337ed8466b7c7fa8213bf636404dc45506472c3e2de91a587e824c0d5d9->enter($__internal_90fe0337ed8466b7c7fa8213bf636404dc45506472c3e2de91a587e824c0d5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_90fe0337ed8466b7c7fa8213bf636404dc45506472c3e2de91a587e824c0d5d9->leave($__internal_90fe0337ed8466b7c7fa8213bf636404dc45506472c3e2de91a587e824c0d5d9_prof);

        
        $__internal_e2fe861cf7f195710e3cd69ec3f551fc0437ae9ed57fba9af29e469256b18ff7->leave($__internal_e2fe861cf7f195710e3cd69ec3f551fc0437ae9ed57fba9af29e469256b18ff7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
