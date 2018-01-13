<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_f0207e84fa009b3b17c50f8b8076ce2627b1d95aed09bd849c91ca9c71ae4fea extends Twig_Template
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
        $__internal_622a5cce5c224b47bc6f3edd37b1589d19e3f6276eed8c0fbcda3c41c006e8a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_622a5cce5c224b47bc6f3edd37b1589d19e3f6276eed8c0fbcda3c41c006e8a6->enter($__internal_622a5cce5c224b47bc6f3edd37b1589d19e3f6276eed8c0fbcda3c41c006e8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_aaef908b71e2eca8caa22f78a417fa604fc271496c564b3d4e6cac9372b1142b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaef908b71e2eca8caa22f78a417fa604fc271496c564b3d4e6cac9372b1142b->enter($__internal_aaef908b71e2eca8caa22f78a417fa604fc271496c564b3d4e6cac9372b1142b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_622a5cce5c224b47bc6f3edd37b1589d19e3f6276eed8c0fbcda3c41c006e8a6->leave($__internal_622a5cce5c224b47bc6f3edd37b1589d19e3f6276eed8c0fbcda3c41c006e8a6_prof);

        
        $__internal_aaef908b71e2eca8caa22f78a417fa604fc271496c564b3d4e6cac9372b1142b->leave($__internal_aaef908b71e2eca8caa22f78a417fa604fc271496c564b3d4e6cac9372b1142b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
