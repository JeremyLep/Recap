<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_52e80af9c7496478fa8b8bd182b1bdc184e722cb5a0ab33c9520ccf026117e80 extends Twig_Template
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
        $__internal_2890cc6dc577b4d16bee83df8df268fc07b21d676db57bc716a61e84c88d5aa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2890cc6dc577b4d16bee83df8df268fc07b21d676db57bc716a61e84c88d5aa6->enter($__internal_2890cc6dc577b4d16bee83df8df268fc07b21d676db57bc716a61e84c88d5aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_030276cf555786911f9227ba883a1f5a6a0cbef11d8c9f05fe85e714ae016e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_030276cf555786911f9227ba883a1f5a6a0cbef11d8c9f05fe85e714ae016e45->enter($__internal_030276cf555786911f9227ba883a1f5a6a0cbef11d8c9f05fe85e714ae016e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_2890cc6dc577b4d16bee83df8df268fc07b21d676db57bc716a61e84c88d5aa6->leave($__internal_2890cc6dc577b4d16bee83df8df268fc07b21d676db57bc716a61e84c88d5aa6_prof);

        
        $__internal_030276cf555786911f9227ba883a1f5a6a0cbef11d8c9f05fe85e714ae016e45->leave($__internal_030276cf555786911f9227ba883a1f5a6a0cbef11d8c9f05fe85e714ae016e45_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
