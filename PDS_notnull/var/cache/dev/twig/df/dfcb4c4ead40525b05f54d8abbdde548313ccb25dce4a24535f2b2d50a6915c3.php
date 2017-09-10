<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_773856ec5765f2af18de8d4e66250af78ef7a69794f5beba82d76d1d259e9ee7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_207955c0b3b027daff5ca68836b93baa5e50753c0eea36e8746687bffe26f4ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_207955c0b3b027daff5ca68836b93baa5e50753c0eea36e8746687bffe26f4ca->enter($__internal_207955c0b3b027daff5ca68836b93baa5e50753c0eea36e8746687bffe26f4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_68a819a3df452f568dd2e1a0e7a0983e1c19e6b1053c56048e5e3ede051bb01f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a819a3df452f568dd2e1a0e7a0983e1c19e6b1053c56048e5e3ede051bb01f->enter($__internal_68a819a3df452f568dd2e1a0e7a0983e1c19e6b1053c56048e5e3ede051bb01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_207955c0b3b027daff5ca68836b93baa5e50753c0eea36e8746687bffe26f4ca->leave($__internal_207955c0b3b027daff5ca68836b93baa5e50753c0eea36e8746687bffe26f4ca_prof);

        
        $__internal_68a819a3df452f568dd2e1a0e7a0983e1c19e6b1053c56048e5e3ede051bb01f->leave($__internal_68a819a3df452f568dd2e1a0e7a0983e1c19e6b1053c56048e5e3ede051bb01f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_769ee7c8627fcce28c452513af57ea3a436563cd3c316ff014b10d5fbdedc8f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_769ee7c8627fcce28c452513af57ea3a436563cd3c316ff014b10d5fbdedc8f3->enter($__internal_769ee7c8627fcce28c452513af57ea3a436563cd3c316ff014b10d5fbdedc8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_00c6fbb08cf08586503e2c5b1f15a102360877d50acbb71ba91b21d12d45b3aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00c6fbb08cf08586503e2c5b1f15a102360877d50acbb71ba91b21d12d45b3aa->enter($__internal_00c6fbb08cf08586503e2c5b1f15a102360877d50acbb71ba91b21d12d45b3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_00c6fbb08cf08586503e2c5b1f15a102360877d50acbb71ba91b21d12d45b3aa->leave($__internal_00c6fbb08cf08586503e2c5b1f15a102360877d50acbb71ba91b21d12d45b3aa_prof);

        
        $__internal_769ee7c8627fcce28c452513af57ea3a436563cd3c316ff014b10d5fbdedc8f3->leave($__internal_769ee7c8627fcce28c452513af57ea3a436563cd3c316ff014b10d5fbdedc8f3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d7e081bfac9beb631f347908a774e86bc2d324669c27d5d22e81e7baae0d26bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7e081bfac9beb631f347908a774e86bc2d324669c27d5d22e81e7baae0d26bf->enter($__internal_d7e081bfac9beb631f347908a774e86bc2d324669c27d5d22e81e7baae0d26bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0ba7632e7d6d889df645d564f08442da67bbe47ad23d1bd6f71f79a22528b81c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ba7632e7d6d889df645d564f08442da67bbe47ad23d1bd6f71f79a22528b81c->enter($__internal_0ba7632e7d6d889df645d564f08442da67bbe47ad23d1bd6f71f79a22528b81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0ba7632e7d6d889df645d564f08442da67bbe47ad23d1bd6f71f79a22528b81c->leave($__internal_0ba7632e7d6d889df645d564f08442da67bbe47ad23d1bd6f71f79a22528b81c_prof);

        
        $__internal_d7e081bfac9beb631f347908a774e86bc2d324669c27d5d22e81e7baae0d26bf->leave($__internal_d7e081bfac9beb631f347908a774e86bc2d324669c27d5d22e81e7baae0d26bf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e2d59a40e4bbbe9b470744cee79d51862c0380f90257a93268aa88f4510544b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2d59a40e4bbbe9b470744cee79d51862c0380f90257a93268aa88f4510544b3->enter($__internal_e2d59a40e4bbbe9b470744cee79d51862c0380f90257a93268aa88f4510544b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3f39783f12dc81b58bcab65ef6ca593297baf220566fcbe4a7f7637ddfbae1e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f39783f12dc81b58bcab65ef6ca593297baf220566fcbe4a7f7637ddfbae1e7->enter($__internal_3f39783f12dc81b58bcab65ef6ca593297baf220566fcbe4a7f7637ddfbae1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3f39783f12dc81b58bcab65ef6ca593297baf220566fcbe4a7f7637ddfbae1e7->leave($__internal_3f39783f12dc81b58bcab65ef6ca593297baf220566fcbe4a7f7637ddfbae1e7_prof);

        
        $__internal_e2d59a40e4bbbe9b470744cee79d51862c0380f90257a93268aa88f4510544b3->leave($__internal_e2d59a40e4bbbe9b470744cee79d51862c0380f90257a93268aa88f4510544b3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
