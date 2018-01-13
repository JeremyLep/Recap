<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_a3db95d9628210eb7d072bd5475cf1542b60c32b9a5be29b3a962a5a8998e4ee extends Twig_Template
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
        $__internal_6cce19cf2105068441172cbf5ed9d318247c9c0f081cea8ac8a9bd42a3269ec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cce19cf2105068441172cbf5ed9d318247c9c0f081cea8ac8a9bd42a3269ec1->enter($__internal_6cce19cf2105068441172cbf5ed9d318247c9c0f081cea8ac8a9bd42a3269ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_251d6d7d9526369eca2fba41342688997c9d200846b24247b0950ee750248af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_251d6d7d9526369eca2fba41342688997c9d200846b24247b0950ee750248af4->enter($__internal_251d6d7d9526369eca2fba41342688997c9d200846b24247b0950ee750248af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_6cce19cf2105068441172cbf5ed9d318247c9c0f081cea8ac8a9bd42a3269ec1->leave($__internal_6cce19cf2105068441172cbf5ed9d318247c9c0f081cea8ac8a9bd42a3269ec1_prof);

        
        $__internal_251d6d7d9526369eca2fba41342688997c9d200846b24247b0950ee750248af4->leave($__internal_251d6d7d9526369eca2fba41342688997c9d200846b24247b0950ee750248af4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
