<?php

/* @WebProfiler/Collector/twig.html.twig */
class __TwigTemplate_a076e77a2c48c10b848c150bff8304b1515c0037e9fc4abf93adfd44850e5d78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/twig.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_05b46d0f82ec003641c82d57421e8bfb0bfe274e910b57de0ad80953b1a6a7c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05b46d0f82ec003641c82d57421e8bfb0bfe274e910b57de0ad80953b1a6a7c7->enter($__internal_05b46d0f82ec003641c82d57421e8bfb0bfe274e910b57de0ad80953b1a6a7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $__internal_3b2625ccbe2fe9d66b6c0a767100c5a994be3fdad6fb6695d8016736c8ab2d77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b2625ccbe2fe9d66b6c0a767100c5a994be3fdad6fb6695d8016736c8ab2d77->enter($__internal_3b2625ccbe2fe9d66b6c0a767100c5a994be3fdad6fb6695d8016736c8ab2d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05b46d0f82ec003641c82d57421e8bfb0bfe274e910b57de0ad80953b1a6a7c7->leave($__internal_05b46d0f82ec003641c82d57421e8bfb0bfe274e910b57de0ad80953b1a6a7c7_prof);

        
        $__internal_3b2625ccbe2fe9d66b6c0a767100c5a994be3fdad6fb6695d8016736c8ab2d77->leave($__internal_3b2625ccbe2fe9d66b6c0a767100c5a994be3fdad6fb6695d8016736c8ab2d77_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_06f4d9e4bff87ff6f6a30adf0905f89140c6dc47139b3de34fab7928c323dadb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06f4d9e4bff87ff6f6a30adf0905f89140c6dc47139b3de34fab7928c323dadb->enter($__internal_06f4d9e4bff87ff6f6a30adf0905f89140c6dc47139b3de34fab7928c323dadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0ccc190768bdd3227710c8f6d929a8fe89c313881c781ad92ca901846e27758d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ccc190768bdd3227710c8f6d929a8fe89c313881c781ad92ca901846e27758d->enter($__internal_0ccc190768bdd3227710c8f6d929a8fe89c313881c781ad92ca901846e27758d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["time"] = (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templatecount", array())) ? (sprintf("%0.0f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "time", array()))) : ("n/a"));
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/twig.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 7
        echo twig_escape_filter($this->env, ($context["time"] ?? $this->getContext($context, "time")), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, ($context["time"] ?? $this->getContext($context, "time")), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templatecount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "blockcount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "macrocount", array()), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url"))));
        echo "
