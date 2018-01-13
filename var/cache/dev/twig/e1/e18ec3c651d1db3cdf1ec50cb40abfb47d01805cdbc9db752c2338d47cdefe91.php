<?php

/* StarRatingBundle::rating.html.twig */
class __TwigTemplate_70d99bd1ea7c6439ed9d1bcc1f0f4116996939dbf72fd1a2ab5ae41dad5aa8b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'rating_widget' => array($this, 'block_rating_widget'),
            'rating_widget_container_attributes' => array($this, 'block_rating_widget_container_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1bcba738a6906a2370e385f498da43085bb33157a2979d098b8580b71b35e09a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bcba738a6906a2370e385f498da43085bb33157a2979d098b8580b71b35e09a->enter($__internal_1bcba738a6906a2370e385f498da43085bb33157a2979d098b8580b71b35e09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StarRatingBundle::rating.html.twig"));

        $__internal_e54b75d11853ab1650080d9282f79b1bf79ddb13c08813e4b55c080b8c52f95f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e54b75d11853ab1650080d9282f79b1bf79ddb13c08813e4b55c080b8c52f95f->enter($__internal_e54b75d11853ab1650080d9282f79b1bf79ddb13c08813e4b55c080b8c52f95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StarRatingBundle::rating.html.twig"));

        // line 2
        $this->displayBlock('rating_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('rating_widget_container_attributes', $context, $blocks);
        
        $__internal_1bcba738a6906a2370e385f498da43085bb33157a2979d098b8580b71b35e09a->leave($__internal_1bcba738a6906a2370e385f498da43085bb33157a2979d098b8580b71b35e09a_prof);

        
        $__internal_e54b75d11853ab1650080d9282f79b1bf79ddb13c08813e4b55c080b8c52f95f->leave($__internal_e54b75d11853ab1650080d9282f79b1bf79ddb13c08813e4b55c080b8c52f95f_prof);

    }

    // line 2
    public function block_rating_widget($context, array $blocks = array())
    {
        $__internal_5aadb64535ec610fcb60230ea3b04a2136b3b228d4b37c727328752865882805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aadb64535ec610fcb60230ea3b04a2136b3b228d4b37c727328752865882805->enter($__internal_5aadb64535ec610fcb60230ea3b04a2136b3b228d4b37c727328752865882805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget"));

        $__internal_87340b69f9825bd24aaf7280d73f6f24195f1d74ad3737646ce198059197387d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87340b69f9825bd24aaf7280d73f6f24195f1d74ad3737646ce198059197387d->enter($__internal_87340b69f9825bd24aaf7280d73f6f24195f1d74ad3737646ce198059197387d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget"));

        // line 3
        echo "  ";
        ob_start();
        // line 4
        echo "    <div ";
        $this->displayBlock("rating_widget_container_attributes", $context, $blocks);
        echo ">
      ";
        // line 6
        echo "      ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 7
        echo "      <div class=\"rating-well\">";
        // line 8
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["stars"]) || array_key_exists("stars", $context) ? $context["stars"] : (function () { throw new Twig_Error_Runtime('Variable "stars" does not exist.', 9, $this->getSourceContext()); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["star"]) {
            // line 10
            echo "          <div id=\"rating_star_";
            echo twig_escape_filter($this->env, (((isset($context["stars"]) || array_key_exists("stars", $context) ? $context["stars"] : (function () { throw new Twig_Error_Runtime('Variable "stars" does not exist.', 10, $this->getSourceContext()); })()) - $context["star"]) + 1), "html", null, true);
            echo "\" class=\"star\" data-value=\"";
            echo twig_escape_filter($this->env, (((isset($context["stars"]) || array_key_exists("stars", $context) ? $context["stars"] : (function () { throw new Twig_Error_Runtime('Variable "stars" does not exist.', 10, $this->getSourceContext()); })()) - $context["star"]) + 1), "html", null, true);
            echo "\"></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['star'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "      </div>
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_87340b69f9825bd24aaf7280d73f6f24195f1d74ad3737646ce198059197387d->leave($__internal_87340b69f9825bd24aaf7280d73f6f24195f1d74ad3737646ce198059197387d_prof);

        
        $__internal_5aadb64535ec610fcb60230ea3b04a2136b3b228d4b37c727328752865882805->leave($__internal_5aadb64535ec610fcb60230ea3b04a2136b3b228d4b37c727328752865882805_prof);

    }

    // line 17
    public function block_rating_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_4986818d731bfbf17cbf37c696c3285f43ac60426cef53b23eb0105e2acae23c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4986818d731bfbf17cbf37c696c3285f43ac60426cef53b23eb0105e2acae23c->enter($__internal_4986818d731bfbf17cbf37c696c3285f43ac60426cef53b23eb0105e2acae23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget_container_attributes"));

        $__internal_8ae7d5812e7052c41c04b8c2662fff178e892c0a75cf69fe0976b7570b13188d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ae7d5812e7052c41c04b8c2662fff178e892c0a75cf69fe0976b7570b13188d->enter($__internal_8ae7d5812e7052c41c04b8c2662fff178e892c0a75cf69fe0976b7570b13188d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget_container_attributes"));

        // line 18
        ob_start();
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 19, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 20
            echo " ";
            // line 21
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 22
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 22, $this->getSourceContext()); })())), "html", null, true);
                echo "\"";
            } elseif ((            // line 23
$context["attrvalue"] === true)) {
                // line 24
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 25
$context["attrvalue"] === false)) {
                // line 26
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8ae7d5812e7052c41c04b8c2662fff178e892c0a75cf69fe0976b7570b13188d->leave($__internal_8ae7d5812e7052c41c04b8c2662fff178e892c0a75cf69fe0976b7570b13188d_prof);

        
        $__internal_4986818d731bfbf17cbf37c696c3285f43ac60426cef53b23eb0105e2acae23c->leave($__internal_4986818d731bfbf17cbf37c696c3285f43ac60426cef53b23eb0105e2acae23c_prof);

    }

    public function getTemplateName()
    {
        return "StarRatingBundle::rating.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  127 => 26,  125 => 25,  120 => 24,  118 => 23,  113 => 22,  111 => 21,  109 => 20,  105 => 19,  103 => 18,  94 => 17,  81 => 12,  70 => 10,  66 => 9,  64 => 8,  62 => 7,  59 => 6,  54 => 4,  51 => 3,  42 => 2,  32 => 17,  29 => 16,  27 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# blackknight467/StarRatingBundle/Resources/views/rating.html.twig #}
{% block rating_widget %}
  {% spaceless %}
    <div {{ block('rating_widget_container_attributes') }}>
      {# type=\"number\" doesn't work with floats #}
      {% set type = type|default('text') %}
      <div class=\"rating-well\">
        {{- block('form_widget_simple') -}}
        {% for star in 1..stars %}
          <div id=\"rating_star_{{ stars - star + 1 }}\" class=\"star\" data-value=\"{{ stars - star + 1 }}\"></div>
        {% endfor %}
      </div>
    </div>
  {% endspaceless %}
{% endblock rating_widget %}

{% block rating_widget_container_attributes %}
{% spaceless %}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{% endspaceless %}
{% endblock rating_widget_container_attributes %}", "StarRatingBundle::rating.html.twig", "/var/www/recap/vendor/blackknight467/star-rating-bundle/blackknight467/StarRatingBundle/Resources/views/rating.html.twig");
    }
}
