<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_b5fe8f0f66acd04a36cbfbb53570597db8aa2e2f408135637a14336b111cc12c extends Twig_Template
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
        $__internal_9d601206ca1069ed651cd17d9df0285dbdfa5ab8674918a0b57f67467861ff4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d601206ca1069ed651cd17d9df0285dbdfa5ab8674918a0b57f67467861ff4a->enter($__internal_9d601206ca1069ed651cd17d9df0285dbdfa5ab8674918a0b57f67467861ff4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_ab42796e77958e571c1145d565f964ea6023b2682e43cbeb3af427f1b9a500a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab42796e77958e571c1145d565f964ea6023b2682e43cbeb3af427f1b9a500a8->enter($__internal_ab42796e77958e571c1145d565f964ea6023b2682e43cbeb3af427f1b9a500a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_9d601206ca1069ed651cd17d9df0285dbdfa5ab8674918a0b57f67467861ff4a->leave($__internal_9d601206ca1069ed651cd17d9df0285dbdfa5ab8674918a0b57f67467861ff4a_prof);

        
        $__internal_ab42796e77958e571c1145d565f964ea6023b2682e43cbeb3af427f1b9a500a8->leave($__internal_ab42796e77958e571c1145d565f964ea6023b2682e43cbeb3af427f1b9a500a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
