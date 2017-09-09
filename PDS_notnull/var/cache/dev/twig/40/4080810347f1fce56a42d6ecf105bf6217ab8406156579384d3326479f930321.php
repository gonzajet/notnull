<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_1406c706aafb1d29637c02dc07b8308c8d1175e94ef470af301598ed8fc617a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_96a4acec587120a7fba701491c3e22119b21f05facbe5262d84ec405716e2d97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96a4acec587120a7fba701491c3e22119b21f05facbe5262d84ec405716e2d97->enter($__internal_96a4acec587120a7fba701491c3e22119b21f05facbe5262d84ec405716e2d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_ae5f55bd7be695f3097f3997a7ebb98cfc2c964b062cef6b43983dc76366ec5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae5f55bd7be695f3097f3997a7ebb98cfc2c964b062cef6b43983dc76366ec5b->enter($__internal_ae5f55bd7be695f3097f3997a7ebb98cfc2c964b062cef6b43983dc76366ec5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96a4acec587120a7fba701491c3e22119b21f05facbe5262d84ec405716e2d97->leave($__internal_96a4acec587120a7fba701491c3e22119b21f05facbe5262d84ec405716e2d97_prof);

        
        $__internal_ae5f55bd7be695f3097f3997a7ebb98cfc2c964b062cef6b43983dc76366ec5b->leave($__internal_ae5f55bd7be695f3097f3997a7ebb98cfc2c964b062cef6b43983dc76366ec5b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_401a76375c03d80333f256607b60ce6185618c47e50e0ef315392059c68b73d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_401a76375c03d80333f256607b60ce6185618c47e50e0ef315392059c68b73d8->enter($__internal_401a76375c03d80333f256607b60ce6185618c47e50e0ef315392059c68b73d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e57013b81915951ffa0e31a9d00db89befc66c740553d40a50f91570da263184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e57013b81915951ffa0e31a9d00db89befc66c740553d40a50f91570da263184->enter($__internal_e57013b81915951ffa0e31a9d00db89befc66c740553d40a50f91570da263184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e57013b81915951ffa0e31a9d00db89befc66c740553d40a50f91570da263184->leave($__internal_e57013b81915951ffa0e31a9d00db89befc66c740553d40a50f91570da263184_prof);

        
        $__internal_401a76375c03d80333f256607b60ce6185618c47e50e0ef315392059c68b73d8->leave($__internal_401a76375c03d80333f256607b60ce6185618c47e50e0ef315392059c68b73d8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5d022bf61a5ebffe39106c8c47855699829105a38e31defae52036ab905ee42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5d022bf61a5ebffe39106c8c47855699829105a38e31defae52036ab905ee42->enter($__internal_c5d022bf61a5ebffe39106c8c47855699829105a38e31defae52036ab905ee42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_96ce484aaecd39abe25d0044bd64f7ffc588faa20fcfd5f69e577fe4966aa56b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96ce484aaecd39abe25d0044bd64f7ffc588faa20fcfd5f69e577fe4966aa56b->enter($__internal_96ce484aaecd39abe25d0044bd64f7ffc588faa20fcfd5f69e577fe4966aa56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_96ce484aaecd39abe25d0044bd64f7ffc588faa20fcfd5f69e577fe4966aa56b->leave($__internal_96ce484aaecd39abe25d0044bd64f7ffc588faa20fcfd5f69e577fe4966aa56b_prof);

        
        $__internal_c5d022bf61a5ebffe39106c8c47855699829105a38e31defae52036ab905ee42->leave($__internal_c5d022bf61a5ebffe39106c8c47855699829105a38e31defae52036ab905ee42_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
