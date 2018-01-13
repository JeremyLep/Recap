<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_89ae7bb7456bb1f85b5dd63b15a7e6bb4e54c1302ce98e118481090f6b745847 extends Twig_Template
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
        $__internal_ebd5010080eb6a957aaad96bad8c6f93f9cfefbf609d6557f704079a3f4d3c0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd5010080eb6a957aaad96bad8c6f93f9cfefbf609d6557f704079a3f4d3c0d->enter($__internal_ebd5010080eb6a957aaad96bad8c6f93f9cfefbf609d6557f704079a3f4d3c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_7e2bce80205b473058f4065025c57c19a668ae43b3f077622230e1680f79bc4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e2bce80205b473058f4065025c57c19a668ae43b3f077622230e1680f79bc4e->enter($__internal_7e2bce80205b473058f4065025c57c19a668ae43b3f077622230e1680f79bc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 3, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_ebd5010080eb6a957aaad96bad8c6f93f9cfefbf609d6557f704079a3f4d3c0d->leave($__internal_ebd5010080eb6a957aaad96bad8c6f93f9cfefbf609d6557f704079a3f4d3c0d_prof);

        
        $__internal_7e2bce80205b473058f4065025c57c19a668ae43b3f077622230e1680f79bc4e->leave($__internal_7e2bce80205b473058f4065025c57c19a668ae43b3f077622230e1680f79bc4e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "/var/www/recap/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list_content.html.twig");
    }
}
