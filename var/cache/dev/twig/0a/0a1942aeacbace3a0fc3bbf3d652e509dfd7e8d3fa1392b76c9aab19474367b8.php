<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e18cb38f20df92ea97bbf397c6ec35ff029c04e0906df5aeaedfd779fd27a80a extends Twig_Template
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
        $__internal_930bf04e1dfa4bd822225007c305e80be03d2899ee2e0cd1ccd0859b2e7cb429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_930bf04e1dfa4bd822225007c305e80be03d2899ee2e0cd1ccd0859b2e7cb429->enter($__internal_930bf04e1dfa4bd822225007c305e80be03d2899ee2e0cd1ccd0859b2e7cb429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_814d666756adfc6d67b94c89ce2c256f4b3b9ee4f62c9d8a0ff51d53f5fe303e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_814d666756adfc6d67b94c89ce2c256f4b3b9ee4f62c9d8a0ff51d53f5fe303e->enter($__internal_814d666756adfc6d67b94c89ce2c256f4b3b9ee4f62c9d8a0ff51d53f5fe303e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_930bf04e1dfa4bd822225007c305e80be03d2899ee2e0cd1ccd0859b2e7cb429->leave($__internal_930bf04e1dfa4bd822225007c305e80be03d2899ee2e0cd1ccd0859b2e7cb429_prof);

        
        $__internal_814d666756adfc6d67b94c89ce2c256f4b3b9ee4f62c9d8a0ff51d53f5fe303e->leave($__internal_814d666756adfc6d67b94c89ce2c256f4b3b9ee4f62c9d8a0ff51d53f5fe303e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
