<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_6497739bc1a5a38a279cb0ea23dccb8f767012eb1e1f9b64fa57ec6abd11cf50 extends Twig_Template
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
        $__internal_a653d897ed72dd16df195e67e075cf3a45e1b51462c0cb059d04798a15b7491b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a653d897ed72dd16df195e67e075cf3a45e1b51462c0cb059d04798a15b7491b->enter($__internal_a653d897ed72dd16df195e67e075cf3a45e1b51462c0cb059d04798a15b7491b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_1545a6f797598d0dc058db2272c7ad12a399944e58b465535f5f14ee9884acdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1545a6f797598d0dc058db2272c7ad12a399944e58b465535f5f14ee9884acdc->enter($__internal_1545a6f797598d0dc058db2272c7ad12a399944e58b465535f5f14ee9884acdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a653d897ed72dd16df195e67e075cf3a45e1b51462c0cb059d04798a15b7491b->leave($__internal_a653d897ed72dd16df195e67e075cf3a45e1b51462c0cb059d04798a15b7491b_prof);

        
        $__internal_1545a6f797598d0dc058db2272c7ad12a399944e58b465535f5f14ee9884acdc->leave($__internal_1545a6f797598d0dc058db2272c7ad12a399944e58b465535f5f14ee9884acdc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
