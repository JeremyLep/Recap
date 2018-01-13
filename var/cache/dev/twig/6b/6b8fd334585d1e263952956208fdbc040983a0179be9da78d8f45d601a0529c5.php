<?php

/* ::base.html.twig */
class __TwigTemplate_ef04824326da6093caf2f3085c59a6bc48dc8b3469d6455fea6d9c62be6be48e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05d21066d88eb329ac13dbb4297f92dc4dee9b0481c93571e89d7b7a9f4ea10f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05d21066d88eb329ac13dbb4297f92dc4dee9b0481c93571e89d7b7a9f4ea10f->enter($__internal_05d21066d88eb329ac13dbb4297f92dc4dee9b0481c93571e89d7b7a9f4ea10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_258282f02b02ece0f0a0f4138d1fa7f60086ee1b67f6000e411a252977c405ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_258282f02b02ece0f0a0f4138d1fa7f60086ee1b67f6000e411a252977c405ca->enter($__internal_258282f02b02ece0f0a0f4138d1fa7f60086ee1b67f6000e411a252977c405ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
  <head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

  ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
  </head>

  <body>
     <header>
      <nav class=\"navbar navbar-expand-md bg-light fixed-top bg-light col-md-10 offset-md-2 col-sm-9 offset-sm-3\" id=\"menu-top\">
        <a class=\"navbar-brand\" href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home");
        echo "\">Groupe 1</a>
        <button class=\"navbar-toggler d-lg-none\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse col-12\" id=\"navbarsExampleDefault\">
          <ul class=\"navbar-nav col-3\">
            <li class=\"nav-item\" id=\"fiche-icon\">
              <a class=\"nav-link\" href=\"#\">16 <i class=\"fa fa-file-text-o\" aria-hidden=\"true\"></i></a>
            </li>
            <li class=\"nav-item\" id=\"membre-list\">
              <a class=\"nav-link\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_membre");
        echo "\">14<i class=\"fa fa-user-o\" aria-hidden=\"true\"></i></a>
            </li>
          </ul>
          <form class=\"form-inline mt-2 mt-md-0 col-6\">
            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-defaut my-2 my-sm-0\" type=\"submit\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
          </form>
          <ul class=\"navbar-nav col-2\" id=\"deconnexion\">
           <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Deconnexion</a>
          </li>
          </ul>
        </div>
      </nav>
    </header>

    <div class=\"container-fluid\">
      <div class=\"row\">
        <nav class=\"col-sm-3 col-md-2 d-none d-sm-block navbar-dark bg-dark p-0\" id=\"menu-left\"  style=\"position: fixed; height: 100%; border-right: .20rem solid transparent;\">
          <h6 id=\"nom\" class=\"text-white pb-2 pt-3\">John Doe</h6>
          <ul class=\"nav nav-pills flex-column w-100\">
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_groupe");
        echo "\">Groupe1</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_groupe");
        echo "\">Groupe 2</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_groupe");
        echo "\">Groupe 3</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_groupe");
        echo "\">Groupe 4</a>
            </li>
          </ul>

          <ul class=\"nav nav-pills flex-column pt-3\">
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_membre");
        echo "\">Membres</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_invite");
        echo "\">Inviter</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_favoris");
        echo "\">Favoris</a>
            </li>
          </ul>

          <ul class=\"nav nav-pills flex-column pt-3\">
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_parametre");
        echo "\">Paramètres</a>
            </li>
          </ul>
        </nav>

        <main role=\"main\" class=\"col-sm-9 ml-sm-auto col-md-10 pt-5\">

          ";
        // line 86
        $this->displayBlock('body', $context, $blocks);
        // line 88
        echo "
        </main>
      </div>




  ";
        // line 95
        $this->displayBlock('javascripts', $context, $blocks);
        // line 101
        echo "  </body>
