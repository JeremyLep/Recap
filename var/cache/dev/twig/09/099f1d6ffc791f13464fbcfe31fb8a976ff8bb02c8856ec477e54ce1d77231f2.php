<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_53ceb2b8463957047317119733a88802cddee68efc9c8c4664a004b08a77b763 extends Twig_Template
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
        $__internal_cb4d2948eddb4b57280eb99d5d2964090fbb7b58ec283cb1863f300e1a22d598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb4d2948eddb4b57280eb99d5d2964090fbb7b58ec283cb1863f300e1a22d598->enter($__internal_cb4d2948eddb4b57280eb99d5d2964090fbb7b58ec283cb1863f300e1a22d598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $__internal_a04c7a372e4ff9e2211cd9d408f6f28c0a4ed52e9b35c90a6639c38a5760fb94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a04c7a372e4ff9e2211cd9d408f6f28c0a4ed52e9b35c90a6639c38a5760fb94->enter($__internal_a04c7a372e4ff9e2211cd9d408f6f28c0a4ed52e9b35c90a6639c38a5760fb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        echo "\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
        
        $__internal_cb4d2948eddb4b57280eb99d5d2964090fbb7b58ec283cb1863f300e1a22d598->leave($__internal_cb4d2948eddb4b57280eb99d5d2964090fbb7b58ec283cb1863f300e1a22d598_prof);

        
        $__internal_a04c7a372e4ff9e2211cd9d408f6f28c0a4ed52e9b35c90a6639c38a5760fb94->leave($__internal_a04c7a372e4ff9e2211cd9d408f6f28c0a4ed52e9b35c90a6639c38a5760fb94_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  34 => 5,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <title>An Error Occurred: {{ status_text }}</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"{{ status_code }} {{ status_text }}\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
", "TwigBundle:Exception:error.html.twig", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.html.twig");
    }
}
