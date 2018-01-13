<?php

/* AppBundle:Fiche:add.html.twig */
class __TwigTemplate_d6dd9b72483e485697ef0cf1077c2789b7cf109e5e32cb635fec08604ff2938b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Fiche:add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3dc4305f4be754c8d30d86717f143c60a74aa6dc80603f5340897a1eb6f5ad1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dc4305f4be754c8d30d86717f143c60a74aa6dc80603f5340897a1eb6f5ad1d->enter($__internal_3dc4305f4be754c8d30d86717f143c60a74aa6dc80603f5340897a1eb6f5ad1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Fiche:add.html.twig"));

        $__internal_b064565b9900ba58e38c20de87ee41f627bae25d4cb35fdc106d1b1f4542f045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b064565b9900ba58e38c20de87ee41f627bae25d4cb35fdc106d1b1f4542f045->enter($__internal_b064565b9900ba58e38c20de87ee41f627bae25d4cb35fdc106d1b1f4542f045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Fiche:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dc4305f4be754c8d30d86717f143c60a74aa6dc80603f5340897a1eb6f5ad1d->leave($__internal_3dc4305f4be754c8d30d86717f143c60a74aa6dc80603f5340897a1eb6f5ad1d_prof);

        
        $__internal_b064565b9900ba58e38c20de87ee41f627bae25d4cb35fdc106d1b1f4542f045->leave($__internal_b064565b9900ba58e38c20de87ee41f627bae25d4cb35fdc106d1b1f4542f045_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_218a02e28fb48cb39eb0e5005ddafc5d66f24f9267e666366db317478c80e0af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_218a02e28fb48cb39eb0e5005ddafc5d66f24f9267e666366db317478c80e0af->enter($__internal_218a02e28fb48cb39eb0e5005ddafc5d66f24f9267e666366db317478c80e0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b22c682e140da06a8d125c6719b48aaea4ce72836f98e77c07e212b3f9e00026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b22c682e140da06a8d125c6719b48aaea4ce72836f98e77c07e212b3f9e00026->enter($__internal_b22c682e140da06a8d125c6719b48aaea4ce72836f98e77c07e212b3f9e00026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fiche creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_groupe", array("id_groupe" => (isset($context["id_groupe"]) || array_key_exists("id_groupe", $context) ? $context["id_groupe"] : (function () { throw new Twig_Error_Runtime('Variable "id_groupe" does not exist.', 13, $this->getSourceContext()); })()))), "html", null, true);
        echo "\">Retour au groupe</a>
        </li>
    </ul>
";
        
        $__internal_b22c682e140da06a8d125c6719b48aaea4ce72836f98e77c07e212b3f9e00026->leave($__internal_b22c682e140da06a8d125c6719b48aaea4ce72836f98e77c07e212b3f9e00026_prof);

        
        $__internal_218a02e28fb48cb39eb0e5005ddafc5d66f24f9267e666366db317478c80e0af->leave($__internal_218a02e28fb48cb39eb0e5005ddafc5d66f24f9267e666366db317478c80e0af_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Fiche:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle::layout.html.twig\" %}

{% block body %}
    <h1>Fiche creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('app_groupe', {'id_groupe': id_groupe}) }}\">Retour au groupe</a>
        </li>
    </ul>
{% endblock %}
", "AppBundle:Fiche:add.html.twig", "/var/www/recap/src/AppBundle/Resources/views/Fiche/add.html.twig");
    }
}
