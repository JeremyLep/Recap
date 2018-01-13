<?php

/* WebProfilerBundle:Collector:events.html.twig */
class __TwigTemplate_bed0a12f218ee2651996ca7355b0b5f62da4fe9620a0a6b730d0f4f977696b25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:events.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1daa617ef21db5ba63787308cbb1a44814fd570b7c7d0245e9b0c7216da18890 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1daa617ef21db5ba63787308cbb1a44814fd570b7c7d0245e9b0c7216da18890->enter($__internal_1daa617ef21db5ba63787308cbb1a44814fd570b7c7d0245e9b0c7216da18890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:events.html.twig"));

        $__internal_57a0f558494927392b9f736877fecfa8f088de484f5279ddacd8b06b56f39b0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57a0f558494927392b9f736877fecfa8f088de484f5279ddacd8b06b56f39b0c->enter($__internal_57a0f558494927392b9f736877fecfa8f088de484f5279ddacd8b06b56f39b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:events.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1daa617ef21db5ba63787308cbb1a44814fd570b7c7d0245e9b0c7216da18890->leave($__internal_1daa617ef21db5ba63787308cbb1a44814fd570b7c7d0245e9b0c7216da18890_prof);

        
        $__internal_57a0f558494927392b9f736877fecfa8f088de484f5279ddacd8b06b56f39b0c->leave($__internal_57a0f558494927392b9f736877fecfa8f088de484f5279ddacd8b06b56f39b0c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f2ca05b2650c475963c3ee9952a3bfd6879a2acf97b124a1895de54e0602a162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2ca05b2650c475963c3ee9952a3bfd6879a2acf97b124a1895de54e0602a162->enter($__internal_f2ca05b2650c475963c3ee9952a3bfd6879a2acf97b124a1895de54e0602a162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_317fce4e2de642827ace69f13bc1f613262f77768132dc329e18b20f2d3276a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_317fce4e2de642827ace69f13bc1f613262f77768132dc329e18b20f2d3276a5->enter($__internal_317fce4e2de642827ace69f13bc1f613262f77768132dc329e18b20f2d3276a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/event.svg");
        echo "</span>
    <strong>Events</strong>
</span>
";
        
        $__internal_317fce4e2de642827ace69f13bc1f613262f77768132dc329e18b20f2d3276a5->leave($__internal_317fce4e2de642827ace69f13bc1f613262f77768132dc329e18b20f2d3276a5_prof);

        
        $__internal_f2ca05b2650c475963c3ee9952a3bfd6879a2acf97b124a1895de54e0602a162->leave($__internal_f2ca05b2650c475963c3ee9952a3bfd6879a2acf97b124a1895de54e0602a162_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_319ed9f0feafca2a62095c0b887081ea3a5d9f5212986d1d6abc746d122f5743 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_319ed9f0feafca2a62095c0b887081ea3a5d9f5212986d1d6abc746d122f5743->enter($__internal_319ed9f0feafca2a62095c0b887081ea3a5d9f5212986d1d6abc746d122f5743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6d69fb995979ef2e50a6f889f519cc7216dbf02b3d8c10624f6f5af67dd067d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d69fb995979ef2e50a6f889f519cc7216dbf02b3d8c10624f6f5af67dd067d5->enter($__internal_6d69fb995979ef2e50a6f889f519cc7216dbf02b3d8c10624f6f5af67dd067d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    <h2>Event Dispatcher</h2>

    ";
        // line 15
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 15, $this->getSourceContext()); })()), "calledlisteners", array()))) {
            // line 16
            echo "        <div class=\"empty\">
            <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    ";
        } else {
            // line 20
            echo "        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Called Listeners <span class=\"badge\">";
            // line 22
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 22, $this->getSourceContext()); })()), "calledlisteners", array())), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 25
            echo $context["helper"]->macro_render_table(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 25, $this->getSourceContext()); })()), "calledlisteners", array()));
            echo "
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Not Called Listeners <span class=\"badge\">";
            // line 30
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 30, $this->getSourceContext()); })()), "notcalledlisteners", array())), "html", null, true);
            echo "</span></h3>
                <div class=\"tab-content\">
                    ";
            // line 32
            if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 32, $this->getSourceContext()); })()), "notcalledlisteners", array()))) {
                // line 33
                echo "                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled listeners</strong>.
                            </p>
                            <p>
                                All listeners were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    ";
            } else {
                // line 44
                echo "                        ";
                echo $context["helper"]->macro_render_table(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 44, $this->getSourceContext()); })()), "notcalledlisteners", array()));
                echo "
                    ";
            }
            // line 46
            echo "                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_6d69fb995979ef2e50a6f889f519cc7216dbf02b3d8c10624f6f5af67dd067d5->leave($__internal_6d69fb995979ef2e50a6f889f519cc7216dbf02b3d8c10624f6f5af67dd067d5_prof);

        
        $__internal_319ed9f0feafca2a62095c0b887081ea3a5d9f5212986d1d6abc746d122f5743->leave($__internal_319ed9f0feafca2a62095c0b887081ea3a5d9f5212986d1d6abc746d122f5743_prof);

    }

    // line 52
    public function macro_render_table($__listeners__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "listeners" => $__listeners__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_d7cd28d3a31dda826bca5709e4660338da041224d8d3fc554952734bb0adc2fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_d7cd28d3a31dda826bca5709e4660338da041224d8d3fc554952734bb0adc2fa->enter($__internal_d7cd28d3a31dda826bca5709e4660338da041224d8d3fc554952734bb0adc2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_1ff9e2d1755ef0957ac9184dcc5e108bc4c3f0b9505dc92507337aba17f46f03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_1ff9e2d1755ef0957ac9184dcc5e108bc4c3f0b9505dc92507337aba17f46f03->enter($__internal_1ff9e2d1755ef0957ac9184dcc5e108bc4c3f0b9505dc92507337aba17f46f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 53
            echo "    <table>
        <thead>
            <tr>
                <th class=\"text-right\">Priority</th>
                <th>Listener</th>
            </tr>
        </thead>

        ";
            // line 61
            $context["previous_event"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_first($this->env, (isset($context["listeners"]) || array_key_exists("listeners", $context) ? $context["listeners"] : (function () { throw new Twig_Error_Runtime('Variable "listeners" does not exist.', 61, $this->getSourceContext()); })())), "event", array());
            // line 62
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeners"]) || array_key_exists("listeners", $context) ? $context["listeners"] : (function () { throw new Twig_Error_Runtime('Variable "listeners" does not exist.', 62, $this->getSourceContext()); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 63
                echo "            ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array()) || (twig_get_attribute($this->env, $this->getSourceContext(), $context["listener"], "event", array()) != (isset($context["previous_event"]) || array_key_exists("previous_event", $context) ? $context["previous_event"] : (function () { throw new Twig_Error_Runtime('Variable "previous_event" does not exist.', 63, $this->getSourceContext()); })())))) {
                    // line 64
                    echo "                ";
                    if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) {
                        // line 65
                        echo "                    </tbody>
                ";
                    }
                    // line 67
                    echo "
                <tbody>
                    <tr>
                        <th colspan=\"2\" class=\"colored font-normal\">";
                    // line 70
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["listener"], "event", array()), "html", null, true);
                    echo "</th>
                    </tr>

                ";
                    // line 73
                    $context["previous_event"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["listener"], "event", array());
                    // line 74
                    echo "            ";
                }
                // line 75
                echo "
            <tr>
                <td class=\"text-right\">";
                // line 77
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["listener"], "priority", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["listener"], "priority", array()), "-")) : ("-")), "html", null, true);
                echo "</td>
                <td class=\"font-normal\">";
                // line 78
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["listener"], "stub", array())));
                echo "</td>
            </tr>

            ";
                // line 81
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    // line 82
                    echo "                </tbody>
            ";
                }
                // line 84
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "    </table>
";
            
            $__internal_1ff9e2d1755ef0957ac9184dcc5e108bc4c3f0b9505dc92507337aba17f46f03->leave($__internal_1ff9e2d1755ef0957ac9184dcc5e108bc4c3f0b9505dc92507337aba17f46f03_prof);

            
            $__internal_d7cd28d3a31dda826bca5709e4660338da041224d8d3fc554952734bb0adc2fa->leave($__internal_d7cd28d3a31dda826bca5709e4660338da041224d8d3fc554952734bb0adc2fa_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 85,  243 => 84,  239 => 82,  237 => 81,  231 => 78,  227 => 77,  223 => 75,  220 => 74,  218 => 73,  212 => 70,  207 => 67,  203 => 65,  200 => 64,  197 => 63,  179 => 62,  177 => 61,  167 => 53,  149 => 52,  135 => 46,  129 => 44,  116 => 33,  114 => 32,  109 => 30,  101 => 25,  95 => 22,  91 => 20,  85 => 16,  83 => 15,  79 => 13,  70 => 12,  56 => 7,  53 => 6,  44 => 5,  34 => 1,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/event.svg') }}</span>
    <strong>Events</strong>
</span>
{% endblock %}

{% block panel %}
    <h2>Event Dispatcher</h2>

    {% if collector.calledlisteners is empty %}
        <div class=\"empty\">
            <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    {% else %}
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Called Listeners <span class=\"badge\">{{ collector.calledlisteners|length }}</span></h3>

                <div class=\"tab-content\">
                    {{ helper.render_table(collector.calledlisteners) }}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Not Called Listeners <span class=\"badge\">{{ collector.notcalledlisteners|length }}</span></h3>
                <div class=\"tab-content\">
                    {% if collector.notcalledlisteners is empty %}
                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled listeners</strong>.
                            </p>
                            <p>
                                All listeners were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    {% else %}
                        {{ helper.render_table(collector.notcalledlisteners) }}
                    {% endif %}
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}

{% macro render_table(listeners) %}
    <table>
        <thead>
            <tr>
                <th class=\"text-right\">Priority</th>
                <th>Listener</th>
            </tr>
        </thead>

        {% set previous_event = (listeners|first).event %}
        {% for listener in listeners %}
            {% if loop.first or listener.event != previous_event %}
                {% if not loop.first %}
                    </tbody>
                {% endif %}

                <tbody>
                    <tr>
                        <th colspan=\"2\" class=\"colored font-normal\">{{ listener.event }}</th>
                    </tr>

                {% set previous_event = listener.event %}
            {% endif %}

            <tr>
                <td class=\"text-right\">{{ listener.priority|default('-') }}</td>
                <td class=\"font-normal\">{{ profiler_dump(listener.stub) }}</td>
            </tr>

            {% if loop.last %}
                </tbody>
            {% endif %}
        {% endfor %}
    </table>
{% endmacro %}
", "WebProfilerBundle:Collector:events.html.twig", "/var/www/recap/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/events.html.twig");
    }
}
