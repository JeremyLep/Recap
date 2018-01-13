<?php

/* AppBundle:Groupe:index.html.twig */
class __TwigTemplate_fe18516ffa45465948fe55d10a57871d9c05278fc0887a986040e03575c1e592 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Groupe:index.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'groupe' => array($this, 'block_groupe'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88d23768a8bc7d56c5c2d87cb9b9cf8af030b2f73843126dce42ad3505e0802f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88d23768a8bc7d56c5c2d87cb9b9cf8af030b2f73843126dce42ad3505e0802f->enter($__internal_88d23768a8bc7d56c5c2d87cb9b9cf8af030b2f73843126dce42ad3505e0802f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Groupe:index.html.twig"));

        $__internal_b2881dff703696f0086bdeaf906cf7c8557c607fe6107af4453e49179ad3744a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2881dff703696f0086bdeaf906cf7c8557c607fe6107af4453e49179ad3744a->enter($__internal_b2881dff703696f0086bdeaf906cf7c8557c607fe6107af4453e49179ad3744a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Groupe:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88d23768a8bc7d56c5c2d87cb9b9cf8af030b2f73843126dce42ad3505e0802f->leave($__internal_88d23768a8bc7d56c5c2d87cb9b9cf8af030b2f73843126dce42ad3505e0802f_prof);

        
        $__internal_b2881dff703696f0086bdeaf906cf7c8557c607fe6107af4453e49179ad3744a->leave($__internal_b2881dff703696f0086bdeaf906cf7c8557c607fe6107af4453e49179ad3744a_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_912dbbfb4d9c94b615dad4df059b4c34ff8aff91180998b9d9f4d2da566f3dad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_912dbbfb4d9c94b615dad4df059b4c34ff8aff91180998b9d9f4d2da566f3dad->enter($__internal_912dbbfb4d9c94b615dad4df059b4c34ff8aff91180998b9d9f4d2da566f3dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $__internal_ad7f888efa0ed999dedf22b2569338b1cdd0e5d3d3cf97ca8a59390c83b792c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad7f888efa0ed999dedf22b2569338b1cdd0e5d3d3cf97ca8a59390c83b792c2->enter($__internal_ad7f888efa0ed999dedf22b2569338b1cdd0e5d3d3cf97ca8a59390c83b792c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 4
        echo "  <a class=\"navbar-brand\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_groupe", array("id_groupe" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new Twig_Error_Runtime('Variable "groupe" does not exist.', 4, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new Twig_Error_Runtime('Variable "groupe" does not exist.', 4, $this->getSourceContext()); })()), "titre", array()), "html", null, true);
        echo "</a>
  <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/defaut2.png"), "html", null, true);
        echo "\" class=\"img-fluid rounded mt-1\" alt=\"avatar\" style=\"max-width: 35px; max-height: 35px;\">
";
        
        $__internal_ad7f888efa0ed999dedf22b2569338b1cdd0e5d3d3cf97ca8a59390c83b792c2->leave($__internal_ad7f888efa0ed999dedf22b2569338b1cdd0e5d3d3cf97ca8a59390c83b792c2_prof);

        
        $__internal_912dbbfb4d9c94b615dad4df059b4c34ff8aff91180998b9d9f4d2da566f3dad->leave($__internal_912dbbfb4d9c94b615dad4df059b4c34ff8aff91180998b9d9f4d2da566f3dad_prof);

    }

    // line 8
    public function block_groupe($context, array $blocks = array())
    {
        $__internal_512fe98d4022e70cdfe561a69cf6e48ac08898a99b0affdd402fddb61672aeb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_512fe98d4022e70cdfe561a69cf6e48ac08898a99b0affdd402fddb61672aeb5->enter($__internal_512fe98d4022e70cdfe561a69cf6e48ac08898a99b0affdd402fddb61672aeb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "groupe"));

        $__internal_9d6d68e731fb5f7f13582bcc92e82364442822b68932e02c0bae6816ee4b263d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d6d68e731fb5f7f13582bcc92e82364442822b68932e02c0bae6816ee4b263d->enter($__internal_9d6d68e731fb5f7f13582bcc92e82364442822b68932e02c0bae6816ee4b263d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "groupe"));

        // line 9
        echo "  <li class=\"nav-item\" id=\"fiche-icon\">
    <a class=\"nav-link\" href=\"\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new Twig_Error_Runtime('Variable "groupe" does not exist.', 10, $this->getSourceContext()); })()), "nbFiche", array()), "html", null, true);
        echo "  <i class=\"fa fa-file-text-o\" aria-hidden=\"true\"></i></a>
  </li>
  <li class=\"nav-item\" id=\"membre-list\">
    <a class=\"nav-link\" href=\"\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new Twig_Error_Runtime('Variable "groupe" does not exist.', 13, $this->getSourceContext()); })()), "nbMembre", array()), "html", null, true);
        echo "  <i class=\"fa fa-user-o\" aria-hidden=\"true\"></i></a>
  </li>
  <li class=\"nav-item\" id=\"invite\">
    <a class=\"nav-link\" href=\"\"><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i></a>
  </li>
";
        
        $__internal_9d6d68e731fb5f7f13582bcc92e82364442822b68932e02c0bae6816ee4b263d->leave($__internal_9d6d68e731fb5f7f13582bcc92e82364442822b68932e02c0bae6816ee4b263d_prof);

        
        $__internal_512fe98d4022e70cdfe561a69cf6e48ac08898a99b0affdd402fddb61672aeb5->leave($__internal_512fe98d4022e70cdfe561a69cf6e48ac08898a99b0affdd402fddb61672aeb5_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_22654f65bf9eb62461800b1d91df4e7fe8c5476098ab26b58607fb7b57abe095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22654f65bf9eb62461800b1d91df4e7fe8c5476098ab26b58607fb7b57abe095->enter($__internal_22654f65bf9eb62461800b1d91df4e7fe8c5476098ab26b58607fb7b57abe095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f5128d193ab7dd8d7091de8226a675b2b7319633b29feeb0d4708b0fcfde6e4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5128d193ab7dd8d7091de8226a675b2b7319633b29feeb0d4708b0fcfde6e4e->enter($__internal_f5128d193ab7dd8d7091de8226a675b2b7319633b29feeb0d4708b0fcfde6e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "

<div class=\"row col-12\" id=\"menu-titre\" style=\"border-bottom: .0625rem solid #e8e8e8;\">
  <h5 class=\"p-3 m-0\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new Twig_Error_Runtime('Variable "groupe" does not exist.', 25, $this->getSourceContext()); })()), "nbFiche", array()), "html", null, true);
        echo " fiches <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_fiche_add", array("id_groupe" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new Twig_Error_Runtime('Variable "groupe" does not exist.', 25, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\"  style=\"font-size: 0.8rem;\"> Ajouter</a></h5>
</div>

<div id=\"content\" class=\"col-12\">
  <div class=\"row p-3\">

    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new Twig_Error_Runtime('Variable "groupe" does not exist.', 31, $this->getSourceContext()); })()), "fiche", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 32
            echo "    
    <section class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 placeholders pt-3\" id=";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fiche"], "id", array()), "html", null, true);
            echo ">
      <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_fiche", array("id_fiche" => twig_get_attribute($this->env, $this->getSourceContext(), $context["fiche"], "id", array()), "id_groupe" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new Twig_Error_Runtime('Variable "groupe" does not exist.', 34, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
            echo "\">
      <div class=\"row\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 placeholder\">
          <div class=\"card \">
            <div class=\"card-header\">
              <div class=\"row\">
              <div class=\" col-12 text-left\">
                <h5>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fiche"], "theme", array()), "html", null, true);
            echo "</h5>
              </div>
            </div>
            <div class=\"row\">
              <div class=\" col-8 text-left\">
                <p class=\"m-0\" style=\"font-size: 0.9rem; \">Auteur: ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["fiche"], "auteur", array()), "user", array()), "nom", array()), "html", null, true);
            echo "</p>
              </div>
              <div class=\" col-4 text-right\">
                <h6 class=\"m-0\">
                  ";
            // line 50
            echo $this->env->getExtension('blackknight467\StarRatingBundle\Extensions\StarRatingExtension')->rating(twig_get_attribute($this->env, $this->getSourceContext(), $context["fiche"], "note", array()), 5);
            echo "
                </h6>
              </div>
            </div>
            <div class=\"row\">
              <div class=\" col-12 text-left\">
                <p class=\"m-0\" style=\"font-size: 0.7rem; \">Difficulté : ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fiche"], "difficulte", array()), "html", null, true);
            echo "  |  Durée : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fiche"], "duree", array()), "html", null, true);
            echo " </p>
              </div>
            </div>
            </div>
            <div class=\"card-block text-center\">
              <h4 class=\"card-title pt-3\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fiche"], "titre", array()), "html", null, true);
            echo "</h4>
              <p class=\"card-text p-3\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fiche"], "description", array()), "html", null, true);
            echo "</p>
            </div>
            <div class=\"card-footer text-muted\">
              <div class=\"row\">
                <h6 class=\"col-5 text-left m-0\">";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fiche"], "nbCommentaire", array()), "html", null, true);
            echo " commentaires</h6>
                <h6 class=\"col-7 m-0 text-right text-white\">

                ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["fiche"], "getTag", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 70
                echo "                  <span class=\"badge badge-primary\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tag"], "label", array()), "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
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
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "
   
  </div>

