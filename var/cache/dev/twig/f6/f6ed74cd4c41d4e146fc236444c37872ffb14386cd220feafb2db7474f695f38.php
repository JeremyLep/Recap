<?php

/* StarRatingBundle:Display:ratingDisplay.html.twig */
class __TwigTemplate_79b6044beab5c40d9528981dd491492344ef2d30c4a1c0f52ab1896354b9d2f6 extends Twig_Template
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
        $__internal_f12fa62ccef8ee1085ef36256962ffbfba9754e7d259de9b024d7f5d8e0c866f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f12fa62ccef8ee1085ef36256962ffbfba9754e7d259de9b024d7f5d8e0c866f->enter($__internal_f12fa62ccef8ee1085ef36256962ffbfba9754e7d259de9b024d7f5d8e0c866f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StarRatingBundle:Display:ratingDisplay.html.twig"));

        $__internal_94048c315544e5a25a68b546426d635b778884d3810d9788dd43073ec5900dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94048c315544e5a25a68b546426d635b778884d3810d9788dd43073ec5900dac->enter($__internal_94048c315544e5a25a68b546426d635b778884d3810d9788dd43073ec5900dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StarRatingBundle:Display:ratingDisplay.html.twig"));

        // line 1
        echo "<div class=\"rating\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new Twig_Error_Runtime('Variable "max" does not exist.', 2, $this->getSourceContext()); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "    <div class=\"";
            if (($context["i"] <= (isset($context["stars"]) || array_key_exists("stars", $context) ? $context["stars"] : (function () { throw new Twig_Error_Runtime('Variable "stars" does not exist.', 3, $this->getSourceContext()); })()))) {
                echo "star-full";
            } else {
                echo "star-empty";
            }
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["starSize"]) || array_key_exists("starSize", $context) ? $context["starSize"] : (function () { throw new Twig_Error_Runtime('Variable "starSize" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</div>";
        
        $__internal_f12fa62ccef8ee1085ef36256962ffbfba9754e7d259de9b024d7f5d8e0c866f->leave($__internal_f12fa62ccef8ee1085ef36256962ffbfba9754e7d259de9b024d7f5d8e0c866f_prof);

        
        $__internal_94048c315544e5a25a68b546426d635b778884d3810d9788dd43073ec5900dac->leave($__internal_94048c315544e5a25a68b546426d635b778884d3810d9788dd43073ec5900dac_prof);

    }

    public function getTemplateName()
    {
        return "StarRatingBundle:Display:ratingDisplay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"rating\">
  {% for i in 1..max %}
    <div class=\"{% if i <= stars %}star-full{% else %}star-empty{% endif %} {{ starSize }}\"></div>
  {% endfor %}
</div>", "StarRatingBundle:Display:ratingDisplay.html.twig", "/var/www/recap/vendor/blackknight467/star-rating-bundle/blackknight467/StarRatingBundle/Resources/views/Display/ratingDisplay.html.twig");
    }
}
