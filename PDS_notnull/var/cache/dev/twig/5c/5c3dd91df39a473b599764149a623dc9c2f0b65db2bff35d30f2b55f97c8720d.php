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
        $__internal_b40200914aa96c5d866489d54eaae514abe05d5a3857bac9cd713514ae31bdef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b40200914aa96c5d866489d54eaae514abe05d5a3857bac9cd713514ae31bdef->enter($__internal_b40200914aa96c5d866489d54eaae514abe05d5a3857bac9cd713514ae31bdef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_338d628f665442c52edf1840e0b7484d095225c9fcbda9070c990accaba13bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_338d628f665442c52edf1840e0b7484d095225c9fcbda9070c990accaba13bda->enter($__internal_338d628f665442c52edf1840e0b7484d095225c9fcbda9070c990accaba13bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b40200914aa96c5d866489d54eaae514abe05d5a3857bac9cd713514ae31bdef->leave($__internal_b40200914aa96c5d866489d54eaae514abe05d5a3857bac9cd713514ae31bdef_prof);

        
        $__internal_338d628f665442c52edf1840e0b7484d095225c9fcbda9070c990accaba13bda->leave($__internal_338d628f665442c52edf1840e0b7484d095225c9fcbda9070c990accaba13bda_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b622c2bf8fa1f30cf81969338b5f31ab9d543451b2da6aaeefed353b2bfbbb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b622c2bf8fa1f30cf81969338b5f31ab9d543451b2da6aaeefed353b2bfbbb4->enter($__internal_5b622c2bf8fa1f30cf81969338b5f31ab9d543451b2da6aaeefed353b2bfbbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c4b4f2a5c42375c9ebae4a16927d65cac9549c311bb71466f9bcff3612530f92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4b4f2a5c42375c9ebae4a16927d65cac9549c311bb71466f9bcff3612530f92->enter($__internal_c4b4f2a5c42375c9ebae4a16927d65cac9549c311bb71466f9bcff3612530f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c4b4f2a5c42375c9ebae4a16927d65cac9549c311bb71466f9bcff3612530f92->leave($__internal_c4b4f2a5c42375c9ebae4a16927d65cac9549c311bb71466f9bcff3612530f92_prof);

        
        $__internal_5b622c2bf8fa1f30cf81969338b5f31ab9d543451b2da6aaeefed353b2bfbbb4->leave($__internal_5b622c2bf8fa1f30cf81969338b5f31ab9d543451b2da6aaeefed353b2bfbbb4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a4bbc049f9f725615f6f15af3e7dfd28890b74785c4818c04eb298f1beefd97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a4bbc049f9f725615f6f15af3e7dfd28890b74785c4818c04eb298f1beefd97->enter($__internal_3a4bbc049f9f725615f6f15af3e7dfd28890b74785c4818c04eb298f1beefd97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_999961ece25e96d8a029594858ec5fc5d568e4216f79fdd4e31fabc5649dd2cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_999961ece25e96d8a029594858ec5fc5d568e4216f79fdd4e31fabc5649dd2cb->enter($__internal_999961ece25e96d8a029594858ec5fc5d568e4216f79fdd4e31fabc5649dd2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_999961ece25e96d8a029594858ec5fc5d568e4216f79fdd4e31fabc5649dd2cb->leave($__internal_999961ece25e96d8a029594858ec5fc5d568e4216f79fdd4e31fabc5649dd2cb_prof);

        
        $__internal_3a4bbc049f9f725615f6f15af3e7dfd28890b74785c4818c04eb298f1beefd97->leave($__internal_3a4bbc049f9f725615f6f15af3e7dfd28890b74785c4818c04eb298f1beefd97_prof);

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
