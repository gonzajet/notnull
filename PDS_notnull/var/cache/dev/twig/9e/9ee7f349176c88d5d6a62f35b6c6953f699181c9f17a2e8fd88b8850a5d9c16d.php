<?php

/* AppBundle:Auto:index.html.twig */
class __TwigTemplate_57105576a50603f98cf58ae332a0926a6e0082a18ae5709482084a9fdd08a462 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Auto:index.html.twig", 1);
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
        $__internal_10dba705e451c432dc7d0bd236ff938f81fba71bc93cb3d43784c2bf5602bba0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10dba705e451c432dc7d0bd236ff938f81fba71bc93cb3d43784c2bf5602bba0->enter($__internal_10dba705e451c432dc7d0bd236ff938f81fba71bc93cb3d43784c2bf5602bba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Auto:index.html.twig"));

        $__internal_c03b3bbb5a741410d910b5cd264673c321463b13337c55b3868ca0bb0c6e8596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c03b3bbb5a741410d910b5cd264673c321463b13337c55b3868ca0bb0c6e8596->enter($__internal_c03b3bbb5a741410d910b5cd264673c321463b13337c55b3868ca0bb0c6e8596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Auto:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10dba705e451c432dc7d0bd236ff938f81fba71bc93cb3d43784c2bf5602bba0->leave($__internal_10dba705e451c432dc7d0bd236ff938f81fba71bc93cb3d43784c2bf5602bba0_prof);

        
        $__internal_c03b3bbb5a741410d910b5cd264673c321463b13337c55b3868ca0bb0c6e8596->leave($__internal_c03b3bbb5a741410d910b5cd264673c321463b13337c55b3868ca0bb0c6e8596_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0dec1336b28e1f884d94d29e40b2109d41687180011d264167440dbc5a7cb0b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dec1336b28e1f884d94d29e40b2109d41687180011d264167440dbc5a7cb0b0->enter($__internal_0dec1336b28e1f884d94d29e40b2109d41687180011d264167440dbc5a7cb0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e371c9b8ff760fc896537afdae5d0fb7d44aadd0ee6f98ef399f4f74231a6c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e371c9b8ff760fc896537afdae5d0fb7d44aadd0ee6f98ef399f4f74231a6c84->enter($__internal_e371c9b8ff760fc896537afdae5d0fb7d44aadd0ee6f98ef399f4f74231a6c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Auto:index";
        
        $__internal_e371c9b8ff760fc896537afdae5d0fb7d44aadd0ee6f98ef399f4f74231a6c84->leave($__internal_e371c9b8ff760fc896537afdae5d0fb7d44aadd0ee6f98ef399f4f74231a6c84_prof);

        
        $__internal_0dec1336b28e1f884d94d29e40b2109d41687180011d264167440dbc5a7cb0b0->leave($__internal_0dec1336b28e1f884d94d29e40b2109d41687180011d264167440dbc5a7cb0b0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d01861dfc244aec2c6433fbfe863c60edeeddfb191c5c959d5c54cf8ca38b497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d01861dfc244aec2c6433fbfe863c60edeeddfb191c5c959d5c54cf8ca38b497->enter($__internal_d01861dfc244aec2c6433fbfe863c60edeeddfb191c5c959d5c54cf8ca38b497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c1dd209054bd0a9744cedce42bc7b5366ae58dc6e027edb78122f151dbedf62d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1dd209054bd0a9744cedce42bc7b5366ae58dc6e027edb78122f151dbedf62d->enter($__internal_c1dd209054bd0a9744cedce42bc7b5366ae58dc6e027edb78122f151dbedf62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Auto:index page</h1>
";
        
        $__internal_c1dd209054bd0a9744cedce42bc7b5366ae58dc6e027edb78122f151dbedf62d->leave($__internal_c1dd209054bd0a9744cedce42bc7b5366ae58dc6e027edb78122f151dbedf62d_prof);

        
        $__internal_d01861dfc244aec2c6433fbfe863c60edeeddfb191c5c959d5c54cf8ca38b497->leave($__internal_d01861dfc244aec2c6433fbfe863c60edeeddfb191c5c959d5c54cf8ca38b497_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Auto:index.html.twig";
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
", "AppBundle:Auto:index.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\src\\AppBundle/Resources/views/Auto/index.html.twig");
    }
}
