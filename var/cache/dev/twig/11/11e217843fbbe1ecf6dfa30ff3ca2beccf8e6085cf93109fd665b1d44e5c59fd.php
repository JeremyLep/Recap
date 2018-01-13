<?php

/* AppBundle:Membre:index.html.twig */
class __TwigTemplate_f9ead50d4830567d09d14326c6bfa512b8d940b1569529c3064ea45a269681bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Membre:index.html.twig", 1);
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
        $__internal_2acd6d57825b3a0c374bf9e79dcbb42fccca8ad61b37fc4727ddecea0943bbe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2acd6d57825b3a0c374bf9e79dcbb42fccca8ad61b37fc4727ddecea0943bbe0->enter($__internal_2acd6d57825b3a0c374bf9e79dcbb42fccca8ad61b37fc4727ddecea0943bbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Membre:index.html.twig"));

        $__internal_c0f6e73d3ca67b769f07735bfe28f45d697c37d557ffda0cee99b186cac79243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f6e73d3ca67b769f07735bfe28f45d697c37d557ffda0cee99b186cac79243->enter($__internal_c0f6e73d3ca67b769f07735bfe28f45d697c37d557ffda0cee99b186cac79243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Membre:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2acd6d57825b3a0c374bf9e79dcbb42fccca8ad61b37fc4727ddecea0943bbe0->leave($__internal_2acd6d57825b3a0c374bf9e79dcbb42fccca8ad61b37fc4727ddecea0943bbe0_prof);

        
        $__internal_c0f6e73d3ca67b769f07735bfe28f45d697c37d557ffda0cee99b186cac79243->leave($__internal_c0f6e73d3ca67b769f07735bfe28f45d697c37d557ffda0cee99b186cac79243_prof);

    }

    // line 4
    public function block_titre($context, array $blocks = array())
    {
        $__internal_e1f446223b62db2fcad9d98115ea700833687e1527b115c53f4c13fd0e8b833c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1f446223b62db2fcad9d98115ea700833687e1527b115c53f4c13fd0e8b833c->enter($__internal_e1f446223b62db2fcad9d98115ea700833687e1527b115c53f4c13fd0e8b833c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $__internal_9a152801383e2e76536c33faf260b16193e53f175f732a19f3c011a6bdab68f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a152801383e2e76536c33faf260b16193e53f175f732a19f3c011a6bdab68f2->enter($__internal_9a152801383e2e76536c33faf260b16193e53f175f732a19f3c011a6bdab68f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 5
        echo "  <a class=\"navbar-brand\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_groupe", array("id_groupe" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new Twig_Error_Runtime('Variable "groupe" does not exist.', 5, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new Twig_Error_Runtime('Variable "groupe" does not exist.', 5, $this->getSourceContext()); })()), "titre", array()), "html", null, true);
        echo "</a>

";
        
        $__internal_9a152801383e2e76536c33faf260b16193e53f175f732a19f3c011a6bdab68f2->leave($__internal_9a152801383e2e76536c33faf260b16193e53f175f732a19f3c011a6bdab68f2_prof);

        
        $__internal_e1f446223b62db2fcad9d98115ea700833687e1527b115c53f4c13fd0e8b833c->leave($__internal_e1f446223b62db2fcad9d98115ea700833687e1527b115c53f4c13fd0e8b833c_prof);

    }

    // line 9
    public function block_groupe($context, array $blocks = array())
    {
        $__internal_98fca201d4ab65deb989edfa164641b29c85cb358f4da452795d43a6c5f1c03d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98fca201d4ab65deb989edfa164641b29c85cb358f4da452795d43a6c5f1c03d->enter($__internal_98fca201d4ab65deb989edfa164641b29c85cb358f4da452795d43a6c5f1c03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "groupe"));

        $__internal_9980707e7043d5b10036976afb4f0133ae3605e7055830d63b94e3a17fe55f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9980707e7043d5b10036976afb4f0133ae3605e7055830d63b94e3a17fe55f9e->enter($__internal_9980707e7043d5b10036976afb4f0133ae3605e7055830d63b94e3a17fe55f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "groupe"));

        // line 10
        echo "  <li class=\"nav-item\" id=\"fiche-icon\">
    <a class=\"nav-link\" href=\"\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new Twig_Error_Runtime('Variable "groupe" does not exist.', 11, $this->getSourceContext()); })()), "nbFiche", array()), "html", null, true);
        echo "  <i class=\"fa fa-file-text-o\" aria-hidden=\"true\"></i></a>
  </li>
  <li class=\"nav-item\" id=\"membre-list\">
    <a class=\"nav-link\" href=\"\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new Twig_Error_Runtime('Variable "groupe" does not exist.', 14, $this->getSourceContext()); })()), "nbMembre", array()), "html", null, true);
        echo "  <i class=\"fa fa-user-o\" aria-hidden=\"true\"></i></a>
  </li>
  <li class=\"nav-item\" id=\"invite\">
    <a class=\"nav-link\" href=\"\"><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i></a>
  </li>
