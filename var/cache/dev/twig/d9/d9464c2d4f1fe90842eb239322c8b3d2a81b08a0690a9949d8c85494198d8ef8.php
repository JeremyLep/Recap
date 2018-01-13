<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_473b3fb40c36899ada2c5efc49c20a665c08e8cb0f0cd9ecccb042bf47d9e19f extends Twig_Template
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
        $__internal_a898db892ef206eef362f41e076e135c7ca2b0dccc2b92e425cec572b7f29e33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a898db892ef206eef362f41e076e135c7ca2b0dccc2b92e425cec572b7f29e33->enter($__internal_a898db892ef206eef362f41e076e135c7ca2b0dccc2b92e425cec572b7f29e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_45e5d12a258b17275c7c7f41ba749ad93fe4fc3a7bfff55aef6b58bbd2326bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45e5d12a258b17275c7c7f41ba749ad93fe4fc3a7bfff55aef6b58bbd2326bc6->enter($__internal_45e5d12a258b17275c7c7f41ba749ad93fe4fc3a7bfff55aef6b58bbd2326bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_a898db892ef206eef362f41e076e135c7ca2b0dccc2b92e425cec572b7f29e33->leave($__internal_a898db892ef206eef362f41e076e135c7ca2b0dccc2b92e425cec572b7f29e33_prof);

        
        $__internal_45e5d12a258b17275c7c7f41ba749ad93fe4fc3a7bfff55aef6b58bbd2326bc6->leave($__internal_45e5d12a258b17275c7c7f41ba749ad93fe4fc3a7bfff55aef6b58bbd2326bc6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
