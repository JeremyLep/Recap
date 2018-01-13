<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_24ceacdd0a47945c304bc652dc94e42746595a8255513eaca23d4e8dee5e9d22 extends Twig_Template
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
        $__internal_6b7cbb7bd599cc707b7bc7e931945ba96f95f4abaf2600f37a397805ae1d3337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b7cbb7bd599cc707b7bc7e931945ba96f95f4abaf2600f37a397805ae1d3337->enter($__internal_6b7cbb7bd599cc707b7bc7e931945ba96f95f4abaf2600f37a397805ae1d3337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_4d7a873d5494863de54402619a7c1905518ddd102549819e94e935a1acd7230d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d7a873d5494863de54402619a7c1905518ddd102549819e94e935a1acd7230d->enter($__internal_4d7a873d5494863de54402619a7c1905518ddd102549819e94e935a1acd7230d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_6b7cbb7bd599cc707b7bc7e931945ba96f95f4abaf2600f37a397805ae1d3337->leave($__internal_6b7cbb7bd599cc707b7bc7e931945ba96f95f4abaf2600f37a397805ae1d3337_prof);

        
        $__internal_4d7a873d5494863de54402619a7c1905518ddd102549819e94e935a1acd7230d->leave($__internal_4d7a873d5494863de54402619a7c1905518ddd102549819e94e935a1acd7230d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
