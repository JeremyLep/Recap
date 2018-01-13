<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_2931ee15575b586368af830cfa23ce4d8f3c44afc8521c09bf2b4e5fe04c6fbe extends Twig_Template
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
        $__internal_2de9231ac8a83314a3c3ac9f9215243c28da4d1e20c1b2565ea86785bb912505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2de9231ac8a83314a3c3ac9f9215243c28da4d1e20c1b2565ea86785bb912505->enter($__internal_2de9231ac8a83314a3c3ac9f9215243c28da4d1e20c1b2565ea86785bb912505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_b70fe9daff756fa4b372200c5d6470f17dbb92b5e9af877f3e50967b4ded070e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b70fe9daff756fa4b372200c5d6470f17dbb92b5e9af877f3e50967b4ded070e->enter($__internal_b70fe9daff756fa4b372200c5d6470f17dbb92b5e9af877f3e50967b4ded070e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_2de9231ac8a83314a3c3ac9f9215243c28da4d1e20c1b2565ea86785bb912505->leave($__internal_2de9231ac8a83314a3c3ac9f9215243c28da4d1e20c1b2565ea86785bb912505_prof);

        
        $__internal_b70fe9daff756fa4b372200c5d6470f17dbb92b5e9af877f3e50967b4ded070e->leave($__internal_b70fe9daff756fa4b372200c5d6470f17dbb92b5e9af877f3e50967b4ded070e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
