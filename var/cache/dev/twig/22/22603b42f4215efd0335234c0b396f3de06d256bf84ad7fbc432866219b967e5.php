<?php

/* UserBundle:ChangePassword:change_password_content.html.twig */
class __TwigTemplate_1a2b41c8f1162488e6c7c863bfa79e1a999dca69816fc7b58d851410b7ab3b43 extends Twig_Template
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
        $__internal_c589d7dba86a0ef92432036cec4aef1f4530b714083d211e7642c59d97ee4a9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c589d7dba86a0ef92432036cec4aef1f4530b714083d211e7642c59d97ee4a9e->enter($__internal_c589d7dba86a0ef92432036cec4aef1f4530b714083d211e7642c59d97ee4a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:change_password_content.html.twig"));

        $__internal_4b384995dff35c9e6e20772b17ff5830e77b062f39cfc5aa3c519a5a231c49af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b384995dff35c9e6e20772b17ff5830e77b062f39cfc5aa3c519a5a231c49af->enter($__internal_4b384995dff35c9e6e20772b17ff5830e77b062f39cfc5aa3c519a5a231c49af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:change_password_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password form-horizontal")));
        echo "

";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'errors');
        echo "
\t<div class=\"form-group col-lg-12 m-0\">
\t\t";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "current_password", array()), 'label', array("label_attr" => array("class" => "pt-3 col-sm-12 control-label"), "label" => "Ancien mot de passe*"));
        echo "
\t\t";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "current_password", array()), 'errors');
        echo "
\t\t<div class=\"col-sm-12\">
\t\t  \t";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "current_password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>
\t<div class=\"form-group col-lg-12 m-0\">
\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "plainPassword", array()), 'errors');
        echo "
        <div class=\"col-sm-12\">
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "plainPassword", array()), "first", array()), 'label', array("label" => "Nouveau mot de passe*"));
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "plainPassword", array()), "first", array()), 'errors');
        echo "
    \t\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
     \t</div>
     \t<div class=\"col-sm-12\">
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "plainPassword", array()), "second", array()), 'label', array("label" => "Confirmer nouveau mot de passe*"));
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "plainPassword", array()), "second", array()), 'errors');
        echo "
        \t";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
 \t\t</div>
\t</div>
    <div class=\"col-sm-12 p-3\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Valider\" />
    </div>
";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_c589d7dba86a0ef92432036cec4aef1f4530b714083d211e7642c59d97ee4a9e->leave($__internal_c589d7dba86a0ef92432036cec4aef1f4530b714083d211e7642c59d97ee4a9e_prof);

        
        $__internal_4b384995dff35c9e6e20772b17ff5830e77b062f39cfc5aa3c519a5a231c49af->leave($__internal_4b384995dff35c9e6e20772b17ff5830e77b062f39cfc5aa3c519a5a231c49af_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:ChangePassword:change_password_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 29,  81 => 23,  77 => 22,  73 => 21,  67 => 18,  63 => 17,  59 => 16,  54 => 14,  47 => 10,  42 => 8,  38 => 7,  33 => 5,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password form-horizontal' } }) }}

{{ form_errors(form) }}
\t<div class=\"form-group col-lg-12 m-0\">
\t\t{{ form_label(form.current_password, \"Ancien mot de passe*\", {'label_attr': {'class': 'pt-3 col-sm-12 control-label'}}) }}
\t\t{{ form_errors(form.current_password) }}
\t\t<div class=\"col-sm-12\">
\t\t  \t{{ form_widget(form.current_password, {'attr': {'class': 'form-control'}}) }}
\t\t</div>
\t</div>
\t<div class=\"form-group col-lg-12 m-0\">
\t\t{{ form_errors(form.plainPassword) }}
        <div class=\"col-sm-12\">
        {{ form_label(form.plainPassword.first, \"Nouveau mot de passe*\") }}
        {{ form_errors(form.plainPassword.first) }}
    \t\t{{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control'}}) }}
     \t</div>
     \t<div class=\"col-sm-12\">
        {{ form_label(form.plainPassword.second, \"Confirmer nouveau mot de passe*\") }}
        {{ form_errors(form.plainPassword.second) }}
        \t{{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control'}}) }}
 \t\t</div>
\t</div>
    <div class=\"col-sm-12 p-3\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Valider\" />
    </div>
{{ form_end(form) }}
", "UserBundle:ChangePassword:change_password_content.html.twig", "/var/www/recap/src/UserBundle/Resources/views/ChangePassword/change_password_content.html.twig");
    }
}
