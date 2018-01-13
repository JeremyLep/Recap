<?php

/* UserBundle:Resetting:email.txt.twig */
class __TwigTemplate_e1594f58e8498437908f5392e321077160ba806f43d8df7d2b01371a12050fed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0347fa788c5783b56f6e9dd2ace12ad50f24e9dc5f066f62a80af03028a2822f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0347fa788c5783b56f6e9dd2ace12ad50f24e9dc5f066f62a80af03028a2822f->enter($__internal_0347fa788c5783b56f6e9dd2ace12ad50f24e9dc5f066f62a80af03028a2822f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:email.txt.twig"));

        $__internal_ab6ff834f54e354fa9fcb5b6603a59d981537aa23f0f1b0b51a019b540ec3819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab6ff834f54e354fa9fcb5b6603a59d981537aa23f0f1b0b51a019b540ec3819->enter($__internal_ab6ff834f54e354fa9fcb5b6603a59d981537aa23f0f1b0b51a019b540ec3819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0347fa788c5783b56f6e9dd2ace12ad50f24e9dc5f066f62a80af03028a2822f->leave($__internal_0347fa788c5783b56f6e9dd2ace12ad50f24e9dc5f066f62a80af03028a2822f_prof);

        
        $__internal_ab6ff834f54e354fa9fcb5b6603a59d981537aa23f0f1b0b51a019b540ec3819->leave($__internal_ab6ff834f54e354fa9fcb5b6603a59d981537aa23f0f1b0b51a019b540ec3819_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_891ff05b65bdd032c03b4c95b165a62a4ce2fd7073125a3785a07680a847576e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_891ff05b65bdd032c03b4c95b165a62a4ce2fd7073125a3785a07680a847576e->enter($__internal_891ff05b65bdd032c03b4c95b165a62a4ce2fd7073125a3785a07680a847576e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_4a5b695e709a23ec4b24af80666a49d55d97276dda7f9b07d4f7691cdc76a81d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a5b695e709a23ec4b24af80666a49d55d97276dda7f9b07d4f7691cdc76a81d->enter($__internal_4a5b695e709a23ec4b24af80666a49d55d97276dda7f9b07d4f7691cdc76a81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_4a5b695e709a23ec4b24af80666a49d55d97276dda7f9b07d4f7691cdc76a81d->leave($__internal_4a5b695e709a23ec4b24af80666a49d55d97276dda7f9b07d4f7691cdc76a81d_prof);

        
        $__internal_891ff05b65bdd032c03b4c95b165a62a4ce2fd7073125a3785a07680a847576e->leave($__internal_891ff05b65bdd032c03b4c95b165a62a4ce2fd7073125a3785a07680a847576e_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a7c81b8caab2b48afe0b0c2ed6275a08c0e7b3d59fb2a9dc257f30078c2cae9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7c81b8caab2b48afe0b0c2ed6275a08c0e7b3d59fb2a9dc257f30078c2cae9e->enter($__internal_a7c81b8caab2b48afe0b0c2ed6275a08c0e7b3d59fb2a9dc257f30078c2cae9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_95674016014a7d04bffbeeae62be8d44abcdff090a685aa3addce438b0dc6c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95674016014a7d04bffbeeae62be8d44abcdff090a685aa3addce438b0dc6c33->enter($__internal_95674016014a7d04bffbeeae62be8d44abcdff090a685aa3addce438b0dc6c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_95674016014a7d04bffbeeae62be8d44abcdff090a685aa3addce438b0dc6c33->leave($__internal_95674016014a7d04bffbeeae62be8d44abcdff090a685aa3addce438b0dc6c33_prof);

        
        $__internal_a7c81b8caab2b48afe0b0c2ed6275a08c0e7b3d59fb2a9dc257f30078c2cae9e->leave($__internal_a7c81b8caab2b48afe0b0c2ed6275a08c0e7b3d59fb2a9dc257f30078c2cae9e_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0e62c4b78295bd3c0acad9457aef34c5e39d93d7cac12be70550a9a1f0ae8ce6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e62c4b78295bd3c0acad9457aef34c5e39d93d7cac12be70550a9a1f0ae8ce6->enter($__internal_0e62c4b78295bd3c0acad9457aef34c5e39d93d7cac12be70550a9a1f0ae8ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_ae7c0abb18d73ce287e1de61d08a1eefae2621212b39c59283d96a7c5337560f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae7c0abb18d73ce287e1de61d08a1eefae2621212b39c59283d96a7c5337560f->enter($__internal_ae7c0abb18d73ce287e1de61d08a1eefae2621212b39c59283d96a7c5337560f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ae7c0abb18d73ce287e1de61d08a1eefae2621212b39c59283d96a7c5337560f->leave($__internal_ae7c0abb18d73ce287e1de61d08a1eefae2621212b39c59283d96a7c5337560f_prof);

        
        $__internal_0e62c4b78295bd3c0acad9457aef34c5e39d93d7cac12be70550a9a1f0ae8ce6->leave($__internal_0e62c4b78295bd3c0acad9457aef34c5e39d93d7cac12be70550a9a1f0ae8ce6_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "UserBundle:Resetting:email.txt.twig", "/var/www/recap/src/UserBundle/Resources/views/Resetting/email.txt.twig");
    }
}
