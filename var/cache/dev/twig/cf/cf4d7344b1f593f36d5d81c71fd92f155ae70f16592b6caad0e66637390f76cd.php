<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_7ceac7076cd4bbee6f394ca4e8a17a4472aa28d363a96e47ff90c8c1194e7ad5 extends Twig_Template
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
        $__internal_17374c3ab9c47ce10ffb5f089d10b974dbf6218fa5e2eb54ce467f14762e4eb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17374c3ab9c47ce10ffb5f089d10b974dbf6218fa5e2eb54ce467f14762e4eb1->enter($__internal_17374c3ab9c47ce10ffb5f089d10b974dbf6218fa5e2eb54ce467f14762e4eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_c2f53fad0bb51d290b8d8e21d70b503850360e97b14525fbd95cdcaf0e714299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f53fad0bb51d290b8d8e21d70b503850360e97b14525fbd95cdcaf0e714299->enter($__internal_c2f53fad0bb51d290b8d8e21d70b503850360e97b14525fbd95cdcaf0e714299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new Twig_Error_Runtime('Variable "year" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new Twig_Error_Runtime('Variable "month" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new Twig_Error_Runtime('Variable "day" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_17374c3ab9c47ce10ffb5f089d10b974dbf6218fa5e2eb54ce467f14762e4eb1->leave($__internal_17374c3ab9c47ce10ffb5f089d10b974dbf6218fa5e2eb54ce467f14762e4eb1_prof);

        
        $__internal_c2f53fad0bb51d290b8d8e21d70b503850360e97b14525fbd95cdcaf0e714299->leave($__internal_c2f53fad0bb51d290b8d8e21d70b503850360e97b14525fbd95cdcaf0e714299_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/date_widget.html.php");
    }
}