</html>";
        
        $__internal_05d21066d88eb329ac13dbb4297f92dc4dee9b0481c93571e89d7b7a9f4ea10f->leave($__internal_05d21066d88eb329ac13dbb4297f92dc4dee9b0481c93571e89d7b7a9f4ea10f_prof);

        
        $__internal_258282f02b02ece0f0a0f4138d1fa7f60086ee1b67f6000e411a252977c405ca->leave($__internal_258282f02b02ece0f0a0f4138d1fa7f60086ee1b67f6000e411a252977c405ca_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_276bb9c90d9c788b10ffa8d009d88b4a95b05b4d5d24d2d430a517c11264213f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276bb9c90d9c788b10ffa8d009d88b4a95b05b4d5d24d2d430a517c11264213f->enter($__internal_276bb9c90d9c788b10ffa8d009d88b4a95b05b4d5d24d2d430a517c11264213f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a9d0df3e2306f0d23dbf41f99df3e3f2dbd0608b80b58b7c998ecef4f6e4ef39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9d0df3e2306f0d23dbf41f99df3e3f2dbd0608b80b58b7c998ecef4f6e4ef39->enter($__internal_a9d0df3e2306f0d23dbf41f99df3e3f2dbd0608b80b58b7c998ecef4f6e4ef39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Récap";
        
        $__internal_a9d0df3e2306f0d23dbf41f99df3e3f2dbd0608b80b58b7c998ecef4f6e4ef39->leave($__internal_a9d0df3e2306f0d23dbf41f99df3e3f2dbd0608b80b58b7c998ecef4f6e4ef39_prof);

        
        $__internal_276bb9c90d9c788b10ffa8d009d88b4a95b05b4d5d24d2d430a517c11264213f->leave($__internal_276bb9c90d9c788b10ffa8d009d88b4a95b05b4d5d24d2d430a517c11264213f_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c82c2ca051dc1335015b50da8e01f665c432004e3a1e1aefce963bf8accc230f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c82c2ca051dc1335015b50da8e01f665c432004e3a1e1aefce963bf8accc230f->enter($__internal_c82c2ca051dc1335015b50da8e01f665c432004e3a1e1aefce963bf8accc230f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_03ba105a72702800c17ed14654bef7d4529096310d0886ed96785245ed36d5d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03ba105a72702800c17ed14654bef7d4529096310d0886ed96785245ed36d5d4->enter($__internal_03ba105a72702800c17ed14654bef7d4529096310d0886ed96785245ed36d5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"./css/style.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Rajdhani:500\" rel=\"stylesheet\">
  ";
        
        $__internal_03ba105a72702800c17ed14654bef7d4529096310d0886ed96785245ed36d5d4->leave($__internal_03ba105a72702800c17ed14654bef7d4529096310d0886ed96785245ed36d5d4_prof);

        
        $__internal_c82c2ca051dc1335015b50da8e01f665c432004e3a1e1aefce963bf8accc230f->leave($__internal_c82c2ca051dc1335015b50da8e01f665c432004e3a1e1aefce963bf8accc230f_prof);

    }

    // line 86
    public function block_body($context, array $blocks = array())
    {
        $__internal_97fe6d0365ea24e9ffc70813f17da6efb1b07dc5df009047f6e6d2b969037696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97fe6d0365ea24e9ffc70813f17da6efb1b07dc5df009047f6e6d2b969037696->enter($__internal_97fe6d0365ea24e9ffc70813f17da6efb1b07dc5df009047f6e6d2b969037696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f57d88e83b7c8bfb7c0821d67c023cfea4b5214f7276f82d76791d25969062b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f57d88e83b7c8bfb7c0821d67c023cfea4b5214f7276f82d76791d25969062b5->enter($__internal_f57d88e83b7c8bfb7c0821d67c023cfea4b5214f7276f82d76791d25969062b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 87
        echo "          ";
        
        $__internal_f57d88e83b7c8bfb7c0821d67c023cfea4b5214f7276f82d76791d25969062b5->leave($__internal_f57d88e83b7c8bfb7c0821d67c023cfea4b5214f7276f82d76791d25969062b5_prof);

        
        $__internal_97fe6d0365ea24e9ffc70813f17da6efb1b07dc5df009047f6e6d2b969037696->leave($__internal_97fe6d0365ea24e9ffc70813f17da6efb1b07dc5df009047f6e6d2b969037696_prof);

    }

    // line 95
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6007e3a4421143da2073ef759113fe8615db1645c429ab238699cb752f961b19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6007e3a4421143da2073ef759113fe8615db1645c429ab238699cb752f961b19->enter($__internal_6007e3a4421143da2073ef759113fe8615db1645c429ab238699cb752f961b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_eeff921d3dec5420f609d6f6ee249048235cd1fe011901a568c77f1c704b5442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeff921d3dec5420f609d6f6ee249048235cd1fe011901a568c77f1c704b5442->enter($__internal_eeff921d3dec5420f609d6f6ee249048235cd1fe011901a568c77f1c704b5442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 96
        echo "    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
    <script src=\"https://use.fontawesome.com/06bfea3587.js\"></script>
  ";
        
        $__internal_eeff921d3dec5420f609d6f6ee249048235cd1fe011901a568c77f1c704b5442->leave($__internal_eeff921d3dec5420f609d6f6ee249048235cd1fe011901a568c77f1c704b5442_prof);

        
        $__internal_6007e3a4421143da2073ef759113fe8615db1645c429ab238699cb752f961b19->leave($__internal_6007e3a4421143da2073ef759113fe8615db1645c429ab238699cb752f961b19_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 96,  231 => 95,  221 => 87,  212 => 86,  199 => 9,  190 => 8,  172 => 4,  161 => 101,  159 => 95,  150 => 88,  148 => 86,  138 => 79,  129 => 73,  123 => 70,  117 => 67,  108 => 61,  102 => 58,  96 => 55,  90 => 52,  65 => 30,  51 => 19,  43 => 13,  41 => 8,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"fr\">
  <head>
    <title>{% block title %}Récap{% endblock %}</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

  {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"./css/style.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Rajdhani:500\" rel=\"stylesheet\">
  {% endblock %}

  </head>

  <body>
     <header>
      <nav class=\"navbar navbar-expand-md bg-light fixed-top bg-light col-md-10 offset-md-2 col-sm-9 offset-sm-3\" id=\"menu-top\">
        <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">Groupe 1</a>
        <button class=\"navbar-toggler d-lg-none\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse col-12\" id=\"navbarsExampleDefault\">
          <ul class=\"navbar-nav col-3\">
            <li class=\"nav-item\" id=\"fiche-icon\">
              <a class=\"nav-link\" href=\"#\">16 <i class=\"fa fa-file-text-o\" aria-hidden=\"true\"></i></a>
            </li>
            <li class=\"nav-item\" id=\"membre-list\">
              <a class=\"nav-link\" href=\"{{ path('app_membre') }}\">14<i class=\"fa fa-user-o\" aria-hidden=\"true\"></i></a>
            </li>
          </ul>
          <form class=\"form-inline mt-2 mt-md-0 col-6\">
            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-defaut my-2 my-sm-0\" type=\"submit\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
          </form>
          <ul class=\"navbar-nav col-2\" id=\"deconnexion\">
           <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Deconnexion</a>
          </li>
          </ul>
        </div>
      </nav>
    </header>

    <div class=\"container-fluid\">
      <div class=\"row\">
        <nav class=\"col-sm-3 col-md-2 d-none d-sm-block navbar-dark bg-dark p-0\" id=\"menu-left\"  style=\"position: fixed; height: 100%; border-right: .20rem solid transparent;\">
          <h6 id=\"nom\" class=\"text-white pb-2 pt-3\">John Doe</h6>
          <ul class=\"nav nav-pills flex-column w-100\">
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('app_groupe') }}\">Groupe1</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('app_groupe') }}\">Groupe 2</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('app_groupe') }}\">Groupe 3</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('app_groupe') }}\">Groupe 4</a>
            </li>
          </ul>

          <ul class=\"nav nav-pills flex-column pt-3\">
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('app_membre') }}\">Membres</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('app_invite') }}\">Inviter</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('app_favoris') }}\">Favoris</a>
            </li>
          </ul>

          <ul class=\"nav nav-pills flex-column pt-3\">
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('app_parametre') }}\">Paramètres</a>
            </li>
          </ul>
        </nav>

        <main role=\"main\" class=\"col-sm-9 ml-sm-auto col-md-10 pt-5\">

          {% block body %}
          {% endblock %}

        </main>
      </div>




  {% block javascripts %}
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
    <script src=\"https://use.fontawesome.com/06bfea3587.js\"></script>
  {% endblock %}
  </body>
</html>", "::base.html.twig", "/var/www/recap/app/Resources/views/base.html.twig");
    }
}
