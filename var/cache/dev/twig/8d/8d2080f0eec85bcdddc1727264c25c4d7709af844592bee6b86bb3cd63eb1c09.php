<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_5e2f9f4df8b936454b621c5239374c0a414cd0bc3bc8026ee3d268fc344677e2 extends Twig_Template
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
        $__internal_348609cd338fb13777f56fa0ed9ae18862035cf7a3fd8cde6adfdcdc77a1cd81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_348609cd338fb13777f56fa0ed9ae18862035cf7a3fd8cde6adfdcdc77a1cd81->enter($__internal_348609cd338fb13777f56fa0ed9ae18862035cf7a3fd8cde6adfdcdc77a1cd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_702ac133e585940f91dfaf61da568b0c5241e1bebdd14cbb40b4832ac9524313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_702ac133e585940f91dfaf61da568b0c5241e1bebdd14cbb40b4832ac9524313->enter($__internal_702ac133e585940f91dfaf61da568b0c5241e1bebdd14cbb40b4832ac9524313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_348609cd338fb13777f56fa0ed9ae18862035cf7a3fd8cde6adfdcdc77a1cd81->leave($__internal_348609cd338fb13777f56fa0ed9ae18862035cf7a3fd8cde6adfdcdc77a1cd81_prof);

        
        $__internal_702ac133e585940f91dfaf61da568b0c5241e1bebdd14cbb40b4832ac9524313->leave($__internal_702ac133e585940f91dfaf61da568b0c5241e1bebdd14cbb40b4832ac9524313_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
