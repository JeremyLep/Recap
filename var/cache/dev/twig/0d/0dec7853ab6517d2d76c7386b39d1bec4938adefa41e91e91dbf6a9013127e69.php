<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f067d2da500fb46c8457121629f207305b9a47664ae40ff22bb25e9ac35efad8 extends Twig_Template
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
        $__internal_e39fe4ffb03af013c97f10453734827715fc8c7ffbdab18f2e57e7d056f4e293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e39fe4ffb03af013c97f10453734827715fc8c7ffbdab18f2e57e7d056f4e293->enter($__internal_e39fe4ffb03af013c97f10453734827715fc8c7ffbdab18f2e57e7d056f4e293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_a42b1c5d56f6beb9525fc8c732217d600cf3c44df3d6a05d85caf7a2e159d767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a42b1c5d56f6beb9525fc8c732217d600cf3c44df3d6a05d85caf7a2e159d767->enter($__internal_a42b1c5d56f6beb9525fc8c732217d600cf3c44df3d6a05d85caf7a2e159d767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e39fe4ffb03af013c97f10453734827715fc8c7ffbdab18f2e57e7d056f4e293->leave($__internal_e39fe4ffb03af013c97f10453734827715fc8c7ffbdab18f2e57e7d056f4e293_prof);

        
        $__internal_a42b1c5d56f6beb9525fc8c732217d600cf3c44df3d6a05d85caf7a2e159d767->leave($__internal_a42b1c5d56f6beb9525fc8c732217d600cf3c44df3d6a05d85caf7a2e159d767_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
