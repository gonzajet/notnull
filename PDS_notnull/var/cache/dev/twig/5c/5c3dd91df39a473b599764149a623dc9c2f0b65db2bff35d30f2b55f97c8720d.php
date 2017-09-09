<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_004ed2c035a0936893d03c557d3f66e4ffb22ea4677e43bb1b574f1910da27c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04922a915f4a14cf3fbb95220a8f7ffb376c8fbb0d5c3ad5520906e571ee93f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04922a915f4a14cf3fbb95220a8f7ffb376c8fbb0d5c3ad5520906e571ee93f0->enter($__internal_04922a915f4a14cf3fbb95220a8f7ffb376c8fbb0d5c3ad5520906e571ee93f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_838a93acd3d2500b97841e2cfa76659001255235b9a5becf566c0f9406fb8fc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_838a93acd3d2500b97841e2cfa76659001255235b9a5becf566c0f9406fb8fc7->enter($__internal_838a93acd3d2500b97841e2cfa76659001255235b9a5becf566c0f9406fb8fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04922a915f4a14cf3fbb95220a8f7ffb376c8fbb0d5c3ad5520906e571ee93f0->leave($__internal_04922a915f4a14cf3fbb95220a8f7ffb376c8fbb0d5c3ad5520906e571ee93f0_prof);

        
        $__internal_838a93acd3d2500b97841e2cfa76659001255235b9a5becf566c0f9406fb8fc7->leave($__internal_838a93acd3d2500b97841e2cfa76659001255235b9a5becf566c0f9406fb8fc7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc02bc8ae9471fca4249d1a0d454b078cfdd334f81c5c6be3ee3af79dae8ff8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc02bc8ae9471fca4249d1a0d454b078cfdd334f81c5c6be3ee3af79dae8ff8b->enter($__internal_fc02bc8ae9471fca4249d1a0d454b078cfdd334f81c5c6be3ee3af79dae8ff8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_841a813bb381e7b9becaa0765b3857696c34b5fd392b0d17f3e844fe2517ecfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_841a813bb381e7b9becaa0765b3857696c34b5fd392b0d17f3e844fe2517ecfb->enter($__internal_841a813bb381e7b9becaa0765b3857696c34b5fd392b0d17f3e844fe2517ecfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_841a813bb381e7b9becaa0765b3857696c34b5fd392b0d17f3e844fe2517ecfb->leave($__internal_841a813bb381e7b9becaa0765b3857696c34b5fd392b0d17f3e844fe2517ecfb_prof);

        
        $__internal_fc02bc8ae9471fca4249d1a0d454b078cfdd334f81c5c6be3ee3af79dae8ff8b->leave($__internal_fc02bc8ae9471fca4249d1a0d454b078cfdd334f81c5c6be3ee3af79dae8ff8b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d5d9a235995388cd93e65a1fd4024082d7218e4cac4c176950f78bb967eda86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d5d9a235995388cd93e65a1fd4024082d7218e4cac4c176950f78bb967eda86->enter($__internal_2d5d9a235995388cd93e65a1fd4024082d7218e4cac4c176950f78bb967eda86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_863fdbdedca6adc37ffca888d8d6f15636a921173cdd54379954a7c67805a831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_863fdbdedca6adc37ffca888d8d6f15636a921173cdd54379954a7c67805a831->enter($__internal_863fdbdedca6adc37ffca888d8d6f15636a921173cdd54379954a7c67805a831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_863fdbdedca6adc37ffca888d8d6f15636a921173cdd54379954a7c67805a831->leave($__internal_863fdbdedca6adc37ffca888d8d6f15636a921173cdd54379954a7c67805a831_prof);

        
        $__internal_2d5d9a235995388cd93e65a1fd4024082d7218e4cac4c176950f78bb967eda86->leave($__internal_2d5d9a235995388cd93e65a1fd4024082d7218e4cac4c176950f78bb967eda86_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
