<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_cf902a21c4c1433c9ea27b88cfa3e9140d354bcacd2d33cd74b9d7846d455b53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4aee853220526418b1d1364eff6a51ed393c735e39777cb7ebd016b2fa747b6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aee853220526418b1d1364eff6a51ed393c735e39777cb7ebd016b2fa747b6a->enter($__internal_4aee853220526418b1d1364eff6a51ed393c735e39777cb7ebd016b2fa747b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_10ef78638081201057004700aeaa6a23ae9b7429b900e7b79108f7427bdc9642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ef78638081201057004700aeaa6a23ae9b7429b900e7b79108f7427bdc9642->enter($__internal_10ef78638081201057004700aeaa6a23ae9b7429b900e7b79108f7427bdc9642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4aee853220526418b1d1364eff6a51ed393c735e39777cb7ebd016b2fa747b6a->leave($__internal_4aee853220526418b1d1364eff6a51ed393c735e39777cb7ebd016b2fa747b6a_prof);

        
        $__internal_10ef78638081201057004700aeaa6a23ae9b7429b900e7b79108f7427bdc9642->leave($__internal_10ef78638081201057004700aeaa6a23ae9b7429b900e7b79108f7427bdc9642_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_22982ee67c3feaff860f556b2a05453ae29498f1cfbb6ce26cfba8addb8bb5c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22982ee67c3feaff860f556b2a05453ae29498f1cfbb6ce26cfba8addb8bb5c7->enter($__internal_22982ee67c3feaff860f556b2a05453ae29498f1cfbb6ce26cfba8addb8bb5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_7e6fdf75ef6ab0e120426a6e6c4e638d69903bccca8242fb62cb41f36e6f04f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e6fdf75ef6ab0e120426a6e6c4e638d69903bccca8242fb62cb41f36e6f04f8->enter($__internal_7e6fdf75ef6ab0e120426a6e6c4e638d69903bccca8242fb62cb41f36e6f04f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_7e6fdf75ef6ab0e120426a6e6c4e638d69903bccca8242fb62cb41f36e6f04f8->leave($__internal_7e6fdf75ef6ab0e120426a6e6c4e638d69903bccca8242fb62cb41f36e6f04f8_prof);

        
        $__internal_22982ee67c3feaff860f556b2a05453ae29498f1cfbb6ce26cfba8addb8bb5c7->leave($__internal_22982ee67c3feaff860f556b2a05453ae29498f1cfbb6ce26cfba8addb8bb5c7_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_259d8f3cc0a34a854883b41316257c63068ade2e3d94ca109e9761034ca188b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_259d8f3cc0a34a854883b41316257c63068ade2e3d94ca109e9761034ca188b2->enter($__internal_259d8f3cc0a34a854883b41316257c63068ade2e3d94ca109e9761034ca188b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c8563eed22b0f4ceff63a51b092452d304f31ff72912b3ddc021b58379f03929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8563eed22b0f4ceff63a51b092452d304f31ff72912b3ddc021b58379f03929->enter($__internal_c8563eed22b0f4ceff63a51b092452d304f31ff72912b3ddc021b58379f03929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_c8563eed22b0f4ceff63a51b092452d304f31ff72912b3ddc021b58379f03929->leave($__internal_c8563eed22b0f4ceff63a51b092452d304f31ff72912b3ddc021b58379f03929_prof);

        
        $__internal_259d8f3cc0a34a854883b41316257c63068ade2e3d94ca109e9761034ca188b2->leave($__internal_259d8f3cc0a34a854883b41316257c63068ade2e3d94ca109e9761034ca188b2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
