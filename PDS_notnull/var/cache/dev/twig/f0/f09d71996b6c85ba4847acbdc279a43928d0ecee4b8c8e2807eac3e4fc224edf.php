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
        $__internal_68bfb6c008af7525919c78f63fd5808d4d1e569064a348c3a9c43541fd343a46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68bfb6c008af7525919c78f63fd5808d4d1e569064a348c3a9c43541fd343a46->enter($__internal_68bfb6c008af7525919c78f63fd5808d4d1e569064a348c3a9c43541fd343a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_0aa0ecdff12f73b9cd7909a21dfd3f9405e03beb367b226a308298e74f51b7d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aa0ecdff12f73b9cd7909a21dfd3f9405e03beb367b226a308298e74f51b7d0->enter($__internal_0aa0ecdff12f73b9cd7909a21dfd3f9405e03beb367b226a308298e74f51b7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68bfb6c008af7525919c78f63fd5808d4d1e569064a348c3a9c43541fd343a46->leave($__internal_68bfb6c008af7525919c78f63fd5808d4d1e569064a348c3a9c43541fd343a46_prof);

        
        $__internal_0aa0ecdff12f73b9cd7909a21dfd3f9405e03beb367b226a308298e74f51b7d0->leave($__internal_0aa0ecdff12f73b9cd7909a21dfd3f9405e03beb367b226a308298e74f51b7d0_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_80bba097a0ef9c781b14cf4899354fc3045713c111aadd3c4711150f25df9967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80bba097a0ef9c781b14cf4899354fc3045713c111aadd3c4711150f25df9967->enter($__internal_80bba097a0ef9c781b14cf4899354fc3045713c111aadd3c4711150f25df9967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_def21f872094f4ba8ce70ec6f00f5866fbf08ecf8e4258d83ca799c9b73e2d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_def21f872094f4ba8ce70ec6f00f5866fbf08ecf8e4258d83ca799c9b73e2d6d->enter($__internal_def21f872094f4ba8ce70ec6f00f5866fbf08ecf8e4258d83ca799c9b73e2d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_def21f872094f4ba8ce70ec6f00f5866fbf08ecf8e4258d83ca799c9b73e2d6d->leave($__internal_def21f872094f4ba8ce70ec6f00f5866fbf08ecf8e4258d83ca799c9b73e2d6d_prof);

        
        $__internal_80bba097a0ef9c781b14cf4899354fc3045713c111aadd3c4711150f25df9967->leave($__internal_80bba097a0ef9c781b14cf4899354fc3045713c111aadd3c4711150f25df9967_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f3ab2ec5fc65de933794528d4db424671d00adf8427cd8a476211a140d76420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f3ab2ec5fc65de933794528d4db424671d00adf8427cd8a476211a140d76420->enter($__internal_0f3ab2ec5fc65de933794528d4db424671d00adf8427cd8a476211a140d76420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3c4b955ed32f85c3a01b7e786633c2b1dc52bac38c8156c624f1ee3380247373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c4b955ed32f85c3a01b7e786633c2b1dc52bac38c8156c624f1ee3380247373->enter($__internal_3c4b955ed32f85c3a01b7e786633c2b1dc52bac38c8156c624f1ee3380247373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_3c4b955ed32f85c3a01b7e786633c2b1dc52bac38c8156c624f1ee3380247373->leave($__internal_3c4b955ed32f85c3a01b7e786633c2b1dc52bac38c8156c624f1ee3380247373_prof);

        
        $__internal_0f3ab2ec5fc65de933794528d4db424671d00adf8427cd8a476211a140d76420->leave($__internal_0f3ab2ec5fc65de933794528d4db424671d00adf8427cd8a476211a140d76420_prof);

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
