<?php

/* AppBundle:Fiche:index.html.twig */
class __TwigTemplate_cceaf48fe51484666f35b89e9aa25923655c6cf4d89102a59f255d7f84b73ccc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Fiche:index.html.twig", 1);
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
        $__internal_d44c7af837653adf91c1c43d82f95d5a5e53d34607e1db385e8b8a656720899a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d44c7af837653adf91c1c43d82f95d5a5e53d34607e1db385e8b8a656720899a->enter($__internal_d44c7af837653adf91c1c43d82f95d5a5e53d34607e1db385e8b8a656720899a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Fiche:index.html.twig"));

        $__internal_68bdcdd44802a623214be1a3c7580fcd14384d2e6b55b0c3ccfc02dcb1e18ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68bdcdd44802a623214be1a3c7580fcd14384d2e6b55b0c3ccfc02dcb1e18ded->enter($__internal_68bdcdd44802a623214be1a3c7580fcd14384d2e6b55b0c3ccfc02dcb1e18ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Fiche:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d44c7af837653adf91c1c43d82f95d5a5e53d34607e1db385e8b8a656720899a->leave($__internal_d44c7af837653adf91c1c43d82f95d5a5e53d34607e1db385e8b8a656720899a_prof);

        
        $__internal_68bdcdd44802a623214be1a3c7580fcd14384d2e6b55b0c3ccfc02dcb1e18ded->leave($__internal_68bdcdd44802a623214be1a3c7580fcd14384d2e6b55b0c3ccfc02dcb1e18ded_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_52b6d1f66e21d99c0bb623f24a19c606117cefff00084b5ff5a2337d74be97f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52b6d1f66e21d99c0bb623f24a19c606117cefff00084b5ff5a2337d74be97f1->enter($__internal_52b6d1f66e21d99c0bb623f24a19c606117cefff00084b5ff5a2337d74be97f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $__internal_babdca0bf606af83a262d52fe5856014b99c883c50f218a459eeefac37942a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_babdca0bf606af83a262d52fe5856014b99c883c50f218a459eeefac37942a7c->enter($__internal_babdca0bf606af83a262d52fe5856014b99c883c50f218a459eeefac37942a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

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
        
        $__internal_babdca0bf606af83a262d52fe5856014b99c883c50f218a459eeefac37942a7c->leave($__internal_babdca0bf606af83a262d52fe5856014b99c883c50f218a459eeefac37942a7c_prof);

        
        $__internal_52b6d1f66e21d99c0bb623f24a19c606117cefff00084b5ff5a2337d74be97f1->leave($__internal_52b6d1f66e21d99c0bb623f24a19c606117cefff00084b5ff5a2337d74be97f1_prof);

    }

    // line 8
    public function block_groupe($context, array $blocks = array())
    {
        $__internal_b5ff143bffbf9145b11782b79d7fdb77b1ce38e4791a2c5fa16dca000fed8aab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5ff143bffbf9145b11782b79d7fdb77b1ce38e4791a2c5fa16dca000fed8aab->enter($__internal_b5ff143bffbf9145b11782b79d7fdb77b1ce38e4791a2c5fa16dca000fed8aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "groupe"));

        $__internal_d91e31509c984f301dc314ac1528bccadb7ec12d746d9d521ad7f5e0d2a797cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d91e31509c984f301dc314ac1528bccadb7ec12d746d9d521ad7f5e0d2a797cd->enter($__internal_d91e31509c984f301dc314ac1528bccadb7ec12d746d9d521ad7f5e0d2a797cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "groupe"));

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
        
        $__internal_d91e31509c984f301dc314ac1528bccadb7ec12d746d9d521ad7f5e0d2a797cd->leave($__internal_d91e31509c984f301dc314ac1528bccadb7ec12d746d9d521ad7f5e0d2a797cd_prof);

        
        $__internal_b5ff143bffbf9145b11782b79d7fdb77b1ce38e4791a2c5fa16dca000fed8aab->leave($__internal_b5ff143bffbf9145b11782b79d7fdb77b1ce38e4791a2c5fa16dca000fed8aab_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed2ac92bc6af5f22686be3055da07ca70303eb1100e33e749a9717d056337c6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed2ac92bc6af5f22686be3055da07ca70303eb1100e33e749a9717d056337c6c->enter($__internal_ed2ac92bc6af5f22686be3055da07ca70303eb1100e33e749a9717d056337c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_30303b9b02974fd453db17518eb98bf5f9eabd99c0c2384cd9470297ed10f5c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30303b9b02974fd453db17518eb98bf5f9eabd99c0c2384cd9470297ed10f5c8->enter($__internal_30303b9b02974fd453db17518eb98bf5f9eabd99c0c2384cd9470297ed10f5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "
<div class=\"row\" id=\"menu-titre\">
<h5 class=\"p-3 col-8\" style=\"border-bottom: .0625rem solid #e8e8e8; border-right: 1rem solid transparent;\">Fiche N°";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new Twig_Error_Runtime('Variable "fiche" does not exist.', 23, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "  <i class=\"fa fa-star-o\" id=\"fiche-fav\" aria-hidden=\"true\"></i><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_fiche_edit", array("id_fiche" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new Twig_Error_Runtime('Variable "fiche" does not exist.', 23, $this->getSourceContext()); })()), "id", array()), "id_groupe" => (isset($context["id_groupe"]) || array_key_exists("id_groupe", $context) ? $context["id_groupe"] : (function () { throw new Twig_Error_Runtime('Variable "id_groupe" does not exist.', 23, $this->getSourceContext()); })()))), "html", null, true);
        echo "\" class=\"pl-3\" style=\"font-size: 0.8rem; \">edit</a></h5>
<h5 class=\"p-3 col-4\" style=\"border-bottom: .0625rem solid #e8e8e8; border-left: 1rem solid transparent;\">Sources<a href=\"\" class=\"pl-3\" style=\"font-size: 0.8rem; \">ajouter</a></h5>
</div>
<div class=\"row\" style=\"border-top: .25rem solid transparent;\">

  <section class=\"col-8 placeholders pt-3\" id=\"fiche\">
    <div class=\"row\">
      <div class=\"col-lg-12 col-md-12 col-sm-12 placeholder\">
        <div class=\"card \">
          <div class=\"card-header\">
            <div class=\"row\">
              <div class=\" col-12 text-left\">
                <h5>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new Twig_Error_Runtime('Variable "fiche" does not exist.', 35, $this->getSourceContext()); })()), "theme", array()), "html", null, true);
        echo "</h5>
              </div>
            </div>
            <div class=\"row\">
              <div class=\" col-8 text-left\">
                <p class=\"m-0\" style=\"font-size: 0.9rem; \">Auteur: ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new Twig_Error_Runtime('Variable "fiche" does not exist.', 40, $this->getSourceContext()); })()), "auteur", array()), "user", array()), "nom", array()), "html", null, true);
        echo "</p>
              </div>
              <div class=\" col-4 text-right\">
                <h6 class=\"m-0\">
                  ";
        // line 44
        echo $this->env->getExtension('blackknight467\StarRatingBundle\Extensions\StarRatingExtension')->rating(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new Twig_Error_Runtime('Variable "fiche" does not exist.', 44, $this->getSourceContext()); })()), "note", array()), 5);
        echo "
                </h6>
              </div>
            </div>
            <div class=\"row\">
              <div class=\" col-12 text-left\">
                <p class=\"m-0\" style=\"font-size: 0.7rem; \">Difficulté : ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new Twig_Error_Runtime('Variable "fiche" does not exist.', 50, $this->getSourceContext()); })()), "difficulte", array()), "html", null, true);
        echo "  |  Durée : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new Twig_Error_Runtime('Variable "fiche" does not exist.', 50, $this->getSourceContext()); })()), "duree", array()), "html", null, true);
        echo "</p>
              </div>
            </div>
          </div>
          <div class=\"card-block text-center\">
            <h4 class=\"card-title pt-3\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new Twig_Error_Runtime('Variable "fiche" does not exist.', 55, $this->getSourceContext()); })()), "titre", array()), "html", null, true);
        echo "</h4>
            <p class=\"card-text p-3\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new Twig_Error_Runtime('Variable "fiche" does not exist.', 56, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo "</p>
          </div>
          <div class=\"card-footer text-muted\">
            <div class=\"row\">
              <h6 class=\"col-5 text-left m-0\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new Twig_Error_Runtime('Variable "fiche" does not exist.', 60, $this->getSourceContext()); })()), "nbCommentaire", array()), "html", null, true);
        echo " commentaires</h6>
              <h6 class=\"col-7 m-0 text-right text-white\">
                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new Twig_Error_Runtime('Variable "tags" does not exist.', 62, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 63
            echo "                <span class=\"badge badge-primary\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tag"], "label", array()), "html", null, true);
            echo "</span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "              </h6>
            </div>
          </div>
          ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new Twig_Error_Runtime('Variable "commentaires" does not exist.', 68, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 69
            echo "          <div  class=\"card-footer text-muted\">
            ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["commentaire"], "contenu", array()), "html", null, true);
            echo "
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "        </div>
      </div>
    </div>
  </section>
  <section class=\"col-4 text-center placeholders pt-3\" id=\"source\" style=\" border-left: .0625rem solid #e8e8e8;\">
    <div class=\"row\"> 
      ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ressources"]) || array_key_exists("ressources", $context) ? $context["ressources"] : (function () { throw new Twig_Error_Runtime('Variable "ressources" does not exist.', 79, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ressource"]) {
            // line 80
            echo "      <div class=\"col-lg-6 col-md-6 col-sm-12 placeholder pb-2\">
        <div class=\"card\">
          <img class=\"card-img-top \" src=\"https://www.openoffice.org/ui/VisualDesign/gifs/Icons/OOo30_final_mimetype/Galaxy_OOo3_writer-doc_256.png\" alt=\"Card image cap\">
          <div class=\"card-body p-0\">
            <p class=\"text-muted m-0\">";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ressource"], "titre", array()), "html", null, true);
            echo "</p>
            <div class=\"row col-12 m-0 p-0\">
              <button type=\"button\" class=\"btn btn-sm btn-secondary col-6 rounded-0\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i></button>
              <button type=\"button\" class=\"btn btn-sm btn-secondary col-6 rounded-0\"><i class=\"fa fa-cloud-download\" aria-hidden=\"true\"></i></button>
            </div>
          </div>
        </div>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ressource'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "    </div>
    
  </section>
</div>

";
        
        $__internal_30303b9b02974fd453db17518eb98bf5f9eabd99c0c2384cd9470297ed10f5c8->leave($__internal_30303b9b02974fd453db17518eb98bf5f9eabd99c0c2384cd9470297ed10f5c8_prof);

        
        $__internal_ed2ac92bc6af5f22686be3055da07ca70303eb1100e33e749a9717d056337c6c->leave($__internal_ed2ac92bc6af5f22686be3055da07ca70303eb1100e33e749a9717d056337c6c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Fiche:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 93,  236 => 84,  230 => 80,  226 => 79,  218 => 73,  209 => 70,  206 => 69,  202 => 68,  197 => 65,  188 => 63,  184 => 62,  179 => 60,  172 => 56,  168 => 55,  158 => 50,  149 => 44,  142 => 40,  134 => 35,  117 => 23,  113 => 21,  104 => 20,  88 => 13,  82 => 10,  79 => 9,  70 => 8,  58 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

<div class=\"row\" id=\"menu-titre\">
<h5 class=\"p-3 col-8\" style=\"border-bottom: .0625rem solid #e8e8e8; border-right: 1rem solid transparent;\">Fiche N°{{ fiche.id }}  <i class=\"fa fa-star-o\" id=\"fiche-fav\" aria-hidden=\"true\"></i><a href=\"{{ path('app_fiche_edit', {'id_fiche': fiche.id, 'id_groupe': id_groupe}) }}\" class=\"pl-3\" style=\"font-size: 0.8rem; \">edit</a></h5>
<h5 class=\"p-3 col-4\" style=\"border-bottom: .0625rem solid #e8e8e8; border-left: 1rem solid transparent;\">Sources<a href=\"\" class=\"pl-3\" style=\"font-size: 0.8rem; \">ajouter</a></h5>
</div>
<div class=\"row\" style=\"border-top: .25rem solid transparent;\">

  <section class=\"col-8 placeholders pt-3\" id=\"fiche\">
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
                <p class=\"m-0\" style=\"font-size: 0.7rem; \">Difficulté : {{ fiche.difficulte }}  |  Durée : {{ fiche.duree}}</p>
              </div>
            </div>
          </div>
          <div class=\"card-block text-center\">
            <h4 class=\"card-title pt-3\">{{ fiche.titre }}</h4>
            <p class=\"card-text p-3\">{{ fiche.description }}</p>
          </div>
          <div class=\"card-footer text-muted\">
            <div class=\"row\">
              <h6 class=\"col-5 text-left m-0\">{{ fiche.nbCommentaire }} commentaires</h6>
              <h6 class=\"col-7 m-0 text-right text-white\">
                {% for tag in tags %}
                <span class=\"badge badge-primary\">{{tag.label}}</span>
                {% endfor %}
              </h6>
            </div>
          </div>
          {% for commentaire in commentaires %}
          <div  class=\"card-footer text-muted\">
            {{commentaire.contenu}}
          </div>
          {% endfor %}
        </div>
      </div>
    </div>
  </section>
  <section class=\"col-4 text-center placeholders pt-3\" id=\"source\" style=\" border-left: .0625rem solid #e8e8e8;\">
    <div class=\"row\"> 
      {% for ressource in ressources %}
      <div class=\"col-lg-6 col-md-6 col-sm-12 placeholder pb-2\">
        <div class=\"card\">
          <img class=\"card-img-top \" src=\"https://www.openoffice.org/ui/VisualDesign/gifs/Icons/OOo30_final_mimetype/Galaxy_OOo3_writer-doc_256.png\" alt=\"Card image cap\">
          <div class=\"card-body p-0\">
            <p class=\"text-muted m-0\">{{ressource.titre}}</p>
            <div class=\"row col-12 m-0 p-0\">
              <button type=\"button\" class=\"btn btn-sm btn-secondary col-6 rounded-0\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i></button>
              <button type=\"button\" class=\"btn btn-sm btn-secondary col-6 rounded-0\"><i class=\"fa fa-cloud-download\" aria-hidden=\"true\"></i></button>
            </div>
          </div>
        </div>
      </div>
      {% endfor %}
    </div>
    
  </section>
</div>

{% endblock %}
", "AppBundle:Fiche:index.html.twig", "/var/www/recap/src/AppBundle/Resources/views/Fiche/index.html.twig");
    }
}
