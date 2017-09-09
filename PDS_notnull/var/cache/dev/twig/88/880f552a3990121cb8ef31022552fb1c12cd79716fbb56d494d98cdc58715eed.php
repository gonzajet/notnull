<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_6428b4abae5d306971ded0d0883ca72b5878154f4977e15eabb1b37bde4c5bc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0f9d6215fc5c9d27e15690d26a5f73500516a02092d08ba298d2379c540ba14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0f9d6215fc5c9d27e15690d26a5f73500516a02092d08ba298d2379c540ba14->enter($__internal_c0f9d6215fc5c9d27e15690d26a5f73500516a02092d08ba298d2379c540ba14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_547f86ffe8c918eef18e6cef1cd961cfe7632816edea1863195eb325bf24c35e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_547f86ffe8c918eef18e6cef1cd961cfe7632816edea1863195eb325bf24c35e->enter($__internal_547f86ffe8c918eef18e6cef1cd961cfe7632816edea1863195eb325bf24c35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0f9d6215fc5c9d27e15690d26a5f73500516a02092d08ba298d2379c540ba14->leave($__internal_c0f9d6215fc5c9d27e15690d26a5f73500516a02092d08ba298d2379c540ba14_prof);

        
        $__internal_547f86ffe8c918eef18e6cef1cd961cfe7632816edea1863195eb325bf24c35e->leave($__internal_547f86ffe8c918eef18e6cef1cd961cfe7632816edea1863195eb325bf24c35e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bc12ce1865954497edf531550e61aeea5aa8259d12cd9cf3cbadbf03310e115e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc12ce1865954497edf531550e61aeea5aa8259d12cd9cf3cbadbf03310e115e->enter($__internal_bc12ce1865954497edf531550e61aeea5aa8259d12cd9cf3cbadbf03310e115e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0caf0a1810ef8be44bf4d8802f9fda6e21957f429f363a47fd9a48f7c55e5bf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0caf0a1810ef8be44bf4d8802f9fda6e21957f429f363a47fd9a48f7c55e5bf6->enter($__internal_0caf0a1810ef8be44bf4d8802f9fda6e21957f429f363a47fd9a48f7c55e5bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_0caf0a1810ef8be44bf4d8802f9fda6e21957f429f363a47fd9a48f7c55e5bf6->leave($__internal_0caf0a1810ef8be44bf4d8802f9fda6e21957f429f363a47fd9a48f7c55e5bf6_prof);

        
        $__internal_bc12ce1865954497edf531550e61aeea5aa8259d12cd9cf3cbadbf03310e115e->leave($__internal_bc12ce1865954497edf531550e61aeea5aa8259d12cd9cf3cbadbf03310e115e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
