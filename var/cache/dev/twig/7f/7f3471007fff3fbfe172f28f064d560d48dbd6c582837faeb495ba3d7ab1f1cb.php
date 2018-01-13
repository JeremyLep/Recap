<?php

/* UserBundle:Registration:register_content.html.twig */
class __TwigTemplate_35fe3d38d56a98a19bc3f28279d86dc9563c5e1c42a7cad8f88ef9dd77ac041f extends Twig_Template
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
        $__internal_a9e80d461c48de721ab2a29ad3a218029a533552f98b12cf5129f523479bf308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9e80d461c48de721ab2a29ad3a218029a533552f98b12cf5129f523479bf308->enter($__internal_a9e80d461c48de721ab2a29ad3a218029a533552f98b12cf5129f523479bf308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:register_content.html.twig"));

        $__internal_37975449a094d7ae286ac8a5c542e655fabcee4b90daa4f9b6e9fba0089a5651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37975449a094d7ae286ac8a5c542e655fabcee4b90daa4f9b6e9fba0089a5651->enter($__internal_37975449a094d7ae286ac8a5c542e655fabcee4b90daa4f9b6e9fba0089a5651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register form-horizontal")));
        echo "
\t";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'errors');
        echo "
\t<div class=\"form-group col-lg-12 m-0\">
\t\t";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "username", array()), 'label', array("label_attr" => array("class" => "pt-3 col-sm-12 control-label"), "label" => "Identifiant*"));
        echo "
\t\t";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "username", array()), 'errors');
        echo "
\t\t<div class=\"col-sm-12\">
\t\t  \t";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>

\t\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "email", array()), 'label', array("label_attr" => array("class" => "pt-3 col-sm-12 control-label"), "label" => "Email*"));
        echo "
\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "email", array()), 'errors');
        echo "
\t\t<div class=\"col-sm-12\">
\t\t  \t";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>

\t\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "plainPassword", array()), 'label', array("label_attr" => array("class" => "pt-3 col-sm-12 control-label"), "label" => "Mot de passe*"));
        echo "
\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), "plainPassword", array()), 'errors');
        echo "
\t\t<div class=\"col-sm-12\">
\t\t  \t";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "plainPassword", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>
\t<div class=\"form-group col-lg-12 m-0\">
\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "nom", array()), 'label', array("label_attr" => array("class" => "pt-3 col-sm-12 control-label"), "label" => "Nom"));
        echo "
\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), "nom", array()), 'errors');
        echo "
\t\t<div class=\"col-sm-12\">
\t\t  \t";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>

\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "prenom", array()), 'label', array("label_attr" => array("class" => "pt-3 col-sm-12 control-label"), "label" => "Prénom"));
        echo "
\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), "prenom", array()), 'errors');
        echo "
\t\t<div class=\"col-sm-12\">
\t\t  \t";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>

\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), "avatar", array()), 'label', array("label_attr" => array("class" => "pt-3 col-sm-12 control-label"), "label" => "Avatar"));
        echo "
\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), "avatar", array()), 'errors');
        echo "
\t\t<div class=\"col-sm-12\">
\t\t  \t";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), "avatar", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>

\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), "age", array()), 'label', array("label_attr" => array("class" => "pt-3 col-sm-12 control-label"), "label" => "Age"));
        echo "
\t\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->getSourceContext()); })()), "age", array()), 'errors');
        echo "
\t\t<div class=\"col-sm-12\">
\t\t  \t";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->getSourceContext()); })()), "age", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>

\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->getSourceContext()); })()), "ville", array()), 'label', array("label_attr" => array("class" => "pt-3 col-sm-12 control-label"), "label" => "Ville"));
        echo "
\t\t";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), "ville", array()), 'errors');
        echo "
\t\t<div class=\"col-sm-12\">
\t\t  \t";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->getSourceContext()); })()), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>

\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->getSourceContext()); })()), "ville", array()), 'label', array("label_attr" => array("class" => "pt-3 col-sm-12 control-label"), "label" => "Captcha"));
        echo "
\t\t";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->getSourceContext()); })()), "captchaCode", array()), 'errors');
        echo "
\t\t<div class=\"col-sm-12\">
\t\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->getSourceContext()); })()), "captchaCode", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>

\t\t<div class=\"col-lg-12 p-2\">
\t\t\t";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary", "value" => "Valider")));
        echo "
\t\t</div>
\t</div>
\t";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->getSourceContext()); })()), 'rest');
        echo "
";
        // line 66
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->getSourceContext()); })()), 'form_end');
        echo "

