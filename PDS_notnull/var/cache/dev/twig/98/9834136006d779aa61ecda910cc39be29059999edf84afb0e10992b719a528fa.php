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
        $__internal_ef0ca0f46416f2d90f44654e7211a94ce5be69e1a714a988d0a86adf0c1becfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef0ca0f46416f2d90f44654e7211a94ce5be69e1a714a988d0a86adf0c1becfd->enter($__internal_ef0ca0f46416f2d90f44654e7211a94ce5be69e1a714a988d0a86adf0c1becfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1350bd237b122e08d1aa95eaf2c90438749df3673a02fb9539981e3d043d2238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1350bd237b122e08d1aa95eaf2c90438749df3673a02fb9539981e3d043d2238->enter($__internal_1350bd237b122e08d1aa95eaf2c90438749df3673a02fb9539981e3d043d2238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef0ca0f46416f2d90f44654e7211a94ce5be69e1a714a988d0a86adf0c1becfd->leave($__internal_ef0ca0f46416f2d90f44654e7211a94ce5be69e1a714a988d0a86adf0c1becfd_prof);

        
        $__internal_1350bd237b122e08d1aa95eaf2c90438749df3673a02fb9539981e3d043d2238->leave($__internal_1350bd237b122e08d1aa95eaf2c90438749df3673a02fb9539981e3d043d2238_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e3f3130288c27604105c657934c3b6bbb737613119f9fe157f5d30886dd0d86d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3f3130288c27604105c657934c3b6bbb737613119f9fe157f5d30886dd0d86d->enter($__internal_e3f3130288c27604105c657934c3b6bbb737613119f9fe157f5d30886dd0d86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1b58fbda15fb8a86010afcbdf1488ecdd69a2906f604e9f4bca413c5d6092730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b58fbda15fb8a86010afcbdf1488ecdd69a2906f604e9f4bca413c5d6092730->enter($__internal_1b58fbda15fb8a86010afcbdf1488ecdd69a2906f604e9f4bca413c5d6092730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1b58fbda15fb8a86010afcbdf1488ecdd69a2906f604e9f4bca413c5d6092730->leave($__internal_1b58fbda15fb8a86010afcbdf1488ecdd69a2906f604e9f4bca413c5d6092730_prof);

        
        $__internal_e3f3130288c27604105c657934c3b6bbb737613119f9fe157f5d30886dd0d86d->leave($__internal_e3f3130288c27604105c657934c3b6bbb737613119f9fe157f5d30886dd0d86d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_67e7970ae3e4a6774fd6d4b3a8113c63e1dc062adbee262c1782507022104ce5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67e7970ae3e4a6774fd6d4b3a8113c63e1dc062adbee262c1782507022104ce5->enter($__internal_67e7970ae3e4a6774fd6d4b3a8113c63e1dc062adbee262c1782507022104ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_031e7f6412a423c931622471e5e6d900e482a236cb83679354de014e6fdb998c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_031e7f6412a423c931622471e5e6d900e482a236cb83679354de014e6fdb998c->enter($__internal_031e7f6412a423c931622471e5e6d900e482a236cb83679354de014e6fdb998c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_031e7f6412a423c931622471e5e6d900e482a236cb83679354de014e6fdb998c->leave($__internal_031e7f6412a423c931622471e5e6d900e482a236cb83679354de014e6fdb998c_prof);

        
        $__internal_67e7970ae3e4a6774fd6d4b3a8113c63e1dc062adbee262c1782507022104ce5->leave($__internal_67e7970ae3e4a6774fd6d4b3a8113c63e1dc062adbee262c1782507022104ce5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8219f3ef6cf97069493fd9a906b6b0e3c833de349529f7b8dd6f0ed2cc358d67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8219f3ef6cf97069493fd9a906b6b0e3c833de349529f7b8dd6f0ed2cc358d67->enter($__internal_8219f3ef6cf97069493fd9a906b6b0e3c833de349529f7b8dd6f0ed2cc358d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4f17e2953eb093efd451cbbe3e5b85ab28e4aa4f2baee59d85ea7110782f562d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f17e2953eb093efd451cbbe3e5b85ab28e4aa4f2baee59d85ea7110782f562d->enter($__internal_4f17e2953eb093efd451cbbe3e5b85ab28e4aa4f2baee59d85ea7110782f562d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4f17e2953eb093efd451cbbe3e5b85ab28e4aa4f2baee59d85ea7110782f562d->leave($__internal_4f17e2953eb093efd451cbbe3e5b85ab28e4aa4f2baee59d85ea7110782f562d_prof);

        
        $__internal_8219f3ef6cf97069493fd9a906b6b0e3c833de349529f7b8dd6f0ed2cc358d67->leave($__internal_8219f3ef6cf97069493fd9a906b6b0e3c833de349529f7b8dd6f0ed2cc358d67_prof);

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
