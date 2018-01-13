<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_046825c153ef0a631d624977671b5e26557820ec27ec7ca9f521432ad45a536b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_2dc697f984f354240123b4a8702f87d801adbc1f902d2a797a0de2590d18d4ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dc697f984f354240123b4a8702f87d801adbc1f902d2a797a0de2590d18d4ae->enter($__internal_2dc697f984f354240123b4a8702f87d801adbc1f902d2a797a0de2590d18d4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_ec03b19225a46d461b19d406c29b1180c5d86cc3b7b1c020d7acdb9b3820bfdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec03b19225a46d461b19d406c29b1180c5d86cc3b7b1c020d7acdb9b3820bfdc->enter($__internal_ec03b19225a46d461b19d406c29b1180c5d86cc3b7b1c020d7acdb9b3820bfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dc697f984f354240123b4a8702f87d801adbc1f902d2a797a0de2590d18d4ae->leave($__internal_2dc697f984f354240123b4a8702f87d801adbc1f902d2a797a0de2590d18d4ae_prof);

        
        $__internal_ec03b19225a46d461b19d406c29b1180c5d86cc3b7b1c020d7acdb9b3820bfdc->leave($__internal_ec03b19225a46d461b19d406c29b1180c5d86cc3b7b1c020d7acdb9b3820bfdc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9ac6bbd8f5e958e02ac0b29ab1b7f36a4655f7b1d9e267ac08b8700ef3d11979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ac6bbd8f5e958e02ac0b29ab1b7f36a4655f7b1d9e267ac08b8700ef3d11979->enter($__internal_9ac6bbd8f5e958e02ac0b29ab1b7f36a4655f7b1d9e267ac08b8700ef3d11979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a9a4b55b9963304daecd180e1155a4315d4830ed8f29d4eb054eb687204fdf1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9a4b55b9963304daecd180e1155a4315d4830ed8f29d4eb054eb687204fdf1c->enter($__internal_a9a4b55b9963304daecd180e1155a4315d4830ed8f29d4eb054eb687204fdf1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a9a4b55b9963304daecd180e1155a4315d4830ed8f29d4eb054eb687204fdf1c->leave($__internal_a9a4b55b9963304daecd180e1155a4315d4830ed8f29d4eb054eb687204fdf1c_prof);

        
        $__internal_9ac6bbd8f5e958e02ac0b29ab1b7f36a4655f7b1d9e267ac08b8700ef3d11979->leave($__internal_9ac6bbd8f5e958e02ac0b29ab1b7f36a4655f7b1d9e267ac08b8700ef3d11979_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_31cc3127dde2bde296a5270f0725ba29952cdd748e8a0e18c1a689a87f41c774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31cc3127dde2bde296a5270f0725ba29952cdd748e8a0e18c1a689a87f41c774->enter($__internal_31cc3127dde2bde296a5270f0725ba29952cdd748e8a0e18c1a689a87f41c774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_809f9a1e597463c6c28fb90ccf6f2dc3134f191b4cd1aa8edf5b272c1aba5193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_809f9a1e597463c6c28fb90ccf6f2dc3134f191b4cd1aa8edf5b272c1aba5193->enter($__internal_809f9a1e597463c6c28fb90ccf6f2dc3134f191b4cd1aa8edf5b272c1aba5193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_809f9a1e597463c6c28fb90ccf6f2dc3134f191b4cd1aa8edf5b272c1aba5193->leave($__internal_809f9a1e597463c6c28fb90ccf6f2dc3134f191b4cd1aa8edf5b272c1aba5193_prof);

        
        $__internal_31cc3127dde2bde296a5270f0725ba29952cdd748e8a0e18c1a689a87f41c774->leave($__internal_31cc3127dde2bde296a5270f0725ba29952cdd748e8a0e18c1a689a87f41c774_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ac6485bfbe9ee129940580d55e18628a30db10f3ea580ca34dee65ec531060c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac6485bfbe9ee129940580d55e18628a30db10f3ea580ca34dee65ec531060c8->enter($__internal_ac6485bfbe9ee129940580d55e18628a30db10f3ea580ca34dee65ec531060c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_529c8e67b12526d1a826e5fe6ae66425bbd36160615438ff4d9776ea39eed208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_529c8e67b12526d1a826e5fe6ae66425bbd36160615438ff4d9776ea39eed208->enter($__internal_529c8e67b12526d1a826e5fe6ae66425bbd36160615438ff4d9776ea39eed208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_529c8e67b12526d1a826e5fe6ae66425bbd36160615438ff4d9776ea39eed208->leave($__internal_529c8e67b12526d1a826e5fe6ae66425bbd36160615438ff4d9776ea39eed208_prof);

        
        $__internal_ac6485bfbe9ee129940580d55e18628a30db10f3ea580ca34dee65ec531060c8->leave($__internal_ac6485bfbe9ee129940580d55e18628a30db10f3ea580ca34dee65ec531060c8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
