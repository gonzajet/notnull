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
        $__internal_3cc7b0d5640ea384382b60a3434f4845ca83e2cbae902cb0534eca3975b2dbc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cc7b0d5640ea384382b60a3434f4845ca83e2cbae902cb0534eca3975b2dbc4->enter($__internal_3cc7b0d5640ea384382b60a3434f4845ca83e2cbae902cb0534eca3975b2dbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_c78fdfbd8b3fbd21b4df4fc0ccadca030c096257abc8dc3d02acd1c56c73da0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c78fdfbd8b3fbd21b4df4fc0ccadca030c096257abc8dc3d02acd1c56c73da0e->enter($__internal_c78fdfbd8b3fbd21b4df4fc0ccadca030c096257abc8dc3d02acd1c56c73da0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cc7b0d5640ea384382b60a3434f4845ca83e2cbae902cb0534eca3975b2dbc4->leave($__internal_3cc7b0d5640ea384382b60a3434f4845ca83e2cbae902cb0534eca3975b2dbc4_prof);

        
        $__internal_c78fdfbd8b3fbd21b4df4fc0ccadca030c096257abc8dc3d02acd1c56c73da0e->leave($__internal_c78fdfbd8b3fbd21b4df4fc0ccadca030c096257abc8dc3d02acd1c56c73da0e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2d40a5c65796ba2f93118e5d9a466de9885bad12edb19ad39d4fbdee92b65296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d40a5c65796ba2f93118e5d9a466de9885bad12edb19ad39d4fbdee92b65296->enter($__internal_2d40a5c65796ba2f93118e5d9a466de9885bad12edb19ad39d4fbdee92b65296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_be6be4a374b8c965125aecc94953ccbdcdf096afa789203aa90cc25259a6e4e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be6be4a374b8c965125aecc94953ccbdcdf096afa789203aa90cc25259a6e4e8->enter($__internal_be6be4a374b8c965125aecc94953ccbdcdf096afa789203aa90cc25259a6e4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_be6be4a374b8c965125aecc94953ccbdcdf096afa789203aa90cc25259a6e4e8->leave($__internal_be6be4a374b8c965125aecc94953ccbdcdf096afa789203aa90cc25259a6e4e8_prof);

        
        $__internal_2d40a5c65796ba2f93118e5d9a466de9885bad12edb19ad39d4fbdee92b65296->leave($__internal_2d40a5c65796ba2f93118e5d9a466de9885bad12edb19ad39d4fbdee92b65296_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e8ec47a64c03ec780456915c84d3103ae86aa50291a5ecb38b7db455c256361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e8ec47a64c03ec780456915c84d3103ae86aa50291a5ecb38b7db455c256361->enter($__internal_6e8ec47a64c03ec780456915c84d3103ae86aa50291a5ecb38b7db455c256361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_76d26a1a1ac0f36b390657a414fb0835098deaa69dd618ca80e47c48a8d4b857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76d26a1a1ac0f36b390657a414fb0835098deaa69dd618ca80e47c48a8d4b857->enter($__internal_76d26a1a1ac0f36b390657a414fb0835098deaa69dd618ca80e47c48a8d4b857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_76d26a1a1ac0f36b390657a414fb0835098deaa69dd618ca80e47c48a8d4b857->leave($__internal_76d26a1a1ac0f36b390657a414fb0835098deaa69dd618ca80e47c48a8d4b857_prof);

        
        $__internal_6e8ec47a64c03ec780456915c84d3103ae86aa50291a5ecb38b7db455c256361->leave($__internal_6e8ec47a64c03ec780456915c84d3103ae86aa50291a5ecb38b7db455c256361_prof);

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
