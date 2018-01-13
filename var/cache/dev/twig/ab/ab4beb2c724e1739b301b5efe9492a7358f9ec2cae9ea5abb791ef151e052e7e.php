<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_eb1518300a7cd714c7b241b8025194f538237a4cb5c34f326ad90a6c3ac6faa1 extends Twig_Template
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
        $__internal_5c6cc6bf7bba28227848578431c19c4efc4696ace52765cece28a77ea4c0fcae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c6cc6bf7bba28227848578431c19c4efc4696ace52765cece28a77ea4c0fcae->enter($__internal_5c6cc6bf7bba28227848578431c19c4efc4696ace52765cece28a77ea4c0fcae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_229244a7430d800b7f8276aa4b122ab391d8a61edce6e652c83b184f58f5cf13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_229244a7430d800b7f8276aa4b122ab391d8a61edce6e652c83b184f58f5cf13->enter($__internal_229244a7430d800b7f8276aa4b122ab391d8a61edce6e652c83b184f58f5cf13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_5c6cc6bf7bba28227848578431c19c4efc4696ace52765cece28a77ea4c0fcae->leave($__internal_5c6cc6bf7bba28227848578431c19c4efc4696ace52765cece28a77ea4c0fcae_prof);

        
        $__internal_229244a7430d800b7f8276aa4b122ab391d8a61edce6e652c83b184f58f5cf13->leave($__internal_229244a7430d800b7f8276aa4b122ab391d8a61edce6e652c83b184f58f5cf13_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
