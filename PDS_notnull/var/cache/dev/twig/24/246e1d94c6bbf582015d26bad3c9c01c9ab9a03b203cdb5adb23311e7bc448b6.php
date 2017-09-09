<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_f2061152e22b3b2391859ea642e0d745ff39c7846225ac74f8dcde9a43603dbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c6ee104f4484fe0aae4a7dec5361713f3cfa886ec1816a578d5a4ed47a10d273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6ee104f4484fe0aae4a7dec5361713f3cfa886ec1816a578d5a4ed47a10d273->enter($__internal_c6ee104f4484fe0aae4a7dec5361713f3cfa886ec1816a578d5a4ed47a10d273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_2c7b88a51b76f680ca22df5b80409fb4817d73dc1bc3af4cf509e5d450e9b9b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c7b88a51b76f680ca22df5b80409fb4817d73dc1bc3af4cf509e5d450e9b9b3->enter($__internal_2c7b88a51b76f680ca22df5b80409fb4817d73dc1bc3af4cf509e5d450e9b9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6ee104f4484fe0aae4a7dec5361713f3cfa886ec1816a578d5a4ed47a10d273->leave($__internal_c6ee104f4484fe0aae4a7dec5361713f3cfa886ec1816a578d5a4ed47a10d273_prof);

        
        $__internal_2c7b88a51b76f680ca22df5b80409fb4817d73dc1bc3af4cf509e5d450e9b9b3->leave($__internal_2c7b88a51b76f680ca22df5b80409fb4817d73dc1bc3af4cf509e5d450e9b9b3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_acaabf430d48f97d7b92b460384f25ccc998ff69f340b814cda5bcee011e2da5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acaabf430d48f97d7b92b460384f25ccc998ff69f340b814cda5bcee011e2da5->enter($__internal_acaabf430d48f97d7b92b460384f25ccc998ff69f340b814cda5bcee011e2da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_863839dc11a13db0f2ee4756d02a467b3e6b989e4da67f0693fe31104bf044f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_863839dc11a13db0f2ee4756d02a467b3e6b989e4da67f0693fe31104bf044f7->enter($__internal_863839dc11a13db0f2ee4756d02a467b3e6b989e4da67f0693fe31104bf044f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_863839dc11a13db0f2ee4756d02a467b3e6b989e4da67f0693fe31104bf044f7->leave($__internal_863839dc11a13db0f2ee4756d02a467b3e6b989e4da67f0693fe31104bf044f7_prof);

        
        $__internal_acaabf430d48f97d7b92b460384f25ccc998ff69f340b814cda5bcee011e2da5->leave($__internal_acaabf430d48f97d7b92b460384f25ccc998ff69f340b814cda5bcee011e2da5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bfb83b8369cb97f0761a85bff47b67c1db12e6f70997999984872df62dce2b91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfb83b8369cb97f0761a85bff47b67c1db12e6f70997999984872df62dce2b91->enter($__internal_bfb83b8369cb97f0761a85bff47b67c1db12e6f70997999984872df62dce2b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_950c6aff27308f17f5ca703cf9de32e9ca9aeebdcd89ae8b7826b4ccba61389a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_950c6aff27308f17f5ca703cf9de32e9ca9aeebdcd89ae8b7826b4ccba61389a->enter($__internal_950c6aff27308f17f5ca703cf9de32e9ca9aeebdcd89ae8b7826b4ccba61389a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_950c6aff27308f17f5ca703cf9de32e9ca9aeebdcd89ae8b7826b4ccba61389a->leave($__internal_950c6aff27308f17f5ca703cf9de32e9ca9aeebdcd89ae8b7826b4ccba61389a_prof);

        
        $__internal_bfb83b8369cb97f0761a85bff47b67c1db12e6f70997999984872df62dce2b91->leave($__internal_bfb83b8369cb97f0761a85bff47b67c1db12e6f70997999984872df62dce2b91_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0017bd4b4155bc59beeae517df21b6871ffd38ea54e0555e9244c00d465e7c36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0017bd4b4155bc59beeae517df21b6871ffd38ea54e0555e9244c00d465e7c36->enter($__internal_0017bd4b4155bc59beeae517df21b6871ffd38ea54e0555e9244c00d465e7c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e4d64cf704e982d7632b2b0be54ea5bd1436e8678b4d010aa89d9f41614deb1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d64cf704e982d7632b2b0be54ea5bd1436e8678b4d010aa89d9f41614deb1e->enter($__internal_e4d64cf704e982d7632b2b0be54ea5bd1436e8678b4d010aa89d9f41614deb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e4d64cf704e982d7632b2b0be54ea5bd1436e8678b4d010aa89d9f41614deb1e->leave($__internal_e4d64cf704e982d7632b2b0be54ea5bd1436e8678b4d010aa89d9f41614deb1e_prof);

        
        $__internal_0017bd4b4155bc59beeae517df21b6871ffd38ea54e0555e9244c00d465e7c36->leave($__internal_0017bd4b4155bc59beeae517df21b6871ffd38ea54e0555e9244c00d465e7c36_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
