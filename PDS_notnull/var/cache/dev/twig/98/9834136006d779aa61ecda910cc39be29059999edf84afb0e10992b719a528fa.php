<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_09886c37796d81d574b2448cf2a22ea32da8dad546b69f22c376ce19a869ce97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_232e3e2e8ef8db189c1980b002a08b9627a2b788283fe9a529a002494f9da781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_232e3e2e8ef8db189c1980b002a08b9627a2b788283fe9a529a002494f9da781->enter($__internal_232e3e2e8ef8db189c1980b002a08b9627a2b788283fe9a529a002494f9da781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a1790d0aa4ede5304eb391818cbac181cba51e3129569f2f4357b2626abac15b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1790d0aa4ede5304eb391818cbac181cba51e3129569f2f4357b2626abac15b->enter($__internal_a1790d0aa4ede5304eb391818cbac181cba51e3129569f2f4357b2626abac15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_232e3e2e8ef8db189c1980b002a08b9627a2b788283fe9a529a002494f9da781->leave($__internal_232e3e2e8ef8db189c1980b002a08b9627a2b788283fe9a529a002494f9da781_prof);

        
        $__internal_a1790d0aa4ede5304eb391818cbac181cba51e3129569f2f4357b2626abac15b->leave($__internal_a1790d0aa4ede5304eb391818cbac181cba51e3129569f2f4357b2626abac15b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4e177e0758a07b9d0b81fc1fe9df94931e4159d931530186c5731b1d815db33a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e177e0758a07b9d0b81fc1fe9df94931e4159d931530186c5731b1d815db33a->enter($__internal_4e177e0758a07b9d0b81fc1fe9df94931e4159d931530186c5731b1d815db33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bbc5e71eb065ff711e355aad07610b5e12be83f9415421740ba1a613007846b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbc5e71eb065ff711e355aad07610b5e12be83f9415421740ba1a613007846b1->enter($__internal_bbc5e71eb065ff711e355aad07610b5e12be83f9415421740ba1a613007846b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bbc5e71eb065ff711e355aad07610b5e12be83f9415421740ba1a613007846b1->leave($__internal_bbc5e71eb065ff711e355aad07610b5e12be83f9415421740ba1a613007846b1_prof);

        
        $__internal_4e177e0758a07b9d0b81fc1fe9df94931e4159d931530186c5731b1d815db33a->leave($__internal_4e177e0758a07b9d0b81fc1fe9df94931e4159d931530186c5731b1d815db33a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a0ff6c52710839f6e893dcaa24605c52c0d76e247aefc0eff541d1b689adca5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0ff6c52710839f6e893dcaa24605c52c0d76e247aefc0eff541d1b689adca5b->enter($__internal_a0ff6c52710839f6e893dcaa24605c52c0d76e247aefc0eff541d1b689adca5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f1bf4e990639ceab90686fb76e1a9c966028b8854519f701112a918bcf7dd908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1bf4e990639ceab90686fb76e1a9c966028b8854519f701112a918bcf7dd908->enter($__internal_f1bf4e990639ceab90686fb76e1a9c966028b8854519f701112a918bcf7dd908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f1bf4e990639ceab90686fb76e1a9c966028b8854519f701112a918bcf7dd908->leave($__internal_f1bf4e990639ceab90686fb76e1a9c966028b8854519f701112a918bcf7dd908_prof);

        
        $__internal_a0ff6c52710839f6e893dcaa24605c52c0d76e247aefc0eff541d1b689adca5b->leave($__internal_a0ff6c52710839f6e893dcaa24605c52c0d76e247aefc0eff541d1b689adca5b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_475aca76183c8ad488134cc2159f129b0d5683052a3b842beab4aa3604b66266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_475aca76183c8ad488134cc2159f129b0d5683052a3b842beab4aa3604b66266->enter($__internal_475aca76183c8ad488134cc2159f129b0d5683052a3b842beab4aa3604b66266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0c16954e26d646e3807bec6d932a3cdb691e5766442088331ab06a0a63705990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c16954e26d646e3807bec6d932a3cdb691e5766442088331ab06a0a63705990->enter($__internal_0c16954e26d646e3807bec6d932a3cdb691e5766442088331ab06a0a63705990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0c16954e26d646e3807bec6d932a3cdb691e5766442088331ab06a0a63705990->leave($__internal_0c16954e26d646e3807bec6d932a3cdb691e5766442088331ab06a0a63705990_prof);

        
        $__internal_475aca76183c8ad488134cc2159f129b0d5683052a3b842beab4aa3604b66266->leave($__internal_475aca76183c8ad488134cc2159f129b0d5683052a3b842beab4aa3604b66266_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
