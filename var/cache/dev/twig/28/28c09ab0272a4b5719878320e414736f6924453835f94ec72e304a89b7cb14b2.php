<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_66a6c7da9e190ef3e501421545f57c6372ea42576cf239ab0c4feebbe4e2a8f1 extends Twig_Template
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
        $__internal_31fd18031c0e0d51ff52e680cbccdb3aec915f44786f5f84d74fd2759c719b97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31fd18031c0e0d51ff52e680cbccdb3aec915f44786f5f84d74fd2759c719b97->enter($__internal_31fd18031c0e0d51ff52e680cbccdb3aec915f44786f5f84d74fd2759c719b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_4afc3bc436670f1a53e86c8021aca3b4dfd4539d2a51de28906174f52988b146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4afc3bc436670f1a53e86c8021aca3b4dfd4539d2a51de28906174f52988b146->enter($__internal_4afc3bc436670f1a53e86c8021aca3b4dfd4539d2a51de28906174f52988b146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_31fd18031c0e0d51ff52e680cbccdb3aec915f44786f5f84d74fd2759c719b97->leave($__internal_31fd18031c0e0d51ff52e680cbccdb3aec915f44786f5f84d74fd2759c719b97_prof);

        
        $__internal_4afc3bc436670f1a53e86c8021aca3b4dfd4539d2a51de28906174f52988b146->leave($__internal_4afc3bc436670f1a53e86c8021aca3b4dfd4539d2a51de28906174f52988b146_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
