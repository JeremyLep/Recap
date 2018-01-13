<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_cff2890789fe77d49caaf9239f870ca4154364ad550d37eb3f00dea7fc7bd93a extends Twig_Template
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
        $__internal_5262e64a0d0aca4b7f12649045f409db491cd9ddb3f10c4f5142a14eb3cdf8e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5262e64a0d0aca4b7f12649045f409db491cd9ddb3f10c4f5142a14eb3cdf8e5->enter($__internal_5262e64a0d0aca4b7f12649045f409db491cd9ddb3f10c4f5142a14eb3cdf8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_065f7685adea36cb4e28caaf806df79f8076375c09dc47686be41c1a5ebd7657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065f7685adea36cb4e28caaf806df79f8076375c09dc47686be41c1a5ebd7657->enter($__internal_065f7685adea36cb4e28caaf806df79f8076375c09dc47686be41c1a5ebd7657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_5262e64a0d0aca4b7f12649045f409db491cd9ddb3f10c4f5142a14eb3cdf8e5->leave($__internal_5262e64a0d0aca4b7f12649045f409db491cd9ddb3f10c4f5142a14eb3cdf8e5_prof);

        
        $__internal_065f7685adea36cb4e28caaf806df79f8076375c09dc47686be41c1a5ebd7657->leave($__internal_065f7685adea36cb4e28caaf806df79f8076375c09dc47686be41c1a5ebd7657_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
