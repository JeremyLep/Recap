<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_06479fe412841b0993ff73695c0849a2f5c571e57b71be4e76e254ab387a4efd extends Twig_Template
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
        $__internal_be3018073ce15e482450065dfca346f05a74c4b32882dfacd5800c61061f291e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be3018073ce15e482450065dfca346f05a74c4b32882dfacd5800c61061f291e->enter($__internal_be3018073ce15e482450065dfca346f05a74c4b32882dfacd5800c61061f291e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_ee84f495a858fddccc98465ecec30269b398cfbe66263b6dd9d19506ea5d3247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee84f495a858fddccc98465ecec30269b398cfbe66263b6dd9d19506ea5d3247->enter($__internal_ee84f495a858fddccc98465ecec30269b398cfbe66263b6dd9d19506ea5d3247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_be3018073ce15e482450065dfca346f05a74c4b32882dfacd5800c61061f291e->leave($__internal_be3018073ce15e482450065dfca346f05a74c4b32882dfacd5800c61061f291e_prof);

        
        $__internal_ee84f495a858fddccc98465ecec30269b398cfbe66263b6dd9d19506ea5d3247->leave($__internal_ee84f495a858fddccc98465ecec30269b398cfbe66263b6dd9d19506ea5d3247_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
