<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_3dfe5f2b42ddc39e6c0ba915c1d21ffa539e83f65d8c83b1e8e1d9cd7262b975 extends Twig_Template
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
        $__internal_9100aff0ee714db06fb65d609aff1da4e3deee9aed2d50b4206b900d90202f9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9100aff0ee714db06fb65d609aff1da4e3deee9aed2d50b4206b900d90202f9a->enter($__internal_9100aff0ee714db06fb65d609aff1da4e3deee9aed2d50b4206b900d90202f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_2884061406ff722ac9875f69819188160848e4acc7411ac65f456145ce2943ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2884061406ff722ac9875f69819188160848e4acc7411ac65f456145ce2943ac->enter($__internal_2884061406ff722ac9875f69819188160848e4acc7411ac65f456145ce2943ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_9100aff0ee714db06fb65d609aff1da4e3deee9aed2d50b4206b900d90202f9a->leave($__internal_9100aff0ee714db06fb65d609aff1da4e3deee9aed2d50b4206b900d90202f9a_prof);

        
        $__internal_2884061406ff722ac9875f69819188160848e4acc7411ac65f456145ce2943ac->leave($__internal_2884061406ff722ac9875f69819188160848e4acc7411ac65f456145ce2943ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