</div>

";
        
        $__internal_f5128d193ab7dd8d7091de8226a675b2b7319633b29feeb0d4708b0fcfde6e4e->leave($__internal_f5128d193ab7dd8d7091de8226a675b2b7319633b29feeb0d4708b0fcfde6e4e_prof);

        
        $__internal_22654f65bf9eb62461800b1d91df4e7fe8c5476098ab26b58607fb7b57abe095->leave($__internal_22654f65bf9eb62461800b1d91df4e7fe8c5476098ab26b58607fb7b57abe095_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Groupe:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 82,  214 => 72,  205 => 70,  201 => 69,  195 => 66,  188 => 62,  184 => 61,  174 => 56,  165 => 50,  158 => 46,  150 => 41,  140 => 34,  136 => 33,  133 => 32,  129 => 31,  118 => 25,  113 => 22,  104 => 21,  88 => 13,  82 => 10,  79 => 9,  70 => 8,  58 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle::layout.html.twig\" %}

{% block titre %}
  <a class=\"navbar-brand\" href=\"{{ path('app_groupe', {'id_groupe': groupe.id}) }}\">{{ groupe.titre }}</a>
  <img src=\"{{  asset('bundles/app/images/defaut2.png') }}\" class=\"img-fluid rounded mt-1\" alt=\"avatar\" style=\"max-width: 35px; max-height: 35px;\">
{% endblock %}

{% block groupe %}
  <li class=\"nav-item\" id=\"fiche-icon\">
    <a class=\"nav-link\" href=\"\">{{ groupe.nbFiche }}  <i class=\"fa fa-file-text-o\" aria-hidden=\"true\"></i></a>
  </li>
  <li class=\"nav-item\" id=\"membre-list\">
    <a class=\"nav-link\" href=\"\">{{ groupe.nbMembre }}  <i class=\"fa fa-user-o\" aria-hidden=\"true\"></i></a>
  </li>
  <li class=\"nav-item\" id=\"invite\">
    <a class=\"nav-link\" href=\"\"><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i></a>
  </li>
{% endblock %}


{% block body %}


<div class=\"row col-12\" id=\"menu-titre\" style=\"border-bottom: .0625rem solid #e8e8e8;\">
  <h5 class=\"p-3 m-0\">{{ groupe.nbFiche }} fiches <a href=\"{{ path('app_fiche_add', {'id_groupe': groupe.id}) }}\"  style=\"font-size: 0.8rem;\"> Ajouter</a></h5>
</div>

<div id=\"content\" class=\"col-12\">
  <div class=\"row p-3\">

    {% for fiche in groupe.fiche %}
    
    <section class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 placeholders pt-3\" id={{fiche.id}}>
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
              <p class=\"card-text p-3\">{{ fiche.description }}</p>
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
    
    {% endfor %}

   
  </div>

</div>

{% endblock %}", "AppBundle:Groupe:index.html.twig", "/var/www/recap/src/AppBundle/Resources/views/Groupe/index.html.twig");
    }
}
