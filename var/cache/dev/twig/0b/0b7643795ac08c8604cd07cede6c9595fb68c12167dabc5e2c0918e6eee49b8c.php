<?php

/* UserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_3310dc28cde97202bfa89dda20933abe6a56d389cd81783f44da711b36985bcd extends Twig_Template
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
        $__internal_052427dfc4ed3cb72dbff48868e0963d231c70854b80456e64d44dd334d8a670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_052427dfc4ed3cb72dbff48868e0963d231c70854b80456e64d44dd334d8a670->enter($__internal_052427dfc4ed3cb72dbff48868e0963d231c70854b80456e64d44dd334d8a670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request_content.html.twig"));

        $__internal_43884dca8c2974a855e812f03c70573bf9a0cfa90338a6df6cdb6cd3d25d2f03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43884dca8c2974a855e812f03c70573bf9a0cfa90338a6df6cdb6cd3d25d2f03->enter($__internal_43884dca8c2974a855e812f03c70573bf9a0cfa90338a6df6cdb6cd3d25d2f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">Identifiant</label>
        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div class=\"pt-2\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Valider\" />
    </div>
</form>
";
        
        $__internal_052427dfc4ed3cb72dbff48868e0963d231c70854b80456e64d44dd334d8a670->leave($__internal_052427dfc4ed3cb72dbff48868e0963d231c70854b80456e64d44dd334d8a670_prof);

        
        $__internal_43884dca8c2974a855e812f03c70573bf9a0cfa90338a6df6cdb6cd3d25d2f03->leave($__internal_43884dca8c2974a855e812f03c70573bf9a0cfa90338a6df6cdb6cd3d25d2f03_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">Identifiant</label>
        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div class=\"pt-2\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Valider\" />
    </div>
</form>
", "UserBundle:Resetting:request_content.html.twig", "/var/www/recap/src/UserBundle/Resources/views/Resetting/request_content.html.twig");
    }
}
