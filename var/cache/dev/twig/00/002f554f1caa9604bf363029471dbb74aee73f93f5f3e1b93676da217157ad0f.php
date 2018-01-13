<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_7920bac04ab5459e9ee37b8034d7db2ff54296cf67e58aa8b646e975cadb3828 extends Twig_Template
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
        $__internal_90d1e5627968429b1a738b1c0eff04d909f113d9c933309735e6e4c4cd8532cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90d1e5627968429b1a738b1c0eff04d909f113d9c933309735e6e4c4cd8532cc->enter($__internal_90d1e5627968429b1a738b1c0eff04d909f113d9c933309735e6e4c4cd8532cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_08882df68baa548dd9aef35ea1e9792cda1f014af0b0ed66aa367feab19992f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08882df68baa548dd9aef35ea1e9792cda1f014af0b0ed66aa367feab19992f0->enter($__internal_08882df68baa548dd9aef35ea1e9792cda1f014af0b0ed66aa367feab19992f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_90d1e5627968429b1a738b1c0eff04d909f113d9c933309735e6e4c4cd8532cc->leave($__internal_90d1e5627968429b1a738b1c0eff04d909f113d9c933309735e6e4c4cd8532cc_prof);

        
        $__internal_08882df68baa548dd9aef35ea1e9792cda1f014af0b0ed66aa367feab19992f0->leave($__internal_08882df68baa548dd9aef35ea1e9792cda1f014af0b0ed66aa367feab19992f0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