";
        
        $__internal_9980707e7043d5b10036976afb4f0133ae3605e7055830d63b94e3a17fe55f9e->leave($__internal_9980707e7043d5b10036976afb4f0133ae3605e7055830d63b94e3a17fe55f9e_prof);

        
        $__internal_98fca201d4ab65deb989edfa164641b29c85cb358f4da452795d43a6c5f1c03d->leave($__internal_98fca201d4ab65deb989edfa164641b29c85cb358f4da452795d43a6c5f1c03d_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5a02b37841a462a0b511da0d2cb18542ec256120180ff837be491ccc8a298c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5a02b37841a462a0b511da0d2cb18542ec256120180ff837be491ccc8a298c8->enter($__internal_f5a02b37841a462a0b511da0d2cb18542ec256120180ff837be491ccc8a298c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6c314f70ad47adb153c12801ac3e9595478ebe2a201533e1145572280da8b8db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c314f70ad47adb153c12801ac3e9595478ebe2a201533e1145572280da8b8db->enter($__internal_6c314f70ad47adb153c12801ac3e9595478ebe2a201533e1145572280da8b8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "
<div class=\"row col-12\" id=\"menu-titre\" style=\"border-bottom: .0625rem solid #e8e8e8;\">
  <h5 class=\"p-3 m-0\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new Twig_Error_Runtime('Variable "groupe" does not exist.', 25, $this->getSourceContext()); })()), "nbMembre", array()), "html", null, true);
        echo " membres</h5>
</div>
<div class=\"row p-2\" id=\"membre\" style=\" border-right: .25rem solid transparent;\">
  <table class=\"table table-striped table-hover\">
    <thead>
      <tr>
        <th>N°</th>
        <th>Nom</th>
        <th>E-mail</th>
        <th>Nombre fiche crée</th>
        <th>Statut</th>
        <th>Gérer utilisateur</th>
      </tr>
    </thead>
    <tbody>
    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["membres"]) || array_key_exists("membres", $context) ? $context["membres"] : (function () { throw new Twig_Error_Runtime('Variable "membres" does not exist.', 40, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 41
            echo "      <tr>
        <th scope=\"row\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["membre"], "id", array()), "html", null, true);
            echo "</th>
        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["membre"], "user", array()), "nom", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["membre"], "user", array()), "email", array()), "html", null, true);
            echo "</td>
        <td>3</td>
        <td>Niveau ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["membre"], "accesLvl", array()), "html", null, true);
            echo "</td>
        <td><button type=\"button\" class=\"btn btn-defaut\" data-toggle=\"modal\" data-target=\"#modif\" data-name=\"Mark Otto\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></button></td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </tbody>
  </table>
</div>


