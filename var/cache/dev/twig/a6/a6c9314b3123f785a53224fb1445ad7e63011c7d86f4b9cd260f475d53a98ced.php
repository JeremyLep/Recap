<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_c157ea28c60e9befdb3af686f51ebf1a228072ce2c8fb5349b67d0299d3aa3c4 extends Twig_Template
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
        $__internal_7777577818ea1ef7f26c52a8ef242c62e8b51647eccfe15db9da0e8b1911c5a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7777577818ea1ef7f26c52a8ef242c62e8b51647eccfe15db9da0e8b1911c5a0->enter($__internal_7777577818ea1ef7f26c52a8ef242c62e8b51647eccfe15db9da0e8b1911c5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_2a6c0ef94a71a7f641baff07ba095cc42f6cfacef266d923b390a1b455987659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a6c0ef94a71a7f641baff07ba095cc42f6cfacef266d923b390a1b455987659->enter($__internal_2a6c0ef94a71a7f641baff07ba095cc42f6cfacef266d923b390a1b455987659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_7777577818ea1ef7f26c52a8ef242c62e8b51647eccfe15db9da0e8b1911c5a0->leave($__internal_7777577818ea1ef7f26c52a8ef242c62e8b51647eccfe15db9da0e8b1911c5a0_prof);

        
        $__internal_2a6c0ef94a71a7f641baff07ba095cc42f6cfacef266d923b390a1b455987659->leave($__internal_2a6c0ef94a71a7f641baff07ba095cc42f6cfacef266d923b390a1b455987659_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
