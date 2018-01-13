<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_e085d3f2d5f6f3ce4e4fdfa830952e492ff6ab33e77290343a74477372a43f61 extends Twig_Template
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
        $__internal_40202ec213659811ad5d2fa2897d2d7ba6756d0b2dbd3f8277a09afd3aca1fd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40202ec213659811ad5d2fa2897d2d7ba6756d0b2dbd3f8277a09afd3aca1fd7->enter($__internal_40202ec213659811ad5d2fa2897d2d7ba6756d0b2dbd3f8277a09afd3aca1fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_c6d6798ac27a08a8319d255c7205a4e410105214b3d47044ca2ca48115ab7c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d6798ac27a08a8319d255c7205a4e410105214b3d47044ca2ca48115ab7c63->enter($__internal_c6d6798ac27a08a8319d255c7205a4e410105214b3d47044ca2ca48115ab7c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_40202ec213659811ad5d2fa2897d2d7ba6756d0b2dbd3f8277a09afd3aca1fd7->leave($__internal_40202ec213659811ad5d2fa2897d2d7ba6756d0b2dbd3f8277a09afd3aca1fd7_prof);

        
        $__internal_c6d6798ac27a08a8319d255c7205a4e410105214b3d47044ca2ca48115ab7c63->leave($__internal_c6d6798ac27a08a8319d255c7205a4e410105214b3d47044ca2ca48115ab7c63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
