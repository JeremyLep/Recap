<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_562ce265b89b8dd922c16fab3f902b71d510a3aa9ed6f994e09ccf64a1dc428c extends Twig_Template
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
        $__internal_9c584a8044e4fa72b056029e6785c1f09df11c85a7af561d855915c733a05213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c584a8044e4fa72b056029e6785c1f09df11c85a7af561d855915c733a05213->enter($__internal_9c584a8044e4fa72b056029e6785c1f09df11c85a7af561d855915c733a05213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_c0910face60925bd01855502b1b4319ae31c743c27e414b88551d9fb8e4206a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0910face60925bd01855502b1b4319ae31c743c27e414b88551d9fb8e4206a8->enter($__internal_c0910face60925bd01855502b1b4319ae31c743c27e414b88551d9fb8e4206a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_9c584a8044e4fa72b056029e6785c1f09df11c85a7af561d855915c733a05213->leave($__internal_9c584a8044e4fa72b056029e6785c1f09df11c85a7af561d855915c733a05213_prof);

        
        $__internal_c0910face60925bd01855502b1b4319ae31c743c27e414b88551d9fb8e4206a8->leave($__internal_c0910face60925bd01855502b1b4319ae31c743c27e414b88551d9fb8e4206a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
