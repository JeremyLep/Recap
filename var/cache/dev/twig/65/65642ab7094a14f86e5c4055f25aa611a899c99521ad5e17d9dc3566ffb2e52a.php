<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_bab2e0e8157010808e5d51810d2ae1e3ad056f8b96d055ed542fb263aeef6560 extends Twig_Template
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
        $__internal_401be1464abbfea7be5054d9fbf019cfb5eb7d176ebbb8ef40fcc1392b472b86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_401be1464abbfea7be5054d9fbf019cfb5eb7d176ebbb8ef40fcc1392b472b86->enter($__internal_401be1464abbfea7be5054d9fbf019cfb5eb7d176ebbb8ef40fcc1392b472b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_be74ade592edf890bb8e7190f769814bc689490b8951b73e171907f83e3a6b46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be74ade592edf890bb8e7190f769814bc689490b8951b73e171907f83e3a6b46->enter($__internal_be74ade592edf890bb8e7190f769814bc689490b8951b73e171907f83e3a6b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_401be1464abbfea7be5054d9fbf019cfb5eb7d176ebbb8ef40fcc1392b472b86->leave($__internal_401be1464abbfea7be5054d9fbf019cfb5eb7d176ebbb8ef40fcc1392b472b86_prof);

        
        $__internal_be74ade592edf890bb8e7190f769814bc689490b8951b73e171907f83e3a6b46->leave($__internal_be74ade592edf890bb8e7190f769814bc689490b8951b73e171907f83e3a6b46_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
