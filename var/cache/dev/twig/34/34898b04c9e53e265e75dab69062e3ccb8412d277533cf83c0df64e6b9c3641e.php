<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_3094d0c86c0ddf90c4d65fb623b82ff9c6777adcffc5e963389818a763d64e98 extends Twig_Template
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
        $__internal_23df59f0d098012d7b2bc8403348a82136795674692724a5d4e97f4316b337a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23df59f0d098012d7b2bc8403348a82136795674692724a5d4e97f4316b337a0->enter($__internal_23df59f0d098012d7b2bc8403348a82136795674692724a5d4e97f4316b337a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_b9e72b13ce042fb4c61149d0589d9930cba70360e52cec314c378ccba6bf616c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e72b13ce042fb4c61149d0589d9930cba70360e52cec314c378ccba6bf616c->enter($__internal_b9e72b13ce042fb4c61149d0589d9930cba70360e52cec314c378ccba6bf616c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_23df59f0d098012d7b2bc8403348a82136795674692724a5d4e97f4316b337a0->leave($__internal_23df59f0d098012d7b2bc8403348a82136795674692724a5d4e97f4316b337a0_prof);

        
        $__internal_b9e72b13ce042fb4c61149d0589d9930cba70360e52cec314c378ccba6bf616c->leave($__internal_b9e72b13ce042fb4c61149d0589d9930cba70360e52cec314c378ccba6bf616c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
