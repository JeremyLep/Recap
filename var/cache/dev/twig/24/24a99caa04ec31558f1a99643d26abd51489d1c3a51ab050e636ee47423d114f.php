<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_1339f1c0c8bd2a8bb453fa4a5868ed81811ac999ce98bab2034909620cc12797 extends Twig_Template
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
        $__internal_d8fea83d8c478e12f027824f3a7b6db4f0a79305aae7f534b85b5d6906eeaf6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8fea83d8c478e12f027824f3a7b6db4f0a79305aae7f534b85b5d6906eeaf6c->enter($__internal_d8fea83d8c478e12f027824f3a7b6db4f0a79305aae7f534b85b5d6906eeaf6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_68049b1582c67390ded493e5d0fe8d202916d7449609bb1c143166a3bd8fca65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68049b1582c67390ded493e5d0fe8d202916d7449609bb1c143166a3bd8fca65->enter($__internal_68049b1582c67390ded493e5d0fe8d202916d7449609bb1c143166a3bd8fca65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_d8fea83d8c478e12f027824f3a7b6db4f0a79305aae7f534b85b5d6906eeaf6c->leave($__internal_d8fea83d8c478e12f027824f3a7b6db4f0a79305aae7f534b85b5d6906eeaf6c_prof);

        
        $__internal_68049b1582c67390ded493e5d0fe8d202916d7449609bb1c143166a3bd8fca65->leave($__internal_68049b1582c67390ded493e5d0fe8d202916d7449609bb1c143166a3bd8fca65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
