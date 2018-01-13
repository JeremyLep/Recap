<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_cbee7129ac3518ebc2f3ab9818d06d01fad5a0742571e2eb93c11d7ec8ed6ab8 extends Twig_Template
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
        $__internal_92e6a7affa9f76053b5f08190199984cd736d42d7ebd3aba4a930f197a20af32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92e6a7affa9f76053b5f08190199984cd736d42d7ebd3aba4a930f197a20af32->enter($__internal_92e6a7affa9f76053b5f08190199984cd736d42d7ebd3aba4a930f197a20af32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_e44e1405d349f1373fbdeed1271be215e7781e4cc6c0a9449a831d03df132624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e44e1405d349f1373fbdeed1271be215e7781e4cc6c0a9449a831d03df132624->enter($__internal_e44e1405d349f1373fbdeed1271be215e7781e4cc6c0a9449a831d03df132624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_92e6a7affa9f76053b5f08190199984cd736d42d7ebd3aba4a930f197a20af32->leave($__internal_92e6a7affa9f76053b5f08190199984cd736d42d7ebd3aba4a930f197a20af32_prof);

        
        $__internal_e44e1405d349f1373fbdeed1271be215e7781e4cc6c0a9449a831d03df132624->leave($__internal_e44e1405d349f1373fbdeed1271be215e7781e4cc6c0a9449a831d03df132624_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
