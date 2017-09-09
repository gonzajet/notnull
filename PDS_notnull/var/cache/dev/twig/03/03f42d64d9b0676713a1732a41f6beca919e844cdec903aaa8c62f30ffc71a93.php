<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_d820b52e09141a15cfa4ddd0827a37effef652934e33db8a7b5ff8de159bc968 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eef51d3509f792f9623af8b4c84512b7f04f18445b1fbcc4389f11fb49b3a1bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eef51d3509f792f9623af8b4c84512b7f04f18445b1fbcc4389f11fb49b3a1bb->enter($__internal_eef51d3509f792f9623af8b4c84512b7f04f18445b1fbcc4389f11fb49b3a1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_343df8b224140a7350cdba835f3f737335cf72e958c0e1f0206764853ad27b22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_343df8b224140a7350cdba835f3f737335cf72e958c0e1f0206764853ad27b22->enter($__internal_343df8b224140a7350cdba835f3f737335cf72e958c0e1f0206764853ad27b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_eef51d3509f792f9623af8b4c84512b7f04f18445b1fbcc4389f11fb49b3a1bb->leave($__internal_eef51d3509f792f9623af8b4c84512b7f04f18445b1fbcc4389f11fb49b3a1bb_prof);

        
        $__internal_343df8b224140a7350cdba835f3f737335cf72e958c0e1f0206764853ad27b22->leave($__internal_343df8b224140a7350cdba835f3f737335cf72e958c0e1f0206764853ad27b22_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_17965a5ddc3cfe197080400f081343dc7174103c2070e77a908b2dbfcca1cb66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17965a5ddc3cfe197080400f081343dc7174103c2070e77a908b2dbfcca1cb66->enter($__internal_17965a5ddc3cfe197080400f081343dc7174103c2070e77a908b2dbfcca1cb66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6e23de1e6a007fa5116454e703d1fda98ad34335ff2443a9d89716bcab999e8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e23de1e6a007fa5116454e703d1fda98ad34335ff2443a9d89716bcab999e8a->enter($__internal_6e23de1e6a007fa5116454e703d1fda98ad34335ff2443a9d89716bcab999e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6e23de1e6a007fa5116454e703d1fda98ad34335ff2443a9d89716bcab999e8a->leave($__internal_6e23de1e6a007fa5116454e703d1fda98ad34335ff2443a9d89716bcab999e8a_prof);

        
        $__internal_17965a5ddc3cfe197080400f081343dc7174103c2070e77a908b2dbfcca1cb66->leave($__internal_17965a5ddc3cfe197080400f081343dc7174103c2070e77a908b2dbfcca1cb66_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
