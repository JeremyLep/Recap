<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_cd835745c7f2c91d584d0e1e19a4efc44a8ac446d95a219782702371199e6143 extends Twig_Template
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
        $__internal_d1acae21fc9e737c4b6f9e7a0cc2dca0fb4d18ccc8405663bd92e0d88093f57c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1acae21fc9e737c4b6f9e7a0cc2dca0fb4d18ccc8405663bd92e0d88093f57c->enter($__internal_d1acae21fc9e737c4b6f9e7a0cc2dca0fb4d18ccc8405663bd92e0d88093f57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_13d2d30399154df6d5e9951875c090f72e41e5dd746c4cc28c8b3718bd39812f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d2d30399154df6d5e9951875c090f72e41e5dd746c4cc28c8b3718bd39812f->enter($__internal_13d2d30399154df6d5e9951875c090f72e41e5dd746c4cc28c8b3718bd39812f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_d1acae21fc9e737c4b6f9e7a0cc2dca0fb4d18ccc8405663bd92e0d88093f57c->leave($__internal_d1acae21fc9e737c4b6f9e7a0cc2dca0fb4d18ccc8405663bd92e0d88093f57c_prof);

        
        $__internal_13d2d30399154df6d5e9951875c090f72e41e5dd746c4cc28c8b3718bd39812f->leave($__internal_13d2d30399154df6d5e9951875c090f72e41e5dd746c4cc28c8b3718bd39812f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
