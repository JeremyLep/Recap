<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_7343216a9b086241a9a09a0adfab5d2751558cd004e792023e2250c5d08a2545 extends Twig_Template
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
        $__internal_dc027ae1b4de48d389eab2a41e1b410fc2db26b9a9a5c47fae289826456d6395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc027ae1b4de48d389eab2a41e1b410fc2db26b9a9a5c47fae289826456d6395->enter($__internal_dc027ae1b4de48d389eab2a41e1b410fc2db26b9a9a5c47fae289826456d6395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_70702192b94bd4a1b8f45ea52b9b000253cfcc4982ac93620a78bdb903cbdfee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70702192b94bd4a1b8f45ea52b9b000253cfcc4982ac93620a78bdb903cbdfee->enter($__internal_70702192b94bd4a1b8f45ea52b9b000253cfcc4982ac93620a78bdb903cbdfee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_dc027ae1b4de48d389eab2a41e1b410fc2db26b9a9a5c47fae289826456d6395->leave($__internal_dc027ae1b4de48d389eab2a41e1b410fc2db26b9a9a5c47fae289826456d6395_prof);

        
        $__internal_70702192b94bd4a1b8f45ea52b9b000253cfcc4982ac93620a78bdb903cbdfee->leave($__internal_70702192b94bd4a1b8f45ea52b9b000253cfcc4982ac93620a78bdb903cbdfee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
