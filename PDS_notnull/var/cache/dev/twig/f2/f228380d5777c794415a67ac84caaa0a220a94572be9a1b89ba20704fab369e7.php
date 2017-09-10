<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
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
        $__internal_136316eea8ef75bd0fc0d4747dafe62e9dfa20cd3982220a4636e2d429fcb563 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_136316eea8ef75bd0fc0d4747dafe62e9dfa20cd3982220a4636e2d429fcb563->enter($__internal_136316eea8ef75bd0fc0d4747dafe62e9dfa20cd3982220a4636e2d429fcb563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a59f8a81270dcac7de2a5ef572ee2f2d157872bf413942db463a96852d35558c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a59f8a81270dcac7de2a5ef572ee2f2d157872bf413942db463a96852d35558c->enter($__internal_a59f8a81270dcac7de2a5ef572ee2f2d157872bf413942db463a96852d35558c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_136316eea8ef75bd0fc0d4747dafe62e9dfa20cd3982220a4636e2d429fcb563->leave($__internal_136316eea8ef75bd0fc0d4747dafe62e9dfa20cd3982220a4636e2d429fcb563_prof);

        
        $__internal_a59f8a81270dcac7de2a5ef572ee2f2d157872bf413942db463a96852d35558c->leave($__internal_a59f8a81270dcac7de2a5ef572ee2f2d157872bf413942db463a96852d35558c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a8a03c673f743ced26cd484f82fe6c8c483c0a01618a91ae3e23a3bfb4d5b159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8a03c673f743ced26cd484f82fe6c8c483c0a01618a91ae3e23a3bfb4d5b159->enter($__internal_a8a03c673f743ced26cd484f82fe6c8c483c0a01618a91ae3e23a3bfb4d5b159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a1cd17837856560faeba8d464b6d13304ceb80c370cea35438d516afa6b6a1f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1cd17837856560faeba8d464b6d13304ceb80c370cea35438d516afa6b6a1f2->enter($__internal_a1cd17837856560faeba8d464b6d13304ceb80c370cea35438d516afa6b6a1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a1cd17837856560faeba8d464b6d13304ceb80c370cea35438d516afa6b6a1f2->leave($__internal_a1cd17837856560faeba8d464b6d13304ceb80c370cea35438d516afa6b6a1f2_prof);

        
        $__internal_a8a03c673f743ced26cd484f82fe6c8c483c0a01618a91ae3e23a3bfb4d5b159->leave($__internal_a8a03c673f743ced26cd484f82fe6c8c483c0a01618a91ae3e23a3bfb4d5b159_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7fca958f60419b4bf617ce166ec7ad3e5f3277c9208edc1380a62fa1802c4e37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fca958f60419b4bf617ce166ec7ad3e5f3277c9208edc1380a62fa1802c4e37->enter($__internal_7fca958f60419b4bf617ce166ec7ad3e5f3277c9208edc1380a62fa1802c4e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4565047bc485a605237b2460b6dcf3afff95e9b8a896ec020a18f0b3d1892631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4565047bc485a605237b2460b6dcf3afff95e9b8a896ec020a18f0b3d1892631->enter($__internal_4565047bc485a605237b2460b6dcf3afff95e9b8a896ec020a18f0b3d1892631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4565047bc485a605237b2460b6dcf3afff95e9b8a896ec020a18f0b3d1892631->leave($__internal_4565047bc485a605237b2460b6dcf3afff95e9b8a896ec020a18f0b3d1892631_prof);

        
        $__internal_7fca958f60419b4bf617ce166ec7ad3e5f3277c9208edc1380a62fa1802c4e37->leave($__internal_7fca958f60419b4bf617ce166ec7ad3e5f3277c9208edc1380a62fa1802c4e37_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5c40bf919fd3d05341980552249e0c66989209b65ac59543584e8a161f986674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c40bf919fd3d05341980552249e0c66989209b65ac59543584e8a161f986674->enter($__internal_5c40bf919fd3d05341980552249e0c66989209b65ac59543584e8a161f986674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4df439b916a67e62e33f0eae6de50494508a91d013d996f333266bcd04b5a44e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df439b916a67e62e33f0eae6de50494508a91d013d996f333266bcd04b5a44e->enter($__internal_4df439b916a67e62e33f0eae6de50494508a91d013d996f333266bcd04b5a44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4df439b916a67e62e33f0eae6de50494508a91d013d996f333266bcd04b5a44e->leave($__internal_4df439b916a67e62e33f0eae6de50494508a91d013d996f333266bcd04b5a44e_prof);

        
        $__internal_5c40bf919fd3d05341980552249e0c66989209b65ac59543584e8a161f986674->leave($__internal_5c40bf919fd3d05341980552249e0c66989209b65ac59543584e8a161f986674_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/gonzalo/notnull/PDS_notnull/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
