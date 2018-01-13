<?php

/* AppBundle::layout.html.twig */
class __TwigTemplate_d2fed7f0064bcb1db04978cd4de6e58acc2473753674712365e2faa926347b82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menutop' => array($this, 'block_menutop'),
            'titre' => array($this, 'block_titre'),
            'groupe' => array($this, 'block_groupe'),
            'menuleft' => array($this, 'block_menuleft'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d14df9424f5c53d1c3b85bc46529b2d08aea57f61e3cf39aec2a0109d7c85a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d14df9424f5c53d1c3b85bc46529b2d08aea57f61e3cf39aec2a0109d7c85a3->enter($__internal_2d14df9424f5c53d1c3b85bc46529b2d08aea57f61e3cf39aec2a0109d7c85a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

        $__internal_def70687728f1ce5a4eb9363b09755ead0493ac0c9f3ee609d655af5d798fddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_def70687728f1ce5a4eb9363b09755ead0493ac0c9f3ee609d655af5d798fddd->enter($__internal_def70687728f1ce5a4eb9363b09755ead0493ac0c9f3ee609d655af5d798fddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

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
        // line 23
        echo "
  </head>

  <body>
    ";
        // line 27
        $this->displayBlock('menutop', $context, $blocks);
        // line 80
        echo "
    <div class=\"container-fluid\">
      <div class=\"row\">

        ";
        // line 84
        $this->displayBlock('menuleft', $context, $blocks);
        // line 87
        echo "
        <main role=\"main\" class=\"col-sm-9 ml-sm-auto col-md-10 pt-5\">

          ";
        // line 90
        $this->displayBlock('body', $context, $blocks);
        // line 92
        echo "
        </main>
      </div>
    </div>

  ";
        // line 97
        $this->displayBlock('javascripts', $context, $blocks);
        // line 118
        echo " 

  </body>
</html>";
        
        $__internal_2d14df9424f5c53d1c3b85bc46529b2d08aea57f61e3cf39aec2a0109d7c85a3->leave($__internal_2d14df9424f5c53d1c3b85bc46529b2d08aea57f61e3cf39aec2a0109d7c85a3_prof);

        
        $__internal_def70687728f1ce5a4eb9363b09755ead0493ac0c9f3ee609d655af5d798fddd->leave($__internal_def70687728f1ce5a4eb9363b09755ead0493ac0c9f3ee609d655af5d798fddd_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_859eb25296df866f75ed52d4149f8fac0e087ba61e7128fe29c0a9832342efb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_859eb25296df866f75ed52d4149f8fac0e087ba61e7128fe29c0a9832342efb4->enter($__internal_859eb25296df866f75ed52d4149f8fac0e087ba61e7128fe29c0a9832342efb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f527e9bde7d48f4cd9be78729b89cf60cb617987d12453b2e00174f1660932b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f527e9bde7d48f4cd9be78729b89cf60cb617987d12453b2e00174f1660932b8->enter($__internal_f527e9bde7d48f4cd9be78729b89cf60cb617987d12453b2e00174f1660932b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Récap";
        
        $__internal_f527e9bde7d48f4cd9be78729b89cf60cb617987d12453b2e00174f1660932b8->leave($__internal_f527e9bde7d48f4cd9be78729b89cf60cb617987d12453b2e00174f1660932b8_prof);

        
        $__internal_859eb25296df866f75ed52d4149f8fac0e087ba61e7128fe29c0a9832342efb4->leave($__internal_859eb25296df866f75ed52d4149f8fac0e087ba61e7128fe29c0a9832342efb4_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5cb5b66f313635924aabd2cda707ecc7844c0ffca7ded34d85260041570dd3ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cb5b66f313635924aabd2cda707ecc7844c0ffca7ded34d85260041570dd3ba->enter($__internal_5cb5b66f313635924aabd2cda707ecc7844c0ffca7ded34d85260041570dd3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ad8d170fe37446d8e199436673cfd3af203d156e0b1901e61de62616d9e036b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad8d170fe37446d8e199436673cfd3af203d156e0b1901e61de62616d9e036b8->enter($__internal_ad8d170fe37446d8e199436673cfd3af203d156e0b1901e61de62616d9e036b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
    <link href=\"https://fonts.googleapis.com/css?family=Rajdhani:500\" rel=\"stylesheet\">

    ";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0baca36_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0baca36_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/0baca36_style_1.css");
            // line 17
            echo "
      <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />

    ";
            // asset "0baca36_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0baca36_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/0baca36_rating_2.css");
            // line 17
            echo "
      <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />

    ";
        } else {
            // asset "0baca36"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0baca36") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/0baca36.css");
            // line 17
            echo "
      <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />

    ";
        }
        unset($context["asset_url"]);
        // line 21
        echo "
  ";
        
        $__internal_ad8d170fe37446d8e199436673cfd3af203d156e0b1901e61de62616d9e036b8->leave($__internal_ad8d170fe37446d8e199436673cfd3af203d156e0b1901e61de62616d9e036b8_prof);

        
        $__internal_5cb5b66f313635924aabd2cda707ecc7844c0ffca7ded34d85260041570dd3ba->leave($__internal_5cb5b66f313635924aabd2cda707ecc7844c0ffca7ded34d85260041570dd3ba_prof);

    }

    // line 27
    public function block_menutop($context, array $blocks = array())
    {
        $__internal_d2185f8b5f652fc567249fc1a305b3a16cec372d52bb5a8443556312285f3b1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2185f8b5f652fc567249fc1a305b3a16cec372d52bb5a8443556312285f3b1b->enter($__internal_d2185f8b5f652fc567249fc1a305b3a16cec372d52bb5a8443556312285f3b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menutop"));

        $__internal_fd2924f6a801a96a755dc0c1889cc139a6ee88d7703bd439fc82914e25c54679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd2924f6a801a96a755dc0c1889cc139a6ee88d7703bd439fc82914e25c54679->enter($__internal_fd2924f6a801a96a755dc0c1889cc139a6ee88d7703bd439fc82914e25c54679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menutop"));

        // line 28
        echo "    <header>
      <nav class=\"navbar navbar-expand-md bg-light fixed-top bg-light col-md-10 offset-md-2 col-sm-9 offset-sm-3\" id=\"menu-top\">
        ";
        // line 30
        $this->displayBlock('titre', $context, $blocks);
        // line 33
        echo "        <button class=\"navbar-toggler d-lg-none\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse col-12\" id=\"navbarsExampleDefault\">
          <ul class=\"navbar-nav col-3 pr-0\">
            ";
        // line 39
        $this->displayBlock('groupe', $context, $blocks);
        // line 50
        echo "          </ul>
          <form class=\"form-inline mt-2 mt-md-0 col-5 p-0\">
            <input class=\"form-control\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-defaut my-2 my-sm-0\" type=\"submit\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
          </form>
          <div class=\"col-1 p-0\">
            <button class=\"btn\" style=\"background: #4a7fb3; color:white; border-radius: 50%; max-height: 35px; max-width: 35px;    padding-left: 8.5px\">
            <i class=\"fa fa-bell\" aria-hidden=\"true\"></i>
            </button>
          </div>
          <ul class=\"navbar-nav col-2\" id=\"deconnexion\">
            <li class=\"nav-item float-right\" style=\"width: 50px;\">
              <a class=\"nav-link float-right\" href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">
                <button class=\"btn bg-info\" style=\" color:white; border-radius: 50%; max-height: 35px; max-width: 35px;    padding-left: 10.5px\">
                <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                </button>
              </a>
            </li>
            <li class=\"nav-item float-right\" style=\"width: 50px;\">
              <a class=\"nav-link float-right btn\" href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">
                <button class=\"btn bg-danger\" style=\"color:white; border-radius: 50%; max-height: 35px; max-width: 35px;    padding-left: 9.5px\">
                  <i class=\"fa fa-power-off\" aria-hidden=\"true\"></i>
                </button>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    ";
        
        $__internal_fd2924f6a801a96a755dc0c1889cc139a6ee88d7703bd439fc82914e25c54679->leave($__internal_fd2924f6a801a96a755dc0c1889cc139a6ee88d7703bd439fc82914e25c54679_prof);

        
        $__internal_d2185f8b5f652fc567249fc1a305b3a16cec372d52bb5a8443556312285f3b1b->leave($__internal_d2185f8b5f652fc567249fc1a305b3a16cec372d52bb5a8443556312285f3b1b_prof);

    }

    // line 30
    public function block_titre($context, array $blocks = array())
    {
        $__internal_6a79c15f062c0a3c0b4f2b62f39c037523647ef8848e945cc959955d5707e524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a79c15f062c0a3c0b4f2b62f39c037523647ef8848e945cc959955d5707e524->enter($__internal_6a79c15f062c0a3c0b4f2b62f39c037523647ef8848e945cc959955d5707e524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $__internal_d3d8f5f73741cdddbe79ea1a5cf046f36376617a80379cf9ea240ed364c1e6ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d8f5f73741cdddbe79ea1a5cf046f36376617a80379cf9ea240ed364c1e6ed->enter($__internal_d3d8f5f73741cdddbe79ea1a5cf046f36376617a80379cf9ea240ed364c1e6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 31
        echo "        <a class=\"navbar-brand\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home");
        echo "\">Dashboard</a>
        ";
        
        $__internal_d3d8f5f73741cdddbe79ea1a5cf046f36376617a80379cf9ea240ed364c1e6ed->leave($__internal_d3d8f5f73741cdddbe79ea1a5cf046f36376617a80379cf9ea240ed364c1e6ed_prof);

        
        $__internal_6a79c15f062c0a3c0b4f2b62f39c037523647ef8848e945cc959955d5707e524->leave($__internal_6a79c15f062c0a3c0b4f2b62f39c037523647ef8848e945cc959955d5707e524_prof);

    }

    // line 39
    public function block_groupe($context, array $blocks = array())
    {
        $__internal_6d33615f0aae9bc241db6f655169d307d259bac629e27d3ab2f6369f408a5d79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d33615f0aae9bc241db6f655169d307d259bac629e27d3ab2f6369f408a5d79->enter($__internal_6d33615f0aae9bc241db6f655169d307d259bac629e27d3ab2f6369f408a5d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "groupe"));

        $__internal_57c6cb0f53b2b2ada84b3daa55132abaf4a0d84c12269178a031afb4e673794c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c6cb0f53b2b2ada84b3daa55132abaf4a0d84c12269178a031afb4e673794c->enter($__internal_57c6cb0f53b2b2ada84b3daa55132abaf4a0d84c12269178a031afb4e673794c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "groupe"));

        // line 40
        echo "            <li class=\"nav-item\" id=\"fiche-icon\">
              <a class=\"nav-link\" href=\"\">16 <i class=\"fa fa-file-text-o\" aria-hidden=\"true\"></i></a>
            </li>
            <li class=\"nav-item\" id=\"membre-list\">
              <a class=\"nav-link\" href=\"\">14 <i class=\"fa fa-user-o\" aria-hidden=\"true\"></i></a>
            </li>
            <li class=\"nav-item\" id=\"invite\">
              <a class=\"nav-link\" href=\"\"><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i></a>
            </li>
            ";
        
        $__internal_57c6cb0f53b2b2ada84b3daa55132abaf4a0d84c12269178a031afb4e673794c->leave($__internal_57c6cb0f53b2b2ada84b3daa55132abaf4a0d84c12269178a031afb4e673794c_prof);

        
        $__internal_6d33615f0aae9bc241db6f655169d307d259bac629e27d3ab2f6369f408a5d79->leave($__internal_6d33615f0aae9bc241db6f655169d307d259bac629e27d3ab2f6369f408a5d79_prof);

    }

    // line 84
    public function block_menuleft($context, array $blocks = array())
    {
        $__internal_0657338fd97d749193f5ec712a5618988818f64ae148c9a4b47afed9ac6e1dcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0657338fd97d749193f5ec712a5618988818f64ae148c9a4b47afed9ac6e1dcb->enter($__internal_0657338fd97d749193f5ec712a5618988818f64ae148c9a4b47afed9ac6e1dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuleft"));

        $__internal_6582aa5492eaf3e41cbc3aeebe83647f0cf91dedc70d784c4bcd6a0e38bc7808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6582aa5492eaf3e41cbc3aeebe83647f0cf91dedc70d784c4bcd6a0e38bc7808->enter($__internal_6582aa5492eaf3e41cbc3aeebe83647f0cf91dedc70d784c4bcd6a0e38bc7808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuleft"));

        // line 85
        echo "          ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:menu"));
        echo "
        ";
        
        $__internal_6582aa5492eaf3e41cbc3aeebe83647f0cf91dedc70d784c4bcd6a0e38bc7808->leave($__internal_6582aa5492eaf3e41cbc3aeebe83647f0cf91dedc70d784c4bcd6a0e38bc7808_prof);

        
        $__internal_0657338fd97d749193f5ec712a5618988818f64ae148c9a4b47afed9ac6e1dcb->leave($__internal_0657338fd97d749193f5ec712a5618988818f64ae148c9a4b47afed9ac6e1dcb_prof);

    }

    // line 90
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cc2719fa8706c393a01b1c9b11d000812d6ab9e7856bed08182e00c95a79a32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cc2719fa8706c393a01b1c9b11d000812d6ab9e7856bed08182e00c95a79a32->enter($__internal_5cc2719fa8706c393a01b1c9b11d000812d6ab9e7856bed08182e00c95a79a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6ae9829e43de1765d9e1a697d2eddadb9f848252037743ecf2219d3961aec72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6ae9829e43de1765d9e1a697d2eddadb9f848252037743ecf2219d3961aec72->enter($__internal_f6ae9829e43de1765d9e1a697d2eddadb9f848252037743ecf2219d3961aec72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 91
        echo "          ";
        
        $__internal_f6ae9829e43de1765d9e1a697d2eddadb9f848252037743ecf2219d3961aec72->leave($__internal_f6ae9829e43de1765d9e1a697d2eddadb9f848252037743ecf2219d3961aec72_prof);

        
        $__internal_5cc2719fa8706c393a01b1c9b11d000812d6ab9e7856bed08182e00c95a79a32->leave($__internal_5cc2719fa8706c393a01b1c9b11d000812d6ab9e7856bed08182e00c95a79a32_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_26de8c3ea07923e61b04f088dd742bef07aff4a896005002697e57a146d1a8af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26de8c3ea07923e61b04f088dd742bef07aff4a896005002697e57a146d1a8af->enter($__internal_26de8c3ea07923e61b04f088dd742bef07aff4a896005002697e57a146d1a8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8650352174c4908bc669dd4713b1878bec623a8a7fd0833d7c19bcf7dfd2a78e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8650352174c4908bc669dd4713b1878bec623a8a7fd0833d7c19bcf7dfd2a78e->enter($__internal_8650352174c4908bc669dd4713b1878bec623a8a7fd0833d7c19bcf7dfd2a78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        echo "    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
    <script src=\"https://use.fontawesome.com/06bfea3587.js\"></script>

    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/starrating/js/rating.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 105
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8bb605b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8bb605b_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/8bb605b_rating_1.js");
            // line 107
            echo "      <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 107, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "8bb605b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8bb605b") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/8bb605b.js");
            echo "      <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 107, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 109
        echo "
    <script>
      \$('#modif').on('show.bs.modal', function (event) {
      var button = \$(event.relatedTarget);
      var recipient = button.data('name');
      var modal = \$(this);
      modal.find('.modal-title').text('Réglage du membre ' + recipient);
      })
    </script>
  ";
        
        $__internal_8650352174c4908bc669dd4713b1878bec623a8a7fd0833d7c19bcf7dfd2a78e->leave($__internal_8650352174c4908bc669dd4713b1878bec623a8a7fd0833d7c19bcf7dfd2a78e_prof);

        
        $__internal_26de8c3ea07923e61b04f088dd742bef07aff4a896005002697e57a146d1a8af->leave($__internal_26de8c3ea07923e61b04f088dd742bef07aff4a896005002697e57a146d1a8af_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  371 => 109,  357 => 107,  353 => 105,  348 => 103,  341 => 98,  332 => 97,  322 => 91,  313 => 90,  300 => 85,  291 => 84,  272 => 40,  263 => 39,  250 => 31,  241 => 30,  220 => 69,  210 => 62,  196 => 50,  194 => 39,  186 => 33,  184 => 30,  180 => 28,  171 => 27,  160 => 21,  153 => 18,  150 => 17,  142 => 18,  139 => 17,  132 => 18,  129 => 17,  125 => 13,  119 => 9,  110 => 8,  92 => 4,  79 => 118,  77 => 97,  70 => 92,  68 => 90,  63 => 87,  61 => 84,  55 => 80,  53 => 27,  47 => 23,  45 => 8,  38 => 4,  33 => 1,);
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
    <link href=\"https://fonts.googleapis.com/css?family=Rajdhani:500\" rel=\"stylesheet\">

    {% stylesheets 
    'bundles/app/css/style.css'
    'bundles/starrating/css/rating.css' 
    %}

      <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />

    {% endstylesheets %}

  {% endblock %}

  </head>

  <body>
    {% block menutop %}
    <header>
      <nav class=\"navbar navbar-expand-md bg-light fixed-top bg-light col-md-10 offset-md-2 col-sm-9 offset-sm-3\" id=\"menu-top\">
        {% block titre %}
        <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">Dashboard</a>
        {% endblock %}
        <button class=\"navbar-toggler d-lg-none\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse col-12\" id=\"navbarsExampleDefault\">
          <ul class=\"navbar-nav col-3 pr-0\">
            {% block groupe %}
            <li class=\"nav-item\" id=\"fiche-icon\">
              <a class=\"nav-link\" href=\"\">16 <i class=\"fa fa-file-text-o\" aria-hidden=\"true\"></i></a>
            </li>
            <li class=\"nav-item\" id=\"membre-list\">
              <a class=\"nav-link\" href=\"\">14 <i class=\"fa fa-user-o\" aria-hidden=\"true\"></i></a>
            </li>
            <li class=\"nav-item\" id=\"invite\">
              <a class=\"nav-link\" href=\"\"><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i></a>
            </li>
            {% endblock %}
          </ul>
          <form class=\"form-inline mt-2 mt-md-0 col-5 p-0\">
            <input class=\"form-control\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-defaut my-2 my-sm-0\" type=\"submit\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
          </form>
          <div class=\"col-1 p-0\">
            <button class=\"btn\" style=\"background: #4a7fb3; color:white; border-radius: 50%; max-height: 35px; max-width: 35px;    padding-left: 8.5px\">
            <i class=\"fa fa-bell\" aria-hidden=\"true\"></i>
            </button>
          </div>
          <ul class=\"navbar-nav col-2\" id=\"deconnexion\">
            <li class=\"nav-item float-right\" style=\"width: 50px;\">
              <a class=\"nav-link float-right\" href=\"{{ path('fos_user_profile_show') }}\">
                <button class=\"btn bg-info\" style=\" color:white; border-radius: 50%; max-height: 35px; max-width: 35px;    padding-left: 10.5px\">
                <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                </button>
              </a>
            </li>
            <li class=\"nav-item float-right\" style=\"width: 50px;\">
              <a class=\"nav-link float-right btn\" href=\"{{ path('fos_user_security_logout') }}\">
                <button class=\"btn bg-danger\" style=\"color:white; border-radius: 50%; max-height: 35px; max-width: 35px;    padding-left: 9.5px\">
                  <i class=\"fa fa-power-off\" aria-hidden=\"true\"></i>
                </button>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    {% endblock %}

    <div class=\"container-fluid\">
      <div class=\"row\">

        {% block menuleft %}
          {{ render(controller(\"AppBundle:Default:menu\")) }}
        {% endblock %}

        <main role=\"main\" class=\"col-sm-9 ml-sm-auto col-md-10 pt-5\">

          {% block body %}
          {% endblock %}

        </main>
      </div>
    </div>

  {% block javascripts %}
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
    <script src=\"https://use.fontawesome.com/06bfea3587.js\"></script>

    <script src=\"{{ asset('bundles/starrating/js/rating.js') }}\"></script>

    {% javascripts
      '@StarRatingBundle/Resources/public/js/rating.js' %}
      <script src=\"{{ asset_url }}\"></script>
    {% endjavascripts %}

    <script>
      \$('#modif').on('show.bs.modal', function (event) {
      var button = \$(event.relatedTarget);
      var recipient = button.data('name');
      var modal = \$(this);
      modal.find('.modal-title').text('Réglage du membre ' + recipient);
      })
    </script>
  {% endblock %} 

  </body>
</html>", "AppBundle::layout.html.twig", "/var/www/recap/src/AppBundle/Resources/views/layout.html.twig");
    }
}
