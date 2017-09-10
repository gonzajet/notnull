<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_ac12c574132227140b686f2370e565f8f8810500cd69524bf391681d60e32a52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_193f64d0ae0bf9375e329c7661e70fa7f7e3957b3263b8786f61b3d5ca727c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_193f64d0ae0bf9375e329c7661e70fa7f7e3957b3263b8786f61b3d5ca727c77->enter($__internal_193f64d0ae0bf9375e329c7661e70fa7f7e3957b3263b8786f61b3d5ca727c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_0ce34e3cab29ddce5bec57f32df8f4e1e26e4ca3ac3c49ba2ffd97a4d5067f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce34e3cab29ddce5bec57f32df8f4e1e26e4ca3ac3c49ba2ffd97a4d5067f44->enter($__internal_0ce34e3cab29ddce5bec57f32df8f4e1e26e4ca3ac3c49ba2ffd97a4d5067f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_193f64d0ae0bf9375e329c7661e70fa7f7e3957b3263b8786f61b3d5ca727c77->leave($__internal_193f64d0ae0bf9375e329c7661e70fa7f7e3957b3263b8786f61b3d5ca727c77_prof);

        
        $__internal_0ce34e3cab29ddce5bec57f32df8f4e1e26e4ca3ac3c49ba2ffd97a4d5067f44->leave($__internal_0ce34e3cab29ddce5bec57f32df8f4e1e26e4ca3ac3c49ba2ffd97a4d5067f44_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1aa5ca2e3541d7f7ccbac7faf6dc62e443557365359c119e64b4a3e868a43c3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aa5ca2e3541d7f7ccbac7faf6dc62e443557365359c119e64b4a3e868a43c3a->enter($__internal_1aa5ca2e3541d7f7ccbac7faf6dc62e443557365359c119e64b4a3e868a43c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d0f7a03ea2ab0d291d7d3a38fec3c7adbf5050ec8d9e9d2ae8ac6a645ddf56bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f7a03ea2ab0d291d7d3a38fec3c7adbf5050ec8d9e9d2ae8ac6a645ddf56bb->enter($__internal_d0f7a03ea2ab0d291d7d3a38fec3c7adbf5050ec8d9e9d2ae8ac6a645ddf56bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d0f7a03ea2ab0d291d7d3a38fec3c7adbf5050ec8d9e9d2ae8ac6a645ddf56bb->leave($__internal_d0f7a03ea2ab0d291d7d3a38fec3c7adbf5050ec8d9e9d2ae8ac6a645ddf56bb_prof);

        
        $__internal_1aa5ca2e3541d7f7ccbac7faf6dc62e443557365359c119e64b4a3e868a43c3a->leave($__internal_1aa5ca2e3541d7f7ccbac7faf6dc62e443557365359c119e64b4a3e868a43c3a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea0e43dca6d5640f9155aae60355539489d859326c95c490109943c9d23406c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea0e43dca6d5640f9155aae60355539489d859326c95c490109943c9d23406c3->enter($__internal_ea0e43dca6d5640f9155aae60355539489d859326c95c490109943c9d23406c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_98b48d71f8c7719d94b2c00ca8b30ece0ec11acd540df0355ce82921d405990e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b48d71f8c7719d94b2c00ca8b30ece0ec11acd540df0355ce82921d405990e->enter($__internal_98b48d71f8c7719d94b2c00ca8b30ece0ec11acd540df0355ce82921d405990e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_98b48d71f8c7719d94b2c00ca8b30ece0ec11acd540df0355ce82921d405990e->leave($__internal_98b48d71f8c7719d94b2c00ca8b30ece0ec11acd540df0355ce82921d405990e_prof);

        
        $__internal_ea0e43dca6d5640f9155aae60355539489d859326c95c490109943c9d23406c3->leave($__internal_ea0e43dca6d5640f9155aae60355539489d859326c95c490109943c9d23406c3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
