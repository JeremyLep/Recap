<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_8e7a547f90d9517e26d30e6ea02b11b6148761e3da1269c038fa760cf2b7a6ae extends Twig_Template
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
        $__internal_b474e37e1fd8c074de593bf761c167befa8ae2a18dcd0a6ef9d7ada5ce5f29f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b474e37e1fd8c074de593bf761c167befa8ae2a18dcd0a6ef9d7ada5ce5f29f6->enter($__internal_b474e37e1fd8c074de593bf761c167befa8ae2a18dcd0a6ef9d7ada5ce5f29f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_c8ee0aa5547bc2c53dd30578b5b2e432bbf6f57ec1213c8b0c7a6eb7ef960fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ee0aa5547bc2c53dd30578b5b2e432bbf6f57ec1213c8b0c7a6eb7ef960fcf->enter($__internal_c8ee0aa5547bc2c53dd30578b5b2e432bbf6f57ec1213c8b0c7a6eb7ef960fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_b474e37e1fd8c074de593bf761c167befa8ae2a18dcd0a6ef9d7ada5ce5f29f6->leave($__internal_b474e37e1fd8c074de593bf761c167befa8ae2a18dcd0a6ef9d7ada5ce5f29f6_prof);

        
        $__internal_c8ee0aa5547bc2c53dd30578b5b2e432bbf6f57ec1213c8b0c7a6eb7ef960fcf->leave($__internal_c8ee0aa5547bc2c53dd30578b5b2e432bbf6f57ec1213c8b0c7a6eb7ef960fcf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
