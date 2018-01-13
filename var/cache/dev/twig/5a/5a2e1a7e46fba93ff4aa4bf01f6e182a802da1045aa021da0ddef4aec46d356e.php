<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_ba8cfea773ce9da23d2c7beee127e5cfa34007d7910d62c616feba512137b219 extends Twig_Template
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
        $__internal_b124997aff3bb4c9eec301da677a985ddb886582a4dbd08512de19a91dc9b091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b124997aff3bb4c9eec301da677a985ddb886582a4dbd08512de19a91dc9b091->enter($__internal_b124997aff3bb4c9eec301da677a985ddb886582a4dbd08512de19a91dc9b091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_6c5328a7a6aee98d50671154e9d12dfb7bb053715ea7959f69e99d3b9d8d5acf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c5328a7a6aee98d50671154e9d12dfb7bb053715ea7959f69e99d3b9d8d5acf->enter($__internal_6c5328a7a6aee98d50671154e9d12dfb7bb053715ea7959f69e99d3b9d8d5acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b124997aff3bb4c9eec301da677a985ddb886582a4dbd08512de19a91dc9b091->leave($__internal_b124997aff3bb4c9eec301da677a985ddb886582a4dbd08512de19a91dc9b091_prof);

        
        $__internal_6c5328a7a6aee98d50671154e9d12dfb7bb053715ea7959f69e99d3b9d8d5acf->leave($__internal_6c5328a7a6aee98d50671154e9d12dfb7bb053715ea7959f69e99d3b9d8d5acf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
