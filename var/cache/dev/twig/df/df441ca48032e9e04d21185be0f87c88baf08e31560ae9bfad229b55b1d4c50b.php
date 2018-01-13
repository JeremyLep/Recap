<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_5df0a054108a7bd6884a9907669a5e0b0726e709a7115157cead5598082b3903 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c503c936acbf6784696e9db1a27794858fca6fe3b33fc1a93c5f4f684c88c94c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c503c936acbf6784696e9db1a27794858fca6fe3b33fc1a93c5f4f684c88c94c->enter($__internal_c503c936acbf6784696e9db1a27794858fca6fe3b33fc1a93c5f4f684c88c94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_10dff37316b7549a09fc055448ba0690fa9edd654f0f3c1e8067bf222978c23b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10dff37316b7549a09fc055448ba0690fa9edd654f0f3c1e8067bf222978c23b->enter($__internal_10dff37316b7549a09fc055448ba0690fa9edd654f0f3c1e8067bf222978c23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_c503c936acbf6784696e9db1a27794858fca6fe3b33fc1a93c5f4f684c88c94c->leave($__internal_c503c936acbf6784696e9db1a27794858fca6fe3b33fc1a93c5f4f684c88c94c_prof);

        
        $__internal_10dff37316b7549a09fc055448ba0690fa9edd654f0f3c1e8067bf222978c23b->leave($__internal_10dff37316b7549a09fc055448ba0690fa9edd654f0f3c1e8067bf222978c23b_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_1a931f7c9e33f5fefbdcf5eb2fdc130aab755d052328821cc6692479f146047d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a931f7c9e33f5fefbdcf5eb2fdc130aab755d052328821cc6692479f146047d->enter($__internal_1a931f7c9e33f5fefbdcf5eb2fdc130aab755d052328821cc6692479f146047d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_0083a95e398d8fc2240358c01572b3d96f89f1474befb876a7ccbf0e3cdff5e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0083a95e398d8fc2240358c01572b3d96f89f1474befb876a7ccbf0e3cdff5e2->enter($__internal_0083a95e398d8fc2240358c01572b3d96f89f1474befb876a7ccbf0e3cdff5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_0083a95e398d8fc2240358c01572b3d96f89f1474befb876a7ccbf0e3cdff5e2->leave($__internal_0083a95e398d8fc2240358c01572b3d96f89f1474befb876a7ccbf0e3cdff5e2_prof);

        
        $__internal_1a931f7c9e33f5fefbdcf5eb2fdc130aab755d052328821cc6692479f146047d->leave($__internal_1a931f7c9e33f5fefbdcf5eb2fdc130aab755d052328821cc6692479f146047d_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_c001ad08fa76812aef9a905616282f24454708296c368dac7480870a739b9383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c001ad08fa76812aef9a905616282f24454708296c368dac7480870a739b9383->enter($__internal_c001ad08fa76812aef9a905616282f24454708296c368dac7480870a739b9383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_d8200ff48af5cde2b2a25016c1ac6b9192eef879218a5a7bd0e1e18b7d0dd2e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8200ff48af5cde2b2a25016c1ac6b9192eef879218a5a7bd0e1e18b7d0dd2e5->enter($__internal_d8200ff48af5cde2b2a25016c1ac6b9192eef879218a5a7bd0e1e18b7d0dd2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 12, $this->getSourceContext()); })()) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 15, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d8200ff48af5cde2b2a25016c1ac6b9192eef879218a5a7bd0e1e18b7d0dd2e5->leave($__internal_d8200ff48af5cde2b2a25016c1ac6b9192eef879218a5a7bd0e1e18b7d0dd2e5_prof);

        
        $__internal_c001ad08fa76812aef9a905616282f24454708296c368dac7480870a739b9383->leave($__internal_c001ad08fa76812aef9a905616282f24454708296c368dac7480870a739b9383_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_cb10f7c69e1228d435a690d81228745454940bfe016eae33c414e4d5b0a5db7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb10f7c69e1228d435a690d81228745454940bfe016eae33c414e4d5b0a5db7f->enter($__internal_cb10f7c69e1228d435a690d81228745454940bfe016eae33c414e4d5b0a5db7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_a72266598286ab78515fd46288c59de5e248d3f1e4ca759e2fd3213bef28b79e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72266598286ab78515fd46288c59de5e248d3f1e4ca759e2fd3213bef28b79e->enter($__internal_a72266598286ab78515fd46288c59de5e248d3f1e4ca759e2fd3213bef28b79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_a72266598286ab78515fd46288c59de5e248d3f1e4ca759e2fd3213bef28b79e->leave($__internal_a72266598286ab78515fd46288c59de5e248d3f1e4ca759e2fd3213bef28b79e_prof);

        
        $__internal_cb10f7c69e1228d435a690d81228745454940bfe016eae33c414e4d5b0a5db7f->leave($__internal_cb10f7c69e1228d435a690d81228745454940bfe016eae33c414e4d5b0a5db7f_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9d3f68a4c9ab60da30082e5910e50452939c4b1b6e6109fda5ab9b2dde568028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d3f68a4c9ab60da30082e5910e50452939c4b1b6e6109fda5ab9b2dde568028->enter($__internal_9d3f68a4c9ab60da30082e5910e50452939c4b1b6e6109fda5ab9b2dde568028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_61660eb255de1e9061616a1ceb968b14b169cc76b4478992ede78be30d6479f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61660eb255de1e9061616a1ceb968b14b169cc76b4478992ede78be30d6479f2->enter($__internal_61660eb255de1e9061616a1ceb968b14b169cc76b4478992ede78be30d6479f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 28, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 28, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 28, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_61660eb255de1e9061616a1ceb968b14b169cc76b4478992ede78be30d6479f2->leave($__internal_61660eb255de1e9061616a1ceb968b14b169cc76b4478992ede78be30d6479f2_prof);

        
        $__internal_9d3f68a4c9ab60da30082e5910e50452939c4b1b6e6109fda5ab9b2dde568028->leave($__internal_9d3f68a4c9ab60da30082e5910e50452939c4b1b6e6109fda5ab9b2dde568028_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_5d669401020669b08771841f28ea088c75d79715fbe4d4c63dccc2a3a570c742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d669401020669b08771841f28ea088c75d79715fbe4d4c63dccc2a3a570c742->enter($__internal_5d669401020669b08771841f28ea088c75d79715fbe4d4c63dccc2a3a570c742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_25ea7c040677a29bf788f52b8024ffc132695635e9267f15d854de4185bf3e0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ea7c040677a29bf788f52b8024ffc132695635e9267f15d854de4185bf3e0d->enter($__internal_25ea7c040677a29bf788f52b8024ffc132695635e9267f15d854de4185bf3e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_25ea7c040677a29bf788f52b8024ffc132695635e9267f15d854de4185bf3e0d->leave($__internal_25ea7c040677a29bf788f52b8024ffc132695635e9267f15d854de4185bf3e0d_prof);

        
        $__internal_5d669401020669b08771841f28ea088c75d79715fbe4d4c63dccc2a3a570c742->leave($__internal_5d669401020669b08771841f28ea088c75d79715fbe4d4c63dccc2a3a570c742_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_79f5474947989b5c6495f5ad3cdc821d677be4170b92b5d6d816b69634e3588c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79f5474947989b5c6495f5ad3cdc821d677be4170b92b5d6d816b69634e3588c->enter($__internal_79f5474947989b5c6495f5ad3cdc821d677be4170b92b5d6d816b69634e3588c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_5c8660eb8690f71b26019a0ed4b2c484bdd99e8f422eb05037a683db7fddfd2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c8660eb8690f71b26019a0ed4b2c484bdd99e8f422eb05037a683db7fddfd2f->enter($__internal_5c8660eb8690f71b26019a0ed4b2c484bdd99e8f422eb05037a683db7fddfd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_5c8660eb8690f71b26019a0ed4b2c484bdd99e8f422eb05037a683db7fddfd2f->leave($__internal_5c8660eb8690f71b26019a0ed4b2c484bdd99e8f422eb05037a683db7fddfd2f_prof);

        
        $__internal_79f5474947989b5c6495f5ad3cdc821d677be4170b92b5d6d816b69634e3588c->leave($__internal_79f5474947989b5c6495f5ad3cdc821d677be4170b92b5d6d816b69634e3588c_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_27eb28ff1ae8aff54e741a6881c31d351f3faa10fcd348bb8a5d48af793d81f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27eb28ff1ae8aff54e741a6881c31d351f3faa10fcd348bb8a5d48af793d81f6->enter($__internal_27eb28ff1ae8aff54e741a6881c31d351f3faa10fcd348bb8a5d48af793d81f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_ea0a0f884029bc059a89dc3c1df5e3e7f73ef7dab7f869744ed0e164b09ddf0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea0a0f884029bc059a89dc3c1df5e3e7f73ef7dab7f869744ed0e164b09ddf0e->enter($__internal_ea0a0f884029bc059a89dc3c1df5e3e7f73ef7dab7f869744ed0e164b09ddf0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 47, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ea0a0f884029bc059a89dc3c1df5e3e7f73ef7dab7f869744ed0e164b09ddf0e->leave($__internal_ea0a0f884029bc059a89dc3c1df5e3e7f73ef7dab7f869744ed0e164b09ddf0e_prof);

        
        $__internal_27eb28ff1ae8aff54e741a6881c31d351f3faa10fcd348bb8a5d48af793d81f6->leave($__internal_27eb28ff1ae8aff54e741a6881c31d351f3faa10fcd348bb8a5d48af793d81f6_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_8afdfa6d98930c18ffc255ebb374d85f85f93f6d317653c996a36e7d9de5e1d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8afdfa6d98930c18ffc255ebb374d85f85f93f6d317653c996a36e7d9de5e1d5->enter($__internal_8afdfa6d98930c18ffc255ebb374d85f85f93f6d317653c996a36e7d9de5e1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_c94c2d49893a5b3b6b308581432a6d9aba421dea2e13c6a9ed345e300f9eabe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c94c2d49893a5b3b6b308581432a6d9aba421dea2e13c6a9ed345e300f9eabe1->enter($__internal_c94c2d49893a5b3b6b308581432a6d9aba421dea2e13c6a9ed345e300f9eabe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c94c2d49893a5b3b6b308581432a6d9aba421dea2e13c6a9ed345e300f9eabe1->leave($__internal_c94c2d49893a5b3b6b308581432a6d9aba421dea2e13c6a9ed345e300f9eabe1_prof);

        
        $__internal_8afdfa6d98930c18ffc255ebb374d85f85f93f6d317653c996a36e7d9de5e1d5->leave($__internal_8afdfa6d98930c18ffc255ebb374d85f85f93f6d317653c996a36e7d9de5e1d5_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_a0e17ea37baea281196b8fb475bd2a3cb6bd3ad91b0629ba9e0b04e49639a322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0e17ea37baea281196b8fb475bd2a3cb6bd3ad91b0629ba9e0b04e49639a322->enter($__internal_a0e17ea37baea281196b8fb475bd2a3cb6bd3ad91b0629ba9e0b04e49639a322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_c4cfc9f8c2f70dd1f5811e7bbfad720e59cb998485b26e45724ebaeae20e9ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4cfc9f8c2f70dd1f5811e7bbfad720e59cb998485b26e45724ebaeae20e9ba6->enter($__internal_c4cfc9f8c2f70dd1f5811e7bbfad720e59cb998485b26e45724ebaeae20e9ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c4cfc9f8c2f70dd1f5811e7bbfad720e59cb998485b26e45724ebaeae20e9ba6->leave($__internal_c4cfc9f8c2f70dd1f5811e7bbfad720e59cb998485b26e45724ebaeae20e9ba6_prof);

        
        $__internal_a0e17ea37baea281196b8fb475bd2a3cb6bd3ad91b0629ba9e0b04e49639a322->leave($__internal_a0e17ea37baea281196b8fb475bd2a3cb6bd3ad91b0629ba9e0b04e49639a322_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_a82bf974ed97429ab9d51226cc4157c03d7b718f76147a35614013df97b02338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a82bf974ed97429ab9d51226cc4157c03d7b718f76147a35614013df97b02338->enter($__internal_a82bf974ed97429ab9d51226cc4157c03d7b718f76147a35614013df97b02338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_403ca2fa82088ee116b4f17b0f535495ee3d91e6e31d3e4fa465a3390783007c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_403ca2fa82088ee116b4f17b0f535495ee3d91e6e31d3e4fa465a3390783007c->enter($__internal_403ca2fa82088ee116b4f17b0f535495ee3d91e6e31d3e4fa465a3390783007c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_403ca2fa82088ee116b4f17b0f535495ee3d91e6e31d3e4fa465a3390783007c->leave($__internal_403ca2fa82088ee116b4f17b0f535495ee3d91e6e31d3e4fa465a3390783007c_prof);

        
        $__internal_a82bf974ed97429ab9d51226cc4157c03d7b718f76147a35614013df97b02338->leave($__internal_a82bf974ed97429ab9d51226cc4157c03d7b718f76147a35614013df97b02338_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
