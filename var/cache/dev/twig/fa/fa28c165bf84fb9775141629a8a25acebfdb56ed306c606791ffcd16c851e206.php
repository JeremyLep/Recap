<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_8bec7bca792f9e5f079a7a69b1862f318ca480e7b6992f4ce3db628be9bdadd0 extends Twig_Template
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
        $__internal_f3e070a0e866c6aa856777cc67567b1ed94fcf7c0a5d7c455aa1f5bce6be1f54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3e070a0e866c6aa856777cc67567b1ed94fcf7c0a5d7c455aa1f5bce6be1f54->enter($__internal_f3e070a0e866c6aa856777cc67567b1ed94fcf7c0a5d7c455aa1f5bce6be1f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_415fb18a8afde7f52bfbc60f83d5778a29aa45ecab0b82683841a06e240882d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_415fb18a8afde7f52bfbc60f83d5778a29aa45ecab0b82683841a06e240882d7->enter($__internal_415fb18a8afde7f52bfbc60f83d5778a29aa45ecab0b82683841a06e240882d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f3e070a0e866c6aa856777cc67567b1ed94fcf7c0a5d7c455aa1f5bce6be1f54->leave($__internal_f3e070a0e866c6aa856777cc67567b1ed94fcf7c0a5d7c455aa1f5bce6be1f54_prof);

        
        $__internal_415fb18a8afde7f52bfbc60f83d5778a29aa45ecab0b82683841a06e240882d7->leave($__internal_415fb18a8afde7f52bfbc60f83d5778a29aa45ecab0b82683841a06e240882d7_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0c8fb6644c8c3481822c97df386515d3a0dc5e84e474868fc9c7653e77e3036f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c8fb6644c8c3481822c97df386515d3a0dc5e84e474868fc9c7653e77e3036f->enter($__internal_0c8fb6644c8c3481822c97df386515d3a0dc5e84e474868fc9c7653e77e3036f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_a622c211023b886572ade15b04b74efeda1ba0e4a4f44f56b8a411621a84db32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a622c211023b886572ade15b04b74efeda1ba0e4a4f44f56b8a411621a84db32->enter($__internal_a622c211023b886572ade15b04b74efeda1ba0e4a4f44f56b8a411621a84db32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_a622c211023b886572ade15b04b74efeda1ba0e4a4f44f56b8a411621a84db32->leave($__internal_a622c211023b886572ade15b04b74efeda1ba0e4a4f44f56b8a411621a84db32_prof);

        
        $__internal_0c8fb6644c8c3481822c97df386515d3a0dc5e84e474868fc9c7653e77e3036f->leave($__internal_0c8fb6644c8c3481822c97df386515d3a0dc5e84e474868fc9c7653e77e3036f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_70d1ba5d3c61aa0ed3761b406a014e3b75c86faf3d6f668f45ec0520a333afc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70d1ba5d3c61aa0ed3761b406a014e3b75c86faf3d6f668f45ec0520a333afc2->enter($__internal_70d1ba5d3c61aa0ed3761b406a014e3b75c86faf3d6f668f45ec0520a333afc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_16a2cf87a2b6d184ae40cfc517596db57fcf8f011283f3a61737cb7157b6e906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a2cf87a2b6d184ae40cfc517596db57fcf8f011283f3a61737cb7157b6e906->enter($__internal_16a2cf87a2b6d184ae40cfc517596db57fcf8f011283f3a61737cb7157b6e906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_16a2cf87a2b6d184ae40cfc517596db57fcf8f011283f3a61737cb7157b6e906->leave($__internal_16a2cf87a2b6d184ae40cfc517596db57fcf8f011283f3a61737cb7157b6e906_prof);

        
        $__internal_70d1ba5d3c61aa0ed3761b406a014e3b75c86faf3d6f668f45ec0520a333afc2->leave($__internal_70d1ba5d3c61aa0ed3761b406a014e3b75c86faf3d6f668f45ec0520a333afc2_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ecd7149cdd53a438f6db7b9b21100140e2c9fcb8a0477bef2eb1b7c5ca17cb5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecd7149cdd53a438f6db7b9b21100140e2c9fcb8a0477bef2eb1b7c5ca17cb5e->enter($__internal_ecd7149cdd53a438f6db7b9b21100140e2c9fcb8a0477bef2eb1b7c5ca17cb5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_f06294da971bf20a1a1c88cf8a4a29e165e2bbc61ef86b10f7671285057b1c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f06294da971bf20a1a1c88cf8a4a29e165e2bbc61ef86b10f7671285057b1c3a->enter($__internal_f06294da971bf20a1a1c88cf8a4a29e165e2bbc61ef86b10f7671285057b1c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f06294da971bf20a1a1c88cf8a4a29e165e2bbc61ef86b10f7671285057b1c3a->leave($__internal_f06294da971bf20a1a1c88cf8a4a29e165e2bbc61ef86b10f7671285057b1c3a_prof);

        
        $__internal_ecd7149cdd53a438f6db7b9b21100140e2c9fcb8a0477bef2eb1b7c5ca17cb5e->leave($__internal_ecd7149cdd53a438f6db7b9b21100140e2c9fcb8a0477bef2eb1b7c5ca17cb5e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/recap/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
