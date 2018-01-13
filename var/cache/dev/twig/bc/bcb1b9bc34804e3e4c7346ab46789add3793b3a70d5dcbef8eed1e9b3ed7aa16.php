<?php

/* form_table_layout.html.twig */
class __TwigTemplate_b0223034717f05c18a8c7408e6979c33a430ac8aebb0d9bc75c0eba205f2dde0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82cca245515937bbac05d5899745eeccf1bfa24b4eb9365f0e678d169a821727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82cca245515937bbac05d5899745eeccf1bfa24b4eb9365f0e678d169a821727->enter($__internal_82cca245515937bbac05d5899745eeccf1bfa24b4eb9365f0e678d169a821727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_bc0ed88a992eaf8c6b03dee56cf288b6d2794b68c9871f583d42d1e284ffbe84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc0ed88a992eaf8c6b03dee56cf288b6d2794b68c9871f583d42d1e284ffbe84->enter($__internal_bc0ed88a992eaf8c6b03dee56cf288b6d2794b68c9871f583d42d1e284ffbe84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_82cca245515937bbac05d5899745eeccf1bfa24b4eb9365f0e678d169a821727->leave($__internal_82cca245515937bbac05d5899745eeccf1bfa24b4eb9365f0e678d169a821727_prof);

        
        $__internal_bc0ed88a992eaf8c6b03dee56cf288b6d2794b68c9871f583d42d1e284ffbe84->leave($__internal_bc0ed88a992eaf8c6b03dee56cf288b6d2794b68c9871f583d42d1e284ffbe84_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0da651332ac4195698e01a8818459ef287cd7ef00d21775d892cbe4cb7a34df8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0da651332ac4195698e01a8818459ef287cd7ef00d21775d892cbe4cb7a34df8->enter($__internal_0da651332ac4195698e01a8818459ef287cd7ef00d21775d892cbe4cb7a34df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_450fe087c5ba79c4ac834532fc670edbe127fbd7964ad967b225c23c5ffe6894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_450fe087c5ba79c4ac834532fc670edbe127fbd7964ad967b225c23c5ffe6894->enter($__internal_450fe087c5ba79c4ac834532fc670edbe127fbd7964ad967b225c23c5ffe6894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_450fe087c5ba79c4ac834532fc670edbe127fbd7964ad967b225c23c5ffe6894->leave($__internal_450fe087c5ba79c4ac834532fc670edbe127fbd7964ad967b225c23c5ffe6894_prof);

        
        $__internal_0da651332ac4195698e01a8818459ef287cd7ef00d21775d892cbe4cb7a34df8->leave($__internal_0da651332ac4195698e01a8818459ef287cd7ef00d21775d892cbe4cb7a34df8_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_94c894f0646c4d27056332c102bfe86edf40fc23f89e1d6a361e2b49918432eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94c894f0646c4d27056332c102bfe86edf40fc23f89e1d6a361e2b49918432eb->enter($__internal_94c894f0646c4d27056332c102bfe86edf40fc23f89e1d6a361e2b49918432eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_3da13260ffec33cfdd406838837747a0245af3f9189d86f5a71d243fca3bdfeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da13260ffec33cfdd406838837747a0245af3f9189d86f5a71d243fca3bdfeb->enter($__internal_3da13260ffec33cfdd406838837747a0245af3f9189d86f5a71d243fca3bdfeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_3da13260ffec33cfdd406838837747a0245af3f9189d86f5a71d243fca3bdfeb->leave($__internal_3da13260ffec33cfdd406838837747a0245af3f9189d86f5a71d243fca3bdfeb_prof);

        
        $__internal_94c894f0646c4d27056332c102bfe86edf40fc23f89e1d6a361e2b49918432eb->leave($__internal_94c894f0646c4d27056332c102bfe86edf40fc23f89e1d6a361e2b49918432eb_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_5bad26fd44569b4f77d6b35eb22d95104b435bd9643e65b574563262a8feadfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bad26fd44569b4f77d6b35eb22d95104b435bd9643e65b574563262a8feadfb->enter($__internal_5bad26fd44569b4f77d6b35eb22d95104b435bd9643e65b574563262a8feadfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_099ce603d91483c85ec267ccf96939c13a22297d1e9ef413835c67183a6d88ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_099ce603d91483c85ec267ccf96939c13a22297d1e9ef413835c67183a6d88ad->enter($__internal_099ce603d91483c85ec267ccf96939c13a22297d1e9ef413835c67183a6d88ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_099ce603d91483c85ec267ccf96939c13a22297d1e9ef413835c67183a6d88ad->leave($__internal_099ce603d91483c85ec267ccf96939c13a22297d1e9ef413835c67183a6d88ad_prof);

        
        $__internal_5bad26fd44569b4f77d6b35eb22d95104b435bd9643e65b574563262a8feadfb->leave($__internal_5bad26fd44569b4f77d6b35eb22d95104b435bd9643e65b574563262a8feadfb_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_ab194499cafe05a159877fb72b63ce1ee7d2065addc1bda0fa91313da7269340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab194499cafe05a159877fb72b63ce1ee7d2065addc1bda0fa91313da7269340->enter($__internal_ab194499cafe05a159877fb72b63ce1ee7d2065addc1bda0fa91313da7269340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_6ec79757037bb285f0640ed2d346fa7040ef1236e110d36d4f0e384ad3dd3eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec79757037bb285f0640ed2d346fa7040ef1236e110d36d4f0e384ad3dd3eea->enter($__internal_6ec79757037bb285f0640ed2d346fa7040ef1236e110d36d4f0e384ad3dd3eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "parent", array())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_6ec79757037bb285f0640ed2d346fa7040ef1236e110d36d4f0e384ad3dd3eea->leave($__internal_6ec79757037bb285f0640ed2d346fa7040ef1236e110d36d4f0e384ad3dd3eea_prof);

        
        $__internal_ab194499cafe05a159877fb72b63ce1ee7d2065addc1bda0fa91313da7269340->leave($__internal_ab194499cafe05a159877fb72b63ce1ee7d2065addc1bda0fa91313da7269340_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
