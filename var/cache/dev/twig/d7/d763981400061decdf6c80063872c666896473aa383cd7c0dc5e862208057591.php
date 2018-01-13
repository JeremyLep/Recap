<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_52dd459289f1492b868ef2aa12a8741c31a75168c826d847200de0066c3066ee extends Twig_Template
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
        $__internal_358f206accc154779dc74cc9859f2092765fd9d4fea65fa7e5dfa9a5df5a555c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_358f206accc154779dc74cc9859f2092765fd9d4fea65fa7e5dfa9a5df5a555c->enter($__internal_358f206accc154779dc74cc9859f2092765fd9d4fea65fa7e5dfa9a5df5a555c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_5702ef1dbe54737665ea90133163aa623689e3064cea6cafa94085885ea9706f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5702ef1dbe54737665ea90133163aa623689e3064cea6cafa94085885ea9706f->enter($__internal_5702ef1dbe54737665ea90133163aa623689e3064cea6cafa94085885ea9706f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_358f206accc154779dc74cc9859f2092765fd9d4fea65fa7e5dfa9a5df5a555c->leave($__internal_358f206accc154779dc74cc9859f2092765fd9d4fea65fa7e5dfa9a5df5a555c_prof);

        
        $__internal_5702ef1dbe54737665ea90133163aa623689e3064cea6cafa94085885ea9706f->leave($__internal_5702ef1dbe54737665ea90133163aa623689e3064cea6cafa94085885ea9706f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
