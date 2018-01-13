<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_7d6fe4c2cc95e211a1af60453e2936be4f2e0595bc525c954c58b90c9087860e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6499d4549fba97df5fdc9feedc489b9b38f317962d34cca681aa483f1fd4cb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6499d4549fba97df5fdc9feedc489b9b38f317962d34cca681aa483f1fd4cb2->enter($__internal_d6499d4549fba97df5fdc9feedc489b9b38f317962d34cca681aa483f1fd4cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_b96fb6fa1762d7892f533673878dcdab1f17267f95af92757b45eacd4b60b210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96fb6fa1762d7892f533673878dcdab1f17267f95af92757b45eacd4b60b210->enter($__internal_b96fb6fa1762d7892f533673878dcdab1f17267f95af92757b45eacd4b60b210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d6499d4549fba97df5fdc9feedc489b9b38f317962d34cca681aa483f1fd4cb2->leave($__internal_d6499d4549fba97df5fdc9feedc489b9b38f317962d34cca681aa483f1fd4cb2_prof);

        
        $__internal_b96fb6fa1762d7892f533673878dcdab1f17267f95af92757b45eacd4b60b210->leave($__internal_b96fb6fa1762d7892f533673878dcdab1f17267f95af92757b45eacd4b60b210_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_57eed18b578f83f4bbfdb270f047231ae023c430508efbd6e0d08ed01d3c00ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57eed18b578f83f4bbfdb270f047231ae023c430508efbd6e0d08ed01d3c00ce->enter($__internal_57eed18b578f83f4bbfdb270f047231ae023c430508efbd6e0d08ed01d3c00ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2931f58676c44dfdc767d77aed747ca18abed1de7027cac868ea21b1c55e3c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2931f58676c44dfdc767d77aed747ca18abed1de7027cac868ea21b1c55e3c25->enter($__internal_2931f58676c44dfdc767d77aed747ca18abed1de7027cac868ea21b1c55e3c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2931f58676c44dfdc767d77aed747ca18abed1de7027cac868ea21b1c55e3c25->leave($__internal_2931f58676c44dfdc767d77aed747ca18abed1de7027cac868ea21b1c55e3c25_prof);

        
        $__internal_57eed18b578f83f4bbfdb270f047231ae023c430508efbd6e0d08ed01d3c00ce->leave($__internal_57eed18b578f83f4bbfdb270f047231ae023c430508efbd6e0d08ed01d3c00ce_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
