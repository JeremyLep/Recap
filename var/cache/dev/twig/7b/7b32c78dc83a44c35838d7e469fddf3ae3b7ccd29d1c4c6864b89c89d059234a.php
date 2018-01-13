<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_debc8bbb526bd757f1a0f6dc89e8afa4386fb79db1706c847f297f42e8a91689 extends Twig_Template
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
        $__internal_277ff6ebc1f6d13a2d7868324436607c951fe698f9bbda1b8d70a24d7b0dfa6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_277ff6ebc1f6d13a2d7868324436607c951fe698f9bbda1b8d70a24d7b0dfa6d->enter($__internal_277ff6ebc1f6d13a2d7868324436607c951fe698f9bbda1b8d70a24d7b0dfa6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_d1cc5d779963c74c798f4fb6e46520a6aa4a146a2e17d68f8acf642e61672aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1cc5d779963c74c798f4fb6e46520a6aa4a146a2e17d68f8acf642e61672aba->enter($__internal_d1cc5d779963c74c798f4fb6e46520a6aa4a146a2e17d68f8acf642e61672aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_277ff6ebc1f6d13a2d7868324436607c951fe698f9bbda1b8d70a24d7b0dfa6d->leave($__internal_277ff6ebc1f6d13a2d7868324436607c951fe698f9bbda1b8d70a24d7b0dfa6d_prof);

        
        $__internal_d1cc5d779963c74c798f4fb6e46520a6aa4a146a2e17d68f8acf642e61672aba->leave($__internal_d1cc5d779963c74c798f4fb6e46520a6aa4a146a2e17d68f8acf642e61672aba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
