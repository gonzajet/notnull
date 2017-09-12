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
        $__internal_a83ce07dce94df2432f56d26e7555f9821b65ff3951e9edce811073d4fa9c02e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a83ce07dce94df2432f56d26e7555f9821b65ff3951e9edce811073d4fa9c02e->enter($__internal_a83ce07dce94df2432f56d26e7555f9821b65ff3951e9edce811073d4fa9c02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_f8f9532783ffac0c26ace0245a1bbca206125730910eb172a3a4d56686603503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f9532783ffac0c26ace0245a1bbca206125730910eb172a3a4d56686603503->enter($__internal_f8f9532783ffac0c26ace0245a1bbca206125730910eb172a3a4d56686603503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a83ce07dce94df2432f56d26e7555f9821b65ff3951e9edce811073d4fa9c02e->leave($__internal_a83ce07dce94df2432f56d26e7555f9821b65ff3951e9edce811073d4fa9c02e_prof);

        
        $__internal_f8f9532783ffac0c26ace0245a1bbca206125730910eb172a3a4d56686603503->leave($__internal_f8f9532783ffac0c26ace0245a1bbca206125730910eb172a3a4d56686603503_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_be2d0786dfeee9307948ff46cea3f728f2776de8b7cee42326b290a66c9dd7d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be2d0786dfeee9307948ff46cea3f728f2776de8b7cee42326b290a66c9dd7d8->enter($__internal_be2d0786dfeee9307948ff46cea3f728f2776de8b7cee42326b290a66c9dd7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_958dd18ed71742cd0aba7a82cba5bfb9bc764baa349681f13ef0e66ceae3edd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_958dd18ed71742cd0aba7a82cba5bfb9bc764baa349681f13ef0e66ceae3edd9->enter($__internal_958dd18ed71742cd0aba7a82cba5bfb9bc764baa349681f13ef0e66ceae3edd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_958dd18ed71742cd0aba7a82cba5bfb9bc764baa349681f13ef0e66ceae3edd9->leave($__internal_958dd18ed71742cd0aba7a82cba5bfb9bc764baa349681f13ef0e66ceae3edd9_prof);

        
        $__internal_be2d0786dfeee9307948ff46cea3f728f2776de8b7cee42326b290a66c9dd7d8->leave($__internal_be2d0786dfeee9307948ff46cea3f728f2776de8b7cee42326b290a66c9dd7d8_prof);

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
