<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_aae8b41ea1cf8eb6aa82bed71b87df61e44124414901e9cd24109703fdc810a7 extends Twig_Template
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
        $__internal_89cf4497d7cde922c565c68f5bc8d209d1c266ed6c180bb127bfcf2178da44a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89cf4497d7cde922c565c68f5bc8d209d1c266ed6c180bb127bfcf2178da44a1->enter($__internal_89cf4497d7cde922c565c68f5bc8d209d1c266ed6c180bb127bfcf2178da44a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_3d7a42588ee5f745339575b22d98f6380eabbf482a6542bad0631db28bed2a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d7a42588ee5f745339575b22d98f6380eabbf482a6542bad0631db28bed2a70->enter($__internal_3d7a42588ee5f745339575b22d98f6380eabbf482a6542bad0631db28bed2a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_89cf4497d7cde922c565c68f5bc8d209d1c266ed6c180bb127bfcf2178da44a1->leave($__internal_89cf4497d7cde922c565c68f5bc8d209d1c266ed6c180bb127bfcf2178da44a1_prof);

        
        $__internal_3d7a42588ee5f745339575b22d98f6380eabbf482a6542bad0631db28bed2a70->leave($__internal_3d7a42588ee5f745339575b22d98f6380eabbf482a6542bad0631db28bed2a70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
