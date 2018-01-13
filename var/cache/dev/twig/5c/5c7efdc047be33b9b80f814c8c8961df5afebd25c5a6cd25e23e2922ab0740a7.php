<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_405d7dce41e8c8d582c15f9052ab1d001ccb62a241436dc690cc4e46f0c73ec7 extends Twig_Template
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
        $__internal_494b91698720656241488d51a97645e8c54940c4df3fe4ebcc6687ab279ef1be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_494b91698720656241488d51a97645e8c54940c4df3fe4ebcc6687ab279ef1be->enter($__internal_494b91698720656241488d51a97645e8c54940c4df3fe4ebcc6687ab279ef1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_0b86d70dd5689ed289293797b3dc6dd8346c4d4f964c1552de2648928ea0f0a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b86d70dd5689ed289293797b3dc6dd8346c4d4f964c1552de2648928ea0f0a2->enter($__internal_0b86d70dd5689ed289293797b3dc6dd8346c4d4f964c1552de2648928ea0f0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_494b91698720656241488d51a97645e8c54940c4df3fe4ebcc6687ab279ef1be->leave($__internal_494b91698720656241488d51a97645e8c54940c4df3fe4ebcc6687ab279ef1be_prof);

        
        $__internal_0b86d70dd5689ed289293797b3dc6dd8346c4d4f964c1552de2648928ea0f0a2->leave($__internal_0b86d70dd5689ed289293797b3dc6dd8346c4d4f964c1552de2648928ea0f0a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
