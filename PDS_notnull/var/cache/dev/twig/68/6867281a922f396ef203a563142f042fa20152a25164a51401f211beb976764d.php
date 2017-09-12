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
        $__internal_52882812ae8c5166776a7c590bd5407b813f8759e7c43ec0296b38a20cfecba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52882812ae8c5166776a7c590bd5407b813f8759e7c43ec0296b38a20cfecba8->enter($__internal_52882812ae8c5166776a7c590bd5407b813f8759e7c43ec0296b38a20cfecba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_be37d560ecc7cd40e4066ded6f913e752d515b23c2452573b5785d4d5f62cbc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be37d560ecc7cd40e4066ded6f913e752d515b23c2452573b5785d4d5f62cbc8->enter($__internal_be37d560ecc7cd40e4066ded6f913e752d515b23c2452573b5785d4d5f62cbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52882812ae8c5166776a7c590bd5407b813f8759e7c43ec0296b38a20cfecba8->leave($__internal_52882812ae8c5166776a7c590bd5407b813f8759e7c43ec0296b38a20cfecba8_prof);

        
        $__internal_be37d560ecc7cd40e4066ded6f913e752d515b23c2452573b5785d4d5f62cbc8->leave($__internal_be37d560ecc7cd40e4066ded6f913e752d515b23c2452573b5785d4d5f62cbc8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f704c8e0aa6327cb8cc92302ab98225e44969b4658eeeac4289fc620cc10e19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f704c8e0aa6327cb8cc92302ab98225e44969b4658eeeac4289fc620cc10e19->enter($__internal_5f704c8e0aa6327cb8cc92302ab98225e44969b4658eeeac4289fc620cc10e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a65c9613b2bc662642a80032c15e637a10be42ccdfde96b82faf82e58f503f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a65c9613b2bc662642a80032c15e637a10be42ccdfde96b82faf82e58f503f70->enter($__internal_a65c9613b2bc662642a80032c15e637a10be42ccdfde96b82faf82e58f503f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a65c9613b2bc662642a80032c15e637a10be42ccdfde96b82faf82e58f503f70->leave($__internal_a65c9613b2bc662642a80032c15e637a10be42ccdfde96b82faf82e58f503f70_prof);

        
        $__internal_5f704c8e0aa6327cb8cc92302ab98225e44969b4658eeeac4289fc620cc10e19->leave($__internal_5f704c8e0aa6327cb8cc92302ab98225e44969b4658eeeac4289fc620cc10e19_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_adba36332cfe85f1dcdae2b49639a1d14d405cbeee71abdf211b3645b44cbb61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adba36332cfe85f1dcdae2b49639a1d14d405cbeee71abdf211b3645b44cbb61->enter($__internal_adba36332cfe85f1dcdae2b49639a1d14d405cbeee71abdf211b3645b44cbb61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c669cc1d2c6291973f3cb2d889529eda6fda36aa68e0919e45027f821d650f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c669cc1d2c6291973f3cb2d889529eda6fda36aa68e0919e45027f821d650f2e->enter($__internal_c669cc1d2c6291973f3cb2d889529eda6fda36aa68e0919e45027f821d650f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c669cc1d2c6291973f3cb2d889529eda6fda36aa68e0919e45027f821d650f2e->leave($__internal_c669cc1d2c6291973f3cb2d889529eda6fda36aa68e0919e45027f821d650f2e_prof);

        
        $__internal_adba36332cfe85f1dcdae2b49639a1d14d405cbeee71abdf211b3645b44cbb61->leave($__internal_adba36332cfe85f1dcdae2b49639a1d14d405cbeee71abdf211b3645b44cbb61_prof);

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
