<?php

/* @App/Auto/index.html.twig */
class __TwigTemplate_ce9c38d14d905217088f2c1c56a46039380519e592d659dd42d6eaeea987d1cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@App/Auto/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9716dad9500933fffd555e69532ebc27b59f0c402bfffa4efe15ca3b8ebf48b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9716dad9500933fffd555e69532ebc27b59f0c402bfffa4efe15ca3b8ebf48b->enter($__internal_b9716dad9500933fffd555e69532ebc27b59f0c402bfffa4efe15ca3b8ebf48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Auto/index.html.twig"));

        $__internal_dd4d961b501fb54b5ec67ca46d7b554c634c30da6f33bb4f0eb9f50481c25af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd4d961b501fb54b5ec67ca46d7b554c634c30da6f33bb4f0eb9f50481c25af8->enter($__internal_dd4d961b501fb54b5ec67ca46d7b554c634c30da6f33bb4f0eb9f50481c25af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Auto/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9716dad9500933fffd555e69532ebc27b59f0c402bfffa4efe15ca3b8ebf48b->leave($__internal_b9716dad9500933fffd555e69532ebc27b59f0c402bfffa4efe15ca3b8ebf48b_prof);

        
        $__internal_dd4d961b501fb54b5ec67ca46d7b554c634c30da6f33bb4f0eb9f50481c25af8->leave($__internal_dd4d961b501fb54b5ec67ca46d7b554c634c30da6f33bb4f0eb9f50481c25af8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a96d5d6226c594472e0632a327477483099f26d03ef705621451b9c3bc79dbad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a96d5d6226c594472e0632a327477483099f26d03ef705621451b9c3bc79dbad->enter($__internal_a96d5d6226c594472e0632a327477483099f26d03ef705621451b9c3bc79dbad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bdf88df7f2f82583ec43cced24a165013246186a29133ceee0c3d67160a6c1c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdf88df7f2f82583ec43cced24a165013246186a29133ceee0c3d67160a6c1c2->enter($__internal_bdf88df7f2f82583ec43cced24a165013246186a29133ceee0c3d67160a6c1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Auto:index";
        
        $__internal_bdf88df7f2f82583ec43cced24a165013246186a29133ceee0c3d67160a6c1c2->leave($__internal_bdf88df7f2f82583ec43cced24a165013246186a29133ceee0c3d67160a6c1c2_prof);

        
        $__internal_a96d5d6226c594472e0632a327477483099f26d03ef705621451b9c3bc79dbad->leave($__internal_a96d5d6226c594472e0632a327477483099f26d03ef705621451b9c3bc79dbad_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2348438a8833b1593868fb1043ce2bbac6e52ceb162b3e8718766300897b443e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2348438a8833b1593868fb1043ce2bbac6e52ceb162b3e8718766300897b443e->enter($__internal_2348438a8833b1593868fb1043ce2bbac6e52ceb162b3e8718766300897b443e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_09f129d64115bed2b83a9ac1a077f882bc4f3115ea2747e298055cb73ab33e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f129d64115bed2b83a9ac1a077f882bc4f3115ea2747e298055cb73ab33e13->enter($__internal_09f129d64115bed2b83a9ac1a077f882bc4f3115ea2747e298055cb73ab33e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Auto:index page</h1>
";
        
        $__internal_09f129d64115bed2b83a9ac1a077f882bc4f3115ea2747e298055cb73ab33e13->leave($__internal_09f129d64115bed2b83a9ac1a077f882bc4f3115ea2747e298055cb73ab33e13_prof);

        
        $__internal_2348438a8833b1593868fb1043ce2bbac6e52ceb162b3e8718766300897b443e->leave($__internal_2348438a8833b1593868fb1043ce2bbac6e52ceb162b3e8718766300897b443e_prof);

    }

    public function getTemplateName()
    {
        return "@App/Auto/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AppBundle:Auto:index{% endblock %}

{% block body %}
<h1>Welcome to the Auto:index page</h1>
{% endblock %}
", "@App/Auto/index.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\src\\AppBundle\\Resources\\views\\Auto\\index.html.twig");
    }
}
