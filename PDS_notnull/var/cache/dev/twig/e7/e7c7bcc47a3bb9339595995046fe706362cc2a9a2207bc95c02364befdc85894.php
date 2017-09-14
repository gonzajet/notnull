<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_f19207bdaa345ac6ca9e4eed27ef2e43bf0cde21d4a71567dbeed8fa538747ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_21c81071db7017d56d70d5ad1a12b7511d5a3fc0615ff9fb99c0ca3245b6edb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21c81071db7017d56d70d5ad1a12b7511d5a3fc0615ff9fb99c0ca3245b6edb2->enter($__internal_21c81071db7017d56d70d5ad1a12b7511d5a3fc0615ff9fb99c0ca3245b6edb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d174659cd892019d31d805f7abfe445abc49265de6ab873a5f0bcd3f2a98791e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d174659cd892019d31d805f7abfe445abc49265de6ab873a5f0bcd3f2a98791e->enter($__internal_d174659cd892019d31d805f7abfe445abc49265de6ab873a5f0bcd3f2a98791e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21c81071db7017d56d70d5ad1a12b7511d5a3fc0615ff9fb99c0ca3245b6edb2->leave($__internal_21c81071db7017d56d70d5ad1a12b7511d5a3fc0615ff9fb99c0ca3245b6edb2_prof);

        
        $__internal_d174659cd892019d31d805f7abfe445abc49265de6ab873a5f0bcd3f2a98791e->leave($__internal_d174659cd892019d31d805f7abfe445abc49265de6ab873a5f0bcd3f2a98791e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eb74254f17347db72ec69a96d7d00e357fb9bda09542bf3748c5f90eb763b7de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb74254f17347db72ec69a96d7d00e357fb9bda09542bf3748c5f90eb763b7de->enter($__internal_eb74254f17347db72ec69a96d7d00e357fb9bda09542bf3748c5f90eb763b7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6d41bdb881b4f255b34dfa350c44ce35d7f6762303540d1658ebfdeca5222f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d41bdb881b4f255b34dfa350c44ce35d7f6762303540d1658ebfdeca5222f67->enter($__internal_6d41bdb881b4f255b34dfa350c44ce35d7f6762303540d1658ebfdeca5222f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_6d41bdb881b4f255b34dfa350c44ce35d7f6762303540d1658ebfdeca5222f67->leave($__internal_6d41bdb881b4f255b34dfa350c44ce35d7f6762303540d1658ebfdeca5222f67_prof);

        
        $__internal_eb74254f17347db72ec69a96d7d00e357fb9bda09542bf3748c5f90eb763b7de->leave($__internal_eb74254f17347db72ec69a96d7d00e357fb9bda09542bf3748c5f90eb763b7de_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "E:\\Users\\Carlitos\\Documents\\EstacionAR\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
