<?php

/* @Framework/Form/choice_widget_options.html.php */
class __TwigTemplate_35c4e44ab611e6c290c47540189f7625e72a2ba2104e65496da07f075dbc4510 extends Twig_Template
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
        $__internal_13f5c69d81e238821108a7aa66e647296ca57826811190f0557dcfeed23b6e73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13f5c69d81e238821108a7aa66e647296ca57826811190f0557dcfeed23b6e73->enter($__internal_13f5c69d81e238821108a7aa66e647296ca57826811190f0557dcfeed23b6e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_options.html.php"));

        $__internal_d07db520eb301ad81494314ca255321bdec2f1e687e4cb0356635ccefb9b6c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d07db520eb301ad81494314ca255321bdec2f1e687e4cb0356635ccefb9b6c00->enter($__internal_d07db520eb301ad81494314ca255321bdec2f1e687e4cb0356635ccefb9b6c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_options.html.php"));

        // line 1
        echo "<?php use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceGroupView;

\$translatorHelper = \$view['translator']; // outside of the loop for performance reasons! ?>
<?php \$formHelper = \$view['form']; ?>
<?php foreach (\$choices as \$group_label => \$choice): ?>
    <?php if (is_array(\$choice) || \$choice instanceof ChoiceGroupView): ?>
        <optgroup label=\"<?php echo \$view->escape(false !== \$choice_translation_domain ? \$translatorHelper->trans(\$group_label, array(), \$choice_translation_domain) : \$group_label) ?>\">
            <?php echo \$formHelper->block(\$form, 'choice_widget_options', array('choices' => \$choice)) ?>
        </optgroup>
    <?php else: ?>
        <option value=\"<?php echo \$view->escape(\$choice->value) ?>\" <?php echo \$formHelper->block(\$form, 'choice_attributes', array('choice_attr' => \$choice->attr)) ?><?php if (\$is_selected(\$choice->value, \$value)): ?> selected=\"selected\"<?php endif?>><?php echo \$view->escape(false !== \$choice_translation_domain ? \$translatorHelper->trans(\$choice->label, array(), \$choice_translation_domain) : \$choice->label) ?></option>
    <?php endif ?>
<?php endforeach ?>
";
        
        $__internal_13f5c69d81e238821108a7aa66e647296ca57826811190f0557dcfeed23b6e73->leave($__internal_13f5c69d81e238821108a7aa66e647296ca57826811190f0557dcfeed23b6e73_prof);

        
        $__internal_d07db520eb301ad81494314ca255321bdec2f1e687e4cb0356635ccefb9b6c00->leave($__internal_d07db520eb301ad81494314ca255321bdec2f1e687e4cb0356635ccefb9b6c00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceGroupView;

\$translatorHelper = \$view['translator']; // outside of the loop for performance reasons! ?>
<?php \$formHelper = \$view['form']; ?>
<?php foreach (\$choices as \$group_label => \$choice): ?>
    <?php if (is_array(\$choice) || \$choice instanceof ChoiceGroupView): ?>
        <optgroup label=\"<?php echo \$view->escape(false !== \$choice_translation_domain ? \$translatorHelper->trans(\$group_label, array(), \$choice_translation_domain) : \$group_label) ?>\">
            <?php echo \$formHelper->block(\$form, 'choice_widget_options', array('choices' => \$choice)) ?>
        </optgroup>
    <?php else: ?>
        <option value=\"<?php echo \$view->escape(\$choice->value) ?>\" <?php echo \$formHelper->block(\$form, 'choice_attributes', array('choice_attr' => \$choice->attr)) ?><?php if (\$is_selected(\$choice->value, \$value)): ?> selected=\"selected\"<?php endif?>><?php echo \$view->escape(false !== \$choice_translation_domain ? \$translatorHelper->trans(\$choice->label, array(), \$choice_translation_domain) : \$choice->label) ?></option>
    <?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_widget_options.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_options.html.php");
    }
}
