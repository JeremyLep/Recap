<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_86b3e37b1c44280ac9a3bf16cd63e8f152a37caa474ba47a8c9731731badb466 extends Twig_Template
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
        $__internal_f93751a3e1b4b808bfe6b87d47083b09d729f7f0d1eaa2b1dc7bf1a58a91610f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f93751a3e1b4b808bfe6b87d47083b09d729f7f0d1eaa2b1dc7bf1a58a91610f->enter($__internal_f93751a3e1b4b808bfe6b87d47083b09d729f7f0d1eaa2b1dc7bf1a58a91610f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_514dab67896ab0fdf22a902f6604b6efdff761bad286c1eb67c9a03756d6f077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_514dab67896ab0fdf22a902f6604b6efdff761bad286c1eb67c9a03756d6f077->enter($__internal_514dab67896ab0fdf22a902f6604b6efdff761bad286c1eb67c9a03756d6f077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f93751a3e1b4b808bfe6b87d47083b09d729f7f0d1eaa2b1dc7bf1a58a91610f->leave($__internal_f93751a3e1b4b808bfe6b87d47083b09d729f7f0d1eaa2b1dc7bf1a58a91610f_prof);

        
        $__internal_514dab67896ab0fdf22a902f6604b6efdff761bad286c1eb67c9a03756d6f077->leave($__internal_514dab67896ab0fdf22a902f6604b6efdff761bad286c1eb67c9a03756d6f077_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