";
        
        $__internal_0ccc190768bdd3227710c8f6d929a8fe89c313881c781ad92ca901846e27758d->leave($__internal_0ccc190768bdd3227710c8f6d929a8fe89c313881c781ad92ca901846e27758d_prof);

        
        $__internal_06f4d9e4bff87ff6f6a30adf0905f89140c6dc47139b3de34fab7928c323dadb->leave($__internal_06f4d9e4bff87ff6f6a30adf0905f89140c6dc47139b3de34fab7928c323dadb_prof);

    }

    // line 33
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5b9db0db9a21872812e294634bce42c7e30a74c1548b172a1f66410b4f22cfd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b9db0db9a21872812e294634bce42c7e30a74c1548b172a1f66410b4f22cfd0->enter($__internal_5b9db0db9a21872812e294634bce42c7e30a74c1548b172a1f66410b4f22cfd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3d717a370ffadf4c98fba16636cf43afca340d6ae8e0b916638fcd347c9db13e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d717a370ffadf4c98fba16636cf43afca340d6ae8e0b916638fcd347c9db13e->enter($__internal_3d717a370ffadf4c98fba16636cf43afca340d6ae8e0b916638fcd347c9db13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 34
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 35
        echo twig_include($this->env, $context, "@WebProfiler/Icon/twig.svg");
        echo "</span>
        <strong>Twig</strong>
    </span>
";
        
        $__internal_3d717a370ffadf4c98fba16636cf43afca340d6ae8e0b916638fcd347c9db13e->leave($__internal_3d717a370ffadf4c98fba16636cf43afca340d6ae8e0b916638fcd347c9db13e_prof);

        
        $__internal_5b9db0db9a21872812e294634bce42c7e30a74c1548b172a1f66410b4f22cfd0->leave($__internal_5b9db0db9a21872812e294634bce42c7e30a74c1548b172a1f66410b4f22cfd0_prof);

    }

    // line 40
    public function block_panel($context, array $blocks = array())
    {
        $__internal_85216c6f6f0dcd6a44634fd8dd8cde6f3803ef5f60894baacc08846fc58ff48f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85216c6f6f0dcd6a44634fd8dd8cde6f3803ef5f60894baacc08846fc58ff48f->enter($__internal_85216c6f6f0dcd6a44634fd8dd8cde6f3803ef5f60894baacc08846fc58ff48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c79bfc7196c408bd29008197906f13743f3f504a13470e54f7392e31d4a818fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c79bfc7196c408bd29008197906f13743f3f504a13470e54f7392e31d4a818fc->enter($__internal_c79bfc7196c408bd29008197906f13743f3f504a13470e54f7392e31d4a818fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 41
        echo "    ";
        if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templatecount", array()) == 0)) {
            // line 42
            echo "        <h2>Twig</h2>

        <div class=\"empty\">
            <p>No Twig templates were rendered for this request.</p>
        </div>
    ";
        } else {
            // line 48
            echo "        <h2>Twig Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 52
            echo twig_escape_filter($this->env, sprintf("%0.0f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "time", array())), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Render time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templatecount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Template calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "blockcount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Block calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "macrocount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Macro calls</span>
            </div>
        </div>

        <p class=\"help\">
            Render time includes sub-requests rendering time (if any).
        </p>

        <h2>Rendered Templates</h2>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Template Name</th>
                    <th scope=\"col\">Render Count</th>
                </tr>
            </thead>
            <tbody>
            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templates", array()));
            foreach ($context['_seq'] as $context["template"] => $context["count"]) {
                // line 87
                echo "                <tr>
                    <td>";
                // line 88
                echo twig_escape_filter($this->env, $context["template"], "html", null, true);
                echo "</td>
                    <td class=\"font-normal\">";
                // line 89
                echo twig_escape_filter($this->env, $context["count"], "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['template'], $context['count'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "            </tbody>
        </table>

        <h2>Rendering Call Graph</h2>

        <div id=\"twig-dump\">
            ";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "htmlcallgraph", array()), "html", null, true);
            echo "
        </div>
    ";
        }
        
        $__internal_c79bfc7196c408bd29008197906f13743f3f504a13470e54f7392e31d4a818fc->leave($__internal_c79bfc7196c408bd29008197906f13743f3f504a13470e54f7392e31d4a818fc_prof);

        
        $__internal_85216c6f6f0dcd6a44634fd8dd8cde6f3803ef5f60894baacc08846fc58ff48f->leave($__internal_85216c6f6f0dcd6a44634fd8dd8cde6f3803ef5f60894baacc08846fc58ff48f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/twig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 98,  237 => 92,  228 => 89,  224 => 88,  221 => 87,  217 => 86,  195 => 67,  187 => 62,  179 => 57,  171 => 52,  165 => 48,  157 => 42,  154 => 41,  145 => 40,  131 => 35,  128 => 34,  119 => 33,  107 => 30,  104 => 29,  98 => 26,  91 => 22,  84 => 18,  77 => 14,  73 => 12,  71 => 11,  68 => 10,  62 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set time = collector.templatecount ? '%0.0f'|format(collector.time) : 'n/a' %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/twig.svg') }}
        <span class=\"sf-toolbar-value\">{{ time }}</span>
        <span class=\"sf-toolbar-label\">ms</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>{{ time }} ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.templatecount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.blockcount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.macrocount }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/twig.svg') }}</span>
        <strong>Twig</strong>
    </span>
{% endblock %}

{% block panel %}
    {% if collector.templatecount == 0 %}
        <h2>Twig</h2>

        <div class=\"empty\">
            <p>No Twig templates were rendered for this request.</p>
        </div>
    {% else %}
        <h2>Twig Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ '%0.0f'|format(collector.time) }} <span class=\"unit\">ms</span></span>
                <span class=\"label\">Render time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.templatecount }}</span>
                <span class=\"label\">Template calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.blockcount }}</span>
                <span class=\"label\">Block calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.macrocount }}</span>
                <span class=\"label\">Macro calls</span>
            </div>
        </div>

        <p class=\"help\">
            Render time includes sub-requests rendering time (if any).
        </p>

        <h2>Rendered Templates</h2>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Template Name</th>
                    <th scope=\"col\">Render Count</th>
                </tr>
            </thead>
            <tbody>
            {% for template, count in collector.templates %}
                <tr>
                    <td>{{ template }}</td>
                    <td class=\"font-normal\">{{ count }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <h2>Rendering Call Graph</h2>

        <div id=\"twig-dump\">
            {{ collector.htmlcallgraph }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/twig.html.twig", "/home/gonzalo/notnull/PDS_notnull/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/twig.html.twig");
    }
}
