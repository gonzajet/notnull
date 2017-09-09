<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_a19bda121ee4596e3f49be1d55380b502617e75c6213f5a735ef4dbf693a42c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70113ced71a94722cda83914a720da9f0ad2756ec05471f2b6d46f30010cca5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70113ced71a94722cda83914a720da9f0ad2756ec05471f2b6d46f30010cca5a->enter($__internal_70113ced71a94722cda83914a720da9f0ad2756ec05471f2b6d46f30010cca5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_debf5579c0bfcd7eea9febe02cdd101721cac05ccafd406bc7c6c68c2285e6a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_debf5579c0bfcd7eea9febe02cdd101721cac05ccafd406bc7c6c68c2285e6a7->enter($__internal_debf5579c0bfcd7eea9febe02cdd101721cac05ccafd406bc7c6c68c2285e6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70113ced71a94722cda83914a720da9f0ad2756ec05471f2b6d46f30010cca5a->leave($__internal_70113ced71a94722cda83914a720da9f0ad2756ec05471f2b6d46f30010cca5a_prof);

        
        $__internal_debf5579c0bfcd7eea9febe02cdd101721cac05ccafd406bc7c6c68c2285e6a7->leave($__internal_debf5579c0bfcd7eea9febe02cdd101721cac05ccafd406bc7c6c68c2285e6a7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee9daafe68ab7f90ddcb2b60958d332621b8615246eea3d3991e9ef47fb7df50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee9daafe68ab7f90ddcb2b60958d332621b8615246eea3d3991e9ef47fb7df50->enter($__internal_ee9daafe68ab7f90ddcb2b60958d332621b8615246eea3d3991e9ef47fb7df50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_90d3a8acce6c861e3ef3696bf66ef17b8e8cb5b82132e4e6c9aefea5a81eb490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d3a8acce6c861e3ef3696bf66ef17b8e8cb5b82132e4e6c9aefea5a81eb490->enter($__internal_90d3a8acce6c861e3ef3696bf66ef17b8e8cb5b82132e4e6c9aefea5a81eb490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_90d3a8acce6c861e3ef3696bf66ef17b8e8cb5b82132e4e6c9aefea5a81eb490->leave($__internal_90d3a8acce6c861e3ef3696bf66ef17b8e8cb5b82132e4e6c9aefea5a81eb490_prof);

        
        $__internal_ee9daafe68ab7f90ddcb2b60958d332621b8615246eea3d3991e9ef47fb7df50->leave($__internal_ee9daafe68ab7f90ddcb2b60958d332621b8615246eea3d3991e9ef47fb7df50_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_05b527a5b5a8bcedc5eedc4920c7408fe25056fe54e24aa828470a43db76f1f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05b527a5b5a8bcedc5eedc4920c7408fe25056fe54e24aa828470a43db76f1f2->enter($__internal_05b527a5b5a8bcedc5eedc4920c7408fe25056fe54e24aa828470a43db76f1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_234a21a233b52b5260d2263e1ec2d187af8d66fd929c5183e58dbce7e598693d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_234a21a233b52b5260d2263e1ec2d187af8d66fd929c5183e58dbce7e598693d->enter($__internal_234a21a233b52b5260d2263e1ec2d187af8d66fd929c5183e58dbce7e598693d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_234a21a233b52b5260d2263e1ec2d187af8d66fd929c5183e58dbce7e598693d->leave($__internal_234a21a233b52b5260d2263e1ec2d187af8d66fd929c5183e58dbce7e598693d_prof);

        
        $__internal_05b527a5b5a8bcedc5eedc4920c7408fe25056fe54e24aa828470a43db76f1f2->leave($__internal_05b527a5b5a8bcedc5eedc4920c7408fe25056fe54e24aa828470a43db76f1f2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