";
        
        $__internal_a9e80d461c48de721ab2a29ad3a218029a533552f98b12cf5129f523479bf308->leave($__internal_a9e80d461c48de721ab2a29ad3a218029a533552f98b12cf5129f523479bf308_prof);

        
        $__internal_37975449a094d7ae286ac8a5c542e655fabcee4b90daa4f9b6e9fba0089a5651->leave($__internal_37975449a094d7ae286ac8a5c542e655fabcee4b90daa4f9b6e9fba0089a5651_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 66,  180 => 65,  174 => 62,  167 => 58,  162 => 56,  158 => 55,  152 => 52,  147 => 50,  143 => 49,  137 => 46,  132 => 44,  128 => 43,  122 => 40,  117 => 38,  113 => 37,  107 => 34,  102 => 32,  98 => 31,  92 => 28,  87 => 26,  83 => 25,  76 => 21,  71 => 19,  67 => 18,  61 => 15,  56 => 13,  52 => 12,  46 => 9,  41 => 7,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register form-horizontal'}}) }}
\t{{ form_errors(form) }}
\t<div class=\"form-group col-lg-12 m-0\">
\t\t{{ form_label(form.username, \"Identifiant*\", {'label_attr': {'class': 'pt-3 col-sm-12 control-label'}}) }}
\t\t{{ form_errors(form.username) }}
\t\t<div class=\"col-sm-12\">
\t\t  \t{{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}
\t\t</div>

\t\t{{ form_label(form.email, \"Email*\", {'label_attr': {'class': 'pt-3 col-sm-12 control-label'}}) }}
\t\t{{ form_errors(form.email) }}
\t\t<div class=\"col-sm-12\">
\t\t  \t{{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
\t\t</div>

\t\t{{ form_label(form.plainPassword, \"Mot de passe*\", {'label_attr': {'class': 'pt-3 col-sm-12 control-label'}}) }}
\t\t{{ form_errors(form.plainPassword) }}
\t\t<div class=\"col-sm-12\">
\t\t  \t{{ form_widget(form.plainPassword, {'attr': {'class': 'form-control'}}) }}
\t\t</div>
\t</div>
\t<div class=\"form-group col-lg-12 m-0\">
\t\t{{ form_label(form.nom, \"Nom\", {'label_attr': {'class': 'pt-3 col-sm-12 control-label'}}) }}
\t\t{{ form_errors(form.nom) }}
\t\t<div class=\"col-sm-12\">
\t\t  \t{{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
\t\t</div>

\t\t{{ form_label(form.prenom, \"Prénom\", {'label_attr': {'class': 'pt-3 col-sm-12 control-label'}}) }}
\t\t{{ form_errors(form.prenom) }}
\t\t<div class=\"col-sm-12\">
\t\t  \t{{ form_widget(form.prenom, {'attr': {'class': 'form-control'}}) }}
\t\t</div>

\t\t{{ form_label(form.avatar, \"Avatar\", {'label_attr': {'class': 'pt-3 col-sm-12 control-label'}}) }}
\t\t{{ form_errors(form.avatar) }}
\t\t<div class=\"col-sm-12\">
\t\t  \t{{ form_widget(form.avatar, {'attr': {'class': 'form-control'}}) }}
\t\t</div>

\t\t{{ form_label(form.age, \"Age\", {'label_attr': {'class': 'pt-3 col-sm-12 control-label'}}) }}
\t\t{{ form_errors(form.age) }}
\t\t<div class=\"col-sm-12\">
\t\t  \t{{ form_widget(form.age, {'attr': {'class': 'form-control'}}) }}
\t\t</div>

\t\t{{ form_label(form.ville, \"Ville\", {'label_attr': {'class': 'pt-3 col-sm-12 control-label'}}) }}
\t\t{{ form_errors(form.ville) }}
\t\t<div class=\"col-sm-12\">
\t\t  \t{{ form_widget(form.ville, {'attr': {'class': 'form-control'}}) }}
\t\t</div>

\t\t{{ form_label(form.ville, \"Captcha\", {'label_attr': {'class': 'pt-3 col-sm-12 control-label'}}) }}
\t\t{{ form_errors(form.captchaCode) }}
\t\t<div class=\"col-sm-12\">
\t\t\t{{ form_widget(form.captchaCode, {'attr': {'class': 'form-control'}}) }}
\t\t</div>

\t\t<div class=\"col-lg-12 p-2\">
\t\t\t{{ form_widget(form.submit, {'attr': {'class': 'btn btn-primary', 'value': 'Valider'}}) }}
\t\t</div>
\t</div>
\t{{ form_rest(form) }}
{{ form_end(form) }}

", "UserBundle:Registration:register_content.html.twig", "/var/www/recap/src/UserBundle/Resources/views/Registration/register_content.html.twig");
    }
}
