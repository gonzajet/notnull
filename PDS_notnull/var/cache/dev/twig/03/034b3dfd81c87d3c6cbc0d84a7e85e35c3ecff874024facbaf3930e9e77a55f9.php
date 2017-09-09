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
        $__internal_04823d83fc8dd36d6daae52591b9fca98fd88a0ddfda0fd82d7c35862a8b9291 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04823d83fc8dd36d6daae52591b9fca98fd88a0ddfda0fd82d7c35862a8b9291->enter($__internal_04823d83fc8dd36d6daae52591b9fca98fd88a0ddfda0fd82d7c35862a8b9291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_1e78e6ef42208061c69e80f2a0d9d35accb511efbb1a123b36544af3ccb9194e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e78e6ef42208061c69e80f2a0d9d35accb511efbb1a123b36544af3ccb9194e->enter($__internal_1e78e6ef42208061c69e80f2a0d9d35accb511efbb1a123b36544af3ccb9194e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04823d83fc8dd36d6daae52591b9fca98fd88a0ddfda0fd82d7c35862a8b9291->leave($__internal_04823d83fc8dd36d6daae52591b9fca98fd88a0ddfda0fd82d7c35862a8b9291_prof);

        
        $__internal_1e78e6ef42208061c69e80f2a0d9d35accb511efbb1a123b36544af3ccb9194e->leave($__internal_1e78e6ef42208061c69e80f2a0d9d35accb511efbb1a123b36544af3ccb9194e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_27588fa0f536bdd7b95397fc4c5572691ddcb2c145c26f809d76421016c56274 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27588fa0f536bdd7b95397fc4c5572691ddcb2c145c26f809d76421016c56274->enter($__internal_27588fa0f536bdd7b95397fc4c5572691ddcb2c145c26f809d76421016c56274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4357489f1975dab44d1fcdcbd9c0b3a8a2b45171a8e880ef0b5f6945b168af0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4357489f1975dab44d1fcdcbd9c0b3a8a2b45171a8e880ef0b5f6945b168af0f->enter($__internal_4357489f1975dab44d1fcdcbd9c0b3a8a2b45171a8e880ef0b5f6945b168af0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_4357489f1975dab44d1fcdcbd9c0b3a8a2b45171a8e880ef0b5f6945b168af0f->leave($__internal_4357489f1975dab44d1fcdcbd9c0b3a8a2b45171a8e880ef0b5f6945b168af0f_prof);

        
        $__internal_27588fa0f536bdd7b95397fc4c5572691ddcb2c145c26f809d76421016c56274->leave($__internal_27588fa0f536bdd7b95397fc4c5572691ddcb2c145c26f809d76421016c56274_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_738b9862587436da732f18255aea74ee9894709b576b0c17382d25cfb4cf99f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_738b9862587436da732f18255aea74ee9894709b576b0c17382d25cfb4cf99f9->enter($__internal_738b9862587436da732f18255aea74ee9894709b576b0c17382d25cfb4cf99f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0a8945f773f649ff70ce048d5b25cb83a64402e805b82e49ccbb66847a09a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a8945f773f649ff70ce048d5b25cb83a64402e805b82e49ccbb66847a09a2c->enter($__internal_c0a8945f773f649ff70ce048d5b25cb83a64402e805b82e49ccbb66847a09a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c0a8945f773f649ff70ce048d5b25cb83a64402e805b82e49ccbb66847a09a2c->leave($__internal_c0a8945f773f649ff70ce048d5b25cb83a64402e805b82e49ccbb66847a09a2c_prof);

        
        $__internal_738b9862587436da732f18255aea74ee9894709b576b0c17382d25cfb4cf99f9->leave($__internal_738b9862587436da732f18255aea74ee9894709b576b0c17382d25cfb4cf99f9_prof);

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
