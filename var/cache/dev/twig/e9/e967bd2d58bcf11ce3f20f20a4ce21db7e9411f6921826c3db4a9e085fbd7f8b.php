<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_92e18d6c3693600e577d81d9236a3473802bfe80dee225d16e7847b675fa51a5 extends Twig_Template
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
        $__internal_5329cc01ba108f9f04a77547de4c48d27a82ce3407b68226c2335760dd12d76e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5329cc01ba108f9f04a77547de4c48d27a82ce3407b68226c2335760dd12d76e->enter($__internal_5329cc01ba108f9f04a77547de4c48d27a82ce3407b68226c2335760dd12d76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_21662e8e92dc5f1d7e4eb74a0130b962a9404a0040b982949ac8226a26d8f723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21662e8e92dc5f1d7e4eb74a0130b962a9404a0040b982949ac8226a26d8f723->enter($__internal_21662e8e92dc5f1d7e4eb74a0130b962a9404a0040b982949ac8226a26d8f723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_5329cc01ba108f9f04a77547de4c48d27a82ce3407b68226c2335760dd12d76e->leave($__internal_5329cc01ba108f9f04a77547de4c48d27a82ce3407b68226c2335760dd12d76e_prof);

        
        $__internal_21662e8e92dc5f1d7e4eb74a0130b962a9404a0040b982949ac8226a26d8f723->leave($__internal_21662e8e92dc5f1d7e4eb74a0130b962a9404a0040b982949ac8226a26d8f723_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
