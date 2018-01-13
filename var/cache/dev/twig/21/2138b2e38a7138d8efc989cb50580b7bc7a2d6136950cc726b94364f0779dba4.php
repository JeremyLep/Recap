<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_b0f7923cb9eef9f3f1691b717644374fa5035735b9f87483778a6ec0bb681fb4 extends Twig_Template
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
        $__internal_b5e93a8c8639f8c4c7460da6e3ae0a53a5a212e636bd6a8eabd4e0466ff3516b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5e93a8c8639f8c4c7460da6e3ae0a53a5a212e636bd6a8eabd4e0466ff3516b->enter($__internal_b5e93a8c8639f8c4c7460da6e3ae0a53a5a212e636bd6a8eabd4e0466ff3516b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_549db3d4f77541fb869b996531b328cccd1bd986a04c17b05fa3d07d5d9ffa88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549db3d4f77541fb869b996531b328cccd1bd986a04c17b05fa3d07d5d9ffa88->enter($__internal_549db3d4f77541fb869b996531b328cccd1bd986a04c17b05fa3d07d5d9ffa88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b5e93a8c8639f8c4c7460da6e3ae0a53a5a212e636bd6a8eabd4e0466ff3516b->leave($__internal_b5e93a8c8639f8c4c7460da6e3ae0a53a5a212e636bd6a8eabd4e0466ff3516b_prof);

        
        $__internal_549db3d4f77541fb869b996531b328cccd1bd986a04c17b05fa3d07d5d9ffa88->leave($__internal_549db3d4f77541fb869b996531b328cccd1bd986a04c17b05fa3d07d5d9ffa88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
