<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_7772792518338432a173d9298be52d5ae4987b359fd497a8514b72b324407db5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce8a4893b184a2da5da6a6802b072ad6bb8cf6e692b30e5eebf14821a3eb7466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce8a4893b184a2da5da6a6802b072ad6bb8cf6e692b30e5eebf14821a3eb7466->enter($__internal_ce8a4893b184a2da5da6a6802b072ad6bb8cf6e692b30e5eebf14821a3eb7466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_fe1d94973e304a33135c07432c8811fb3851ea099a7b55b57808a6089ed779a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe1d94973e304a33135c07432c8811fb3851ea099a7b55b57808a6089ed779a4->enter($__internal_fe1d94973e304a33135c07432c8811fb3851ea099a7b55b57808a6089ed779a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce8a4893b184a2da5da6a6802b072ad6bb8cf6e692b30e5eebf14821a3eb7466->leave($__internal_ce8a4893b184a2da5da6a6802b072ad6bb8cf6e692b30e5eebf14821a3eb7466_prof);

        
        $__internal_fe1d94973e304a33135c07432c8811fb3851ea099a7b55b57808a6089ed779a4->leave($__internal_fe1d94973e304a33135c07432c8811fb3851ea099a7b55b57808a6089ed779a4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4e5d2890f5ecf988bad9b9e5dbff668a06805d98519740f94065ef95eb45009e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e5d2890f5ecf988bad9b9e5dbff668a06805d98519740f94065ef95eb45009e->enter($__internal_4e5d2890f5ecf988bad9b9e5dbff668a06805d98519740f94065ef95eb45009e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bd9b1742155270cacebd6e9279d9818b36390f1168b3b796de6d5815ed35a692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd9b1742155270cacebd6e9279d9818b36390f1168b3b796de6d5815ed35a692->enter($__internal_bd9b1742155270cacebd6e9279d9818b36390f1168b3b796de6d5815ed35a692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_bd9b1742155270cacebd6e9279d9818b36390f1168b3b796de6d5815ed35a692->leave($__internal_bd9b1742155270cacebd6e9279d9818b36390f1168b3b796de6d5815ed35a692_prof);

        
        $__internal_4e5d2890f5ecf988bad9b9e5dbff668a06805d98519740f94065ef95eb45009e->leave($__internal_4e5d2890f5ecf988bad9b9e5dbff668a06805d98519740f94065ef95eb45009e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
