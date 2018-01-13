<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_8a2b53e4778fc5ac4732bdd7aa61e17201561ea5f38da4ba3587984db471b2e7 extends Twig_Template
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
        $__internal_1cbc03c1e6577052335dce2738dd8a6b1f95069bc561cbf7883c2fc6630fa313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cbc03c1e6577052335dce2738dd8a6b1f95069bc561cbf7883c2fc6630fa313->enter($__internal_1cbc03c1e6577052335dce2738dd8a6b1f95069bc561cbf7883c2fc6630fa313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_171034f3a221d0a7011bb2562d0f0c9b833d3ff852419fbf2fe49779ecf8511c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_171034f3a221d0a7011bb2562d0f0c9b833d3ff852419fbf2fe49779ecf8511c->enter($__internal_171034f3a221d0a7011bb2562d0f0c9b833d3ff852419fbf2fe49779ecf8511c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_1cbc03c1e6577052335dce2738dd8a6b1f95069bc561cbf7883c2fc6630fa313->leave($__internal_1cbc03c1e6577052335dce2738dd8a6b1f95069bc561cbf7883c2fc6630fa313_prof);

        
        $__internal_171034f3a221d0a7011bb2562d0f0c9b833d3ff852419fbf2fe49779ecf8511c->leave($__internal_171034f3a221d0a7011bb2562d0f0c9b833d3ff852419fbf2fe49779ecf8511c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
