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
        $__internal_62c29ffa6569532c626e82889aaf1dfbd3f2e6653eab639f874f18bab5a96b87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62c29ffa6569532c626e82889aaf1dfbd3f2e6653eab639f874f18bab5a96b87->enter($__internal_62c29ffa6569532c626e82889aaf1dfbd3f2e6653eab639f874f18bab5a96b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_18007f0f0496ae32ba9ed122d553249c36b94c129559051538f2452611c22e50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18007f0f0496ae32ba9ed122d553249c36b94c129559051538f2452611c22e50->enter($__internal_18007f0f0496ae32ba9ed122d553249c36b94c129559051538f2452611c22e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62c29ffa6569532c626e82889aaf1dfbd3f2e6653eab639f874f18bab5a96b87->leave($__internal_62c29ffa6569532c626e82889aaf1dfbd3f2e6653eab639f874f18bab5a96b87_prof);

        
        $__internal_18007f0f0496ae32ba9ed122d553249c36b94c129559051538f2452611c22e50->leave($__internal_18007f0f0496ae32ba9ed122d553249c36b94c129559051538f2452611c22e50_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_07a7e777998374fb36213f0b4ba07f08dc657da5e9d3a95b05b42ac23f43f9e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07a7e777998374fb36213f0b4ba07f08dc657da5e9d3a95b05b42ac23f43f9e4->enter($__internal_07a7e777998374fb36213f0b4ba07f08dc657da5e9d3a95b05b42ac23f43f9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_19625941b58b6672ca4973c958a0f3e4ebf91d6c0745dc265fcfe6f2fffcf30a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19625941b58b6672ca4973c958a0f3e4ebf91d6c0745dc265fcfe6f2fffcf30a->enter($__internal_19625941b58b6672ca4973c958a0f3e4ebf91d6c0745dc265fcfe6f2fffcf30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_19625941b58b6672ca4973c958a0f3e4ebf91d6c0745dc265fcfe6f2fffcf30a->leave($__internal_19625941b58b6672ca4973c958a0f3e4ebf91d6c0745dc265fcfe6f2fffcf30a_prof);

        
        $__internal_07a7e777998374fb36213f0b4ba07f08dc657da5e9d3a95b05b42ac23f43f9e4->leave($__internal_07a7e777998374fb36213f0b4ba07f08dc657da5e9d3a95b05b42ac23f43f9e4_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_07a2492dc00d3a1565853301c5a1e023e181e8859335e76007f8d6b5b68b9f59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07a2492dc00d3a1565853301c5a1e023e181e8859335e76007f8d6b5b68b9f59->enter($__internal_07a2492dc00d3a1565853301c5a1e023e181e8859335e76007f8d6b5b68b9f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_891fc7d4a32cd65c03a23306e1c85f4719514d1b5051f79567c0d8163289891c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_891fc7d4a32cd65c03a23306e1c85f4719514d1b5051f79567c0d8163289891c->enter($__internal_891fc7d4a32cd65c03a23306e1c85f4719514d1b5051f79567c0d8163289891c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_891fc7d4a32cd65c03a23306e1c85f4719514d1b5051f79567c0d8163289891c->leave($__internal_891fc7d4a32cd65c03a23306e1c85f4719514d1b5051f79567c0d8163289891c_prof);

        
        $__internal_07a2492dc00d3a1565853301c5a1e023e181e8859335e76007f8d6b5b68b9f59->leave($__internal_07a2492dc00d3a1565853301c5a1e023e181e8859335e76007f8d6b5b68b9f59_prof);

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
