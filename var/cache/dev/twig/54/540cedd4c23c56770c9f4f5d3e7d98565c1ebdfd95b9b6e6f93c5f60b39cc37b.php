<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_1734be04ed42041efe202b5f072bec11ea8e977ee70480efd45f4c9e7fc7b0ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f55335ce28f66fad809860f4db0e2c9e18760c08005143e9d27a943ee2112b50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f55335ce28f66fad809860f4db0e2c9e18760c08005143e9d27a943ee2112b50->enter($__internal_f55335ce28f66fad809860f4db0e2c9e18760c08005143e9d27a943ee2112b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $__internal_5ee9c2470ee6786b9ea454b8ecd0c4c328821b876babba1a76dd9196a2281cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee9c2470ee6786b9ea454b8ecd0c4c328821b876babba1a76dd9196a2281cb9->enter($__internal_5ee9c2470ee6786b9ea454b8ecd0c4c328821b876babba1a76dd9196a2281cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f55335ce28f66fad809860f4db0e2c9e18760c08005143e9d27a943ee2112b50->leave($__internal_f55335ce28f66fad809860f4db0e2c9e18760c08005143e9d27a943ee2112b50_prof);

        
        $__internal_5ee9c2470ee6786b9ea454b8ecd0c4c328821b876babba1a76dd9196a2281cb9->leave($__internal_5ee9c2470ee6786b9ea454b8ecd0c4c328821b876babba1a76dd9196a2281cb9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae28c86820bf89f3275f690638a20ee2915b3977d6af65a5d7151c0d40d9f74c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae28c86820bf89f3275f690638a20ee2915b3977d6af65a5d7151c0d40d9f74c->enter($__internal_ae28c86820bf89f3275f690638a20ee2915b3977d6af65a5d7151c0d40d9f74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7cb41e7dcd59c14013783ab33166f252e103b3a099e64371832e3e0193ff3a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cb41e7dcd59c14013783ab33166f252e103b3a099e64371832e3e0193ff3a11->enter($__internal_7cb41e7dcd59c14013783ab33166f252e103b3a099e64371832e3e0193ff3a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"row col-12\" id=\"menu-titre\" style=\"border-bottom: .0625rem solid #e8e8e8;\">
  <h5 class=\"p-3 m-0\">16 fiches trouvées</h5>
</div>

<div id=\"content\" class=\"col-12\">
  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listGroupes"]) || array_key_exists("listGroupes", $context) ? $context["listGroupes"] : (function () { throw new Twig_Error_Runtime('Variable "listGroupes" does not exist.', 9, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 10
            echo "  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_groupe", array("id_groupe" => twig_get_attribute($this->env, $this->getSourceContext(), $context["groupe"], "id", array()))), "html", null, true);
            echo "\"><h4 class=\"pt-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["groupe"], "titre", array()), "html", null, true);
            echo "</h4></a>
  <div class=\"row p-3 \">
    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["groupe"], "fiche", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
                // line 13
                echo "    ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()) < 3)) {
                    // line 14
                    echo "    <section class=\"col-md-6 col-12 placeholders pt-3\">
      <a href=\"";
                    // line 15
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_fiche", array("id_fiche" => twig_get_attribute($this->env, $this->getSourceContext(), $context["fiche"], "id", array()), "id_groupe" => twig_get_attribute($this->env, $this->getSourceContext(), $context["groupe"], "id", array()))), "html", null, true);
                    echo "\">
      <div class=\"row\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 placeholder\">
          <div class=\"card \">
            <div class=\"card-header\">
              <div class=\"row\">
              <div class=\" col-12 text-left\">
                <h5>";
                    // line 22
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fiche"], "theme", array()), "html", null, true);
                    echo "</h5>
              </div>
            </div>
            <div class=\"row\">
              <div class=\" col-8 text-left\">
                <p class=\"m-0\" style=\"font-size: 0.9rem; \">Auteur: ";
                    // line 27
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["fiche"], "auteur", array()), "user", array()), "nom", array()), "html", null, true);
                    echo "</p>
              </div>
              <div class=\" col-4 text-right\">
                <h6 class=\"m-0\">
                  ";
                    // line 31
                    echo $this->env->getExtension('blackknight467\StarRatingBundle\Extensions\StarRatingExtension')->rating(twig_get_attribute($this->env, $this->getSourceContext(), $context["fiche"], "note", array()), 5);
                    echo "
                  
                </h6>
              </div>
            </div>
            <div class=\"row\">
              <div class=\" col-12 text-left\">
                <p class=\"m-0\" style=\"font-size: 0.7rem; \">Difficulté : ";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fiche"], "difficulte", array()), "html", null, true);
                    echo "  |  Durée : ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fiche"], "duree", array()), "html", null, true);
                    echo " </p>
              </div>
            </div>
            </div>
            <div class=\"card-block text-center\">
              <h4 class=\"card-title pt-3\">";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fiche"], "titre", array()), "html", null, true);
                    echo "</h4>
              <p class=\"card-text p-3\">";
                    // line 44
                    echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fiche"], "description", array())) > 250)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fiche"], "description", array()), 0, 250) . "...")) : (twig_get_attribute($this->env, $this->getSourceContext(), $context["fiche"], "description", array()))), "html", null, true);
                    echo "</p>
            </div>
            <div class=\"card-footer text-muted\">
              <div class=\"row\">
                <h6 class=\"col-5 text-left m-0\">";
                    // line 48
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fiche"], "nbCommentaire", array()), "html", null, true);
                    echo " commentaires</h6>
                <h6 class=\"col-7 m-0 text-right text-white\">
                  ";
                    // line 50
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["fiche"], "getTag", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                        // line 51
                        echo "                      <span class=\"badge badge-primary\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tag"], "label", array()), "html", null, true);
                        echo "</span>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 53
                    echo "                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      </a>
    </section>
    ";
                }
                // line 62
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "
   
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "</div>
";
        
        $__internal_7cb41e7dcd59c14013783ab33166f252e103b3a099e64371832e3e0193ff3a11->leave($__internal_7cb41e7dcd59c14013783ab33166f252e103b3a099e64371832e3e0193ff3a11_prof);

        
        $__internal_ae28c86820bf89f3275f690638a20ee2915b3977d6af65a5d7151c0d40d9f74c->leave($__internal_ae28c86820bf89f3275f690638a20ee2915b3977d6af65a5d7151c0d40d9f74c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 67,  190 => 63,  176 => 62,  165 => 53,  156 => 51,  152 => 50,  147 => 48,  140 => 44,  136 => 43,  126 => 38,  116 => 31,  109 => 27,  101 => 22,  91 => 15,  88 => 14,  85 => 13,  68 => 12,  60 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle::layout.html.twig\" %}

{% block body %}
<div class=\"row col-12\" id=\"menu-titre\" style=\"border-bottom: .0625rem solid #e8e8e8;\">
  <h5 class=\"p-3 m-0\">16 fiches trouvées</h5>
</div>

<div id=\"content\" class=\"col-12\">
  {% for groupe in listGroupes %}
  <a href=\"{{ path('app_groupe', {'id_groupe': groupe.id}) }}\"><h4 class=\"pt-3\">{{ groupe.titre }}</h4></a>
  <div class=\"row p-3 \">
    {% for fiche in groupe.fiche %}
    {% if loop.index < 3 %}
    <section class=\"col-md-6 col-12 placeholders pt-3\">
      <a href=\"{{ path('app_fiche', {'id_fiche': fiche.id, 'id_groupe': groupe.id}) }}\">
      <div class=\"row\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 placeholder\">
          <div class=\"card \">
            <div class=\"card-header\">
              <div class=\"row\">
              <div class=\" col-12 text-left\">
                <h5>{{ fiche.theme }}</h5>
              </div>
            </div>
            <div class=\"row\">
              <div class=\" col-8 text-left\">
                <p class=\"m-0\" style=\"font-size: 0.9rem; \">Auteur: {{ fiche.auteur.user.nom }}</p>
              </div>
              <div class=\" col-4 text-right\">
                <h6 class=\"m-0\">
                  {{ fiche.note|rating(5) }}
                  
                </h6>
              </div>
            </div>
            <div class=\"row\">
              <div class=\" col-12 text-left\">
                <p class=\"m-0\" style=\"font-size: 0.7rem; \">Difficulté : {{ fiche.difficulte }}  |  Durée : {{ fiche.duree }} </p>
              </div>
            </div>
            </div>
            <div class=\"card-block text-center\">
              <h4 class=\"card-title pt-3\">{{ fiche.titre}}</h4>
              <p class=\"card-text p-3\">{{ fiche.description|length > 250 ? fiche.description|slice(0, 250) ~ '...' : fiche.description  }}</p>
            </div>
            <div class=\"card-footer text-muted\">
              <div class=\"row\">
                <h6 class=\"col-5 text-left m-0\">{{ fiche.nbCommentaire }} commentaires</h6>
                <h6 class=\"col-7 m-0 text-right text-white\">
                  {% for tag in fiche.getTag() %}
                      <span class=\"badge badge-primary\">{{ tag.label }}</span>
                  {% endfor %}
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      </a>
    </section>
    {% endif %}
    {% endfor %}

   
  </div>
{% endfor %}
</div>
{% endblock %}", "AppBundle:Default:index.html.twig", "/var/www/recap/src/AppBundle/Resources/views/Default/index.html.twig");
    }
}
