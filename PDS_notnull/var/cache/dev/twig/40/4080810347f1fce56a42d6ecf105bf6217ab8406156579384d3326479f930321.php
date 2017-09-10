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
        $__internal_e1b525cf5b21d0970cf3a0775e83990970c2d31c1eed5c47434d9a0b18c4ce93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1b525cf5b21d0970cf3a0775e83990970c2d31c1eed5c47434d9a0b18c4ce93->enter($__internal_e1b525cf5b21d0970cf3a0775e83990970c2d31c1eed5c47434d9a0b18c4ce93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_2d24e044c67ac6cd9b39512afe25c08dae4289acf6d0599e9cc753f7f36553b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d24e044c67ac6cd9b39512afe25c08dae4289acf6d0599e9cc753f7f36553b2->enter($__internal_2d24e044c67ac6cd9b39512afe25c08dae4289acf6d0599e9cc753f7f36553b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1b525cf5b21d0970cf3a0775e83990970c2d31c1eed5c47434d9a0b18c4ce93->leave($__internal_e1b525cf5b21d0970cf3a0775e83990970c2d31c1eed5c47434d9a0b18c4ce93_prof);

        
        $__internal_2d24e044c67ac6cd9b39512afe25c08dae4289acf6d0599e9cc753f7f36553b2->leave($__internal_2d24e044c67ac6cd9b39512afe25c08dae4289acf6d0599e9cc753f7f36553b2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f2e73f2adf2ee1f442ffbf0a1463c9a0c231b72f9e1e6e35565a137a384c4d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2e73f2adf2ee1f442ffbf0a1463c9a0c231b72f9e1e6e35565a137a384c4d4b->enter($__internal_f2e73f2adf2ee1f442ffbf0a1463c9a0c231b72f9e1e6e35565a137a384c4d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_49f7dbd113d2a9ac28adbea8de9400df9ef9457c64e93a96694d3ca3e619ba9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f7dbd113d2a9ac28adbea8de9400df9ef9457c64e93a96694d3ca3e619ba9c->enter($__internal_49f7dbd113d2a9ac28adbea8de9400df9ef9457c64e93a96694d3ca3e619ba9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_49f7dbd113d2a9ac28adbea8de9400df9ef9457c64e93a96694d3ca3e619ba9c->leave($__internal_49f7dbd113d2a9ac28adbea8de9400df9ef9457c64e93a96694d3ca3e619ba9c_prof);

        
        $__internal_f2e73f2adf2ee1f442ffbf0a1463c9a0c231b72f9e1e6e35565a137a384c4d4b->leave($__internal_f2e73f2adf2ee1f442ffbf0a1463c9a0c231b72f9e1e6e35565a137a384c4d4b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_eae95ac49657fbe1d2cca6ef75661c34b78ee254c49a2be46223619976561669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eae95ac49657fbe1d2cca6ef75661c34b78ee254c49a2be46223619976561669->enter($__internal_eae95ac49657fbe1d2cca6ef75661c34b78ee254c49a2be46223619976561669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4935a728cb98d1627ae65c3af16367bdcc4432095c580b00a1f3ed9bd653bb01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4935a728cb98d1627ae65c3af16367bdcc4432095c580b00a1f3ed9bd653bb01->enter($__internal_4935a728cb98d1627ae65c3af16367bdcc4432095c580b00a1f3ed9bd653bb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4935a728cb98d1627ae65c3af16367bdcc4432095c580b00a1f3ed9bd653bb01->leave($__internal_4935a728cb98d1627ae65c3af16367bdcc4432095c580b00a1f3ed9bd653bb01_prof);

        
        $__internal_eae95ac49657fbe1d2cca6ef75661c34b78ee254c49a2be46223619976561669->leave($__internal_eae95ac49657fbe1d2cca6ef75661c34b78ee254c49a2be46223619976561669_prof);

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
