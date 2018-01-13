<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_1a76197d7b04ff3871f4e3a5f7feb4e34e0033e9de30f4a3e2ebde589de26d3f extends Twig_Template
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
        $__internal_37f965c0713421d3df4fa281b6e342b4c1f7bcec12927bec7958276a600239fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37f965c0713421d3df4fa281b6e342b4c1f7bcec12927bec7958276a600239fb->enter($__internal_37f965c0713421d3df4fa281b6e342b4c1f7bcec12927bec7958276a600239fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_1cfaf0b100345b42de1cc682a8934b602748396e0ff79471d9b21c2808c4b09a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cfaf0b100345b42de1cc682a8934b602748396e0ff79471d9b21c2808c4b09a->enter($__internal_1cfaf0b100345b42de1cc682a8934b602748396e0ff79471d9b21c2808c4b09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_37f965c0713421d3df4fa281b6e342b4c1f7bcec12927bec7958276a600239fb->leave($__internal_37f965c0713421d3df4fa281b6e342b4c1f7bcec12927bec7958276a600239fb_prof);

        
        $__internal_1cfaf0b100345b42de1cc682a8934b602748396e0ff79471d9b21c2808c4b09a->leave($__internal_1cfaf0b100345b42de1cc682a8934b602748396e0ff79471d9b21c2808c4b09a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
