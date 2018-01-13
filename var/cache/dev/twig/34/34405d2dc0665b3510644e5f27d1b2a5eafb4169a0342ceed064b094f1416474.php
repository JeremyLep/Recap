<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_ce53e026478b3c86ef7f5ccbc55559975c365522dddda61527d17afb26b64c87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9702c22697809d35e4ddc9ad4a69663ff1dac22deb968d708e88174df71c76ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9702c22697809d35e4ddc9ad4a69663ff1dac22deb968d708e88174df71c76ea->enter($__internal_9702c22697809d35e4ddc9ad4a69663ff1dac22deb968d708e88174df71c76ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_79a634aed181b6f75360019872804cee4882be89a3ada707b27c4c5179f2061c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a634aed181b6f75360019872804cee4882be89a3ada707b27c4c5179f2061c->enter($__internal_79a634aed181b6f75360019872804cee4882be89a3ada707b27c4c5179f2061c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('radio_label', $context, $blocks);
        // line 199
        echo "
";
        // line 200
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 224
        echo "
";
        // line 226
        echo "
";
        // line 227
        $this->displayBlock('form_row', $context, $blocks);
        // line 234
        echo "
";
        // line 235
        $this->displayBlock('button_row', $context, $blocks);
        // line 240
        echo "
";
        // line 241
        $this->displayBlock('choice_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('date_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('time_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 267
        echo "
";
        // line 268
        $this->displayBlock('radio_row', $context, $blocks);
        // line 274
        echo "
";
        // line 276
        echo "
";
        // line 277
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_9702c22697809d35e4ddc9ad4a69663ff1dac22deb968d708e88174df71c76ea->leave($__internal_9702c22697809d35e4ddc9ad4a69663ff1dac22deb968d708e88174df71c76ea_prof);

        
        $__internal_79a634aed181b6f75360019872804cee4882be89a3ada707b27c4c5179f2061c->leave($__internal_79a634aed181b6f75360019872804cee4882be89a3ada707b27c4c5179f2061c_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_ea2cf84393754fc879702f8cb5b4eeeb87ff7b25fd99280b209438af60a4dc85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea2cf84393754fc879702f8cb5b4eeeb87ff7b25fd99280b209438af60a4dc85->enter($__internal_ea2cf84393754fc879702f8cb5b4eeeb87ff7b25fd99280b209438af60a4dc85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_6401ecc297fc698772f1369515eebcdf3922720e67fb82b4a54181234665f414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6401ecc297fc698772f1369515eebcdf3922720e67fb82b4a54181234665f414->enter($__internal_6401ecc297fc698772f1369515eebcdf3922720e67fb82b4a54181234665f414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6401ecc297fc698772f1369515eebcdf3922720e67fb82b4a54181234665f414->leave($__internal_6401ecc297fc698772f1369515eebcdf3922720e67fb82b4a54181234665f414_prof);

        
        $__internal_ea2cf84393754fc879702f8cb5b4eeeb87ff7b25fd99280b209438af60a4dc85->leave($__internal_ea2cf84393754fc879702f8cb5b4eeeb87ff7b25fd99280b209438af60a4dc85_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_a8b027ed6e0559dabcd0d7efc6181c834419607b41b80e4d9cca58971145d48b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8b027ed6e0559dabcd0d7efc6181c834419607b41b80e4d9cca58971145d48b->enter($__internal_a8b027ed6e0559dabcd0d7efc6181c834419607b41b80e4d9cca58971145d48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_44f93466b13fea10122261ecda0ac946b6735027e34b7a4f82fba9af2e7ce06c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f93466b13fea10122261ecda0ac946b6735027e34b7a4f82fba9af2e7ce06c->enter($__internal_44f93466b13fea10122261ecda0ac946b6735027e34b7a4f82fba9af2e7ce06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_44f93466b13fea10122261ecda0ac946b6735027e34b7a4f82fba9af2e7ce06c->leave($__internal_44f93466b13fea10122261ecda0ac946b6735027e34b7a4f82fba9af2e7ce06c_prof);

        
        $__internal_a8b027ed6e0559dabcd0d7efc6181c834419607b41b80e4d9cca58971145d48b->leave($__internal_a8b027ed6e0559dabcd0d7efc6181c834419607b41b80e4d9cca58971145d48b_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_ddc13ac8508a4773dd98f70ee352c26362f7691372396f1bda94e8e48380c63b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc13ac8508a4773dd98f70ee352c26362f7691372396f1bda94e8e48380c63b->enter($__internal_ddc13ac8508a4773dd98f70ee352c26362f7691372396f1bda94e8e48380c63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_f5a372da6f6902932fd2d4424742f379687628f70b0f8da61abbb45f545666d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a372da6f6902932fd2d4424742f379687628f70b0f8da61abbb45f545666d0->enter($__internal_f5a372da6f6902932fd2d4424742f379687628f70b0f8da61abbb45f545666d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 18, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_f5a372da6f6902932fd2d4424742f379687628f70b0f8da61abbb45f545666d0->leave($__internal_f5a372da6f6902932fd2d4424742f379687628f70b0f8da61abbb45f545666d0_prof);

        
        $__internal_ddc13ac8508a4773dd98f70ee352c26362f7691372396f1bda94e8e48380c63b->leave($__internal_ddc13ac8508a4773dd98f70ee352c26362f7691372396f1bda94e8e48380c63b_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_8d77bd2769eb0c9e13bc3c7ecd3cccebd8f37b0a73d710dc2fdf2ca22eb784aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d77bd2769eb0c9e13bc3c7ecd3cccebd8f37b0a73d710dc2fdf2ca22eb784aa->enter($__internal_8d77bd2769eb0c9e13bc3c7ecd3cccebd8f37b0a73d710dc2fdf2ca22eb784aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_9d849a15e8275c025d8b9dd3d44bd7947e74004da88b550180d666b8f3118862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d849a15e8275c025d8b9dd3d44bd7947e74004da88b550180d666b8f3118862->enter($__internal_9d849a15e8275c025d8b9dd3d44bd7947e74004da88b550180d666b8f3118862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_a23e914b9b33bb32cbc441427a26cd19571b993f55bbedce2dde461d395478c1 = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 24, $this->getSourceContext()); })())) && is_string($__internal_2877b7ffe920a37d36f7bba89342f3357df9351f5f81f72c7f1f3d0038739a44 = "{{") && ('' === $__internal_2877b7ffe920a37d36f7bba89342f3357df9351f5f81f72c7f1f3d0038739a44 || 0 === strpos($__internal_a23e914b9b33bb32cbc441427a26cd19571b993f55bbedce2dde461d395478c1, $__internal_2877b7ffe920a37d36f7bba89342f3357df9351f5f81f72c7f1f3d0038739a44)));
        // line 25
        echo "        ";
        if ( !(isset($context["append"]) || array_key_exists("append", $context) ? $context["append"] : (function () { throw new Twig_Error_Runtime('Variable "append" does not exist.', 25, $this->getSourceContext()); })())) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 26, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["append"]) || array_key_exists("append", $context) ? $context["append"] : (function () { throw new Twig_Error_Runtime('Variable "append" does not exist.', 29, $this->getSourceContext()); })())) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 30, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_9d849a15e8275c025d8b9dd3d44bd7947e74004da88b550180d666b8f3118862->leave($__internal_9d849a15e8275c025d8b9dd3d44bd7947e74004da88b550180d666b8f3118862_prof);

        
        $__internal_8d77bd2769eb0c9e13bc3c7ecd3cccebd8f37b0a73d710dc2fdf2ca22eb784aa->leave($__internal_8d77bd2769eb0c9e13bc3c7ecd3cccebd8f37b0a73d710dc2fdf2ca22eb784aa_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_c8b2d799399f3d714800ce8d2be50af321e4cf8aba28c8e6b3416023221e324a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8b2d799399f3d714800ce8d2be50af321e4cf8aba28c8e6b3416023221e324a->enter($__internal_c8b2d799399f3d714800ce8d2be50af321e4cf8aba28c8e6b3416023221e324a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_c0222193d533ea0e5f87e1c1ad5d601bf17ede1a3b2bff1f5a06781140940c1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0222193d533ea0e5f87e1c1ad5d601bf17ede1a3b2bff1f5a06781140940c1b->enter($__internal_c0222193d533ea0e5f87e1c1ad5d601bf17ede1a3b2bff1f5a06781140940c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_c0222193d533ea0e5f87e1c1ad5d601bf17ede1a3b2bff1f5a06781140940c1b->leave($__internal_c0222193d533ea0e5f87e1c1ad5d601bf17ede1a3b2bff1f5a06781140940c1b_prof);

        
        $__internal_c8b2d799399f3d714800ce8d2be50af321e4cf8aba28c8e6b3416023221e324a->leave($__internal_c8b2d799399f3d714800ce8d2be50af321e4cf8aba28c8e6b3416023221e324a_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_fb0c734b7c553ed6a44c601ff0aa2f99d11ff6bbc5c30454b14b0891d7c15b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb0c734b7c553ed6a44c601ff0aa2f99d11ff6bbc5c30454b14b0891d7c15b2c->enter($__internal_fb0c734b7c553ed6a44c601ff0aa2f99d11ff6bbc5c30454b14b0891d7c15b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_1b8a6384487e1ab84a70488a080b59d310fcc0c7948508f610accdc76e8065c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b8a6384487e1ab84a70488a080b59d310fcc0c7948508f610accdc76e8065c6->enter($__internal_1b8a6384487e1ab84a70488a080b59d310fcc0c7948508f610accdc76e8065c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 43, $this->getSourceContext()); })()) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 46, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_1b8a6384487e1ab84a70488a080b59d310fcc0c7948508f610accdc76e8065c6->leave($__internal_1b8a6384487e1ab84a70488a080b59d310fcc0c7948508f610accdc76e8065c6_prof);

        
        $__internal_fb0c734b7c553ed6a44c601ff0aa2f99d11ff6bbc5c30454b14b0891d7c15b2c->leave($__internal_fb0c734b7c553ed6a44c601ff0aa2f99d11ff6bbc5c30454b14b0891d7c15b2c_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_959e209e9a158cc84d84f724e5d6191f3bac5427703e8fecc7f82d5336476f81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_959e209e9a158cc84d84f724e5d6191f3bac5427703e8fecc7f82d5336476f81->enter($__internal_959e209e9a158cc84d84f724e5d6191f3bac5427703e8fecc7f82d5336476f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_e951a30a46f4e92d2e331eca2009b52c2905242dd56c4f6e34de87eff4a34cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e951a30a46f4e92d2e331eca2009b52c2905242dd56c4f6e34de87eff4a34cd8->enter($__internal_e951a30a46f4e92d2e331eca2009b52c2905242dd56c4f6e34de87eff4a34cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 57, $this->getSourceContext()); })()) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 60, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 61, $this->getSourceContext()); })()))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 64, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 69, $this->getSourceContext()); })()))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_e951a30a46f4e92d2e331eca2009b52c2905242dd56c4f6e34de87eff4a34cd8->leave($__internal_e951a30a46f4e92d2e331eca2009b52c2905242dd56c4f6e34de87eff4a34cd8_prof);

        
        $__internal_959e209e9a158cc84d84f724e5d6191f3bac5427703e8fecc7f82d5336476f81->leave($__internal_959e209e9a158cc84d84f724e5d6191f3bac5427703e8fecc7f82d5336476f81_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_5b9a7343f2d8f0c5e1930c8d2dc356b36db96f77805da84527b1b4673e6a136a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b9a7343f2d8f0c5e1930c8d2dc356b36db96f77805da84527b1b4673e6a136a->enter($__internal_5b9a7343f2d8f0c5e1930c8d2dc356b36db96f77805da84527b1b4673e6a136a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_10d36e66bebb9ec5bc53f895bcdd163b5917b408f3dd30c8fd7bbaba4bde2d3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d36e66bebb9ec5bc53f895bcdd163b5917b408f3dd30c8fd7bbaba4bde2d3b->enter($__internal_10d36e66bebb9ec5bc53f895bcdd163b5917b408f3dd30c8fd7bbaba4bde2d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 76, $this->getSourceContext()); })()) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 79, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 80, $this->getSourceContext()); })())))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->getSourceContext()); })()), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 83, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->getSourceContext()); })()), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 83, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->getSourceContext()); })()), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 84, $this->getSourceContext()); })())))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_10d36e66bebb9ec5bc53f895bcdd163b5917b408f3dd30c8fd7bbaba4bde2d3b->leave($__internal_10d36e66bebb9ec5bc53f895bcdd163b5917b408f3dd30c8fd7bbaba4bde2d3b_prof);

        
        $__internal_5b9a7343f2d8f0c5e1930c8d2dc356b36db96f77805da84527b1b4673e6a136a->leave($__internal_5b9a7343f2d8f0c5e1930c8d2dc356b36db96f77805da84527b1b4673e6a136a_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_e18a20a7d2ea0d8464282bd982d83a4403ee8c9d17ddae55291ffd1f916b70a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e18a20a7d2ea0d8464282bd982d83a4403ee8c9d17ddae55291ffd1f916b70a5->enter($__internal_e18a20a7d2ea0d8464282bd982d83a4403ee8c9d17ddae55291ffd1f916b70a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_5c35edf7b084e13339cbdd24e0f8c0c464e058d0b011de492ec4dbd28bd35715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c35edf7b084e13339cbdd24e0f8c0c464e058d0b011de492ec4dbd28bd35715->enter($__internal_5c35edf7b084e13339cbdd24e0f8c0c464e058d0b011de492ec4dbd28bd35715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 91, $this->getSourceContext()); })()) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 94, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 96, $this->getSourceContext()); })()), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) || array_key_exists("table_class", $context) ? $context["table_class"] : (function () { throw new Twig_Error_Runtime('Variable "table_class" does not exist.', 98, $this->getSourceContext()); })()), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 101, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 102, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->getSourceContext()); })()), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 103, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->getSourceContext()); })()), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 104, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 104, $this->getSourceContext()); })()), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 105, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 105, $this->getSourceContext()); })()), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 106, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 106, $this->getSourceContext()); })()), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 107, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 107, $this->getSourceContext()); })()), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 112, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 112, $this->getSourceContext()); })()), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 113, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 113, $this->getSourceContext()); })()), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 114, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->getSourceContext()); })()), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 115, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 115, $this->getSourceContext()); })()), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 116, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->getSourceContext()); })()), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 117, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 117, $this->getSourceContext()); })()), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 118, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 118, $this->getSourceContext()); })()), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if ((isset($context["with_invert"]) || array_key_exists("with_invert", $context) ? $context["with_invert"] : (function () { throw new Twig_Error_Runtime('Variable "with_invert" does not exist.', 123, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 123, $this->getSourceContext()); })()), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_5c35edf7b084e13339cbdd24e0f8c0c464e058d0b011de492ec4dbd28bd35715->leave($__internal_5c35edf7b084e13339cbdd24e0f8c0c464e058d0b011de492ec4dbd28bd35715_prof);

        
        $__internal_e18a20a7d2ea0d8464282bd982d83a4403ee8c9d17ddae55291ffd1f916b70a5->leave($__internal_e18a20a7d2ea0d8464282bd982d83a4403ee8c9d17ddae55291ffd1f916b70a5_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_a20ba707abe6fdabe139bab5b1d254450f9647b11eba0000ae05e12136771c2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a20ba707abe6fdabe139bab5b1d254450f9647b11eba0000ae05e12136771c2c->enter($__internal_a20ba707abe6fdabe139bab5b1d254450f9647b11eba0000ae05e12136771c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_fcc61c46144e181907246a240bc175114fee65ad5851799a21ba2008dc66d904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc61c46144e181907246a240bc175114fee65ad5851799a21ba2008dc66d904->enter($__internal_fcc61c46144e181907246a240bc175114fee65ad5851799a21ba2008dc66d904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 129, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_fcc61c46144e181907246a240bc175114fee65ad5851799a21ba2008dc66d904->leave($__internal_fcc61c46144e181907246a240bc175114fee65ad5851799a21ba2008dc66d904_prof);

        
        $__internal_a20ba707abe6fdabe139bab5b1d254450f9647b11eba0000ae05e12136771c2c->leave($__internal_a20ba707abe6fdabe139bab5b1d254450f9647b11eba0000ae05e12136771c2c_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_e92d05ee65f721b1d283907ec02653dfabcd4a86b084c2d5c6966872f11563a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e92d05ee65f721b1d283907ec02653dfabcd4a86b084c2d5c6966872f11563a9->enter($__internal_e92d05ee65f721b1d283907ec02653dfabcd4a86b084c2d5c6966872f11563a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_c663c54afd753f3b6b4496429a014b18c612ab47ec7c23fb023aac8794cdc2a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c663c54afd753f3b6b4496429a014b18c612ab47ec7c23fb023aac8794cdc2a9->enter($__internal_c663c54afd753f3b6b4496429a014b18c612ab47ec7c23fb023aac8794cdc2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 135, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 138, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 146, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_c663c54afd753f3b6b4496429a014b18c612ab47ec7c23fb023aac8794cdc2a9->leave($__internal_c663c54afd753f3b6b4496429a014b18c612ab47ec7c23fb023aac8794cdc2a9_prof);

        
        $__internal_e92d05ee65f721b1d283907ec02653dfabcd4a86b084c2d5c6966872f11563a9->leave($__internal_e92d05ee65f721b1d283907ec02653dfabcd4a86b084c2d5c6966872f11563a9_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_233bbe53fa013862a48e9e244f3cc717f8b5113506865e49fb127f3b79df32a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_233bbe53fa013862a48e9e244f3cc717f8b5113506865e49fb127f3b79df32a0->enter($__internal_233bbe53fa013862a48e9e244f3cc717f8b5113506865e49fb127f3b79df32a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_9730459267c6630871c0af66d6b01911ebae5662b66cf95bedfa519b1eb699ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9730459267c6630871c0af66d6b01911ebae5662b66cf95bedfa519b1eb699ee->enter($__internal_9730459267c6630871c0af66d6b01911ebae5662b66cf95bedfa519b1eb699ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 154, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 155, $this->getSourceContext()); })()))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 156, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 159, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_9730459267c6630871c0af66d6b01911ebae5662b66cf95bedfa519b1eb699ee->leave($__internal_9730459267c6630871c0af66d6b01911ebae5662b66cf95bedfa519b1eb699ee_prof);

        
        $__internal_233bbe53fa013862a48e9e244f3cc717f8b5113506865e49fb127f3b79df32a0->leave($__internal_233bbe53fa013862a48e9e244f3cc717f8b5113506865e49fb127f3b79df32a0_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_986853450ca48fc3203bf057c903eab3ce1f44e07f3a343cef98aa67018e4e6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_986853450ca48fc3203bf057c903eab3ce1f44e07f3a343cef98aa67018e4e6c->enter($__internal_986853450ca48fc3203bf057c903eab3ce1f44e07f3a343cef98aa67018e4e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_b985e104ec1adc545c75fcd5eeef5948d3a324ba85d0ee1d16cc7675655fef4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b985e104ec1adc545c75fcd5eeef5948d3a324ba85d0ee1d16cc7675655fef4b->enter($__internal_b985e104ec1adc545c75fcd5eeef5948d3a324ba85d0ee1d16cc7675655fef4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 165, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 166, $this->getSourceContext()); })()))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 167, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 170, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_b985e104ec1adc545c75fcd5eeef5948d3a324ba85d0ee1d16cc7675655fef4b->leave($__internal_b985e104ec1adc545c75fcd5eeef5948d3a324ba85d0ee1d16cc7675655fef4b_prof);

        
        $__internal_986853450ca48fc3203bf057c903eab3ce1f44e07f3a343cef98aa67018e4e6c->leave($__internal_986853450ca48fc3203bf057c903eab3ce1f44e07f3a343cef98aa67018e4e6c_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_955a37abcaec7c780337f978a414cf5cde209016d421840514a944a4bd70299e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_955a37abcaec7c780337f978a414cf5cde209016d421840514a944a4bd70299e->enter($__internal_955a37abcaec7c780337f978a414cf5cde209016d421840514a944a4bd70299e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_f770b60699c59ee7695bbe23c443b056e9368af7744b3c6dd2920f370babb809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f770b60699c59ee7695bbe23c443b056e9368af7744b3c6dd2920f370babb809->enter($__internal_f770b60699c59ee7695bbe23c443b056e9368af7744b3c6dd2920f370babb809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 178, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_f770b60699c59ee7695bbe23c443b056e9368af7744b3c6dd2920f370babb809->leave($__internal_f770b60699c59ee7695bbe23c443b056e9368af7744b3c6dd2920f370babb809_prof);

        
        $__internal_955a37abcaec7c780337f978a414cf5cde209016d421840514a944a4bd70299e->leave($__internal_955a37abcaec7c780337f978a414cf5cde209016d421840514a944a4bd70299e_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_6741b5aac988bdeb3e30cd625d9b50fd52b209e4203b6b8d31b9beeef7e2ba86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6741b5aac988bdeb3e30cd625d9b50fd52b209e4203b6b8d31b9beeef7e2ba86->enter($__internal_6741b5aac988bdeb3e30cd625d9b50fd52b209e4203b6b8d31b9beeef7e2ba86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_c5f694a5bc9fd258630b93936c7f99acfed89935084b1dc0e90ce7fa6bf059ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f694a5bc9fd258630b93936c7f99acfed89935084b1dc0e90ce7fa6bf059ba->enter($__internal_c5f694a5bc9fd258630b93936c7f99acfed89935084b1dc0e90ce7fa6bf059ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 184, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_c5f694a5bc9fd258630b93936c7f99acfed89935084b1dc0e90ce7fa6bf059ba->leave($__internal_c5f694a5bc9fd258630b93936c7f99acfed89935084b1dc0e90ce7fa6bf059ba_prof);

        
        $__internal_6741b5aac988bdeb3e30cd625d9b50fd52b209e4203b6b8d31b9beeef7e2ba86->leave($__internal_6741b5aac988bdeb3e30cd625d9b50fd52b209e4203b6b8d31b9beeef7e2ba86_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_a1011caa12fbc2a8171a89cc3dae033aef032b2e9c2e28ef302acb95beac79f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1011caa12fbc2a8171a89cc3dae033aef032b2e9c2e28ef302acb95beac79f4->enter($__internal_a1011caa12fbc2a8171a89cc3dae033aef032b2e9c2e28ef302acb95beac79f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_8a828d1fd59b9024bb64ee077c280280db29551f9f0c66fd8379abefb909e824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a828d1fd59b9024bb64ee077c280280db29551f9f0c66fd8379abefb909e824->enter($__internal_8a828d1fd59b9024bb64ee077c280280db29551f9f0c66fd8379abefb909e824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 189, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 189, $this->getSourceContext()); })())));
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_8a828d1fd59b9024bb64ee077c280280db29551f9f0c66fd8379abefb909e824->leave($__internal_8a828d1fd59b9024bb64ee077c280280db29551f9f0c66fd8379abefb909e824_prof);

        
        $__internal_a1011caa12fbc2a8171a89cc3dae033aef032b2e9c2e28ef302acb95beac79f4->leave($__internal_a1011caa12fbc2a8171a89cc3dae033aef032b2e9c2e28ef302acb95beac79f4_prof);

    }

    // line 194
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_a03e984e5827c92fc6c08f5cedc3f8bd1d716a666fd30f1a0e8196e18054291f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a03e984e5827c92fc6c08f5cedc3f8bd1d716a666fd30f1a0e8196e18054291f->enter($__internal_a03e984e5827c92fc6c08f5cedc3f8bd1d716a666fd30f1a0e8196e18054291f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_8db396147e8dddca03d17fd281f0ba3f289a9e7fe4888b704d760e3a104ff044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8db396147e8dddca03d17fd281f0ba3f289a9e7fe4888b704d760e3a104ff044->enter($__internal_8db396147e8dddca03d17fd281f0ba3f289a9e7fe4888b704d760e3a104ff044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 195
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 195, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 195, $this->getSourceContext()); })())));
        // line 197
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_8db396147e8dddca03d17fd281f0ba3f289a9e7fe4888b704d760e3a104ff044->leave($__internal_8db396147e8dddca03d17fd281f0ba3f289a9e7fe4888b704d760e3a104ff044_prof);

        
        $__internal_a03e984e5827c92fc6c08f5cedc3f8bd1d716a666fd30f1a0e8196e18054291f->leave($__internal_a03e984e5827c92fc6c08f5cedc3f8bd1d716a666fd30f1a0e8196e18054291f_prof);

    }

    // line 200
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_d6d5a44ee8c77ab1271988ca0ddf607d2866cbd600c3b54cc5657a6365d733a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6d5a44ee8c77ab1271988ca0ddf607d2866cbd600c3b54cc5657a6365d733a2->enter($__internal_d6d5a44ee8c77ab1271988ca0ddf607d2866cbd600c3b54cc5657a6365d733a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_4b576de38c7b7be86c9817eec1f392cd09bc38a0e62f148fb06f1257be6dc6f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b576de38c7b7be86c9817eec1f392cd09bc38a0e62f148fb06f1257be6dc6f3->enter($__internal_4b576de38c7b7be86c9817eec1f392cd09bc38a0e62f148fb06f1257be6dc6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 201
        echo "    ";
        // line 202
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 203
            echo "        ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 203, $this->getSourceContext()); })())) {
                // line 204
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 204, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 205
                echo "        ";
            }
            // line 206
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 207
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 207, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 207, $this->getSourceContext()); })())))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        ";
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 209, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 209, $this->getSourceContext()); })())))) {
                // line 210
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 210, $this->getSourceContext()); })()))) {
                    // line 211
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 211, $this->getSourceContext()); })()), array("%name%" =>                     // line 212
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 212, $this->getSourceContext()); })()), "%id%" =>                     // line 213
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 213, $this->getSourceContext()); })())));
                } else {
                    // line 216
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 216, $this->getSourceContext()); })()));
                }
            }
            // line 219
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 219, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 220
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 220, $this->getSourceContext()); })());
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 220, $this->getSourceContext()); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 220, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 220, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 220, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 220, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            // line 221
            echo "</label>
    ";
        }
        
        $__internal_4b576de38c7b7be86c9817eec1f392cd09bc38a0e62f148fb06f1257be6dc6f3->leave($__internal_4b576de38c7b7be86c9817eec1f392cd09bc38a0e62f148fb06f1257be6dc6f3_prof);

        
        $__internal_d6d5a44ee8c77ab1271988ca0ddf607d2866cbd600c3b54cc5657a6365d733a2->leave($__internal_d6d5a44ee8c77ab1271988ca0ddf607d2866cbd600c3b54cc5657a6365d733a2_prof);

    }

    // line 227
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_82004879163de4c75eae6b5bfe56ae4eb057a7fa9c9c2084cd435de26e0823de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82004879163de4c75eae6b5bfe56ae4eb057a7fa9c9c2084cd435de26e0823de->enter($__internal_82004879163de4c75eae6b5bfe56ae4eb057a7fa9c9c2084cd435de26e0823de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_22d3dd9a3f6a8c923f63fc531f161abeae37c509e9f2c3070d039465a278003b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d3dd9a3f6a8c923f63fc531f161abeae37c509e9f2c3070d039465a278003b->enter($__internal_22d3dd9a3f6a8c923f63fc531f161abeae37c509e9f2c3070d039465a278003b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 228
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 228, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 228, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 228, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 229, $this->getSourceContext()); })()), 'label');
        // line 230
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 230, $this->getSourceContext()); })()), 'widget');
        // line 231
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 231, $this->getSourceContext()); })()), 'errors');
        // line 232
        echo "</div>";
        
        $__internal_22d3dd9a3f6a8c923f63fc531f161abeae37c509e9f2c3070d039465a278003b->leave($__internal_22d3dd9a3f6a8c923f63fc531f161abeae37c509e9f2c3070d039465a278003b_prof);

        
        $__internal_82004879163de4c75eae6b5bfe56ae4eb057a7fa9c9c2084cd435de26e0823de->leave($__internal_82004879163de4c75eae6b5bfe56ae4eb057a7fa9c9c2084cd435de26e0823de_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_ad4b67f5870f3de558b1698e63dc2644c1279ad2d8398d99be4d89706a158bef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad4b67f5870f3de558b1698e63dc2644c1279ad2d8398d99be4d89706a158bef->enter($__internal_ad4b67f5870f3de558b1698e63dc2644c1279ad2d8398d99be4d89706a158bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_da3d26a9ed39e30b1ebae3a5c6a13e97ece377f372cd249eca542226559e63b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da3d26a9ed39e30b1ebae3a5c6a13e97ece377f372cd249eca542226559e63b4->enter($__internal_da3d26a9ed39e30b1ebae3a5c6a13e97ece377f372cd249eca542226559e63b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 237, $this->getSourceContext()); })()), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_da3d26a9ed39e30b1ebae3a5c6a13e97ece377f372cd249eca542226559e63b4->leave($__internal_da3d26a9ed39e30b1ebae3a5c6a13e97ece377f372cd249eca542226559e63b4_prof);

        
        $__internal_ad4b67f5870f3de558b1698e63dc2644c1279ad2d8398d99be4d89706a158bef->leave($__internal_ad4b67f5870f3de558b1698e63dc2644c1279ad2d8398d99be4d89706a158bef_prof);

    }

    // line 241
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_23db4fe19aebabc0f12572c2294d113d8537695c1d0b5b16af29ece11470a998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23db4fe19aebabc0f12572c2294d113d8537695c1d0b5b16af29ece11470a998->enter($__internal_23db4fe19aebabc0f12572c2294d113d8537695c1d0b5b16af29ece11470a998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_fab2acc16aa83b2b29f55c8ab0c2351dd8626f0c6c20ce63ada12cb61ac5be1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab2acc16aa83b2b29f55c8ab0c2351dd8626f0c6c20ce63ada12cb61ac5be1d->enter($__internal_fab2acc16aa83b2b29f55c8ab0c2351dd8626f0c6c20ce63ada12cb61ac5be1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 242
        $context["force_error"] = true;
        // line 243
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_fab2acc16aa83b2b29f55c8ab0c2351dd8626f0c6c20ce63ada12cb61ac5be1d->leave($__internal_fab2acc16aa83b2b29f55c8ab0c2351dd8626f0c6c20ce63ada12cb61ac5be1d_prof);

        
        $__internal_23db4fe19aebabc0f12572c2294d113d8537695c1d0b5b16af29ece11470a998->leave($__internal_23db4fe19aebabc0f12572c2294d113d8537695c1d0b5b16af29ece11470a998_prof);

    }

    // line 246
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_78a2f3214eb38a9b961b0d9938b0c542ab191a2b0f0212464cba8c3553096bfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78a2f3214eb38a9b961b0d9938b0c542ab191a2b0f0212464cba8c3553096bfc->enter($__internal_78a2f3214eb38a9b961b0d9938b0c542ab191a2b0f0212464cba8c3553096bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_cd72a61a20ce49923ee728585824cbcbe27f582919bbdd74bd83ca7933ea15e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd72a61a20ce49923ee728585824cbcbe27f582919bbdd74bd83ca7933ea15e1->enter($__internal_cd72a61a20ce49923ee728585824cbcbe27f582919bbdd74bd83ca7933ea15e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_cd72a61a20ce49923ee728585824cbcbe27f582919bbdd74bd83ca7933ea15e1->leave($__internal_cd72a61a20ce49923ee728585824cbcbe27f582919bbdd74bd83ca7933ea15e1_prof);

        
        $__internal_78a2f3214eb38a9b961b0d9938b0c542ab191a2b0f0212464cba8c3553096bfc->leave($__internal_78a2f3214eb38a9b961b0d9938b0c542ab191a2b0f0212464cba8c3553096bfc_prof);

    }

    // line 251
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_019e05779a07a8ddff128166092c6edbb752e2b1698962d6b4df3f5345c557df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_019e05779a07a8ddff128166092c6edbb752e2b1698962d6b4df3f5345c557df->enter($__internal_019e05779a07a8ddff128166092c6edbb752e2b1698962d6b4df3f5345c557df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_03fa0e579db3941ede454fecea3c5d4cb8da9a507550c8d44343593d101564a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03fa0e579db3941ede454fecea3c5d4cb8da9a507550c8d44343593d101564a3->enter($__internal_03fa0e579db3941ede454fecea3c5d4cb8da9a507550c8d44343593d101564a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_03fa0e579db3941ede454fecea3c5d4cb8da9a507550c8d44343593d101564a3->leave($__internal_03fa0e579db3941ede454fecea3c5d4cb8da9a507550c8d44343593d101564a3_prof);

        
        $__internal_019e05779a07a8ddff128166092c6edbb752e2b1698962d6b4df3f5345c557df->leave($__internal_019e05779a07a8ddff128166092c6edbb752e2b1698962d6b4df3f5345c557df_prof);

    }

    // line 256
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_f0efc8bea53d115943e18a946e82f53bde9fcfc5a11a41f3df2b6c798308f44a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0efc8bea53d115943e18a946e82f53bde9fcfc5a11a41f3df2b6c798308f44a->enter($__internal_f0efc8bea53d115943e18a946e82f53bde9fcfc5a11a41f3df2b6c798308f44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_1ff95c2837cf00f0249ce5648e9cb9b3229702976f2d991ce33f1514f940acaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff95c2837cf00f0249ce5648e9cb9b3229702976f2d991ce33f1514f940acaa->enter($__internal_1ff95c2837cf00f0249ce5648e9cb9b3229702976f2d991ce33f1514f940acaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1ff95c2837cf00f0249ce5648e9cb9b3229702976f2d991ce33f1514f940acaa->leave($__internal_1ff95c2837cf00f0249ce5648e9cb9b3229702976f2d991ce33f1514f940acaa_prof);

        
        $__internal_f0efc8bea53d115943e18a946e82f53bde9fcfc5a11a41f3df2b6c798308f44a->leave($__internal_f0efc8bea53d115943e18a946e82f53bde9fcfc5a11a41f3df2b6c798308f44a_prof);

    }

    // line 261
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_8954f77b2d84473867b62bbb2fc5223276295fe82748dbd30d8d4ab31282969c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8954f77b2d84473867b62bbb2fc5223276295fe82748dbd30d8d4ab31282969c->enter($__internal_8954f77b2d84473867b62bbb2fc5223276295fe82748dbd30d8d4ab31282969c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_f6a79339de271b582e5d9985e1ea5a9b4e7bb2a0df485ff8b282e4510cbeaba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a79339de271b582e5d9985e1ea5a9b4e7bb2a0df485ff8b282e4510cbeaba6->enter($__internal_f6a79339de271b582e5d9985e1ea5a9b4e7bb2a0df485ff8b282e4510cbeaba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 262
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 262, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 263, $this->getSourceContext()); })()), 'widget');
        // line 264
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 264, $this->getSourceContext()); })()), 'errors');
        // line 265
        echo "</div>";
        
        $__internal_f6a79339de271b582e5d9985e1ea5a9b4e7bb2a0df485ff8b282e4510cbeaba6->leave($__internal_f6a79339de271b582e5d9985e1ea5a9b4e7bb2a0df485ff8b282e4510cbeaba6_prof);

        
        $__internal_8954f77b2d84473867b62bbb2fc5223276295fe82748dbd30d8d4ab31282969c->leave($__internal_8954f77b2d84473867b62bbb2fc5223276295fe82748dbd30d8d4ab31282969c_prof);

    }

    // line 268
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_e2d5d7062d742e02247d159ce612a29806c7bd48043f1419ab411f8ebae4b28b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2d5d7062d742e02247d159ce612a29806c7bd48043f1419ab411f8ebae4b28b->enter($__internal_e2d5d7062d742e02247d159ce612a29806c7bd48043f1419ab411f8ebae4b28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_a77150d54fbc76e54adb9a77f7492e41193ee6d069bce37e4852f2e443a7e1b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a77150d54fbc76e54adb9a77f7492e41193ee6d069bce37e4852f2e443a7e1b7->enter($__internal_a77150d54fbc76e54adb9a77f7492e41193ee6d069bce37e4852f2e443a7e1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 269
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 269, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 270
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 270, $this->getSourceContext()); })()), 'widget');
        // line 271
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 271, $this->getSourceContext()); })()), 'errors');
        // line 272
        echo "</div>";
        
        $__internal_a77150d54fbc76e54adb9a77f7492e41193ee6d069bce37e4852f2e443a7e1b7->leave($__internal_a77150d54fbc76e54adb9a77f7492e41193ee6d069bce37e4852f2e443a7e1b7_prof);

        
        $__internal_e2d5d7062d742e02247d159ce612a29806c7bd48043f1419ab411f8ebae4b28b->leave($__internal_e2d5d7062d742e02247d159ce612a29806c7bd48043f1419ab411f8ebae4b28b_prof);

    }

    // line 277
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_5ad7f0c3212566c283ea04db1a6431693262f9f6282eaf5ec450ce599d930595 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ad7f0c3212566c283ea04db1a6431693262f9f6282eaf5ec450ce599d930595->enter($__internal_5ad7f0c3212566c283ea04db1a6431693262f9f6282eaf5ec450ce599d930595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_c987697c8f81dee62bb8069a60268bc90cad4ff02e0e656374497cd8960ddb83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c987697c8f81dee62bb8069a60268bc90cad4ff02e0e656374497cd8960ddb83->enter($__internal_c987697c8f81dee62bb8069a60268bc90cad4ff02e0e656374497cd8960ddb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 278
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 278, $this->getSourceContext()); })())) > 0)) {
            // line 279
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 279, $this->getSourceContext()); })()), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 280
            echo "    <ul class=\"list-unstyled\">";
            // line 281
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 281, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 282
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            echo "</ul>
    ";
            // line 285
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 285, $this->getSourceContext()); })()), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_c987697c8f81dee62bb8069a60268bc90cad4ff02e0e656374497cd8960ddb83->leave($__internal_c987697c8f81dee62bb8069a60268bc90cad4ff02e0e656374497cd8960ddb83_prof);

        
        $__internal_5ad7f0c3212566c283ea04db1a6431693262f9f6282eaf5ec450ce599d930595->leave($__internal_5ad7f0c3212566c283ea04db1a6431693262f9f6282eaf5ec450ce599d930595_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1139 => 285,  1136 => 284,  1128 => 282,  1124 => 281,  1122 => 280,  1116 => 279,  1114 => 278,  1105 => 277,  1095 => 272,  1093 => 271,  1091 => 270,  1085 => 269,  1076 => 268,  1066 => 265,  1064 => 264,  1062 => 263,  1056 => 262,  1047 => 261,  1037 => 258,  1035 => 257,  1026 => 256,  1016 => 253,  1014 => 252,  1005 => 251,  995 => 248,  993 => 247,  984 => 246,  974 => 243,  972 => 242,  963 => 241,  953 => 238,  951 => 237,  949 => 236,  940 => 235,  930 => 232,  928 => 231,  926 => 230,  924 => 229,  918 => 228,  909 => 227,  897 => 221,  893 => 220,  878 => 219,  874 => 216,  871 => 213,  870 => 212,  869 => 211,  867 => 210,  864 => 209,  861 => 208,  858 => 207,  855 => 206,  852 => 205,  849 => 204,  846 => 203,  843 => 202,  841 => 201,  832 => 200,  822 => 197,  820 => 195,  811 => 194,  801 => 191,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 277,  200 => 276,  197 => 274,  195 => 268,  192 => 267,  190 => 261,  187 => 260,  185 => 256,  182 => 255,  180 => 251,  177 => 250,  175 => 246,  172 => 245,  170 => 241,  167 => 240,  165 => 235,  162 => 234,  160 => 227,  157 => 226,  154 => 224,  152 => 200,  149 => 199,  147 => 194,  144 => 193,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
