<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_59f1df198f4125efd6e4c1ab52a8b254b7d364b97b9598b1782b95236cb7271a extends Twig_Template
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
        $__internal_5dc0308351931ade03f4141cbd1f78bca5c3b5175dc0c04293786dcb93f4ae74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dc0308351931ade03f4141cbd1f78bca5c3b5175dc0c04293786dcb93f4ae74->enter($__internal_5dc0308351931ade03f4141cbd1f78bca5c3b5175dc0c04293786dcb93f4ae74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_5321096a80fe3baf5f3a7c4dcaab852efa808de17f6b4fa5bbcbf491a3be8084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5321096a80fe3baf5f3a7c4dcaab852efa808de17f6b4fa5bbcbf491a3be8084->enter($__internal_5321096a80fe3baf5f3a7c4dcaab852efa808de17f6b4fa5bbcbf491a3be8084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_5dc0308351931ade03f4141cbd1f78bca5c3b5175dc0c04293786dcb93f4ae74->leave($__internal_5dc0308351931ade03f4141cbd1f78bca5c3b5175dc0c04293786dcb93f4ae74_prof);

        
        $__internal_5321096a80fe3baf5f3a7c4dcaab852efa808de17f6b4fa5bbcbf491a3be8084->leave($__internal_5321096a80fe3baf5f3a7c4dcaab852efa808de17f6b4fa5bbcbf491a3be8084_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
