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
        $__internal_58c99c1ba3dba803dc92292ac95f0fb964316931c8aad6ff3c87e71dbfa98e7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58c99c1ba3dba803dc92292ac95f0fb964316931c8aad6ff3c87e71dbfa98e7e->enter($__internal_58c99c1ba3dba803dc92292ac95f0fb964316931c8aad6ff3c87e71dbfa98e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_95a050e190ef2a02cc23aa488cf152640adb541bf90f549376d92d687cf110a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a050e190ef2a02cc23aa488cf152640adb541bf90f549376d92d687cf110a4->enter($__internal_95a050e190ef2a02cc23aa488cf152640adb541bf90f549376d92d687cf110a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58c99c1ba3dba803dc92292ac95f0fb964316931c8aad6ff3c87e71dbfa98e7e->leave($__internal_58c99c1ba3dba803dc92292ac95f0fb964316931c8aad6ff3c87e71dbfa98e7e_prof);

        
        $__internal_95a050e190ef2a02cc23aa488cf152640adb541bf90f549376d92d687cf110a4->leave($__internal_95a050e190ef2a02cc23aa488cf152640adb541bf90f549376d92d687cf110a4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bbf5c96c64da4d2495355139dc93a1248fc7b5dc880cfb50ff677514e05a6e28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbf5c96c64da4d2495355139dc93a1248fc7b5dc880cfb50ff677514e05a6e28->enter($__internal_bbf5c96c64da4d2495355139dc93a1248fc7b5dc880cfb50ff677514e05a6e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e0a762e69e14535610159e1b3a1996bf3d716574a06850c0bb416eab1e01ea0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a762e69e14535610159e1b3a1996bf3d716574a06850c0bb416eab1e01ea0c->enter($__internal_e0a762e69e14535610159e1b3a1996bf3d716574a06850c0bb416eab1e01ea0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e0a762e69e14535610159e1b3a1996bf3d716574a06850c0bb416eab1e01ea0c->leave($__internal_e0a762e69e14535610159e1b3a1996bf3d716574a06850c0bb416eab1e01ea0c_prof);

        
        $__internal_bbf5c96c64da4d2495355139dc93a1248fc7b5dc880cfb50ff677514e05a6e28->leave($__internal_bbf5c96c64da4d2495355139dc93a1248fc7b5dc880cfb50ff677514e05a6e28_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_70eee9dd4ca9b9da6f37ffd3c682e09e4c122c2d222125b38af05618ac2afdc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70eee9dd4ca9b9da6f37ffd3c682e09e4c122c2d222125b38af05618ac2afdc8->enter($__internal_70eee9dd4ca9b9da6f37ffd3c682e09e4c122c2d222125b38af05618ac2afdc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_458cc5555ffeb287b044a992b4a1bed8e277d943b3c1ccb956777a7f8f80b055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_458cc5555ffeb287b044a992b4a1bed8e277d943b3c1ccb956777a7f8f80b055->enter($__internal_458cc5555ffeb287b044a992b4a1bed8e277d943b3c1ccb956777a7f8f80b055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_458cc5555ffeb287b044a992b4a1bed8e277d943b3c1ccb956777a7f8f80b055->leave($__internal_458cc5555ffeb287b044a992b4a1bed8e277d943b3c1ccb956777a7f8f80b055_prof);

        
        $__internal_70eee9dd4ca9b9da6f37ffd3c682e09e4c122c2d222125b38af05618ac2afdc8->leave($__internal_70eee9dd4ca9b9da6f37ffd3c682e09e4c122c2d222125b38af05618ac2afdc8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_85e7f7d92a82ad15cc2a5efe4a92f4ff7976823d4f7c403d4c0e844df111bd8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85e7f7d92a82ad15cc2a5efe4a92f4ff7976823d4f7c403d4c0e844df111bd8b->enter($__internal_85e7f7d92a82ad15cc2a5efe4a92f4ff7976823d4f7c403d4c0e844df111bd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_91d1d6896ee6f483c2957dff702c57836d358394db9e36158f0793c92a8acf90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d1d6896ee6f483c2957dff702c57836d358394db9e36158f0793c92a8acf90->enter($__internal_91d1d6896ee6f483c2957dff702c57836d358394db9e36158f0793c92a8acf90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_91d1d6896ee6f483c2957dff702c57836d358394db9e36158f0793c92a8acf90->leave($__internal_91d1d6896ee6f483c2957dff702c57836d358394db9e36158f0793c92a8acf90_prof);

        
        $__internal_85e7f7d92a82ad15cc2a5efe4a92f4ff7976823d4f7c403d4c0e844df111bd8b->leave($__internal_85e7f7d92a82ad15cc2a5efe4a92f4ff7976823d4f7c403d4c0e844df111bd8b_prof);

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
