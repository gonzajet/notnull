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
        $__internal_fbde87a28adacf854f1fdf768c505cc9753b2317907e799cf2c45244e2e12238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbde87a28adacf854f1fdf768c505cc9753b2317907e799cf2c45244e2e12238->enter($__internal_fbde87a28adacf854f1fdf768c505cc9753b2317907e799cf2c45244e2e12238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_ca8a508a0f13f7c44e18d5c6a02414c08e64cc127ab25fdceb0534b58b82c551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca8a508a0f13f7c44e18d5c6a02414c08e64cc127ab25fdceb0534b58b82c551->enter($__internal_ca8a508a0f13f7c44e18d5c6a02414c08e64cc127ab25fdceb0534b58b82c551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbde87a28adacf854f1fdf768c505cc9753b2317907e799cf2c45244e2e12238->leave($__internal_fbde87a28adacf854f1fdf768c505cc9753b2317907e799cf2c45244e2e12238_prof);

        
        $__internal_ca8a508a0f13f7c44e18d5c6a02414c08e64cc127ab25fdceb0534b58b82c551->leave($__internal_ca8a508a0f13f7c44e18d5c6a02414c08e64cc127ab25fdceb0534b58b82c551_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3a4be4f643d56901023d22afbae13e156bf84af16e28708d0764b7b44d20bd0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a4be4f643d56901023d22afbae13e156bf84af16e28708d0764b7b44d20bd0f->enter($__internal_3a4be4f643d56901023d22afbae13e156bf84af16e28708d0764b7b44d20bd0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d5ee456e9599c762a2b0a1b5a6c9f1051cf98064ba76261534d37287bc3b4fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5ee456e9599c762a2b0a1b5a6c9f1051cf98064ba76261534d37287bc3b4fc5->enter($__internal_d5ee456e9599c762a2b0a1b5a6c9f1051cf98064ba76261534d37287bc3b4fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d5ee456e9599c762a2b0a1b5a6c9f1051cf98064ba76261534d37287bc3b4fc5->leave($__internal_d5ee456e9599c762a2b0a1b5a6c9f1051cf98064ba76261534d37287bc3b4fc5_prof);

        
        $__internal_3a4be4f643d56901023d22afbae13e156bf84af16e28708d0764b7b44d20bd0f->leave($__internal_3a4be4f643d56901023d22afbae13e156bf84af16e28708d0764b7b44d20bd0f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4d842880175e09ffe6a096fa8fa793d7141794a021509b3ee89a97b2d8107bce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d842880175e09ffe6a096fa8fa793d7141794a021509b3ee89a97b2d8107bce->enter($__internal_4d842880175e09ffe6a096fa8fa793d7141794a021509b3ee89a97b2d8107bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b3e98541bbbea6a4b2d3d2814507f8b301cd85ce5fbb0240f2d0a26515e70361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e98541bbbea6a4b2d3d2814507f8b301cd85ce5fbb0240f2d0a26515e70361->enter($__internal_b3e98541bbbea6a4b2d3d2814507f8b301cd85ce5fbb0240f2d0a26515e70361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b3e98541bbbea6a4b2d3d2814507f8b301cd85ce5fbb0240f2d0a26515e70361->leave($__internal_b3e98541bbbea6a4b2d3d2814507f8b301cd85ce5fbb0240f2d0a26515e70361_prof);

        
        $__internal_4d842880175e09ffe6a096fa8fa793d7141794a021509b3ee89a97b2d8107bce->leave($__internal_4d842880175e09ffe6a096fa8fa793d7141794a021509b3ee89a97b2d8107bce_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a8c8cfb3386f75be30efe8b7fa0321a060c00109ac708746abf76711c6d9f6ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8c8cfb3386f75be30efe8b7fa0321a060c00109ac708746abf76711c6d9f6ea->enter($__internal_a8c8cfb3386f75be30efe8b7fa0321a060c00109ac708746abf76711c6d9f6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e0ab966d8f964e8322e251f95a05d74a9c498b38e96d7cc77a0abd7de1fa115c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ab966d8f964e8322e251f95a05d74a9c498b38e96d7cc77a0abd7de1fa115c->enter($__internal_e0ab966d8f964e8322e251f95a05d74a9c498b38e96d7cc77a0abd7de1fa115c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e0ab966d8f964e8322e251f95a05d74a9c498b38e96d7cc77a0abd7de1fa115c->leave($__internal_e0ab966d8f964e8322e251f95a05d74a9c498b38e96d7cc77a0abd7de1fa115c_prof);

        
        $__internal_a8c8cfb3386f75be30efe8b7fa0321a060c00109ac708746abf76711c6d9f6ea->leave($__internal_a8c8cfb3386f75be30efe8b7fa0321a060c00109ac708746abf76711c6d9f6ea_prof);

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
