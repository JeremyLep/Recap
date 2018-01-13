<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_39756a9bdfa03b1e491cbc276493e69931fed54225ab617fe5066c8d3f84c1e5 extends Twig_Template
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
        $__internal_3681a9e2509781e8751e09c82ce26fe8152ee23e7bd69fe9944d6dde22b82b27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3681a9e2509781e8751e09c82ce26fe8152ee23e7bd69fe9944d6dde22b82b27->enter($__internal_3681a9e2509781e8751e09c82ce26fe8152ee23e7bd69fe9944d6dde22b82b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_51ee290f7c2b8ff82c09fc96f9ec851eed876d44f84782c2457174f8ed5fe53d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ee290f7c2b8ff82c09fc96f9ec851eed876d44f84782c2457174f8ed5fe53d->enter($__internal_51ee290f7c2b8ff82c09fc96f9ec851eed876d44f84782c2457174f8ed5fe53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_3681a9e2509781e8751e09c82ce26fe8152ee23e7bd69fe9944d6dde22b82b27->leave($__internal_3681a9e2509781e8751e09c82ce26fe8152ee23e7bd69fe9944d6dde22b82b27_prof);

        
        $__internal_51ee290f7c2b8ff82c09fc96f9ec851eed876d44f84782c2457174f8ed5fe53d->leave($__internal_51ee290f7c2b8ff82c09fc96f9ec851eed876d44f84782c2457174f8ed5fe53d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
