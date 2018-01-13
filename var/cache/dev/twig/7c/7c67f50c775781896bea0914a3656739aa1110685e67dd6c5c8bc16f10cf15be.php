<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_216dc52245f2de43afc1e3f231ddf3df5a80988c833c48176f51ca63591ee9f6 extends Twig_Template
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
        $__internal_e7ad5d699fed771774a2ee45e302213207944d96a6833ad67d3bef91c1df618c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7ad5d699fed771774a2ee45e302213207944d96a6833ad67d3bef91c1df618c->enter($__internal_e7ad5d699fed771774a2ee45e302213207944d96a6833ad67d3bef91c1df618c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_7123dab8198d1c33fbe076291c5f9bac063037359ae51460b035ddf952475a0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7123dab8198d1c33fbe076291c5f9bac063037359ae51460b035ddf952475a0c->enter($__internal_7123dab8198d1c33fbe076291c5f9bac063037359ae51460b035ddf952475a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e7ad5d699fed771774a2ee45e302213207944d96a6833ad67d3bef91c1df618c->leave($__internal_e7ad5d699fed771774a2ee45e302213207944d96a6833ad67d3bef91c1df618c_prof);

        
        $__internal_7123dab8198d1c33fbe076291c5f9bac063037359ae51460b035ddf952475a0c->leave($__internal_7123dab8198d1c33fbe076291c5f9bac063037359ae51460b035ddf952475a0c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
