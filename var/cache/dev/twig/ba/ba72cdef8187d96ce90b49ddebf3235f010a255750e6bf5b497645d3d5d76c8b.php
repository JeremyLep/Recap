<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a265917090b6aec245c2c3f2cb37206b5286e07e4eaf6ba86c57e1d05096b66f extends Twig_Template
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
        $__internal_c17c5c05d557f942f700fb60e75d9dd42e264b02927c5e7759ad883d24dfd1d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c17c5c05d557f942f700fb60e75d9dd42e264b02927c5e7759ad883d24dfd1d7->enter($__internal_c17c5c05d557f942f700fb60e75d9dd42e264b02927c5e7759ad883d24dfd1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_6e54673d29101ce708a1798d54958ee8020ab901650ce3ff9b7cabb568d1cfaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e54673d29101ce708a1798d54958ee8020ab901650ce3ff9b7cabb568d1cfaa->enter($__internal_6e54673d29101ce708a1798d54958ee8020ab901650ce3ff9b7cabb568d1cfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c17c5c05d557f942f700fb60e75d9dd42e264b02927c5e7759ad883d24dfd1d7->leave($__internal_c17c5c05d557f942f700fb60e75d9dd42e264b02927c5e7759ad883d24dfd1d7_prof);

        
        $__internal_6e54673d29101ce708a1798d54958ee8020ab901650ce3ff9b7cabb568d1cfaa->leave($__internal_6e54673d29101ce708a1798d54958ee8020ab901650ce3ff9b7cabb568d1cfaa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
