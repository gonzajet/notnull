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
        $__internal_0da51bfd780235129342d6f34e7d5e9e2a8f58ee0bd1f61ad32ddc0b4ddffcae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0da51bfd780235129342d6f34e7d5e9e2a8f58ee0bd1f61ad32ddc0b4ddffcae->enter($__internal_0da51bfd780235129342d6f34e7d5e9e2a8f58ee0bd1f61ad32ddc0b4ddffcae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_539dcc45088de8c53c1b451f742755bf8f9d57696e2eca473354e7c2142349f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_539dcc45088de8c53c1b451f742755bf8f9d57696e2eca473354e7c2142349f3->enter($__internal_539dcc45088de8c53c1b451f742755bf8f9d57696e2eca473354e7c2142349f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0da51bfd780235129342d6f34e7d5e9e2a8f58ee0bd1f61ad32ddc0b4ddffcae->leave($__internal_0da51bfd780235129342d6f34e7d5e9e2a8f58ee0bd1f61ad32ddc0b4ddffcae_prof);

        
        $__internal_539dcc45088de8c53c1b451f742755bf8f9d57696e2eca473354e7c2142349f3->leave($__internal_539dcc45088de8c53c1b451f742755bf8f9d57696e2eca473354e7c2142349f3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_70a15e550af078d6e66124a0e686958a14c62acace5ab0907bf7b9919ab7f5cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70a15e550af078d6e66124a0e686958a14c62acace5ab0907bf7b9919ab7f5cd->enter($__internal_70a15e550af078d6e66124a0e686958a14c62acace5ab0907bf7b9919ab7f5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_268e8735d4a88400ca03ba3d7351e0ce96ef29c003d9ba5d4101070917d20b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268e8735d4a88400ca03ba3d7351e0ce96ef29c003d9ba5d4101070917d20b82->enter($__internal_268e8735d4a88400ca03ba3d7351e0ce96ef29c003d9ba5d4101070917d20b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_268e8735d4a88400ca03ba3d7351e0ce96ef29c003d9ba5d4101070917d20b82->leave($__internal_268e8735d4a88400ca03ba3d7351e0ce96ef29c003d9ba5d4101070917d20b82_prof);

        
        $__internal_70a15e550af078d6e66124a0e686958a14c62acace5ab0907bf7b9919ab7f5cd->leave($__internal_70a15e550af078d6e66124a0e686958a14c62acace5ab0907bf7b9919ab7f5cd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fff6dbb3e4886f3ffad57910e6f3202981a48a49111058de356268d402ae03bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fff6dbb3e4886f3ffad57910e6f3202981a48a49111058de356268d402ae03bc->enter($__internal_fff6dbb3e4886f3ffad57910e6f3202981a48a49111058de356268d402ae03bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7b6761bb09510725d2ff80e7087b0b834c0d76fb2cdd5e19a05c59b37c0bf4d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b6761bb09510725d2ff80e7087b0b834c0d76fb2cdd5e19a05c59b37c0bf4d3->enter($__internal_7b6761bb09510725d2ff80e7087b0b834c0d76fb2cdd5e19a05c59b37c0bf4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7b6761bb09510725d2ff80e7087b0b834c0d76fb2cdd5e19a05c59b37c0bf4d3->leave($__internal_7b6761bb09510725d2ff80e7087b0b834c0d76fb2cdd5e19a05c59b37c0bf4d3_prof);

        
        $__internal_fff6dbb3e4886f3ffad57910e6f3202981a48a49111058de356268d402ae03bc->leave($__internal_fff6dbb3e4886f3ffad57910e6f3202981a48a49111058de356268d402ae03bc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cb02254807e4b1460df72ae8f5543bde063bb62a878ec8e0c634e37bfeae2cc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb02254807e4b1460df72ae8f5543bde063bb62a878ec8e0c634e37bfeae2cc9->enter($__internal_cb02254807e4b1460df72ae8f5543bde063bb62a878ec8e0c634e37bfeae2cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_021ea93935534f090600f5b9472eb88649b61f12c9a56b5c7d8b7a97972029a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_021ea93935534f090600f5b9472eb88649b61f12c9a56b5c7d8b7a97972029a6->enter($__internal_021ea93935534f090600f5b9472eb88649b61f12c9a56b5c7d8b7a97972029a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_021ea93935534f090600f5b9472eb88649b61f12c9a56b5c7d8b7a97972029a6->leave($__internal_021ea93935534f090600f5b9472eb88649b61f12c9a56b5c7d8b7a97972029a6_prof);

        
        $__internal_cb02254807e4b1460df72ae8f5543bde063bb62a878ec8e0c634e37bfeae2cc9->leave($__internal_cb02254807e4b1460df72ae8f5543bde063bb62a878ec8e0c634e37bfeae2cc9_prof);

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
