<?php

/* AppBundle:Fiche:edit.html.twig */
class __TwigTemplate_82f7154e20a4a6f4b180406cb01a89494b9efa21e23ba2689400d04eebe9c849 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Fiche:edit.html.twig", 1);
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
        $__internal_dc1ecaa04f32d2ec769e04ea78a0d94247fd32ad424aeddd2c8f00c2ef5b71b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc1ecaa04f32d2ec769e04ea78a0d94247fd32ad424aeddd2c8f00c2ef5b71b8->enter($__internal_dc1ecaa04f32d2ec769e04ea78a0d94247fd32ad424aeddd2c8f00c2ef5b71b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Fiche:edit.html.twig"));

        $__internal_0ac328489e7e81b09c22f47b60d05b84d02785bebe769d234eb6d83a518c3089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ac328489e7e81b09c22f47b60d05b84d02785bebe769d234eb6d83a518c3089->enter($__internal_0ac328489e7e81b09c22f47b60d05b84d02785bebe769d234eb6d83a518c3089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Fiche:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc1ecaa04f32d2ec769e04ea78a0d94247fd32ad424aeddd2c8f00c2ef5b71b8->leave($__internal_dc1ecaa04f32d2ec769e04ea78a0d94247fd32ad424aeddd2c8f00c2ef5b71b8_prof);

        
        $__internal_0ac328489e7e81b09c22f47b60d05b84d02785bebe769d234eb6d83a518c3089->leave($__internal_0ac328489e7e81b09c22f47b60d05b84d02785bebe769d234eb6d83a518c3089_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f50ef8918a541f3d3bd5f50cb1c24f0c4612e3ad5713e2a19751d0383febf6d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f50ef8918a541f3d3bd5f50cb1c24f0c4612e3ad5713e2a19751d0383febf6d4->enter($__internal_f50ef8918a541f3d3bd5f50cb1c24f0c4612e3ad5713e2a19751d0383febf6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d0d5ad7d398e48dd2af6cb7e531a1f8d13b6214862a24cf3dbb5a643886cbe44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d5ad7d398e48dd2af6cb7e531a1f8d13b6214862a24cf3dbb5a643886cbe44->enter($__internal_d0d5ad7d398e48dd2af6cb7e531a1f8d13b6214862a24cf3dbb5a643886cbe44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fiche edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_fiche", array("id_fiche" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new Twig_Error_Runtime('Variable "fiche" does not exist.', 13, $this->getSourceContext()); })()), "id", array()), "id_groupe" => (isset($context["id_groupe"]) || array_key_exists("id_groupe", $context) ? $context["id_groupe"] : (function () { throw new Twig_Error_Runtime('Variable "id_groupe" does not exist.', 13, $this->getSourceContext()); })()))), "html", null, true);
        echo "\">Retour à la fiche</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 16, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 18, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_d0d5ad7d398e48dd2af6cb7e531a1f8d13b6214862a24cf3dbb5a643886cbe44->leave($__internal_d0d5ad7d398e48dd2af6cb7e531a1f8d13b6214862a24cf3dbb5a643886cbe44_prof);

        
        $__internal_f50ef8918a541f3d3bd5f50cb1c24f0c4612e3ad5713e2a19751d0383febf6d4->leave($__internal_f50ef8918a541f3d3bd5f50cb1c24f0c4612e3ad5713e2a19751d0383febf6d4_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Fiche:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle::layout.html.twig\" %}

{% block body %}
    <h1>Fiche edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('app_fiche', {'id_fiche': fiche.id, 'id_groupe': id_groupe}) }}\">Retour à la fiche</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "AppBundle:Fiche:edit.html.twig", "/var/www/recap/src/AppBundle/Resources/views/Fiche/edit.html.twig");
    }
}
