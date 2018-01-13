<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_a57bf848af5a43500bc133df16fe92f063170cd7c2ef91bd26c3f3976c839678 extends Twig_Template
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
        $__internal_731b2cf5b12a7ea989ca4682966cb851aae9b4fa6931dd6fa9757ab14aefe6dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_731b2cf5b12a7ea989ca4682966cb851aae9b4fa6931dd6fa9757ab14aefe6dd->enter($__internal_731b2cf5b12a7ea989ca4682966cb851aae9b4fa6931dd6fa9757ab14aefe6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_142cde109a09e023703915de2533be91fcbc2ee5a4d308e266aa64e5ec778577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_142cde109a09e023703915de2533be91fcbc2ee5a4d308e266aa64e5ec778577->enter($__internal_142cde109a09e023703915de2533be91fcbc2ee5a4d308e266aa64e5ec778577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_731b2cf5b12a7ea989ca4682966cb851aae9b4fa6931dd6fa9757ab14aefe6dd->leave($__internal_731b2cf5b12a7ea989ca4682966cb851aae9b4fa6931dd6fa9757ab14aefe6dd_prof);

        
        $__internal_142cde109a09e023703915de2533be91fcbc2ee5a4d308e266aa64e5ec778577->leave($__internal_142cde109a09e023703915de2533be91fcbc2ee5a4d308e266aa64e5ec778577_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
