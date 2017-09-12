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
        $__internal_9e175260b6561124ae4ac7ec3b55471d000533305976105529641de9863999d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e175260b6561124ae4ac7ec3b55471d000533305976105529641de9863999d8->enter($__internal_9e175260b6561124ae4ac7ec3b55471d000533305976105529641de9863999d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_d549533ba4fd4e172d05ce0fc7d49730c8585a8fee2d7bf8f5b9fd727942821f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d549533ba4fd4e172d05ce0fc7d49730c8585a8fee2d7bf8f5b9fd727942821f->enter($__internal_d549533ba4fd4e172d05ce0fc7d49730c8585a8fee2d7bf8f5b9fd727942821f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e175260b6561124ae4ac7ec3b55471d000533305976105529641de9863999d8->leave($__internal_9e175260b6561124ae4ac7ec3b55471d000533305976105529641de9863999d8_prof);

        
        $__internal_d549533ba4fd4e172d05ce0fc7d49730c8585a8fee2d7bf8f5b9fd727942821f->leave($__internal_d549533ba4fd4e172d05ce0fc7d49730c8585a8fee2d7bf8f5b9fd727942821f_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_49a58a3e29ec3b79a73cffa087587e1c2fb371e0d2250b76d384be5e84268e14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49a58a3e29ec3b79a73cffa087587e1c2fb371e0d2250b76d384be5e84268e14->enter($__internal_49a58a3e29ec3b79a73cffa087587e1c2fb371e0d2250b76d384be5e84268e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_67c906ee8002b63a9acc8d7549fddf4d8161e0aaea5b9718ce75f834ab561cd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c906ee8002b63a9acc8d7549fddf4d8161e0aaea5b9718ce75f834ab561cd7->enter($__internal_67c906ee8002b63a9acc8d7549fddf4d8161e0aaea5b9718ce75f834ab561cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_67c906ee8002b63a9acc8d7549fddf4d8161e0aaea5b9718ce75f834ab561cd7->leave($__internal_67c906ee8002b63a9acc8d7549fddf4d8161e0aaea5b9718ce75f834ab561cd7_prof);

        
        $__internal_49a58a3e29ec3b79a73cffa087587e1c2fb371e0d2250b76d384be5e84268e14->leave($__internal_49a58a3e29ec3b79a73cffa087587e1c2fb371e0d2250b76d384be5e84268e14_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_672cf4798e047537a01a7279c6ac5b69df1f095c08dcfc6a2e88abe8175eb4fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_672cf4798e047537a01a7279c6ac5b69df1f095c08dcfc6a2e88abe8175eb4fb->enter($__internal_672cf4798e047537a01a7279c6ac5b69df1f095c08dcfc6a2e88abe8175eb4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_50ad559a0fac8f4ced3924dfd44e1f91257e03d73c2926f0611daafc160e5126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ad559a0fac8f4ced3924dfd44e1f91257e03d73c2926f0611daafc160e5126->enter($__internal_50ad559a0fac8f4ced3924dfd44e1f91257e03d73c2926f0611daafc160e5126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_50ad559a0fac8f4ced3924dfd44e1f91257e03d73c2926f0611daafc160e5126->leave($__internal_50ad559a0fac8f4ced3924dfd44e1f91257e03d73c2926f0611daafc160e5126_prof);

        
        $__internal_672cf4798e047537a01a7279c6ac5b69df1f095c08dcfc6a2e88abe8175eb4fb->leave($__internal_672cf4798e047537a01a7279c6ac5b69df1f095c08dcfc6a2e88abe8175eb4fb_prof);

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
