<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_26b44d7e6b28c60a6a482eb8f80b0c6073ce48d515fbed5c1af7026d8fe693e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_b67d43a6cadd1c2f0122b193b516dd8577f401b0843a215fc414bbfaa9886d63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b67d43a6cadd1c2f0122b193b516dd8577f401b0843a215fc414bbfaa9886d63->enter($__internal_b67d43a6cadd1c2f0122b193b516dd8577f401b0843a215fc414bbfaa9886d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_8498d784f522551c40a501677a7c56bc48e2673b0763bb3f6dc9ca8b4d729093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8498d784f522551c40a501677a7c56bc48e2673b0763bb3f6dc9ca8b4d729093->enter($__internal_8498d784f522551c40a501677a7c56bc48e2673b0763bb3f6dc9ca8b4d729093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b67d43a6cadd1c2f0122b193b516dd8577f401b0843a215fc414bbfaa9886d63->leave($__internal_b67d43a6cadd1c2f0122b193b516dd8577f401b0843a215fc414bbfaa9886d63_prof);

        
        $__internal_8498d784f522551c40a501677a7c56bc48e2673b0763bb3f6dc9ca8b4d729093->leave($__internal_8498d784f522551c40a501677a7c56bc48e2673b0763bb3f6dc9ca8b4d729093_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_483e38a1787bd83305d977f97dc4cc2596f4689b580c5cef8f91420512c52d76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_483e38a1787bd83305d977f97dc4cc2596f4689b580c5cef8f91420512c52d76->enter($__internal_483e38a1787bd83305d977f97dc4cc2596f4689b580c5cef8f91420512c52d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_ea6be3e73ff807576c50c8dd275b4501bd5c6e0f6ecb0e737b795ad7c957933c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea6be3e73ff807576c50c8dd275b4501bd5c6e0f6ecb0e737b795ad7c957933c->enter($__internal_ea6be3e73ff807576c50c8dd275b4501bd5c6e0f6ecb0e737b795ad7c957933c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_ea6be3e73ff807576c50c8dd275b4501bd5c6e0f6ecb0e737b795ad7c957933c->leave($__internal_ea6be3e73ff807576c50c8dd275b4501bd5c6e0f6ecb0e737b795ad7c957933c_prof);

        
        $__internal_483e38a1787bd83305d977f97dc4cc2596f4689b580c5cef8f91420512c52d76->leave($__internal_483e38a1787bd83305d977f97dc4cc2596f4689b580c5cef8f91420512c52d76_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_06b23318a13d5cc7fed923b587102a6adf0daa8c6bbf6d80180ae9c529f17bcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06b23318a13d5cc7fed923b587102a6adf0daa8c6bbf6d80180ae9c529f17bcc->enter($__internal_06b23318a13d5cc7fed923b587102a6adf0daa8c6bbf6d80180ae9c529f17bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_56c10854d6e05b22da5e0d9b201381708321ce8fbdad5eb806d1c76324ba6b68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56c10854d6e05b22da5e0d9b201381708321ce8fbdad5eb806d1c76324ba6b68->enter($__internal_56c10854d6e05b22da5e0d9b201381708321ce8fbdad5eb806d1c76324ba6b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_56c10854d6e05b22da5e0d9b201381708321ce8fbdad5eb806d1c76324ba6b68->leave($__internal_56c10854d6e05b22da5e0d9b201381708321ce8fbdad5eb806d1c76324ba6b68_prof);

        
        $__internal_06b23318a13d5cc7fed923b587102a6adf0daa8c6bbf6d80180ae9c529f17bcc->leave($__internal_06b23318a13d5cc7fed923b587102a6adf0daa8c6bbf6d80180ae9c529f17bcc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
