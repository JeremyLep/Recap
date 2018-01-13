<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_80015a726871a626afa695f92e33ee9778d787b4b36d3dfdccb7e8e98c7f02d3 extends Twig_Template
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
        $__internal_490215a05032d1a00a02ba545e7798dbcf59439dc104c2640492a833f3146b60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_490215a05032d1a00a02ba545e7798dbcf59439dc104c2640492a833f3146b60->enter($__internal_490215a05032d1a00a02ba545e7798dbcf59439dc104c2640492a833f3146b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_0f6fe65f1d1dadacbeae6bf2a6bc23dcbe20a0100471e28eb63768995266059a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f6fe65f1d1dadacbeae6bf2a6bc23dcbe20a0100471e28eb63768995266059a->enter($__internal_0f6fe65f1d1dadacbeae6bf2a6bc23dcbe20a0100471e28eb63768995266059a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_490215a05032d1a00a02ba545e7798dbcf59439dc104c2640492a833f3146b60->leave($__internal_490215a05032d1a00a02ba545e7798dbcf59439dc104c2640492a833f3146b60_prof);

        
        $__internal_0f6fe65f1d1dadacbeae6bf2a6bc23dcbe20a0100471e28eb63768995266059a->leave($__internal_0f6fe65f1d1dadacbeae6bf2a6bc23dcbe20a0100471e28eb63768995266059a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
