<?php

/* AppBundle::menuleft.html.twig */
class __TwigTemplate_07da13a1b33b42bd984164d5442048b4952803cb33de7a34f55653e73cf421be extends Twig_Template
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
        $__internal_499c8962b83e78eca5a97e30a0936f84fe1c694d75c33203326e8def21b5852d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_499c8962b83e78eca5a97e30a0936f84fe1c694d75c33203326e8def21b5852d->enter($__internal_499c8962b83e78eca5a97e30a0936f84fe1c694d75c33203326e8def21b5852d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::menuleft.html.twig"));

        $__internal_701e2dc81710f15b87afd6bef7926302b37b0369833241a99c6baba848928f5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_701e2dc81710f15b87afd6bef7926302b37b0369833241a99c6baba848928f5e->enter($__internal_701e2dc81710f15b87afd6bef7926302b37b0369833241a99c6baba848928f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::menuleft.html.twig"));

        // line 1
        echo "<nav class=\"col-sm-3 col-md-2 d-none d-sm-block navbar-dark bg-dark p-0\" id=\"menu-left\" style=\"position: fixed; height: 100%; border-right: .20rem solid transparent;\">
          <div class=\"col-12 p-0\">
            <div class=\"row\">
              <div class=\"col-7 pr-0\">
                <h6 id=\"nom\" class=\"text-white pb-2 pt-3\">John Doe </h6>
              </div>
              <div class=\"col-5\">
                <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/defaut.png"), "html", null, true);
        echo "\" class=\"img-fluid rounded mt-2 text-right\" alt=\"avatar\" style=\"max-width: 35px; max-height: 35px;\">
              </div>
            </div>
            
            <ul class=\"nav nav-pills flex-column pt-3\">
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home");
        echo "\">Dashboard</a>
              </li>
            </ul>
            <ul class=\"nav nav-pills flex-column pt-3 w-100\">
              ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listGroupes"]) || array_key_exists("listGroupes", $context) ? $context["listGroupes"] : (function () { throw new Twig_Error_Runtime('Variable "listGroupes" does not exist.', 18, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 19
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_groupe", array("id_groupe" => twig_get_attribute($this->env, $this->getSourceContext(), $context["groupe"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["groupe"], "titre", array()), "html", null, true);
            echo "</a>
              </li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            </ul>

            <ul class=\"nav nav-pills flex-column pt-3\">
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"\">Mes fiches (0)</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"\">Favoris (0)</a>
              </li>
            </ul>

            <ul class=\"nav nav-pills flex-column pt-3\">
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_parametre");
        echo "\">Paramètres</a>
              </li>
            </ul>
          </div>
        </nav>";
        
        $__internal_499c8962b83e78eca5a97e30a0936f84fe1c694d75c33203326e8def21b5852d->leave($__internal_499c8962b83e78eca5a97e30a0936f84fe1c694d75c33203326e8def21b5852d_prof);

        
        $__internal_701e2dc81710f15b87afd6bef7926302b37b0369833241a99c6baba848928f5e->leave($__internal_701e2dc81710f15b87afd6bef7926302b37b0369833241a99c6baba848928f5e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::menuleft.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 36,  68 => 23,  57 => 20,  54 => 19,  50 => 18,  43 => 14,  34 => 8,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"col-sm-3 col-md-2 d-none d-sm-block navbar-dark bg-dark p-0\" id=\"menu-left\" style=\"position: fixed; height: 100%; border-right: .20rem solid transparent;\">
          <div class=\"col-12 p-0\">
            <div class=\"row\">
              <div class=\"col-7 pr-0\">
                <h6 id=\"nom\" class=\"text-white pb-2 pt-3\">John Doe </h6>
              </div>
              <div class=\"col-5\">
                <img src=\"{{ asset('bundles/app/images/defaut.png') }}\" class=\"img-fluid rounded mt-2 text-right\" alt=\"avatar\" style=\"max-width: 35px; max-height: 35px;\">
              </div>
            </div>
            
            <ul class=\"nav nav-pills flex-column pt-3\">
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_home') }}\">Dashboard</a>
              </li>
            </ul>
            <ul class=\"nav nav-pills flex-column pt-3 w-100\">
              {% for groupe in listGroupes %}
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_groupe', {'id_groupe': groupe.id}) }}\">{{ groupe.titre }}</a>
              </li>
              {% endfor %}
            </ul>

            <ul class=\"nav nav-pills flex-column pt-3\">
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"\">Mes fiches (0)</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"\">Favoris (0)</a>
              </li>
            </ul>

            <ul class=\"nav nav-pills flex-column pt-3\">
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_parametre') }}\">Paramètres</a>
              </li>
            </ul>
          </div>
        </nav>", "AppBundle::menuleft.html.twig", "/var/www/recap/src/AppBundle/Resources/views/menuleft.html.twig");
    }
}
