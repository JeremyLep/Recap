<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_f791aa72565e19ff9e916d041822b0df5dae35f1f3dcbc3f32abedf4004bd560 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9a36618f5f2cd7a5b644ed31a39e923189379c8e5d3657cde9087ce360c9c6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9a36618f5f2cd7a5b644ed31a39e923189379c8e5d3657cde9087ce360c9c6f->enter($__internal_c9a36618f5f2cd7a5b644ed31a39e923189379c8e5d3657cde9087ce360c9c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_174987cfa899cfa60d630f689127d3f94805fa8333636122bc9371028d79eb2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_174987cfa899cfa60d630f689127d3f94805fa8333636122bc9371028d79eb2b->enter($__internal_174987cfa899cfa60d630f689127d3f94805fa8333636122bc9371028d79eb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_c9a36618f5f2cd7a5b644ed31a39e923189379c8e5d3657cde9087ce360c9c6f->leave($__internal_c9a36618f5f2cd7a5b644ed31a39e923189379c8e5d3657cde9087ce360c9c6f_prof);

        
        $__internal_174987cfa899cfa60d630f689127d3f94805fa8333636122bc9371028d79eb2b->leave($__internal_174987cfa899cfa60d630f689127d3f94805fa8333636122bc9371028d79eb2b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6511916912a8ddefc2df6ac3d3279325bd7521abce2e844a7150c205bd6b1310 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6511916912a8ddefc2df6ac3d3279325bd7521abce2e844a7150c205bd6b1310->enter($__internal_6511916912a8ddefc2df6ac3d3279325bd7521abce2e844a7150c205bd6b1310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ffbc53c435eeb52bffd2639df7b8c80166a18eb5288db5a4e8a0f88667e2b284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffbc53c435eeb52bffd2639df7b8c80166a18eb5288db5a4e8a0f88667e2b284->enter($__internal_ffbc53c435eeb52bffd2639df7b8c80166a18eb5288db5a4e8a0f88667e2b284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ffbc53c435eeb52bffd2639df7b8c80166a18eb5288db5a4e8a0f88667e2b284->leave($__internal_ffbc53c435eeb52bffd2639df7b8c80166a18eb5288db5a4e8a0f88667e2b284_prof);

        
        $__internal_6511916912a8ddefc2df6ac3d3279325bd7521abce2e844a7150c205bd6b1310->leave($__internal_6511916912a8ddefc2df6ac3d3279325bd7521abce2e844a7150c205bd6b1310_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec767c4081483021f05b9c3be356bca1f53972f08329685d8f3cb0563895a6cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec767c4081483021f05b9c3be356bca1f53972f08329685d8f3cb0563895a6cb->enter($__internal_ec767c4081483021f05b9c3be356bca1f53972f08329685d8f3cb0563895a6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2de20e52bf2ac420fb9e50c5cb4901d9c6ab4c2157c78c4a0526c40d7c1f7613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de20e52bf2ac420fb9e50c5cb4901d9c6ab4c2157c78c4a0526c40d7c1f7613->enter($__internal_2de20e52bf2ac420fb9e50c5cb4901d9c6ab4c2157c78c4a0526c40d7c1f7613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2de20e52bf2ac420fb9e50c5cb4901d9c6ab4c2157c78c4a0526c40d7c1f7613->leave($__internal_2de20e52bf2ac420fb9e50c5cb4901d9c6ab4c2157c78c4a0526c40d7c1f7613_prof);

        
        $__internal_ec767c4081483021f05b9c3be356bca1f53972f08329685d8f3cb0563895a6cb->leave($__internal_ec767c4081483021f05b9c3be356bca1f53972f08329685d8f3cb0563895a6cb_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a008429e6bd93e4739af1ffc0b36b4f6e54ed5636deb19ed019b6b5457e066c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a008429e6bd93e4739af1ffc0b36b4f6e54ed5636deb19ed019b6b5457e066c9->enter($__internal_a008429e6bd93e4739af1ffc0b36b4f6e54ed5636deb19ed019b6b5457e066c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dbb5ff329db4d11fa352d58e77419b84881bc9fbe4aa79193b24c3607d8a39f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb5ff329db4d11fa352d58e77419b84881bc9fbe4aa79193b24c3607d8a39f6->enter($__internal_dbb5ff329db4d11fa352d58e77419b84881bc9fbe4aa79193b24c3607d8a39f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dbb5ff329db4d11fa352d58e77419b84881bc9fbe4aa79193b24c3607d8a39f6->leave($__internal_dbb5ff329db4d11fa352d58e77419b84881bc9fbe4aa79193b24c3607d8a39f6_prof);

        
        $__internal_a008429e6bd93e4739af1ffc0b36b4f6e54ed5636deb19ed019b6b5457e066c9->leave($__internal_a008429e6bd93e4739af1ffc0b36b4f6e54ed5636deb19ed019b6b5457e066c9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
