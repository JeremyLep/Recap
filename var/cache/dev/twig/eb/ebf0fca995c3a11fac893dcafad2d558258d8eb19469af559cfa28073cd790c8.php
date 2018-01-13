<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_b256d4f01f8e590294118baac02b72000ec67fa8d3d11ea8cf651a5b71229bbe extends Twig_Template
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
        $__internal_48542b7587dbef19cc329f0fc7c217683ed61882def62f502945a8fb383d88e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48542b7587dbef19cc329f0fc7c217683ed61882def62f502945a8fb383d88e5->enter($__internal_48542b7587dbef19cc329f0fc7c217683ed61882def62f502945a8fb383d88e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_7b810510e59f5ee3a5d3ff676c4182ee97bfe318482ed342dc32eddad38f2b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b810510e59f5ee3a5d3ff676c4182ee97bfe318482ed342dc32eddad38f2b60->enter($__internal_7b810510e59f5ee3a5d3ff676c4182ee97bfe318482ed342dc32eddad38f2b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_48542b7587dbef19cc329f0fc7c217683ed61882def62f502945a8fb383d88e5->leave($__internal_48542b7587dbef19cc329f0fc7c217683ed61882def62f502945a8fb383d88e5_prof);

        
        $__internal_7b810510e59f5ee3a5d3ff676c4182ee97bfe318482ed342dc32eddad38f2b60->leave($__internal_7b810510e59f5ee3a5d3ff676c4182ee97bfe318482ed342dc32eddad38f2b60_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
