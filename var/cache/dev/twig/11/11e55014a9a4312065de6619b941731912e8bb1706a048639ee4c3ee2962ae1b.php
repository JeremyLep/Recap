<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_256ede5a19f0d5851db07fdc15a78d7679ada5f84a8282d3ca23780873b46af7 extends Twig_Template
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
        $__internal_15c8b03dfea453cd838b2f5636b16c270cf72bf6b29a7a8f7730c2935013dd98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15c8b03dfea453cd838b2f5636b16c270cf72bf6b29a7a8f7730c2935013dd98->enter($__internal_15c8b03dfea453cd838b2f5636b16c270cf72bf6b29a7a8f7730c2935013dd98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_34e6c89846b8f6b84ead3571429e8e04b7c962caf9645090c5b5b17706b77d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34e6c89846b8f6b84ead3571429e8e04b7c962caf9645090c5b5b17706b77d1d->enter($__internal_34e6c89846b8f6b84ead3571429e8e04b7c962caf9645090c5b5b17706b77d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_15c8b03dfea453cd838b2f5636b16c270cf72bf6b29a7a8f7730c2935013dd98->leave($__internal_15c8b03dfea453cd838b2f5636b16c270cf72bf6b29a7a8f7730c2935013dd98_prof);

        
        $__internal_34e6c89846b8f6b84ead3571429e8e04b7c962caf9645090c5b5b17706b77d1d->leave($__internal_34e6c89846b8f6b84ead3571429e8e04b7c962caf9645090c5b5b17706b77d1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
