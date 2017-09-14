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
        $__internal_1be33f734312c675072d48093c01a2133a2e68422ab91355f0428ef8a4e8872d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1be33f734312c675072d48093c01a2133a2e68422ab91355f0428ef8a4e8872d->enter($__internal_1be33f734312c675072d48093c01a2133a2e68422ab91355f0428ef8a4e8872d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2663600598aa25df5ce11da253abce15f90e4fc21d3797bcb10a6ec0b8ca1a19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2663600598aa25df5ce11da253abce15f90e4fc21d3797bcb10a6ec0b8ca1a19->enter($__internal_2663600598aa25df5ce11da253abce15f90e4fc21d3797bcb10a6ec0b8ca1a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1be33f734312c675072d48093c01a2133a2e68422ab91355f0428ef8a4e8872d->leave($__internal_1be33f734312c675072d48093c01a2133a2e68422ab91355f0428ef8a4e8872d_prof);

        
        $__internal_2663600598aa25df5ce11da253abce15f90e4fc21d3797bcb10a6ec0b8ca1a19->leave($__internal_2663600598aa25df5ce11da253abce15f90e4fc21d3797bcb10a6ec0b8ca1a19_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_45b10e119f5e3cff52d07eebbdd7428790614a9b5f2bf723642acec214fa5f2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45b10e119f5e3cff52d07eebbdd7428790614a9b5f2bf723642acec214fa5f2d->enter($__internal_45b10e119f5e3cff52d07eebbdd7428790614a9b5f2bf723642acec214fa5f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_78de60cd250e5535820fbb9daea08221d8bd2739a6e28ca479cb2560f4bfe388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78de60cd250e5535820fbb9daea08221d8bd2739a6e28ca479cb2560f4bfe388->enter($__internal_78de60cd250e5535820fbb9daea08221d8bd2739a6e28ca479cb2560f4bfe388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_78de60cd250e5535820fbb9daea08221d8bd2739a6e28ca479cb2560f4bfe388->leave($__internal_78de60cd250e5535820fbb9daea08221d8bd2739a6e28ca479cb2560f4bfe388_prof);

        
        $__internal_45b10e119f5e3cff52d07eebbdd7428790614a9b5f2bf723642acec214fa5f2d->leave($__internal_45b10e119f5e3cff52d07eebbdd7428790614a9b5f2bf723642acec214fa5f2d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e1c30e6d5a18bada42bef517df70efd3eff1f019a59aa914da96549ed7116d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e1c30e6d5a18bada42bef517df70efd3eff1f019a59aa914da96549ed7116d9->enter($__internal_8e1c30e6d5a18bada42bef517df70efd3eff1f019a59aa914da96549ed7116d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1e62719eda4038c3851cf0d293e5caaba848d6063bdaae70d7d595a6d0efb055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e62719eda4038c3851cf0d293e5caaba848d6063bdaae70d7d595a6d0efb055->enter($__internal_1e62719eda4038c3851cf0d293e5caaba848d6063bdaae70d7d595a6d0efb055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1e62719eda4038c3851cf0d293e5caaba848d6063bdaae70d7d595a6d0efb055->leave($__internal_1e62719eda4038c3851cf0d293e5caaba848d6063bdaae70d7d595a6d0efb055_prof);

        
        $__internal_8e1c30e6d5a18bada42bef517df70efd3eff1f019a59aa914da96549ed7116d9->leave($__internal_8e1c30e6d5a18bada42bef517df70efd3eff1f019a59aa914da96549ed7116d9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d7721050f83dd28f89781a867bf272ec0a113e7227e2c43c8a526f1acc17bcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d7721050f83dd28f89781a867bf272ec0a113e7227e2c43c8a526f1acc17bcb->enter($__internal_2d7721050f83dd28f89781a867bf272ec0a113e7227e2c43c8a526f1acc17bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3f3a70dcb63140e7ea84f648967015a3eae51fddfc81cc0ac6e800dbee377b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f3a70dcb63140e7ea84f648967015a3eae51fddfc81cc0ac6e800dbee377b0d->enter($__internal_3f3a70dcb63140e7ea84f648967015a3eae51fddfc81cc0ac6e800dbee377b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3f3a70dcb63140e7ea84f648967015a3eae51fddfc81cc0ac6e800dbee377b0d->leave($__internal_3f3a70dcb63140e7ea84f648967015a3eae51fddfc81cc0ac6e800dbee377b0d_prof);

        
        $__internal_2d7721050f83dd28f89781a867bf272ec0a113e7227e2c43c8a526f1acc17bcb->leave($__internal_2d7721050f83dd28f89781a867bf272ec0a113e7227e2c43c8a526f1acc17bcb_prof);

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
", "@WebProfiler/Collector/router.html.twig", "E:\\Users\\Carlitos\\Documents\\EstacionAR\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