<div class=\"modal fade\" id=\"modif\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">



      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Gestion de l'utilisateur</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <form>
          <div class=\"form-group row\">
            <div class=\"col-7\">
              <label for=\"box1\" class=\"form-control-label\">Poster des fiches</label>
            </div>
            <div class=\"text-right col-5\">
              <input type=\"checkbox\" id=\"box1\" /><label for=\"box1\"><span class=\"ui\"></span></label>
            </div>
            
          </div>
          <div class=\"form-group row\">
            <div class=\"col-7\">
              <label for=\"box2\" class=\"form-control-label\">Modifier des fiches</label>
            </div>
            <div class=\"text-right col-5\">
              <input type=\"checkbox\" id=\"box2\" /><label for=\"box2\"><span class=\"ui\"></span></label>
            </div>
            
          </div>
          <div>
            
          </div>
        </form>
      </div>
      <div class=\"modal-footer\">
        <div class=\"row w-100\">
        <div class=\"text-left col-5 pl-0\">
          <button type=\"button\" class=\"btn btn-danger text-left\">Supprimer le membre</button>
        </div>
        <div class=\"text-right col-7\">
          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
          <button type=\"button\" class=\"btn btn-defaut-inv\">Appliquer</button>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>


";
        
        $__internal_6c314f70ad47adb153c12801ac3e9595478ebe2a201533e1145572280da8b8db->leave($__internal_6c314f70ad47adb153c12801ac3e9595478ebe2a201533e1145572280da8b8db_prof);

        
        $__internal_f5a02b37841a462a0b511da0d2cb18542ec256120180ff837be491ccc8a298c8->leave($__internal_f5a02b37841a462a0b511da0d2cb18542ec256120180ff837be491ccc8a298c8_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Membre:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 50,  152 => 46,  147 => 44,  143 => 43,  139 => 42,  136 => 41,  132 => 40,  114 => 25,  110 => 23,  101 => 22,  85 => 14,  79 => 11,  76 => 10,  67 => 9,  51 => 5,  42 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle::layout.html.twig\" %}


{% block titre %}
  <a class=\"navbar-brand\" href=\"{{ path('app_groupe', {'id_groupe': groupe.id}) }}\">{{ groupe.titre }}</a>

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
  <h5 class=\"p-3 m-0\">{{groupe.nbMembre}} membres</h5>
</div>
<div class=\"row p-2\" id=\"membre\" style=\" border-right: .25rem solid transparent;\">
  <table class=\"table table-striped table-hover\">
    <thead>
      <tr>
        <th>N°</th>
        <th>Nom</th>
        <th>E-mail</th>
        <th>Nombre fiche crée</th>
        <th>Statut</th>
        <th>Gérer utilisateur</th>
      </tr>
    </thead>
    <tbody>
    {% for membre in membres %}
      <tr>
        <th scope=\"row\">{{ membre.id }}</th>
        <td>{{membre.user.nom}}</td>
        <td>{{membre.user.email}}</td>
        <td>3</td>
        <td>Niveau {{membre.accesLvl}}</td>
        <td><button type=\"button\" class=\"btn btn-defaut\" data-toggle=\"modal\" data-target=\"#modif\" data-name=\"Mark Otto\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></button></td>
      </tr>
    {% endfor %}
    </tbody>
  </table>
</div>


<div class=\"modal fade\" id=\"modif\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">



      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Gestion de l'utilisateur</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <form>
          <div class=\"form-group row\">
            <div class=\"col-7\">
              <label for=\"box1\" class=\"form-control-label\">Poster des fiches</label>
            </div>
            <div class=\"text-right col-5\">
              <input type=\"checkbox\" id=\"box1\" /><label for=\"box1\"><span class=\"ui\"></span></label>
            </div>
            
          </div>
          <div class=\"form-group row\">
            <div class=\"col-7\">
              <label for=\"box2\" class=\"form-control-label\">Modifier des fiches</label>
            </div>
            <div class=\"text-right col-5\">
              <input type=\"checkbox\" id=\"box2\" /><label for=\"box2\"><span class=\"ui\"></span></label>
            </div>
            
          </div>
          <div>
            
          </div>
        </form>
      </div>
      <div class=\"modal-footer\">
        <div class=\"row w-100\">
        <div class=\"text-left col-5 pl-0\">
          <button type=\"button\" class=\"btn btn-danger text-left\">Supprimer le membre</button>
        </div>
        <div class=\"text-right col-7\">
          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
          <button type=\"button\" class=\"btn btn-defaut-inv\">Appliquer</button>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>


{% endblock %}



", "AppBundle:Membre:index.html.twig", "/var/www/recap/src/AppBundle/Resources/views/Membre/index.html.twig");
    }
}
