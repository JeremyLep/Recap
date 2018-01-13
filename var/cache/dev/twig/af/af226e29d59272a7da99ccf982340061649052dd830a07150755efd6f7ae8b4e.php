<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_27b53f99cf710909c219bf90305ddec020065d307dd41099c20b9e3b82d4f176 extends Twig_Template
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
        $__internal_e6ef700af016f0b7471b2c1a337ad43c1730d92a8e83634f3f5f2036a5bb5e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6ef700af016f0b7471b2c1a337ad43c1730d92a8e83634f3f5f2036a5bb5e09->enter($__internal_e6ef700af016f0b7471b2c1a337ad43c1730d92a8e83634f3f5f2036a5bb5e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_fe340930a669a4cf9c09b1f7da3594501123b7ca779eaee2a918245f3dbba90a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe340930a669a4cf9c09b1f7da3594501123b7ca779eaee2a918245f3dbba90a->enter($__internal_fe340930a669a4cf9c09b1f7da3594501123b7ca779eaee2a918245f3dbba90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_e6ef700af016f0b7471b2c1a337ad43c1730d92a8e83634f3f5f2036a5bb5e09->leave($__internal_e6ef700af016f0b7471b2c1a337ad43c1730d92a8e83634f3f5f2036a5bb5e09_prof);

        
        $__internal_fe340930a669a4cf9c09b1f7da3594501123b7ca779eaee2a918245f3dbba90a->leave($__internal_fe340930a669a4cf9c09b1f7da3594501123b7ca779eaee2a918245f3dbba90a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
