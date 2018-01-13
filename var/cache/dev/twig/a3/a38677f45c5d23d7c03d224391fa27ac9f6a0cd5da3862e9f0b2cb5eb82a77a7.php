<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_6bf5417ff87be53011739bcb8872ae2753679398e0ece180f6776a2137dc0920 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'menutop' => array($this, 'block_menutop'),
            'menuleft' => array($this, 'block_menuleft'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5262638b5eddde6fef33c6fb613ec436749c6d6920308517cebb66d2247f2d70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5262638b5eddde6fef33c6fb613ec436749c6d6920308517cebb66d2247f2d70->enter($__internal_5262638b5eddde6fef33c6fb613ec436749c6d6920308517cebb66d2247f2d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $__internal_9691ccaf2920d4132b1d847b575c153aff57eeb5b941eba48a5512677e667e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9691ccaf2920d4132b1d847b575c153aff57eeb5b941eba48a5512677e667e17->enter($__internal_9691ccaf2920d4132b1d847b575c153aff57eeb5b941eba48a5512677e667e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5262638b5eddde6fef33c6fb613ec436749c6d6920308517cebb66d2247f2d70->leave($__internal_5262638b5eddde6fef33c6fb613ec436749c6d6920308517cebb66d2247f2d70_prof);

        
        $__internal_9691ccaf2920d4132b1d847b575c153aff57eeb5b941eba48a5512677e667e17->leave($__internal_9691ccaf2920d4132b1d847b575c153aff57eeb5b941eba48a5512677e667e17_prof);

    }

    // line 3
    public function block_menutop($context, array $blocks = array())
    {
        $__internal_73fbab1dfc9d8655f5be9e1a01c9ec93a6d4337cdc0aa9ff226ca936ec370979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73fbab1dfc9d8655f5be9e1a01c9ec93a6d4337cdc0aa9ff226ca936ec370979->enter($__internal_73fbab1dfc9d8655f5be9e1a01c9ec93a6d4337cdc0aa9ff226ca936ec370979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menutop"));

        $__internal_7ce800b467f8bc22bfeca6be00149f75f32cd6c0bab82970add2596a71287bfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce800b467f8bc22bfeca6be00149f75f32cd6c0bab82970add2596a71287bfd->enter($__internal_7ce800b467f8bc22bfeca6be00149f75f32cd6c0bab82970add2596a71287bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menutop"));

        
        $__internal_7ce800b467f8bc22bfeca6be00149f75f32cd6c0bab82970add2596a71287bfd->leave($__internal_7ce800b467f8bc22bfeca6be00149f75f32cd6c0bab82970add2596a71287bfd_prof);

        
        $__internal_73fbab1dfc9d8655f5be9e1a01c9ec93a6d4337cdc0aa9ff226ca936ec370979->leave($__internal_73fbab1dfc9d8655f5be9e1a01c9ec93a6d4337cdc0aa9ff226ca936ec370979_prof);

    }

    // line 6
    public function block_menuleft($context, array $blocks = array())
    {
        $__internal_ed2ba951dbd627cb3eced5729ce1089c02f24b0a616f5aaa652dfbbec836141f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed2ba951dbd627cb3eced5729ce1089c02f24b0a616f5aaa652dfbbec836141f->enter($__internal_ed2ba951dbd627cb3eced5729ce1089c02f24b0a616f5aaa652dfbbec836141f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuleft"));

        $__internal_e550a7fe6ea5d685a9e0dfbc2e53cb198cd990c3b28cbb6fb7f50901e47c22f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e550a7fe6ea5d685a9e0dfbc2e53cb198cd990c3b28cbb6fb7f50901e47c22f6->enter($__internal_e550a7fe6ea5d685a9e0dfbc2e53cb198cd990c3b28cbb6fb7f50901e47c22f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuleft"));

        
        $__internal_e550a7fe6ea5d685a9e0dfbc2e53cb198cd990c3b28cbb6fb7f50901e47c22f6->leave($__internal_e550a7fe6ea5d685a9e0dfbc2e53cb198cd990c3b28cbb6fb7f50901e47c22f6_prof);

        
        $__internal_ed2ba951dbd627cb3eced5729ce1089c02f24b0a616f5aaa652dfbbec836141f->leave($__internal_ed2ba951dbd627cb3eced5729ce1089c02f24b0a616f5aaa652dfbbec836141f_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1844a64b8861ba333309c1b63bc5f473531a6f22f14601958bd6495e7ac3ad36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1844a64b8861ba333309c1b63bc5f473531a6f22f14601958bd6495e7ac3ad36->enter($__internal_1844a64b8861ba333309c1b63bc5f473531a6f22f14601958bd6495e7ac3ad36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_779581075f8eb5a9fe507f31c9bc01b331d01bea0ebd3c51c8f50bbf13ba1135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_779581075f8eb5a9fe507f31c9bc01b331d01bea0ebd3c51c8f50bbf13ba1135->enter($__internal_779581075f8eb5a9fe507f31c9bc01b331d01bea0ebd3c51c8f50bbf13ba1135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
\t<div class=\"pull-left\">
\t\t<small class=\"forum-desc\"><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Vous n'avez pas de compte ?</a> </small>
\t\t<small class=\"forum-desc\"><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe oublié ?</a> </small>
\t</div>
";
        
        $__internal_779581075f8eb5a9fe507f31c9bc01b331d01bea0ebd3c51c8f50bbf13ba1135->leave($__internal_779581075f8eb5a9fe507f31c9bc01b331d01bea0ebd3c51c8f50bbf13ba1135_prof);

        
        $__internal_1844a64b8861ba333309c1b63bc5f473531a6f22f14601958bd6495e7ac3ad36->leave($__internal_1844a64b8861ba333309c1b63bc5f473531a6f22f14601958bd6495e7ac3ad36_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 13,  91 => 12,  85 => 10,  76 => 9,  59 => 6,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block menutop %}
{% endblock %}

{% block menuleft %}
{% endblock %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
\t<div class=\"pull-left\">
\t\t<small class=\"forum-desc\"><a href=\"{{ path('fos_user_registration_register') }}\">Vous n'avez pas de compte ?</a> </small>
\t\t<small class=\"forum-desc\"><a href=\"{{ path('fos_user_resetting_request') }}\">Mot de passe oublié ?</a> </small>
\t</div>
{% endblock fos_user_content %}


", "UserBundle:Security:login.html.twig", "/var/www/recap/src/UserBundle/Resources/views/Security/login.html.twig");
    }
}
