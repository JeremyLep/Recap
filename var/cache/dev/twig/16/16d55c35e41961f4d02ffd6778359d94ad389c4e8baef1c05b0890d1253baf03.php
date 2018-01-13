<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_d1fd805383bf73c0d8e2bc177ff8aa1b3d4003753ba5ff4a2a00807011db5c72 extends Twig_Template
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
        $__internal_c4188d66c2c3c459f0a253c94c8629145d5d4df11f3aa59f7611a8939e74fcc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4188d66c2c3c459f0a253c94c8629145d5d4df11f3aa59f7611a8939e74fcc3->enter($__internal_c4188d66c2c3c459f0a253c94c8629145d5d4df11f3aa59f7611a8939e74fcc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_a4953d8b7614171b5b19603364597af751a8e6112522592dccb1cf23d02c305e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4953d8b7614171b5b19603364597af751a8e6112522592dccb1cf23d02c305e->enter($__internal_a4953d8b7614171b5b19603364597af751a8e6112522592dccb1cf23d02c305e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_c4188d66c2c3c459f0a253c94c8629145d5d4df11f3aa59f7611a8939e74fcc3->leave($__internal_c4188d66c2c3c459f0a253c94c8629145d5d4df11f3aa59f7611a8939e74fcc3_prof);

        
        $__internal_a4953d8b7614171b5b19603364597af751a8e6112522592dccb1cf23d02c305e->leave($__internal_a4953d8b7614171b5b19603364597af751a8e6112522592dccb1cf23d02c305e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
