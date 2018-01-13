<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_f7ec6b2c547f60c12a6d30db51539748dc98c65da635f2c6c1933d3d30a6a534 extends Twig_Template
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
        $__internal_832dd311a3f46f41ab19dd26f1467610074d3009698e6e20000cdea69c1fab86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_832dd311a3f46f41ab19dd26f1467610074d3009698e6e20000cdea69c1fab86->enter($__internal_832dd311a3f46f41ab19dd26f1467610074d3009698e6e20000cdea69c1fab86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_c45d218825bc7164d17247b5e73e3547343d51b00a8265b1dd8ab304e745dd13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c45d218825bc7164d17247b5e73e3547343d51b00a8265b1dd8ab304e745dd13->enter($__internal_c45d218825bc7164d17247b5e73e3547343d51b00a8265b1dd8ab304e745dd13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_832dd311a3f46f41ab19dd26f1467610074d3009698e6e20000cdea69c1fab86->leave($__internal_832dd311a3f46f41ab19dd26f1467610074d3009698e6e20000cdea69c1fab86_prof);

        
        $__internal_c45d218825bc7164d17247b5e73e3547343d51b00a8265b1dd8ab304e745dd13->leave($__internal_c45d218825bc7164d17247b5e73e3547343d51b00a8265b1dd8ab304e745dd13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
