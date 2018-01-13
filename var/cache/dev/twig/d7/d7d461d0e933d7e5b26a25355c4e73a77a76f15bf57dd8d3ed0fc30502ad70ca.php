<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_9dc1c4fab37d97f5489864093a8cb1280dd4a00bfdd28e5717a79abe2af724cd extends Twig_Template
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
        $__internal_9965926e5928f02268008672099e4b995497080a8ea8d4d9961d0c7bab8da320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9965926e5928f02268008672099e4b995497080a8ea8d4d9961d0c7bab8da320->enter($__internal_9965926e5928f02268008672099e4b995497080a8ea8d4d9961d0c7bab8da320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_e7a1f60f88dc6e16b67a62bd31c22ba778e7eda11b95732843091ea1d375a4f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a1f60f88dc6e16b67a62bd31c22ba778e7eda11b95732843091ea1d375a4f8->enter($__internal_e7a1f60f88dc6e16b67a62bd31c22ba778e7eda11b95732843091ea1d375a4f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_9965926e5928f02268008672099e4b995497080a8ea8d4d9961d0c7bab8da320->leave($__internal_9965926e5928f02268008672099e4b995497080a8ea8d4d9961d0c7bab8da320_prof);

        
        $__internal_e7a1f60f88dc6e16b67a62bd31c22ba778e7eda11b95732843091ea1d375a4f8->leave($__internal_e7a1f60f88dc6e16b67a62bd31c22ba778e7eda11b95732843091ea1d375a4f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
