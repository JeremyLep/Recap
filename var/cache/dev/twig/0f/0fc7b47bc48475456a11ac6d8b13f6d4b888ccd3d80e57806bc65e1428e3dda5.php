<?php

/* AppBundle:Groupe:edit.html.twig */
class __TwigTemplate_81ae98c9ff4f45a90923f42ae3b92fa486fa516fe9ca6336d0c04463fa6ce5e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Groupe:edit.html.twig", 1);
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
        $__internal_b175b7650e29794ef779a01a1c7f87f38b746edde6a196d7c9b5c0e490748d5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b175b7650e29794ef779a01a1c7f87f38b746edde6a196d7c9b5c0e490748d5f->enter($__internal_b175b7650e29794ef779a01a1c7f87f38b746edde6a196d7c9b5c0e490748d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Groupe:edit.html.twig"));

        $__internal_bf7aa3ec80cd571b10c6df3e53407f69ece4af5ba03ee3ec61446da473c653bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf7aa3ec80cd571b10c6df3e53407f69ece4af5ba03ee3ec61446da473c653bb->enter($__internal_bf7aa3ec80cd571b10c6df3e53407f69ece4af5ba03ee3ec61446da473c653bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Groupe:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b175b7650e29794ef779a01a1c7f87f38b746edde6a196d7c9b5c0e490748d5f->leave($__internal_b175b7650e29794ef779a01a1c7f87f38b746edde6a196d7c9b5c0e490748d5f_prof);

        
        $__internal_bf7aa3ec80cd571b10c6df3e53407f69ece4af5ba03ee3ec61446da473c653bb->leave($__internal_bf7aa3ec80cd571b10c6df3e53407f69ece4af5ba03ee3ec61446da473c653bb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_35f6ea955986841a567aaa6d11ac69ada1d54392d24b3da8a22805490ab590a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35f6ea955986841a567aaa6d11ac69ada1d54392d24b3da8a22805490ab590a5->enter($__internal_35f6ea955986841a567aaa6d11ac69ada1d54392d24b3da8a22805490ab590a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d486d9816f2f86b5476c1f9b99150b0a204794bcb2841e50b6407c0026dd748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d486d9816f2f86b5476c1f9b99150b0a204794bcb2841e50b6407c0026dd748->enter($__internal_5d486d9816f2f86b5476c1f9b99150b0a204794bcb2841e50b6407c0026dd748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Groupe edit</h1>

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_groupe", array("id_groupe" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new Twig_Error_Runtime('Variable "groupe" does not exist.', 13, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Retour au groupe</a>
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
        
        $__internal_5d486d9816f2f86b5476c1f9b99150b0a204794bcb2841e50b6407c0026dd748->leave($__internal_5d486d9816f2f86b5476c1f9b99150b0a204794bcb2841e50b6407c0026dd748_prof);

        
        $__internal_35f6ea955986841a567aaa6d11ac69ada1d54392d24b3da8a22805490ab590a5->leave($__internal_35f6ea955986841a567aaa6d11ac69ada1d54392d24b3da8a22805490ab590a5_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Groupe:edit.html.twig";
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
    <h1>Groupe edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('app_groupe', {'id_groupe': groupe.id}) }}\">Retour au groupe</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "AppBundle:Groupe:edit.html.twig", "/var/www/recap/src/AppBundle/Resources/views/Groupe/edit.html.twig");
    }
}
