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
        $__internal_6046adc71ecb5734c9e30ef769d712738b11a0c4a656ab8f2630311a5589ce72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6046adc71ecb5734c9e30ef769d712738b11a0c4a656ab8f2630311a5589ce72->enter($__internal_6046adc71ecb5734c9e30ef769d712738b11a0c4a656ab8f2630311a5589ce72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_86033fba48a29d8c268318c2a14e7dc16ea14d41c45380bd50eae59a9a1f7315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86033fba48a29d8c268318c2a14e7dc16ea14d41c45380bd50eae59a9a1f7315->enter($__internal_86033fba48a29d8c268318c2a14e7dc16ea14d41c45380bd50eae59a9a1f7315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6046adc71ecb5734c9e30ef769d712738b11a0c4a656ab8f2630311a5589ce72->leave($__internal_6046adc71ecb5734c9e30ef769d712738b11a0c4a656ab8f2630311a5589ce72_prof);

        
        $__internal_86033fba48a29d8c268318c2a14e7dc16ea14d41c45380bd50eae59a9a1f7315->leave($__internal_86033fba48a29d8c268318c2a14e7dc16ea14d41c45380bd50eae59a9a1f7315_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_47464cc3f3a1c845ec54d705310cf6d49e87d86c5d7c7ac0cbd6bdf99dbf44b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47464cc3f3a1c845ec54d705310cf6d49e87d86c5d7c7ac0cbd6bdf99dbf44b0->enter($__internal_47464cc3f3a1c845ec54d705310cf6d49e87d86c5d7c7ac0cbd6bdf99dbf44b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_a84be4251779ab8f527fcf5b7bf58885213d3525ab12d73f61194f570a6adf3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a84be4251779ab8f527fcf5b7bf58885213d3525ab12d73f61194f570a6adf3d->enter($__internal_a84be4251779ab8f527fcf5b7bf58885213d3525ab12d73f61194f570a6adf3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_a84be4251779ab8f527fcf5b7bf58885213d3525ab12d73f61194f570a6adf3d->leave($__internal_a84be4251779ab8f527fcf5b7bf58885213d3525ab12d73f61194f570a6adf3d_prof);

        
        $__internal_47464cc3f3a1c845ec54d705310cf6d49e87d86c5d7c7ac0cbd6bdf99dbf44b0->leave($__internal_47464cc3f3a1c845ec54d705310cf6d49e87d86c5d7c7ac0cbd6bdf99dbf44b0_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_510baced15b562eb9745557b0d48f70f2a1dfb440c953e741a99997239c2e890 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_510baced15b562eb9745557b0d48f70f2a1dfb440c953e741a99997239c2e890->enter($__internal_510baced15b562eb9745557b0d48f70f2a1dfb440c953e741a99997239c2e890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_87e2d69b9c74aae999853d5be5f01df8ef3dd3a1e552bdbca219965980ade3ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87e2d69b9c74aae999853d5be5f01df8ef3dd3a1e552bdbca219965980ade3ac->enter($__internal_87e2d69b9c74aae999853d5be5f01df8ef3dd3a1e552bdbca219965980ade3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_87e2d69b9c74aae999853d5be5f01df8ef3dd3a1e552bdbca219965980ade3ac->leave($__internal_87e2d69b9c74aae999853d5be5f01df8ef3dd3a1e552bdbca219965980ade3ac_prof);

        
        $__internal_510baced15b562eb9745557b0d48f70f2a1dfb440c953e741a99997239c2e890->leave($__internal_510baced15b562eb9745557b0d48f70f2a1dfb440c953e741a99997239c2e890_prof);

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
