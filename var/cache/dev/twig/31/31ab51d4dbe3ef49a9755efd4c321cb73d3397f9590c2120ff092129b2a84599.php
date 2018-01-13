<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_5fa02000b24410487246853792197cc68bbc58b4438c29ef7f572a1db7f9b7f7 extends Twig_Template
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
        $__internal_774e7da15108c63f770b3732871e2bb6612b835583cab02b7b645e684abdb268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_774e7da15108c63f770b3732871e2bb6612b835583cab02b7b645e684abdb268->enter($__internal_774e7da15108c63f770b3732871e2bb6612b835583cab02b7b645e684abdb268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_89a8ac9f3584877570c1b3671253127d716978b9916fc77e4a97f716f2a4e89f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89a8ac9f3584877570c1b3671253127d716978b9916fc77e4a97f716f2a4e89f->enter($__internal_89a8ac9f3584877570c1b3671253127d716978b9916fc77e4a97f716f2a4e89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_774e7da15108c63f770b3732871e2bb6612b835583cab02b7b645e684abdb268->leave($__internal_774e7da15108c63f770b3732871e2bb6612b835583cab02b7b645e684abdb268_prof);

        
        $__internal_89a8ac9f3584877570c1b3671253127d716978b9916fc77e4a97f716f2a4e89f->leave($__internal_89a8ac9f3584877570c1b3671253127d716978b9916fc77e4a97f716f2a4e89f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
