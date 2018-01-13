<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_4854e009ef63597ad52a48a37889002db8f24cf807005fde846cd86b0212739b extends Twig_Template
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
        $__internal_fab9c7c05ab25ca50a4e0fda736e1f223052b3513fa71df5a59956e28194e875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fab9c7c05ab25ca50a4e0fda736e1f223052b3513fa71df5a59956e28194e875->enter($__internal_fab9c7c05ab25ca50a4e0fda736e1f223052b3513fa71df5a59956e28194e875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_9910d0f11f2df59c34ef7c145880df1ca13fcb074ce2449787b9fa64b57bc662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9910d0f11f2df59c34ef7c145880df1ca13fcb074ce2449787b9fa64b57bc662->enter($__internal_9910d0f11f2df59c34ef7c145880df1ca13fcb074ce2449787b9fa64b57bc662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_fab9c7c05ab25ca50a4e0fda736e1f223052b3513fa71df5a59956e28194e875->leave($__internal_fab9c7c05ab25ca50a4e0fda736e1f223052b3513fa71df5a59956e28194e875_prof);

        
        $__internal_9910d0f11f2df59c34ef7c145880df1ca13fcb074ce2449787b9fa64b57bc662->leave($__internal_9910d0f11f2df59c34ef7c145880df1ca13fcb074ce2449787b9fa64b57bc662_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
