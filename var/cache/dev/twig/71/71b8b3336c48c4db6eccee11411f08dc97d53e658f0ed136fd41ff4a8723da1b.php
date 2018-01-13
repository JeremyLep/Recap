<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d8047fa56d9bfbd4f8d0314f9eb116c7746290bab9fbd96d09462dfae1b933e4 extends Twig_Template
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
        $__internal_dd4d298d20ff20de03a2ca0c10256030b8bc09cbdde08b8b2a909c8ce3a56146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd4d298d20ff20de03a2ca0c10256030b8bc09cbdde08b8b2a909c8ce3a56146->enter($__internal_dd4d298d20ff20de03a2ca0c10256030b8bc09cbdde08b8b2a909c8ce3a56146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_e3d7472a754fe7264f70577aa5b69456b1420466ece12ef12d7a8e32aca8683c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3d7472a754fe7264f70577aa5b69456b1420466ece12ef12d7a8e32aca8683c->enter($__internal_e3d7472a754fe7264f70577aa5b69456b1420466ece12ef12d7a8e32aca8683c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_dd4d298d20ff20de03a2ca0c10256030b8bc09cbdde08b8b2a909c8ce3a56146->leave($__internal_dd4d298d20ff20de03a2ca0c10256030b8bc09cbdde08b8b2a909c8ce3a56146_prof);

        
        $__internal_e3d7472a754fe7264f70577aa5b69456b1420466ece12ef12d7a8e32aca8683c->leave($__internal_e3d7472a754fe7264f70577aa5b69456b1420466ece12ef12d7a8e32aca8683c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
