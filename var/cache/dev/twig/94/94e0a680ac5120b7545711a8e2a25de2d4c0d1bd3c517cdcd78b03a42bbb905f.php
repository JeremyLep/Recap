<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_8f3c0d1352098b19cdcad06a781b821c1cdb887f6ee128f496d5e8263af2cf1a extends Twig_Template
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
        $__internal_2f0e8c1db5fe31e6ee7838a4cac182b24656e0813dc83b772bc60c65a6f56b9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f0e8c1db5fe31e6ee7838a4cac182b24656e0813dc83b772bc60c65a6f56b9e->enter($__internal_2f0e8c1db5fe31e6ee7838a4cac182b24656e0813dc83b772bc60c65a6f56b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_bf6fbaa2d7cd197d5a2d64ea01a3112cf4969496d458aa7f3889d691a47eac10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf6fbaa2d7cd197d5a2d64ea01a3112cf4969496d458aa7f3889d691a47eac10->enter($__internal_bf6fbaa2d7cd197d5a2d64ea01a3112cf4969496d458aa7f3889d691a47eac10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_2f0e8c1db5fe31e6ee7838a4cac182b24656e0813dc83b772bc60c65a6f56b9e->leave($__internal_2f0e8c1db5fe31e6ee7838a4cac182b24656e0813dc83b772bc60c65a6f56b9e_prof);

        
        $__internal_bf6fbaa2d7cd197d5a2d64ea01a3112cf4969496d458aa7f3889d691a47eac10->leave($__internal_bf6fbaa2d7cd197d5a2d64ea01a3112cf4969496d458aa7f3889d691a47eac10_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
