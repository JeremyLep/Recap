<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c716e2597b6b8fedc59bc7e56c7177cc72c44ad8e2f51d3a60fce32c0c20ca60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_576c8cf067a634cd2b8ec6fe0f31cd6efaa70a121b013e5442d3e01e487d7395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_576c8cf067a634cd2b8ec6fe0f31cd6efaa70a121b013e5442d3e01e487d7395->enter($__internal_576c8cf067a634cd2b8ec6fe0f31cd6efaa70a121b013e5442d3e01e487d7395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_6aebb28274177c996bb17b3f5355eecdb205410f18cc75f3ffe8f9800f64d202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aebb28274177c996bb17b3f5355eecdb205410f18cc75f3ffe8f9800f64d202->enter($__internal_6aebb28274177c996bb17b3f5355eecdb205410f18cc75f3ffe8f9800f64d202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_576c8cf067a634cd2b8ec6fe0f31cd6efaa70a121b013e5442d3e01e487d7395->leave($__internal_576c8cf067a634cd2b8ec6fe0f31cd6efaa70a121b013e5442d3e01e487d7395_prof);

        
        $__internal_6aebb28274177c996bb17b3f5355eecdb205410f18cc75f3ffe8f9800f64d202->leave($__internal_6aebb28274177c996bb17b3f5355eecdb205410f18cc75f3ffe8f9800f64d202_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8ed2d9af6f1b0f1cce060be681065b7c16a715d40efc6aaeac295f2180ff949c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ed2d9af6f1b0f1cce060be681065b7c16a715d40efc6aaeac295f2180ff949c->enter($__internal_8ed2d9af6f1b0f1cce060be681065b7c16a715d40efc6aaeac295f2180ff949c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6fd4d5b66e2d0731bccd1afb4df72b9e2dcc5e620be76cf6c2237a70b2ec24a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd4d5b66e2d0731bccd1afb4df72b9e2dcc5e620be76cf6c2237a70b2ec24a7->enter($__internal_6fd4d5b66e2d0731bccd1afb4df72b9e2dcc5e620be76cf6c2237a70b2ec24a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_6fd4d5b66e2d0731bccd1afb4df72b9e2dcc5e620be76cf6c2237a70b2ec24a7->leave($__internal_6fd4d5b66e2d0731bccd1afb4df72b9e2dcc5e620be76cf6c2237a70b2ec24a7_prof);

        
        $__internal_8ed2d9af6f1b0f1cce060be681065b7c16a715d40efc6aaeac295f2180ff949c->leave($__internal_8ed2d9af6f1b0f1cce060be681065b7c16a715d40efc6aaeac295f2180ff949c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d465d0d5acb2210372cc9095cdade34fadfce94d800bfe9eeaf43674980eefc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d465d0d5acb2210372cc9095cdade34fadfce94d800bfe9eeaf43674980eefc1->enter($__internal_d465d0d5acb2210372cc9095cdade34fadfce94d800bfe9eeaf43674980eefc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa68c13027641d3d5a3059083efebb0c73509468b69b9303456e0dcecdd14a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa68c13027641d3d5a3059083efebb0c73509468b69b9303456e0dcecdd14a99->enter($__internal_fa68c13027641d3d5a3059083efebb0c73509468b69b9303456e0dcecdd14a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_fa68c13027641d3d5a3059083efebb0c73509468b69b9303456e0dcecdd14a99->leave($__internal_fa68c13027641d3d5a3059083efebb0c73509468b69b9303456e0dcecdd14a99_prof);

        
        $__internal_d465d0d5acb2210372cc9095cdade34fadfce94d800bfe9eeaf43674980eefc1->leave($__internal_d465d0d5acb2210372cc9095cdade34fadfce94d800bfe9eeaf43674980eefc1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
