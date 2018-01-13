<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_ae828cacbf732deef8342e51163a9f0273e864ba1ed50885455da0fed770f741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9193c59db00e99405dcbef4c21ec6c66e9d8bbc22a818f32f77805759253a66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9193c59db00e99405dcbef4c21ec6c66e9d8bbc22a818f32f77805759253a66->enter($__internal_b9193c59db00e99405dcbef4c21ec6c66e9d8bbc22a818f32f77805759253a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_afabe1e9d01d5e33d9552d39c03c272e4a9158d604e811e9ce34d4fc8ad5b891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afabe1e9d01d5e33d9552d39c03c272e4a9158d604e811e9ce34d4fc8ad5b891->enter($__internal_afabe1e9d01d5e33d9552d39c03c272e4a9158d604e811e9ce34d4fc8ad5b891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9193c59db00e99405dcbef4c21ec6c66e9d8bbc22a818f32f77805759253a66->leave($__internal_b9193c59db00e99405dcbef4c21ec6c66e9d8bbc22a818f32f77805759253a66_prof);

        
        $__internal_afabe1e9d01d5e33d9552d39c03c272e4a9158d604e811e9ce34d4fc8ad5b891->leave($__internal_afabe1e9d01d5e33d9552d39c03c272e4a9158d604e811e9ce34d4fc8ad5b891_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_596174413584cad06399ee49b664e48145e0ebeeceef4144af6fb68b1b0a9e93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_596174413584cad06399ee49b664e48145e0ebeeceef4144af6fb68b1b0a9e93->enter($__internal_596174413584cad06399ee49b664e48145e0ebeeceef4144af6fb68b1b0a9e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6a7aefbdeea4dec3db1ef04624b6a262339f4cc0d6870bbb2986716413124e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a7aefbdeea4dec3db1ef04624b6a262339f4cc0d6870bbb2986716413124e24->enter($__internal_6a7aefbdeea4dec3db1ef04624b6a262339f4cc0d6870bbb2986716413124e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6a7aefbdeea4dec3db1ef04624b6a262339f4cc0d6870bbb2986716413124e24->leave($__internal_6a7aefbdeea4dec3db1ef04624b6a262339f4cc0d6870bbb2986716413124e24_prof);

        
        $__internal_596174413584cad06399ee49b664e48145e0ebeeceef4144af6fb68b1b0a9e93->leave($__internal_596174413584cad06399ee49b664e48145e0ebeeceef4144af6fb68b1b0a9e93_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_36d6c52aa44a2304ad515fc0e2f9becf75e613ca9ca8ce872dd4f7f2688e2cc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36d6c52aa44a2304ad515fc0e2f9becf75e613ca9ca8ce872dd4f7f2688e2cc2->enter($__internal_36d6c52aa44a2304ad515fc0e2f9becf75e613ca9ca8ce872dd4f7f2688e2cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a56cb2122a4d9b20b933c0abbdcc404b9f30774d3afa04e8aedc14e531d3b449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a56cb2122a4d9b20b933c0abbdcc404b9f30774d3afa04e8aedc14e531d3b449->enter($__internal_a56cb2122a4d9b20b933c0abbdcc404b9f30774d3afa04e8aedc14e531d3b449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "

  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 11
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "      <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
        ";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "  
  ";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "
";
        
        $__internal_a56cb2122a4d9b20b933c0abbdcc404b9f30774d3afa04e8aedc14e531d3b449->leave($__internal_a56cb2122a4d9b20b933c0abbdcc404b9f30774d3afa04e8aedc14e531d3b449_prof);

        
        $__internal_36d6c52aa44a2304ad515fc0e2f9becf75e613ca9ca8ce872dd4f7f2688e2cc2->leave($__internal_36d6c52aa44a2304ad515fc0e2f9becf75e613ca9ca8ce872dd4f7f2688e2cc2_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_ccc2c967edee66f68d9e7fda05713a47befdddd9bb0167f019c8ce29e6312f95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccc2c967edee66f68d9e7fda05713a47befdddd9bb0167f019c8ce29e6312f95->enter($__internal_ccc2c967edee66f68d9e7fda05713a47befdddd9bb0167f019c8ce29e6312f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_86f1e868f44e84f005611fecb567b7d4b8c256ea11d4ce5cd0bce262d801fd86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f1e868f44e84f005611fecb567b7d4b8c256ea11d4ce5cd0bce262d801fd86->enter($__internal_86f1e868f44e84f005611fecb567b7d4b8c256ea11d4ce5cd0bce262d801fd86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "    <div class=\"ibox-content mb-1 mt-1\">
      <div class=\"form-group col-sm-12\">
        ";
        // line 21
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 23
        echo "      </div>
    </div>
  ";
        
        $__internal_86f1e868f44e84f005611fecb567b7d4b8c256ea11d4ce5cd0bce262d801fd86->leave($__internal_86f1e868f44e84f005611fecb567b7d4b8c256ea11d4ce5cd0bce262d801fd86_prof);

        
        $__internal_ccc2c967edee66f68d9e7fda05713a47befdddd9bb0167f019c8ce29e6312f95->leave($__internal_ccc2c967edee66f68d9e7fda05713a47befdddd9bb0167f019c8ce29e6312f95_prof);

    }

    // line 21
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc1fb31fddf92e8c29702f025ccd48a69011dc58735626bcb86b006cedef9d7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc1fb31fddf92e8c29702f025ccd48a69011dc58735626bcb86b006cedef9d7d->enter($__internal_cc1fb31fddf92e8c29702f025ccd48a69011dc58735626bcb86b006cedef9d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_134281903dc5075b06a412102c572340974a50be8b469fc6a78f95f560333c7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_134281903dc5075b06a412102c572340974a50be8b469fc6a78f95f560333c7f->enter($__internal_134281903dc5075b06a412102c572340974a50be8b469fc6a78f95f560333c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 22
        echo "        ";
        
        $__internal_134281903dc5075b06a412102c572340974a50be8b469fc6a78f95f560333c7f->leave($__internal_134281903dc5075b06a412102c572340974a50be8b469fc6a78f95f560333c7f_prof);

        
        $__internal_cc1fb31fddf92e8c29702f025ccd48a69011dc58735626bcb86b006cedef9d7d->leave($__internal_cc1fb31fddf92e8c29702f025ccd48a69011dc58735626bcb86b006cedef9d7d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 22,  145 => 21,  133 => 23,  131 => 21,  127 => 19,  118 => 18,  107 => 26,  105 => 18,  102 => 17,  96 => 16,  87 => 13,  82 => 12,  77 => 11,  73 => 10,  69 => 8,  60 => 7,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle::layout.html.twig\" %}

{% block title %}
{% endblock %}


{% block body %}


  {% for key, messages in app.session.flashbag.all() %}
    {% for message in messages %}
      <div class=\"alert alert-{{ key }}\">
        {{ message|trans({}, 'FOSUserBundle') }}
      </div>
    {% endfor %}
  {% endfor %}
  
  {% block content %}
    <div class=\"ibox-content mb-1 mt-1\">
      <div class=\"form-group col-sm-12\">
        {% block fos_user_content %}
        {% endblock fos_user_content %}
      </div>
    </div>
  {% endblock %}

{% endblock %}", "@FOSUser/layout.html.twig", "/var/www/recap/src/UserBundle/Resources/views/layout.html.twig");
    }
}
