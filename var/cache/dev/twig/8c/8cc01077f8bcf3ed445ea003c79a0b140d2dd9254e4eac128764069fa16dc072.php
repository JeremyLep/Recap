<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_48caae3169a1d48fe8274753e3092b65f7a16dae9d1806a9ce808e77537f66ed extends Twig_Template
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
        $__internal_253f922bae928444638228459a320cbd34cb8bfba8e6c473212ff835c1fe3338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_253f922bae928444638228459a320cbd34cb8bfba8e6c473212ff835c1fe3338->enter($__internal_253f922bae928444638228459a320cbd34cb8bfba8e6c473212ff835c1fe3338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_567a4bf411e77055888f35dc0733af5abe6047b4a97a8f15d69e9ac6163fb2f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_567a4bf411e77055888f35dc0733af5abe6047b4a97a8f15d69e9ac6163fb2f6->enter($__internal_567a4bf411e77055888f35dc0733af5abe6047b4a97a8f15d69e9ac6163fb2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_253f922bae928444638228459a320cbd34cb8bfba8e6c473212ff835c1fe3338->leave($__internal_253f922bae928444638228459a320cbd34cb8bfba8e6c473212ff835c1fe3338_prof);

        
        $__internal_567a4bf411e77055888f35dc0733af5abe6047b4a97a8f15d69e9ac6163fb2f6->leave($__internal_567a4bf411e77055888f35dc0733af5abe6047b4a97a8f15d69e9ac6163fb2f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
