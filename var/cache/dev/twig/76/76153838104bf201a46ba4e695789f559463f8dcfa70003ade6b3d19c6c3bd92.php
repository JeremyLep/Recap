<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e6d6a0b17974a20d1746af42011bb2a5549d1a6ee809ca435e31f5507655aced extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac432f52dd1096b91e46132800caa135b621d67171a1d63416f6cad670d05287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac432f52dd1096b91e46132800caa135b621d67171a1d63416f6cad670d05287->enter($__internal_ac432f52dd1096b91e46132800caa135b621d67171a1d63416f6cad670d05287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_d1c7e83e23a249d068b71ab7b5b3f24547af16703b3e15f03b9650dbfa63e659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1c7e83e23a249d068b71ab7b5b3f24547af16703b3e15f03b9650dbfa63e659->enter($__internal_d1c7e83e23a249d068b71ab7b5b3f24547af16703b3e15f03b9650dbfa63e659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac432f52dd1096b91e46132800caa135b621d67171a1d63416f6cad670d05287->leave($__internal_ac432f52dd1096b91e46132800caa135b621d67171a1d63416f6cad670d05287_prof);

        
        $__internal_d1c7e83e23a249d068b71ab7b5b3f24547af16703b3e15f03b9650dbfa63e659->leave($__internal_d1c7e83e23a249d068b71ab7b5b3f24547af16703b3e15f03b9650dbfa63e659_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0cf0fab8e511889199b8bc9021534868497477c3d2ec687239161b2551770740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cf0fab8e511889199b8bc9021534868497477c3d2ec687239161b2551770740->enter($__internal_0cf0fab8e511889199b8bc9021534868497477c3d2ec687239161b2551770740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5bddd692b9ccc190b703f3ee2846d974025c060e441cc36b2401df1bb4429cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bddd692b9ccc190b703f3ee2846d974025c060e441cc36b2401df1bb4429cc9->enter($__internal_5bddd692b9ccc190b703f3ee2846d974025c060e441cc36b2401df1bb4429cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_5bddd692b9ccc190b703f3ee2846d974025c060e441cc36b2401df1bb4429cc9->leave($__internal_5bddd692b9ccc190b703f3ee2846d974025c060e441cc36b2401df1bb4429cc9_prof);

        
        $__internal_0cf0fab8e511889199b8bc9021534868497477c3d2ec687239161b2551770740->leave($__internal_0cf0fab8e511889199b8bc9021534868497477c3d2ec687239161b2551770740_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f45f2899c26102989b58c75db12d125be5b9ce493c08624e4b55ce2362655bed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f45f2899c26102989b58c75db12d125be5b9ce493c08624e4b55ce2362655bed->enter($__internal_f45f2899c26102989b58c75db12d125be5b9ce493c08624e4b55ce2362655bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b0d6e54687dc1a903c7a5d072b973aa82a4679372f9610132d2d7b07fc30f31e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d6e54687dc1a903c7a5d072b973aa82a4679372f9610132d2d7b07fc30f31e->enter($__internal_b0d6e54687dc1a903c7a5d072b973aa82a4679372f9610132d2d7b07fc30f31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_b0d6e54687dc1a903c7a5d072b973aa82a4679372f9610132d2d7b07fc30f31e->leave($__internal_b0d6e54687dc1a903c7a5d072b973aa82a4679372f9610132d2d7b07fc30f31e_prof);

        
        $__internal_f45f2899c26102989b58c75db12d125be5b9ce493c08624e4b55ce2362655bed->leave($__internal_f45f2899c26102989b58c75db12d125be5b9ce493c08624e4b55ce2362655bed_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b2cccc030a46014d7ad999077acf9ee970fe39acb62252e322d9a17e792af9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b2cccc030a46014d7ad999077acf9ee970fe39acb62252e322d9a17e792af9f->enter($__internal_2b2cccc030a46014d7ad999077acf9ee970fe39acb62252e322d9a17e792af9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd6f9cb53a54fb204a2e77c990afce43c03b1cacd0e500acc1fe1cb329d02b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd6f9cb53a54fb204a2e77c990afce43c03b1cacd0e500acc1fe1cb329d02b5f->enter($__internal_fd6f9cb53a54fb204a2e77c990afce43c03b1cacd0e500acc1fe1cb329d02b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_fd6f9cb53a54fb204a2e77c990afce43c03b1cacd0e500acc1fe1cb329d02b5f->leave($__internal_fd6f9cb53a54fb204a2e77c990afce43c03b1cacd0e500acc1fe1cb329d02b5f_prof);

        
        $__internal_2b2cccc030a46014d7ad999077acf9ee970fe39acb62252e322d9a17e792af9f->leave($__internal_2b2cccc030a46014d7ad999077acf9ee970fe39acb62252e322d9a17e792af9f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
