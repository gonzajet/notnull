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
        $__internal_ef6ad02b75284d4f9d8fb8c8ff08a4b99c476645af17a8678a480bf50741a6cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef6ad02b75284d4f9d8fb8c8ff08a4b99c476645af17a8678a480bf50741a6cf->enter($__internal_ef6ad02b75284d4f9d8fb8c8ff08a4b99c476645af17a8678a480bf50741a6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Auto/index.html.twig"));

        $__internal_aee3ef2b439ed067cda6c1ed4064b290685ae4a0453f4379af815e628fb23b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee3ef2b439ed067cda6c1ed4064b290685ae4a0453f4379af815e628fb23b9d->enter($__internal_aee3ef2b439ed067cda6c1ed4064b290685ae4a0453f4379af815e628fb23b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Auto/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef6ad02b75284d4f9d8fb8c8ff08a4b99c476645af17a8678a480bf50741a6cf->leave($__internal_ef6ad02b75284d4f9d8fb8c8ff08a4b99c476645af17a8678a480bf50741a6cf_prof);

        
        $__internal_aee3ef2b439ed067cda6c1ed4064b290685ae4a0453f4379af815e628fb23b9d->leave($__internal_aee3ef2b439ed067cda6c1ed4064b290685ae4a0453f4379af815e628fb23b9d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_99c06d4f60c97f89e4f60b34caa9f721325e5969e143359638655b86d3b98bdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99c06d4f60c97f89e4f60b34caa9f721325e5969e143359638655b86d3b98bdd->enter($__internal_99c06d4f60c97f89e4f60b34caa9f721325e5969e143359638655b86d3b98bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_01d9814905ea3bcbc7f02b8b9798914119448074209c7f3b947159d166b96b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01d9814905ea3bcbc7f02b8b9798914119448074209c7f3b947159d166b96b23->enter($__internal_01d9814905ea3bcbc7f02b8b9798914119448074209c7f3b947159d166b96b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Auto:index";
        
        $__internal_01d9814905ea3bcbc7f02b8b9798914119448074209c7f3b947159d166b96b23->leave($__internal_01d9814905ea3bcbc7f02b8b9798914119448074209c7f3b947159d166b96b23_prof);

        
        $__internal_99c06d4f60c97f89e4f60b34caa9f721325e5969e143359638655b86d3b98bdd->leave($__internal_99c06d4f60c97f89e4f60b34caa9f721325e5969e143359638655b86d3b98bdd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_25e6636c0fa1b635c0f1bbc097b2545ea4220d43e0acaf463481ad408b00ac3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25e6636c0fa1b635c0f1bbc097b2545ea4220d43e0acaf463481ad408b00ac3d->enter($__internal_25e6636c0fa1b635c0f1bbc097b2545ea4220d43e0acaf463481ad408b00ac3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd8d07ffb4f48f1d8a53aecf157c7bbbbca97f58f25dedd21871697f75ed0141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd8d07ffb4f48f1d8a53aecf157c7bbbbca97f58f25dedd21871697f75ed0141->enter($__internal_cd8d07ffb4f48f1d8a53aecf157c7bbbbca97f58f25dedd21871697f75ed0141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Auto:index page</h1>
";
        
        $__internal_cd8d07ffb4f48f1d8a53aecf157c7bbbbca97f58f25dedd21871697f75ed0141->leave($__internal_cd8d07ffb4f48f1d8a53aecf157c7bbbbca97f58f25dedd21871697f75ed0141_prof);

        
        $__internal_25e6636c0fa1b635c0f1bbc097b2545ea4220d43e0acaf463481ad408b00ac3d->leave($__internal_25e6636c0fa1b635c0f1bbc097b2545ea4220d43e0acaf463481ad408b00ac3d_prof);

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
