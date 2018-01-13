<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e899f8a9ee41f96b41eea2da69d63598774f0c3c291014bc345b1281171f053f extends Twig_Template
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
        $__internal_1e2816404afe11172b86f140bf72081d7e3adff008f5111c5b9051bd8172db6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e2816404afe11172b86f140bf72081d7e3adff008f5111c5b9051bd8172db6e->enter($__internal_1e2816404afe11172b86f140bf72081d7e3adff008f5111c5b9051bd8172db6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_b5c6d6538095ebdd5bb936fd9797a686da0022beee0de4c4a4f7e60fc3bcbf10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5c6d6538095ebdd5bb936fd9797a686da0022beee0de4c4a4f7e60fc3bcbf10->enter($__internal_b5c6d6538095ebdd5bb936fd9797a686da0022beee0de4c4a4f7e60fc3bcbf10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_1e2816404afe11172b86f140bf72081d7e3adff008f5111c5b9051bd8172db6e->leave($__internal_1e2816404afe11172b86f140bf72081d7e3adff008f5111c5b9051bd8172db6e_prof);

        
        $__internal_b5c6d6538095ebdd5bb936fd9797a686da0022beee0de4c4a4f7e60fc3bcbf10->leave($__internal_b5c6d6538095ebdd5bb936fd9797a686da0022beee0de4c4a4f7e60fc3bcbf10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
