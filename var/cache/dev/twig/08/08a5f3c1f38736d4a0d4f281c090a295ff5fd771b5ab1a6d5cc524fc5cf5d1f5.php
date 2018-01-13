<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_2a28a7ef1b08b8c6decc578da8660a5cd0d0565c062f233c221cf867a885f85a extends Twig_Template
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
        $__internal_81fa4c8e84bf8fc0d6cdceb111a5cb577d3cea65411d62b4891bba5c99895d3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81fa4c8e84bf8fc0d6cdceb111a5cb577d3cea65411d62b4891bba5c99895d3f->enter($__internal_81fa4c8e84bf8fc0d6cdceb111a5cb577d3cea65411d62b4891bba5c99895d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_1a3d9cb475550caeecb8c0bcfb10ba9a82d9384ce91d1afae8a07a65a9b705e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3d9cb475550caeecb8c0bcfb10ba9a82d9384ce91d1afae8a07a65a9b705e3->enter($__internal_1a3d9cb475550caeecb8c0bcfb10ba9a82d9384ce91d1afae8a07a65a9b705e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_81fa4c8e84bf8fc0d6cdceb111a5cb577d3cea65411d62b4891bba5c99895d3f->leave($__internal_81fa4c8e84bf8fc0d6cdceb111a5cb577d3cea65411d62b4891bba5c99895d3f_prof);

        
        $__internal_1a3d9cb475550caeecb8c0bcfb10ba9a82d9384ce91d1afae8a07a65a9b705e3->leave($__internal_1a3d9cb475550caeecb8c0bcfb10ba9a82d9384ce91d1afae8a07a65a9b705e3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/var/www/recap/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
