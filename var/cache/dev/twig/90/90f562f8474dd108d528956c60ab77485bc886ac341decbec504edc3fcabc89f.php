<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_2266063c1f9b7b0948efebd978e7bdbd8ff7789277340062de32a3cbbba411a8 extends Twig_Template
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
        $__internal_0e224e72596fc5de22a897495e52454b72d4e873087eae2d96a31d9720835925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e224e72596fc5de22a897495e52454b72d4e873087eae2d96a31d9720835925->enter($__internal_0e224e72596fc5de22a897495e52454b72d4e873087eae2d96a31d9720835925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_e3a9d3665723733968a2349be9e5c0fed49f522821b27091689693c0f1894572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a9d3665723733968a2349be9e5c0fed49f522821b27091689693c0f1894572->enter($__internal_e3a9d3665723733968a2349be9e5c0fed49f522821b27091689693c0f1894572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_0e224e72596fc5de22a897495e52454b72d4e873087eae2d96a31d9720835925->leave($__internal_0e224e72596fc5de22a897495e52454b72d4e873087eae2d96a31d9720835925_prof);

        
        $__internal_e3a9d3665723733968a2349be9e5c0fed49f522821b27091689693c0f1894572->leave($__internal_e3a9d3665723733968a2349be9e5c0fed49f522821b27091689693c0f1894572_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
